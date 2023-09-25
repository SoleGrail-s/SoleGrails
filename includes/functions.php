<?php

function create_hash($string)
	{
		return sha1($string);
	}

function get_action_attr_value_for_current_page($query="")
{
	$query = $query === "" ? $query : "?$query";
	return preg_replace("/index\.php|index|\.php$/", "", htmlspecialchars($_SERVER["PHP_SELF"])) . $query;
}

function redirect_to_current_page($query="")
{
	echo "<script>window.location='".preg_replace("/index\.php|index|\.php$/", "", htmlspecialchars($_SERVER["PHP_SELF"]))."?$query';</script>";
	exit(0);
}

function create_token()
{
	return md5(uniqid(rand(), true));
}

function view_prompts()
	{
		require_once($_SERVER["DOCUMENT_ROOT"]."/includes/prompts.php");
	}

function is_email_address_available_in_users_table($email_id){
	global $db;
	$sql = "SELECT COUNT(1) AS 'count' FROM users WHERE email_id = :email_id";
	$stmt = $db->prepare($sql);
	$stmt->bindParam(":email_id", $email_id, PDO::PARAM_STR);
	if($stmt->execute()){
		return $stmt->fetch(PDO::FETCH_ASSOC)["count"] > 0 ? true : false;
	}
	return false;
}

function user_registration($data){
	global $db;
	extract($data);
	$email_id = htmlspecialchars(trim($email_id));

	if(filter_var($email_id, FILTER_VALIDATE_EMAIL) === false)
	{
		$_SESSION["error_messages"][] = "Invalid email address, Please enter vaild email address.";
	}

	if(is_email_address_available_in_users_table($email_id) === true)
	{
		$_SESSION["error_messages"][] = "This email address is already registered.";	
	}

	if($password !== $confirm_password)
	{
		$_SESSION["error_messages"][] = "Password and Confirm Password does not match.";	
	}

	if(!isset($_SESSION["error_messages"])){
		$password = create_hash($password);
		$token = create_token();
		$sql = "INSERT INTO users (email_id, password, email_id_veri, token) VALUES (:email_id, :password, '1', :token)";
		$stmt = $db->prepare($sql);
		$stmt->bindParam(":email_id", $email_id, PDO::PARAM_STR);
		$stmt->bindParam(":password", $password, PDO::PARAM_STR);
		$stmt->bindParam(":token", $token, PDO::PARAM_STR);

		if($stmt->execute()){
			$user_id = $db->lastInsertId();
			$sql = "INSERT INTO users_details (user_id, email_id) VALUES (:user_id, :email_id)";
			$stmt = $db->prepare($sql);
			$stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
			$stmt->bindParam(":email_id", $email_id, PDO::PARAM_STR);
			$stmt->execute();
			return true;
		}
		else
		{
			$_SESSION["error_messages"][] = "Sorry, something went wrong creating your account, Please try again soon.";	
		}
	}
	return false;
}

function login($data){
	global $db;
	extract($data);
	$email_id = htmlspecialchars(trim($email_id));
	$password = create_hash($password);

	$sql = "SELECT user_id , role FROM users WHERE email_id = :email_id AND password = :password";
	$stmt = $db->prepare($sql);
	$stmt->bindParam(':email_id', $email_id, PDO::PARAM_STR);
	$stmt->bindParam(':password', $password, PDO::PARAM_STR);

	if($stmt->execute())
	{
		if ($stmt->rowCount() > 0)
		{
			$result = $stmt->fetch(PDO::FETCH_ASSOC);
			$_SESSION["user_id"] = $result["user_id"];
			$_SESSION["role"] = $result["role"];
			return true;
		}
	}
	$_SESSION["error_messages"][] = "Invalid Email or Password";
	return false;
}

function display_sneakers()
	{
		global $db;
		$sql = "SELECT * FROM products";
		$stmt = $db->prepare($sql);

		if( $stmt->execute() )
		{
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
		return false;
	}

	function get_user_list_from_users()
	{
		global $db;

		$sql = "SELECT * FROM users_details WHERE role = 'user'";
		$stmt = $db->prepare($sql);

		if ($stmt->execute())
		{
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
		return false;
	}

	function get_products_list()
	{
		global $db;

		$sql = "SELECT * FROM products";
		$stmt = $db->prepare($sql);

		if ($stmt->execute())
		{
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
		return false;
	}

	function does_brand_already_exist($brand_name)
	{
		global $db;
		$sql = "SELECT COUNT(1) as 'count' FROM brands WHERE brand_name = :brand_name AND deleted = '0'";
		$stmt = $db->prepare($sql);
		$stmt->bindParam(':brand_name', $brand_name, PDO::PARAM_STR);

		if($stmt->execute())
		{
			$result=$stmt->fetch(PDO::FETCH_ASSOC)["count"];
			return $result> 0 ? true : false;
		}
		return false;
	}

	function get_brand_names()
 	{
  		global $db;
  		$sql = "SELECT * FROM brands WHERE deleted = '0'";
 	 	$stmt = $db->prepare($sql);
  		
		if($stmt->execute())
  		{
   			return $stmt->fetchAll(PDO::FETCH_ASSOC);
  		}
  		return false;
 	}
	 function get_brand_by_id($brand_id)
	 {
		 global $db;
		 $sql = "SELECT * FROM brands WHERE brand_id = $brand_id";
		 $stmt = $db->prepare($sql);
 
		 if($stmt->execute())
		 {
			 return $stmt->fetch(PDO::FETCH_ASSOC);
		 }
		 return false;
	 }
	 function delete_brand_by_id($brand_id)
	{
		global $db;
		$sql = "UPDATE brands SET deleted = '1', deleted_timestamp = NOW() WHERE brand_id = :brand_id";
		$stmt = $db->prepare($sql);
		$stmt->bindParam(':id', $brand_id, PDO::PARAM_INT);

		if($stmt->execute())
		{
			$_SESSION["success_messages"][] = "Deleted Successfully.";
			return true;
		}
		return false;
	}
	function edit_brand_by_id($brand_name, $brand_id)
	{
		global $db;
		$sql = "UPDATE brands SET brand_name = :brand_name, modified_timestamp = NOW() WHERE brand_id = :id";
		$stmt = $db->prepare($sql);
		$stmt->bindParam(':id', $brand_id, PDO::PARAM_INT);
		$stmt->bindParam(':brand_name', $brand_name, PDO::PARAM_STR);

		if($stmt->execute())
		{	
			$_SESSION["success_messages"][] = "Updated Successfully.";
			return true;
		}
		return false;
	}
	 function delete_brand($brand_id)
	 {
		 global $db;
		 $sql = "UPDATE brands SET deleted = '1', deleted_timestamp = NOW() WHERE brand_id = :id";
		 $stmt = $db->prepare($sql);
		 $stmt->bindParam(':id', $brand_id, PDO::PARAM_INT);
 
		 if($stmt->execute())
		 {
			 $_SESSION["success_messages"][] = "Deleted Successfully.";
			 return true;
		 }
		 return false;
	 }
	 function brand_status($disabled, $brand_id)
	{
		global $db;
		$sql = "UPDATE brands SET disabled = '$disabled', modified_timestamp = NOW() WHERE brand_id = :id";
		$stmt = $db->prepare($sql);
		$stmt->bindParam(':id', $brand_id, PDO::PARAM_INT);

		if($stmt->execute())
		{	
			$_SESSION["success_messages"][] = "Update Successfully.";
			return true;
		}
		return false;
	}
	function add_brand_name($data)
	{
		global $db;
		extract($data);

		if (does_brand_already_exist($add_brand) === true)
		{
			$_SESSION["error_messages"][] = "This record already exists.";
		}
		
		if (!isset($_SESSION["error_messages"]))
		{
			$sql = "INSERT INTO brands (brand_name,disabled,deleted) VALUES (:new_brand_name,'0','0')";
			$stmt = $db->prepare($sql);
			$stmt->bindParam(':new_brand_name', $new_brand_name, PDO::PARAM_STR);
			
			if ($stmt->execute())
			{
				$_SESSION["success_messages"][] = "Brand added Successfully.";
				return true;
			}
		}
		return false;
	}
?>
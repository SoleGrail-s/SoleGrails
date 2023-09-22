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


?>
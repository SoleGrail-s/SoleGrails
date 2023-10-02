<?php

function create_hash($string)
{
	return sha1($string);
}

function get_action_attr_value_for_current_page($query = "")
{
	$query = $query === "" ? $query : "?$query";
	return preg_replace("/index\.php|index|\.php$/", "", htmlspecialchars($_SERVER["PHP_SELF"])) . $query;
}

function redirect_to_current_page($query = "")
{
	echo "<script>window.location='" . preg_replace("/index\.php|index|\.php$/", "", htmlspecialchars($_SERVER["PHP_SELF"])) . "?$query';</script>";
	exit(0);
}

function create_token()
{
	return md5(uniqid(rand(), true));
}

function view_prompts()
{
	require_once($_SERVER["DOCUMENT_ROOT"] . "/includes/prompts.php");
}

function is_email_address_available_in_users_table($email_id)
{
	global $db;
	$sql = "SELECT COUNT(1) AS 'count' FROM users WHERE email_id = :email_id";
	$stmt = $db->prepare($sql);
	$stmt->bindParam(":email_id", $email_id, PDO::PARAM_STR);
	if ($stmt->execute()) {
		return $stmt->fetch(PDO::FETCH_ASSOC)["count"] > 0 ? true : false;
	}
	return false;
}

function user_registration($data)
{
	global $db;
	extract($data);
	$email_id = htmlspecialchars(trim($email_id));

	if (filter_var($email_id, FILTER_VALIDATE_EMAIL) === false) {
		$_SESSION["error_messages"][] = "Invalid email address, Please enter vaild email address.";
	}

	if (is_email_address_available_in_users_table($email_id) === true) {
		$_SESSION["error_messages"][] = "This email address is already registered.";
	}

	if ($password !== $confirm_password) {
		$_SESSION["error_messages"][] = "Password and Confirm Password does not match.";
	}

	if (!isset($_SESSION["error_messages"])) {
		$password = create_hash($password);
		$token = create_token();
		$sql = "INSERT INTO users (email_id, password, email_id_veri, token) VALUES (:email_id, :password, '1', :token)";
		$stmt = $db->prepare($sql);
		$stmt->bindParam(":email_id", $email_id, PDO::PARAM_STR);
		$stmt->bindParam(":password", $password, PDO::PARAM_STR);
		$stmt->bindParam(":token", $token, PDO::PARAM_STR);

		if ($stmt->execute()) {
			$user_id = $db->lastInsertId();
			$sql = "INSERT INTO users_details (user_id, email_id) VALUES (:user_id, :email_id)";
			$stmt = $db->prepare($sql);
			$stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
			$stmt->bindParam(":email_id", $email_id, PDO::PARAM_STR);
			$stmt->execute();
			return true;
		} else {
			$_SESSION["error_messages"][] = "Sorry, something went wrong creating your account, Please try again soon.";
		}
	}
	return false;
}

function login($data)
{
	global $db;
	extract($data);
	$email_id = htmlspecialchars(trim($email_id));
	$password = create_hash($password);

	$sql = "SELECT user_id , role FROM users WHERE email_id = :email_id AND password = :password";
	$stmt = $db->prepare($sql);
	$stmt->bindParam(':email_id', $email_id, PDO::PARAM_STR);
	$stmt->bindParam(':password', $password, PDO::PARAM_STR);

	if ($stmt->execute()) {
		if ($stmt->rowCount() > 0) {
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

	if ($stmt->execute()) {
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	return false;
}

function get_user_list_from_users()
{
	global $db;

	$sql = "SELECT * FROM users_details WHERE role = 'user'";
	$stmt = $db->prepare($sql);

	if ($stmt->execute()) {
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	return false;
}

function get_products_list()
{
	global $db;

	$sql = "SELECT * FROM products WHERE delete_product = '0'";
	$stmt = $db->prepare($sql);

	if ($stmt->execute()) {
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

	if ($stmt->execute()) {
		$result = $stmt->fetch(PDO::FETCH_ASSOC)["count"];
		return $result > 0 ? true : false;
	}
	return false;
}

function get_brand_names()
{
	global $db;
	$sql = "SELECT * FROM brands WHERE deleted = '0'";
	$stmt = $db->prepare($sql);

	if ($stmt->execute()) {
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	return false;
}
function get_brand_by_id($brand_id)
{
	global $db;
	$sql = "SELECT * FROM brands WHERE brand_id = $brand_id";
	$stmt = $db->prepare($sql);

	if ($stmt->execute()) {
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	return false;
}
function delete_brand_by_id($brand_id)
{
	global $db;
	$sql = "UPDATE brands SET deleted = '1' WHERE brand_id = :brand_id";
	$stmt = $db->prepare($sql);
	$stmt->bindParam(':id', $brand_id, PDO::PARAM_INT);

	if ($stmt->execute()) {
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

	if ($stmt->execute()) {
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

	if ($stmt->execute()) {
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

	if ($stmt->execute()) {
		$_SESSION["success_messages"][] = "Update Successfully.";
		return true;
	}
	return false;
}
function add_brand_name($data)
{
	global $db;
	extract($data);

	if (does_brand_already_exist($add_brand) === true) {
		$_SESSION["error_messages"][] = "This record already exists.";
	}

	if (!isset($_SESSION["error_messages"])) {
		$sql = "INSERT INTO brands (brand_name,disabled,deleted) VALUES (:new_brand_name,'0','0')";
		$stmt = $db->prepare($sql);
		$stmt->bindParam(':new_brand_name', $new_brand_name, PDO::PARAM_STR);

		if ($stmt->execute()) {
			$_SESSION["success_messages"][] = "Brand added Successfully.";
			return true;
		}
	}
	return false;
}

// customer details admin side

function get_user_details_by_passing_id($id)
{
	global $db;
	$sql = "SELECT * FROM users_details WHERE user_id = $id";
	$stmt = $db->prepare($sql);

	if ($stmt->execute()) {
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	return false;
}


// product details admin side 
function get_product_details_by_passing_id($id)
{
	global $db;
	$sql = "SELECT * FROM products WHERE id = $id";
	$stmt = $db->prepare($sql);

	if ($stmt->execute()) {
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	return false;
}

function delete_product($product_id)
{
	global $db;
	$sql = "UPDATE products SET delete_product = '1', deleted_timestamp = NOW() WHERE id = :id";
	$stmt = $db->prepare($sql);
	$stmt->bindParam(':id', $product_id, PDO::PARAM_INT);

	if ($stmt->execute()) {
		$_SESSION["success_messages"][] = "Product Deleted Successfully.";
		return true;
	}
	return false;
}
function does_product_already_exist($product)
{
	global $db;
	$sql = "SELECT COUNT(1) as 'count' FROM products WHERE pro_name = :pro_name AND deleted = '0'";
	$stmt = $db->prepare($sql);
	$stmt->bindParam(':pro_name', $product, PDO::PARAM_STR);

	if ($stmt->execute()) {
		$result = $stmt->fetch(PDO::FETCH_ASSOC)["count"];
		return $result > 0 ? true : false;
	}
	return false;
}

function add_sfdproduct($product)
{
	global $db;
	extract($data);

	if (does_product_already_exist($add_sdcscproduct) === true) {
		$_SESSION["error_messages"][] = "This record already exists.";
	}

	if (!isset($_SESSION["error_messages"])) {
		$sql = "INSERT INTO products (pro_name,deleted) VALUES (:new_pro_name,'0')";
		$stmt = $db->prepare($sql);
		$stmt->bindParam(':new_pro_name', $new_pro_name, PDO::PARAM_STR);

		if ($stmt->execute()) {
			$_SESSION["success_messages"][] = "Brand added Successfully.";
			return true;
		}
	}
	return false;
}
function get_top_type()
{
	global $db;
	$sql = "SELECT * FROM top_types";
	$stmt = $db->prepare($sql);

	if ($stmt->execute()) {
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	return false;
}
function get_gender()
{
	global $db;
	$sql = "SELECT * FROM gender";
	$stmt = $db->prepare($sql);

	if ($stmt->execute()) {
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	return false;
}
function get_release_yr()
{
	global $db;
	$sql = "SELECT * FROM release_yr";
	$stmt = $db->prepare($sql);

	if ($stmt->execute()) {
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	return false;
}

function get_sizes()
{
	global $db;
	$sql = "SELECT * FROM sizes";
	$stmt = $db->prepare($sql);

	if ($stmt->execute()) {
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	return false;
}

function add_product($data)
{
	global $db;
	extract($data);

	if (!isset($_SESSION["error_messages"])) {
		$image_folder = "C:/xampp/htdocs/SoleGrails/assets/img/";

		$l_profile = upload_image("l_profile", $image_folder);
		$r_profile = upload_image("r_profile", $image_folder);
		$t_profile = upload_image("t_profile", $image_folder);
		$full_profile = upload_image("full_profile", $image_folder);
		$sole_profile = upload_image("sole_profile", $image_folder);

		$sql = "INSERT INTO products (pro_name, brand, price, release_yr,  top_type, gender, specification, l_profile, r_profile, t_profile, full_profile, sole_profile, delete_product) VALUES (:pro_name, :brand, :price, :release_yr,  :top_type, :gender, :specification, :l_profile, :r_profile, :t_profile, :full_profile, :sole_profile, '0')";
		$stmt = $db->prepare($sql);
		$stmt->bindParam(':pro_name', $pro_name, PDO::PARAM_STR);
		$stmt->bindParam(':brand', $brand, PDO::PARAM_STR);
		$stmt->bindParam(':price', $price, PDO::PARAM_INT);
		$stmt->bindParam(':release_yr', $release_yr, PDO::PARAM_INT);
		// $stmt->bindParam(':sizes', $sizes, PDO::PARAM_STR);
		$stmt->bindParam(':top_type', $top_type, PDO::PARAM_STR);
		$stmt->bindParam(':gender', $gender, PDO::PARAM_STR);
		$stmt->bindParam(':specification', $specification, PDO::PARAM_STR);
		$stmt->bindParam(':l_profile', $l_profile, PDO::PARAM_STR);
		$stmt->bindParam(':r_profile', $r_profile, PDO::PARAM_STR);
		$stmt->bindParam(':t_profile', $t_profile, PDO::PARAM_STR);
		$stmt->bindParam(':full_profile', $full_profile, PDO::PARAM_STR);
		$stmt->bindParam(':sole_profile', $sole_profile, PDO::PARAM_STR);

		if ($stmt->execute()) {
			$_SESSION["success_messages"][] = "Product Uploaded Successfully.";
			return true;
		}
	}
	return false;
}

function upload_image($input_name, $image_folder)
{
	if (isset($_FILES[$input_name]) && !empty($_FILES[$input_name]["name"])) {
		$file_name = $_FILES[$input_name]["name"];
		$temp_name = $_FILES[$input_name]["tmp_name"];
		$target_path = $image_folder . $file_name;

		if (move_uploaded_file($temp_name, $target_path)) {
			return $target_path;
		} else {
			$_SESSION["error_messages"][] = "Failed to upload $input_name image.";
		}
	}
	return null;
}

function edit_product($id, $pro_name, $brand, $price, $release_yr, $top_type, $gender, $specification, $l_profile, $r_profile, $t_profile, $full_profile, $sole_profile)
{
	global $db;

	if (!isset($_SESSION["error_messages"])) {
		$image_folder = "C:/xampp/htdocs/SoleGrails/assets/img/";

		$l_profile = upload_image("l_profile", $image_folder);
		$r_profile = upload_image("r_profile", $image_folder);
		$t_profile = upload_image("t_profile", $image_folder);
		$full_profile = upload_image("full_profile", $image_folder);
		$sole_profile = upload_image("sole_profile", $image_folder);

		$sql = "UPDATE products SET pro_name = :pro_name, brand = :brand, price = :price, release_yr = :release_yr, top_type = :top_type, gender = :gender, specification = :specification, l_profile = :l_profile, r_profile = :r_profile, t_profile = :t_profile, full_profile = :full_profile, sole_profile = :sole_profile, modified_timestamp = NOW() WHERE id = :id";
		$stmt = $db->prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->bindParam(':pro_name', $pro_name, PDO::PARAM_STR);
		$stmt->bindParam(':brand', $brand, PDO::PARAM_STR);
		$stmt->bindParam(':price', $price, PDO::PARAM_INT);
		$stmt->bindParam(':release_yr', $release_yr, PDO::PARAM_INT);
		// $stmt->bindParam(':sizes', $sizes, PDO::PARAM_STR);
		$stmt->bindParam(':top_type', $top_type, PDO::PARAM_STR);
		$stmt->bindParam(':gender', $gender, PDO::PARAM_STR);
		$stmt->bindParam(':specification', $specification, PDO::PARAM_STR);
		$stmt->bindParam(':l_profile', $l_profile, PDO::PARAM_STR);
		$stmt->bindParam(':r_profile', $r_profile, PDO::PARAM_STR);
		$stmt->bindParam(':t_profile', $t_profile, PDO::PARAM_STR);
		$stmt->bindParam(':full_profile', $full_profile, PDO::PARAM_STR);
		$stmt->bindParam(':sole_profile', $sole_profile, PDO::PARAM_STR);

		if ($stmt->execute()) {
			$_SESSION["success_messages"][] = "Product Updated Successfully.";
			return true;
		}
	}
	return false;
}

function update_user_profile_detail($data)
{
	global $db;
	extract($data);

	if (!isset($_SESSION["error_messages"])) {


		$user_id = $_SESSION["user_id"];
		$sql = "UPDATE users_details SET f_name = :f_name, m_name = :m_name, l_name = :l_name, dob = :dob, gender = :gender,   modified_timestamp = NOW() WHERE user_id = :user_id";
		$stmt = $db->prepare($sql);
		$stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
		$stmt->bindParam(':f_name', $f_name, PDO::PARAM_STR);
		$stmt->bindParam(':m_name', $m_name, PDO::PARAM_STR);
		$stmt->bindParam(':l_name', $l_name, PDO::PARAM_STR);
		$stmt->bindParam(':dob', $dob, PDO::PARAM_STR);
		$stmt->bindParam(':gender', $gender, PDO::PARAM_STR);


		if ($stmt->execute()) {
			$_SESSION["success_messages"][] = "Profile Details updated";

		} else {
			$_SESSION["error_messages"][] = "Sorry, something went wrong while updating your account, Please try again soon.";
		}
	}
	return false;
}

function update_user_address_detail($data)
{
	global $db;
	extract($data);

	if (!isset($_SESSION["error_messages"])) {
		$user_id = $_SESSION["user_id"];
		$sql = "UPDATE users_details SET address = :address, landmark = :landmark, state = :state, postal_code = :postal_code, contact_no = :contact_no, alternate_no= :alternate_no , email_id = :email_id, modified_timestamp = NOW() WHERE user_id = :user_id";
		$stmt = $db->prepare($sql);
		$stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
		$stmt->bindParam(':address', $address, PDO::PARAM_STR);
		$stmt->bindParam(':landmark', $landmark, PDO::PARAM_STR);
		$stmt->bindParam(':postal_code', $postal_code, PDO::PARAM_STR);
		$stmt->bindParam(':state', $state, PDO::PARAM_STR);
		$stmt->bindParam(':email_id', $email_id, PDO::PARAM_STR);
		$stmt->bindParam(':contact_no', $contact_no, PDO::PARAM_INT);
		$stmt->bindParam(':alternate_no', $alternate_no, PDO::PARAM_INT);


		if ($stmt->execute()) {
			$_SESSION["success_messages"][] = "Address Details Updated";
		} else {
			$_SESSION["error_messages"][] = "Sorry, something went wrong while updating your account, Please try again soon.";
		}
	}
	return false;
}

function display_user_details_by_id()
{
	global $db;
	$user_id = $_SESSION["user_id"];

	$sql = "SELECT * FROM users_details WHERE user_id = :user_id";
	$stmt = $db->prepare($sql);
	$stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);

	if ($stmt->execute()) {
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	return false;
}

function get_sneakers_by_id($id)
{
	global $db;
	$sql = "SELECT * FROM products WHERE id = $id";
	$stmt = $db->prepare($sql);

	if ($stmt->execute()) {
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	return false;
}

function add_to_cart($id)
{
    global $db;
    $user_id = $_SESSION["user_id"];
    
    // Checking if the item is already in the cart
    $check_sql = "SELECT COUNT(*) FROM cart WHERE user_id = :user_id AND product_id = :id AND `delete` = '0'";
    $check_stmt = $db->prepare($check_sql);
    $check_stmt->bindParam(":user_id", $user_id, PDO::PARAM_INT);
    $check_stmt->bindParam(":id", $id, PDO::PARAM_INT);
    $check_stmt->execute();
    $count = $check_stmt->fetchColumn();

    if ($count > 0) {
        // The item is already in the cart, do not insert again
        $_SESSION["error_messages"][] = " This item is already in the cart.";
        return false;
    }

    // If the item is not in the cart, inserting it
    $sql = "INSERT INTO cart (user_id, product_id, `delete`) VALUES (:user_id, :id, '0')";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(":user_id", $user_id, PDO::PARAM_INT);
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        $_SESSION["success_messages"][] = "Item added to the cart. <a href='/user/cart.php'>Check Here</a>";
        return true;
    }
    
    $_SESSION["error_messages"][] = "Error adding item to the cart.";
    return false;
}

function delete_cart_item($id)
{
	global $db;
	$sql = "UPDATE cart SET `delete` = '1', deleted_timestamp = NOW() WHERE product_id = :id";
	$stmt = $db->prepare($sql);
	$stmt->bindParam(':id', $id, PDO::PARAM_INT);

	if ($stmt->execute()) {
		$_SESSION["success_messages"][] = "Deleted Successfully.";
		return true;
	}
	return false;
}

function get_cart_item($id)
{
	global $db;
	$sql = "SELECT * FROM cart WHERE id = $id";
	$stmt = $db->prepare($sql);

	if ($stmt->execute()) {
		return $stmt->fetch(PDO::FETCH_ASSOC);

	}
	return false;


}

function get_cart_products_by_id()
{
	global $db;
	$user_id = $_SESSION["user_id"];

	$sql = "SELECT * FROM cart WHERE user_id = :user_id AND `delete` = '0' ";
	$stmt = $db->prepare($sql);
	$stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);

	if ($stmt->execute()) {
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	} else {
		return false;
	}
}


function get_orders()
{
	global $db;

	$sql = "SELECT * FROM orders_placed ";
	$stmt = $db->prepare($sql);

	if ($stmt->execute()) {
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	return false;
}
function insert_orders($id)
{
	global $db;
	$user_id = $_SESSION['user_id'];

	$sql = "INSERT INTO orders_placed (user_id, product_id )VALUES (:user_id, :product_id)";
	$stmt = $db->prepare($sql);
	$stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
	$stmt->bindParam(':product_id', $id, PDO::PARAM_INT);

	if ($stmt->execute()) {
		// $_SESSION["success_messages"][] = "Data entered successful";
		return true;
	}
	return false;
}
function get_order_detail_using_id($id)
	{
		global $db;
		$sql = "SELECT * FROM orders_placed WHERE id = :id";
		$stmt = $db->prepare($sql);
		$stmt->bindParam(":id", $id, PDO::PARAM_INT);

		if ($stmt->execute() )
		{
			return $stmt->fetch(PDO::FETCH_ASSOC);
		}
		return false;
	}
	
	function getCartItemCount($userID) {
		global $db;
		$sql = "SELECT COUNT(*) as cart_count FROM cart WHERE user_id = :user_id AND `delete` = '0'";
		$stmt = $db->prepare($sql);
		$stmt->bindParam(':user_id', $userID, PDO::PARAM_INT);
		$stmt->execute();
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
	
		if ($result) {
			return $result['cart_count'];
		} else {
			return 0; // Return 0 if there was an error or no matching records found
		}
	}
	
	function change_password($data)
{
    global $db;
    extract($data);

    if($new_password !== $confirm_password)
    {
        $_SESSION["error_messages"][] = "New password and Confirm Password does not match.";	
    }

    if(!isset($_SESSION["error_messages"]))
    {
        $new_password = create_hash($new_password);
        $user_id = $_SESSION["user_id"];
        $sql = "UPDATE users SET password=:new_password WHERE user_id = $user_id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':new_password', $new_password,PDO::PARAM_STR);
        
        if($stmt->execute())
        {
            $_SESSION["success_messages"][] = "Congratulation, password successfully changed";
            return true;
        }
        else
        {
            $_SESSION["error_messages"][] = "Sorry, password didn't changed.";
        }
    }
    else
    {
        return false;
    }
}

function include_view_messages_file()
{
    require_once($_SERVER["DOCUMENT_ROOT"]."/includes/prompts.php");
}
	
	

?>
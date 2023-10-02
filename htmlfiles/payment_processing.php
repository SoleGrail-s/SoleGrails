<?php
$page_title = "Payment Processing";
require_once($_SERVER["DOCUMENT_ROOT"] . "/includes/init.php");

if (isset($_POST['user_id']) && isset($_POST['product_id']) && isset($_POST['payment_amount'])) {
    $product_id = $_POST['product_id'];
    $user_id = $_POST['user_id'];
    $payment_status = "pending";

    try {
        // Include your database connection script
        require_once("/includes/db.php");

        // Assuming you have $payment_id defined somewhere
        $payment_id = $_POST['payment_id'];

        $stmt = $pdo->prepare("INSERT INTO orders_placed (user_id, product_id, payment_id, payment_status) VALUES (:user_id, :product_id, :payment_id, :payment_status)");
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':product_id', $product_id);
        $stmt->bindParam(':payment_id', $payment_id);
        $stmt->bindParam(':payment_status', $payment_status);
        $stmt->execute();
        $_SESSION['OID'] = $pdo->lastInsertId();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

if (isset($_POST['payment_id']) && isset($_SESSION['OID'])) {
    $payment_id = $_POST['payment_id'];

    try {
        // Include your database connection script
        require_once("/includes/db.php");

        $stmt = $pdo->prepare("UPDATE orders_placed SET payment_status='complete', payment_id=:payment_id WHERE id=:oid");
        $stmt->bindParam(':payment_id', $payment_id);
        $stmt->bindParam(':oid', $_SESSION['OID']);
        $stmt->execute();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

// Redirect to the order_placed.php page
header("/user/order_placed.php?q=" . $product_id);
exit;
?>
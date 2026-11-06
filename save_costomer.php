<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<?php
include 'config.php';

// Qabo xogta foomka Add-ka
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];

// Ku dar database-ka
$sql = "INSERT INTO customers (name, phone, address) VALUES ('$name', '$phone', '$address')";

if(mysqli_query($conn, $sql)) {
    header("Location: customers.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
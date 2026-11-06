
<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<?php
include 'config.php';

if(isset($_POST['update'])) {
    // 1. Soo qabo xogta foomka laga soo buuxiyey
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    // 2. Ku cusboonaysii database-ka (Update Query)
    $sql = "UPDATE customers SET name='$name', phone='$phone', address='$address' WHERE id=$id";

    if(mysqli_query($conn, $sql)) {
        // Haddii uu guulaysto, ku laabo bogga weyn
        header("Location: customers.php");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>
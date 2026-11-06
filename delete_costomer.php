


<?php
include 'config.php';
$id = $_GET['id'];
$query = "DELETE FROM customers WHERE id = $id";
if(mysqli_query($conn, $query)) {
    header("Location: customers.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
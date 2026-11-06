
<?php
include("db.php");

$id = $_GET['id'];

$conn->query("DELETE FROM food_menu WHERE id=$id");

header("Location: menu.php");
?>
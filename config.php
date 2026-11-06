
<?php
// Macluumaadka Database-ka
$host = "localhost:3307";
$user = "root";
$pass = "";
$dbname = "restaurant_management_system"; // Hubi in magacani la mid yahay kan PHPMyAdmin-kaaga

// Isku xirka
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Hubi haddii uu xirmo
if (!$conn) {
    die("Xiriirka database-ka waa uu guuldareystay: " . mysqli_connect_error());
}
?>

<?php
session_start();
include("db.php");
include("header.php");

$id = $_GET['id'];

$data = $conn->query("SELECT * FROM orders WHERE id=$id")->fetch_assoc();
?>

<style>
.box {
    width:400px;
    margin:40px auto;
    background:white;
    padding:25px;
    border-radius:15px;
}
input {
    width:100%;
    padding:10px;
    margin:10px 0;
}
button {
    width:100%;
    padding:10px;
    background:#6a5acd;
    color:white;
    border:none;
}
</style>

<div class="box">

<h2>Edit Order</h2>

<form method="POST">

<input type="number" name="quantity" value="<?php echo $data['quantity']; ?>">

<button name="update">Update</button>

</form>

<?php
if(isset($_POST['update'])){
$qty = $_POST['quantity'];

$conn->query("UPDATE orders SET quantity='$qty' WHERE id=$id");

echo "<script>window.location='orders.php'</script>";
}
?>

</div>
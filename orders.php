










<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>







<?php
session_start();
include("db.php");
include("header.php");
?>

<style>
.container {
    padding: 20px;
}

/* TITLE */
h1 {
    color: #6a5acd;
}

/* BUTTON */
.btn {
    background: linear-gradient(90deg, #84fab0, #8fd3f4);
    padding: 8px 12px;
    border-radius: 8px;
    color: white;
    text-decoration: none;
}

/* TABLE */
table {
    width: 100%;
    margin-top: 20px;
    border-collapse: collapse;
    background: white;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
}

th {
    background: linear-gradient(90deg, #a18cd1, #fbc2eb);
    color: white;
    padding: 12px;
}

td {
    padding: 12px;
    text-align: center;
}

tr:hover {
    background: #f9f9f9;
}

/* STATUS */
.paid {
    color: green;
    font-weight: bold;
}

.unpaid {
    color: red;
    font-weight: bold;
}

/* DELETE */
.delete {
    background: #ff6b6b;
    padding: 6px 10px;
    border-radius: 6px;
    color: white;
    text-decoration: none;
}


body {
    background-color: #fff0f5; /* Lavender Blush (Light Pink) */
}

/* Sidoo kale Table-ka qurxi */
.table {
    background: white;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
}

.table thead {
    background: linear-gradient(90deg, #a18cd1, #fbc2eb);
    color: white;
}
</style>

<div class="container">

<h1>🛒 Orders Management</h1>

<a href="add_order.php" class="btn">+ Add Order</a>
<a href="edit_order.php?id=<?php echo $row['id']; ?>" class="btn">Edit</a>

<table>
<tr>
    <th>ID</th>
    <th>Customer</th>
    <th>Food</th>
    <th>Qty</th>
    <th>Total</th>
    <th>Payment</th>
    <th>Status</th>
    <th>Date</th>
    <th>Action</th>
</tr>

<?php
$query = "
SELECT orders.*, customers.name AS customer, food_menu.food_name AS food
FROM orders
JOIN customers ON orders.customer_id = customers.id
JOIN food_menu ON orders.food_id = food_menu.id
";

$result = $conn->query($query);

while($row = $result->fetch_assoc()){
?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['customer']; ?></td>
<td><?php echo $row['food']; ?></td>
<td><?php echo $row['quantity']; ?></td>
<td>$<?php echo $row['total_price']; ?></td>

<!-- PAYMENT METHOD -->
<td><?php echo $row['payment_method'] ?? 'None'; ?></td>

<!-- STATUS -->
<td>
<?php if($row['payment_status'] == "Paid"){ ?>
    <span class="paid">Paid ✅</span>
<?php } else { ?>
    <span class="unpaid">Unpaid ❌</span>
<?php } ?>
</td>

<td><?php echo $row['order_date']; ?></td>

<!-- ACTION -->
<td>

<?php if($row['payment_status'] == "Unpaid"){ ?>
<a href="payment.php?id=<?php echo $row['id']; ?>" class="btn">Pay</a>
<?php } ?>

<a href="delete_order.php?id=<?php echo $row['id']; ?>" class="delete">Delete</a>

</td>

</tr>

<?php } ?>

</table>

</div>

</body>
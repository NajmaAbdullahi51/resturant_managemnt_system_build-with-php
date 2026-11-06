












<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>



<?php 
include 'header.php'; // Hubi in magaca header-kaaga uu sax yahay
include 'config.php'; // Hubi in halkan uu yahay faylka database-ka ku xiraya

$result = mysqli_query($conn, "SELECT * FROM customers");
?>

<style>
    body { background-color: #f3e5f5; font-family: 'Segoe UI', sans-serif; }
    .container { padding: 30px; }
    .header-flex { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
    
    .btn-add { 
        background: linear-gradient(45deg, #a18cd1, #fbc2eb); 
        color: white; padding: 12px 25px; border-radius: 10px; 
        text-decoration: none; font-weight: bold; box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .custom-table { 
        width: 100%; border-collapse: collapse; background: white; 
        border-radius: 15px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.05); 
    }
    .custom-table thead { background: #764ba2; color: white; }
    .custom-table th, .custom-table td { padding: 15px; text-align: left; border-bottom: 1px solid #eee; }
    
    .btn-edit { color: #4facfe; text-decoration: none; font-weight: bold; margin-right: 10px; }
    .btn-delete { color: #ff4b2b; text-decoration: none; font-weight: bold; }
    
    .action-icons { font-size: 1.1rem; }
</style>

<div class="container">
    <div class="header-flex">
        <h2 style="color: #5e35b1;">Customers Management 👥</h2>
        <a href="add_customer.php" class="btn-add">+ Add New Customer</a>
    </div>

    <table class="custom-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td>#<?php echo $row['id']; ?></td>
                <td><strong><?php echo $row['name']; ?></strong></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td class="action-icons">
                    <a href="edit_customer.php?id=<?php echo $row['id']; ?>" class="btn-edit">✏️ Edit</a>
                    <a href="delete_customer.php?id=<?php echo $row['id']; ?>" class="btn-delete" onclick="return confirm('Ma hubtaa inaad tirtirto?')">🗑️ Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
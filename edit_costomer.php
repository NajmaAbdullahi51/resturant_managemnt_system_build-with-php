







<?php 
include 'header.php'; 
include 'config.php'; 

// 1. Waxaan soo qabanaynaa ID-ga qofka la soo riixay
$id = $_GET['id'];

// 2. Waxaan database-ka kasoo helaynaa xogta qofkaas leh ID-gaas
$result = mysqli_query($conn, "SELECT * FROM customers WHERE id = $id");
$row = mysqli_fetch_assoc($result);
?>

<style>
    body { background-color: #f3e5f5; } /* Light Purple Background */
    .form-card { 
        max-width: 500px; margin: 50px auto; background: white; 
        padding: 30px; border-radius: 20px; box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        border-top: 10px solid #4facfe; /* Cyan Border for Edit */
    }
    label { font-weight: bold; color: #764ba2; display: block; margin-top: 10px; }
    input { width: 100%; padding: 12px; margin: 8px 0; border: 2px solid #f0f0f0; border-radius: 10px; }
    .btn-update { 
        width: 100%; padding: 15px; border: none; border-radius: 10px; margin-top: 20px;
        background: linear-gradient(90deg, #4facfe, #a18cd1, #f6d365); /* Cyan, Purple, Orange */
        color: white; font-weight: bold; cursor: pointer; font-size: 16px;
    }
</style>

<div class="form-card">
    <h2 style="text-align:center; color:#5e35b1;">Edit Customer ✏️</h2>
    
    <form action="update_customer.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <label>Customer Name</label>
        <input type="text" name="name" value="<?php echo $row['name']; ?>" required>

        <label>Phone Number</label>
        <input type="text" name="phone" value="<?php echo $row['phone']; ?>" required>

        <label>Address</label>
        <input type="text" name="address" value="<?php echo $row['address']; ?>" required>

        <button type="submit" name="update" class="btn-update">Update Information ✅</button>
    </form>
</div>
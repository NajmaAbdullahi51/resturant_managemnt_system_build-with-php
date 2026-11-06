



<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>





<style>
    body { background-color: #e0f7fa; } /* Light Cyan Background */

    .form-box {
        max-width: 450px;
        margin: 50px auto;
        background: white;
        padding: 40px;
        border-radius: 25px;
        box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        border-left: 10px solid #a18cd1; /* Purple line */
    }

    .form-box h2 { text-align: center; color: #00acc1; margin-bottom: 30px; }

    input[type="text"], input[type="number"], textarea {
        width: 100%;
        padding: 12px;
        margin-bottom: 20px;
        border: 2px solid #eee;
        border-radius: 12px;
        outline: none;
        transition: 0.3s;
    }

    input:focus { border-color: #4facfe; }

    .btn-save {
        width: 100%;
        padding: 15px;
        border: none;
        border-radius: 12px;
        background: linear-gradient(90deg, #a18cd1, #4facfe, #f6d365); /* 💜🩵🧡 */
        color: white;
        font-weight: bold;
        cursor: pointer;
        font-size: 16px;
    }
</style>

<div class="form-box">
    <h2>Add New Food 🍔</h2>
    <form action="save_food.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="food_name" placeholder="Food Name" required>
        <input type="number" name="price" placeholder="Price ($)" required>
        <textarea name="description" placeholder="Description" rows="3"></textarea>
        <input type="file" name="image" style="margin-bottom:20px;">
        <button type="submit" class="btn-save">Save to Menu 🚀</button>
    </form>
</div>
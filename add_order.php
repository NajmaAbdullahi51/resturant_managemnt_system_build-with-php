














<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>





<style>
    body {
        background-color: #ffe4e1; /* Light Pink Background */
        font-family: 'Poppins', sans-serif;
    }

    .form-container {
        background: white;
        max-width: 450px;
        margin: 50px auto;
        padding: 30px;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        border-top: 8px solid #a18cd1; /* Purple Border */
    }

    .form-container h2 {
        text-align: center;
        color: #764ba2;
        margin-bottom: 25px;
    }

    .form-group { margin-bottom: 20px; }

    .form-control {
        width: 100%;
        padding: 12px;
        border: 2px solid #f0f0f0;
        border-radius: 10px;
        transition: 0.3s;
    }

    .form-control:focus {
        border-color: #4facfe; /* Light Blue/Cyan */
        outline: none;
    }

    .btn-place-order {
        width: 100%;
        padding: 15px;
        border: none;
        border-radius: 10px;
        background: linear-gradient(90deg, #a18cd1, #4facfe, #f6d365); /* Purple, Cyan, Orange */
        color: white;
        font-weight: bold;
        font-size: 16px;
        cursor: pointer;
        transition: 0.3s;
    }

    .btn-place-order:hover {
        opacity: 0.9;
        transform: scale(1.02);
    }
</style>

<div class="form-container">
    <h2>Create Order 💜</h2>
    <form action="process_order.php" method="POST">
        <div class="form-group">
            <select class="form-control">
                <option>Select Customer</option>
            </select>
        </div>
        <div class="form-group">
            <select class="form-control">
                <option>Select Food</option>
            </select>
        </div>
        <div class="form-group">
            <input type="number" class="form-control" placeholder="Quantity">
        </div>
        <button type="submit" class="btn-place-order">Place Order Now 🚀</button>
    </form>
</div>
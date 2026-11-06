

<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>


<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>





<?php
session_start();
// Waxaan hubineynaa haddii session-ka 'user' uu jiro si aysan cilad u dhicin
$user_name = isset($_SESSION['user']) ? $_SESSION['user'] : "Guest";
?>

<style>
    :root {
        --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        --light-bg: #f8f9fa;
    }

    body {
        margin: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: var(--light-bg);
    }

    .navbar {
        background: var(--primary-gradient);
        padding: 12px 5%;
        display: flex;
        align-items: center;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        color: white;
    }

    .navbar .logo-container {
        display: flex;
        align-items: center;
        text-decoration: none;
        color: white;
        font-size: 1.2rem;
        font-weight: bold;
    }

    .navbar img {
        width: 45px;
        height: 45px;
        margin-right: 12px;
        border-radius: 50%;
        background: white;
        padding: 2px;
    }

    .nav-links {
        margin-left: 30px;
    }

    .nav-links a {
        color: rgba(255, 255, 255, 0.9);
        margin: 0 15px;
        text-decoration: none;
        font-weight: 500;
        transition: 0.3s;
        padding: 8px 12px;
        border-radius: 5px;
    }

    .nav-links a:hover {
        background: rgba(255, 255, 255, 0.2);
        color: white;
    }

    .user-section {
        margin-left: auto;
        display: flex;
        align-items: center;
        gap: 15px;
        background: rgba(0, 0, 0, 0.1);
        padding: 5px 15px;
        border-radius: 20px;
    }

    .logout-btn {
        background: #ff4b2b;
        color: white !important;
        padding: 5px 12px !important;
        border-radius: 15px !important;
        font-size: 0.85rem;
    }
</style>

<div class="navbar">
    <a href="index.php" class="logo-container">
        <img src="https://cdn-icons-png.flaticon.com/512/3170/3170733.png" alt="Logo"> <span>Resto Pro</span>
    </a>

    <div class="nav-links">
        <a href="index.php">Dashboard</a>
        <a href="customers.php">Customers</a>
        <a href="menu.php">Menu</a>
        <a href="orders.php">Orders</a>
        <a href="reports.php">Reports</a>
    </div>

    <div class="user-section">
        <span>👤 <?php echo htmlspecialchars($user_name); ?></span>
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
</div>
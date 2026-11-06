

















<?php
session_start();
include 'config.php';
if(!isset($_SESSION['user'])){ header("Location: login.php"); exit(); }

// Halkan ayaan ku saxnay qaladkii Undefined Variable
$c_res = mysqli_query($conn, "SELECT COUNT(*) as t FROM customers");
$total_customers = ($c_res) ? mysqli_fetch_assoc($c_res)['t'] : 0;

$f_res = mysqli_query($conn, "SELECT COUNT(*) as t FROM food");
$total_food = ($f_res) ? mysqli_fetch_assoc($f_res)['t'] : 0;

$o_res = mysqli_query($conn, "SELECT COUNT(*) as t FROM orders");
$total_orders = ($o_res) ? mysqli_fetch_assoc($o_res)['t'] : 0;
?>
<!DOCTYPE html>
<html lang="so">
<head>
    <meta charset="UTF-8">
    <title>Dashboard | Five Star Resto</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
        body { display: flex; background: #f8f9fa; }
        
        /* Sidebar Qurux Badan 💜 */
        .sidebar { width: 280px; background: #5e35b1; height: 100vh; color: white; padding: 30px; position: fixed; }
        .logo-area { text-align: center; margin-bottom: 40px; }
        .logo-circle { width: 80px; height: 80px; background: #ff9800; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 40px; margin: 0 auto 10px; border: 4px solid #fff; box-shadow: 0 5px 15px rgba(0,0,0,0.2); }
        .sidebar h2 { font-size: 22px; color: #f6d365; text-transform: uppercase; letter-spacing: 1px; }
        
        .nav-links { margin-top: 20px; }
        .nav-links a { display: block; color: #e0e0e0; text-decoration: none; padding: 15px; margin-bottom: 10px; border-radius: 12px; transition: 0.3s; font-size: 16px; }
        .nav-links a:hover { background: rgba(255, 255, 255, 0.1); color: #fff; transform: translateX(10px); }
        .active { background: #4facfe !important; color: white !important; font-weight: bold; }

        /* Main Content 🩵 */
        .main-content { margin-left: 280px; width: 100%; padding: 40px; }
        header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 40px; }
        .user-info { display: flex; align-items: center; gap: 15px; }
        .logout-btn { background: #ff4b2b; color: white; padding: 10px 25px; border-radius: 10px; text-decoration: none; font-weight: bold; transition: 0.3s; }
        .logout-btn:hover { background: #e6391a; }

        /* Stats Cards 🧡 */
        .cards { display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px; }
        .card { padding: 40px; border-radius: 25px; color: white; text-align: center; position: relative; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.1); transition: 0.4s; }
        .card:hover { transform: translateY(-10px); }
        .card h3 { font-size: 20px; opacity: 0.9; margin-bottom: 10px; }
        .card h1 { font-size: 45px; font-weight: 800; }
        
        .c-purple { background: linear-gradient(135deg, #a18cd1 0%, #764ba2 100%); }
        .c-blue { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }
        .c-orange { background: linear-gradient(135deg, #f6d365 0%, #fda085 100%); color: #333; }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="logo-area">
            <div class="logo-circle">🍴</div>
            <h2>Five Star 💜</h2>
        </div>
        <div class="nav-links">
            <a href="dashboard.php" class="active">🏠 Dashboard</a>
            <a href="menu.php">🍔 Food Menu</a>
            <a href="customers.php">👥 Customers</a>
            <a href="orders.php">📝 Orders</a>
            <a href="settings.php">⚙️ Settings</a>
            <a href="logout.php" style="margin-top: 40px; color: #ff9800;">🚪 Logout System</a>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h1>Overview Dashboard 🚀</h1>
            <div class="user-info">
                <span>Soo dhawoow, <strong><?php echo $_SESSION['user']; ?></strong> ✨</span>
                <a href="logout.php" class="logout-btn">Logout</a>
            </div>
        </header>

        <div class="cards">
            <div class="card c-purple">
                <h3>Total Customers</h3>
                <h1><?php echo $total_customers; ?></h1>
            </div>
            <div class="card c-blue">
                <h3>Total Food Items</h3>
                <h1><?php echo $total_food; ?></h1>
            </div>
            <div class="card c-orange">
                <h3>Total Orders</h3>
                <h1><?php echo $total_orders; ?></h1>
            </div>
        </div>
        
        <div style="margin-top: 50px; background: white; padding: 30px; border-radius: 20px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
            <h2 style="color: #5e35b1; margin-bottom: 20px;">Habaynta Maanta 🍴</h2>
            <p style="color: #666;">Dhammaan xogtaadu waa mid toos ah (Live). Waad ku mahadsantahay isticmaalka nidaamka Five Star Restaurant.</p>
        </div>
    </div>
</body>
</html>
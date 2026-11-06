



<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome - Five Star Restaurant</title>
    <style>
        body {
            margin: 0; padding: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #a18cd1 0%, #fbc2eb 100%); /* Purple theme 💜 */
            height: 100vh;
            display: flex; align-items: center; justify-content: center;
            color: white; text-align: center;
        }
        .welcome-container {
            background: rgba(255, 255, 255, 0.1);
            padding: 50px;
            border-radius: 30px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 20px 50px rgba(0,0,0,0.2);
        }
        h1 { font-size: 3.5rem; margin-bottom: 10px; }
        p { font-size: 1.2rem; opacity: 0.9; margin-bottom: 30px; }
        .btn-login {
            background: #ff9800; /* Orange 🧡 */
            color: white;
            padding: 15px 40px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.2rem;
            transition: 0.3s;
            display: inline-block;
            box-shadow: 0 10px 20px rgba(255, 152, 0, 0.4);
        }
        .btn-login:hover {
            transform: translateY(-5px);
            background: #e68a00;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <div style="font-size: 80px;">⭐</div>
        <h1>Five Star Restaurant</h1>
        <p>Khibrad raaxo iyo midabada quruxda badan ee nolosha.</p>
        <a href="login.php" class="btn-login">Login to System 🚀</a>
    </div>
</body>
</html>
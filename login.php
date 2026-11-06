


<?php
session_start();
include 'config.php'; // Hubi in faylkani jiro!

$error = "";

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['user'] = $username;
        header("Location: dashboard.php"); // HALKAN: Hubi in Dashboard-kaaga magacu kan yahay
        exit();
    } else {
        $error = "Username ama Password waa khalad! ❌";
    }
}
?>
<!DOCTYPE html>
<html lang="so">
<head>
    <meta charset="UTF-8">
    <title>Login | Resto Pro 💜</title>
    <style>
        body {
            margin: 0; height: 100vh; display: flex; align-items: center; justify-content: center;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #a18cd1, #4facfe, #f6d365); /* 💜🩵🧡 */
        }
        .login-card {
            background: white; padding: 40px; border-radius: 30px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.2); width: 380px; text-align: center;
        }
        h2 { color: #5e35b1; margin-bottom: 20px; font-size: 2rem; }
        input {
            width: 100%; padding: 15px; margin-bottom: 20px;
            border: 2px solid #eee; border-radius: 12px; box-sizing: border-box; outline: none;
        }
        input:focus { border-color: #4facfe; }
        .btn-login {
            width: 100%; padding: 15px; border: none; border-radius: 12px;
            background: linear-gradient(90deg, #a18cd1, #4facfe); /* 💜🩵 */
            color: white; font-size: 18px; font-weight: bold; cursor: pointer; transition: 0.3s;
        }
        .btn-login:hover { transform: scale(1.03); box-shadow: 0 10px 20px rgba(161, 140, 209, 0.4); }
        .error { color: #d32f2f; background: #ffebee; padding: 10px; border-radius: 10px; margin-bottom: 15px; }
        a { color: #4facfe; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>
    <div class="login-card">
        <h2>Login 💜</h2>
        <?php if($error) echo "<div class='error'>$error</div>"; ?>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login" class="btn-login">Gudaha u gal 🚀</button>
        </form>
        <p style="margin-top:20px; font-size:14px;">Ma haysatid account? <a href="register.php">Sign Up 🧡</a></p>
    </div>
</body>
</html>
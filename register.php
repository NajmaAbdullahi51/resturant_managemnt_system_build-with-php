
<?php
include 'config.php';
$msg = "";

if (isset($_POST['register'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    // Hubi in magacu horay u jiray
    $check = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
    if(mysqli_num_rows($check) > 0) {
        $msg = "<p style='color:orange;'>Magacan horay ayaa loo qaatay! 😮</p>";
    } else {
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        if (mysqli_query($conn, $sql)) {
            $msg = "<p style='color:white; background:green; padding:10px; border-radius:10px;'>Koontada waa la sameeyay! ✅ <a href='login.php' style='color:yellow;'>Hadda gal</a></p>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="so">
<head>
    <meta charset="UTF-8">
    <title>Create Account 🧡</title>
    <style>
        body {
            margin: 0; height: 100vh; display: flex; align-items: center; justify-content: center;
            background: linear-gradient(135deg, #a18cd1, #4facfe, #f6d365); font-family: sans-serif;
        }
        .card {
            background: rgba(255, 255, 255, 0.2); backdrop-filter: blur(10px);
            padding: 40px; border-radius: 30px; width: 350px; text-align: center;
            border: 2px solid rgba(255,255,255,0.3); box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        h2 { color: white; text-shadow: 2px 2px 4px rgba(0,0,0,0.2); }
        input {
            width: 100%; padding: 15px; margin: 10px 0; border: none;
            border-radius: 15px; outline: none; box-sizing: border-box;
        }
        .btn {
            width: 100%; padding: 15px; border: none; border-radius: 15px;
            background: #ff9800; color: white; font-weight: bold; cursor: pointer; font-size: 16px;
        }
        .btn:hover { background: #e68900; }
        a { color: white; text-decoration: none; font-size: 14px; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Sign Up 🧡</h2>
        <?php echo $msg; ?>
        <form method="POST">
            <input type="text" name="username" placeholder="Dooro Username" required>
            <input type="password" name="password" placeholder="Abuur Password" required>
            <button type="submit" name="register" class="btn">Sameyso Account 🚀</button>
        </form>
        <p><a href="login.php">Horay miyaad u lahayd account? Login 💜</a></p>
    </div>
</body>
</html>
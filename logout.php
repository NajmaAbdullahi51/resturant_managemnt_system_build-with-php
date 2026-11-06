










<?php
session_start();
session_unset();
session_destroy(); // Waxaan tirtirnay dhamaan xogta
?>
<!DOCTYPE html>
<html lang="so">
<head>
    <meta charset="UTF-8">
    <title>Mahadsanid 👋</title>
    <style>
        body {
            margin: 0; height: 100vh; display: flex; align-items: center; justify-content: center;
            background: linear-gradient(135deg, #f3e5f5, #e0f7fa); /* Light 💜🩵 */
            font-family: sans-serif;
        }
        .bye-card {
            background: white; padding: 50px; border-radius: 30px; text-align: center;
            box-shadow: 0 15px 40px rgba(0,0,0,0.1); border-bottom: 10px solid #ff9800; /* 🧡 */
        }
        h1 { color: #5e35b1; margin-bottom: 15px; }
        .heart { color: #ff4b2b; font-size: 30px; display: inline-block; animation: beat 1s infinite; }
        @keyframes beat { 0%, 100% { transform: scale(1); } 50% { transform: scale(1.3); } }
        .loader {
            border: 4px solid #f3f3f3; border-top: 4px solid #4facfe;
            border-radius: 50%; width: 30px; height: 30px; animation: spin 1s linear infinite;
            margin: 20px auto;
        }
        @keyframes spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
    </style>
    <meta http-equiv="refresh" content="4;url=index.php">
</head>
<body>
    <div class="bye-card">
        <div style="font-size: 50px;">👋✨</div>
        <h1>Waad ku mahadsantahay booqashadaada</h1>
        <h2 style="color: #4facfe;">Marwo & Mudane <span class="heart">💜</span></h2>
        <p style="color: #888;">Nidaamka si nabad ah ayaad uga baxday...</p>
        <div class="loader"></div>
    </div>
</body>
</html>
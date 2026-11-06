




<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>




<style>
    body { 
        background-color: #f0f7ff; /* Light Cyan/Blue Background 🩵 */
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .report-container {
        padding: 50px;
        text-align: center;
    }

    .revenue-card {
        background: white;
        max-width: 400px;
        margin: 0 auto;
        padding: 40px;
        border-radius: 30px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.05);
        border-bottom: 8px solid #a18cd1; /* Purple accent 💜 */
        transition: 0.4s;
    }

    .revenue-card:hover {
        transform: translateY(-5px);
    }

    .revenue-card h2 {
        color: #764ba2;
        font-size: 1.4rem;
        margin-bottom: 20px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .income-amount {
        font-size: 3.5rem;
        font-weight: 800;
        background: linear-gradient(45deg, #a18cd1, #4facfe); /* 💜🩵 */
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin: 10px 0;
    }

    .report-icon {
        font-size: 3rem;
        margin-bottom: 10px;
    }
</style>

<div class="report-container">
    <div class="revenue-card">
        <div class="report-icon">💰</div>
        <h2>Total Paid Income</h2>
        <div class="income-amount">$<?php echo number_format($total_revenue, 2); ?></div>
        <p style="color: #888;">Updated just now</p>
    </div>
</div>
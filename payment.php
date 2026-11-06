



<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>





<style>
    body { 
        background-color: #f3e5f5; /* Light Purple Background 💜 */
    }

    .payment-box {
        max-width: 450px;
        margin: 60px auto;
        background: white;
        padding: 40px;
        border-radius: 25px;
        box-shadow: 0 15px 35px rgba(161, 140, 209, 0.2);
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    /* Qurxin dhinac ka socota */
    .payment-box::before {
        content: "";
        position: absolute;
        top: 0; left: 0; width: 100%; height: 8px;
        background: linear-gradient(90deg, #a18cd1, #4facfe, #f6d365); /* 💜🩵🧡 */
    }

    .payment-box h2 { color: #5e35b1; margin-bottom: 10px; }
    
    .customer-info {
        background: #f8f9fa;
        padding: 15px;
        border-radius: 15px;
        margin: 20px 0;
    }

    .total-pay {
        font-size: 2rem;
        color: #ff9800; /* Orange 🧡 */
        font-weight: bold;
        margin-bottom: 20px;
    }

    select {
        width: 100%;
        padding: 15px;
        border: 2px solid #e0e0e0;
        border-radius: 12px;
        font-size: 16px;
        outline: none;
        transition: 0.3s;
        margin-bottom: 25px;
    }

    select:focus { border-color: #4facfe; }

    .btn-confirm {
        width: 100%;
        padding: 16px;
        border: none;
        border-radius: 12px;
        background: linear-gradient(135deg, #a18cd1, #4facfe); /* 💜🩵 */
        color: white;
        font-size: 18px;
        font-weight: bold;
        cursor: pointer;
        box-shadow: 0 10px 20px rgba(79, 172, 254, 0.3);
        transition: 0.3s;
    }

    .btn-confirm:hover {
        transform: scale(1.03);
        background: linear-gradient(135deg, #4facfe, #a18cd1);
    }
</style>

<div class="payment-box">
    <h2>💳 Payment System</h2>
    <div class="customer-info">
        <p style="margin:0; color:#666;">Customer Name:</p>
        <h3 style="margin:5px 0;"><?php echo $customer_name; ?></h3>
    </div>
    <div class="total-pay">$<?php echo $total_price; ?></div>
    
    <form action="process_payment.php" method="POST">
        <input type="hidden" name="order_id" value="<?php echo $order_id; ?>">
        <select name="payment_method" required>
            <option value="">-- Select Payment Method --</option>
            <option value="Cash">💵 Cash</option>
            <option value="EVC Plus">📱 EVC Plus</option>
            <option value="Zaad">📱 Zaad</option>
            <option value="e-Dahab">📱 e-Dahab</option>
        </select>
        <button type="submit" class="btn-confirm">Confirm Payment ✅</button>
    </form>
</div>
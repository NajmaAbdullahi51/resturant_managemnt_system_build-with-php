

<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>








<?php include("db.php"); ?>
<?php include("header.php"); ?>

<style>
.container {
    padding: 20px;
}

.title {
    color: #6a5acd;
}

.btn {
    background: linear-gradient(90deg, #ff9a9e, #fad0c4);
    padding: 10px 15px;
    color: white;
    border-radius: 10px;
    text-decoration: none;
}

/* CARD DESIGN */
.card-box {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    margin-top: 20px;
}

.card {
    width: 220px;
    background: white;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.card img {
    width: 100%;
    height: 150px;
    object-fit: cover;
}

.card-body {
    padding: 10px;
    text-align: center;
}

.price {
    color: #ff6b6b;
    font-weight: bold;
}

.action a {
    margin: 5px;
    text-decoration: none;
    padding: 5px 10px;
    border-radius: 8px;
    color: white;
}

.edit { background: #4CAF50; }
.delete { background: #e74c3c; }


/* Ku dar CSS-kan bogga menu.php */
body {
    background-color: #f3e5f5; /* Light Purple Background */
    font-family: 'Poppins', sans-serif;
}

.menu-container {
    padding: 40px 5%;
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 25px;
}

.food-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 20px rgba(0,0,0,0.05);
    transition: 0.3s;
    text-align: center;
    padding-bottom: 20px;
}

.food-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(161, 140, 209, 0.3);
}

.food-card img {
    width: 100%;
    height: 180px;
    object-fit: cover;
}

.food-card h3 { color: #5e35b1; margin: 15px 0 5px; }
.food-card .price { color: #ff9800; font-weight: bold; font-size: 1.2rem; }
</style>

<div class="container">

<h1 class="title">🍽️ Food Menu</h1>

<a href="add_food.php" class="btn">+ Add Food</a>

<div class="card-box">

<?php
$result = $conn->query("SELECT * FROM food_menu");

while($row = $result->fetch_assoc()){
?>

<div class="card">
    <img src="uploads/<?php echo $row['image']; ?>">
    <div class="card-body">
        <h3><?php echo $row['food_name']; ?></h3>
        <p><?php echo $row['description']; ?></p>
        <p class="price">$<?php echo $row['price']; ?></p>

        <div class="action">
            <a href="edit_food.php?id=<?php echo $row['id']; ?>" class="edit">Edit</a>
            <a href="delete_food.php?id=<?php echo $row['id']; ?>" class="delete">Delete</a>
        </div>
    </div>
</div>

<?php } ?>

</div>

</div>
</body>
</html>
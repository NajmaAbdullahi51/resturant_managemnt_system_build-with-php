
















<style>
    body { background-color: #f3e5f5; } /* Light Purple Background */

    .edit-box {
        max-width: 450px;
        margin: 50px auto;
        background: white;
        padding: 40px;
        border-radius: 25px;
        box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        border-right: 10px solid #4facfe; /* Cyan line */
    }

    .edit-box h2 { text-align: center; color: #7e57c2; margin-bottom: 30px; }

    .btn-update {
        width: 100%;
        padding: 15px;
        border: none;
        border-radius: 12px;
        background: linear-gradient(90deg, #f6d365, #4facfe, #a18cd1); /* 🧡🩵💜 */
        color: white;
        font-weight: bold;
        cursor: pointer;
    }
</style>

<div class="edit-box">
    <h2>Edit Food Item ✏️</h2>
    <form action="update_food.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="text" name="food_name" value="<?php echo $row['food_name']; ?>">
        <input type="number" name="price" value="<?php echo $row['price']; ?>">
        <textarea name="description"><?php echo $row['description']; ?></textarea>
        <div style="margin-bottom: 15px;">
             <small>Current Image:</small><br>
             <img src="uploads/<?php echo $row['image']; ?>" width="50" style="border-radius:5px;">
        </div>
        <input type="file" name="image">
        <button type="submit" class="btn-update">Update Food ✅</button>
    </form>
</div>
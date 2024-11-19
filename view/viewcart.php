
<?php
if (isset($_SESSION['addcart']) && count($_SESSION['addcart']) > 0) {
    viewcart(1);
} else {
    echo '<div style="text-align: center; margin: 50px;">
    <h2>Your cart is currently empty</h2>
    <p>Explore our great products and add them to your cart now!</p>
    <a href="index.php" style="display: inline-block; padding: 10px 20px; color: white; background-color: #007BFF; text-decoration: none; border-radius: 5px;">Return to shop</a>
</div>';
}

?>


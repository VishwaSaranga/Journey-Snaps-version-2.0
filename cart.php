<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Images/Head.png">
    <title>Journey Snaps | Cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="Styles/styles.css">
    <link rel="stylesheet" href="Styles/cart.css">
    <script src="Scripts/cart.js" defer></script>
</head>
<body>
        <?php
            session_start();
        ?>
    <nav>
        <a href="index.php">
            <img src="Images/Logo White.png" alt="Logo">
        </a>
        <input type="checkbox" id="menu-toggle">
        <label for="menu-toggle" class="hamburger">&#9776;</label>
        <ul class="menu">
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="stories.php">Stories</a></li>
            <li><a href="contact.php">About Us</a></li>
            <?php
                if (isset($_SESSION['userName'])) {
                    echo '<li><a href="cart.php"><i class="fas fa-shopping-cart"></i><span id="cart-count"></span></a></li>';
                    echo '<li><a href="userProfile.php"><i class="fas fa-user"></i></a></li>';
                } 
            ?>
        </ul>
    </nav>

    <main>
        <section>
            <h2>Journey Snaps | Cart</h2>
            <div class="cart-container">
                <div id="cart-items">
                    <!-- Cart items dynamically inserted here -->
                </div>
                <div id="cart-total">
                    <strong>Total: Rs.<span id="total-price">0</span></strong>
                </div>
                <form action="Model/cart_processing.php" method="POST">
                    <button type="submit" id="checkout-btn">Checkout</button>
                </form>
            </div>
            <div id="checkoutModal" class="modal">
                    <div class="modal-content">
                        <h3>Checkout complete!</h3>
                        <!-- <button class="close-btn" onclick="closeCheckoutModal()">OK</button> -->
                    </div>
                </div>
        </section>
    </main>

    <footer>
        <p>&copy; Journey Snaps 2024</p>
    </footer>
</body>
</html>

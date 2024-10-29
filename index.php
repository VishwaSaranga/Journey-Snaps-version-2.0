<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Images/Head.png">
    <title>Journey Snaps | Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="Styles/styles.css">
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
            <?php
                if (isset($_SESSION['userName'])) {
                   echo '<li><a href="gallery.php">Gallery</a></li>';
                } 
            ?>
            <li><a href="stories.php">Stories</a></li>
            <?php
                if (!isset($_SESSION['userName'])) {
                   echo '<li><a href="login.php">Login</a></li>';
                } 
            ?>
            <li><a href="contact.php">About Us</a></li>
            <?php
                if (isset($_SESSION['userName'])) {
                    echo '<li><a href="cart.php"><i class="fas fa-shopping-cart"></i><span id="cart-count"></span></a></li>';
                    echo '<li><a href="userProfile.php"><i class="fas fa-user"></i></a></li>';
                } 
            ?>
        </ul>
    </nav>

    <main class="Index">
        <section>
            <?php
                // session_start();

                if (isset($_SESSION['userName'])) {
                    $userName = $_SESSION['userName'];
                    echo "Welcome, $userName :)";
                } else {
                    echo "<p>Dear customer,<br>Please login to view and buy amazing images!</p>";
                }
            ?>
            <h2>Explore Stunning Travel Photos</h2>
            <p>Your platform to buy and enjoy high-quality travel and wildlife photos.</p>
            <?php
                if (isset($_SESSION['userName'])) {
                   echo '<button><a href="gallery.php" style="color: #fff;">Shop Now</a></button>';
                }else {
                    echo '<button><a href="login.php" style="color: #fff;">Login</a></button>';
                }
            ?>
            <button onclick="location.href='stories.php'">Stories</button>
        </section>
    </main>

    <footer>
        <p>&copy; Journey Snaps 2024</p>
    </footer>
</body>
</html>



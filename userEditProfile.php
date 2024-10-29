<?php
    session_start();
    include 'Model/connection.php';

    if (!isset($_SESSION['userName'])) {
        header("Location: login.php");
        exit();
    }

    $userName = $_SESSION['userName'];

    $query = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $userName);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Images/Head.png">
    <title>Journey Snaps | Edit Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="Styles/styles.css">
    <link rel="stylesheet" href="Styles/user.css">
    <script src="Scripts/cart.js" defer></script>
</head>
<body>
    
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
        <section class="edit-profile-container">
            <h2>Edit Profile</h2>
            <form method="POST" action="Model/getEditProfile.php" enctype="multipart/form-data" class="edit-profile-form">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" value="<?= htmlspecialchars($user['email']) ?>" readonly required><br>

                <label for="pNumber">Phone Number:</label>
                <input type="text" name="pNumber" id="pNumber" value="<?= htmlspecialchars($user['pNumber']) ?>" required><br>

                <label for="address">Address:</label>
                <input type="text" name="address" id="address" value="<?= htmlspecialchars($user['address']) ?>" required><br>

                <label for="nic">NIC:</label>
                <input type="text" name="nic" id="nic" value="<?= htmlspecialchars($user['nic']) ?>" required><br>

                <label for="pws">Password:</label>
                <input type="password" name="password" id="password" value="<?= htmlspecialchars($user['password']) ?>" required><br>

                <label for="profile_pic">Profile Picture:</label>
                <input type="file" name="profile_pic" id="profile_pic"><br>

                <button type="submit" class="btn-save">Save Changes</button>
            </form>
            <a href="userProfile.php" class="btn-back">Back to Profile</a>
        </section>
    </main>

    <footer>
        <p>&copy; Journey Snaps 2024</p>
    </footer>
</body>
</html>

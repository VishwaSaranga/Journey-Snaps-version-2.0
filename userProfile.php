<?php
    session_start();
    include 'Model/connection.php';

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
    <title>Journey Snaps | Profile</title>
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
        <section class="profile-section">
            <br><h2>Hi! <?= htmlspecialchars($user['userName']) ?></h2>
                
            <?php if (!empty($user['DPpath'])): ?>
                <img src="<?= htmlspecialchars($user['DPpath']) ?>" alt="Profile Picture" class="profile-pic">
            <?php else: ?>
                <img src="Images/Profile/default-profile.png" alt="Default Profile Picture" class="profile-pic">
            <?php endif; ?>

            <p><strong>Email: </strong><?= htmlspecialchars($user['email']) ?></p>
            <p><strong>Phone Number: </strong> <?= htmlspecialchars($user['pNumber']) ?></p>
            <p><strong>Address: </strong> <?= htmlspecialchars($user['address']) ?></p>
            <p><strong>NIC: </strong> <?= htmlspecialchars($user['nic']) ?></p>
                
            <div class="profile-buttons">
                <a href="userEditProfile.php" class="btn">Edit Profile</a>
                <button class="btn delete-btn" onclick="deleteUser('<?=$user['email']?>')">Delete Account</button>
            </div>
            <div class="logout">
                <form method="POST" action="Model/getLogOut.php"><div>
                    <button type="submit" class="logout-btn">Logout</button><div>
                </form>
            </div>
        </section>
    </main>
    
    <script>
        function deleteUser(email) {
            if (confirm("Are you sure you want to delete your profile?")) {
                location.href = 'Model/deleteUser.php?email=' + email;
            }
        }
    </script>

    <footer>
        <p>&copy; Journey Snaps 2024</p>
    </footer>
</body>
</html>

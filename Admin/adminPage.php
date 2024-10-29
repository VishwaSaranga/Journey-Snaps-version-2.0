<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../Images/Head.png">
    <title>Journey Snaps | Admin Page</title>
    <link rel="stylesheet" href="Styles/admin.css">
</head>
<body>

    <nav>
        <a href="../index.php">
            <img src="../Images/Logo White.png" alt="Logo">
        </a>
    </nav>

    <main>
        <section class="adminPage">
            <?php
                // Start the session
                session_start();

                // Check if the userName is set in the session
                if (isset($_SESSION['adminName'])) {
                    $adminName = $_SESSION['adminName'];
                    echo "Welcome, $adminName!";
                }
            ?>
            <br><br>
            <h2>Admin Page of Journey Snaps</h2>
            <div>
                <button onclick="location.href='user.php'">View User Details</button>
                <button onclick="location.href='messages.php'">Message form Users</button>
                <button onclick="location.href='invoices.php'">Sales History</button>
            </div>
            <div>
                <?php
                    if (isset($_SESSION['adminName'])) {
                        echo '<form method="POST" action="Model/getLogOut.php"><div>
                            <button type="submit" class="logout-btn">Logout</button><div>
                        </form>';
                    }
                ?>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; Journey Snaps 2024</p>
    </footer>
</body>
</html>



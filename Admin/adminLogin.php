<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../Images/Head.png">
    <title>Journey Snaps | Admin Login</title>
    <link rel="stylesheet" href="Styles/admin.css">
    <script src="Scripts/login.js" defer></script>
</head>
<body>
    <nav>
        <a href="../index.php">
            <img src="../Images/Logo White.png" alt="Logo">
        </a>
    </nav>

    <main>
        <section class="adminPage">
            <div class="loginPage">
                <div class="Box">
                    <h2>Admin Login</h2>
                    <form name="loginform" method="post" action="Model/getAdminLogin.php">
                        <input type="text" name="email" id="email" placeholder="Email">
                        <input type="password" name="password" id="password" placeholder="Password">
                        <div class="button-container">
                            <input type="submit" value="Login">
                            <input type="reset" value="Clear">
                        </div>
                    </form>
                </div>
              </div>
        </section>
    </main>

    <footer>
        <p>&copy; Journey Snaps 2024</p>
    </footer>
</body>
</html>
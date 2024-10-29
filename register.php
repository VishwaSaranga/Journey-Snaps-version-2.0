<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Images/Head.png">
    <title>Journey Snaps | Registration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="Styles/styles.css">
    <link rel="stylesheet" href="Styles/form.css">
    <script src="Scripts/register.js" defer></script>
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
            <li><a href="login.php">Login</a></li>
            <li><a href="contact.php">About Us</a></li>
        </ul>
    </nav>

    <main>
        <section>
            <div class="Box">
                  <h2>Registration</h2>
                  <form class="register-form" name="Registrationform" method="post" action="Model/getRegistration.php" onsubmit="return validateForm()">
                    <input type="text" name="userName" id="userName" placeholder="Enter Your User Name">
                    <input type="text" name="email" id="email" placeholder="Enter Your E-mail">
                    <input name="pno" type="text" id="pno" size="10" placeholder="Phone Number">
                    <input name="address" type="text" id="address" size="100" placeholder="Address">
                    <input name="nicno" type="text" id="nicno" size="12" placeholder="NIC Number">
                    <input type="password" name="pws" id="pws" placeholder="Enter Your Password">
                    <div class="button-container">
                        <input type="submit" value="Register">
                        <input type="reset" value="Clear">
                        <!-- <input type="button" value="Login" class="login-btn" onclick="redirectToLogin()"> -->
                    </div>
                    <div class="regi">
                        <br>
                        <p>Do you have an account? <a href="login.php">Login</a></p>
                    </div>
                </form>
                <div id="validationModal" class="modal">
                  <div class="modal-content">
                      <h3 id="modalMessage"></h3>
                      <button class="close-btn" onclick="closeModal()">Close</button>
                  </div>
                </div>
              </div>
        </section>
    </main>

    <footer>
        <p>&copy; Journey Snaps 2024</p>
    </footer>
</body>
</html>
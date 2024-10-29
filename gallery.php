<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Images/Head.png">
    <title>Journey Snaps | Gallery</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="Styles/styles.css">
    <link rel="stylesheet" href="Styles/gallery.css">
    <script src="Scripts/cart.js" defer></script>
    <script src="Scripts/gallery.js" defer></script>
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
    
    <div class="slider">
        <div class="slide current">
          <div class="content">
            <h1>Hike</h1>
            <p>"A triumphant hiker stands atop a rocky peak at sunset, arms raised in celebration. The golden sky and lush greenery create a perfect backdrop for this moment of achievement and freedom in nature."</p>
          </div>
        </div>
        <div class="slide">
          <div class="content">
            <h1>The Leopard</h1>
            <p>"A majestic leopard rests gracefully on a sun-warmed rock, its spotted coat gleaming in the soft light. The shallow depth of field creates an intimate portrait of this powerful big cat in its natural habitat."</p>
          </div>
        </div>
        <div class="slide">
          <div class="content">
            <h1>Backpacker</h1>
            <p>"A solo traveler with a vintage-style backpack gazes out at ancient mountain ruins. Their weathered gear and determined stance tell a story of adventure and discovery in remote landscapes."</p>
          </div>
        </div>
        <div class="slide">
          <div class="content">
            <h1>Sunset Art</h1>
            <p>"A peaceful camping scene at dusk, with a silhouetted figure standing beside their tent against a warm orange sunset. The perfect embodiment of finding solitude in nature's embrace."</p>
          </div>
        </div>
        <div class="slide">
          <div class="content">
            <h1>The Big Guy</h1>
            <p>"A magnificent African elephant stands proud in golden grasslands, its tusks and ears creating an impressive silhouette. The close-up capture reveals the gentle wisdom in this majestic creature's presence."</p>
          </div>
        </div>
        <div class="slide">
          <div class="content">
            <h1>View Point</h1>
            <p>"A hiker surveying a stunning mountain panorama at sunset. Wildflowers dot the foreground while misty peaks stretch to the horizon."</p>
          </div>
        </div>
        <div class="slide">
          <div class="content">
            <h1>Camp Fire</h1>
            <p>"A cozy nighttime scene featuring a camper van and figure beside a crackling campfire under a star-filled sky. The orange flames create a warm contrast against the deep blue night."</p>
          </div>
        </div>
        <div class="slide">
          <div class="content">
            <h1>River Peace</h1>
            <p>"A traveler sits peacefully on a cliff edge, overlooking a breathtaking lagoon in Thailand. Limestone cliffs frame the turquoise waters where traditional long-tail boats float serenely."</p>
          </div>
        </div>
        <div class="slide">
          <div class="content">
            <h1>Cold Morning</h1>
            <p>"A peaceful moment captured on a rustic wooden balcony, as a photographer enjoys their morning coffee while taking in the misty mountain views. A perfect blend of comfort and adventure."</p>
          </div>
        </div>
        <div class="slide">
          <div class="content">
            <h1>The Wild Elk</h1>
            <p>"A haunting scene of a majestic red deer stag standing in misty waters at dawn. Its impressive antlers and noble stance create an almost mythical atmosphere in the moody forest setting."</p>
          </div>
        </div>
    </div>

      
      <div class="buttons">
        <button id="prev"><i class="fas fa-arrow-left"></i></button>
        <button id="next"><i class="fas fa-arrow-right"></i></button>
      </div>

    <div class="MainGallery">
            <div class="gallery">
                <div class="photo-item">
                    <img src="Images/IMG01.jpg" alt="Photo 1">
                    <div class="photo-details">
                        <p><strong>Hike</strong></p>
                        <p>Rs.1500</p>
                        <button class="add-to-cart" data-id="1" data-name="Hike" data-price="1500">Add to Cart</button>
                    </div>
                </div>
                <div class="photo-item">
                    <img src="Images/IMG02.jpg" alt="Photo 2">
                    <div class="photo-details">
                        <p><strong>The Leopard</strong></p>
                        <p>Rs.2000</p>
                        <button class="add-to-cart" data-id="2" data-name="The Leopard" data-price="2000">Add to Cart</button>
                    </div>
                </div>
                <div class="photo-item">
                    <img src="Images/IMG03.jpg" alt="Photo 3">
                    <div class="photo-details">
                        <p><strong>Backpacker</strong></p>
                        <p>Rs.1200</p>
                        <button class="add-to-cart" data-id="3" data-name="Backpacker" data-price="1200">Add to Cart</button>
                    </div>
                </div>
                <div class="photo-item">
                    <img src="Images/IMG04.jpg" alt="Photo 4">
                    <div class="photo-details">
                        <p><strong>Sunset Art</strong></p>
                        <p>Rs.3400</p>
                        <button class="add-to-cart" data-id="4" data-name="Sunset Art" data-price="3400">Add to Cart</button>
                    </div>
                </div>
                <div class="photo-item">
                    <img src="Images/IMG05.jpg" alt="Photo 5">
                    <div class="photo-details">
                        <p><strong>The Big Guy</strong></p>
                        <p>Rs.2200</p>
                        <button class="add-to-cart" data-id="5" data-name="The Big Guy" data-price="2200">Add to Cart</button>
                    </div>
                </div>
                <div class="photo-item">
                    <img src="Images/IMG06.jpg" alt="Photo 6">
                    <div class="photo-details">
                        <p><strong>View Point</strong></p>
                        <p>Rs.6000</p>
                        <button class="add-to-cart" data-id="6" data-name="View Point" data-price="6000">Add to Cart</button>
                    </div>
                </div>
                <div class="photo-item">
                    <img src="Images/IMG07.jpg" alt="Photo 7">
                    <div class="photo-details">
                        <p><strong>Camp Fire</strong></p>
                        <p>Rs.4800</p>
                        <button class="add-to-cart" data-id="7" data-name="Camp Fire" data-price="4800">Add to Cart</button>
                    </div>
                </div>
                <div class="photo-item">
                    <img src="Images/IMG08.jpg" alt="Photo 8">
                    <div class="photo-details">
                        <p><strong>River Peace</strong></p>
                        <p>Rs.3300</p>
                        <button class="add-to-cart" data-id="8" data-name="River Peace" data-price="3300">Add to Cart</button>
                    </div>
                </div>
                <div class="photo-item">
                    <img src="Images/IMG09.jpg" alt="Photo 9">
                    <div class="photo-details">
                        <p><strong>Cold Morning</strong></p>
                        <p>Rs.1800</p>
                        <button class="add-to-cart" data-id="9" data-name="Cold Morning" data-price="1800">Add to Cart</button>
                    </div>
                </div>
                <div class="photo-item">
                    <img src="Images/IMG10.jpg" alt="Photo 10">
                    <div class="photo-details">
                        <p><strong>The Wild Elk</strong></p>
                        <p>Rs.3800</p>
                        <button class="add-to-cart" data-id="10" data-name="The Wild Elk" data-price="3800">Add to Cart</button>
                    </div>
                </div>
            </div>
    </div>    
    

    <footer>
        <p>&copy; Journey Snaps 2024</p>
    </footer>
</body>
</html>

<?php
 session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewpoint" content="with=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Carter+One&family=Poppins:wght@200;300;600;900&family=Sarabun:wght@100&display=swap" rel="stylesheet">
        <title>Travel Website</title>
        <link rel="stylesheet" href="explore.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    </head>
    <body>
        <?php
            echo "Welcome ".$_SESSION["name"];
            echo "<br>";
        ?>
        <div id="top"></div>
        <section class="header">
            <nav>
                
                <div class="nav-links">
                    <ul>
                        <li><a href="explore.php">HOME</a></li>
                        <li><a href="showhotel.php">HOTELS</a></li>
                        <li><a href="getreview.php">REVIEW</a></li>
                        <li><form method="post" action="explore_logout.php">
                            <button type="submit" name="logout_button" class="logout">Logout</button>
                          </form></li>
                    </ul>
                </div>
            </nav>
        <div class="text-box">
            <h1>Explore The World With Us!</h1>
            <button onclick="scrollToSection()" class="hero-btn">EXPLORE</button>

        </div>
        </section>
        <section class="leaders" id="my-section">
            <h1>Destinations</h1>
            <p>Explore New Destinations</p>
            <div class="row">
                <div class="course-col">
                    <img src="mount_everests_death_zone_1050x700.webp">
                    <h3><a href="everest.html" style="color: #000000; text-decoration: none;">Mount Everest</a></h3>
                    <p>The climbing season for Mount Everest is generally from late April to early June, during which time the weather conditions are most favorable for climbing. However, climbing Mount Everest is a difficult and dangerous undertaking, and many climbers have lost their lives attempting to reach the summit. As such, it is important to be well-prepared and have proper training and equipment before attempting to climb the mountain. </p>
                </div>
                <div class="course-col">
                    <img src="kathmandu-gettyimages-514651173-1.jpg">
                    <h3><a href="ktm.html" style="color: #000000; text-decoration: none;">Kathmandu</a></h3>
                    <p>The city has a unique blend of ancient and modern architecture, with traditional buildings and narrow streets coexisting alongside modern shopping malls and high-rise buildings. The local cuisine is also diverse and flavorful, with a variety of dishes that reflect the country's cultural and geographic diversity.

                        Kathmandu is also a gateway to the Himalayas, with many treks and expeditions starting from the city. </p>
                </div>
                <div class="course-col">
                    <img src="pokhara.jpg">
                    <h3><a href="pokhara.html" style="color: #000000; text-decoration: none;">Pokhara</a></h3>
                    <p>Pokhara is a city located in central Nepal, about 200 kilometers west of Kathmandu. It is the second largest city in Nepal and is known for its natural beauty and adventure tourism.

                        The city is situated on the banks of the Phewa Lake, with the Annapurna mountain range as its backdrop. This picturesque setting makes Pokhara a popular destination for tourists, who come to enjoy the views, go boating on the lake, and take part in adventure activities such as trekking, paragliding, and rafting.</p>
                </div>
            </div>
        </section>
        <section class="testimonials">
            <a href="bookhotel.php" class="hero-btn">BOOK HOTEL</a>
                
        </section>

        <section class="cta">
            <h1>Join us to explore beautiful destinations<br>Because Travelling Heals The Soul</h1>
            <button onclick="scrollToTop()" class="hero-btn" >Scroll to Top</button>
        </section>
        <section class="footer">
            <h4>About us</h4>
            <p>We thrive to make travel much easier and confortable for everyone.</p>
            <div class="icons">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-linkedin"></i>
                
            </div>
        </section>
        <script>
            function scrollToSection() {
              const section = document.querySelector('#my-section');
              section.scrollIntoView({ behavior: 'smooth' });
            }

            function scrollToTop() {
               window.scrollTo({ top: 0, behavior: 'smooth' });
            }
          </script>
    </body>
</html>
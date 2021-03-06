<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zig Zag Clean</title>
    <link rel="shortcut icon" href="./assets/logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="./css/vendor/icofont/icofont.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "booking";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    function sendMail($name, $email, $phone, $address, $date){
        $to = "zigzagclean.india@gmail.com";
        $subject = "Online Booking $date";
        $headers = "From: $email";
        $txt = "$name \n $phone \n $address \n $date";
        mail($to,$subject,$txt,$headers);
    }

    $name=$email=$phone=$address=$date=$success_msg=$error_msg="";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      $name = $_POST["name"];
      $email = $_POST["email"];
      $phone = $_POST["phone"];
      $address = $_POST["address"];
      $date = date("Y/m/d");
      $sql = "INSERT INTO booking (name, email, phone, address, date)
      VALUES ('$name', '$email', '$phone', '$address', '$date')";

      if (mysqli_query($conn, $sql)) {
        $success_msg= "Booking Successful";
        sendMail($name, $email, $phone, $address, $date);
      } else {
        $error_msg= "Something Went Wrong";
      }

      mysqli_close($conn);
    }

  ?>


    <header class="header" id="home">
        <div class="header-top">

            <div class="header-top-left">
                <p><i class="icofont-email icon"></i><a href="mailto:zigzagclean.india@gmail.com"
                        style="color: #fff; text-decoration: none;">ZigZagClean.India@gmail.com</a></p>
                <p><i class="icofont-phone icon"></i>+91 9355 34 80 80</p>
            </div>

            <div class="header-top-right">
                <div>
                    <a href="https://www.facebook.com/ZigZagClean.India/" class="icon-a" target="blank"><i
                            class="icofont-facebook icon"></i></a>
                    <a href="https://www.instagram.com/zigzagclean/" class="icon-a" target="blank"><i
                            class="icofont-instagram icon"></i></a>
                    <a href="https://wa.me/message/AAFSWBMOTFBZH1" class="icon-a" target="blank"><i
                            class="icofont-whatsapp icon"></i></a>
                </div>
            </div>
        </div>
    </header>

    <nav class="nav">
        <div class="nav-left">
            <img src="./assets/named_logo.png" class="nav-left-logo" />
        </div>

        <div class="nav-right">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#services_nd_pricing">Services & Pricing</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#why_us">Why Us?</a></li>
                <li><a href="#how_to_book">How To Book?</a></li>
            </ul>
        </div>
    </nav>

    <?php
    if($success_msg){
        echo "<div class='success-msg'>$success_msg</div>";
    }else if($error_msg){
        echo "<div class='error-msg'>$error_msg</div>";
    }
    ?>

    <div class="swiper-container" id="home">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="./assets/swiper-img/img-1.jpg" alt="slide-1"></div>
            <div class="swiper-slide"><img src="./assets/swiper-img/img-2.jpg" alt="slide-2"></div>
            <div class="swiper-slide"><img src="./assets/swiper-img/img-3.jpg" alt="slide-3"></div>
            <div class="swiper-slide"><img src="./assets/swiper-img/img-4.jpg" alt="slide-4"></div>
        </div>

        <div class="swiper-pagination"></div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        <article class="swiper-article">
            <p class="swiper-article-header">
                Complete Cleaning <span class="swiper-article-header-highlight">Services At</span> Your <span
                    class="swiper-article-header-highlight">Doorstep</span>
            </p>

            <p class="swiper-article-body">
                We provide trained proffesionals with some best set of tools to shine your vehicle.<br>

            </p>

            <a href="#" class="swiper-article-btn" id="book-now">Book Now <i class="icofont-rounded-right"></i></a>
        </article>
    </div>

    <div id="services_nd_pricing">
        <h2 class="heading">Services & Pricing</h2>

        <div class="card-group">

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front"
                        style="background-image: linear-gradient(to bottom right,rgb(179, 154, 238), rgba(138, 47, 212, 0.884), rgb(232, 220, 255)); ">
                        <div class="flip-card-container">
                            <h2>Standard Wash</h2>
                            <p>Exterior Foam Wash</p>
                            <p>Foot Mats Cleaning</p>
                            <p>Interior Vacuuming</p>
                            <p>Dashboard Polish</p>
                            <p>Tyre Arches Cleaning</p>
                            <p>Car Perfume Spray</p>
                            <p>Tyre Polish</p>
                            <br>
                        </div>
                    </div>
                    <div class="flip-card-back"
                        style="background-image: linear-gradient(to bottom right, rgba(71, 47, 212, 0.884), rgb(179, 154, 238));">
                        <div class="flip-card-container">
                            <img src="./assets/logo.png" style="height: 3em;">
                            <h2>Standard Wash</h2>
                            <p>Hatchback <strong>₹349</strong></p>
                            <p>Sedan <strong>₹399</strong></p>
                            <p>SUV / MUV <strong>₹449</strong></p>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front"
                        style="background-image: linear-gradient(to bottom right,rgb(245, 202, 122), rgb(255, 95, 3), rgb(247, 211, 190));">
                        <div class="flip-card-container">
                            <h2>Delux Wash</h2>
                            <p>Dry Cleaning of Car Roof </p>
                            <p>All Side Door Cleaning </p>
                            <p>Doors Cleaning</p>
                            <p>Windshield Chemical in Water Tank</p>
                            <p>Polishing of All The Plastic Black Parts</p>
                            <br><br>
                        </div>
                    </div>
                    <div class="flip-card-back"
                        style="background-image: linear-gradient(to bottom right,rgb(245, 202, 122), rgb(255, 95, 3));">
                        <div class="flip-card-container">
                            <img src="./assets/logo.png" style="height: 3em;">
                            <h2>Delux Wash</h2>
                            <p>Hatchback <strong>₹499</strong></p>
                            <p>Sedan <strong>₹649</strong></p>
                            <p>SUV / MUV <strong>₹799</strong></p>
                            <p>Luxary <strong>₹999</strong></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front"
                        style="background-image: linear-gradient(to bottom right,rgb(241, 127, 127), rgb(240, 37, 37), rgb(247, 132, 132));">
                        <div class="flip-card-container">
                        <h2>Platinum Wash</h2>
                            <p>All Services of Delux Wash</p>
                            <p>Dry Cleaning Of Car Seats </p>
                            <p>Engine Cleaning</p>
                            <p>Exterior Foam Wash </p>
                            <br><br><br><br><br><br><br>
                        </div>
                    </div>
                    <div class="flip-card-back"
                        style="background-image: linear-gradient(to bottom right,rgb(250, 87, 87), rgba(253, 19, 19, 0.925));">
                        <div class="flip-card-container">
                            <img src="./assets/logo.png" style="height: 3em;">
                            <h2>Platinum Wash</h2>
                            <p>Hatchback <strong>₹799</strong></p>
                            <p>Sedan <strong>₹1,049</strong></p>
                            <p>SUV / MUV <strong>₹1,249</strong></p>
                            <p>Luxary <strong>₹1,450</strong></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front"
                        style="background-image: linear-gradient(to bottom right,rgb(120, 122, 235), rgb(18, 31, 216), rgb(119, 128, 206));">
                        <div class="flip-card-container">
                            <h2>Sofa Cleaning</h2>
                            <p>Dry vacuuming of the front and back side of thesofa usingvacuumcleaner to remove dust</p>
                            <p>Wet Shampooing of sofa using professional grade solution</p>
                            <p>Wet vacuuming of sofa to remove dirty water</p>
                            <br><br><br><br>
                        </div>
                    </div>
                    <div class="flip-card-back"
                        style="background-image: linear-gradient(to bottom right,rgb(163, 162, 245), rgb(22, 53, 231))">
                        <div class="flip-card-container">
                            <img src="./assets/logo.png" style="height: 3em;">
                            <h2>Sofa Cleaning</h2>
                            <p>Per Seat <strong>₹180</strong></p>
                            <br><br><br><br><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="gallery">
        <h2 class="heading">Gallery</h2>
        <img src="./assets/gallery/collage.jpg" alt="Gallery">
    </div>

    <div id="why_us">
        <h2 class="heading">Why Us?</h2>


        <div class="container">

            <div class="container_child-1">
                <i class="icofont-water-drop large_icon" style="color: rgb(25, 125, 219);"></i>
            </div>

            <article class="article container_child-2">
                <h2 class="article-header"><span style="color: rgb(25, 125, 219);">Water</span> Conservation</h2>
                <p class="article-body">
                    Water is one of our most precious, exhaustible resources and Zig Zag Clean’s philosophy is not to
                    waste water unnecessarily. The water consumption of a traditional car wash is about 150-200
                    litres/wash while Zig Zag Clean provides exclusive micro-cleaning system which consumes only 3-4
                    litres of water per wash without producing any waste water. Thanks to the total absence of waste
                    water run-off, Zig Zag Clean services are very efficient in terms of water conservation too.
                </p>
            </article>

        </div>


        <div class="container">

            <article class="article container_child-2">
                <h2 class="article-header"><span style="color: green;">Eco Friendly</span> Products</h2>
                <p class="article-body">
                    We are using a full range of certified biodegradable and environment friendly products. which, in
                    combination to our cleaning system is able to deliver a superior service. The use of effective
                    products that are safe and non-toxic and fully environment friendly.
                </p>
            </article>

            <div class="container_child-1">
                <i class="icofont-eco-energy large_icon" style="color: green;"></i>
            </div>

        </div>
    </div>



    <div id="how_to_book">
        <h2 class="heading">How To book?</h2>
        <div class="book">
            <div class="book-box">
                <div><i class="icofont-smart-phone large_icon book-icon"></i></div>
                <p class="book-desc">Call | Online</p>
            </div>

            <div class="book-box">
                <div><i class="icofont-calendar large_icon book-icon"></i></div>
                <p class="book-desc">Schedule</p>
            </div>

            <div class="book-box">
                <div><i class="icofont-car-alt-4 large_icon book-icon"></i></div>
                <p class="book-desc">Wash</p>
            </div>

            <div class="book-box">
                <div><i class="icofont-rupee-true large_icon book-icon"></i></div>
                <p class="book-desc">Pay</p>
            </div>
        </div>
    </div>

    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3508.790003138876!2d77.09802661455483!3d28.425592700168615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d234ff55874ab%3A0x5d88f89e7fee9f19!2sZig%20Zag%20Clean!5e0!3m2!1sen!2sin!4v1607820087737!5m2!1sen!2sin"
            width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
    </div>

    <footer>

        <div class="sec-1">
            <article class="article">
                <h2 class="article-header footer-left-mark">About Us</h2>
                <p class="article-body" style="height: auto;">
                    Zig Zag Clean established its presence in Gurugram in 2017 and has positioned itself as the next
                    generation of car cleaning and washing services provider.
                </p>
            </article>
        </div>

        <div class="sec-2">
            <article class="article">
                <h2 class="article-header footer-left-mark">Site Link</h2>
                <div>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#services_nd_pricing">Services & Pricing</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        <li><a href="#why_us">Why Us?</a></li>
                        <li><a href="#how_to_book">How To Book?</a></li>
                    </ul>
                </div>
            </article>
        </div>

        <div class="sec-3">
            <article class="article">
                <h2 class="article-header footer-left-mark">Connect</h2>
                <div>
                    <a href="https://www.facebook.com/ZigZagClean.India/" class="icon-a" target="blank"><i
                            class="icofont-facebook icon"></i></a>
                    <a href="https://www.instagram.com/zigzagclean/" class="icon-a" target="blank"><i
                            class="icofont-instagram icon"></i></a>
                    <a href="https://wa.me/message/AAFSWBMOTFBZH1" class="icon-a" target="blank"><i
                            class="icofont-whatsapp icon"></i></a>
                </div>
                <div>
                    <ul>
                        <li>
                            <p><i class="icofont-email icon"></i><a href="mailto:zigzagclean.india@gmail.com"
                                    style="color: #fff; text-decoration: none;">ZigZagClean.India@gmail.com</a></p>
                        </li>

                        <li>
                            <p><i class="icofont-phone icon"></i>+91 9355 34 80 80</p>
                        </li>

                        <li>
                            <p><i class="icofont-google-map icon"></i>P-437, Near Huda Market Sector-40 Main Road,
                            Gurugram,
                            Haryana</p>
                        </li>
                    </ul>
                </div>
            </article>
        </div>
    </footer>

    <div class="copyright">Copyright Zig Zag Clean© 2017-2021 - All rights reserved</div>

    <div id="form-container" class="form-container hidden">
        
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <p id="form-close" style="text-align: end;">&#10006;</p>
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="number" name="phone" placeholder="Phone Number" required>
            <textarea name="address" placeholder="Address" rows="4" cols="50"></textarea>
            <button type="submit" class="submit-btn">Book</button>
        </form>
    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./js/index.js"></script>
</body>

</html>
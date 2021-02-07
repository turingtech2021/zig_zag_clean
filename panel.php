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
    session_start();
    if(!isset($_SESSION["Email"])){
        header("Location: index.php");
    }

    include_once('./db.php');
    $sql = "SELECT * FROM bookings";
    $result = mysqli_query($conn, $sql);
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

    function constructRow($row){ 
        $r="";  
        foreach($row as $key => $value) {
            $r .= "<td>".$value."</td>";
        }
        return $r;
    }

  ?>


    <header class="header" id="home">
        <div class="header-top">

            <div class="header-top-left">
                <p><i class="icofont-email icon"></i><a href="mailto:zigzagclean.india@gmail.com"
                        style="color: #fff; text-decoration: none;">ZigZagClean.India@gmail.com</a></p>
                <p><i class="icofont-phone icon"></i><a href="tel:+919355348080"
                        style="color: #fff; text-decoration: none;">+91 9355 34 80 80</a></p>
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
                <li><a href="#"><?php echo $_SESSION["Email"];?></a></li>
                <li><a href="index.php">Website</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
        </div>
    </nav>



    <table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Address</th>
    <th>Date</th>
  </tr>
  <?php
    foreach($rows as $row) {
        echo "<tr>".constructRow($row)."</tr>";
    }
  ?>
</table>





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

<div class="sec-2"></div>

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

<div class="copyright">Copyright Zig Zag Clean© 2017-<?php echo date("Y");?> - All rights reserved</div>

</body>

</html>
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
    include_once('./db.php');
    include_once('./mail.php');

    $name=$email=$phone=$address=$date=$success_msg=$error_msg="";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      $email = $_POST["email"];
      $password = $_POST["password"];
      $sql = "SELECT * FROM users WHERE Email='$email' and Password='$password'";

      $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION["Email"] = $row["Email"];
        header("Location: panel.php");
    }else {
        $error_msg= "Something Went Wrong";
        echo "<div class='error-msg'>$error_msg</div>";
      }
    }
    ?>

    <div id="form-container" class="form-container">
        
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" class="submit-btn">Log In</button>
        </form>
    </div>
</body>

</html>
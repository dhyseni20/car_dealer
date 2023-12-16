<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="css/style.css" />

</head>

<body>
    <header class="header">
        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="#" class="logo"> <span>HYSENI</span>wheels </a>

        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="vehicles.php">vehicles</a>
            <a href="services.php">services</a>
            <a href="featured.php">featured</a>
            <a href="contact.php">contact</a>
            <?php
            if (isset($_SESSION["username"])) {
                // echo "<script> alert('User is logged in') </script>"; check if session is started
                echo "<a href='profile.php'>Profile</a>";
                echo "<div id='login-btn'>
                <a href='include/logout.inc.php'><button class='btn'>logout</button></a>
                <i class='far fa-user'></i>
                </div>";
            } else {
                echo "<div id='login-btn'>
                <a href='login.php'><button class='btn'>login</button></a>
                <i class='far fa-user'></i>
                </div>";
            }

            ?>
        </nav>


    </header>
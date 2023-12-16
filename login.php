<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="css/styleregister.css" />
</head>



<body>
    <!-- <div class="container">

        <form action="include/login.inc.php" method="POST">

            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Log In</p>

            <div class="input-group">
                <input type="text" placeholder="email/username" name="uid" class="box" />
            </div>

            <div class="input-group">
                <input type="password" placeholder="password" name="pass" class="box" />
            </div>


            <div class="input-group">
                <button type="submit" name="submit" class="btn">Log In</button><br />
            </div>

            <p class="login-register-text">DO NOT HAVE AN ACCOUNT <a href="index.php">Login Here</a>.</p>
            <div class="buttons">
                <a href="register.php" class="btn"> Register </a>
            </div>

        </form>

    </div> -->


    <div class="container">
        <form action="include/login.inc.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Log IN</p>


            <div class="input-group">
                <input type="text" placeholder="Username/email" name="uid" value="" required>
            </div>

            <div class="input-group">
                <input type="password" placeholder="Password" name="pass" value="" required>
            </div>

            <div class="input-group">
                <button type="submit" name="submit" class="btn">Login</button>
            </div>
            <p class="login-register-text">Do Not Have An Account? <a href="register.php">Register Here</a>.</p>
        </form>

    </div>



    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<script> alert('Please fill all the fields') </script>";
        } else if ($_GET["error"] == "wronglogin") {
            echo "<script> alert('The username or password is invalid') </script>";
        }
    }

    ?>

</body>

</html>
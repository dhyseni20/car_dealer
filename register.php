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
    <div class="container">

        <form action="include/register.inc.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>

            <div class="input-group">
                <input type="text" placeholder="Full Name" name="fullname" value="" required>
            </div>

            <div class="input-group">
                <input type="text" placeholder="Username" name="username" value="" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirm Password" name="cpassword" value="" required>
            </div>
            <div class="input-group">
                <button type="submit" name="submit" class="btn">Register</button>
            </div>
            <p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
        </form>

    </div>

    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<script> alert('Please fill all the fields') </script>";
        } else if ($_GET["error"] == "invalidusername") {
            echo "<script> alert('The username in invalid') </script>";
        } else if ($_GET["error"] == "invalidemail") {
            echo "<script> alert('The email in invalid') </script>";
        } else if ($_GET["error"] == "passwordsnotmatch") {
            echo "<script> alert('The passwords do not match') </script>";
        } else if ($_GET["error"] == "usernametaken") {
            echo "<script> alert('The username or email you typed is already taken') </script>";
        } else if ($_GET["error"] == "none") {
            echo "<script> alert('Successful Registration') </script>";
        } else if ($_GET["error"] == "stmtfailed") {
            echo "<script> alert('Somwthing went wrong. Contact the developer) </script>";
        }
    }

    ?>



</body>

</html>
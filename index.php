<?php
include 'include/db.inc.php';
include_once 'header.php';

?>

<section class="home" id="home">
  <?php
  if (isset($_SESSION["username"])) {
    // echo "<script> alert('User is logged in') </script>"; check if session is started
    echo "<h3 data-speed='-2' class='home-parallax'>find your car " . $_SESSION["username"] . "</h3>";
  } else {
    echo "<h3 data-speed='-2' class='home-parallax'>find your car</h3>";
  }

  ?>
  <img data-speed="5" class="home-parallax" src="image/home-img.png" alt="" />

  <a data-speed="7" href="#" class="btn home-parallax">explore cars</a>
</section>

<section class="icons-container">
  <div class="icons">
    <i class="fas fa-home"></i>
    <div class="content">
      <h3>150+</h3>
      <p>branches</p>
    </div>
  </div>

  <div class="icons">
    <i class="fas fa-car"></i>
    <div class="content">
      <h3>4770+</h3>
      <p>cars sold</p>
    </div>
  </div>

  <div class="icons">
    <i class="fas fa-users"></i>
    <div class="content">
      <h3>320+</h3>
      <p>happy clients</p>
    </div>
  </div>

  <div class="icons">
    <i class="fas fa-car"></i>
    <div class="content">
      <h3>1500+</h3>
      <p>news cars</p>
    </div>
  </div>
</section>

<section class="newsletter" id="newsletter">
  <h3>subscribe for latest updates</h3>
  <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum,
    suscipit.
  </p>

  <form action="">
    <input type="email" placeholder="enter your email" />
    <input type="submit" value="subscribe" />
  </form>
  <a href="mailto: dhyseni20@epoka.edu.al">
    <button style="
            background: #f9d806;
            border: 1px solid;
            border-radius: 10px;
            padding: 2px;
            font-size: 20px;
          " class="sendEmailBtn">
      Email
    </button>
  </a>
</section>


<?php
include_once 'reviewssss.php';
include_once 'footer.php';
?>
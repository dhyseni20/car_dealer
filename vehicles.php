<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

  <!-- custom css file link  -->
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
    </nav>

    <div id="login-btn">
      <button class="btn">login</button>
      <i class="far fa-user"></i>
    </div>
  </header>

  <div class="login-form-container">
    <span id="close-login-form" class="fas fa-times"></span>

    <form action="">
      <h3>user login</h3>
      <input type="email" placeholder="email" class="box" />
      <input type="password" placeholder="password" class="box" />
      <p>forget your password <a href="#">click here</a></p>
      <input type="submit" value="login" class="btn" />

      <p>don't have an account <a href="register.php">create one</a></p>
    </form>
  </div>

  <section class="home" id="home">
    <!-- <h3 data-speed="-2" class="home-parallax">find your car</h3> -->
  </section>

  <section class="vehicles" id="vehicles">
    <h1 class="heading">popular <span>vehicles</span></h1>

    <div class="swiper vehicles-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide box">
          <img src="image/vehicle-1.png" alt="" />
          <div class="content">
            <h3>new model</h3>
            <div class="price"><span>price : </span> $62,000/-</div>
            <p>
              new
              <span class="fas fa-circle"></span> 2021
              <span class="fas fa-circle"></span> automatic
              <span class="fas fa-circle"></span> petrol
              <span class="fas fa-circle"></span> 183mph
            </p>
            <a href="#" class="btn">check out</a>
          </div>
        </div>

        <div class="swiper-slide box">
          <img src="image/vehicle-2.png" alt="" />
          <div class="content">
            <h3>new model</h3>
            <div class="price"><span>price : </span> $62,000/-</div>
            <p>
              new
              <span class="fas fa-circle"></span> 2021
              <span class="fas fa-circle"></span> automatic
              <span class="fas fa-circle"></span> petrol
              <span class="fas fa-circle"></span> 183mph
            </p>
            <a href="#" class="btn">check out</a>
          </div>
        </div>

        <div class="swiper-slide box">
          <img src="image/vehicle-3.png" alt="" />
          <div class="content">
            <h3>new model</h3>
            <div class="price"><span>price : </span> $62,000/-</div>
            <p>
              new
              <span class="fas fa-circle"></span> 2021
              <span class="fas fa-circle"></span> automatic
              <span class="fas fa-circle"></span> petrol
              <span class="fas fa-circle"></span> 183mph
            </p>
            <a href="#" class="btn">check out</a>
          </div>
        </div>

        <div class="swiper-slide box">
          <img src="image/vehicle-4.png" alt="" />
          <div class="content">
            <h3>new model</h3>
            <div class="price"><span>price : </span> $62,000/-</div>
            <p>
              new
              <span class="fas fa-circle"></span> 2021
              <span class="fas fa-circle"></span> automatic
              <span class="fas fa-circle"></span> petrol
              <span class="fas fa-circle"></span> 183mph
            </p>
            <a href="#" class="btn">check out</a>
          </div>
        </div>

        <div class="swiper-slide box">
          <img src="image/vehicle-5.png" alt="" />
          <div class="content">
            <h3>new model</h3>
            <div class="price"><span>price : </span> $62,000/-</div>
            <p>
              new
              <span class="fas fa-circle"></span> 2021
              <span class="fas fa-circle"></span> automatic
              <span class="fas fa-circle"></span> petrol
              <span class="fas fa-circle"></span> 183mph
            </p>
            <a href="#" class="btn">check out</a>
          </div>
        </div>

        <div class="swiper-slide box">
          <img src="image/vehicle-6.png" alt="" />
          <div class="content">
            <h3>new model</h3>
            <div class="price"><span>price : </span> $62,000/-</div>
            <p>
              new
              <span class="fas fa-circle"></span> 2021
              <span class="fas fa-circle"></span> automatic
              <span class="fas fa-circle"></span> petrol
              <span class="fas fa-circle"></span> 183mph
            </p>
            <a href="#" class="btn">check out</a>
          </div>
        </div>
      </div>

      <div class="swiper-pagination"></div>
    </div>
  </section>

  <div style="position: center">
    <audio controls unmuted autoplay>
      <source src="image/audio.mp3" type="audio/mp3" />
    </audio>
  </div>

  <div>
    <iframe width="1350" height="480" src="https://www.youtube.com/embed/Piw67Dl_VaM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>

  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

  <script src="js/script.js"></script>
</body>

</html>
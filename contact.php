<?php
include 'include/db.inc.php';
include_once 'header.php';

?>

<section class="contact" id="contact">
  <h1 class="heading"><span>contact</span> us</h1>

  <div class="row">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5032.907231812779!2d19.70391786188995!3d41.40482799129294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13502c4d8e14227d%3A0x92c16879aa946786!2sUniversiteti%20Epoka!5e0!3m2!1ssq!2s!4v1650726405891!5m2!1ssq!2s" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <form action="">
      <h3>get in touch</h3>
      <input type="text" placeholder="your name" class="box" />
      <input type="email" placeholder="your email" class="box" />
      <input type="tel" placeholder="subject" class="box" />
      <textarea placeholder="your message" class="box" cols="30" rows="10"></textarea>
      <input type="submit" value="send message" class="btn" />
    </form>
  </div>
</section>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<?php
include_once 'footer.php';
?>

</html>
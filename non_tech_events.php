<?php
require_once('dbConnect.php');
require_once('functions.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>VISION 2021</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <link href="assets/img/faviconGreen.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <script src="jquery.js"></script>
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/form.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>
<style>
h3{
    font-size:32px !important;
    font-weight:700 !important;
    color:greenyellow !important;
}
header p{
    color: greenyellow !important;
}
</style>

<body>

<?php include "header.php"; ?>
<!-- ======= Services Section ======= -->
<section  class="services" style="margin-top:60px;">

<div class="container" data-aos="fade-left">

  <header class="section-header" style="margin-bottom:5px;" >
    <p>NON-TECHNICAL EVENTS</p>
  </header>

  <div class="row gy-4">

    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
      <a href="ceg_hunt.php">
      <div class="service-box red">
        <i class="ri-discuss-line icon"></i>
        <h3>CEG Hunt</h3>
        <p>It's time to prove your love towards our Red Lady</p>
        <p class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></p>
      </div>
      </a>
    </div>

    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
      <a href="gen_quiz.php">
      <div class="service-box purple">
        <i class="ri-discuss-line icon"></i>
        <h3>General Quiz</h3>
        <p>A ready made quiz for you, if you will</p>
        <p class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></p>
      </div>
      </a>
    </div>

    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
      <a href="connexion.php">
      <div class="service-box blue">
        <i class="ri-discuss-line icon"></i>
        <h3>Connexion</h3>
        <p>Creativity is just connecting things</p>
        <p class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></p>
      </div>
      </a>
    </div>

    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
      <a href="22yards.php">
      <div class="service-box orange">
        <i class="ri-discuss-line icon"></i>
        <h3>22 Yards</h3>
        <p>Compete to conquer the trophy by unleashing the cricketer in you</p>
        <p class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></p>
      </div>
      </a>
    </div>

    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
      <a href="couch_potato.php">
      <div class="service-box green">
        <i class="ri-discuss-line icon"></i>
        <h3>Couch Potato</h3>
        <p>Time to show the world how much you love Marvel and Harry Potter</p>
        <p class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></p>
      </div>
      </a>
    </div>

    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
      <a href="kollywood_quiz.php">
      <div class="service-box red">
        <i class="ri-discuss-line icon"></i>
        <h3>Kollywood Quiz </h3>
        <p>Tamil Cinema awaits your presence</p>
        <p class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></p>
      </div>
      </a>
    </div>
    
  </div>
    </section><!-- End Services Section -->

<div style="height:50px;"></div>

  <?php include "alt-footer.php"; ?>
</body>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

</html>
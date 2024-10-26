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

<body>
  <?php include "header.php"; ?>

<!-- ======= Pricing Section ======= -->
<section id="workshop" class="pricing"  style="margin-top:60px;" >

<div class="container" data-aos="fade-left">

  <header class="section-header" style="margin-bottom:40px;" >
  <h2>Improve your skills</h2>
  <p>Workshops</p> 
  </header>

  <div class="row gy-3 justify-content-center" data-aos="fade-left">

    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
      <div class="box">
      <span class="opened">Open</span>
        <h3 style="color: #07d5c0;">Python & Cloud Computing</h3>
        <div class="price"><sup>Rupees</sup>100<span> </span></div>
        <img src="assets/img/workshops/pythoncloud.png" class="img-fluid" alt="">
        <ul>
          <li>Conducted by Agilisium Consulting</li>
          <li>Register Fast! Limited Seats Available.</li>
        </ul>
        <a href="pythoncloudcomputing.php" class="btn-buy">Details</a>
      </div>
    </div>

    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
      <div class="box">
        <span class="opened">Open</span>
        <h3 style="color: #ff0071;">Emerging Communication Technologies Masterclass</h3>
        <div class="price"><sup>Rupees</sup>250<span> </span></div>
        <img src="assets/img/workshops/communication.png" class="img-fluid" alt="">
        <ul>
          <li>Conducted by BSNL</li>
          <li>Register Fast! Limited Seats Available.</li>
          <!--<li class="na">Early Bird Offer: Rs.300</li>-->
        </ul>
        <a href="emergingcommtech.php" class="btn-buy">Details</a>
      </div>
    </div>

    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
      <div class="box">
      <span class="opened">Open</span>
        <h3 style="color: #ff901c;">Electric & Hybrid Vehicles</h3>
        <div class="price"><sup>Rupees</sup>100<span> </span></div>
        <img src="assets/img/workshops/EVS.png" class="img-fluid" alt="">
        <ul>
          <li>Conducted by Smartknower</li>
          <li>Register Fast! Limited Seats Available.</li>
        </ul>
        <a href="electric_hybrid_vehicles.php" class="btn-buy">Details</a>
      </div>
    </div>

  </div>
  <div style="height:50px;"></div>
  <div class="row gy-2 justify-content-center" data-aos="fade-left">
    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
      <div class="box">
      <span class="opened">Open</span>
        <h3 style="color: #65c600;">Building Virtual Robots using Coppeliasim</h3>
        <div class="price"><sup>Rupees</sup>150<span> </span></div>
        <img src="assets/img/workshops/robotics.png" class="img-fluid" alt="">
        <ul>
          <li>Conducted by Robotics Club Of CEG</li>
          <li>Register Fast! Limited Seats Available.</li>
        </ul>
        <a href="virtualrobot_exp.php" class="btn-buy">Details</a>
      </div>
    </div>
    
    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
      <div class="box">
      <span class="opened">Open</span>
        <h3 style="color: #07d5c0;">Data Science & Artificial Intelligence &emsp;</h3>
        <div class="price"><sup>Rupees</sup>250<span> </span></div>
        <img src="assets/img/workshops/dsai.png" class="img-fluid" alt="">
        <ul>
          <li>Conducted by Micron Technology</li>
          <li>Register Fast! Limited Seats Available.</li>
        </ul>
        <a href="datascience_ai.php" class="btn-buy">Details</a>
      </div>
    </div>

  </div>

</div>

</section>

<div style="height:50px;"></div>
  <?php include "alt-footer.php"; ?>
</body>
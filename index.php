<?php 
require_once('dbConnect.php');
require_once('functions.php');

  if(isset($_GET['logout'])){
    removeAll();
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>VISION '21</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/faviconGreen.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
 
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

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

/* Preloader */

#preloader {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #000000;
  /* change if the mask should have another color then white */
  z-index: 999999;
  /* makes sure it stays on top */
}

#status {
  width: 225px;
  height: 225px;
  position: absolute;
  left: 50%;
  /* centers the loading animation horizontally one the screen */
  top: 49%;
  /* centers the loading animation vertically one the screen 
      url(assets/img/jv.gif)  */
  background-image: url(none);
  /* path to your loading animation */
  background-repeat: no-repeat;
  background-position: center;
  margin: -110px 0 0 -110px;
  /* is width and height divided by two */
}

.animation01{
    position: absolute;
    width: 100%;
    height: 100%;
}
.border_box{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 15vw;
    height: 15vw;
}
.line{
    display: block;
    position: absolute;
    right: 0;
    bottom: 0;
    background-color: #845b46;
    opacity: 0;
}
.line01{
    top: 0;
    left: 100%;
    width: 0.15vw;
    height: 15.15vw;
    transform-origin: bottom;
    animation: animation01_line01 0.2s linear 0.3s forwards;
}
.line03{
    top: 0;
    left: 0;
    width: 0.15vw;
    height: 15.15vw;
    transform-origin: bottom;
    animation: animation01_line01 0.2s linear 0.6s forwards;
}
@keyframes animation01_line01{
    0%{
        transform: scale3d(1,0,1);
        opacity: 1;
    }
    100%{
        transform: scale3d(1,1,1);
        opacity: 1;
    }
}
.line02{
    top: 100%;
    left: 0;
    width: 15.15vw;
    height: 0.15vw;
    transform-origin: right;
    animation: animation01_line02 0.2s linear 0.4s forwards;
}
.line04{
    top: 0;
    left: 0;
    width: 15.15vw;
    height: 0.15vw;
    transform-origin: left;
    animation: animation01_line02 0.2s linear 0.8s forwards;
}
@keyframes animation01_line02{
    0%{
        transform: scale3d(0,1,1);
        opacity: 1;
    }
    100%{
        transform: scale3d(1,1,1);
        opacity: 1;
    }
}
.circle{
    display: block;
    position: absolute;
    right: 0;
    bottom: 0;
    width: 1.1vw;
    height: 1.1vw;
    border: 0.1vw solid #fff;
    border-radius: 50%;
    opacity: 0;
}
.circle01{
    top: 96%;
    left: 96%;
    margin: 0 auto;
    animation: animation01_circle 0.3s linear 0.3s forwards;
}
.circle02{
    top: 96%;
    left: -99%;
    margin: 0 auto;
    animation: animation01_circle 0.3s linear 0.45s forwards;
}
.circle03{
    top: -4%;
    left: -99%;
    margin: 0 auto;
    animation: animation01_circle 0.3s linear 0.65s forwards;
}
.circle04{
    top: -4%;
    left: 96%;
    margin: 0 auto;
    animation: animation01_circle 0.3s linear 0.85s forwards;
}
@keyframes animation01_circle{
    0%{
        transform: scale3d(0,0,1);
        opacity: 1;
    }
    40%{
        transform: scale3d(1,1,1);
        opacity: 1;
    }
    60%{
        transform: scale3d(1,1,1);
        opacity: 1;
    }
    100%{
        transform: scale3d(0,0,1);
        opacity: 1;
    }
}

.wave{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 13.5vw;
    height: 13.5vw;
    overflow: hidden;
}
.wave_wrapper{
    width: 200%;
    height: 150%;
    position: absolute;
    top: -25%;
    right: 0;
    bottom: 0;
    left: -50%;
    margin: 0 auto;
    animation: animation01_wave_wrapper 0.5s linear 0.5s forwards;
}
@keyframes animation01_wave_wrapper{
    0%{
        transform: rotate(0);
    }
    25%{
        transform: rotate(15deg);
    }
    50%{
        transform: rotate(0);
    }
    75%{
        transform: rotate(-15deg);
    }
    100%{
        transform: rotate(0);
    }
}
.wave_box{
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    margin: 0 auto;
    width: 100%;
    height: 100%;
    background-color: #fff;
    transform-origin: bottom;
    animation: animation01_wave_box 0.5s linear 0.5s forwards;
    opacity: 0;
}
@keyframes animation01_wave_box{
    0%{
        transform: scale3d(1,0,1);
        opacity: 1;
    }
    100%{
        transform: scale3d(1,1,1);
        opacity: 1;
    }
}
.animation_line{
    position: absolute;
    right: 0;
    bottom: 0;
    margin: 0 auto;
    background-color: #fff;
    opacity: 0;
}
.animation_line_wrapper{
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    margin: 0 auto;
    width: 100%;
    height: 100%;
}
.animation_line01{
    top: -15%;
    left: 0;
    width: 0.2vw;
    height: 0.7vw;
    animation: animation_line01 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) 1s;
    transform-origin: top;
}
.animation_line02_wrapper{
    transform: rotate(45deg)
}
.animation_line02{
    top: -35%;
    left: 0;
    width: 0.2vw;
    height: 0.7vw;
    animation: animation_line01 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) 1s;
    transform-origin: top;
}
@keyframes animation_line01{
    0%{
        transform: translateY(0);
        opacity: 1;
    }
    100%{
        transform: translateY(-1.5vw);
        opacity: 1;
    }
}
.animation_line03{
    top: 50%;
    left: 110%;
    width: 0.7vw;
    height: 0.2vw;
    animation: animation_line03 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) 1s;
    transform-origin: right;
}
.animation_line04_wrapper{
    transform: rotate(45deg)
}
.animation_line04{
    top: 50%;
    left: 128%;
    width: 0.7vw;
    height: 0.2vw;
    animation: animation_line03 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) 1s;
    transform-origin: right;
}
@keyframes animation_line03{
    0%{
        transform: translateX(0);
        opacity: 1;
    }
    100%{
        transform: translateX(1.5vw);
        opacity: 1;
    }
}
.animation_line05{
    top: 110%;
    left: 0;
    width: 0.2vw;
    height: 0.7vw;
    animation: animation_line05 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) 1s;
    transform-origin: bottom;
}
.animation_line06_wrapper{
    transform: rotate(45deg)
}
.animation_line06{
    top: 128%;
    left: 0;
    width: 0.2vw;
    height: 0.7vw;
    animation: animation_line05 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) 1s;
    transform-origin: bottom;
}
@keyframes animation_line05{
    0%{
        transform: translateY(0);
        opacity: 1;
    }
    100%{
        transform: translateY(1.5vw);
        opacity: 1;
    }
}
.animation_line07{
    top: 50%;
    left: -130%;
    width: 0.7vw;
    height: 0.2vw;
    animation: animation_line07 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) 1s;
    transform-origin: left;
}
.animation_line08_wrapper{
    transform: rotate(45deg)
}
.animation_line08{
    top: 50%;
    left: -162%;
    width: 0.7vw;
    height: 0.2vw;
    animation: animation_line07 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) 1s;
    transform-origin: left;
}
@keyframes animation_line07{
    0%{
        transform: translateX(0);
        opacity: 1;
    }
    100%{
        transform: translateX(-1.5vw);
        opacity: 1;
    }
}

.rhombus{
    position: absolute;
    width: 100%;
    height: 100%;
    animation: rhombus 0.2s linear 1s forwards;
}
@keyframes rhombus {
    0%{
        transform: rotate(0)
    }
    100%{
        transform: rotate(45deg)
    }
}
.rhombus_small{
    position: absolute;
    width: 100%;
    height: 100%;
    animation: rhombus_small 0.4s linear 1s forwards;
}
@keyframes rhombus_small {
    0%{
        transform: scale3d(1,1,1);
        opacity: 1;
    }
    99%{
        transform: scale3d(0.15,0.15,0.15);
        opacity: 1;
    }
    100%{
        transform: scale3d(0.15,0.15,0.15);
        opacity: 0;
    }
}

/*===================
animation02
====================*/
.animation02{
    position: absolute;
    width: 100%;
    height: 100%;
}
.rhombus_box{
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    margin: auto;
    width: 40vw;
    height: 40vw;
    animation: rhombus_box 0.4s linear 2s forwards;
}
.rhombus_item_wrapper{
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    margin: auto;
    width: 2.1vw;
    height: 2.1vw;
    opacity: 0;
}
.rhombus_item{
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    margin: auto;
    width: 2.1vw;
    height: 2.1vw;
    background-color: #fff;
    transform: rotate(45deg)
}
.rhombus_item01_wrapper{
    animation: rhombus_item01 0.5s linear 1s forwards;
}

.rhombus_item02_wrapper{
    animation: rhombus_item02 0.5s linear 1s forwards;
}
@keyframes rhombus_item01{
    0%{
        transform: translateX(0);
        opacity: 1;
    }
    100%{
        transform: translateX(-18.5vw);
        opacity: 1;
    }
}
@keyframes rhombus_item02{
    0%{
        transform: translateX(0);
        opacity: 1;
    }
    100%{
        transform: translateX(18.5vw);
        opacity: 1;
    }
}
@keyframes rhombus_box{
    0%{
        transform: rotate(0)
    }
    100%{
        transform: rotate(360deg)
    }
}

.double_content{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 100%;
    height: 100%;
}
.double_wrapper02{
    position: relative;
    width: 100%;
    height: 100%;
    animation: double_content forwards;
    opacity: 0;
}
.double_wrapper01{
    display: block;
    position: absolute;
    border-radius: 50%;
    overflow: hidden;
}
.double_wrapper01::before {
    content: "";
    display: block;
    position: absolute;
    background: #212022;
    z-index: 2;
}
.double_wrapper01::after {
    content: "";
    display: block;
    position: absolute;
    background: #212022;
    z-index: 3;
}
@import url('https://fonts.googleapis.com/css?family=Montserrat');
.name{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 30vw;
    height: 30vw;
    animation: name 1.0s cubic-bezier(0.165, 0.84, 0.44, 1) 1s forwards;
    opacity: 0;
}
.name p{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    background-image: url(https://media.giphy.com/media/26BROrSHlmyzzHf3i/giphy-downsized.gif);
    background-size: cover;
    color: transparent;
    -moz-background-clip: text;
    -webkit-background-clip: text;
    text-transform: uppercase;
    font-size: 4.0vw;
    letter-spacing: 0.1em;
}

@keyframes name {
    0%{
        opacity: 0;
    }
    100%{
        opacity: 1;
    }
}
</style>


<body>

  <div id="preloader">
    <div class="animation01">
        <div class="rhombus_small">
            <div class="rhombus">
                <div class="border_box">
                    <span class="line line01"></span>
                    <span class="line line02"></span>
                    <span class="line line03"></span>
                    <span class="line line04"></span>
                    <span class="circle circle01"></span>
                    <span class="circle circle02"></span>
                    <span class="circle circle03"></span>
                    <span class="circle circle04"></span>
                    <span class="animation_line animation_line01"></span>
                    <span class="animation_line_wrapper animation_line02_wrapper"><span class="animation_line animation_line02"></span></span>
                    <span class="animation_line animation_line03"></span>
                    <span class="animation_line_wrapper animation_line04_wrapper"><span class="animation_line animation_line04"></span></span>
                    <span class="animation_line animation_line05"></span>
                    <span class="animation_line_wrapper animation_line06_wrapper"><span class="animation_line animation_line06"></span></span>
                    <span class="animation_line animation_line07"></span>
                    <span class="animation_line_wrapper animation_line08_wrapper"><span class="animation_line animation_line08"></span></span>
                </div>
                <div class="wave">
                    <div class="wave_wrapper"><div class="wave_box"></div></div>
                </div>
            </div>
        </div>
    </div>
    <div class="animation02">
        <div class="rhombus_box">
            <span class="rhombus_item_wrapper rhombus_item01_wrapper"><span class="rhombus_item"></span></span>
            <span class="rhombus_item_wrapper rhombus_item02_wrapper"><span class="rhombus_item"></span></span>
        </div>
        <div class="double_content">
            <div class="double_wrapper02 dotted02"><div class="dotted_hide"><div class="double_wrapper01 dotted01"><span class="dotted_right"></span></div></div></div>
            <div class="double_wrapper02 white02"><div class="double_wrapper01 white01"></div></div>
            <div class="double_wrapper02 gray02"><div class="double_wrapper01 gray01"></div></div>
            <div class="double_wrapper02 orange02"><div class="double_wrapper01 orange01"></div></div>
        </div>
        <div class="name">
            <p>VISION &nbsp;&nbsp; '21</p>
        </div>
    </div>
    <div id="status"></div>
    </div>

    <script>
          $(window).on('load', function() { // makes sure the whole site is loaded 
          $('#status').delay(350).fadeOut(); // will first fade out the loading animation 
          $('#preloader').delay(5500).fadeOut('slow'); // will fade out the white DIV that covers the website. 
          $('body').delay(350).css({'overflow':'visible'});
        })
    </script>

<?php include "header.php"; ?>
    
<div class="main-bg">
  <section  class="hero d-flex align-items-center">

  <div class="container">
      <div class="row">
        <div class="col-lg-3 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up text-center" class="text-center aos-init aos-animate hide" style="color:white;font-weight:bolder;">APRIL 15,16,17</h1>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/visionlogowhite.png" class="img-fluid" alt="" height="1200" width ="750">
        </div>
        <div class="col-lg-3 d-flex flex-column justify-content-center">
          <h2  data-aos="fade-up text-center" data-aos-delay="400" class="aos-init aos-animate text-center"style="color:white !important;font-weight:bolder;">26th INTER COLLEGE SYMPOSIUM</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>About Us</span>
                <i class="bi bi-arrow-down"></i>
              </a>
            </div>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->


  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h2>ABOUT US</h2>
              <p>
                &emsp; &emsp; VISION is a National Level Intercollegiate Technical Symposium organized by the Department of Electronics and Communication Engineering. 
                <br>&emsp; &emsp; Exclusively run by students, it's an annual summit for both young and experienced industry practitioners, researchers and students who join to share experiences and develop networks. It provides ample opportunities for the multi-pronged growth of the student fraternity and has undoubtedly become a must-visit-fest for every engineering student. 
                <br>&emsp; &emsp; Filled with exciting events, it offers the right platform for fostering innovation. Owing to the current trend, VISION 2021, will bring the same zest, but through virtual mode.
              </p>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/portfolio/Vision 2020 - 1_edit.jpg" style="
  border-radius: 20px;" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= Values Section ======= -->
    <section id="values" class="values" style="
           padding-top: 5%; padding-bottom: 1%;" >

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Our Values</h2>
          <p>WE at #TeamVision strongly believe in these values.</p>
        </header>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="fade-up" data-aos-delay="200">
              <img src="assets/img/values-1_new.JPG" class="img-fluid" alt="">
              <h3>ProActive Problem Solving</h3>
              <p>Approaching a problem with both the current and future in sight is always benificial.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="400">
              <img src="assets/img/values-2_new.jpg" class="img-fluid" alt="">
              <h3>Inspiring Creativity</h3>
              <p>We love to inspire others to work creatively. </p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="600">
              <img src="assets/img/values-3_new.jpeg" class="img-fluid" alt="">
              <h3>Self Driving Spirit</h3>
              <p>Constantly working to better oneself is one of our vital values.</p>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Values Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-slack"></i>
              <div>
                <span data-purecounter-delay="50" data-purecounter-once="false" data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="50" class="purecounter"></span>
                <p>Events</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-tools" style="color: #ee6c20;"></i>
              <div>
                <span data-purecounter-delay="50" data-purecounter-once="false" data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="7" class="purecounter"></span>
                <p>Workshops</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-wallet2" style="color: #15be56;"></i>
              <div>
                <span data-purecounter-once="false" data-purecounter-start="0" data-purecounter-end="45" data-purecounter-duration="2" class="purecounter k_adder"></span>
                <p>Total Prize Money</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-eye-slash" style="color: #bb0852;"></i>
              <div>
                <span data-purecounter-delay="50" data-purecounter-once="false" data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="7" class="purecounter"></span>
                <p>Website Clues</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    
    <!-- ======= Portfolio Section ======= -->
    <section id="gallery" class="portfolio">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Memories</h2>
          <p>Gallery</p>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li onclick="show()" data-filter="*">All</li>
              <li onclick="show()" data-filter=".filter-app">Vision 2020</li>
              <li onclick="show()" data-filter=".filter-card">Resonance 2020</li>
              <li onclick="show()" data-filter=".filter-web">Directivity 2021</li>
              <li onclick="hide()"  class="filter-active" >Toggle Gallery</li>
            </ul>
          </div>
        </div>

        <div class="row gy-4 portfolio-container " style="display:none" id="hidegal" data-aos="fade-up" data-aos-delay="200" >

          

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Vision 2020 Inaguration - 1.jpg" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Resonance 2020 -1.jpg" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Vision 2020 Inaguration - 2.jpg" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Vision 2020 Inaguration - 3.jpg" class="img-fluid" alt="">
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Vision 2020 Inaguration - 4.jpg" class="img-fluid" alt="">
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Vision 2020 - 3.jpg" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Cores Meet 2020.jpg" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Vision 2020 Inaguration - 5.jpg" class="img-fluid" alt="">
            </div>
          </div>

          

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Vision 2020 - 1.jpg" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Vision 2020 - 2.jpg" class="img-fluid" alt="">
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Resonance 2020 - 2.jpg" class="img-fluid" alt="">
            </div>
          </div>

          

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Cores Meet 2020 - 2.jpg" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Directivity 2021 -1.jpg" class="img-fluid" alt="">
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Directivity 2021 - 2.jpg" class="img-fluid" alt="">
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Directivity 2021 - 3.jpg" class="img-fluid" alt="">
              
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Portfolio Section -->


    <!-- ======= Team Section ======= -->
    <section id="team" class="team">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Team</h2>
          <p>Web Development & Design Team</p>
        </header>

        <div class="row gy-6 justify-content">
          
        <div class="col-lg-2 col-md-0" ></div>
            <div class="col-lg-2 col-md-2 d-flex align-items-stretch mobview" data-aos="fade-up" data-aos-delay="300">
                <div class="member">
                  <div class="member-img">
                    <img src="assets/img/team/darshan.jpg" class="img-fluid" alt="">
                    <div class="social">
                      <a href="https://www.instagram.com/darshan_vj_/" target="_blank"><i class="bi bi-instagram"></i></a>
                      <a href="https://www.linkedin.com/in/darshan-vijay" target="_blank"><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Darshan Vijay</h4>
                    <span>Web Dev Head</span>
                  </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-2 d-flex align-items-stretch mobview" data-aos="fade-up" data-aos-delay="200">
              <div class="member">
                <div class="member-img">
                  <img src="assets/img/team/rahul.jpg" class="img-fluid" alt="">
                  <div class="social">
                    <a href="https://www.linkedin.com/in/rahul-solaiappan-35462660/" target="_blank"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Rahul Solaiappan</h4>
                  <span>Web Dev Core</span>
                </div>
              </div>
            </div>

            <div class="col-lg-2 col-md-2 d-flex align-items-stretch mobview" data-aos="fade-up" data-aos-delay="200">
              <div class="member">
                <div class="member-img">
                  <img src="assets/img/team/viswapd.jpeg" class="img-fluid" alt="">
                  <div class="social">
                    <a href="https://www.linkedin.com/in/viswa-prasad"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Vishwaparsad</h4>
                  <span>Website Hosting</span>
                </div>
              </div>
            </div>

            <div class="col-lg-2 col-md-2 d-flex align-items-stretch mobview" data-aos="fade-up" data-aos-delay="300">
              <div class="member">
                <div class="member-img">
                  <img src="assets/img/team/mohan.jpeg" class="img-fluid" alt="">
                  <div class="social">
                    <a href="https://www.instagram.com/mohankumar_jc/"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/mohan-kumar-j-c-7727041b7"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Mohan Kumar</h4>
                  <span>Web Dev Assist</span>
                </div>
              </div>
            </div>

            <div class="col-lg-2 col-md-0" ></div>
        </div>

        <div style="height:50px"></div>

        <div class="row gy-6 justify-content">

            <div class="col-lg-2 col-md-2 d-flex align-items-stretch mobview" data-aos="fade-up" data-aos-delay="300">
                <div class="member">
                  <div class="member-img">
                    <img src="assets/img/team/deepthi.jpeg" class="img-fluid" alt="">
                    <div class="social">
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Deepthi</h4>
                    <span>Design Head</span>
                  </div>
                </div>
              </div>

            <div class="col-lg-2 col-md-2 d-flex align-items-stretch mobview" data-aos="fade-up" data-aos-delay="200">
              <div class="member">
                <div class="member-img">
                  <img src="assets/img/team/akshatha.jpeg" class="img-fluid" alt="">
                  <div class="social">
                  </div>
                </div>
                <div class="member-info">
                  <h4>Akshatha</h4>
                  <span>Design Head</span>
                </div>
              </div>
            </div>

            <div class="col-lg-2 col-md-2 d-flex align-items-stretch mobview" data-aos="fade-up" data-aos-delay="200">
              <div class="member">
                <div class="member-img">
                  <img src="assets/img/team/design1.jpeg" class="img-fluid" alt="">
                  <div class="social">
                  </div>
                </div>
                <div class="member-info">
                  <h4>Thamizharasan</h4>
                  <span>Design Core</span>
                </div>
              </div>
            </div>

            <div class="col-lg-2 col-md-2 d-flex align-items-stretch mobview" data-aos="fade-up" data-aos-delay="300">
              <div class="member">
                <div class="member-img">
                  <img src="assets/img/team/des2.jpeg" class="img-fluid" alt="">
                  <div class="social">
                  </div>
                </div>
                <div class="member-info">
                  <h4>Abhinav</h4>
                  <span>Design Core</span>
                </div>
              </div>
            </div>

          <div class="col-lg-2 col-md-2 d-flex align-items-stretch mobview" data-aos="fade-up" data-aos-delay="300">
              <div class="member">
                <div class="member-img">
                  <img src="assets/img/team/balju.jpeg" class="img-fluid" alt="">
                  <div class="social">
                  </div>
                </div>
                <div class="member-info">
                  <h4>Balaji</h4>
                  <span>Design Core</span>
                </div>
              </div>
            </div>

          <div class="col-lg-2 col-md-2 d-flex align-items-stretch mobview" data-aos="fade-up" data-aos-delay="300">
              <div class="member">
                <div class="member-img">
                  <img src="assets/img/team/thamizh.jpeg" class="img-fluid" alt="">
                  <div class="social">
                  </div>
                </div>
                <div class="member-info">
                  <h4>Harrish</h4>
                  <span>Design Core</span>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>

    </section><!-- End Team Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Our Sponsors</h2>
          <p>Thanks for Supporting Us</p>  
        </header>

        <div class="clients-slider swiper-container">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/VC logo.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/linkeddots.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/Engineering Academy.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/dwaraka1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/shri vari.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/oasys.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

    </section><!-- End Clients Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6 hide cont">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>ECE Department<br>
                     Anna University (CEG)<br>
                     Chennai - 600025<br>
                  </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+91 95241 85491<br>+91 90808 86848<br>+91 90038 80094 </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>vision21.marketing@gmail.com<br>aueceaceg@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6  hidecont">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Event Dates</h3>
                  <p>April 15th - April 17th<br>9:00AM - 5:00PM</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form  method="post" action="" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" id="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message" id="error">error</div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="button"  id="contact-submit">Send Message</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  <script  type="text/javascript" >

  function hide() {
    var x = document.getElementById("hidegal");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }

  function show() {
    var x = document.getElementById("hidegal");
   
      x.style.display = "block";
 
  }

  $('#contact-submit').click(function() {
  const name = $("#name").val();
  const email = $("#email").val();

  const subject = $("#subject").val();
  const message = $("#message").val();
  let emailCheck = validateEmail(email);
  if (!name || !email ||  ! subject || !message) {
    document.getElementById('error').innerHTML='Please fill all the fields';
    setTimeout(() => {
      document.querySelector('.error-message').style.display='none';
    }, 4000);
    document.querySelector('.error-message').style.display='block';
  }
  else if (!emailCheck) {
    document.getElementById('error').innerHTML='Email Validation Failed';
    setTimeout(() => {
      document.querySelector('.error-message').style.display='none';
    }, 4000);
    document.querySelector('.error-message').style.display='block';
  }
  else {
    $.ajax({
    url: 'restapi.php?contact=true',
    type: 'post',
    data: {
      name: name,
      email: email,
      subject: subject,
      message: message
    },
    success: function (data) {
      console.log(data);
    setTimeout(() => {
      document.querySelector('.sent-message').style.display='none';
    }, 4000);
    document.querySelector('.sent-message').style.display='block';
      
    },
    error: function(data) {
      console.log(data);
    }
  })
    
  }

  
  
 
})

function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

  </script>
</div>
<?php include "alt-footer.php"; ?> 

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>



</body>

</html>
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



</head>

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


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<!-- Template Main CSS File -->
<link href="assets/css/style.css" rel="stylesheet">

<style>
body {
  overflow: hidden;
}

/* Preloader */

#preloader {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #000000;
  /* change if the mask should have another color then white */
  z-index: 99;
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
      url(assets/img/hero-img.gif)  */
  background-image: url(assets/img/jv.gif);
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
    width: 1.2vw;
    height: 1.2vw;
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
    animation: animation01_wave_wrapper 1s linear 1s forwards;
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
    animation: animation01_wave_box 1s linear 1s forwards;
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
    animation: animation_line01 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) 1.9s;
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
    animation: animation_line01 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) 1.9s;
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
    animation: animation_line03 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) 1.9s;
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
    animation: animation_line03 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) 1.9s;
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
    animation: animation_line05 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) 1.9s;
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
    animation: animation_line05 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) 1.9s;
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
    animation: animation_line07 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) 1.9s;
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
    animation: animation_line07 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) 1.9s;
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
    animation: rhombus 0.2s linear 2.2s forwards;
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
    animation: rhombus_small 0.4s linear 2.55s forwards;
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
    animation: rhombus_box 0.4s linear 3.55s forwards;
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
    animation: rhombus_item01 0.5s linear 2.95s forwards;
}

.rhombus_item02_wrapper{
    animation: rhombus_item02 0.5s linear 2.95s forwards;
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
    animation: name 1.0s cubic-bezier(0.165, 0.84, 0.44, 1) 3.9s forwards;
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

  <?php include "header.php"; ?>
  <div style="height:120px"></div>
  <audio controls autoplay loop>
      <source src="assets/img/startriot.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
</audio>  
  <?php include "alt-footer.php"; ?>
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
</body>


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>



</html>


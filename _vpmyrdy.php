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

.preloader {
    position: fixed;
    width: 100%;
    height: 100%;
    z-index: 999;
    background: #000;
    top: 0;
    left: 0;
}

.loader {
    position: absolute;
    top: 43%;
    left: 0;
    right: 0;
    transform: translateY(-43%);
    text-align: center;
    margin: 0 auto;
    width: 50px;
    height: 50px;
}
.box {
    width: 100%;
    height: 100%;
    background: #9ceca1;
    animation: animate .5s linear infinite;
    position: absolute;
    top: 0;
    left: 0;
    border-radius: 3px;
}
.shadow { 
    width: 100%;
    height: 5px;
    background: #000;
    opacity: 0.1;
    position: absolute;
    top: 59px;
    left: 0;
    border-radius: 50%;
    animation: shadow .5s linear infinite;
    }


@keyframes loader {
    0% {
        left: -100px
    }
    100% {
        left: 110%;
    }
}

@keyframes animate {
    17% {
        border-bottom-right-radius: 3px;
    }
    25% {
        transform: translateY(9px) rotate(22.5deg);
    }
    50% {
        transform: translateY(18px) scale(1,.9) rotate(45deg);
        border-bottom-right-radius: 40px;
    }
    75% {
        transform: translateY(9px) rotate(67.5deg);
    }
    100% {
        transform: translateY(0) rotate(90deg);
    }
}

@keyframes shadow {
    50% {
        transform: scale(1.2,1);
    }
}




.contest{
    display: block;
    margin-left: 1%;
    font-size:100%;
    border: 0.5vw solid #ffa500;
    width:fit-content;
    padding: 1% 1%;
}
</style>

<body>

<div class="preloader">
    <div class="loader">
        <div class="shadow"></div>
            <div class="box"></div>
    </div>
</div>

<script>

        $(window).on('load', function() { // makes sure the whole site is loaded  
          $('.preloader').delay(1500).fadeOut('slow'); // will fade out the white DIV that covers the website. 
          $('body').delay(350).css({'overflow':'visible'});
        })

</script>

<?php include "header.php"; ?>
<div style="height:8em"></div>

<div class="contest">
<p>&emsp;&emsp;#VisionWebContest </p>
<audio controls autoplay loop>
      <source src="assets/img/startar.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
</audio> 
<p>Identify the song (at start of the vision promo video) to figure out the answer to the below questions:</p>
<p>&emsp;&emsp;1. Time of Day, Animal </p>
<p>&emsp;&emsp;2. Sports Brand</p>
<p>Send the answer to these 2 questions to aueceaceg@gmail.com.</p>
<p>First one to send the right answers wins a prize!</p>
</div>

<div style="height:11em"></div>
<?php include "alt-footer.php"?>
</body>




<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
</html>


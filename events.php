<?php
require_once('dbConnect.php');
require_once('functions.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>VISION '21</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <link href="assets/img/faviconGreen.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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

<!-- new addition below 4 -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<style>

button.b2 {
  
  background: black;
  align-items: center;
  justify-content: center;
  position: relative;
  height: 60px;
  width: 200px;
  border: none;
  outline: none;
  color: #9ceca1;
  cursor: pointer;
  border-radius: 5px;
  font-size: 18px;
  font-family: 'Montserrat', sans-serif;
}
button.b2:before{
  position: absolute;
  content: '';
  top: -2px;
  left: -2px;
  height: calc(100% + 4px);
  width: calc(100% + 4px);
  border-radius: 5px;
  z-index: -1;
  opacity: 0;
  filter: blur(5px);
  background: linear-gradient(45deg, #fff,#47FFBC,#66EF67, #1E646C , #96031A );
  background-size: 400%;
  transition: opacity .3s ease-in-out;
  animation: animate 20s linear infinite;
}
button.b2:hover:before{
  opacity: 1;
}
button.b2:hover:active{
  background: none;
  color:black;
}
button.b2:hover:active:before{
  filter: blur(0);
}
button.b2 @keyframes animate {
  0% { background-position: 0 0; }
  50% { background-position: 400% 0; }
  100% { background-position: 0 0; }
}

.box{
  
  background-color: rgba(0,0,0,0.4); 
 
  
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  
  border-radius:20px;
  transform: scale(1.08);
  
  transition: 0.3s;
}
 .box:hover {
  transform: scale(1.1);
  
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 1);
}


</style>



<!-- body-->
<body>
  <?php include "header.php";?>

  <div style="height:30px;"></div>



<section id="values" class="values">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p style="font-size:60px;margin-bottom:10px;">Events</p>
        </header>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="fade-up" data-aos-delay="200">
            <h3 style="font-size:30px;margin-bottom:10px;padding-bottom:20px;padding-top:20px;color:#C9F2C7">Pre-Events</h3>
              <img src="assets/img/events11.jpeg" class="img-fluid" alt="">
              
                 <a href="pre_events.php">
                 <button class="b2">Dive In!</button>
                 </a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="400">
            <h3 style="font-size:30px;margin-bottom:10px;padding-bottom:20px;padding-top:20px;color:#C9F2C7">Non Technical Events</h3>
              <img src="assets/img/events33.jpeg" class="img-fluid" alt="">
             
                 <a href="non_tech_events.php">
                 <button class="b2">Dive In!</button>
                 </a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="600">
            <h3 style="font-size:30px;margin-bottom:10px;padding-bottom:20px;padding-top:20px;color:#C9F2C7">Technical Events</h3>
              <img src="assets/img/events22.jpeg" class="img-fluid" alt="">
              
                 <a href="tech_events.php">
                 <button class="b2">Dive In!</button>
                 </a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Values Section -->

    
<div style="height:80px;"></div>
  <?php include "alt-footer.php"; ?>
</body>


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

</html>
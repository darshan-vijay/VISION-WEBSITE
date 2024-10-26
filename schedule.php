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
<style>
  .boxi{
    padding-left:2%;
    padding-bottom:2%;
    margin-top:0;   
  }
  .tabing{
    padding-bottom:10px;
  }
   @media (max-width: 999px) {
    .tab-pane img{
      width:100%;
    }
    .anc{
      font-size:20px !important;
    }
    .nav-link{
      
    font-size: 15px !important;
    }
  }
</style>


<body>

  <?php include "header.php"; ?>

  <section id="features" class="features">

<div class="container boxi " data-aos="fade-up">
  <!-- Feature Tabs -->
  <div class="row feture-tabs " data-aos="fade-up">
          <div class="col-lg-12">
            <h3>SCHEDULE<br><a class="anc"style="font-size:25px;" href="phpdownload.php?file=visionschedule">Click Here to Download Schedule</a></h3>
            
            
            <!-- Tabs -->
            <ul class="nav nav-pills mb-3 ">
              <li>
                <a class="nav-link active" data-bs-toggle="pill" href="#tab1">&emsp;&emsp;&emsp;DAY  1&emsp;&emsp;&emsp;</a>
              </li>
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#tab2">&emsp;&emsp;&emsp;DAY  2&emsp;&emsp;&emsp;</a>
              </li>
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#tab3">&emsp;&emsp;&emsp;DAY  3&emsp;&emsp;&emsp;</a>
              </li>
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#tab4">&emsp;&emsp;Workshops&emsp;&emsp;</a>
              </li>
            </ul><!-- End Tabs -->
<div style="height:10px;"></div>
            <!-- Tab Content -->
            <div class="tab-content">

              <div class="tab-pane fade show active" id="tab1">
                <div class="d-flex align-items-center mb-2">
                    <img src="assets/img/schedule/a15.jpeg" class="img-fluid" alt="" height="20%" width ="90%">
                </div>
              </div>

              <div class="tab-pane fade show " id="tab2">
                <div class="d-flex align-items-center mb-2">
                    <img src="assets/img/schedule/a16.jpeg" class="img-fluid" alt="" height="30%" width ="90%">
                </div>
              </div>

             
              <div class="tab-pane fade show " id="tab3">
                <div class="d-flex align-items-center mb-2">
                    <img src="assets/img/schedule/a17.jpeg" class="img-fluid" alt="" height="30%" width ="90%">
                </div>
              </div>

              
              <div class="tab-pane fade show " id="tab4">
                <div class="d-flex align-items-center mb-2">
                    <img src="assets/img/schedule/workshop.png" class="img-fluid" alt="" height="30%" width ="90%">
                </div>
              </div>

            </div>

          </div>

        </div><!-- End Feature Tabs -->
        </section>
        </div>

  <?php include "alt-footer.php"; ?>
</body>
</html>
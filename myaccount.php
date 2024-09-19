<?php

require_once('dbConnect.php');
require_once('functions.php');

if (isset($_SESSION['userLoggedIn']) && $_SESSION['userLoggedIn'] == 1) {
} else {
  header("Location: login.php");
}
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

<?php
$email = $_SESSION['email'];
$sql = "SELECT * FROM userinfo where email = ?";
$stmt = mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt, $sql);
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$user = mysqli_fetch_array($result);
?>
<?php
$email = $_SESSION['email'];
$sql = "SELECT * FROM payments where email = ?";
$stmt = mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt, $sql);
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$status = mysqli_fetch_array($result);
?>
<style>
  .padd {
    width: 90%;
    display:block;
    margin: auto;
    margin-bottom:3%;
    padding-right:20px;
    
    text-align:center !important;

align-items:center !important;
  }

  p {
    font-size: large;
    font-weight: 700;
  }

   h3 {
    color: #1E646C   !important;
  } 

  .headerval {
    background-color: #ffffffaa;
    color:#041B15;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    border-radius: 30px;
    backdrop-filter: blur(10px);
    
    text-align:center !important;

align-items:center !important;
  }

  .boxxx {
    background-color: #ffffffaa;
    border-radius: 30px;
    
    text-align:center !important;

align-items:center !important;
  }

  button {
    display: inline;
    /* margin: 0px 38px 0px; */
  }

  [role=button] {
    display: inline;
    margin: 0px 38px 0px;
  }

  .btn-primary {
    outline: none;
    width: 16vmin;
    height: 6vmin;
    /* left: 1256px;
    top: 306px; */
    border: none;
    background: #58FF73;
    border-radius: 18px;
    font-family: 'Montserrat', sans-serif;
    font-size: 1.5vmax;
    font-weight: 700;
    transition: all 0.2s cubic-bezier(0.075, 0.82, 0.165, 1);
  }

  .btn-primary:focus {
    outline: none;
  }

  .btn-primary:hover {
    /* color: #F91; */
    background: #4CE765;
    /* border-color: #007C0C; */
    text-align: center;
  }
  .hmm
  {
    height: 10vh;
  }


  @media (max-width: 784px) {
    .box{
      text-align:center !important;
      align-items:center !important;
    }
    .mainn{
        width:80%;
        margin-left:10%;
        
      text-align:center !important;

align-items:center !important;
    }
    .padd{
      width:80% !important;margin-left:10%;
      
      text-align:center !important;

      align-items:center !important;
    }
  }
</style>

<body>

  <?php include "header.php"; ?>
  <div style="height:40px;"></div>
  <section id="values" class="values">

    <div class="container" data-aos="fade-up">

      <header class="headerval mainn">
        <h2 style="font-weight:bolder;font-size:50px;color:#1E646C;">Your Account</h2>
        <p>Dive In</p>
      </header>
      <div style="height:30px;"></div>

      <div class="row-lg-4 mainn align-items" style="margin-bottom:20px;background-color:#ffffffaa;border-radius: 30px;backdrop-filter: blur(10px); padding-left: 0px; padding-right: 0px;"">
        <div class="box" style="padding-top: 20px; color:black;" data-aos="fade-up" data-aos-delay="200">
          <h3 style="font-weight:bolder;font-size:25px;">Details</h3>
          <p style="align:center;margin:auto;display:block">
          <div class=" col-sm-3"><span class="glyphicon glyphicon-fire" aria-hidden="false"></span>&ensp;<?php echo $user['user_id']; ?></div>
          <div class="col-sm-3"><span class="glyphicon glyphicon-user" aria-hidden="false"></span>&ensp;<?php echo $_SESSION['name']; ?></div>
          <div class="col-sm-3"><span class="glyphicon glyphicon-envelope" aria-hidden="false"></span>&ensp;<?php echo $_SESSION['email']; ?></div>
          <div class="col-sm-3"><span class="glyphicon glyphicon-earphone" aria-hidden="false"></span>&emsp;<?php echo $user['contact'] ?></div>
          </p>
        </div>
      </div>
    </div>
    <div style="height:20px;"></div>
    <div class="container-fluid" data-aos="fade-up" data-aos-delay="200" style="padding-left: 0px; padding-right: 0px;">
      
        <div class="col-lg-12">
            <div class="box padd boxxx" >
              <div class=" col-sm-12">
                <h3>Emerging Communication Technologies Masterclass Workshop</h3>
              </div>
              <div class=" col-sm-12">
                <p><?php echo $status['emergingcommunication']; ?></p>
              </div>
              <?php if($status['emergingcommunication'] == "Paid"){

                  }
                  else{
                    echo'
                    
                    <p>Rs. 250</p>
                    <div> <a class="paytgl btn-primary" style="padding:5px" href="https://pmny.in/9IYehFtcxuCu" > Pay Now </a> </div>';
                  }
                  ?>
            </div>
            </div>
            
        <div class="col-lg-12">
            <div class="box padd boxxx" >
              <div class=" col-sm-12">
              <h3>Python and Cloud Computing Workshop</h3>
            </div>
            <div class=" col-sm-12">
              <p><?php echo $status['python']; ?></p>
            </div>
              <?php if($status['python'] == "Paid"){

                      echo' <div class="hmm"></div>';
                  }
                  else{
                    echo'
                    
                    <p>Rs. 100</p>
                    <div> <a class="paytgl btn-primary" style="padding:5px" href="https://pmny.in/FInNZeK0UGuw" > Pay Now </a> </div>';
                  }
                  ?>
            </div>
            </div>
          
        <div class="col-lg-12">
            <div class="box padd boxxx" >
              <div class=" col-sm-12">
                <h3>Electric & Hybrid Vehicles Workshop</h3>
              </div>
              <div class=" col-sm-12">
                <p><?php echo $status['electrichybrid']; ?></p>
              </div>
              <?php if($status['electrichybrid'] == "Paid"){

                    echo' <div class="hmm"></div>';
                  }
                  else{
                    echo'
                    
                    <p>Rs. 100</p>
                    <div> <a class="paytgl btn-primary" style="padding:5px" href="https://pmny.in/uIMa4nOWKWi2" > Pay Now </a> </div>';
                  }
                  ?>
                  </div>
            </div>
            
        <div class="col-lg-12">
            <div class="box padd boxxx">
              <div class=" col-sm-12">
              <h3>Virtual Robot Experimentation Workshop</h3>
            </div>
            <div class=" col-sm-12">
              <p><?php echo $status['virtualrobot']; ?></p>
            </div>
              <?php if($status['virtualrobot'] == "Paid"){

                        echo' <div class="hmm"></div>';
                  }
                  else{
                    echo'
                    <p>Rs. 150</p>
                    <div> <a class="paytgl btn-primary" style="padding:5px" href="https://pmny.in/IIsP498HAxHw"  > Pay Now </a> </div>';
                  }
                  ?>
            </div>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="box padd boxxx">
              <div class=" col-sm-12">
              <h3>Data Science & Artificial Intelligence Workshop</h3>
            </div>
            <div class=" col-sm-12">
              <p><?php echo $status['datascience']; ?></p>
            </div>
              <?php if($status['datascience'] == "Paid"){
                   echo' <div class="hmm"></div>';
                  }
                  else{
                    echo'
                    
                    <p>Rs. 250</p>
                    <div> <a class="paytgl btn-primary" style="padding:5px" href="https://pmny.in/yr31pCkBxZVj" > Pay Now </a> </div>';
                  }
                  ?>
            </div>
            </div>
        
      </div>
      </div>
  </section><!-- End Values Section -->

  <?php include "alt-footer.php"; ?>
</body>
<div> <a style=" width: 135px; background-color: #1CA953; text-align: center; font-weight: 800; padding: 11px 0px; color: white; font-size: 12px; display: inline-block; text-decoration: none; " href='https://pmny.in/AIsaDnrdUcJD' > Buy Now </a> </div>
  
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>




</html>
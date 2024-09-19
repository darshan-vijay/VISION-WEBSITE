<?php

require_once('dbConnect.php');
require_once('functions.php');

if (isset($_SESSION['userLoggedIn']) && $_SESSION['userLoggedIn'] == 1) {

  header("Location: login.php");
} else {
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ]></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

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

.lds-facebook {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
}
.lds-facebook div {
  display: inline-block;
  position: absolute;
  left: 8px;
  width: 16px;
  background: #cef;
  animation: lds-facebook 1.2s cubic-bezier(0, 0.5, 0.5, 1) infinite;
}
.lds-facebook div:nth-child(1) {
  left: 8px;
  animation-delay: -0.24s;
}
.lds-facebook div:nth-child(2) {
  left: 32px;
  animation-delay: -0.12s;
}
.lds-facebook div:nth-child(3) {
  left: 56px;
  animation-delay: 0;
}
@keyframes lds-facebook {
  0% {
    top: 8px;
    height: 64px;
  }
  50%, 100% {
    top: 24px;
    height: 32px;
  }
}


  .main-div {
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    flex-direction: column;
    width: 30%;
    height: 30%;
    padding-top: 40px;
    padding-bottom: 20px;
    border-radius: 20px;
    background-color: #ffffff;
    box-shadow: #00000011 0 0 20px;
    margin-top: 120px;
    margin-right: auto;
    margin-left: auto;
    margin-bottom: 50px;
    background-color: rgba(26,33,49,0.4); 
    box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);

  }


  .btn-primary {
    outline: none;
    width: 100%;
    height: 100%;
    border: none;
    background: #11998e;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #38ef7d, #11998e);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #38ef7d, #11998e); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    border-radius: 18px;
    font-family: 'Montserrat', sans-serif;
    font-size: 1.5vmax;
    font-weight: 700;
    transition: all 0.4s cubic-bezier(0.075, 0.82, 0.165, 1);
  }

  .btn-primary:focus {
    outline: none;
  }

  .btn-primary:hover {
    /* color: #F91; */background: #38ef7d;  /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #38ef7d, #11998e);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #38ef7d, #11998e); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    /* border-color: #007C0C; */
    text-align: center;
  }

  .reltext {
    width: 80%;
    height: 10%;
    padding: 5px;
    color:black;
    background-color: lightgrey;
    border-radius: 8px;
    text-align: center;
    justify-content: space-evenly;
    font-family: 'Montserrat', sans-serif;
    font-weight: 600;
    margin-bottom: 20px;
    margin-top: 30px;
  }

  .form-group {
    position: relative;
    text-align: center;
    width: 80%;
    height: 45px;
  }

  .form-group input {
    outline: none;
    width: 100%;
    height: 100%;
    border: none;
    background: #F0F0F0;
    border-radius: 18px;
    font-family: 'Montserrat', sans-serif;
  }

  h1 {
    text-align: center;
    font-size: 2vmax;
    position: relative;
    font-family: 'Montserrat', sans-serif;
    font-weight: 600;
  }

  @media (max-width: 1200px) {
    .reltext {
      height: 10%;
      font-size: 15px;
    }

    .main-div {
      width: 70%;
    }
  }

  @media (max-width: 999px) {
    .reltext{
      height:10%;
    }
  }
</style>

<body>

  <?php include "header.php"; ?>



  <form class="main-div">
    <h1 style="padding-bottom:10px; "> Forgot Password </h1>
    <div class="reltext">
      <p>Enter your email address and we will send you the link to change your password.</p>
    </div>
    <div class="form-group">
      <input type="text" id="forgotpassword" class="form-control" id="email" placeholder="Email" required>
    </div>
    <div class="form-group">
      <span class="btn btn-lg btn-primary btn-block" style="cursor: pointer" id="submit" type="button">Submit</button>
    </div>
    <div class="form-group">
      <div id="result"></div>
      <div id="spinner" style="display:none"><div class="lds-facebook" ><div></div><div></div><div></div></div></div>
    </div>
  </form>

  <?php include "alt-footer.php"; ?>
</body>

<script src="assets/js/forgotpassword1.js"></script>

</html>
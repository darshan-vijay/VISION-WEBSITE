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

  }


  .btn-primary {
    outline: none;
    width: 100%;
    height: 100%;
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
    background: #4CE765;
    text-align: center;
  }

  .reltext {
    width: 80%;
    height: 50px;
    padding: 5px;
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
      height: 70px;
      font-size: 15px;
    }

    .main-div {
      width: 70%;
    }
  }
</style>

<body>

  <?php include "header.php"; ?>



  <form class="main-div">
    <h1 style="padding-bottom:10px; "> Forgot Password </h1>
    <div class="reltext">
      <p>Please enter your email address below and we will send you the link to change your password.</p>
    </div>
    <div class="form-group">
      <input type="text" id="forgotpassword" class="form-control" id="email" placeholder="Email" required>
    </div>
    <div class="form-group">
      <span class="btn btn-lg btn-primary btn-block" style="cursor: pointer" id="submit" type="button">Submit</button>
    </div>
    <div class="form-group">
      <div id="result"></div>
    </div>
  </form>

  <?php include "alt-footer.php"; ?>
</body>


<script>
  $('#submit').click(function() {
    var mail = document.getElementById('forgotpassword').value;

    console.log(mail);
    $.post('restapi.php?checkUser=true', {
      mail: mail
    }, function(response) {
      if (response == 'S') {
        $.post('restapi.php?forgotPassword=true&mail=' + mail, function(response) {
          console.log(response);
          if (response == 'S')
            document.getElementById('result').innerHTML = 'We Have Sent a Verification Link to Your Mail, Follow the instructions. The Link will be valid for 10 minutes';
          else if (response == 'F')
            document.getElementById('result').innerHTML = 'We Cannot Send Verification Link to Your Mail, Try Again Later.';
        });


      } else if (response == 'F') {
        document.getElementById('result').innerHTML = 'Email And Account Type Does Not Match';
      }



    });
  });
</script>



</html>
<?php
require_once('dbConnect.php');
require_once('functions.php');

if (checkLogin()) {

  header("Location: index.php");
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

  p {
    font-family: 'Montserrat', sans-serif;
  }

  .dropdown {
    width: 10px;
    height: 10px;
    background-color: #ffffff00;
    transform: rotateZ(45deg);
    border-bottom: solid #4CE765 3px;
    border-right: solid #4CE765 3px;
    position: absolute;
    margin-left: 90%;
    margin-top: -7%;
  }

  .part {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    flex-direction: row;
    height: 90vh;
    width: 95vw;
    padding: 0;
    margin-top: 100px;
    margin-bottom:30px;
    
    
  }

  .vision-na {
    width: 50vw;
    height: 60vh;
    border-radius: 20px;
    background-color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'Montserrat', sans-serif;
    font-size: 3vmax;
    background:none;
  }



  .line {
    height: 50%;
    width: 7px;
    border-radius: 20px;
    background-color: #9ceca1;
  }

  .ico {
    margin-left: auto;
    margin-right: auto;
    height: 480px;
    width: 650px;
  }

  .main-div {
    position: relative;
    border-radius: 20px;
    background-color: #ffffff;
    box-shadow: #00000011 0 0 20px;
    overflow: hidden;
    height: 70vh  ;
    width: 30vw;
    display: flex;
    align-items: center;
    margin-left:10%;
    background-color: rgba(26,33,49,0.4); 
    box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
    /* margin: 5% 30%; */

  }

  .sub-div {
    position: absolute;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    flex-direction: column;
    width: 100%;
    height: 60vh;
    padding-top: 40px;
    padding-bottom: 20px;
    /* margin-left: -100%; */
    /* border: 5px solid DarkOrange; */
    animation: none;
    border-radius: 20px;
    transition: all ease-in 0.3s;
    
    
  }
  .error-message {
    
  width: 80%;
  height:15%;
  display: none;
  color: #fff;
  background: #e30425;
  text-align: left;
  padding: 15px;
  margin-bottom: 24px;
  font-weight: 600;
}
  

  @keyframes subdivmove {
    0% {
      margin-left: 0%;
    }

    100% {
      margin-left: -100%;
    }
  }

  @keyframes subdivback {
    0% {
      margin-left: -100%;
    }

    100% {
      margin-left: 0%;
    }
  }

  .sub-div2 {
    position: absolute;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    flex-direction: column;
    width: 100%;
    height: 60vh;
    padding-top: 30px;
    padding-bottom: 30px;
    margin-left: 100%;
    transition: all ease-in 0.3s;
    animation: none;
    border-radius: 20px;
    /* margin: 5% 30%; */
    
  }

  @keyframes subdiv2move {
    0% {
      margin-left: 100%;
    }

    100% {
      margin-left: 0;
    }
  }

  @keyframes subdiv2back {
    0% {
      margin-left: 0%;
    }

    100% {
      margin-left: 100%;
    }
  }

  .form-group {
    position: relative;
    /* margin-top: 20px;
    margin-bottom: 20px; */
    text-align: center;
    width: 80%;
    height: 12%;
  }

  .form-control {
    outline: none;
    width: 100%;
    height: 100%;
    border: none;
    background: #F0F0F0;
    border-radius: 18px;
    font-family: 'Montserrat', sans-serif;
  }

  #show {
    cursor: pointer;
  }

  .form-group label {
    display: inline;
    margin-bottom: .5rem;
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

  button {
    display: inline;
  }

  [role=button] {
    display: inline;
    margin: 0px 38px 0px;
  }

  h1 {
    text-align: left;
    font-size: 2vmax;
    /* position: relative;
    margin-left: -25vmax; */
    font-family: 'Montserrat', sans-serif;
    font-weight: 500;
    color:white !important;
  }

  @media (max-width: 999px) {
    [role=button] {
      margin: 5px 0px 0px;
    }
    .vision-na{
      margin-top:15%;
      margin-bottom:20px;
      height:120px;
      
    margin-right:0;
      background:none;
    }

    .ico {
      height:150px;
      width: 200px;
    }

    .part {
      flex-direction: column;
      height: 120vh;
      margin-top:5px;
      margin-left:auto;
      
      margin-right:auto;
    }

    .line {
      display: none;
      visibility: none;
    }

    span {
      display: inline;
    }
    #signup{
      font-size:20px !important;
      align:center;
    }
    
    #login{
      font-size:20px !important;
      
      align:center;
    }


    /* #show {
      cursor: pointer;
      position: absolute;
      margin-top: -16%;
      margin-left: 34%;
    } */
    .btn-primary {
      height:6vmax;
    }

    h1 {
      text-align: center;
      font-size: 4vmax;
      position: relative;
      /* margin-left: -25vmax; */
      font-family: 'Montserrat', sans-serif;
      font-weight: 500;
    }

    .main-div {
      width: 80vw;
      height: 100vh !important;
      margin-bottom: 3vh;
      
    margin-left:0;;
    }
    .sub-div {
      width: 80vw;
      height: 70vh !important;
      margin-bottom: 3vh;
      
    }
    .sub-div2 {
      width: 80vw;
      height: 70vh !important;
      margin-bottom: 3vh;
      
    }
  }
</style>

<body>
  <?php include "header.php"; ?>

  <div class="part">
    <div class="vision-na" data-aos="zoom-out" data-aos-delay="200">
      <img class="ico" src="assets/img/visionlogowhite.png " class="img-fluid" alt="">
    </div>
    <div class="line"></div>
    <div class="main-div">
      <form action="" class="sub-div">
        <h1 style="padding-bottom:20px"> Log In </h1>
        <div class="form-group">
          <input type="text" class="form-control" id="email" placeholder="Email" required>
        </div>
        <div class="form-group ">
          <input type="password" class="form-control" id="password" placeholder="Password" required>
        </div>

        <div class="form-group ">
          <span id="login" class="btn-primary  btn-block" >Log In</span>
        </div>
        
        <div id="spinner" style="display:none"><div class="lds-facebook" ><div></div><div></div><div></div></div></div>
        <div class="error-message" id="error">error</div>
        <br>
        
        <div class="form-group ">
        <div style="font-family: 'Montserrat',sans-serif;color:#fff !important;"> Forgot your password? <span style="cursor:pointer;font-weight:700;
    color:#9CECA1 !important;" onclick="forgotPassword()" > Click here! </span>
        </div>
        </div>

        <div class="form-group " >
          <p style="font-family: 'Montserrat',sans-serif;color:#fff !important;"> Not Registered Yet?
          <div style="cursor:pointer;font-weight:700;font-family:'Montserrat',sans-serif;
    color:#9CECA1 !important;" onclick="toggle()"> Signup Now!</div>
          </p>
        </div>
      </form>
      
      <form action="#"  class="sub-div2">
        <h1 style="padding-bottom:10px;"> Sign Up </h1>
        <div class="form-group">
          <input type="text" class="form-control" id="sfullname" placeholder="Your name" required>
        </div>
        <div class="form-group">
          <input type="email" class="form-control" id="semail" placeholder="Your Email" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="sphonenumber" placeholder="Phone Number" required>
        </div>

        <div class="form-group">
          <input type="text" class="form-control" id="scollege" placeholder="Name of College/University" required>
        </div>
        <div class="form-group ">
          <select id="sdepartment" class="form-control" value="Select your department" >
            <option selected value="Select your department">Select your department</option>
            <option>Electronics and Communication Engineering</option>
            <option>Computer Science Engineering</option>
            <option>Information Technology</option>
            <option>Mechanical Engineering</option>
            <option>Electrical and Electronics Engineering</option>
            <option>Civil Engineering</option>
            <option>GeoInformatics Engineering</option>
            <option>BioMedical Engineering</option>
            <option>Manufacturing Engineering</option>
            <option>Other Department</option>
          </select>
          <div class="dropdown"></div>
        </div>
        <div class="form-group">
      <input class="form-control" type="password" name="password" id="spassword" placeholder="Password" size="30" required >
      </input>
      </div>
      
      <div class="form-group">
      <img id="show"src="assets/img/closedeye.png" onclick="eye()" size="30" style="padding-top:5px;padding-bottom:5px " />
      </div>
      
        <div class="form-group">
          <span id="signup" class="btn-primary btn-block">Sign Up</span>
        </div>
        <div class="spinner" style="display:none"><div class="lds-facebook" ><div></div><div></div><div></div></div></div>
      <div class="error-message"  id="serror">error</div>
        <div style="font-family: 'Montserrat',sans-serif;color:#fff">Already have a account? <span style="cursor:pointer;font-weight:700;font-family:'Montserrat',sans-serif;
    color:#9CECA1 !important;" onclick="toggleback()">Login</span>
        </div>
      </form>
    </div>
  </div>
  <?php include "alt-footer.php"; ?>
</body>
<script>

function eye() {
    var x = document.getElementById("spassword");
    console.log(x.type);
    if (x.type === "password") {
      x.type = "text";
      document.getElementById("show").src = "assets/img/eye.png"
    } else {
      x.type = "password";
      document.getElementById("show").src = "assets/img/closedeye.png"
    }
  }

</script>
<script type="text/javascript">
var emailExists = false;
  document.querySelector(".hideit").style.display = "none";

  $('#login').click(function() {
    const email = $("#email").val();
    const password = $("#password").val();
  let emailCheck = validateEmail(email);
  if (!email || !password ) {
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
  
  else if (password.length <8) {
    document.getElementById('error').innerHTML='Check Password';
    setTimeout(() => {
      document.querySelector('.error-message').style.display='none';
    }, 4000);
    document.querySelector('.error-message').style.display='block';
  }
  else{
      
    document.querySelector('.spinner').style.display="block";
      $.ajax({
      url: 'restapi.php?login=true',
      type: 'post',
      data: {
        email: email,
        password: password,
      },
      success: function(data) {
        console.log(data);
        if (data == 'Success') {
          window.location = 'index.php?Login=Success';
        }
        if (data == 'enter password') {
          
    document.getElementById('spinner').style.display="none";
          document.getElementById('error').innerHTML='Enter correct password';
          setTimeout(() => {
            document.querySelector('.error-message').style.display='none';
          }, 4000);
          document.querySelector('.error-message').style.display='block';
        }
        if (data == 'not registered') {
          
    document.getElementById('spinner').style.display="none";
          document.getElementById('error').innerHTML='Email not Registered';
          setTimeout(() => {
            document.querySelector('.error-message').style.display='none';
          }, 4000);
          document.querySelector('.error-message').style.display='block';
        }
      },
      error: function(data) {
        window.location = 'index.php?Login=Failed';
      }
    })
  }
  })


  $('#semail').on('keyup', function() {
    var mail = document.getElementById('semail').value;
    $.post('restapi.php?checkUser',{
        mail: mail ,
    },function(response){
      if (response == 'S') {
        console.log('Email Already Exists');
        emailExists = true;
        document.getElementById('serror').innerHTML='Email Already Exists';
      setTimeout(() => {
        document.querySelector('#serror').style.display='none';
      }, 4000);
      document.querySelector('#serror').style.display='block';
      }
      else {
        emailExists = false;
      }

    });
  });
  
  $('#signup').click(function() {
    const name = $("#sfullname").val();
    const email = $("#semail").val();
    const contact = $("#sphonenumber").val();
    const college = $("#scollege").val();
    const password = $("#spassword").val();
    const department = $("#sdepartment option:selected").text();
    console.log(department);
    let emailCheck = validateEmail(email);
    if (!email || !password || !name || !contact || !college || !department ) {
      document.getElementById('serror').innerHTML='Please fill all the fields';
      setTimeout(() => {
        document.querySelector('#serror').style.display='none';
      }, 4000);
      document.querySelector('#serror').style.display='block';
    }
    else if (!emailCheck) {
      document.getElementById('serror').innerHTML='Email Validation Failed';
      setTimeout(() => {
        document.querySelector('#serror').style.display='none';
      }, 4000);
      document.querySelector('#serror').style.display='block';
    }
    
    else if (password.length <8) {
      document.getElementById('serror').innerHTML='Password must be atleast 8 characters';
      setTimeout(() => {
        document.querySelector('#serror').style.display='none';
      }, 4000);
      document.querySelector('#serror').style.display='block';
    }
    else if (contact.length > 13 || contact.length < 10) {
      console.log('Contact Error');
      document.getElementById('serror').innerHTML='Check your phone number';
      setTimeout(() => {
        document.querySelector('#serror').style.display='none';
      }, 4000);
      document.querySelector('#serror').style.display='block';
    }
    else if (department == ("Select your department") || department == ("undefined") || department == ("null")) {
      document.getElementById('serror').innerHTML='Please select your department';
      setTimeout(() => {
        document.querySelector('#serror').style.display='none';
      }, 4000);
      document.querySelector('#serror').style.display='block';
    }
    else if (emailExists == true) {
      document.getElementById('serror').innerHTML='Email Already Exists';
      setTimeout(() => {
        document.querySelector('#serror').style.display='none';
      }, 4000);
      document.querySelector('#serror').style.display='block';
    }
    else{
    document.querySelector('.spinner').style.display="block";
    $.ajax({
      url: 'restapi.php?signup=true',
      type: 'post',
      data: {
        name: name,
        email: email,
        contact: contact,
        college: college,
        password: password,
        department: department
      },
      success: function(data) {
        if (data == 'Success') {
          window.location = 'index.php?Signup=Success';
        }
      },
      error: function(data) {
          console.log(data);
      }
    })
    }
  })
  function forgotPassword() {
    window.location = 'forgotpassword-rec.php';
  }
  function toggle() {
    const mq = window.matchMedia("(min-width: 999px)");

    document.querySelector(".main-div").style.height = "85vh";
    document.querySelector(".sub-div").style.animation = "subdivmove forwards ease-in 0.3s"
    document.querySelector(".sub-div2").style.animation = "subdiv2move forwards ease-in 0.3s"
  }

  function toggleback() {
    document.querySelector(".main-div").style.height ="70vh";
    document.querySelector(".sub-div").style.animation = "subdivback forwards ease-in 0.3s"
    document.querySelector(".sub-div2").style.animation = "subdiv2back forwards ease-in 0.3s"
  }
  
  function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}


  
</script>
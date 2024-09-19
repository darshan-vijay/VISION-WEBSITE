<?php
require_once('dbConnect.php');

require_once('functions.php');
$email="";

if (checkLogin()) {

  header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <script src="jquery.js"></script> 
</head>

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
    height: 50px;
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
    color:black;
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
  
.session-div{
    display: block;
    width: 60%;
    height:35vh;
    margin:5% 21% 5%;
    padding:20px 20px 20px;
    margin-top:10%;
}

.bald {
    text-align: left;
    font-size: 2vmax;
    /* position: relative;
    margin-left: -25vmax; */
    font-family: 'Montserrat', sans-serif;
    font-weight: 1000;
    font-size:75px;
    color: darkorange !important;
  }
  a:hover{
      color:white  !important;
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
    <?php
    if(isset($_GET['email']) && isset($_GET['link'])){
        $email = $_GET['email'];
        $link = $_GET['link'];
        $sql = "SELECT * FROM forgotpassword WHERE email = '".$email."' AND link = '".$link."' ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
       $currtime = date('H:i:s');
       $change_time = date($row['time']);
       $start = strtotime($change_time);
       $end = strtotime($currtime);
    
    $mins = ($end - $start) / 60;
        if($mins <= 10){
            echo '
    <form class="main-div" id ="requestform">
      <h1 style="padding-bottom:10px; "> Change Password</h1>
      <div class="form-group">
      <input type="password" name="pass" id="pass" placeholder="New Password">
      </div>
      <div class="form-group">
      <input type="password" name="confpass" id="confpass" placeholder="Confirm Password">
      </div>
      <div class="form-group">
      <span class ="btn btn-lg btn-primary btn-block" type="button" onclick="onChangePassword()" >Submit</span>
      </div>
      <div class="form-group">
        <div id="result"></div>
      </div>
    </form>';
    
    
    
    
        }
        else{
            echo '<div class ="session-div">
            <h1 class ="bald"> Session Expired !!! </h1><br><br>
            <p> Click <a href="forgotpassword-rec.php" style="
            color: darkorange ;">here</a> to redirect to the forgot password page </p>
        </div>';
        }
    
    
    }




  
 
?>

<?php include "alt-footer.php"; ?>
<script>
function onChangePassword(){
    var mail = '<?php echo $email; ?>';
    $.post('restapi.php?changePassword',{
        email: mail ,
        pass: document.getElementById('confpass').value,
    },function(response){
        document.getElementById('result').innerHTML = '<p>Password Updated Successfully</p><a href="login.php">Click Here to Login</a>';

    });
}
</script>
</body>
</html>
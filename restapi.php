<?php
require_once 'dbConnect.php';
require_once 'functions.php'; 
if(isset($_GET['signup'])) {

    $email = $_POST['email'];
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $college = $_POST['college'];
    $department = $_POST['department'];
    $options = array('cost' => 10);
    $password = password_hash($_POST['password'],PASSWORD_BCRYPT,$options);
    $sql = "INSERT INTO userinfo(`email`,`password`,`name`,`contact`, `college`, `department`) VALUES ('$email','$password','$name','$contact', '$college', '$department')";
    if(signup($sql)) {
        $status = 'Not Paid';
        $sql = "INSERT INTO payments(`email`,	`python`,	`electrichybrid`,	`datascience`,	`virtualrobot`,`emergingcommunication`) VALUES ('$email','$status','$status', '$status', '$status','$status')";
    /* query to insert into the table*/  
        $sql1= "INSERT INTO `events`(`email`, `matrimaze`, `breakingbias`, `circuitrix`, `signalize`, `twostates`, `codingcraze`, `scientistahnaanu`, `mathmagic`, `paperpresentation`, `ceghunt`, `generalquiz`, `connexion`, `22yards`, `couchpotato`, `kollywoodquiz`) VALUES ('$email',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0)";
        $sql2="INSERT INTO `workshops`(`email`,`electrichybrid`, `emergingcommunication`, `python`, `datascience`, `virtualrobot`) VALUES ('$email',0,0,0,0,0)";
        if(signup($sql)){
            if (signup($sql1 )) {
                if (signup($sql2 )) {
                $check="SELECT * FROM userinfo WHERE email= ?";
                $val = setSession($email,$check);
                if ($val) { 
                    echo "Success";          
                    $altbody='Welcome Mail!';
                    $subject='Thanks for Registering';
                    include('welcomemail.php');
                    include('send.php');
                }
                else {
                    echo 'Failure';
                }
            }
            }
        
        }
    }
    else {
        echo "Failure";
    }
    
}
if(isset($_GET['contact'])) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact(`email`,`name`,`subject`, `message`) VALUES ('$email','$name','$subject','$message')";
    if(signup($sql)) {
        echo 'Success';
    }
    else {
        echo 'Failure';
    }
}

if(isset($_GET['login'])) {
    $email = $_POST['email'];
    $temp = $_POST['password'];
    $sql = "SELECT * FROM userinfo where email = ?";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt,$sql);
    mysqli_stmt_bind_param($stmt,"s",$email);
    mysqli_stmt_execute($stmt);
    $result =mysqli_stmt_get_result($stmt);
    if(!$result || mysqli_num_rows($result)==0){
        echo 'not registered';
       
    }
    else {
        $user=mysqli_fetch_array($result);
        $pass = $user['password'];
        if(password_verify($temp,$pass)){
            $check="SELECT * FROM userinfo WHERE email= ?";
            $var = setSession($email,$check);
            if($var){
                echo 'Success';
            }
            else {
                echo 'Failure';
            }


        }
        else{
            echo 'enter password';
        }
    }
}
if(isset($_GET['checkUser'])) {
    $mail = $_POST['mail'];
    $sql = "SELECT * FROM userinfo WHERE email = '".$mail."'";
    $result = $conn->query($sql);
    if(!$result || mysqli_num_rows($result) == 0){
        echo 'F';
    }
    else
     echo 'S';
}

if(isset($_GET['updateEvent'])) {
    $event = $_GET['event'];
    $mail = $_SESSION['email'];
    $sql = "UPDATE events SET $event = 1 WHERE email = '".$mail."'";
    if (signup($sql)){
        echo 'Success';
    }
}


if(isset($_GET['updateWorkshop'])) {
    $workshop = $_GET['workshop'];
    $mail = $_SESSION['email'];
    $sql = "UPDATE workshops SET $workshop = 1 WHERE email = '".$mail."'";
    if (signup($sql)){
        echo 'Success';
    }
}

if(isset($_GET['forgotPassword'])){
    function crypto_rand_secure($min, $max) {
        $range = $max - $min;
        if ($range < 0) return $min; // not so random...
        $log = log($range, 2);
        $bytes = (int) ($log / 8) + 1; // length in bytes
        $bits = (int) $log + 1; // length in bits
        $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
        do {
            $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
            $rnd = $rnd & $filter; // discard irrelevant bits
        } while ($rnd >= $range);
        return $min + $rnd;
}

function getToken($length=32){
    $token = "";
    $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
    $codeAlphabet.= "0123456789";
    for($i=0;$i<$length;$i++){
        $token .= $codeAlphabet[crypto_rand_secure(0,strlen($codeAlphabet))];
    }
    return $token;
}


    $date = date('Y-m-d_H:i:s');
    $time = date('H:i:s');
    $link = getToken() ;
    $link = $link.'_'.$date;
    $email = $_GET['mail'];
    $sql = "INSERT INTO forgotpassword(`email`,`link`,`time`) VALUES('$email','$link','$time') ";
    $ref = 'http://visionceg.org.in/forgotpassword.php';
    $ref = $ref.'?email='.$email.'&link='.$link;
    $body='<h2>Greetings,</h2><br><br>You have initiated the forgot password procedure.Please click on this link to change your password &emsp;<a href="'.$ref.'">Click Here</a><br><br><p>The link is valid for only 10 minutes</p><br><br><p>Thanking you,<br>VISION21 Team.';
    $altbody='password';
    $subject='Change password for your Vision account';
    if(signUp($sql)){
        include('send.php');
        echo 'S';

    }else{
        echo 'Not working';
    }
    
}

    if(isset($_GET['changePassword'])){
        $options = array('cost' => 10);
        $pass = password_hash($_POST['pass'],PASSWORD_BCRYPT,$options);
        
        $uname = $_POST['email'];
        $sql = "UPDATE userinfo SET password = '".$pass."' WHERE email= '".$uname."' ";
        if(signUp($sql))
        echo "Password Updated Successfully";
    }

?>
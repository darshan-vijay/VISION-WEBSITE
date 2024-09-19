<?php
session_start();

 $dbhost = getenv('DB_HOST');
 $dbuser = getenv('DB_USER')
 $dbpass = getenv('DB_PASS')
 $db = getenv('DB_NAME')
 $conn = new mysqli($dbhost, $dbuser, $dbpass) or die("Connect failed: %s\n". $conn -> error);
 if($conn)

 if(!mysqli_select_db($conn,'VISION_DB'))
 {

 }
else {

}


function CloseCon($conn)
 {
 $conn -> close();
 }

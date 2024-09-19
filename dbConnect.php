<?php
$servername = getenv('DB_HOST');
$username = getenv('DB_USER');
$password = getenv('DB_PASS');
$dbname = getenv('DB_NAME');
// Create connection
try{
$conn = new mysqli($servername, $username, $password, $dbname);
} catch(Exception $e) {
    die("Connection Failed");
}
date_default_timezone_set('Asia/Kolkata');
session_start();
?>
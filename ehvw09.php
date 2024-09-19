<?php

require_once('dbConnect.php');
require_once('functions.php');

if (isset($_SESSION['userLoggedIn']) && $_SESSION['userLoggedIn'] == 1) {
} else {
  header("Location: login.php");
}
?>
  <?php
$email = $_SESSION['email'];
$sql = "UPDATE `payments` SET `electrichybrid` = 'Paid' WHERE email = ?";
$stmt = mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt, $sql);
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
?>

<?php
$status=$_GET['status'];
$txnid=$_GET['txnid'];
$amount=$_GET['amount'];
$email=$_GET['email'];
$phone=$_GET['phone'];
$bankcode=$_GET['bankcode'];
$cardnum=$_GET['cardnum'];
$sql = "INSERT INTO `transactiondet`(`status`, `txnid`, `amount`, `email`, `phone`, `bankcode`, `cardnum`) VALUES (?,?,?,?,?,?,?)";
$stmt = mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt, $sql);
mysqli_stmt_bind_param($stmt, "sssssss", $status,$txnid,$amount,$email,$phone,$bankcode,$cardnum);
mysqli_stmt_execute($stmt);

header("Location: succ.php");
?>
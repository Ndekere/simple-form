<?php
include 'db_connection.php';
$conn = OpenCon();
//echo "Connected Successfully!";
$name1 = $_POST['first_name'];
$name2 = $_POST['last_name'];
$email = $_POST['email'];
$passw = $_POST['password'];
//echo $email.$pass;
//if ($email===$remail){
	
$query = "INSERT INTO `infor`(`FirstName`, `LastName`, `Email`, `Password`) VALUES ('".$name1."','".$name2."','".$email."','".$passw."')";
$result = mysqli_query($conn,$query);
require 'welcome.php';

CloseCon($conn);
?>
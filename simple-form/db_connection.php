<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "ndekere";
 $dbpass = "1234";
 $db = "register";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
 
   
?>
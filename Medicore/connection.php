<?php

function OpenConnection()
 {
 $dbhost = "localhost";
 $dbuser = "root"; // user need to Enter their user name of phpadmin
 $dbpass = "root"; // user need to Enter their password of phpadmin here
 $db = "medic2";


 $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

 
 return $conn;
 }
 
function CloseConnection($conn)
 {
 $conn -> close();
 }
   
?>
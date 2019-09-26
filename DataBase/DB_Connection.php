
<?php

function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "Nikhil123.@";
 $db = "Intershala";
 $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
//  if (mysqli_connect_errno())
// {
// 	$Name="NotConnect";
//  echo "<script type='text/javascript'>alert('$Name');</script>";
//   echo "Failed to connect to MySQL: " . mysqli_connect_error();
// }else{
// 	$Name="Connect";
//  echo "<script type='text/javascript'>alert('$Name');</script>";
// }
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>
<?php
header("Access-Control-Allow-Origin: *");
header("Content-type:text/html; charset=UTF-8");          
header("Cache-Control: no-store, no-cache, must-revalidate");         
header("Cache-Control: post-check=0, pre-check=0", false); 

echo $_POST['errorstation']."|".date("d-m-Y H:i:s");

define('dbname', 'u742683457_g10');
   $servername = "mysql.hostinger.in.th";
   $username = "u742683457_g10";
   $password = "s1g1s1g1";
   $dbname = "u742683457_g10";
   $conn = new mysqli($servername, $username, $password, $dbname);
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   } 

date_default_timezone_set("Asia/Bangkok");
$d  = date("d-m-Y H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];

$errorstation = $_POST['errorstation'] . "error";
echo $errorstation;

$sql="INSERT INTO $errorstation(ID,Timeerror,IP) 
    VALUES ('0','$d', '$ip')";
$uperror= mysqli_query($conn,$sql);


exit;
?>
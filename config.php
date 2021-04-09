<?php
   define('dbname', 'u742683457_g10');
   $servername = "mysql.hostinger.in.th";
   $username = "u742683457_g10";
   $password = "s1g1s1g1";
   $dbname = "u742683457_g10";
   $conn = new mysqli($servername, $username, $password, $dbname);
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   } 

  ?>
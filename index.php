<html>

  <title>BKK STATION</title>
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Athiti">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit:200">
  <link rel="stylesheet" href="https://unpkg.com/bootstrap@4.1.0/dist/css/bootstrap.min.css" >
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
  <script src= "https://code.jquery.com/jquery-1.12.4.min.js"> </script> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <link rel="stylesheet" href="styleindex.css">
  <link rel="icon" type="image/png" href="image/rff.png" />
  <style>
        .framebot {
      max-width: 100%;
      height: 400px;
      border-style: none;
      box-shadow: -4px -4px 4px whitesmoke;
      }

      img[ src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]{
        display:none!important;
      }

  </style>
  
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

    $btstable="BTS";
    $mrttable="MRT";
    $arltable="ARL";
    $columnname="NAME";
    $columnstation="station";
    $aa="select * from $btstable where ID != 004 and ID != 038 ";
    $a = mysqli_query($conn, $aa);
    $aaa = mysqli_query($conn, $aa);
    $bb="select * from $mrttable";
    $b = mysqli_query($conn, $bb);
    $bbb = mysqli_query($conn, $bb);
    $cc="select * from $arltable";
    $c = mysqli_query($conn, $cc);
    $ccc = mysqli_query($conn, $cc);

    date_default_timezone_set("Asia/Bangkok");
    $daynow = date("N");
    $timenow  = date("G");
    $showtime = date("H:i");

    $daynow = (int)$daynow;
    $timenow = (int)$timenow;

    $checknotibts = "SELECT * FROM  BTSerror WHERE IP='xxx'";
    $checknotibtsnow = mysqli_query($conn, $checknotibts);
    $numnotibts = mysqli_fetch_array($checknotibtsnow);
    $recordnotibts = $numnotibts[0];

    $checknotimrt = "SELECT * FROM  MRTerror WHERE IP='xxx'";
    $checknotimrtnow = mysqli_query($conn, $checknotimrt);
    $numnotimrt = mysqli_fetch_array($checknotimrtnow);
    $recordnotimrt = $numnotimrt[0];

    $checknotiarl = "SELECT * FROM  ARLerror WHERE IP='xxx'";
    $checknotiarlnow = mysqli_query($conn, $checknotiarl);
    $numnotiarl = mysqli_fetch_array($checknotiarlnow);
    $recordnotiarl = $numnotiarl[0];


        date_default_timezone_set("Asia/Bangkok");
        $noww  = date("d-m-Y H:i:s");
        $now = new DateTime($noww);

        $x = "";
        $y = "";
        $z = "";

        $checkbts = "select * from BTSerror";
        $checkmrt = "select * from MRTerror";
        $checkarl = "select * from ARLerror";

        $checkbtserror = mysqli_query($conn, $checkbts);
        $checkmrterror = mysqli_query($conn, $checkmrt);
        $checkarlerror = mysqli_query($conn, $checkarl);

    if($recordnotibts == 0){
        if($checkbtserror){
            $i = 1;
            $numerrorbts = 0;
            while($row=mysqli_fetch_array($checkbtserror))
            {
                $dateerrorr=$row["Timeerror"];
                $dateerror = new DateTime($dateerrorr);
                $dis = $dateerror->diff($now);

                $days = $dis->format("%d");
                $hours = $dis->format("%H");
                $mins = $dis->format("%i");

                if($days == 0 && $hours == 0 && $mins <= 59){
                    $numerrorbts += 1;
                }
                else{
                    $del = "DELETE from BTSerror where Timeerror = '$dateerrorr'";
                    $dell = mysqli_query($conn, $del);
                }
                
                $i += 1;
            }

            if($numerrorbts >= 3){
              $addx="INSERT INTO BTSerror(ID,Timeerror,IP) VALUES ('0','$noww', 'xxx')";
              $add = mysqli_query($coeiei, $addx);
              $del = "DELETE from BTSerror where IP != 'xxx'";
              $dell = mysqli_query($coeiei, $del);
              $recordnotibts = 1;
            }
        }
    }

    if($recordnotimrt == 0){
        if($checkmrterror){
            $i = 1;
            $numerrormrt = 0;
            while($row=mysqli_fetch_array($checkmrterror))
            {
                $dateerrorr=$row["Timeerror"];
                $dateerror = new DateTime($dateerrorr);
                $dis = $dateerror->diff($now);

                $days = $dis->format("%d");
                $hours = $dis->format("%H");
                $mins = $dis->format("%i");

                if($days == 0 && $hours == 0 && $mins <= 59){
                    $numerrormrt += 1;
                }
                else{
                    $del = "DELETE from MRTerror where Timeerror = '$dateerrorr'";
                    $dell = mysqli_query($conn, $del);
                }
                
                $i += 1;
            }

            if($numerrormrt >= 3){
                $addx="INSERT INTO MRTerror(ID,Timeerror,IP) VALUES ('0','$noww', 'xxx')";
                $add = mysqli_query($conn, $addx);
                $del = "DELETE from MRTerror where IP != 'xxx'";
                $dell = mysqli_query($conn, $del);
                $recordnotimrt = 1;
            }
        }

    }

    if($recordnotiarl == 0){
        if($checkarlerror){
            $i = 1;
            $numerrorarl = 0;
            while($row=mysqli_fetch_array($checkarlerror))
            {
                $dateerrorr=$row["Timeerror"];
                $dateerror = new DateTime($dateerrorr);
                $dis = $dateerror->diff($now);

                $days = $dis->format("%d");
                $hours = $dis->format("%H");
                $mins = $dis->format("%i");

                if($days == 0 && $hours == 0 && $mins <= 59){
                    $numerrorarl += 1;
                }
                else{
                    $del = "DELETE from ARLerror where Timeerror = '$dateerrorr'";
                    $dell = mysqli_query($conn, $del);
                }
                
                $i += 1;
            }

            if($numerrorarl >= 3){
              $addx="INSERT INTO ARLerror(ID,Timeerror,IP) VALUES ('0','$noww', 'xxx')";
              $add = mysqli_query($conn, $addx);
              $del = "DELETE from ARLerror where IP != 'xxx'";
              $dell = mysqli_query($conn, $del);
              $recordnotiarl = 1;
            }
        }

    }

       if($recordnotibts != 0){
           $abc = $recordnotibts;
           if($checknotibtsnow){
            while($row=mysqli_fetch_array($checkbtserror))
            {
                $dateerrorr=$row["Timeerror"];
                $dateerror = new DateTime($dateerrorr);
                $dis = $dateerror->diff($now);

                $days = $dis->format("%d");
                $hours = $dis->format("%H");
                $mins = $dis->format("%i");

                if($hours >= 2 || $days >= 1){
                    $del = "DELETE from BTSerror where Timeerror = '$dateerrorr'";
                    $dell = mysqli_query($conn, $del);
                    $abc -= 1;
                }
            }
           }
           if($abc != 0){
           $x = "ขณะนี้รถไฟฟ้า BTS กำลังมีปัญหา ";
        }
       }
       
       if($recordnotimrt != 0){
            $abc = $recordnotimrt;
            if($checknotimrtnow){
            while($row=mysqli_fetch_array($checkmrterror))
            {
                $dateerrorr=$row["Timeerror"];
                $dateerror = new DateTime($dateerrorr);
                $dis = $dateerror->diff($now);

                $days = $dis->format("%d");
                $hours = $dis->format("%H");
                $mins = $dis->format("%i");

                if($hours >= 2 || $days >= 1){
                    $del = "DELETE from MRTerror where Timeerror = '$dateerrorr'";
                    $dell = mysqli_query($conn, $del);
                    $abc -= 1;
                }
            }
            }
            if($abc != 0){
            $y = "ขณะนี้รถไฟฟ้า MRT กำลังมีปัญหา ";
            }
        }
    
        if($recordnotiarl != 0){
                $abc = $recordnotiarl;
            if($checknotiarlnow){
                while($row=mysqli_fetch_array($checkarlerror))
                {
                    $dateerrorr=$row["Timeerror"];
                    $dateerror = new DateTime($dateerrorr);
                    $dis = $dateerror->diff($now);

                    $days = $dis->format("%d");
                    $hours = $dis->format("%H");
                    $mins = $dis->format("%i");

                    if($hours >= 2 || $days >= 1){
                        $del = "DELETE from ARLerror where Timeerror = '$dateerrorr'";
                        $dell = mysqli_query($conn, $del);
                        $abc -= 1;
                    }
                }
            }
            if($abc != 0){
            $z = "ขณะนี้รถไฟฟ้า ARL กำลังมีปัญหา ";
            }
        }

        $noti = $x.$y.$z ;

   



  if (empty($_POST['membts']) || empty($_POST['memmrt']) || empty($_POST['memarl'])){
    if((1 <= $daynow  && $daynow <= 5) && ((6 <= $timenow && $timenow <= 8 ) || (16 <= $timenow && $timenow <= 20)) ){
      echo '<script type="text/javascript" align"center">alert("'. $x . $y . $z.'ขณะนี้เวลา ' . $showtime . ' น.\nรถไฟฟ้าอาจจะมีผู้โดยสารหนาแน่น\nกรุณาเผื่อเวลาในการเดินทาง")</script>';
    }
    else if(16 <= $timenow && $timenow <= 20){
      echo '<script type="text/javascript" align"center">alert("'. $x . $y . $z.'ขณะนี้เวลา ' . $showtime . ' น.\nรถไฟฟ้าอาจจะมีผู้โดยสารหนาแน่น\nกรุณาเผื่อเวลาในการเดินทาง")</script>';
    }
    else if($x != "" || $y != "" || $z != "" ){
      echo '<script type="text/javascript" align"center">alert("'. $x . $y . $z .'")</script>';
    }
    $membts='btsnon';
    $memmrt='mrtnon';
    $memarl='arlnon';
    }
    else{
          $membts=$_POST['membts'];
          $memmrt=$_POST['memmrt'];
          $memarl=$_POST['memarl'];
    }
    ?>

</head>

    <body style="font-family:Verdana;color:black; background-color: white;">
    <!-- menu web -->
    <div class="w3-top">
        <div class="w3-bar color-gg w3-card">
            <a style="width:80%; text-align:center; font-weight: 600;" class="w3-bar-item w3-padding-large w3-hide-large w3-hide-medium">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BKK station</a>
            <a href="#" style="width:10%; font-size:20px;" class="w3-bar-item w3-button w3-padding-large w3-left w3-hide-small w3-hide-medium" ><u>Map</u></a>
            <a style="width:80%; text-align:center; font-weight: 600; font-size:20px;" class="w3-bar-item w3-padding-large w3-hide-small">BKK station</a>
            <a href="#contact" style="width:10%; font-size:20px;" class="w3-bar-item w3-button w3-padding-large w3-right w3-hide-small w3-hide-medium"><u>Contact</u></a>
            <a class="w3-bar-item w3-button w3-padding-large w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
        </div>
    </div>

    <!-- menu phone -->
    <div id="navDemo" class="w3-bar-block color-gg w3-hide w3-hide-large w3-top" style="margin-top:46px">
        <a href="#" class="w3-bar-item w3-button w3-padding-large">Map</a>
        <a href="https://chatbkk-262512.appspot.com/" class="w3-bar-item w3-button w3-padding-large">Chatbot</a>
        <a href="contact.php" class="w3-bar-item w3-button w3-padding-large">Contact</a>
    </div>

    <div style=" background-size: 100%; height:50px;"></div>

    <iframe align="middle" class="w3-hide-large w3-hide-medium " src="mapphone.php" id="mapphone"  width="100%" height="70%" style="border:none;"></iframe>
        
    <div class="main w3-hide-small">

     
        <iframe align="middle" src="map.php" id="map" width="100%" height="80%" style="border:none;"></iframe>


        <div class="right">
        <div class="sidesection w3-light-grey" style="margin-left:auto;margin-right:auto;max-width:100%"> </div>
      
      <p align="left" style="padding-left:10%" ><br>Start:</p>

      <form name="a" method="post" action="station.php" onSubmit="JavaScript:return fncSubmit();">

        
      <select name="start" id="start" style="width:80%; height:28px;">
          <option value='0'>&nbsp;&nbsp;&nbsp;-Please Select-</option>
          <option style="background:#006000; color:#ffffff;" disabled>-----BTS สายสุขุมวิท-----</option>

          <?php
            if($a)
            {
              while($row=mysqli_fetch_array($a))
              { 
                $NAME=$row["$columnname"]; $station=$row["$columnstation"]; $stationid=$row["stationid"];
                 if($stationid == 36){ 
                  echo"<option style='color:#006000;' value='4400' >&nbsp;&nbsp;&nbsp;สยาม (Siam)</option>";
                 }
                echo"<option style='color:#006000;' value='$station' >&nbsp;&nbsp;&nbsp;$NAME</option>";
                if($stationid == 33){ 
                  echo "<option style='background:#a1c45a; color:#ffffff;' disabled>-----BTS สายสีลม-----</option>";
                 }
              }
            }
          ?>
        
        <option style="background:#9979c1; color:#ffffff;" disabled>-----MRT สายสีม่วง-----</option>
          
          <?php
            if($b)
            {
              while($row=mysqli_fetch_array($b))
              { 
                $NAME=$row["$columnname"]; $station=$row["$columnstation"]; $stationid=$row["stationid"];
                 echo"<option style='color:#305f72;' value='$station' >&nbsp;&nbsp;&nbsp;$NAME</option>";
                if($stationid == 16){ 
                  echo "<option style='background:#305f72; color:#ffffff;' disabled>-----MRT สายสีน้ำเงิน-----</option>";
                 echo"<option style='color:#305f72;' value='4100' >&nbsp;&nbsp;&nbsp;เตาปูน (Tao Poon)</option>";
                 }
              }
            }
          ?>

          <option style="background:#8b0000; color:#ffffff;" disabled>-----ARL-----</option>

          <?php
            if($c)
            {
              while($row=mysqli_fetch_array($c))
              { 
                $NAME=$row["$columnname"]; $station=$row["$columnstation"];
                echo"<option style='color:#8b0000;' value='$station'>&nbsp;&nbsp;&nbsp;$NAME</option>";
              }
            }
          ?>
          </select>

        

        <p align="left" style="padding-left:10%" ><br>Destination:</p>

        <select name="stop" id="stop" style="width:80%; height:28px;">

          <option value='0'>&nbsp;&nbsp;&nbsp;-Please Select-</option>
          <option style="background:#006000; color:#ffffff;" disabled>-----BTS สายสุขุมวิท-----</option>

          <?php
            if($aaa)
            {
              while($row=mysqli_fetch_array($aaa))
              { 
                $NAME=$row["$columnname"]; $station=$row["$columnstation"]; $stationid=$row["stationid"];
                 if($stationid == 36){ 
                  echo"<option style='color:#006000;' value='4400' >&nbsp;&nbsp;&nbsp;สยาม (Siam)<br></option>";
                 }
                echo"<option style='color:#006000;' value='$station' >&nbsp;&nbsp;&nbsp;$NAME<br></option>";
                if($stationid == 33){ 
                  echo "<option style='background:#a1c45a; color:#ffffff;' disabled>-----BTS สายสีลม-----</option>";
                 }
              }
            }
          ?>

          <option style="background:#9979c1; color:#ffffff;" disabled>-----MRT สายสีม่วง-----</option>

          <?php
            if($bbb)
            { 
              while($row=mysqli_fetch_array($bbb))
              { 
                $NAME=$row["$columnname"]; $station=$row["$columnstation"]; $stationid=$row["stationid"];
                 echo"<option style='color:#305f72;' value='$station' >&nbsp;&nbsp;&nbsp;$NAME<br></option>";
                if($stationid == 16){ 
                  echo "<option style='background:#305f72; color:#ffffff;' disabled>-----MRT สายสีน้ำเงิน-----</option>";
                 echo"<option style='color:#305f72;' value='4100' >&nbsp;&nbsp;&nbsp;เตาปูน (Tao Poon)<br></option>";
                 }
              }
            }
          ?>

          <option style="background:#8b0000; color:#ffffff;" disabled>-----ARL-----</option>
          
          <?php
            if($ccc)
            {
              while($row=mysqli_fetch_array($ccc))
              { 
                $NAME=$row["$columnname"];  $station=$row["$columnstation"];
                echo"<option style='color:#8b0000' value='$station'>&nbsp;&nbsp;&nbsp;$NAME<br></option>";
              }
            }
          ?>

        </select>
        
        
        
        <input type="hidden" name="membts" value="<?php echo htmlspecialchars($membts); ?>" />
        <input type="hidden" name="memmrt" value="<?php echo htmlspecialchars($memmrt); ?>" />
        <input type="hidden" name="memarl" value="<?php echo htmlspecialchars($memarl); ?>" />
        <input type="hidden" name="btnselect" value="1" />

        <br>
        <br>
        
        <input name="member" type="button" value="Member Card"onclick=' document.getElementById("edit").style.display = "block";' class="buttonsub">  
        <input name="submit" type="submit" value="Confirm" class="buttonsub color-green">  

      </form>

      </div>
    </div>

    <?php

      $aa="select * from $btstable where ID != 004 and ID != 038 ";
      $a = mysqli_query($conn, $aa);
      $aaa = mysqli_query($conn, $aa);
      $bb="select * from $mrttable";
      $b = mysqli_query($conn, $bb);
      $bbb = mysqli_query($conn, $bb);
      $cc="select * from $arltable";
      $c = mysqli_query($conn, $cc);
      $ccc = mysqli_query($conn, $cc);

    ?>


    <div class="down w3-hide-large w3-hide-medium">
    
    <form name="a" method="post" action="station.php" onSubmit="JavaScript:return fncSubmit2();">
    <br>
    
      <p style="padding-left:4%" >Start:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <select name="start" id="start2" style="width:50%; height:28px;">
      <option value='0'>&nbsp;&nbsp;&nbsp;-Please Select-</option>
      <option style="background:#006000; color:#ffffff;" disabled>-----BTS สายสุขุมวิท-----</option>

    <?php
      if($a)
      {
        while($row=mysqli_fetch_array($a))
        { 
          $NAME=$row["$columnname"]; $station=$row["$columnstation"]; $stationid=$row["stationid"];
           if($stationid == 36){ 
            echo"<option style='color:#006000;' value='4400' >&nbsp;&nbsp;&nbsp;สยาม (Siam)</option>";
           }
          echo"<option style='color:#006000;' value='$station' >&nbsp;&nbsp;&nbsp;$NAME</option>";
          if($stationid == 33){ 
            echo "<option style='background:#a1c45a; color:#ffffff;' disabled>-----BTS สายสีลม-----</option>";
           }
        }
      }
    ?>
  
      <option style="background:#9979c1; color:#ffffff;" disabled>-----MRT สายสีม่วง-----</option>
        
        <?php
          if($b)
          {
            while($row=mysqli_fetch_array($b))
            { 
              $NAME=$row["$columnname"]; $station=$row["$columnstation"]; $stationid=$row["stationid"];
              echo"<option style='color:#305f72;' value='$station' >&nbsp;&nbsp;&nbsp;$NAME</option>";
              if($stationid == 16){ 
                echo "<option style='background:#305f72; color:#ffffff;' disabled>-----MRT สายสีน้ำเงิน-----</option>";
              echo"<option style='color:#305f72;' value='4100' >&nbsp;&nbsp;&nbsp;เตาปูน (Tao Poon)</option>";
              }
            }
          }
        ?>

        <option style="background:#8b0000; color:#ffffff;" disabled>-----ARL-----</option>

        <?php
          if($c)
          {
            while($row=mysqli_fetch_array($c))
            { 
              $NAME=$row["$columnname"]; $station=$row["$columnstation"];
              echo"<option style='color:#8b0000;' value='$station'>&nbsp;&nbsp;&nbsp;$NAME</option>";
            }
          }
        ?>
        </select>
        </p>
      
      
      <p style="padding-left:4%" >Destination:
        
      <select name="stop" id="stop2" style="width:50%; height:28px;">

        <option value='0'>&nbsp;&nbsp;&nbsp;-Please Select-</option>
        <option style="background:#006000; color:#ffffff;" disabled>-----BTS สายสุขุมวิท-----</option>

        <?php
          if($aaa)
          {
            while($row=mysqli_fetch_array($aaa))
            { 
              $NAME=$row["$columnname"]; $station=$row["$columnstation"]; $stationid=$row["stationid"];
              if($stationid == 36){ 
                echo"<option style='color:#006000;' value='4400' >&nbsp;&nbsp;&nbsp;สยาม (Siam)</option>";
              }
              echo"<option style='color:#006000;' value='$station' >&nbsp;&nbsp;&nbsp;$NAME</option>";
              if($stationid == 33){ 
                echo "<option style='background:#a1c45a; color:#ffffff;' disabled>-----BTS สายสีลม-----</option>";
              }
            }
          }
        ?>

        <option style="background:#9979c1; color:#ffffff;" disabled>-----MRT สายสีม่วง-----</option>

        <?php
          if($bbb)
          { 
            while($row=mysqli_fetch_array($bbb))
            { 
              $NAME=$row["$columnname"]; $station=$row["$columnstation"]; $stationid=$row["stationid"];
              echo"<option style='color:#305f72;' value='$station' >&nbsp;&nbsp;&nbsp;$NAME</option>";
              if($stationid == 16){ 
                echo "<option style='background:#305f72; color:#ffffff;' disabled>-----MRT สายสีน้ำเงิน-----</option>";
              echo"<option style='color:#305f72;' value='4100' >&nbsp;&nbsp;&nbsp;เตาปูน (Tao Poon)</option>";
              }
            }
          }
        ?>

        <option style="background:#8b0000; color:#ffffff;" disabled>-----ARL-----</option>
        
        <?php
          if($ccc)
          {
            while($row=mysqli_fetch_array($ccc))
            { 
              $NAME=$row["$columnname"];  $station=$row["$columnstation"];
              echo"<option style='color:#8b0000' value='$station'>&nbsp;&nbsp;&nbsp;$NAME</option>";
            }
          }
        ?>

      </select>
        </p>
      
      
      
      <input type="hidden" name="membts" value="<?php echo htmlspecialchars($membts); ?>" />
      <input type="hidden" name="memmrt" value="<?php echo htmlspecialchars($memmrt); ?>" />
      <input type="hidden" name="memarl" value="<?php echo htmlspecialchars($memarl); ?>" />
      <input type="hidden" name="btnselect" value="1" />
      
      <input name="member" type="button" value="Member Card"onclick='document.getElementById("edit").style.display = "block";' class="buttonphone">  
      <input name="submit" type="submit" value="Confirm" class="buttonphone color-green">   
        

    </form>
    </div>
    </div>

    <?php
      $countid = "select ID from counter group by ID desc";
      $count = mysqli_query($conn, $countid);
      $row = mysqli_fetch_assoc($count); 
      $countt=$row["ID"];
      echo ' <img src = "image/eye.png" align="left" width="22px">'.' : ' . $countt ;
    ?>
    
    <img src ="image/chat.png" class="buttonchat w3-hide-small" onclick='checkchat()'>


    <div class="footerr  w3-hide-small ">
        <div class="conbts">
          <table id="contact"  align = "center" Cellpadding = "5" style=" font-size:12px;">
            <tr>
              <td width="30%">
                <img src = "image/btss.png" align="center" width="100%">
              </td>
              <td width="58%">
                <img src = "image/lo.png" width="15%">
                อาคารบีทีเอส 1000 ถนนพหลโยธิน แขวงจอมพล เขตจตุจักร กรุงเทพฯ 10900
                <br> <img src = "image/call.png" width="10%"> 026177300
                <br> <img src = "image/call.png" width="10%"> 026176000
                <br> <img src = "image/fax.png" width="10%"> 026177133
                <br> <img src = "image/fax.png" width="10%"> 026177155
              </td>
              <td width="12%">
                <a href="https://www.facebook.com/BTS.SkyTrain/" target="_blank"><img src="image/fb.png" width="100%"></a><br><br>
                <a href='mailto:nuduan@bts.co.th' target='_top'><img src="image/mail.png" width="100%"></a><br><br>
                <a href="https://twitter.com/bts_skytrain" target="_blank"><img src="image/twit.png" width="100%"></a><br>
              </td>
            </tr>
          </table> 	
        </div>

        <div class="conmrt">
          <table id="contact"  align = "center" Cellpadding = "5" style=" font-size:12px;">
            <tr>
              <td width="30%">
                <img src = "image/mrt.png" align="center" width="100%">
              </td>
              <td width="58%">
                <img src = "image/lo.png" width="15%">
                175 ถนน พระราม 9 แขวง ห้วยขวาง เขต ห้วยขวาง กรุงเทพมหานคร 10310
                <br><img src = "image/call.png" width="10%"> 027164000
                <br><img src = "image/call.png" width="10%"> 027164044
                <br> <img src = "image/fax.png" width="10%"> 027164019 
              </td>
              <td width="12%">
                <a href="https://www.facebook.com/BEM.MRT/" target="_blank"><img src="image/fb.png" width="100%"></a><br><br>
                <a href='mailto:PR@mrta.co.th' target='_top'><img src="image/mail.png" width="100%"></a><br><br>
                <a href="https://twitter.com/BEM_MRT" target="_blank"><img src="image/twit.png" width="100%"></a><br>
              </td>
            </tr>
          </table>
        </div>

        <div class="conarl">
          <table id="contact" align="center" Cellpadding = "5" style=" font-size:12px;">
            <tr>
              <td width="30%">
                <img src = "image/arl.png" align="center" width="100%">
              </td>
              <td width="58%">
                <img src = "image/lo.png" width="15%">
                ศูนย์ซ่อมบำรุงคลองตัน เลขที่ 27 ซอยเพชรบุรี 47 (ศูนย์วิจัย) แขวงบางกะปิ เขตห้วยขวาง กรุงเทพฯ 10320
                <br><img src = "image/call.png" width="10%"> 1690
                <br><img src = "image/call.png" width="10%"> 023085600
                <br><img src = "image/fax.png" width="10%"> 023085696
              </td>
              <td width="12%">
                <a href="https://www.facebook.com/AirportRailLink/?fref=ts" target="_blank"><img src="image/fb.png" width="100%"></a><br><br>
                <a href='mailto:crc@bemplc.co.th' target='_top'><img src="image/mail.png" width="100%"></a><br><br>
                <a href="https://twitter.com/airportraillink" target="_blank"><img src="image/twit.png" width="100%"></a><br>
              </td>
            </tr>
          </table>
        </div>

        <div class="conus">
          <table id="contact"  align="center" Cellpadding = "5" style=" font-size:12px;">
            <tr>
              <td width="30%">
                <img src = "image/us.png" align="center" width="100%">
              </td>
              <td width="70" style=" padding-top:35px;">
                น.ส.พรจรัส เฟื่องชูนุช 60010655<br>
                น.ส.รัตนพร ป้องสงวน 60010865<br>
                น.ส.สุพรรษา ภิรมย์เกียรติ์ 60011098<br>
                น.ส.หนึ่งนุช  เจริญทรัพย์ 60011125<br><br>
                <div align="right">Icons made by <a href="https://www.freepik.com/" title="Freepik">Freepik</a></div>
              </td>
            </tr>
          </table>
        </div>
      </div>
    



      <script src="https://unpkg.com/jquery@3.3.1/dist/jquery.min.js"></script> 
      <script src="https://unpkg.com/bootstrap@4.1.0/dist/js/bootstrap.min.js"></script> 
      <script type="text/javascript"> 


      function fncSubmit()
      {
        
      var abc = 0;
          if(document.getElementById('start').value  == "0" | document.getElementById('stop').value  == "0" )
          {
              abc = abc + 1;
              alert('กรุณาเลือกต้นทาง/ปลายทาง');
              return false;
          }

      }

      function fncSubmit2()
      {
        
      var abc = 0;
          if(document.getElementById('start2').value  == "0" | document.getElementById('stop2').value  == "0" )
          {
              abc = abc + 1;
              alert('กรุณาเลือกต้นทาง/ปลายทาง');
              return false;
          }

      }

      function myFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
          x.className += " w3-show";
        } else { 
          x.className = x.className.replace(" w3-show", "");
        }
      }

      
      function checkchat() {
        var chat = document.getElementById("Formchat");
        if(chat.style.display == "block"){
          chat.style.display = "none";
        }
        else{
          chat.style.display = "block";
        }
      }


      </script>  

      <!-- Bootstrap's JavaScript Files -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
      <div id="edit" class="modal formmodel">
          
          <form id="formedit" name="formedit" class="modal-content animate" action="index.php" method="post">

            <div class="container">
              <label for="uname"><b>Member Card</b></label>
              <br>

              <div class="row">
              <div class="columnbts" style="grid-auto-flow: column;">
              <p align="left" style="padding-left:10%" ><br>Member of BTS:<br>
              <?php if(empty($_POST['membts'])){
                ?>
                <input type="radio" name="membts" id="bts1" value="btsnon" checked> ไม่มีบัตรสมาชิก<br> 
                <input type="radio" name="membts" id="bts2" value="btstrip"> บัตรเติมเที่ยวเดินทาง<br>
                <input type="radio" name="membts" id="bts3" value="btsgeneral"> บัตรบุคคลทั่วไป<br>
                <input type="radio" name="membts" id="bts4" value="btsstudent"> บัตรนักเรียน/นักศึกษา<br>
                <input type="radio" name="membts" id="bts5" value="btsold"> บัตรผู้สูงอายุ
                <?php
              }
              else if( $membts == "btsold" ){?>
                <input type="radio" name="membts" id="bts1" value="btsnon"> ไม่มีบัตรสมาชิก<br> 
                <input type="radio" name="membts" id="bts2" value="btstrip"> บัตรเติมเที่ยวเดินทาง<br>
                <input type="radio" name="membts" id="bts3" value="btsgeneral"> บัตรบุคคลทั่วไป<br>
                <input type="radio" name="membts" id="bts4" value="btsstudent"> บัตรนักเรียน/นักศึกษา<br>
                <input type="radio" name="membts" id="bts5" value="btsold" checked> บัตรผู้สูงอายุ
                <?php
              }
              else if( $membts == "btstrip" ){?>
                <input type="radio" name="membts" id="bts1" value="btsnon" > ไม่มีบัตรสมาชิก<br> 
                <input type="radio" name="membts" id="bts2" value="btstrip" checked> บัตรเติมเที่ยวเดินทาง<br>
                <input type="radio" name="membts" id="bts3" value="btsgeneral"> บัตรบุคคลทั่วไป<br>
                <input type="radio" name="membts" id="bts4" value="btsstudent"> บัตรนักเรียน/นักศึกษา<br>
                <input type="radio" name="membts" id="bts5" value="btsold"> บัตรผู้สูงอายุ
                <?php
              }
              else if( $membts == "btsgeneral" ){?>
                <input type="radio" name="membts" id="bts1" value="btsnon" > ไม่มีบัตรสมาชิก<br> 
                <input type="radio" name="membts" id="bts2" value="btstrip" > บัตรเติมเที่ยวเดินทาง<br>
                <input type="radio" name="membts" id="bts3" value="btsgeneral" checked> บัตรบุคคลทั่วไป<br>
                <input type="radio" name="membts" id="bts4" value="btsstudent"> บัตรนักเรียน/นักศึกษา<br>
                <input type="radio" name="membts" id="bts5" value="btsold"> บัตรผู้สูงอายุ
                <?php
              }
              else if( $membts == "btsstudent" ){?>
                <input type="radio" name="membts" id="bts1" value="btsnon" > ไม่มีบัตรสมาชิก<br> 
                <input type="radio" name="membts" id="bts2" value="btstrip" > บัตรเติมเที่ยวเดินทาง<br>
                <input type="radio" name="membts" id="bts3" value="btsgeneral" > บัตรบุคคลทั่วไป<br>
                <input type="radio" name="membts" id="bts4" value="btsstudent"  checked> บัตรนักเรียน/นักศึกษา<br>
                <input type="radio" name="membts" id="bts5" value="btsold"> บัตรผู้สูงอายุ
                <?php
              }
              else{?>
                <input type="radio" name="membts" id="bts1" value="btsnon" checked> ไม่มีบัตรสมาชิก<br> 
                <input type="radio" name="membts" id="bts2" value="btstrip"> บัตรเติมเที่ยวเดินทาง<br>
                <input type="radio" name="membts" id="bts3" value="btsgeneral"> บัตรบุคคลทั่วไป<br>
                <input type="radio" name="membts" id="bts4" value="btsstudent"> บัตรนักเรียน/นักศึกษา<br>
                <input type="radio" name="membts" id="bts5" value="btsold"> บัตรผู้สูงอายุ
                <?php
              }?>
              </p>
              </div>

              <div class="columnmrt" style="grid-auto-flow: column;">
              <p align="left" style="padding-left:10%" ><br>Member of MRT:<br>
              <?php if(empty($_POST['memmrt'])){
                ?>
                <input type="radio" name="memmrt" id="mrt1" value="mrtnon" checked> ไม่มีบัตรสมาชิก หรือ บัตรบุคคลทั่วไป<br> 
                <input type="radio" name="memmrt" id="mrt2" value="mrtstudent" > บัตรนักเรียน/นักศึกษา<br>
                <input type="radio" name="memmrt" id="mrt3" value="mrtold"> บัตรผู้สูงอายุหรือเด็ก
                <?php
              }
              else if( $memmrt == "mrtold" ){?>
                <input type="radio" name="memmrt" id="mrt1" value="mrtnon"> ไม่มีบัตรสมาชิก หรือ บัตรบุคคลทั่วไป<br> 
                <input type="radio" name="memmrt" id="mrt2" value="mrtstudent"> บัตรนักเรียน/นักศึกษา<br>
                <input type="radio" name="memmrt" id="mrt3" value="mrtold" checked> บัตรผู้สูงอายุหรือเด็ก
                <?php
              }
              else if( $memmrt == "mrtstudent" ){?>
                <input type="radio" name="memmrt" id="mrt1" value="mrtnon"> ไม่มีบัตรสมาชิก หรือ บัตรบุคคลทั่วไป<br> 
                <input type="radio" name="memmrt" id="mrt2" value="mrtstudent" checked> บัตรนักเรียน/นักศึกษา<br>
                <input type="radio" name="memmrt" id="mrt3" value="mrtold"> บัตรผู้สูงอายุหรือเด็ก
                <?php
              }
              else {?>
                <input type="radio" name="memmrt" id="mrt1" value="mrtnon" checked> ไม่มีบัตรสมาชิก หรือ บัตรบุคคลทั่วไป<br> 
                <input type="radio" name="memmrt" id="mrt2" value="mrtstudent" > บัตรนักเรียน/นักศึกษา<br>
                <input type="radio" name="memmrt" id="mrt3" value="mrtold"> บัตรผู้สูงอายุหรือเด็ก
                <?php
              }?>
              </p>
              </div>
              <div class="columnarl" style="grid-auto-flow: column;">
               <p align="left" style="padding-left:10%" ><br>Member of Airport Rail Link:<br>
              <?php if(empty($_POST['memarl'])){
                ?>
                <input type="radio" name="memarl" id="arl1" value="arlnon" checked> ไม่มีบัตรสมาชิก หรือ บัตรบุคคลทั่วไป<br> 
                <input type="radio" name="memarl" id="arl2" value="arlstudent"> บัตรนักเรียน/นักศึกษา<br>
                <input type="radio" name="memarl" id="arl3" value="arlold"> บัตรผู้สูงอายุหรือเด็ก
                <?php
              }
              else if($memarl == "arlstudent" ){?>
                <input type="radio" name="memarl" id="arl1" value="arlnon" > ไม่มีบัตรสมาชิก หรือ บัตรบุคคลทั่วไป<br> 
                <input type="radio" name="memarl" id="arl2" value="arlstudent" checked> บัตรนักเรียน/นักศึกษา<br>
                <input type="radio" name="memarl" id="arl3" value="arlold" > บัตรผู้สูงอายุหรือเด็ก
                <?php
              }
              else if( $memarl == "arlold" ){?>
                <input type="radio" name="memarl" id="arl1" value="arlnon" > ไม่มีบัตรสมาชิก หรือ บัตรบุคคลทั่วไป<br> 
                <input type="radio" name="memarl" id="arl2" value="arlstudent"> บัตรนักเรียน/นักศึกษา<br>
                <input type="radio" name="memarl" id="arl3" value="arlold" checked> บัตรผู้สูงอายุหรือเด็ก
                <?php
              }
              else {?>
                <input type="radio" name="memarl" id="arl1" value="arlnon" checked> ไม่มีบัตรสมาชิก หรือ บัตรบุคคลทั่วไป<br> 
                <input type="radio" name="memarl" id="arl2" value="arlstudent"> บัตรนักเรียน/นักศึกษา<br>
                <input type="radio" name="memarl" id="arl3" value="arlold"> บัตรผู้สูงอายุหรือเด็ก
                <?php
              }?>
              </p>
              </div>
              </div>

              <br>
                <button type="submit"  class=" buttonsub color-brown">EDIT</button>
              <button type="button" onclick="document.getElementById('edit').style.display='none'" class="buttonsub color-red">CANCEL</button>

              </div>     

          </form>
        </div>

        <div class="chat-popup" id="Formchat">
        <iframe class="framebot"
                src="https://chatbkk-262512.appspot.com/">
         </iframe>
        </div>

        <div id="myModal" class="modal">

          <!-- Modal content -->
          <div class="modal-content">
            <span class="close">&times;</span>
            <p>Some text in the Modal..</p>
          </div>

        </div>

        <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("tutorial");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>




    

          <!-- Bootstrap's JavaScript Files -->
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </body>

</html>







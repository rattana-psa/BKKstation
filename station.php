<html>

  <title>BKK STATION</title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Athiti">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit:200">
  <link rel="stylesheet" href="stylestation.css">
  <link rel="icon" type="image/png" href="image/rff.png" />
  <style>
    .downfixed{
      position:fixed;
      width: 100%;
      height: 25%;
      bottom: 0px;
      padding : 10px 25px 10px 25px;
      font-family: 'Josefin Sans','Athiti', sans-serif;
      background-color:#ffffff;  
      overflow: scroll;
      z-index:0.5;
      box-shadow: 0px -4px 5px whitesmoke;
    }

    .downn{
      position:fixed;
      width: 25%;
      bottom: 0px;
      font-family: 'Josefin Sans','Athiti', sans-serif;
      background-color:#ffffff;  
      overflow: scroll;
      z-index:0.5;
    }

    .main {
      background-color: whitesmoke;
      font-family: 'Kanit', sans-serif;
      color: black;
      width:70%;
      margin-top:5%;
      margin-left:15%;
      

    }

    .mainn {
      background-color:whitesmoke;
      font-family: 'Kanit', sans-serif;
      color: black;
      margin-top:0;
      padding-bottom: 0;
      width:100%;
      text-align:left;
      border-top-style: none;
    }

    .inmainn {
      background-color:white;
      font-family: 'Kanit', sans-serif;
      color: black;
      float:left;
      width:100%;
      padding: 20px 10% 20px 10%;
      text-align:left;
      overflow: scroll;

    }
    
    .mainleft {
      background-color:white;
      font-family: 'Kanit', sans-serif;
      color: black;
      float:left;
      width:50%;
      padding: 0 10px 20px 8%;
      border: 10px solid white;
      text-align:left;
    }

    .mainright {
      background-color:white;
      font-family: 'Kanit', sans-serif;
      color: black;
      float:left;
      width:50%;
      padding: 0 20px 20px 10%;
      border: 10px solid white;
      text-align:left;

    }

    .maintable {
      background-color:white;
      font-family: 'Kanit', sans-serif;
      color: black;
      float:left;
      width:100%;
      margin-top:0;
      border: 10px solid whitesmoke;
      border-top-style: none;
      text-align:left;

    }


      .footerr {
      background-color: #ffffff;
      float:left;
      width:100%;
      color: black;
      padding: 15px;
    }

    .color-smoke,.color-hover-smoke:hover{color:#000!important;background-color:whitesmoke!important}
    .color-white,.color-hover-white:hover{color:#000!important;background-color:#ffffff!important}

    .conbts {
      font-family: 'Kanit', sans-serif;
      background-color: #ffffff;
      float:left;
      width:23%;
      height:200px;
      padding: 1%;
      margin:1%;
    }
    .conmrt {
      font-family: 'Kanit', sans-serif;
      background-color: #ffffff;
      float:left;
      width:23%;
      height:200px;
      padding: 1%;
      margin:1%;
    }
    .conarl {
      font-family: 'Kanit', sans-serif;
      background-color: #ffffff;
      float:left;
      width:23%;
      height:200px;
      padding: 1%;
      margin:1%;
    }
    .conus {
      font-family: 'Kanit', sans-serif;
      background-color: #ffffff;
      float:left;
      width:23%;
      height:200px;
      padding: 1%;
      margin:1%;
    }

    @media only screen and (max-width: 1200px) {
      
      .conbts , .conmrt , .conarl , .conus {
        height:250px;}
        
    }

    @media only screen and (max-width: 850px) {
      
      .conbts , .conmrt , .conarl , .conus {
        height:300px;}
    }

    @media only screen and (max-width:820px) {
      .main , .right , .footer , .conbts , .conmrt , .conarl , .conus {
        width:100%;}
        
    .conbts , .conmrt , .conarl , .conus {height:auto;}
    }

    hr { 
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 1px;
    } 
    .clear {
      clear: both;
    }

    .buttoncase{
        background-color: whitesmoke;
        height: 45px;
        width: 120px;
        border: none;
        color: black;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 15px;
        cursor: pointer;
        border-radius: 10px;
    }

    .buttonselect{
      background-color: #ffffff;
        height: 45px;
        width: 120px;
        border: none;
        color: black;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 15px;
        cursor: pointer;
        border-radius: 10px;
    }

    .buttonback{
      background-color: whitesmoke;
        height: 45px;
        width: 100px;
        float:right;
        margin-right:2%;
        margin-bottom:3%;
        border: none;
        color: black;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 15px;
        cursor: pointer;
        border-radius: 10px;
    }

    .setleft{
      font-family: 'Kanit', sans-serif;
      float:left;
      padding-left:12%;
      font-size:20px;

    }

    .setright{
      font-family: 'Kanit', sans-serif;
      float:right;
      padding-right:12%;
      font-size:20px;
    }

    .setleft2{
      font-family: 'Kanit', sans-serif;
      float:center;
      padding-left:2%;
      font-size:16px;

    }

    .buttonchat {
        position:fixed;
        display:block;
        background-image: url(image/chat.png);
        background-size: 50px 50px;
        width:50;
        height:50;
        bottom:10px;
        right:10px;
        border: none;
        display: inline;
        cursor: pointer;
        border-radius: 50%;
        z-index:1;
    }

    .framebot {
      max-width: 100%;
      height: 400px;
      border-style: none;

      }

      .chat-popup {
        position: fixed;
        right: 15px;
        bottom: 57px;
        display: none;
        z-index: 9;
      }

      img[ src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]{
        display:none!important;
      }

  </style>
  
  <?php
    include("config.php");
    include("showstation.php");
    include("showprice.php");
    include("bts.php");
    include("mrt.php");
    include("arl.php");
    include("loop.php");
    
    date_default_timezone_set("Asia/Bangkok");
    $d  = date("d-m-Y h:i:sa");
    $ip = $_SERVER['REMOTE_ADDR'];
    $sql="INSERT INTO counter(ID,date_visit,IP) 
    VALUES ('0','$d', '$ip')";
    $upcounter= mysqli_query($conn,$sql); 
    

        $idstart=$_POST['start'];
        $idstop=$_POST['stop'];
        $membts=$_POST['membts'];
        $memmrt=$_POST['memmrt'];
        $memarl=$_POST['memarl'];
        $btnselect=$_POST['btnselect'];

        $starta = $idstart[0];
        $startb = $idstart[1];
        $startc = ($idstart[2])*10 + $idstart[3];
        $stopa = $idstop[0];
        $stopb = $idstop[1];
        $stopc = ($idstop[2])*10 + $idstop[3];

        $price1 = 0;
        $price2 = 0;
        $price3 = 0;

        $num1 = 0;
        $num2 = 0;
        $num3 = 0;

        if ($membts == 'btsnon'){$membtss = "ไม่มีบัตรสมาชิก";}
          else if ($membts == 'btstrip'){$membtss = "บัตรเติมเที่ยวเดินทาง";}
          else if ($membts == 'btsstudent'){$membtss = "บัตรนักเรียน/นักศึกษา";}
          else if ($membts == 'btsgeneral'){$membtss = "บัตรบุคคลทั่วไป";}
          else if ($membts == 'btsold'){$membtss = "บัตรผู้สูงอายุ/เด็ก";}

        if ($memmrt == 'mrtnon'){$memmrtt = "ไม่มีบัตรสมาชิก/บุคคลทั่วไป";}
          else if ($memmrt == 'mrtold'){$memmrtt = "บัตรผู้สูงอายุ/เด็ก";}
          else if ($memmrt == 'mrtstudent'){$memmrtt = "บัตรนักเรียน/นักศึกษา";}

        if ($memarl == 'arlnon'){$memarll = "ไม่มีบัตรสมาชิก/บุคคลทั่วไป";}
          else if ($memarl == 'arlold'){$memarll = "บัตรผู้สูงอายุ/เด็ก";}
          else if ($memarl == 'arlstudent'){$memarll = "บัตรนักเรียน/นักศึกษา";}


        if($idstart == 4100 || $idstart == 4201 || $idstart == 4601 || $idstart == 4701 || $idstart == 4801 || $idstart == 4501 || $idstart == 4901){
          $colstart="select NAME from MRT where station=$idstart"; $start = mysqli_query($conn, $colstart); $row = mysqli_fetch_assoc($start); $startname=$row["NAME"];        
        }
          else if($idstart == 4202 || $idstart == 4301 || $idstart == 4400 || $idstart == 4502 || $idstart == 4702 || $idstart == 4802 || $idstart == 4902){
          $colstart="select NAME from BTS where station=$idstart"; $start = mysqli_query($conn, $colstart); $row = mysqli_fetch_assoc($start); $startname=$row["NAME"];        
          }
          else if($idstart == 4302 || $idstart == 4602){
          $colstart="select NAME from ARL where station=$idstart"; $start = mysqli_query($conn, $colstart); $row = mysqli_fetch_assoc($start); $startname=$row["NAME"];        
          }
          else if("4000" > $idstart & $idstart > "3000"){
            $colstart="select NAME from ARL where station=$idstart"; $start = mysqli_query($conn, $colstart); $row = mysqli_fetch_assoc($start); $startname=$row["NAME"];        
          }
          else if("3000" > $idstart & $idstart > "2000"){
            $colstart="select NAME from MRT where station=$idstart"; $start = mysqli_query($conn, $colstart); $row = mysqli_fetch_assoc($start); $startname=$row["NAME"];
          }

          else if("2000" >  $idstart & $idstart > "1000"){
            $colstart="select NAME from BTS where station=$idstart"; $start = mysqli_query($conn, $colstart); $row = mysqli_fetch_assoc($start); $startname=$row["NAME"];
          }

        if($idstop == 4100 || $idstop == 4201  || $idstop == 4601 || $idstop == 4701 || $idstop == 4801  || $idstop == 4501  || $idstop == 4901){
            $colstop="select NAME from MRT where station=$idstop"; $stop = mysqli_query($conn, $colstop); $row = mysqli_fetch_assoc($stop); $stopname=$row["NAME"];
        }
        else if($idstop == 4202 || $idstop == 4301 || $idstop == 4400 || $idstop == 4502 || $idstop == 4702  || $idstop == 4802  || $idstop == 4902){
            $colstop="select NAME from BTS where station=$idstop"; $stop = mysqli_query($conn, $colstop); $row = mysqli_fetch_assoc($stop); $stopname=$row["NAME"];
        }
        else if($idstop == 4302 || $idstop == 4602){
            $colstop="select NAME from ARL where station=$idstop"; $stop = mysqli_query($conn, $colstop);  $row = mysqli_fetch_assoc($stop); $stopname=$row["NAME"];
        }
        else if("4000" >$idstop & $idstop > "3000"){
            $colstop="select NAME from ARL where station=$idstop"; $stop = mysqli_query($conn, $colstop); $row = mysqli_fetch_assoc($stop); $stopname=$row["NAME"];
        }
        else if("3000" > $idstop & $idstop > "2000"){
            $colstop="select NAME from MRT where station=$idstop"; $stop = mysqli_query($conn, $colstop); $row = mysqli_fetch_assoc($stop); $stopname=$row["NAME"];
        }

        else if("2000" > $idstop & $idstop > "1000"){
            $colstop="select NAME from BTS where station=$idstop"; $stop = mysqli_query($conn, $colstop);  $row = mysqli_fetch_assoc($stop); $stopname=$row["NAME"];
        }
        
  ?>

  
<body style="font-family:Verdana;color:black; background-color: white;">

    <!-- menu web -->
    <div class="w3-top">
        <div class="w3-bar color-white w3-card">
            <a style="width:80%; text-align:center; font-weight: 600;" class="w3-bar-item w3-padding-large w3-hide-large w3-hide-medium">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BKK station</a>
            <a href="index.php" style="width:10%; font-size:20px;" class="w3-bar-item w3-button w3-padding-large w3-left w3-hide-small w3-hide-medium" ><u>Map</u></a>
            <a style="width:80%; text-align:center; font-weight: 600; font-size:20px;" class="w3-bar-item w3-padding-large w3-hide-small">BKK station</a>
            <a href="#contact" style="width:10%; font-size:20px;" class="w3-bar-item w3-button w3-padding-large w3-right w3-hide-small w3-hide-medium"><u>Contact</u></a>
            <a class="w3-bar-item w3-button w3-padding-large w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
        </div>
    </div>

    <!-- menu phone -->
    <div id="navDemo" class="w3-bar-block color-white w3-hide w3-hide-large w3-top" style="margin-top:46px">
        <a href="index.php" class="w3-bar-item w3-button w3-padding-large">Map</a>
        <a href="https://chatbkk-262512.appspot.com" class="w3-bar-item w3-button w3-padding-large">Chatbot</a>
        <a href="contact.php" class="w3-bar-item w3-button w3-padding-large">Contact</a>
    </div>


  <div class="main w3-hide-small">
      <h3 align="center" ><br>Information<br><br></h3>
      <div class="setleft">สถานีต้นทาง : <?php echo $startname; ?></div>
      <div class="setright">สถานีปลายทาง : <?php echo $stopname; ?> </div>
      <br><br>
          <form name="a" method="post" action="station.php">

              <input type="hidden" name="membts" value="<?php echo htmlspecialchars($membts); ?>" />
              <input type="hidden" name="memmrt" value="<?php echo htmlspecialchars($memmrt); ?>" />
              <input type="hidden" name="memarl" value="<?php echo htmlspecialchars($memarl); ?>" />
              <input type="hidden" name="start" value="<?php echo htmlspecialchars($idstart); ?>" />
              <input type="hidden" name="stop" value="<?php echo htmlspecialchars($idstop); ?>" />
          
          <?php
          if($btnselect == 1){ ?>
          <button type="submit" class="buttonselect" name="btnselect" value="1">เร็วที่สุด</button>
          <button type="submit" class="buttoncase" name="btnselect" value="2">ราคาถูก</button>
          
          <?php
          }
          else{ ?>
          <button type="submit" class="buttoncase" name="btnselect" value="1" >เร็วที่สุด</button>
          <button type="submit" class="buttonselect" name="btnselect" value="2" >ราคาถูก</button>
          <?php }
          ?>
          </form>
          <div class="maintable">
          <table cellpadding="35px" width="100%">
          <tr>
          <td width="60%">
          <?php
          if($btnselect == 1){ showstation(); }
          else{ showstationver2(); }
          ?>
          </td>
          <td width="40%">
        <?php
        showprice();
        echo '<br /> <br />';
        ?>

        <form name="a" method="post" action="index.php">
        <input type="hidden" name="membts" value="<?php echo htmlspecialchars($membts); ?>" />
        <input type="hidden" name="memmrt" value="<?php echo htmlspecialchars($memmrt); ?>" />
        <input type="hidden" name="memarl" value="<?php echo htmlspecialchars($memarl); ?>" />
        <input name="submit" type="submit" value="BACK" class="buttonback"> 
        </form>
        </td>
        </tr>
        </table>
    </div>
  </div>
	
  <div class="mainn w3-hide-large w3-hide-medium">
    <br>
    <h3 align="center" ><br>Information<br></h3>
          <form name="a" method="post" action="station.php">

              <input type="hidden" name="membts" value="<?php echo htmlspecialchars($membts); ?>" />
              <input type="hidden" name="memmrt" value="<?php echo htmlspecialchars($memmrt); ?>" />
              <input type="hidden" name="memarl" value="<?php echo htmlspecialchars($memarl); ?>" />
              <input type="hidden" name="start" value="<?php echo htmlspecialchars($idstart); ?>" />
              <input type="hidden" name="stop" value="<?php echo htmlspecialchars($idstop); ?>" />
          
          <?php
          if($btnselect == 1){ ?>
          <button type="submit" class="buttonselect" name="btnselect" value="1">เร็วที่สุด</button>
          <button type="submit" class="buttoncase" name="btnselect" value="2">ราคาถูก</button>
          
          <?php
          }
          else{ ?>
          <button type="submit" class="buttoncase" name="btnselect" value="1" >เร็วที่สุด</button>
          <button type="submit" class="buttonselect" name="btnselect" value="2" >ราคาถูก</button>
          <?php }
          ?>
          </form>
          </div>
    
          <div class="inmainn w3-hide-large w3-hide-medium">
          <?php
          if($btnselect == 1){ showstation(); }
          else{ showstationver2(); }
          ?>
          <br><br><br>
          <br><br><br>
          <br><br><br>

          </div>


          
  

  <div class="downfixed w3-hide-large w3-hide-medium">
            
          <div class="setleft2">สถานีต้นทาง : <?php echo $startname; ?></div>
          <br>
          <div class="setleft2">สถานีปลายทาง : <?php echo $stopname; ?> </div>
        <?php
        showprice2();
        ?>
        <br>
        <form name="a" method="post" action="index.php">
        <input type="hidden" name="membts" value="<?php echo htmlspecialchars($membts); ?>" />
        <input type="hidden" name="memmrt" value="<?php echo htmlspecialchars($memmrt); ?>" />
        <input type="hidden" name="memarl" value="<?php echo htmlspecialchars($memarl); ?>" />
        <input name="submit" type="submit" value="BACK" class="buttonback"> 
        </form>
  </div>
    
          

<div class="clear">

<div style=" background-size: 100%; height:5%;" class="w3-hide-small w3-hide-medium"></div>

  <div class="footer  w3-hide-small ">
  <?php 
      $countid = "select ID from counter group by ID desc";
      $count = mysqli_query($conn, $countid);
      $row = mysqli_fetch_assoc($count); 
      $countt=$row["ID"];
      echo ' <img src = "image/eye.png" align="left" width="22px">'.' : ' . $countt ;

    ?>
    
    <img src ="image/chat.png" class="buttonchat w3-hide-small" onclick='checkchat()'>

    <br>

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

</div>

<script>
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

<div class="chat-popup" id="Formchat">
        <iframe class="framebot"
                src="https://chatbkk-262512.appspot.com/">
         </iframe>
        </div>

</body>

</html>







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

    <div style=" background-size: 100%; height:50px;"></div>
  
    <div class="footer">

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
                <?php 
                    $countid = "select ID from counter group by ID desc";
                    $count = mysqli_query($conn, $countid);
                    $row = mysqli_fetch_assoc($count); 
                    $countt=$row["ID"];
                    ?>
                    <div align="right">
                    <?php
                    echo ' <img src = "image/eye.png" width="20px">'.' : ' . $countt ;
                    ?>
                    </div>
          </td>
        </tr>
      </table>
    </div>

  </div>

</div>

</body>

</html>
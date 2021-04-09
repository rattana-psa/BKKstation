<html>

  <title>BKK STATION</title>

  <?php

  function showprice(){
    global $memarll,$membtss,$memmrtt, $startname , $starta , $startb , $startc , $stopname , $stopa , $stopb , $stopc ,$idstart , $idstop , $price1 , $price2, $price3 , $num1 , $num2 , $num3 , $time , $time1 , $time2 , $time3 , $timex;
    $startt = 0; $stopp = 0;
    if($idstart == 4302 || $idstart == 4602){$startt = 3;}
    if($idstop == 4302 || $idstop == 4602){$stopp = 3;}
    if($idstart == 4802 || $idstart == 4202 || $idstart == 4301 || $idstart == 4400 || $idstart == 4502 || $idstart == 4702 || $idstart == 4902){$startt = 1;}
    if($idstop == 4802 || $idstop == 4202 || $idstop == 4301 || $idstop == 4400 || $idstop == 4502 || $idstop == 4702 || $idstop == 4902){$stopp = 1;}
    if($idstart == 4100 || $idstart == 4201 || $idstart == 4801 || $idstart == 4601 || $idstart == 4701 || $idstart == 4501 || $idstart == 4901){$startt = 2;}
    if($idstop == 4100 || $idstop == 4201 ||$idstop == 4801 ||  $idstop == 4601 || $idstop == 4701 || $idstop == 4501 || $idstop == 4901){$stopp = 2;}


        $price1 = btsprice($price1); 
        $price2 = mrtprice($price2); 
        $price3 = arlprice($price3); 

        $num = $num1+$num2+$num3;
        $price = $price1+$price2+$price3;
        $time = $time1+$time2+$time3+$timex;

    echo '<br /> '.'<br /> '. "<img src='image/train.png' width='40px;'/>" . "<font size='5pt'>&emsp;$num STATION</font>";
    echo '<br /> '.'<br /> '."<img src='image/cash.png' width='40px;'/>" . "<font size='5pt'>&emsp;$price BAHT</font>";
    echo '<br /> '.'<br /> '."<img src='image/clock.png' width='40px;'/>" . "<font size='5pt'>&emsp;$time MINUTES</font>";
    echo '<hr class="new">';
    echo "<font size='2pt'>ค่าโดยสาร BTS แบบ$membtss : $price1 BAHT</font>";
    echo "<font size='2pt'><br /> เวลา BTS : $time1 minutes</font>";
    echo "<font size='2pt'><br /> ค่าโดยสาร MRT แบบ$memmrtt : $price2 BAHT</font>";
    echo "<font size='2pt'><br /> เวลา MRT : $time2 minutes</font>";
    echo "<font size='2pt'><br /> ค่าโดยสาร ARL แบบ$memarll : $price3 BAHT</font>";
    echo "<font size='2pt'><br /> เวลา ARL : $time3 minutes</font>";

    
    
}

function showprice2(){
  global $memarll,$membtss,$memmrtt, $startname , $starta , $startb , $startc , $stopname , $stopa , $stopb , $stopc ,$idstart , $idstop , $price1 , $price2, $price3 , $num1 , $num2 , $num3 , $time , $time1 , $time2 , $time3 , $timex;
  $startt = 0; $stopp = 0;
  if($idstart == 4302 || $idstart == 4602){$startt = 3;}
  if($idstop == 4302 || $idstop == 4602){$stopp = 3;}
  if($idstart == 4802 || $idstart == 4202 || $idstart == 4301 || $idstart == 4400 || $idstart == 4502 || $idstart == 4702 || $idstart == 4902){$startt = 1;}
  if($idstop == 4802 || $idstop == 4202 || $idstop == 4301 || $idstop == 4400 || $idstop == 4502 || $idstop == 4702 || $idstop == 4902){$stopp = 1;}
  if($idstart == 4100 || $idstart == 4201 || $idstart == 4801 || $idstart == 4601 || $idstart == 4701 || $idstart == 4501 || $idstart == 4901){$startt = 2;}
  if($idstop == 4100 || $idstop == 4201 ||$idstop == 4801 ||  $idstop == 4601 || $idstop == 4701 || $idstop == 4501 || $idstop == 4901){$stopp = 2;}


      $price1 = btsprice($price1); 
      $price2 = mrtprice($price2); 
      $price3 = arlprice($price3); 

      $num = $num1+$num2+$num3;
      $price = $price1+$price2+$price3;
      $time = $time1+$time2+$time3+$timex;

  echo '<br /> '.'<br /> '. "<img src='image/train.png' width='25px;'/>" . "<font size='3pt'>&emsp;$num STATION</font>";
  echo '<br /> '.'<br /> '."<img src='image/cash.png' width='25px;'/>" . "<font size='3pt'>&emsp;$price BAHT</font>";
  echo '<br /> '.'<br /> '."<img src='image/clock.png' width='25px;'/>" . "<font size='3pt'>&emsp;$time MINUTES</font>";
  echo '<hr class="new">';
  echo "<font size='2pt'>ค่าโดยสาร BTS แบบ$membtss : $price1 BAHT</font>";
  echo "<font size='2pt'><br /> เวลา BTS : $time1 minutes</font>";
  echo "<font size='2pt'><br /> ค่าโดยสาร MRT แบบ$memmrtt : $price2 BAHT</font>";
  echo "<font size='2pt'><br /> เวลา MRT : $time2 minutes</font>";
  echo "<font size='2pt'><br /> ค่าโดยสาร ARL แบบ$memarll : $price3 BAHT</font>";
  echo "<font size='2pt'><br /> เวลา ARL : $time3 minutes</font>";

  
  
}

  ?>

</html>
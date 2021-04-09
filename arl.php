<html>

  <title>BKK STATION</title>

  <?php

  function arl($idstart , $idstop , $n){
    global $conn , $how;
        global $num3 ;
        $starta = $idstart[0];
        $startb = $idstart[1];
        $startc = ($idstart[2])*10 + $idstart[3];
        $stopa = $idstop[0];
        $stopb = $idstop[1];
        $stopc = ($idstop[2])*10 + $idstop[3];
        $numstart="select stationid from ARL where station=$idstart"; $start = mysqli_query($conn, $numstart); $row = mysqli_fetch_assoc($start); $startnum=$row["stationid"];        
        $numstop="select stationid from ARL where station=$idstop"; $stop = mysqli_query($conn, $numstop); $row = mysqli_fetch_assoc($stop); $stopnum=$row["stationid"];        

        $num3 = abs($startnum - $stopnum); //อันนี้เอาเลขสถานีต้น-ปลายแล้วหา absolute จะได้จน.สถานี
        loopst($startnum,$stopnum,$num3,$how,3); 
        global $time3;
        $time3 = 0;
        global $price3 ;
              $price3 = 15;
        if($num3 == 0){$price3=0;}
        for($i=1 ; $i<=$num3 ; $i++ ){
            if($i>=2){$price3 += 5;}
        }

        for ($j = $startnum; $j < $stopnum ; $j++) { //สุวรรณไปพญาไท
            if ($j == 1 | $j == 2) {
                $time3 += 5;
            } else if ($j == 6) {
                $time3 += 3;
            } else if ($j == 7) {
                $time3 += 1;
            } else {
                $time3 += 4;
            }
        }
        for ($j = $startnum; $j > $stopnum ; $j--) { //พญาไทไปสุวรรณ
            if ($j == 3 | $j == 2) {
                $time3 += 5;
            } else if ($j == 7) {
                $time3 += 3;
            } else if ($j == 8) {
                $time3 += 1;
            } else {
                $time3 += 4;
            }
        }

        if($n == 1){
            return $price3;
        }
        
        else if($n == 2){
            return $time3;
        }


  }

  function arlprice($price3){
    global $memarl ;
    if($memarl == 'arlnon'){
       $price3 = $price3; } // ไม่มีบัตร
    else if($memarl == 'arlstudent'){
      $price3 =  ($price3*80)/100 ;} //ราคา80%
    else if($memarl == 'arlold'){
      $price3 =  round(($price3*50)/100) ;}
      return $price3;

  }

  ?>
</html>
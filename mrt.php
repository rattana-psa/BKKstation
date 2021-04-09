<html>

  <title>BKK STATION</title>

  <?php

  function mrt($idstart,$idstop , $n){
    global $conn ,$how;
        global $num2 , $num2_2 ;
        global $price2 , $time2 , $startnum , $stopnum;
   
        $price2 = 0;
        $num2 = 0;
        $time2 = 0;
        $starta = $idstart[0];
        $startb = $idstart[1];
        $startc = $idstart[3];
        $stopa = $idstop[0];
        $stopb = $idstop[1];
        $stopc = $idstop[3];
        $numstart="select stationid from MRT where station=$idstart"; $start = mysqli_query($conn, $numstart); $row = mysqli_fetch_assoc($start); $startnum=$row["stationid"];        
        $numstop="select stationid from MRT  where station=$idstop"; $stop = mysqli_query($conn, $numstop); $row = mysqli_fetch_assoc($stop); $stopnum=$row["stationid"];        
         
        if(($startnum == 16 & $stopnum == 16) | ($startnum == 16 & $stopnum == 17) | ($startnum == 17 & $stopnum == 16)){
          //เตาปูน-เตาปูน45นาที//เตาปูนบางซื่อ
          $num2 = abs($startnum - $stopnum);
          loopst($startnum,$stopnum,0,$how,2);
          $price2 = 16;
          
              if (($startnum == 16 & $stopnum == 17) | ($startnum == 17 & $stopnum == 16)) {
                $time2 = 2;
            } else {
                $time2 = 45;
            }
        }
        else if($startnum >= 17 && $stopnum <= 45 && $stopnum >= 17){ //mrt สายสีน้ำเงินอย่างเดียว
          $num2 = abs($startnum - $stopnum);
          loopst($startnum,$stopnum,$num2,$how,2);
          $price2 = 16;
          $time2 = 0;
                  //เวลาไป-กลับ
          for ($j = $startnum; $j < $stopnum; $j++) {
              if ($j == 17 | $j == 19 | $j == 20 | $j == 24 | $j == 28 | $j == 33 | $j == 34 | $j == 35 | $j == 36 | $j == 37 | $j == 39 | $j == 40 | $j == 41 | $j == 42 | $j == 43) {
                  $time2 += 2;
              } else if ($j == 38) {
                  $time2 += 4;
              } else {
                  $time2 += 1;
              }
          }
          for ($j = $startnum; $j > $stopnum; $j--) { ///ย้อนน
              if ($j == 17 | $j == 19 | $j == 20 | $j == 24 | $j == 28 | $j == 33 | $j == 34 | $j == 35 | $j == 36 | $j == 37 | $j == 39 | $j == 40 | $j == 41 | $j == 42 | $j == 43) {
                  $time2 += 2;
              } else if ($j == 38) {
                  $time2 += 4;
              } else {
                  $time2 += 1;
              }
          }
          switch ($num2) {
            case '0':
                $price2 += 0;
                break;
            case '1':
                $price2 += 0;
                break;
            case '2':
                $price2 += 3;
                break;
            case '3':
                $price2 += 5;
                break;
            case '4':
                $price2 += 7;
                break;
            case '5':
                $price2 += 10;
                break;
            case '6':
                $price2 += 12;
                break;
            case '7':
                $price2 += 14;
                break;
            case '8':
                $price2 += 17;
                break;
            case '9':
                $price2 += 19;
                break;
            case '10':
                $price2 += 21;
                break;
            case '11':
                $price2 += 24;
                break;
            case '12':
                $price2 += 26;
                break;
            case '13':
                $price2 += 26;
                break;
            default:
                $price2 += 26;
                break;
                return $price2;
        }
    } 
        else if($startnum >= 1 & $stopnum <= 16 && $startnum <= 16 & $stopnum >= 1){ //mrt สายสีม่วงอย่างเดียว
          $num2 = ABS($startnum - $stopnum);
          loopst($startnum,$stopnum,$num2,$how,2);
          $price2 = 14;
          $time2 = 0;

          if($startnum < $stopnum){ //แบบไปข้างหน้า
              for($i = $startnum ;$i < $stopnum ; $i++){
                  if ($i == 4 | $i == 5 | $i == 9 | $i == 10 | $i == 12) {
                    $price2 += 2;
                } else {
                    $price2 += 3;
                }
            }
            if ($price2 >= 42) {
                $price2 = 42;
            }
            //เวลา
              for ($j = $startnum; $j < $stopnum; $j++) {
                if ($j == 4 | $j == 7 | $j == 8 | $j == 12 | $j == 15) {
                    $time2 += 1;
                } else {
                    $time2 += 2;
                }
            }
          }

          if($startnum > $stopnum){ //แบบถอยหลัง
              if($startnum == 16){$price2 = 16;}
                for ($i = $startnum; $i > $stopnum; $i--) {
                  if ($i == 14 | $i == 6 | $i == 7 | $i == 11 | $i == 12) {
                      $price2 += 2;
                  } else {
                      $price2 += 3;
                  }
              }
              if ($price2 >= 42) {
                  $price2 = 42;
              }
              //เวลา
              for ($j = $startnum; $j > $stopnum; $j--) { ///ย้อนน
                  if ($j == 5 | $j == 9 | $j == 8 | $j == 13 | $j == 16) {
                      $time2 += 1;
                  } else {
                      $time2 += 2;
                  }
              }
          }
        }
        //หมดเลย
        else if($startnum >= 1 && $stopnum <= 45 /*ม่วง(คลองบางไผ่)ไปนง*/ && $startnum <= 45 && $stopnum >= 1 /*หัวลำโพงไปม่วง*/){
                    
          if($startnum < $stopnum ){ //ม่วงไปนง.
              $purple = ABS(16 - $startnum); //16idอันสุดท้ายของสายม่วง
              $blue = ABS(17 - $stopnum );  //idแรกของสายนง
              $num2 = ABS($startnum-$stopnum);
              loopst($startnum,$stopnum,$num2,$how,2);
              $pricep = 14; $priceb = 2;
              $timea = 0; $timeb = 0;

              for($i = $startnum ;$i < 16 ; $i++){
                      if ($i == 4 | $i == 5 | $i == 9 | $i == 10 | $i == 12) {
                        $pricep += 2;
                    } else {
                        $pricep += 3;
                    }
                }
                  if($pricep >= 42){
                      $pricep = 42;
                  }
                        //เวลาม่วง
              for ($j = $startnum; $j < 16 ; $j++) {
                if ($j == 4 | $j == 7 | $j == 8 | $j == 12 | $j == 15) {
                    $timea += 1;
                } else {
                    $timea += 2;
                }
            }

            switch ($blue) {
              case '0':
                  $priceb += 0;
                  break;
              case '1':
                  $priceb += 3;
                  break;
              case '2':
                  $priceb += 5;
                  break;
              case '3':
                  $priceb += 7;
                  break;
              case '4':
                  $priceb += 10;
                  break;
              case '5':
                  $priceb += 12;
                  break;
              case '6':
                  $priceb += 14;
                  break;
              case '7':
                  $priceb += 17;
                  break;
              case '8':
                  $priceb += 19;
                  break;
              case '9':
                  $priceb += 21;
                  break;
              case '10':
                  $priceb += 24;
                  break;
              case '11':
                  $priceb += 26;
                  break;
              case '12':
                  $priceb += 26;
                  break;
              case '13':
                  $priceb += 26;
                  break;
              default:
                  $priceb += 26;
                  break;
                  return $priceb;
          }
          //เวลานง
          for ($j = 17; $j < $stopnum ; $j++) {
              if ($j == 17 | $j == 19 | $j == 20 | $j == 24 | $j == 28 | $j == 33 | $j == 34 | $j == 35 | $j == 36 | $j == 37 | $j == 39 | $j == 40 | $j == 41 | $j == 42 | $j == 43) {
                  $timeb += 2;
              } else if ($j == 38) {
                  $timeb += 4;
              } else {
                  $timeb += 1;
              }
          }
                  
                      $price2 = $pricep + $priceb;
                      $time2 = $timea + $timeb;
                      if($price2 >= 70){
                          $price2 = 70;
                      }
                      
          }

          if($startnum > $stopnum ){ //นง.ไปม่วง
              $purple = ABS(16 - $stopnum); //16idอันสุดท้ายของสายม่วง
              $blue = ABS(17 - $startnum );  //idแรกของสายนง
              $num2 = ABS($startnum-$stopnum);
              loopst($startnum,$stopnum,$num2,$how,2);
              $pricep = 14; $priceb = 2;
              $timea =0;  $timeb =0;
                  for ($i = 16; $i > $stopnum; $i--) {
                    if ($i == 6 | $i == 7 | $i == 11 | $i == 14 | $i == 12) {
                        $pricep += 2;
                    } else {
                        $pricep += 3;
                    }
                }
                if ($pricep >= 42) {
                    $pricep = 42;
                }
                //เวลาม่วง
                for ($j = 16; $j > $stopnum; $j--) { ///ย้อนน
                    if ($j == 5 | $j == 9 | $j == 8 | $j == 13 | $j == 16) {
                        $timea += 1;
                    } else {
                        $timea += 2;
                    }
                }
                switch ($blue) {
                    case '0':
                        $priceb += 0;
                        break;
                    case '1':
                        $priceb += 3;
                        break;
                    case '2':
                        $priceb += 5;
                        break;
                    case '3':
                        $priceb += 7;
                        break;
                    case '4':
                        $priceb += 10;
                        break;
                    case '5':
                        $priceb += 12;
                        break;
                    case '6':
                        $priceb += 14;
                        break;
                    case '7':
                        $priceb += 17;
                        break;
                    case '8':
                        $priceb += 19;
                        break;
                    case '9':
                        $priceb += 21;
                        break;
                    case '10':
                        $priceb += 24;
                        break;
                    case '11':
                        $priceb += 26;
                        break;
                    case '12':
                        $priceb += 26;
                        break;
                    default:
                        $priceb += 26;
                        break;
                        return $priceb;
                }
                //เวลานง
                for ($j = $startnum ; $j > 16; $j--) { ///ย้อนน
                    if ($j == 17 | $j == 19 | $j == 20 | $j == 24 | $j == 28 | $j == 33 | $j == 34 | $j == 35 | $j == 36 | $j == 37 | $j == 39 | $j == 40 | $j == 41 | $j == 42 | $j == 43) {
                        $timeb += 2;
                    } else if ($j == 38) {
                        $timeb += 4;
                    } else {
                        $timeb += 1;
                    }
                }
                      $time2 = $timea + $timeb;
                      $price2 = $pricep + $priceb;
                      if($price2 >= 70){
                          $price2 = 70;
                      }
                      
          }
      }

      if($n == 1){
        return $price2;
    }
    
    else if($n == 2){
        return $time2;
    }

  }

  function mrtprice($price2){
    global $memmrt ;
    if($memmrt == 'mrtnon'){
        $price2 = $price2;
      }
      else if($memmrt == 'mrtstudent'){
          $price2 = round($price2*90/100);
          }
      else if($memmrt == 'mrtold'){
          $price2 = round($price2/2);    
          }

          return $price2;

  }

  ?>
</html>
<html>

  <title>BKK STATION</title>

  <?php

  function bts($idstart,$idstop  , $n){
    global $conn ,$how ;
        global $num1_1 , $num1_2 , $num1 , $time1;
        global $price1 , $startnum , $stopnum;
 
        $price1 = 16;
        $starta = $idstart[0];
        $startb = $idstart[1];
        $startc = ($idstart[2])*10 + $idstart[3];
        $stopa = $idstop[0];
        $stopb = $idstop[1];
        $stopc = ($idstop[2])*10 + $idstop[3];
        $numstart="select stationid from BTS where station=$idstart"; $start = mysqli_query($conn, $numstart); $row = mysqli_fetch_assoc($start); $startnum=$row["stationid"];        
        $numstop="select stationid from BTS where station=$idstop"; $stop = mysqli_query($conn, $numstop); $row = mysqli_fetch_assoc($stop); $stopnum=$row["stationid"];        
        $num = abs($startnum - $stopnum);

        if((($startnum >=34 & $startnum <= 47) && ( $stopnum >=34 & $stopnum <= 47 )) || (($startnum >=34 & $startnum <= 47) && ( $stopnum == 10 )) || (($startnum == 10 ) && ( $stopnum >=34 & $stopnum <= 47 ))){
          //เคสเริ่มและจบที่สายสีลม
          if($startnum == 10){$startnum = 35;}
          if($stopnum == 10){$stopnum = 35;}
          $num1 = abs($startnum - $stopnum);
          $num1 = loopst($startnum,$stopnum,$num1,$how,1);
        }
          else if($startnum >= 1 & $startnum <= 33 & $stopnum >= 1 & $stopnum <= 33 ){
            //เคสเริ่มและจบที่สายสุขุมวิท
            $num1 = abs($startnum - $stopnum);
            $num1 = loopst($startnum,$stopnum,$num1,$how,1);
          }
          else if((($startnum >=34 & $startnum <= 47 ) || $startnum == 10) & $stopnum >= 1 & $stopnum <= 33){
            //เคสเริ่มสีลมจบสุขุมวิท
            if($startnum == 10){$startnum = 35;}
            $num1_1 = abs($startnum - 35); //เช่น เริ่มที่38 จะเอาไปลบ 35 เพราะเราผ่านสยามเหลือ 3สถานี
            $num1_1 = loopst($startnum,35,$num1_1,$how,1);
            $num1_2 = abs($stopnum - 10);
            if($how == 0 || $how == 1 || $how == 2 || $how == 3 ){
            echo '<br /><font color=#ff6699> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนที่สถานีสยาม -</font>';
            }
            $num1_2 = loopst(10,$stopnum,$num1_2,$how,1);
            $num1 = $num1_1 + $num1_2 ;
          }
          else if($startnum >= 1 & $startnum <= 33 & (($stopnum >=34 & $stopnum <= 47) || $stopnum == 10)){
            //เคสเริ่มสุขุมวิทจบสีลม
            $num1_1 = abs($startnum - 10);
            $num1_1 = loopst($startnum,10,$num1_1,$how,1);
            if($stopnum == 10){$stopnum = 35;}
            $num1_2 = abs($stopnum - 35);
            if($how == 0 || $how == 1 || $how == 2 || $how == 3 ){
            echo '<br /><font color=#ff6699> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนที่สถานีสยาม -</font>';
            }
            $num1_2 =loopst(35,$stopnum,$num1_2,$how,1);
            $num1 = $num1_1 + $num1_2 ;
          }

          if(($startnum >=20 && $startnum <= 33) && ($stopnum >=19 && $stopnum <= 23) ){  $price1 = 15;} // ต้นสถานีบางจาก-เคหะไป พระโขนงขึ้นไป
          else if($startnum >=20 && $startnum <=33 && $stopnum == 18){ $price1 = 31;}
          else  if($startnum >=20 && $startnum <=33 && $stopnum == 17){ $price1 = 38;}
          else  if($startnum >=20 && $startnum <=33 && $stopnum == 16){ $price1 = 41;}
          else  if($startnum >=20 && $startnum <=33 && $stopnum == 15){ $price1 = 45;}
          else  if($startnum >=20 && $startnum <=33 && $stopnum == 14){ $price1 = 48;}
          else  if($startnum >=20 && $startnum <=33 && $stopnum == 13){ $price1 = 52;}
          else  if($startnum >=20 && $startnum <=33 && $stopnum == 12){ $price1 = 55;}
          else  if($startnum >=20 && $startnum <=33 && $stopnum < 12 && $stopnum >=1){ $price1 = 59;}
          else  if(($startnum >=24 && $startnum <= 33) && ($stopnum >= 24 && $stopnum <= 33)) {$price1 =0;} // แบริ่ง-เคหะ ไป แบริ่ง-เคหะ 0 บาทตลอดสาย
          else if($startnum == 19 && $stopnum >= 20 && $stopnum <=33){$price1 = 15;} // อ่อนนุชไปทางเคหะ
          else if(($startnum >= 12 && $startnum <= 18)&& ($stopnum >=20 && $stopnum <= 33)){
              if($startnum == 12){ $price1 = 55;}
              else if($startnum == 13){$price1 = 52;}
              else if($startnum == 14){$price1 = 48;}
              else if($startnum == 15){$price1 = 41;}
              else if($startnum == 16 || $startnum == 17){$price1 = 31;}
          }
          else if(($startnum >=34 && $startnum <=42) && ($stopnum >=44 && $stopnum <=47)){ // W1-S8 ไป S9-S12
            if($startnum == 34){ $price1 = 59;}
            else if($startnum == 36){$price1 = 55;}
            else if($startnum == 37){$price1 = 52;}
            else if($startnum == 38){$price1 = 48;}
            else if($startnum == 40){$price1 = 41;}
            else if($startnum == 41){$price1 = 31;}
            else if($startnum == 42){$price1 = 31;}
          }
          else if($startnum >=20 && $startnum <= 23 && $stopnum >= 20 && $stopnum <=33 ){$price1 = 15; } // บางจาก-บางนา ถึงเคหะ 15 บาทตลอดสาย
          else if(($startnum >=20 && $stopnum <= 33) && ($stopnum >=34 && $stopnum <=47) ){ $price1 = 59;  }
          else if(($startnum >=43 && $startnum <= 47) && ($stopnum >=43 && $stopnum <=47) ) {
            if($startnum == 44 && $stopnum ==44){ $price1 = 16;}
            else { $price1 =15;}
        } // S9-12 ไป S9-S12
          else if(($startnum >=44 && $startnum <=47) && ($stopnum >=1 && $stopnum <=43) ){ // S9-S12 ขึ้นไปทางสุมุมวิท
              if($stopnum == 42 || $stopnum == 41){ $price1 = 31;}
              else if($stopnum == 40){ $price1 = 41;}
              else if($stopnum == 38){ $price1 =  48;}
              else if($stopnum == 38){ $price1 =  48;}
              else if($stopnum == 37){ $price1 =  52;}
              else if($stopnum == 36){ $price1 =  55;}
              else { $price1 =  59;}
          }
          else if( ($startnum >= 34 && $startnum <= 47 && $stopnum >= 1 && $stopnum <= 33) ) { // สีลมไป สายสุขุมวิท
               $Sisuk1 = abs($startnum - 35);   $sisuk2 = abs(10 -$stopnum);    $simix = $Sisuk1 + $sisuk2;
               if ($simix == 0) {
                $price1 += 0;
            } else if ($simix == 1 ) {
                $price1 += 0;  // ปกติ
            } else if ($simix == 2 ) {
                 $price1 += 7; // ปกติ
            } else if ($simix == 3 ) {
                 $price1 += 10;  // ปกติ
            } else if ($simix == 4 ) {
                 $price1 += 14;  // ปกติ
            } else if ($simix == 5 ) {
                 $price1 += 17;  // ปกติ
            } else if ($simix == 6 ) {
                $price1 += 21;  // ปกติ
            } else if ($simix == 7 ) {
                 $price1 += 24;  // ปกติ
            } else if ($simix == 8 ) {
                $price1+= 28;  // ปกติ
            } else if($simix >=9 && $stopnum <= 19){
                $price1 +=28;
            }
            else if(($stopnum >= 20 && $stopnum <=33) ){
                $price1 = 59;
            } 
    
          } else if ($startnum >=1 && $startnum <= 33 && $stopnum >=34 && $stopnum <=47) { // สุขมวิทไปสีลม
            $suk1 = abs($startnum -10);    $suk2 = abs($stopnum - 35);   $sukmix = $suk1 +$suk2;
            if ($sukmix == 0) {
             $price1 += 0;
         } else if ( $sukmix ==1) {
             $price1 += 0;  // ปกติ
         } else if ( $sukmix ==2) {
              $price1 += 7; // ปกติ
         } else if ( $sukmix ==3) {
              $price1 += 10;  // ปกติ
         } else if ( $sukmix ==4) {
              $price1 += 14;  // ปกติ
         } else if ( $sukmix ==5) {
              $price1 += 17;  // ปกติ
         } else if ( $sukmix ==6) {
             $price1 += 21;  // ปกติ
         } else if ( $sukmix ==7) {
              $price1 += 24;  // ปกติ
         } else if ( $sukmix ==8) {
             $price1+= 28;  // ปกติ
         } else if($startnum >=20 && $startnum <= 33){ $price1 = 59;} 
           else if($sukmix >=9 && $sukmix <= 19 && $stopnum < 44){
             $price1 +=28;
         } else if ($stopnum >=44 && $stopnum <=47 ){
             $price1 = 59;
         } 
          }
          else if($startnum >=35 && $startnum <=47 && (($stopnum >=34 && $stopnum <=41) || ($stopnum >= 20 && $stopnum <=33) )){ // S1-S12 ขากลับ ไป ทางสุขุมวิท 
            if ($num == 0) {
                $price1 += 0;
            } else if ($num == 1) {
                $price1 += 0;  // ปกติ
            } else if ($num == 2) {
                 $price1 += 7; // ปกติ
            } else if ($num == 3) {
                 $price1 += 10;  // ปกติ
            } else if ($num == 4) {
                 $price1 += 14;  // ปกติ
            } else if ($num == 5) {
                 $price1 += 17;  // ปกติ
            } else if ($num == 6) {
                $price1 += 21;  // ปกติ
            } else if ($num == 7) {
                 $price1 += 24;  // ปกติ
            } else if ($num == 8) {
                $price1+= 28;  // ปกติ
            } else if($num > 18 ){
                $price1 = 59;
            } 
        } 
          else if($startnum >=1 && $startnum <= 34 && $stopnum >=44 && $stopnum <=47) { $price1 = 59;}
          else {     
            if ($num == 0) {
                $price1 += 0;
            } else if ($num == 1) {
                $price1 += 0;  // ปกติ
            } else if ($num == 2) {
                 $price1 += 7; // ปกติ
            } else if ($num == 3) {
                 $price1 += 10;  // ปกติ
            } else if ($num == 4) {
                 $price1 += 14;  // ปกติ
            } else if ($num == 5) {
                 $price1 += 17;  // ปกติ
            } else if ($num == 6) {
                $price1 += 21;  // ปกติ
            } else if ($num == 7) {
                 $price1 += 24;  // ปกติ
            } else if ($num == 8) {
                $price1+= 28;  // ปกติ
            } else if ($num >= 9 && $num <= 18 ){ // สถานี 8 สถานีขึ้นจนถึง E9 
                if($stopnum >= 20 && $stopnum <= 33){$price1 = 59;}
                else {$price1 +=28;}
            } else if($num > 18 ){
                $price1 = 59;
            } 
            else if($stopnum >= 20) // คือตั้งแต่บางจาก E10 เป้นต้นไป
                 { $price1 += 43; } // ปกติ
            } 
    
           
            // คิดเวลา
            if(($startnum >=1 && $startnum <=33) && ($stopnum >=1 && $stopnum <=33) && $startnum < $stopnum) {
                $timesi =0;  $timesuk =0;
                for ($j = $startnum; $j < $stopnum; $j++) { // สุขุมวิทขาไป
                 if ($j == 2 | $j == 5 | $j == 8 | $j == 10 | $j == 17 | $j == 19 | $j == 28 | $j == 31 | $j == 32 ) {    $timesuk += 1;  } 
                 else if ( $j == 7 | $j ==11 | $j == 12 | $j == 13 | $j == 14 | $j == 15 | $j == 16 | $j == 20  | $j == 21 | $j == 22 | $j == 23 | $j == 24 | $j == 25 | $j == 27 | $j == 30) {  $timesuk += 2;  } 
                 else if ($j == 1 | $j == 3 | $j == 6 | $j == 18 | $j == 26 | $j == 29 ) { $timesuk += 3; } 
                 else if ($j == 4 ) {$timesuk += 0;}
                 else {  $timesuk += 4; } 
             } $time1 = $timesi + $timesuk;}
    
               else if(($startnum >=1 && $startnum <=33) && ($stopnum >=1 && $stopnum <=33) && $startnum > $stopnum ){
                $timesi =0;  $timesuk =0;
                 for ($j = $startnum; $j > $stopnum; $j--) { // สุขุมวิทขากลับ 
                   if ($j == 2 | $j == 5 | $j == 8 | $j == 10 | $j == 17 | $j == 19 | $j == 28 | $j == 31 | $j == 32 ) {  $timesuk += 1; }
                    else if ( $j == 7 | $j ==11 | $j == 12 | $j == 13 | $j == 14 | $j == 15 | $j == 16 | $j == 20  | $j == 21 | $j == 22 | $j == 23 | $j == 24 | $j == 25 | $j == 27 | $j == 30) { $timesuk += 2; } 
                    else if ($j == 1 | $j == 3 | $j == 6 | $j == 18 | $j == 26 | $j == 29 ) {   $timesuk += 3;  }
                    else if ($j == 4) {$timesuk += 0;}
                    else { $timesuk += 4; }
             }  $time1 = $timesi + $timesuk; }
    
               else if(($startnum >=34 && $startnum <=47) && ($stopnum >=34 && $stopnum <=47)  && $startnum < $stopnum) {
                $timesi =0;  $timesuk =0;
                 for ($j = $startnum; $j < $stopnum; $j++) { // สีลมขาไป 
                   if ($j == 34 ) { $timesi += 1; } 
                   else if ($j == 35 | $j == 36 | $j >=38 | ( $j > 39 && $j <= 47 ) ) {  $timesi += 2; }
                   else {  $timesi += 3; }
              }   $time1 = $timesi + $timesuk; }
    
              else if(($startnum >=34 && $startnum <=47) && ($stopnum >=34 && $stopnum <=47)  && $startnum > $stopnum) {
                $timesi =0;  $timesuk =0;
                   for ($j = $startnum; $j > $stopnum; $j--) { // สีลมขากลับ 
                     if ($j == 34 ) {  $timesi += 2; } 
                     else if ($j == 35 | $j == 36 |  $j >=38 | ( $j > 39 && $j <= 47 )) { $timesi += 2; }
                     else if ($j == 39) {$time1 += 0;}
                     else { $timesi += 3; }
               }   $time1 = $timesi + $timesuk; }
    
                else if(($startnum >=1 && $startnum <= 9) && ($stopnum >=34 && $stopnum <=47)  && $startnum < $stopnum) {
                    $timesi =0;  $timesuk =0;
                 for ($j = $startnum ; $j < 10 ; $j++) { // N ไป สีลม  j : sukhumvit  i : Silom
                   if ( $j == 2 | $j == 8) { $timesuk += 1; } 
                   else if ( $j == 1 | $j ==7) { $timesuk += 2; }
                   else if ( $j == 3 | $j ==6 | $j == 5) { $timesuk += 3;} 
                   else if ($j == 4 ) {$timesuk += 0;}
                   else { $timesuk += 4; }
             } 
                    for ( $i = 35; $i < $stopnum;  $i++) { // N ไป สีลม  j : sukhumvit  i : Silom
                        if ($i == 34  ) {  $timesi += 1; } 
                        else if ($i == 35 | $i == 36 |  $i ==38 | $i == 40 | $i ==41 | $i == 42 | $i == 43 | $i == 44| $i == 45 | $i == 46 | $i == 47 ) {  $timesi += 2; }
                        else if ($i == 37 ) {  $timesi += 3;} 
                        else if ( $i == 39) {$timesi += 0;}
                        else {  $timesi += 4; }
                }            $time1 = $timesi + $timesuk;    } 
    
                    else if(($startnum >=34 && $startnum <= 47) && ($stopnum >=1 && $stopnum <=9)  && $startnum > $stopnum){ // สีลมไป N  j : sukhumvit  i : Silom
                    $timesi =0;  $timesuk =0;  
                       for ($j = $stopnum ; $j < 10 ; $j++ ){
                        if ($j == 2 | $j == 8) { $timesuk += 1;} 
                        else if ( $j == 1 | $j ==7) { $timesuk += 2; }
                        else if ( $j == 3 | $j ==6 | $j == 5) { $timesuk += 3; } 
                        else if ($j == 4) {$timesuk += 0;}
                        else {  $timesuk += 4; } 
                    } 
                        for ( $i = 35;  $i < $startnum;  $i++) { // สีลมไป N  j : sukhumvit  i : Silom
                            if ($i == 34  ) { $timesi += 1;  }
                            else if ($i == 35 | $i == 36 |  $i ==38 | $i == 40 | $i == 41 | $i == 42 | $i == 43 | $i == 44| $i == 45 | $i == 46 | $i == 47 ) {  $timesi += 2; }
                            else if ($i == 37 ) {  $timesi += 3;  }
                            else if ( $i == 39) {$timesi += 0;}
                            else { $timesi += 4; }                   } 
                          $time1 = $timesi+ $timesuk; }
    
    
                 else if(($startnum >=11 && $startnum <= 33) && ($stopnum >=34 && $stopnum <=47)  && $startnum < $stopnum) {  // E ไป สีลม  j : sukhumvit  i : Silom
                    $timesi =0;  $timesuk =0;
                    for ($j = 10 ; $j <= $startnum ; $j++ ){
                        if ($j == 17 | $j == 19 | $j == 17 | $j == 28 | $j == 31 | $j == 32 | $j == 10) { $timesuk += 1; }
                        else if ( $j == 11 | $j == 12 | $j == 13 | $j ==14 | $j == 15 | $j == 16  | $j == 20 | $j == 21 | $j == 22 | $j ==23 | $j == 24 | $j == 25 | $j == 27 | $j == 30 ) { $timesuk += 2; }
                        else if ( $j == 18 | $j == 26 | $j == 29) {  $timesuk += 3;  } 
                        else if ($j == 4) {$time1 += 0;}
                    } 
                        for ( $i = 35;  $i < $stopnum;  $i++) { 
                            if ($i == 34  ) {$timesi += 1; } 
                            else if ($i == 35 | $i == 36 | $i ==38 | $i == 40 | $i ==41 | $i == 42 | $i == 43 | $i ==44| $i == 45 | $i == 46 | $i == 47 ) {  $timesi += 2; }
                            else if ($i == 37 ) {  $timesi += 3; } 
                            else if ( $i == 39) {$timesi += 0;}
                            else { $timesi += 4;  }      }   
                            $time1 = $timesi + $timesuk; 
                   }
    
             else if(($startnum >=34 && $startnum <= 47) && ($stopnum >=11 && $stopnum <=33)  && $startnum > $stopnum) {
                  $timesi =0;  $timesuk =0;
                  for ($j = $stopnum ; $j >= 10 ; $j--) { // สีลม ไป E  j : sukhumvit  i : Silom
                    if ( $j == 17 | $j == 19 | $j == 17 | $j == 28 | $j == 31 | $j == 32 | $j == 10) { $timesuk += 1; }
                    else if (  $j == 11 | $j == 12 | $j == 13 | $j ==14 | $j == 15 | $j == 16  | $j == 20 | $j == 21 | $j == 22 | $j ==23 | $j == 24 | $j == 25 | $j == 27 | $j == 30 ) { $timesuk += 2; }
                    else if ( $j == 18 | $j == 26 | $j == 29) { $timesuk += 3;}
                    else { $timesuk += 4; }
                }   
                    for ( $i = 35;  $i < $startnum;  $i++) { // สีลม ไป E  j : sukhumvit  i : Silom
                        if ($i == 34  ) { $timesi += 1; } 
                        else if ( $i == 35 | $i == 36 | $i ==38 | $i == 40 | $i ==41 | $i == 42 | $i == 43 | $i ==44| $i == 45 | $i == 46 | $i == 47 ) { $timesi += 2; }
                        else if ($i == 37 | $j == 18 | $j == 26 | $j == 29) {$timesi += 3; } 
                        else if ( $i == 39) {$time1 += 0;} 
                        else {  $timesi += 4;  }
                    }  $time1 = $timesi + $timesuk;  
            }

           

          if($n == 1){
              return $price1;
          }
          
          else if($n == 2){
              return $time1;
          }


  }

  function btsprice($price1){
    global $membts , $num1 ;
    if($membts == 'btsnon'){
       $price1 = $price1; 
      } // ไม่มีบัตร
      else if($membts == 'btsstudent'){
        if($price1 == 15){ $price1 = 10;}
        else if ($num1 >= 18) { $price1 = ($price1 - 6) ;  } 
        else if($num1 < 18) { $price1 = $price1 - 1 ;}
        } //นศ
        else if($membts == 'btsold'){
          if($price1 == 15){$price1 = 7;}
          else if ($num1 < 18 ) { $price1 = floor($price1*0.5) + 1 ; }
          else if($num1 >= 18) {
               $price1= floor($price1*0.5) ;
          } //50%
        }
          else if($membts == 'btsgeneral'){
            if($price1 == 15){ $price1 = 15;}
            else{$price1 =  ($price1 - 1 ) ; }  
          } //ลดบาท
          else if($membts == 'btstrip'){
            $price1 =  0 ;   
          } //0

          if($price1 <= 0){$price1 = 0;}

      return $price1;

  }

  ?>
</html>
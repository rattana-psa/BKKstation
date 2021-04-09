<html>

  <title>BKK STATION</title>

  <?php

//เพิ่ม how3 ******************************************************************************************************************************************************
  function loopst($start,$stop,$num,$how,$x){
    global $startname , $starta , $startb , $stopname , $stopa , $stopb ,$idstart , $idstop , $conn ;
    global $a;
    $a = $num; // จำนวนสถานี

        if($how == 4){ // ไม่แสดงอะไรเลย
          $i = 1;
          $a = 0;
        }

        if($how == 1){ //ไม่แสดงตอนเริ่ม
            $a = $a+1;  //แสดงสถานีสุดท้าย+1
            $i = 1; //+-สถานีแรกไป1
        }
        if($how == 2){ //ไม่แสดงตอนจบ
            $i = 0; //เริ่มสถานีแรก ไม่+-
        }
        if($how == 0){ // ไม่แสดงตอนเริ่มและจบ
            $i = 1; //+-สถานีแรกไป1
        }
        if($how == 3){ //แสดงเริ่มและจบ
          $i = 0; //เริ่มสถานีแรก ไม่+-
          $a = $a+1;  //แสดงสถานีท้าย+1
        }
        
        for($i ; $i<=$a ; $i++ ){
        if($start == $stop){} //สถานีเดียวกันไม่ต้องทำอะไร
        else if($x == 3){ // เคสของ arl
          if($start<$stop){$stpassid = $start+$i ;} 
          else if($start>$stop){$stpassid = $start-$i ;}
            $stpass="select NAME from ARL where stationid=$stpassid"; 
            $stname = mysqli_query($conn, $stpass); $row = mysqli_fetch_assoc($stname); $namepass=$row["NAME"];

            if($i != $a) { //แสดงชื่อสถานีไปเรื่อยๆจนกว่าเลขสถานีจะเท่ากัน
                echo "<br /><font color=#6666cc> &emsp;&emsp;&emsp;ARL &#8674; $namepass </font>" ;   
                        
        }
      }
        else if($x == 1){ //เคสบีทีเอส
          if($start<$stop){$stpassid = $start+$i ;}
          else if($start>$stop){$stpassid = $start-$i ;}
          if($stpassid == 4 || $stpassid == 39){ //เลขสถานีที่ผ่านคือสถานีล่องหน ไม่ต้องแสดงชื่อออกมา
            $num = $num-1; 
            continue;
          }
          if($stpassid == 35){$stpassid = 10;} // สยาม
          $stpass="select NAME from BTS where stationid=$stpassid"; 
          $stname = mysqli_query($conn, $stpass); $row = mysqli_fetch_assoc($stname); $namepass=$row["NAME"];

          if($i != $a) {
            echo "<br /><font color=#ff6699> &emsp;&emsp;&emsp;BTS &#8674; $namepass </font>" ;     
        }
        }
        else if($x == 2){ // เคสmrt
          if($start<$stop){$stpassid = $start+$i ;}
          else if($start>$stop){$stpassid = $start-$i ;}
          $stpass="select NAME from MRT where stationid=$stpassid"; 
          $stname = mysqli_query($conn, $stpass); $row = mysqli_fetch_assoc($stname); $namepass=$row["NAME"];

          if($i != $a) {
            echo "<br /><font color=#4b0082> &emsp;&emsp;&emsp;MRT &#8674; $namepass </font>" ;    
        }
        }
      
    
  }
    
    return $num;
  }

  

  ?>
</html>
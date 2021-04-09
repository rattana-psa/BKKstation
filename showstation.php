<html>

  <title>BKK STATION</title>

  <?php
        function showstation(){
            global $startname , $starta , $startb , $startc , $stopname , $stopa , $stopb , $stopc ,$idstart , $idstop ,$conn , $how, $time , $time1, $time2, $time3 , $timex, $price2, $price3,$price1,$num1,$num2,$num3;
            $startt = 0; $stopp = 0;
            $time1 =0; $time2 = 0; $time3 = 0; $timex = 0;
                
            if($idstart == 4302 || $idstart == 4602){$startt = 3;}
            if($idstop == 4302 || $idstop == 4602){$stopp = 3;}
            if($idstart == 4802 || $idstart == 4202 || $idstart == 4301 || $idstart == 4400 || $idstart == 4502 || $idstart == 4702 || $idstart == 4902){$startt = 1;}
            if($idstop == 4802 || $idstop == 4202 || $idstop == 4301 || $idstop == 4400 || $idstop == 4502 || $idstop == 4702 || $idstop == 4902){$stopp = 1;}
            if($idstart == 4100 || $idstart == 4201 || $idstart == 4801 || $idstart == 4601 || $idstart == 4701 || $idstart == 4501 || $idstart == 4901){$startt = 2;}
            if($idstop == 4100 || $idstop == 4201 ||$idstop == 4801 ||  $idstop == 4601 || $idstop == 4701 || $idstop == 4501 || $idstop == 4901){$stopp = 2;}

            echo '<br /> '."<img src='image/start.png' width='40px;'/>"."<font color=#000000 size='4pt'><b style='background:whitesmoke'> &emsp;$startname &emsp;<br /> </b></font>";


            if( $starta == 4 && $stopa == 4 && $startb == $stopb ){
                echo '<br><br /><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; -- กรุณาเปลี่ยนสถานี --</font><br>'; 
                $price = 0;
                $time = 0;

            }

            //เคส BTS
            else if(($startt == 1 & $stopp == 1) & ($idstop != 4301 & $idstart != 4301)){
                $how = 4;
                $tbts = bts($idstart, $idstop ,2);
      
                //เริ่มบางหว้า
                if($idstart == 4902){
                    if($idstop == 4802){
                        $how = 4;
                        $t101 = mrt("4901" , "4801" , 2);
                        $t101 += 13;
                    }
                    else if($idstop == 4502){
                        $how = 4;
                        $t101 = mrt("4901" , "4501" , 2);
                        $t101 += 15;
                    }
                    else if($idstop == 4702){
                        $how = 4;
                        $t101 = mrt("4901" , "4701" , 2);
                        $t101 += 15;
                    }
                    else if($idstop == 4202){
                        $how = 4;
                        $t101 = mrt("4901" , "4201" , 2);
                        $t101 += 10;
                    }
                }

                //เริ่มศาลาแดง
                    else if($idstart == 4502){
                    if($idstop == 4802){
                        $how = 4;
                        $t101 = mrt("4501" , "4801" ,2);
                        $t101 += 18;
                    }
                    else if($idstop == 4902){
                        $how = 4;
                        $t101 = mrt("4501" , "4901" , 2);
                        $t101 += 15;
                    }
                    else if($idstop == 4702){
                        $how = 4;
                        $t101 = mrt("4501" , "4701" , 2);
                        $t101 += 20;
                    }
                    else if($idstop == 4202){
                        $how = 4;
                        $t101 = mrt("4501" , "4201" , 2);
                        $t101 += 15;
                    }
                    }

                //เริ่มอโศก
                else if($idstart == 4702){
                    if($idstop == 4802){
                        $how = 4;
                        $t101 = mrt("4701" , "4801" , 2);
                        $t101 += 18;
                    }
                    else if($idstop == 4902){
                        $how = 4;
                        $t101 = mrt("4701" , "4901" , 2);
                        $t101 += 15;
                    }
                    else if($idstop == 4502){
                        $how = 4;
                        $t101 = mrt("4701" , "4501" , 2);
                        $t101 += 20;
                    }
                    else if($idstop == 4202){
                        $how = 4;
                        $t101 = mrt("4701" , "4201" , 2);
                        $t101 += 15;
                    }
                }

                //เริ่มหมอชิต
                else if($idstart == 4202){
                    if($idstop == 4802){
                        $how = 4;
                        $t101 = mrt("4201" , "4801" , 2);
                        $t101 += 13;
                    }
                    else if($idstop == 4902){
                        $how = 4;
                        $t101 = mrt("4201" , "4901" , 2);
                        $t101 += 10;
                    }
                    else if($idstop == 4702){
                        $how = 4;
                        $t101 = mrt("4201" , "4701" , 2);
                        $t101 += 15;
                    }
                    else if($idstop == 4502){
                        $how = 4;
                        $t101 = mrt("4201" , "4501" , 2);
                        $t101 += 15;
                    }
                }

                //เริ่มห้าแยกลาดพร้าว
                else if($idstart == 4802){
                    if($idstop == 4502){
                        $how = 4;
                        $t101 = mrt("4801" , "4501" , 2);
                        $t101 += 18;
                    }
                    else if($idstop == 4902){
                        $how = 4;
                        $t101 = mrt("4801" , "4901" , 2);
                        $t101 += 13;
                    }
                    else if($idstop == 4702){
                        $how = 4;
                        $t101 = mrt("4801" , "4701" , 2);
                        $t101 += 18;
                    }
                    else if($idstop == 4202){
                        $how = 4;
                        $t101 = mrt("4801" , "4201" , 2);
                        $t101 += 13;
                    }
                }

                $time = min($tbts,$t101);
                $price1 = 0;
                $price2 = 0;
                $price3 = 0;
                $num1 = 0;
                $num2 = 0;
                $num3 = 0;
                $time1 = 0;
                $time2 = 0;
                $time3 = 0;
            
                if($time == $tbts){
                    $how = 0;
                    bts($idstart , $idstop , 2);
                }

                else{
                    //เริ่มบางหว้า
                if($idstart == 4902){
                    echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS บางหว้า ไป MRT บางหว้า เดินประมาณ 5 นาที-</font>';   
                    if($idstop == 4802){
                        $how = 0;
                        mrt("4901" , "4801" ,2);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT พหลโยธิน ไป BTS ห้าแยกลาดพร้าว เดินประมาณ 8 นาที-</font>';   
                        $timex = 13;
                    }
                    else if($idstop == 4502){
                        $how = 0;
                        mrt("4901" , "4501" ,2);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT สีลม ไป BTS ศาลาแดง เดินประมาณ 10 นาที-</font>';   
                        $timex = 15;   
                    }
                    else if($idstop == 4702){
                        $how = 0;
                        mrt("4901" , "4701" ,2);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT สุขุมวิท ไป BTS อโศก เดินประมาณ 10 นาที-</font>';   
                        $timex = 15;   
                    }
                    else if($idstop == 4202){
                        $how = 0;
                        mrt("4901" , "4201" ,2);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT สวนจตุจักร ไป BTS หมอชิต เดินประมาณ 5 นาที-</font>';   
                        $timex = 10;   
                    }
                }

                //เริ่มศาลาแดง
                else if($idstart == 4502){
                    echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS ศาลาแดง ไป MRT สีลม เดินประมาณ 10 นาที-</font>';   
                    if($idstop == 4802){
                        $how = 0;
                        mrt("4501" , "4801" ,2);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT พหลโยธิน ไป BTS ห้าแยกลาดพร้าว เดินประมาณ 8 นาที-</font>';   
                        $timex = 18;  
                    }
                    else if($idstop == 4902){
                        $how = 0;
                        mrt("4501" , "4901" ,2);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT บางหว้า ไป BTS บางหว้า เดินประมาณ 5 นาที-</font>';   
                        $timex = 15; 
                    }
                    else if($idstop == 4702){
                        $how = 0;
                        mrt("4501" , "4701" ,2);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT สุขุมวิท ไป BTS อโศก เดินประมาณ 10 นาที-</font>';   
                        $timex = 20;   
                    }
                    else if($idstop == 4202){
                        $how = 0;
                        mrt("4501" , "4201" ,2);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT สวนจตุจักร ไป BTS หมอชิต เดินประมาณ 5 นาที-</font>';   
                        $timex = 15;    
                    }
                }

                //เริ่มอโศก
                else if($idstart == 4702){
                    echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS อโศก ไป MRT สุขุมวิท เดินประมาณ 10 นาที-</font>';   
                    if($idstop == 4802){
                        $how = 0;
                        mrt("4701" , "4801" ,2);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS ห้าแยกลาดพร้าว ไป MRT พหลโยธิน เดินประมาณ 8 นาที-</font>';   
                        $timex = 18; 
                    }
                    else if($idstop == 4902){
                        $how = 0;
                        mrt("4701" , "4901" ,2);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT บางหว้า ไป BTS บางหว้า เดินประมาณ 5 นาที-</font>';   
                        $timex = 15; 
                    }
                    else if($idstop == 4502){
                        $how = 0;
                        mrt("4701" , "4501" ,2);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT สีลม ไป BTS ศาลาแดง เดินประมาณ 10 นาที-</font>';   
                        $timex = 20;    
                    }
                    else if($idstop == 4202){
                        $how = 0;
                        mrt("4701" , "4201" ,2);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT สวนจตุจักร ไป BTS หมอชิต เดินประมาณ 5 นาที-</font>';   
                        $timex = 15;  
                    }
                }

                //เริ่มหมอชิต
                else if($idstart == 4202){
                    echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS หมอชิต ไป MRT จตุจักร เดินประมาณ 5 นาที-</font>';   
                    if($idstop == 4802){
                        $how = 0;
                        mrt("4201" , "4801" ,2);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS ห้าแยกลาดพร้าว ไป MRT พหลโยธิน เดินประมาณ 8 นาที-</font>';   
                        $timex = 13;   
                    }
                    else if($idstop == 4902){
                        $how = 0;
                        mrt("4201" , "4901" ,2);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT บางหว้า ไป BTS บางหว้า เดินประมาณ 5 นาที-</font>';   
                        $timex = 10; 
                    }
                    else if($idstop == 4702){
                        $how = 0;
                        mrt("4201" , "4701" ,2);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT สุขุมวิท ไป BTS อโศก เดินประมาณ 10 นาที-</font>';   
                        $timex = 15;   
                    }
                    else if($idstop == 4502){
                        $how = 0;
                        mrt("4201" , "4501" ,2);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT สีลม ไป BTS ศาลาแดง เดินประมาณ 10 นาที-</font>';   
                        $timex = 15;  
                    }
                }

                //เริ่มห้าแยกลาดพร้าว
                else if($idstart == 4802){
                    echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS ห้าแยกลาดพร้าว ไป MRT พหลโยธิน เดินประมาณ 8 นาที-</font>';   
                    if($idstop == 4502){
                        $how = 0;
                        mrt("4801" , "4501",2);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT สีลม ไป BTS ศาลาแดง เดินประมาณ 10 นาที-</font>';   
                        $timex = 18; 
                    }
                    else if($idstop == 4902){
                        $how = 0;
                        mrt("4801" , "4901",2);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT บางหว้า ไป BTS บางหว้า เดินประมาณ 5 นาที-</font>';   
                        $timex = 13; 
                    }
                    else if($idstop == 4702){
                        $how = 0;
                        mrt("4801" , "4701",2);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT สุขุมวิท ไป BTS อโศก เดินประมาณ 10 นาที-</font>';   
                        $timex = 18;   
                    }
                    else if($idstop == 4202){
                        $how = 0;
                        mrt("4801" , "4201",2);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT สวนจตุจักร ไป BTS หมอชิต เดินประมาณ 5 นาที-</font>';   
                        $timex = 13; 
                    }
                }
            }
                

            
        
    }


            //bts - bts
            else if(($starta == $stopa & $starta == "1" ) || ($starta == "1" & $stopp == 1) || ($startt == 1 & $stopa == 1) || ($startt == 1 & $stopp == 1)){
                $how = 0;
                bts($idstart , $idstop , 2);
            }
            //mrt - mrt
            else if(($starta == $stopa & $starta == "2" ) || ($starta == "2" & $stopp == 2) || ($startt == 2 & $stopa == 2) || ($startt == 2 & $stopp == 2)){
                $how = 0;
                mrt($idstart , $idstop , 2);
            }       
            //arl - arl
            else if(($starta == $stopa & $starta == "3" ) || ($starta == "3" & $stopp == 3) || ($startt == 3 & $stopa == 3) || ($startt == 3 & $stopp == 3)){
                $how = 0;
                arl($idstart , $idstop , 2);
            }

            //start: ARL
            else if($startt == 3 || $starta == "3" || ( 3000 < $idstart && $idstart < 4000 ) ){ 
                //stopmrt
                if ($stopp == 2 || $stopa == "2" || ( 2000 < $idstop && $idstop < 3000 ) ){
                //เคสเปลี่ยนสถานีที่มักกะสัน
                $how = 4;
                $t101 = arl($idstart,"4602" , 2);
                $how = 4;
                $t102 = mrt("4601",$idstop , 2);
                $tall1 = $t101 + $t102 + 10;

                //เคสไปพญาไท-หมอชิต-mrt
                $how = 4;
                $t201 = arl($idstart,"4302",2);
                $how = 4;
                $t202 = bts("4301","4202",2);
                $how = 4;
                $t203 = mrt("4201",$idstop,2);
                $tall2 = $t201 + $t202 + $t203 + 12;

                //เคสไปพญาไท-ห้าแยกลาดพร้าว-mrt
                $how = 4;
                $t301 = arl($idstart,"4302",2);
                $how = 4;
                $t302 = bts("4301","4802",2);
                $how = 4;
                $t303 = mrt("4801",$idstop,2);
                $tall3 = $t301 + $t302 + $t303 + 15;

                //ไปพญาไท-สีลม-mrt
                $how = 4;
                $t401 = arl($idstart,"4302",2);
                $how = 4;
                $t402 = bts("4301","4502",2);
                $how = 4;
                $t403 = mrt("4501",$idstop,2);
                $tall4 = $t401 + $t402 + $t403 + 17;
                
                $time = min($tall1,$tall2,$tall3,$tall4);
                $price1 = 0;
                $price2 = 0;
                $price3 = 0;
                $num1 = 0;
                $num2 = 0;
                $num3 = 0;
                $time1 = 0;
                $time2 = 0;
                $time3 = 0;

                if($time == $tall1){
                    $how = 1;
                    arl($idstart,"4602",2);
                    echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก ARL มักกะสัน ไป MRT เพชรบุรี เดินประมาณ 10 นาที-</font>';   
                    $timex = 10;  
                    $how = 2;
                    mrt("4601",$idstop,2);
                }
                else if($time == $tall2){
                    $how = 1;
                    arl($idstart,"4302",2);
                    echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก ARL พญาไท ไป BTS พญาไท เดินประมาณ 7 นาที-</font>';        
                    $how = 3;
                    bts("4301","4202",2);
                    echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS หมอชิต ไป MRT จตุจักร เดินประมาณ 5 นาที-</font>';   
                    $timex = 12;      
                    $how = 2;
                    mrt("4201",$idstop,2);
                }
                else if($time == $tall3){
                    $how = 1;
                    arl($idstart,"4302",2);
                    echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก ARL พญาไท ไป BTS พญาไท เดินประมาณ 7 นาที-</font>';   
                    $how = 3;
                    bts("4301","4802",2);
                    echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS ห้าแยกลาดพร้าว ไป MRT พหลโยธิน  เดินประมาณ 8 นาที-</font>';   
                    $how = 2;
                    $timex = 15;
                    mrt("4801",$idstop,2);
                }
                else if($time == $tall4){
                    $how = 1;
                    arl($idstart,"4302",2);
                    echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก ARL พญาไท ไป BTS พญาไท เดินประมาณ 7 นาที-</font>';   
                    $how = 3;
                    bts("4301","4502",2);
                    echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS ศาลาแดง ไป MRT สีลม  เดินประมาณ 10 นาที-</font>';  
                    $how = 2;
                    $timex = 17;
                    mrt("4501",$idstop,2);
                }

                }

                //stopbts
                else if($stopp == 1 || $stopa == "1" || ( 1000 < $idstop && $idstop < 2000 ) ){
                //เคสเปลี่ยนสถานีที่มักกะสัน-อโศก-บี
                $how = 4;
                $t101 = arl($idstart,"4602",2);
                $how = 4;
                $t102 = mrt("4601","4701",2);
                $how = 4;
                $t103 = bts("4702",$idstop,2);

                $tall1 = $t101 + $t102 + $t103 + 20;
                

                //เคสไปมักกะสัน-พหลโยธิน-บี
                $how = 4;
                $t201 = arl($idstart,"4602",2);
                $how = 4;
                $t202 = mrt("4601","4801",2);
                $how = 4;
                $t203 = bts("4802",$idstop,2);

                $tall2 = $t201 + $t202 + $t203 + 18;
                

                //เคสไปมักกสัน-จตุจักร-บี
                $how = 4;
                $t301 = arl($idstart,"4602",2);
                $how = 4;
                $t302 = mrt("4601","4201",2);
                $how = 4;
                $t303 = bts("4202",$idstop,2);

                $tall3 = $t301 + $t302 +$t303 + 15;
                

                //ไปมักกะสัน-สีลม-บี
                $how = 4;
                $t401 = arl($idstart,"4602",2);
                $how = 4;
                $t402 = mrt("4601","4501",2);
                $how = 4;
                $t403 = bts("4502",$idstop,2);
                
                $tall4 = $t401 + $t402 +$t403 + 20 ;
                

                //ไปมักกะสัน-บางหว้า-บี
                $how = 4;
                $t501 = arl($idstart,"4602",2);
                $how = 4;
                $t502 = mrt("4601","4901",2);
                $how = 4;
                $t503 = bts("4902",$idstop,2);

                $tall5 = $t501 + $t502 +$t503 + 15;
                

                //ไปพญาไท-บี
                $how = 4;
                $t601 = arl($idstart,"4302",2);
                $how = 4;
                $t602 = bts("4301",$idstop,2);
                
                $tall6 = $t601 + $t602 + 7;
                
                
                $time = min($tall1,$tall2,$tall3,$tall4,$tall5,$tall6);
                $price1 = 0;
                $price2 = 0;
                $price3 = 0;
                $num1 = 0;
                $num2 = 0;
                $num3 = 0;
                $time1 = 0;
                $time2 = 0;
                $time3 = 0;
                

                if($time == $tall1){
                $how = 1;
                arl($idstart,"4602",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก ARL มักกะสัน ไป MRT เพชรบุรี เดินประมาณ 10 นาที-</font>';
                $how = 3;
                mrt("4601","4701",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT สุขุมวิท  ไป BTS อโศก เดินประมาณ 10 นาที-</font>'; 
                $how = 2;
                $timex = 20;
                bts("4702",$idstop,2);
                }
                else if($time == $tall2){
                $how = 1;
                arl($idstart,"4602",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก ARL มักกะสัน ไป MRT เพชรบุรี เดินประมาณ 10 นาที-</font>';  
                $how = 3;
                mrt("4601","4801",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT พหลโยธิน ไป BTS ห้าแยกลาดพร้าว เดินประมาณ 8 นาที-</font>';  
                $how = 2;
                $timex = 18;
                bts("4802",$idstop,2);
                }
                else if($time == $tall3){
                $how = 1;
                arl($idstart,"4602",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก ARL มักกะสัน ไป MRT เพชรบุรี เดินประมาณ 10 นาที-</font>';
                $how = 3;
                mrt("4601","4201",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT สวนจตุจักร ไป BTS หมอชิต เดินประมาณ 5 นาที-</font>';   
                $how = 2;
                $timex = 15;
                bts("4202",$idstop,2);
                }
                else if($time == $tall4){
                $how = 1;
                arl($idstart,"4602",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก ARL มักกะสัน ไป MRT เพชรบุรี เดินประมาณ 10 นาที-</font>';  
                $how = 3;
                mrt("4601","4501",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT สีลม ไป BTS ศาลาแดง เดินประมาณ 10 นาที-</font>';   
                $how = 2;
                $timex = 20;
                bts("4502",$idstop,2);
                }
                else if($time == $tall5){
                $how = 1;
                arl($idstart,"4602",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก ARL มักกะสัน ไป MRT เพชรบุรี เดินประมาณ 10 นาที-</font>';  
                $how = 3;
                mrt("4601","4901",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT บางหว้า ไป BTS บางหว้า เดินประมาณ 5 นาที-</font>';  
                $how = 2;
                $timex = 15;
                bts("4902",$idstop,2);
                }
                else if($time == $tall6){
                $how = 1;
                arl($idstart,"4302",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก ARL พญาไท ไป BTS พญาไท เดินประมาณ 7 นาที-</font>';  
                $how = 2;
                $timex = 7;
                bts("4301",$idstop,2);
                }
            }

            
            }
            
            
            //start:MRT
            else if($startt == 2 || $starta == "2" || ( 2000 < $idstart && $idstart < 3000 ) ){ 
                //stoparl
                if ($stopp == 3 || $stopa == "3" || ( 3000 < $idstop && $idstop < 4000 ) ){
                //เคสเปลี่ยนสถานีที่หมอชิต-พญาไท-แอลิ้ง
                $how = 4;
                $t101 = mrt($idstart,"4201",2);
                $how = 4;
                $t102 = bts("4202","4301",2);
                $how = 4;
                $t103 = arl("4302",$idstop,2);

                $tall1 = $t101 + $t102 + $t103 + 12;
                

                //เคสไปพหล-พญาไท-แอลิ้ง
                $how = 4;
                $t201 = mrt($idstart,"4801",2);
                $how = 4;
                $t202 = bts("4802","4301",2);
                $how = 4;
                $t203 = arl("4302",$idstop,2);

                $tall2 = $t201 + $t202 + $t203 +15;
                

                //เคสไปเพชรบุรี-มักสัน-แอลิ้ง
                $how = 4;
                $t301 = mrt($idstart,"4601",2);
                $how = 4;
                $t302 = arl("4602",$idstop,2);

                $tall3 = $t301 + $t302 + 10;
                

                //ไปศาลาแดง-พญาไท-แอลิ้ง
                $how = 4;
                $t401 = mrt($idstart,"4501",2);
                $how = 4;
                $t402 = bts("4502","4301",2);
                $how = 4;
                $t403 = arl("4302",$idstop,2);

                $tall4 = $t401 + $t402 +$t403 + 17;
                

                //ไปบางหว้า-พญาไท-แอลิ้ง
                $how = 4;
                $t501 = mrt($idstart,"4901",2);
                $how = 4;
                $t502 = bts("4902","4301",2);
                $how = 4;
                $t503 = arl("4302",$idstop,2);
 
                $tall5 = $t501 + $t502 +$t503 +12 ;
                
                
                
                $time = min($tall1,$tall2,$tall3,$tall4,$tall5);
                $price1 = 0;
                $price2 = 0;
                $price3 = 0;
                $num1 = 0;
                $num2 = 0;
                $num3 = 0;
                $time1 = 0;
                $time2 = 0;
                $time3 = 0;
                

                if($time == $tall1){
                $how = 1;
                mrt($idstart,"4201",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT สวนจตุจักร ไป BTS หมอชิต เดินประมาณ 5 นาที-</font>';   
                $how = 3;
                bts("4202","4301",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS พญาไท ไป ARL พญาไท เดินประมาณ 7 นาที-</font>';   
                $how = 2;
                $timex = 12;
                arl("4302",$idstop,2);
                }
                else if($time == $tall2){
                $how = 1;
                mrt($idstart,"4801",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT พหลโยธิน ไป BTS ห้าแยกลาดพร้าว เดินประมาณ 8 นาที-</font>'; 
                $how = 3;
                bts("4802","4301",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS พญาไท ไป ARL พญาไท เดินประมาณ 7 นาที-</font>';    
                $how = 2;
                $timex = 15;
                arl("4302",$idstop,2);
                }
                else if($time == $tall3){
                $how = 1;
                mrt($idstart,"4601",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT เพชรบุรี ไป ARL มักกะสัน เดินประมาณ 10 นาที-</font>';  
                $how = 2;
                $timex = 10;
                arl("4602",$idstop,2);
                }
                else if($time == $tall4){
                $how = 1;
                mrt($idstart,"4501",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT สีลม ไป BTS ศาลาแดง เดินประมาณ 10 นาที-</font>';   
                $how = 3;
                bts("4502","4301",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS พญาไท ไป MRT พญาไท เดินประมาณ 7 นาที-</font>';    
                $how = 2;
                $timex = 17;
                arl("4302",$idstop,2);
                }
                else if($time == $tall5){
                $how = 1;
                mrt($idstart,"4901",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT บางหว้า ไป BTS บางหว้า เดินประมาณ 5 นาที-</font>';  
                $how = 3;
                bts("4902","4301",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS พญาไท ไป MRT พญาไท เดินประมาณ 7 นาที-</font>';   
                $how = 2;
                $timex = 12;
                arl("4302",$idstop,2);
                }
                
                }

                //stopbts
                else if($stopp == 1 || $stopa == "1" || ( 1000 < $idstop && $idstop < 2000 ) ){
                //เคสเปลี่ยนสถานีที่จตุจัก-หมอชิต-บี
                $how = 4;
                $t101 = mrt($idstart,"4201",2);
                $how = 4;
                $t102 = bts("4202",$idstop,2);

                $tall1 = $t101 + $t102 +5;
                

                //เคสไปลาดพร้าว-บี
                $how = 4;
                $t201 = mrt($idstart,"4801",2);
                $how = 4;
                $t202 = bts("4802",$idstop,2);
   
                $tall2 = $t201 + $t202 +8 ;
                

                //เคสไปมักกสัน-พญาไท-บี
                $how = 4;
                $t301 = mrt($idstart,"4601",2);
                $how = 4;
                $t302 = arl("4602","4302",2);
                $how = 4;
                $t303 = bts("4301",$idstop,2);
           
                $tall3 = $t301 + $t302 + $t303 + 17 ;
                

                //ไปสุขุมวิท-บี
                $how = 4;
                $t401 = mrt($idstart,"4701",2);
                $how = 4;
                $t402 = bts("4702",$idstop,2);
           
                $tall4 = $t401 + $t402 + 10;
                

                //ไปสีลม-บี
                $how = 4;
                $t501 = mrt($idstart,"4501",2);
                $how = 4;
                $t502 = bts("4502",$idstop,2);
           
                $tall5 = $t501 + $t502  + 10;
                

                //ไปบางหว้า-บี
                $how = 4;
                $t601 = mrt($idstart,"4901",2);
                $how = 4;
                $t602 = bts("4902",$idstop,2);
    
                $tall6 = $t601 + $t602 + 5;
                
                
                $time = min($tall1,$tall2,$tall3,$tall4,$tall5,$tall6);
                $price1 = 0;
                $price2 = 0;
                $price3 = 0;
                $num1 = 0;
                $num2 = 0;
                $num3 = 0;
                $time1 = 0;
                $time2 = 0;
                $time3 = 0;
                

                if($time == $tall1){
                $how = 1;
                mrt($idstart,"4201",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT สวนจตุจักร ไป BTS หมอชิต เดินประมาณ 5 นาที-</font>';   
                $how = 2;
                $timex = 5;
                bts("4202",$idstop,2);
                }
                else if($time == $tall2){
                $how = 1;
                mrt($idstart,"4801",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT พหลโยธิน ไป BTS ห้าแยกลาดพร้าว เดินประมาณ 8 นาที-</font>'; 
                $how = 2;
                $timex = 8;
                bts("4802",$idstop,2);
                }
                else if($time == $tall3){
                $how = 1;
                mrt($idstart,"4601",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT เพชรบุรี ไป ARL มักกะสัน เดินประมาณ 10 นาที-</font>';  
                $how = 3;
                arl("4602","4302",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก ARL พญาไท ไป BTS พญาไท เดินประมาณ 7 นาที-</font>'; 
                $how = 2;
                $timex = 17;
                bts("4301",$idstop,2);
                }
                else if($time == $tall4){
                $how = 1;
                mrt($idstart,"4701",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT สุขุมวิท ไป BTS อโศก เดินประมาณ 10 นาที-</font>';  
                $how = 2;
                $timex = 10;
                bts("4702",$idstop,2);
                }
                else if($time == $tall5){
                $how = 1;
                mrt($idstart,"4501",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT สีลม ไป BTS ศาลาแดง เดินประมาณ 10 นาที-</font>';  
                $how = 2;
                $timex = 10;
                bts("4502",$idstop,2);
                }
                else if($time == $tall6){
                $how = 1;
                mrt($idstart,"4901",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT บางหว้า ไป BTS บางหว้า เดินประมาณ 5 นาที-</font>';
                $how = 2;
                $timex = 5;
                bts("4902",$idstop,2);
                }
                }
            }


            //start:BTS
            else {
                //stopmrt
                if ($stopp == 2 || $stopa == "2" || ( 2000 < $idstop && $idstop < 3000 ) ){
                //เคสไปพญาไท-มักกะสัน-เอ็ม
                $how = 4;
                $t101 = bts($idstart,"4301",2);
                $how = 4;
                $t102 = arl("4302","4602",2);
                $how = 4;
                $t103 = mrt("4601",$idstop,2);
  
                $tall1 = $t101 + $t102 + $t103 +17;

                //เคสไปพหล-ห้าแยก-เอ็ม
                $how = 4;
                $t201 = bts($idstart,"4802",2);
                $how = 4;
                $t202 = mrt("4801",$idstop,2);
         
                $tall2 = $t201 + $t202 + 8;

                //เคสไปจตุจักร-เอ็ม
                $how = 4;
                $t301 = bts($idstart,"4202",2);
                $how = 4;
                $t302 = mrt("4201",$idstop,2);
         
                $tall3 = $t301 + $t302 + 5;

                //เคสไปอโศก-สุขุมวิท-เอ็ม
                $how = 4;
                $t401 = bts($idstart,"4702",2);
                $how = 4;
                $t402 = mrt("4701",$idstop,2);
    
                $tall4 = $t401 + $t402 + 10;

                //เคสไปสีลม-เอ็ม
                $how = 4;
                $t501 = bts($idstart,"4502",2);
                $how = 4;
                $t502 = mrt("4501",$idstop,2);
          
                $tall5 = $t501 + $t502 + 10;

                //เคสไปบางหว้า-เอ็ม
                $how = 4;
                $t601 = bts($idstart,"4902",2);
                $how = 4;
                $t602 = mrt("4901",$idstop,2);
        
                $tall6 = $t601 + $t602 + 5;

                $time = min($tall1,$tall2,$tall3,$tall4,$tall5,$tall6);
                $price1 = 0;
                $price2 = 0;
                $price3 = 0;
                $num1 = 0;
                $num2 = 0;
                $num3 = 0;
                $time1 = 0;
                $time2 = 0;
                $time3 = 0;
                

                if($time == $tall1){
                $how = 1;
                bts($idstart,"4301",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS พญาไท ไป ARL พญาไท เดินประมาณ 7 นาที-</font>';  
                $how = 3;
                arl("4302","4602",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก ARL มักกะสัน ไป MRT เพชรบุรี เดินประมาณ 10 นาที-</font>';   
                $how = 2;
                $timex = 17;
                mrt("4601",$idstop,2);
                }
                else if($time == $tall2){
                $how = 1;
                bts($idstart,"4802",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS ห้าแยกลาดพร้าว ไป MRT พหลโยธิน เดินประมาณ 8 นาที-</font>'; 
                $how = 2;
                $timex = 8;
                mrt("4801",$idstop,2);
                }
                else if($time == $tall3){
                $how = 1;
                bts($idstart,"4202",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS หมอชิต ไป MRT จตุจักร เดินประมาณ 5 นาที-</font>';  
                $how = 2;
                $timex = 5;
                mrt("4201",$idstop,2);
                }
                else if($time == $tall4){
                $how = 1;
                bts($idstart,"4702",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS อโศก ไป MRT สุขุมวิท เดินประมาณ 10 นาที-</font>';   
                $how = 2;
                $timex = 10;
                mrt("4701",$idstop,2);
                }
                else if($time == $tall5){
                $how = 1;
                bts($idstart,"4502",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS ศาลาแดง ไป MRT สีลม เดินประมาณ 10 นาที-</font>';   
                $how = 2;
                $timex = 10;
                mrt("4501",$idstop,2);
                }
                else if($time == $tall6){
                $how = 1;
                bts($idstart,"4902",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS บางหว้า ไป MRT บางหว้า เดินประมาณ 5 นาที-</font>';  
                $how = 2;
                $timex = 5;
                mrt("4901",$idstop,2);
                }
                

                }

                //stoparl
                else if($stopp == 3 || $stopa == "3" || ( 3000 < $idstop && $idstop < 4000 ) ){
                //เคสเปลี่ยนสถานีที่พญาไท-แอลิ้ง
                $how = 4;
                $t101 = bts($idstart,"4301",2);
                $how = 4;
                $t102 = arl("4302",$idstop,2);
                
                $tall1 = $t101 + $t102 +7;

                //เคสไปห้าแยก-พหล-มักกะสัน-แอลิ้ง
                $how = 4;
                $t201 = bts($idstart,"4802",2);
                $how = 4;
                $t202 = mrt("4801","4601",2);
                $how = 4;
                $t203 = arl("4602",$idstop,2);
           
                $tall2 = $t201 + $t202 + $t203 + 18;

                //เคสไปหมอชิต-มักกะสัน-แอลิ้ง
                $how = 4;
                $t301 = bts($idstart,"4202",2);
                $how = 4;
                $t302 = mrt("4201","4601",2);
                $how = 4;
                $t303 = arl("4602",$idstop,2);
             
                $tall3 = $t301 + $t302 + $t303 + 15;

                //เคสไปอโศก-มักกะสัน-แอลิ้ง
                $how = 4;
                $t401 = bts($idstart,"4702",2);
                $how = 4;
                $t402 = mrt("4701","4601",2);
                $how = 4;
                $t403 = arl("4602",$idstop,2);
          
                $tall4 = $t401 + $t402 + $t403 + 20;

                //เคสไปสีลม-มักกะสัน-แอลิ้ง
                $how = 4;
                $t501 = bts($idstart,"4502",2);
                $how = 4;
                $t502 = mrt("4501","4601",2);
                $how = 4;
                $t503 = arl("4602",$idstop,2);
              
                $tall5 = $t501 + $t502 + $t503 +20;

                //เคสไปบางหว้า-มักกะสัน-แอลิ้ง
                $how = 4;
                $t601 = bts($idstart,"4902",2);
                $how = 4;
                $t602 = mrt("4901","4601",2);
                $how = 4;
                $t603 = arl("4602",$idstop,2);
              
                $tall6 = $t601 + $t602 + $t603 +15;

                //เคสไปบางหว้า-สีลม-พญาไท-แอลิ้ง
                $how = 4;
                $t701 = bts($idstart,"4902",2);
                $how = 4;
                $t702 = mrt("4901","4501",2);
                $how = 4;
                $t703 = bts("4502","4301",2);
                $how = 4;
                $t704 = arl("4302",$idstop,2);
   
                $tall7 = $t701 + $t702 + $t703 + $t704 + 22;

                $time = min($tall1,$tall2,$tall3,$tall4,$tall5,$tall6,$tall7);
                $price1 = 0;
                $price2 = 0;
                $price3 = 0;
                $num1 = 0;
                $num2 = 0;
                $num3 = 0;
                $time1 = 0;
                $time2 = 0;
                $time3 = 0;
                

                if($time == $tall1){
                $how = 1;
                bts($idstart,"4301",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS พญาไท ไป ARL พญาไท เดินประมาณ 7 นาที-</font>';   
                $how = 2;
                $timex = 7;
                arl("4302",$idstop,2);
                }
                else if($time == $tall2){
                $how = 1;
                bts($idstart,"4802",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS ห้าแยกลาดพร้าว ไป MRT พหลโยธิน เดินประมาณ 8 นาที-</font>'; 
                $how = 3;
                mrt("4801","4601",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT เพชรบุรี ไป ARL มักกะสัน เดินประมาณ 10 นาที-</font>';  
                $how = 2;
                $timex = 18;
                arl("4602",$idstop,2);
                }
                else if($time == $tall3){
                $how = 1;
                bts($idstart,"4202",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS หมอชิต ไป MRT สวนจตุจักร เดินประมาณ 5 นาที-</font>';  
                $how = 3;
                mrt("4201","4601",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT เพชรบุรี ไป ARL มักกะสัน เดินประมาณ 10 นาที-</font>';   
                $how = 2;
                $timex = 15;
                arl("4602",$idstop,2);
                }
                else if($time == $tall4){
                $how = 1;
                bts($idstart,"4702",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS อโศก ไป MRT สุขุมวิท เดินประมาณ 10 นาที-</font>';  
                $how = 3;
                mrt("4701","4601",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT เพชรบุรี ไป ARL มักกะสัน เดินประมาณ 10 นาที-</font>';  
                $how = 2;
                $timex = 20;
                arl("4602",$idstop,2);
                }
                else if($time == $tall5){
                $how = 1;
                bts($idstart,"4502",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS ศาลาแดง ไป MRT สีลม เดินประมาณ 10 นาที-</font>'; 
                $how = 3;
                mrt("4501","4601",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT เพชรบุรี ไป ARL มักกะสัน เดินประมาณ 10 นาที-</font>';    
                $how = 2;
                $timex = 20;
                arl("4602",$idstop,2);
                }
                else if($time == $tall6){
                $how = 1;
                bts($idstart,"4902",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS บางหว้า ไป MRT บางหว้า เดินประมาณ 5 นาที-</font>';  
                $how = 3;
                mrt("4901","4601",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT เพชรบุรี ไป ARL มักกะสัน เดินประมาณ 10 นาที-</font>'; 
                $how = 2;
                $timex = 15;
                arl("4602",$idstop,2);
                }
                else if($time == $tall7){
                $how = 1;
                ts($idstart,"4902",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS บางหว้า ไป MRT บางหว้า เดินประมาณ 5 นาที-</font>';  
                $how = 3;
                mrt("4901","4501",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT สีลม ไป BTS ศาลาแดง เดินประมาณ 10 นาที-</font>';    
                $how = 3;
                bts("4502","4301",2);
                echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS พญาไท ไป ARL พญาไท เดินประมาณ 7 นาที-</font>';   
                $how = 2;
                $timex = 22;
                arl("4302",$idstop,2);
                }

                }

            }




            


            echo '<br /> '.'<br /> '."<img src='image/stop.png' width='40px;'/>"."<font color=#000000 size='4pt'><b style='background:whitesmoke'>&emsp;$stopname &emsp;</b></font>";
            echo '<br /> '.'<br /> ';
        }

            function showstationver2(){
                global $startname , $starta , $startb , $startc , $stopname , $stopa , $stopb , $stopc ,$idstart , $idstop ,$conn , $how, $time , $time1, $time2, $time3 , $timex , $price2, $price3,$price1,$num1,$num2,$num3;
                $startt = 0; $stopp = 0;
                $time1 =0; $time2 = 0; $time3 = 0; $timex = 0;
                    
                if($idstart == 4302 || $idstart == 4602){$startt = 3;}
                if($idstop == 4302 || $idstop == 4602){$stopp = 3;}
                if($idstart == 4802 || $idstart == 4202 || $idstart == 4301 || $idstart == 4400 || $idstart == 4502 || $idstart == 4702 || $idstart == 4902){$startt = 1;}
                if($idstop == 4802 || $idstop == 4202 || $idstop == 4301 || $idstop == 4400 || $idstop == 4502 || $idstop == 4702 || $idstop == 4902){$stopp = 1;}
                if($idstart == 4100 || $idstart == 4201 || $idstart == 4801 || $idstart == 4601 || $idstart == 4701 || $idstart == 4501 || $idstart == 4901){$startt = 2;}
                if($idstop == 4100 || $idstop == 4201 ||$idstop == 4801 ||  $idstop == 4601 || $idstop == 4701 || $idstop == 4501 || $idstop == 4901){$stopp = 2;}

                echo '<br /> '."<img src='image/start.png' width='40px;'/>"."<font color=#000000 size='4pt'><b style='background:whitesmoke'> &emsp;$startname &emsp;<br /> </b></font>";


                if( $starta == 4 && $stopa == 4 && $startb == $stopb ){
                    echo '<br><br /><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; -- กรุณาเปลี่ยนสถานี --</font><br>'; 
                    $price = 0;

                }

                //เคส BTS
                else if(($startt == 1 & $stopp == 1) & ($idstop != 4301 & $idstart != 4301)){
                    $how = 4;
                    $pbts = bts($idstart, $idstop ,1);
                    $pbts = btsprice($pbts);
          
                    //เริ่มบางหว้า
                    if($idstart == 4902){
                        if($idstop == 4802){
                            $how = 4;
                            $p101 = mrt("4901" , "4801" ,1);
                        }
                        else if($idstop == 4502){
                            $how = 4;
                            $p101 = mrt("4901" , "4501" ,1);
                        }
                        else if($idstop == 4702){
                            $how = 4;
                            $p101 = mrt("4901" , "4701" ,1);
                        }
                        else if($idstop == 4202){
                            $how = 4;
                            $p101 = mrt("4901" , "4201" ,1);
                        }
                    }

                    //เริ่มศาลาแดง
                        else if($idstart == 4502){
                        if($idstop == 4802){
                            $how = 4;
                            $p101 = mrt("4501" , "4801" ,1);
                        }
                        else if($idstop == 4902){
                            $how = 4;
                            $p101 = mrt("4501" , "4901" ,1);
                        }
                        else if($idstop == 4702){
                            $how = 4;
                            $p101 = mrt("4501" , "4701" ,1);
                        }
                        else if($idstop == 4202){
                            $how = 4;
                            $p101 = mrt("4501" , "4201" ,1);
                        }
                        }

                    //เริ่มอโศก
                    else if($idstart == 4702){
                        if($idstop == 4802){
                            $how = 4;
                            $p101 = mrt("4701" , "4801" ,1);
                        }
                        else if($idstop == 4902){
                            $how = 4;
                            $p101 = mrt("4701" , "4901" ,1);
                        }
                        else if($idstop == 4502){
                            $how = 4;
                            $p101 = mrt("4701" , "4501" ,1);
                        }
                        else if($idstop == 4202){
                            $how = 4;
                            $p101 = mrt("4701" , "4201" ,1);
                        }
                    }

                    //เริ่มหมอชิต
                    else if($idstart == 4202){
                        if($idstop == 4802){
                            $how = 4;
                            $p101 = mrt("4201" , "4801" ,1);
                        }
                        else if($idstop == 4902){
                            $how = 4;
                            $p101 = mrt("4201" , "4901" ,1);
                        }
                        else if($idstop == 4702){
                            $how = 4;
                            $p101 = mrt("4201" , "4701" ,1);
                        }
                        else if($idstop == 4502){
                            $how = 4;
                            $p101 = mrt("4201" , "4501" ,1);
                        }
                    }

                    //เริ่มห้าแยกลาดพร้าว
                    else if($idstart == 4802){
                        if($idstop == 4502){
                            $how = 4;
                            $p101 = mrt("4801" , "4501" ,1);
                        }
                        else if($idstop == 4902){
                            $how = 4;
                            $p101 = mrt("4801" , "4901" ,1);
                        }
                        else if($idstop == 4702){
                            $how = 4;
                            $p101 = mrt("4801" , "4701" ,1);
                        }
                        else if($idstop == 4202){
                            $how = 4;
                            $p101 = mrt("4801" , "4201" ,1);
                        }
                    }

                    $p101 = mrtprice($p101);
                    $price = min($pbts,$p101);
                    $price1 = 0;
                    $price2 = 0;
                    $price3 = 0;
                    $num1 = 0;
                    $num2 = 0;
                    $num3 = 0;
                    $time1 = 0;
                    $time2 = 0;
                    $time3 = 0;
                
                    if($price == $pbts){
                        $how = 0;
                        bts($idstart , $idstop ,1);
                    }

                    else{
                        //เริ่มบางหว้า
                    if($idstart == 4902){
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS บางหว้า ไป MRT บางหว้า เดินประมาณ 5 นาที-</font>';   
                        if($idstop == 4802){
                            $how = 0;
                            mrt("4901" , "4801" ,1);
                            echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT พหลโยธิน ไป BTS ห้าแยกลาดพร้าว เดินประมาณ 8 นาที-</font>';   
                            $timex = 13;
                        }
                        else if($idstop == 4502){
                            $how = 0;
                            mrt("4901" , "4501" ,1);
                            echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT สีลม ไป BTS ศาลาแดง เดินประมาณ 10 นาที-</font>';   
                            $timex = 15;   
                        }
                        else if($idstop == 4702){
                            $how = 0;
                            mrt("4901" , "4701" ,1);
                            echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT สุขุมวิท ไป BTS อโศก เดินประมาณ 10 นาที-</font>';   
                            $timex = 15;   
                        }
                        else if($idstop == 4202){
                            $how = 0;
                            mrt("4901" , "4201" ,1);
                            echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT สวนจตุจักร ไป BTS หมอชิต เดินประมาณ 5 นาที-</font>';   
                            $timex = 10;   
                        }
                    }

                    //เริ่มศาลาแดง
                    else if($idstart == 4502){
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS ศาลาแดง ไป MRT สีลม เดินประมาณ 10 นาที-</font>';   
                        if($idstop == 4802){
                            $how = 0;
                            mrt("4501" , "4801" ,1);
                            echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT พหลโยธิน ไป BTS ห้าแยกลาดพร้าว เดินประมาณ 8 นาที-</font>';   
                            $timex = 18;  
                        }
                        else if($idstop == 4902){
                            $how = 0;
                            mrt("4501" , "4901" ,1);
                            echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT บางหว้า ไป BTS บางหว้า เดินประมาณ 5 นาที-</font>';   
                            $timex = 15; 
                        }
                        else if($idstop == 4702){
                            $how = 0;
                            mrt("4501" , "4701" ,1);
                            echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT สุขุมวิท ไป BTS อโศก เดินประมาณ 10 นาที-</font>';   
                            $timex = 20;   
                        }
                        else if($idstop == 4202){
                            $how = 0;
                            mrt("4501" , "4201" ,1);
                            echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT สวนจตุจักร ไป BTS หมอชิต เดินประมาณ 5 นาที-</font>';   
                            $timex = 15;    
                        }
                    }

                    //เริ่มอโศก
                    else if($idstart == 4702){
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS อโศก ไป MRT สุขุมวิท เดินประมาณ 10 นาที-</font>';   
                        if($idstop == 4802){
                            $how = 0;
                            mrt("4701" , "4801" ,1);
                            echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS ห้าแยกลาดพร้าว ไป MRT พหลโยธิน เดินประมาณ 8 นาที-</font>';   
                            $timex = 18; 
                        }
                        else if($idstop == 4902){
                            $how = 0;
                            mrt("4701" , "4901" ,1);
                            echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT บางหว้า ไป BTS บางหว้า เดินประมาณ 5 นาที-</font>';   
                            $timex = 15; 
                        }
                        else if($idstop == 4502){
                            $how = 0;
                            mrt("4701" , "4501" ,1);
                            echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT สีลม ไป BTS ศาลาแดง เดินประมาณ 10 นาที-</font>';   
                            $timex = 20;    
                        }
                        else if($idstop == 4202){
                            $how = 0;
                            mrt("4701" , "4201" ,1);
                            echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT สวนจตุจักร ไป BTS หมอชิต เดินประมาณ 5 นาที-</font>';   
                            $timex = 15;  
                        }
                    }

                    //เริ่มหมอชิต
                    else if($idstart == 4202){
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS หมอชิต ไป MRT จตุจักร เดินประมาณ 5 นาที-</font>';   
                        if($idstop == 4802){
                            $how = 0;
                            mrt("4201" , "4801" ,1);
                            echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS ห้าแยกลาดพร้าว ไป MRT พหลโยธิน เดินประมาณ 8 นาที-</font>';   
                            $timex = 13;   
                        }
                        else if($idstop == 4902){
                            $how = 0;
                            mrt("4201" , "4901" ,1);
                            echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT บางหว้า ไป BTS บางหว้า เดินประมาณ 5 นาที-</font>';   
                            $timex = 10; 
                        }
                        else if($idstop == 4702){
                            $how = 0;
                            mrt("4201" , "4701" ,1);
                            echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT สุขุมวิท ไป BTS อโศก เดินประมาณ 10 นาที-</font>';   
                            $timex = 15;   
                        }
                        else if($idstop == 4502){
                            $how = 0;
                            mrt("4201" , "4501" ,1);
                            echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT สีลม ไป BTS ศาลาแดง เดินประมาณ 10 นาที-</font>';   
                            $timex = 15;  
                        }
                    }

                    //เริ่มห้าแยกลาดพร้าว
                    else if($idstart == 4802){
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS ห้าแยกลาดพร้าว ไป MRT พหลโยธิน เดินประมาณ 8 นาที-</font>';   
                        if($idstop == 4502){
                            $how = 0;
                            mrt("4801" , "4501",1);
                            echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT สีลม ไป BTS ศาลาแดง เดินประมาณ 10 นาที-</font>';   
                            $timex = 18; 
                        }
                        else if($idstop == 4902){
                            $how = 0;
                            mrt("4801" , "4901",1);
                            echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT บางหว้า ไป BTS บางหว้า เดินประมาณ 5 นาที-</font>';   
                            $timex = 13; 
                        }
                        else if($idstop == 4702){
                            $how = 0;
                            mrt("4801" , "4701",1);
                            echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT สุขุมวิท ไป BTS อโศก เดินประมาณ 10 นาที-</font>';   
                            $timex = 18;   
                        }
                        else if($idstop == 4202){
                            $how = 0;
                            mrt("4801" , "4201",1);
                            echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT สวนจตุจักร ไป BTS หมอชิต เดินประมาณ 5 นาที-</font>';   
                            $timex = 13; 
                        }
                    }
                }
                    

                
            
        }


                //bts - bts
                else if(($starta == $stopa & $starta == "1" ) || ($starta == "1" & $stopp == 1) || ($startt == 1 & $stopa == 1) || ($startt == 1 & $stopp == 1)){
                    $how = 0;
                    bts($idstart , $idstop ,1);
                }
                //mrt - mrt
                else if(($starta == $stopa & $starta == "2" ) || ($starta == "2" & $stopp == 2) || ($startt == 2 & $stopa == 2) || ($startt == 2 & $stopp == 2)){
                    $how = 0;
                    mrt($idstart , $idstop ,1);
                }       
                //arl - arl
                else if(($starta == $stopa & $starta == "3" ) || ($starta == "3" & $stopp == 3) || ($startt == 3 & $stopa == 3) || ($startt == 3 & $stopp == 3)){
                    $how = 0;
                    arl($idstart , $idstop ,1);
                    
                }

                //start: ARL
                else if($startt == 3 || $starta == "3" || ( 3000 < $idstart && $idstart < 4000 ) ){ 
                    //stopmrt
                    if ($stopp == 2 || $stopa == "2" || ( 2000 < $idstop && $idstop < 3000 ) ){
                    //เคสเปลี่ยนสถานีที่มักกะสัน
                    $how = 4;
                    $p101 = arl($idstart,"4602",1);
                    $how = 4;
                    $p102 = mrt("4601",$idstop,1);
                    $p101 = arlprice($p101);
                    $p102 = mrtprice($p102);
                    $pall1 = $p101 + $p102 ;

                    //เคสไปพญาไท-หมอชิต-mrt
                    $how = 4;
                    $p201 = arl($idstart,"4302",1);
                    $how = 4;
                    $p202 = bts("4301","4202",1);
                    $how = 4;
                    $p203 = mrt("4201",$idstop,1);
                    $p201 = arlprice($p201);
                    $p202 = btsprice($p202);
                    $p203 = mrtprice($p203);
                    $pall2 = $p201 + $p202 + $p203;

                    //เคสไปพญาไท-ห้าแยกลาดพร้าว-mrt
                    $how = 4;
                    $p301 = arl($idstart,"4302",1);
                    $how = 4;
                    $p302 = bts("4301","4802",1);
                    $how = 4;
                    $p303 = mrt("4801",$idstop,1);
                    $p301 = arlprice($p301);
                    $p302 = btsprice($p302);
                    $p303 = mrtprice($p303);
                    $pall3 = $p301 + $p302 + $p303 ;

                    //ไปพญาไท-สีลม-mrt
                    $how = 4;
                    $p401 = arl($idstart,"4302",1);
                    $how = 4;
                    $p402 = bts("4301","4502",1);
                    $how = 4;
                    $p403 = mrt("4501",$idstop,1);
                    $p401 = arlprice($p401);
                    $p402 = btsprice($p402);
                    $p403 = mrtprice($p403);
                    $pall4 = $p401 + $p402 + $p403 ;
                    
                    $price = min($pall1,$pall2,$pall3,$pall4);
                    $price1 = 0;
                    $price2 = 0;
                    $price3 = 0;
                    $num1 = 0;
                    $num2 = 0;
                    $num3 = 0;
                    $time1 = 0;
                    $time2 = 0;
                    $time3 = 0;

                    if($price == $pall1){
                        $how = 1;
                        arl($idstart,"4602",1);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก ARL มักกะสัน ไป MRT เพชรบุรี เดินประมาณ 10 นาที-</font>';   
                        $timex = 10;  
                        $how = 2;
                        mrt("4601",$idstop,1);
                    }
                    else if($price == $pall2){
                        $how = 1;
                        arl($idstart,"4302",1);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก ARL พญาไท ไป BTS พญาไท เดินประมาณ 7 นาที-</font>';        
                        $how = 3;
                        bts("4301","4202",1);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS หมอชิต ไป MRT จตุจักร เดินประมาณ 5 นาที-</font>';   
                        $timex = 12;      
                        $how = 2;
                        mrt("4201",$idstop,1);
                    }
                    else if($price == $pall3){
                        $how = 1;
                        arl($idstart,"4302",1);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก ARL พญาไท ไป BTS พญาไท เดินประมาณ 7 นาที-</font>';   
                        $how = 3;
                        bts("4301","4802",1);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS ห้าแยกลาดพร้าว ไป MRT พหลโยธิน  เดินประมาณ 8 นาที-</font>';   
                        $how = 2;
                        $timex = 15;
                        mrt("4801",$idstop,1);
                    }
                    else if($price == $pall4){
                        $how = 1;
                        arl($idstart,"4302",1);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก ARL พญาไท ไป BTS พญาไท เดินประมาณ 7 นาที-</font>';   
                        $how = 3;
                        bts("4301","4502",1);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS ศาลาแดง ไป MRT สีลม  เดินประมาณ 10 นาที-</font>';  
                        $how = 2;
                        $timex = 17;
                        mrt("4501",$idstop,1);
                    }

                    }

                    //stopbts
                    else if($stopp == 1 || $stopa == "1" || ( 1000 < $idstop && $idstop < 2000 ) ){
                    //เคสเปลี่ยนสถานีที่มักกะสัน-อโศก-บี
                    $how = 4;
                    $p101 = arl($idstart,"4602",1);
                    $how = 4;
                    $p102 = mrt("4601","4701",1);
                    $how = 4;
                    $p103 = bts("4702",$idstop,1);
                    $p101 = arlprice($p101);
                    $p102 = mrtprice($p102);
                    $p103 = btsprice($p103);

                    $pall1 = $p101 + $p102 + $p103 ;
                    

                    //เคสไปมักกะสัน-พหลโยธิน-บี
                    $how = 4;
                    $p201 = arl($idstart,"4602",1);
                    $how = 4;
                    $p202 = mrt("4601","4801",1);
                    $how = 4;
                    $p203 = bts("4802",$idstop,1);
                    $p201 = arlprice($p201);
                    $p202 = mrtprice($p202);
                    $p203 = btsprice($p203);
                    $pall2 = $p201 + $p202 + $p203;
                    

                    //เคสไปมักกสัน-จตุจักร-บี
                    $how = 4;
                    $p301 = arl($idstart,"4602",1);
                    $how = 4;
                    $p302 = mrt("4601","4201",1);
                    $how = 4;
                    $p303 = bts("4202",$idstop,1);
                    $p301 = arlprice($p301);
                    $p302 = mrtprice($p302);
                    $p303 = btsprice($p303);
                    $pall3 = $p301 + $p302 +$p303 ;
                    

                    //ไปมักกะสัน-สีลม-บี
                    $how = 4;
                    $p401 = arl($idstart,"4602",1);
                    $how = 4;
                    $p402 = mrt("4601","4501",1);
                    $how = 4;
                    $p403 = bts("4502",$idstop,1);
                    
                    $p401 = arlprice($p401);
                    $p402 = mrtprice($p402);
                    $p403 = btsprice($p403);
                    $pall4 = $p401 + $p402 +$p403 ;
                    

                    //ไปมักกะสัน-บางหว้า-บี
                    $how = 4;
                    $p501 = arl($idstart,"4602",1);
                    $how = 4;
                    $p502 = mrt("4601","4901",1);
                    $how = 4;
                    $p503 = bts("4902",$idstop,1);
                    $p501 = arlprice($p501);
                    $p502 = mrtprice($p502);
                    $p503 = btsprice($p503);
                    $pall5 = $p501 + $p502 +$p503 ;
                    

                    //ไปพญาไท-บี
                    $how = 4;
                    $p601 = arl($idstart,"4302",1);
                    $how = 4;
                    $p602 = bts("4301",$idstop,1);
                    $p601 = arlprice($p601);
                    $p602 = mrtprice($p602);
                    $pall6 = $p601 + $p602 ;
                    
                    
                    $price = min($pall1,$pall2,$pall3,$pall4,$pall5,$pall6);
                    $price1 = 0;
                    $price2 = 0;
                    $price3 = 0;
                    $num1 = 0;
                    $num2 = 0;
                    $num3 = 0;
                    $time1 = 0;
                    $time2 = 0;
                    $time3 = 0;
                    

                    if($price == $pall1){
                    $how = 1;
                    arl($idstart,"4602",1);
                    echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก ARL มักกะสัน ไป MRT เพชรบุรี เดินประมาณ 10 นาที-</font>';
                    $how = 3;
                    mrt("4601","4701",1);
                    echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT สุขุมวิท  ไป BTS อโศก เดินประมาณ 10 นาที-</font>'; 
                    $how = 2;
                    $timex = 20;
                    bts("4702",$idstop,1);
                    }
                    else if($price == $pall2){
                    $how = 1;
                    arl($idstart,"4602",1);
                    echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก ARL มักกะสัน ไป MRT เพชรบุรี เดินประมาณ 10 นาที-</font>';  
                    $how = 3;
                    mrt("4601","4801",1);
                    echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT พหลโยธิน ไป BTS ห้าแยกลาดพร้าว เดินประมาณ 8 นาที-</font>';  
                    $how = 2;
                    $timex = 18;
                    bts("4802",$idstop,1);
                    }
                    else if($price == $pall3){
                    $how = 1;
                    arl($idstart,"4602",1);
                    echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก ARL มักกะสัน ไป MRT เพชรบุรี เดินประมาณ 10 นาที-</font>';
                    $how = 3;
                    mrt("4601","4201",1);
                    echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT สวนจตุจักร ไป BTS หมอชิต เดินประมาณ 5 นาที-</font>';   
                    $how = 2;
                    $timex = 15;
                    bts("4202",$idstop,1);
                    }
                    else if($price == $pall4){
                    $how = 1;
                    arl($idstart,"4602",1);
                    echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก ARL มักกะสัน ไป MRT เพชรบุรี เดินประมาณ 10 นาที-</font>';  
                    $how = 3;
                    mrt("4601","4501",1);
                    echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT สีลม ไป BTS ศาลาแดง เดินประมาณ 10 นาที-</font>';   
                    $how = 2;
                    $timex = 20;
                    bts("4502",$idstop,1);
                    }
                    else if($price == $pall5){
                    $how = 1;
                    arl($idstart,"4602",1);
                    echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก ARL มักกะสัน ไป MRT เพชรบุรี เดินประมาณ 10 นาที-</font>';  
                    $how = 3;
                    mrt("4601","4901",1);
                    echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT บางหว้า ไป BTS บางหว้า เดินประมาณ 5 นาที-</font>';  
                    $how = 2;
                    $timex = 15;
                    bts("4902",$idstop,1);
                    }
                    else if($price == $pall6){
                    $how = 1;
                    arl($idstart,"4302",1);
                    echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก ARL พญาไท ไป BTS พญาไท เดินประมาณ 7 นาที-</font>';  
                    $how = 2;
                    $timex = 7;
                    bts("4301",$idstop,1);
                    }
                }

                
                }
                
                
                //start:MRT
                else if($startt == 2 || $starta == "2" || ( 2000 < $idstart && $idstart < 3000 ) ){ 
                    //stoparl
                    if ($stopp == 3 || $stopa == "3" || ( 3000 < $idstop && $idstop < 4000 ) ){
                    //เคสเปลี่ยนสถานีที่หมอชิต-พญาไท-แอลิ้ง
                    $how = 4;
                    $p101 = mrt($idstart,"4201",1);
                    $how = 4;
                    $p102 = bts("4202","4301",1);
                    $how = 4;
                    $p103 = arl("4302",$idstop,1);
                    $p101 = mrtprice($p101);
                    $p102 = btsprice($p102);
                    $p103 = arlprice($p103);

                    $pall1 = $p101 + $p102 + $p103 ;
                    

                    //เคสไปพหล-พญาไท-แอลิ้ง
                    $how = 4;
                    $p201 = mrt($idstart,"4801",1);
                    $how = 4;
                    $p202 = bts("4802","4301",1);
                    $how = 4;
                    $p203 = arl("4302",$idstop,1);
                    $p201 = mrtprice($p201);
                    $p202 = btsprice($p202);
                    $p203 = arlprice($p203);
                    $pall2 = $p201 + $p202 + $p203;
                    

                    //เคสไปเพชรบุรี-มักสัน-แอลิ้ง
                    $how = 4;
                    $p301 = mrt($idstart,"4601",1);
                    $how = 4;
                    $p302 = arl("4602",$idstop,1);
                    $p301 = mrtprice($p301);
                    $p302 = arlprice($p302);
                    $pall3 = $p301 + $p302 ;
                    

                    //ไปศาลาแดง-พญาไท-แอลิ้ง
                    $how = 4;
                    $p401 = mrt($idstart,"4501",1);
                    $how = 4;
                    $p402 = bts("4502","4301",1);
                    $how = 4;
                    $p403 = arl("4302",$idstop,1);
                    
                    $p401 = mrtprice($p401);
                    $p402 = btsprice($p402);
                    $p403 = arlprice($p403);
                    $pall4 = $p401 + $p402 +$p403 ;
                    

                    //ไปบางหว้า-พญาไท-แอลิ้ง
                    $how = 4;
                    $p501 = mrt($idstart,"4901",1);
                    $how = 4;
                    $p502 = bts("4902","4301",1);
                    $how = 4;
                    $p503 = arl("4302",$idstop,1);
                    $p501 = mrtprice($p501);
                    $p502 = btsprice($p502);
                    $p503 = arlprice($p503);
                    $pall5 = $p501 + $p502 +$p503 ;
                    
                    
                    
                    $price = min($pall1,$pall2,$pall3,$pall4,$pall5);
                    $price1 = 0;
                    $price2 = 0;
                    $price3 = 0;
                    $num1 = 0;
                    $num2 = 0;
                    $num3 = 0;
                    $time1 = 0;
                    $time2 = 0;
                    $time3 = 0;
                    

                    if($price == $pall1){
                    $how = 1;
                    mrt($idstart,"4201",1);
                    echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT สวนจตุจักร ไป BTS หมอชิต เดินประมาณ 5 นาที-</font>';   
                    $how = 3;
                    bts("4202","4301",1);
                    echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS พญาไท ไป ARL พญาไท เดินประมาณ 7 นาที-</font>';   
                    $how = 2;
                    $timex = 12;
                    arl("4302",$idstop,1);
                    }
                    else if($price == $pall2){
                    $how = 1;
                    mrt($idstart,"4801",1);
                    echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT พหลโยธิน ไป BTS ห้าแยกลาดพร้าว เดินประมาณ 8 นาที-</font>'; 
                    $how = 3;
                    bts("4802","4301",1);
                    echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS พญาไท ไป ARL พญาไท เดินประมาณ 7 นาที-</font>';    
                    $how = 2;
                    $timex = 15;
                    arl("4302",$idstop,1);
                    }
                    else if($price == $pall3){
                    $how = 1;
                    mrt($idstart,"4601",1);
                    echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT เพชรบุรี ไป ARL มักกะสัน เดินประมาณ 10 นาที-</font>';  
                    $how = 2;
                    $timex = 10;
                    arl("4602",$idstop,1);
                    }
                    else if($price == $pall4){
                    $how = 1;
                    mrt($idstart,"4501",1);
                    echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT สีลม ไป BTS ศาลาแดง เดินประมาณ 10 นาที-</font>';   
                    $how = 3;
                    bts("4502","4301",1);
                    echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS พญาไท ไป MRT พญาไท เดินประมาณ 7 นาที-</font>';    
                    $how = 2;
                    $timex = 17;
                    arl("4302",$idstop,1);
                    }
                    else if($price == $pall5){
                        $how = 1;
                        mrt($idstart,"4901",1);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT บางหว้า ไป BTS บางหว้า เดินประมาณ 5 นาที-</font>';  
                        $how = 3;
                        bts("4902","4301",1);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS พญาไท ไป MRT พญาไท เดินประมาณ 7 นาที-</font>';   
                        $how = 2;
                        $timex = 12;
                        arl("4302",$idstop,1);
                    }
                    
                    }

                    //stopbts
                    else if($stopp == 1 || $stopa == "1" || ( 1000 < $idstop && $idstop < 2000 ) ){
                    //เคสเปลี่ยนสถานีที่จตุจัก-หมอชิต-บี
                    $how = 4;
                    $p101 = mrt($idstart,"4201",1);
                    $how = 4;
                    $p102 = bts("4202",$idstop,1);
                    $p101 = mrtprice($p101);
                    $p102 = btsprice($p102);
                    $pall1 = $p101 + $p102 ;
                    

                    //เคสไปลาดพร้าว-บี
                    $how = 4;
                    $p201 = mrt($idstart,"4801",1);
                    $how = 4;
                    $p202 = bts("4802",$idstop,1);
                    $p201 = mrtprice($p201);
                    $p202 = btsprice($p202);
                    $pall2 = $p201 + $p202 ;
                    

                    //เคสไปมักกสัน-พญาไท-บี
                    $how = 4;
                    $p301 = mrt($idstart,"4601",1);
                    $how = 4;
                    $p302 = arl("4602","4302",1);
                    $how = 4;
                    $p303 = bts("4301",$idstop,1);
                    $p301 = mrtprice($p301);
                    $p302 = arlprice($p302);
                    $p303 = btsprice($p303);
                    $pall3 = $p301 + $p302 + $p303 ;
                    

                    //ไปสุขุมวิท-บี
                    $how = 4;
                    $p401 = mrt($idstart,"4701",1);
                    $how = 4;
                    $p402 = bts("4702",$idstop,1);
                    $p401 = mrtprice($p401);
                    $p402 = btsprice($p402);
                    $pall4 = $p401 + $p402 ;
                    

                    //ไปสีลม-บี
                    $how = 4;
                    $p501 = mrt($idstart,"4501",1);
                    $how = 4;
                    $p502 = bts("4502",$idstop,1);
                    $p501 = mrtprice($p501);
                    $p502 = btsprice($p502);
                    $pall5 = $p501 + $p502 ;
                    

                    //ไปบางหว้า-บี
                    $how = 4;
                    $p601 = mrt($idstart,"4901",1);
                    $how = 4;
                    $p602 = bts("4902",$idstop,1);
                    $p601 = mrtprice($p601);
                    $p602 = btsprice($p602);
                    $pall6 = $p601 + $p602 ;
                    
                    
                    $price = min($pall1,$pall2,$pall3,$pall4,$pall5,$pall6);
                    $price1 = 0;
                    $price2 = 0;
                    $price3 = 0;
                    $num1 = 0;
                    $num2 = 0;
                    $num3 = 0;
                    $time1 = 0;
                    $time2 = 0;
                    $time3 = 0;
                    

                    if($price == $pall1){
                    $how = 1;
                    mrt($idstart,"4201",1);
                    echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT สวนจตุจักร ไป BTS หมอชิต เดินประมาณ 5 นาที-</font>';   
                    $how = 2;
                    $timex = 5;
                    bts("4202",$idstop,1);
                    }
                    else if($price == $pall2){
                        $how = 1;
                        mrt($idstart,"4801",1);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT พหลโยธิน ไป BTS ห้าแยกลาดพร้าว เดินประมาณ 8 นาที-</font>'; 
                        $how = 2;
                        $timex = 8;
                        bts("4802",$idstop,1);
                    }
                    else if($price == $pall3){
                        $how = 1;
                        mrt($idstart,"4601",1);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT เพชรบุรี ไป ARL มักกะสัน เดินประมาณ 10 นาที-</font>';  
                        $how = 3;
                        arl("4602","4302",1);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก ARL พญาไท ไป BTS พญาไท เดินประมาณ 7 นาที-</font>'; 
                        $how = 2;
                        $timex = 17;
                        bts("4301",$idstop,1);
                    }
                    else if($price == $pall4){
                        $how = 1;
                        mrt($idstart,"4701",1);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT สุขุมวิท ไป BTS อโศก เดินประมาณ 10 นาที-</font>';  
                        $how = 2;
                        $timex = 10;
                        bts("4702",$idstop,1);
                    }
                    else if($price == $pall5){
                        $how = 1;
                        mrt($idstart,"4501",1);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT สีลม ไป BTS ศาลาแดง เดินประมาณ 10 นาที-</font>';  
                        $how = 2;
                        $timex = 10;
                        bts("4502",$idstop,1);
                    }
                    else if($price == $pall6){
                        $how = 1;
                        mrt($idstart,"4901",1);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT บางหว้า ไป BTS บางหว้า เดินประมาณ 5 นาที-</font>';
                        $how = 2;
                        $timex = 5;
                        bts("4902",$idstop,1);
                    }
                    }
                }


                //start:BTS
                else {
                    //stopmrt
                    if ($stopp == 2 || $stopa == "2" || ( 2000 < $idstop && $idstop < 3000 ) ){
                    //เคสไปพญาไท-มักกะสัน-เอ็ม
                    $how = 4;
                    $p101 = bts($idstart,"4301",1);
                    $how = 4;
                    $p102 = arl("4302","4602",1);
                    $how = 4;
                    $p103 = mrt("4601",$idstop,1);
                    $p101 = btsprice($p101);
                    $p102 = arlprice($p102);
                    $p103 = mrtprice($p103);
                    $pall1 = $p101 + $p102 + $p103;

                    //เคสไปพหล-ห้าแยก-เอ็ม
                    $how = 4;
                    $p201 = bts($idstart,"4802",1);
                    $how = 4;
                    $p202 = mrt("4801",$idstop,1);
                    $p201 = btsprice($p201);
                    $p202 = mrtprice($p202);
                    $pall2 = $p201 + $p202 ;

                    //เคสไปจตุจักร-เอ็ม
                    $how = 4;
                    $p301 = bts($idstart,"4202",1);
                    $how = 4;
                    $p302 = mrt("4201",$idstop,1);
                    $p301 = btsprice($p301);
                    $p302 = mrtprice($p302);
                    $pall3 = $p301 + $p302 ;

                    //เคสไปอโศก-สุขุมวิท-เอ็ม
                    $how = 4;
                    $p401 = bts($idstart,"4702",1);
                    $how = 4;
                    $p402 = mrt("4701",$idstop,1);
                    $p401 = btsprice($p401);
                    $p402 = mrtprice($p402);
                    $pall4 = $p401 + $p402 ;

                    //เคสไปสีลม-เอ็ม
                    $how = 4;
                    $p501 = bts($idstart,"4502",1);
                    $how = 4;
                    $p502 = mrt("4501",$idstop,1);
                    $p501 = btsprice($p501);
                    $p502 = mrtprice($p502);
                    $pall5 = $p501 + $p502 ;

                    //เคสไปบางหว้า-เอ็ม
                    $how = 4;
                    $p601 = bts($idstart,"4902",1);
                    $how = 4;
                    $p602 = mrt("4901",$idstop,1);
                    $p601 = btsprice($p601);
                    $p602 = mrtprice($p602);
                    $pall6 = $p601 + $p602 ;

                    $price = min($pall1,$pall2,$pall3,$pall4,$pall5,$pall6);
                    $price1 = 0;
                    $price2 = 0;
                    $price3 = 0;
                    $num1 = 0;
                    $num2 = 0;
                    $num3 = 0;
                    $time1 = 0;
                    $time2 = 0;
                    $time3 = 0;
                    

                    if($price == $pall1){
                        $how = 1;
                        bts($idstart,"4301",1);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS พญาไท ไป ARL พญาไท เดินประมาณ 7 นาที-</font>';  
                        $how = 3;
                        arl("4302","4602",1);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก ARL มักกะสัน ไป MRT เพชรบุรี เดินประมาณ 10 นาที-</font>';   
                        $how = 2;
                        $timex = 17;
                        mrt("4601",$idstop,1);
                    }
                    else if($price == $pall2){
                        $how = 1;
                        bts($idstart,"4802",1);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS ห้าแยกลาดพร้าว ไป MRT พหลโยธิน เดินประมาณ 8 นาที-</font>'; 
                        $how = 2;
                        $timex = 8;
                        mrt("4801",$idstop,1);
                    }
                    else if($price == $pall3){
                        $how = 1;
                        bts($idstart,"4202",1);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS หมอชิต ไป MRT จตุจักร เดินประมาณ 5 นาที-</font>';  
                        $how = 2;
                        $timex = 5;
                        mrt("4201",$idstop,1);
                    }
                    else if($price == $pall4){
                        $how = 1;
                        bts($idstart,"4702",1);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS อโศก ไป MRT สุขุมวิท เดินประมาณ 10 นาที-</font>';   
                        $how = 2;
                        $timex = 10;
                        mrt("4701",$idstop,1);
                    }
                    else if($price == $pall5){
                        $how = 1;
                        bts($idstart,"4502",1);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS ศาลาแดง ไป MRT สีลม เดินประมาณ 10 นาที-</font>';   
                        $how = 2;
                        $timex = 10;
                        mrt("4501",$idstop,1);
                    }
                    else if($price == $pall6){
                        $how = 1;
                        bts($idstart,"4902",1);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS บางหว้า ไป MRT บางหว้า เดินประมาณ 5 นาที-</font>';  
                        $how = 2;
                        $timex = 5;
                        mrt("4901",$idstop,1);
                    }
                    

                    }

                    //stoparl
                    else if($stopp == 3 || $stopa == "3" || ( 3000 < $idstop && $idstop < 4000 ) ){
                    //เคสเปลี่ยนสถานีที่พญาไท-แอลิ้ง
                    $how = 4;
                    $p101 = bts($idstart,"4301",1);
                    $how = 4;
                    $p102 = arl("4302",$idstop,1);
                    $p101 = btsprice($p101);
                    $p102 = arlprice($p102);
                    $pall1 = $p101 + $p102 ;

                    //เคสไปห้าแยก-พหล-มักกะสัน-แอลิ้ง
                    $how = 4;
                    $p201 = bts($idstart,"4802",1);
                    $how = 4;
                    $p202 = mrt("4801","4601",1);
                    $how = 4;
                    $p203 = arl("4602",$idstop,1);
                    $p201 = btsprice($p201);
                    $p202 = mrtprice($p202);
                    $p203 = arlprice($p203);
                    $pall2 = $p201 + $p202 + $p203 ;

                    //เคสไปหมอชิต-มักกะสัน-แอลิ้ง
                    $how = 4;
                    $p301 = bts($idstart,"4202",1);
                    $how = 4;
                    $p302 = mrt("4201","4601",1);
                    $how = 4;
                    $p303 = arl("4602",$idstop,1);
                    $p301 = btsprice($p301);
                    $p302 = mrtprice($p302);
                    $p303 = arlprice($p303);
                    $pall3 = $p301 + $p302 + $p303 ;

                    //เคสไปอโศก-มักกะสัน-แอลิ้ง
                    $how = 4;
                    $p401 = bts($idstart,"4702",1);
                    $how = 4;
                    $p402 = mrt("4701","4601",1);
                    $how = 4;
                    $p403 = arl("4602",$idstop,1);
                    $p401 = btsprice($p401);
                    $p402 = mrtprice($p402);
                    $p403 = arlprice($p403);
                    $pall4 = $p401 + $p402 + $p403 ;

                    //เคสไปสีลม-มักกะสัน-แอลิ้ง
                    $how = 4;
                    $p501 = bts($idstart,"4502",1);
                    $how = 4;
                    $p502 = mrt("4501","4601",1);
                    $how = 4;
                    $p503 = arl("4602",$idstop,1);
                    $p501 = btsprice($p501);
                    $p502 = mrtprice($p502);
                    $p503 = arlprice($p503);
                    $pall5 = $p501 + $p502 + $p503 ;

                    //เคสไปบางหว้า-มักกะสัน-แอลิ้ง
                    $how = 4;
                    $p601 = bts($idstart,"4902",1);
                    $how = 4;
                    $p602 = mrt("4901","4601",1);
                    $how = 4;
                    $p603 = arl("4602",$idstop,1);
                    $p601 = btsprice($p601);
                    $p602 = mrtprice($p602);
                    $p603 = arlprice($p603);
                    $pall6 = $p601 + $p602 + $p603 ;

                    //เคสไปบางหว้า-สีลม-พญาไท-แอลิ้ง
                    $how = 4;
                    $p701 = bts($idstart,"4902",1);
                    $how = 4;
                    $p702 = mrt("4901","4501",1);
                    $how = 4;
                    $p703 = bts("4502","4301",1);
                    $how = 4;
                    $p704 = arl("4302",$idstop,1);
                    $p701 = btsprice($p701);
                    $p702 = mrtprice($p702);
                    $p703 = btsprice($p703);
                    $p704 = arlprice($p704);
                    $pall7 = $p701 + $p702 + $p703 + $p704 ;

                    $price = min($pall1,$pall2,$pall3,$pall4,$pall5,$pall6,$pall7);
                    $price1 = 0;
                    $price2 = 0;
                    $price3 = 0;
                    $num1 = 0;
                    $num2 = 0;
                    $num3 = 0;
                    $time1 = 0;
                    $time2 = 0;
                    $time3 = 0;
                    

                    if($price == $pall1){
                        $how = 1;
                        bts($idstart,"4301",1);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS พญาไท ไป ARL พญาไท เดินประมาณ 7 นาที-</font>';   
                        $how = 2;
                        $timex = 7;
                        arl("4302",$idstop,1);
                    }
                    else if($price == $pall2){
                        $how = 1;
                        bts($idstart,"4802",1);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS ห้าแยกลาดพร้าว ไป MRT พหลโยธิน เดินประมาณ 8 นาที-</font>'; 
                        $how = 3;
                        mrt("4801","4601",1);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT เพชรบุรี ไป ARL มักกะสัน เดินประมาณ 10 นาที-</font>';  
                        $how = 2;
                        $timex = 18;
                        arl("4602",$idstop,1);
                    }
                    else if($price == $pall3){
                        $how = 1;
                        bts($idstart,"4202",1);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS หมอชิต ไป MRT สวนจตุจักร เดินประมาณ 5 นาที-</font>';  
                        $how = 3;
                        mrt("4201","4601",1);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT เพชรบุรี ไป ARL มักกะสัน เดินประมาณ 10 นาที-</font>';   
                        $how = 2;
                        $timex = 15;
                        arl("4602",$idstop,1);
                    }
                    else if($price == $pall4){
                        $how = 1;
                        bts($idstart,"4702",1);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS อโศก ไป MRT สุขุมวิท เดินประมาณ 10 นาที-</font>';  
                        $how = 3;
                        mrt("4701","4601",1);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT เพชรบุรี ไป ARL มักกะสัน เดินประมาณ 10 นาที-</font>';  
                        $how = 2;
                        $timex = 20;
                        arl("4602",$idstop,1);
                    }
                    else if($price == $pall5){
                        $how = 1;
                        bts($idstart,"4502",1);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS ศาลาแดง ไป MRT สีลม เดินประมาณ 10 นาที-</font>'; 
                        $how = 3;
                        mrt("4501","4601",1);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT เพชรบุรี ไป ARL มักกะสัน เดินประมาณ 10 นาที-</font>';    
                        $how = 2;
                        $timex = 20;
                        arl("4602",$idstop,1);
                    }
                    else if($price == $pall6){
                        $how = 1;
                        bts($idstart,"4902",1);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS บางหว้า ไป MRT บางหว้า เดินประมาณ 5 นาที-</font>';  
                        $how = 3;
                        mrt("4901","4601",1);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT เพชรบุรี ไป ARL มักกะสัน เดินประมาณ 10 นาที-</font>'; 
                        $how = 2;
                        $timex = 15;
                        arl("4602",$idstop,1);
                    }
                    else if($price == $pall7){
                        $how = 1;
                        ts($idstart,"4902",1);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS บางหว้า ไป MRT บางหว้า เดินประมาณ 5 นาที-</font>';  
                        $how = 3;
                        mrt("4901","4501",1);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก MRT สีลม ไป BTS ศาลาแดง เดินประมาณ 10 นาที-</font>';    
                        $how = 3;
                        bts("4502","4301",1);
                        echo '<br><font color=#cc6600> &emsp;&emsp;&emsp;&emsp;&emsp; - เปลี่ยนขบวนจาก BTS พญาไท ไป ARL พญาไท เดินประมาณ 7 นาที-</font>';   
                        $how = 2;
                        $timex = 22;
                        arl("4302",$idstop,1);
                    }

                    }

                }




                


                echo '<br /> '.'<br /> '."<img src='image/stop.png' width='40px;'/>"."<font color=#000000 size='4pt'><b style='background:whitesmoke'>&emsp;$stopname &emsp;</b></font>";
                echo '<br /> '.'<br /> ';
            }

    ?>


</html>
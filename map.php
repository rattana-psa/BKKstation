<html>

<head>
  <title>🚝RodFaiFah</title>
  <link href="https://fonts.googleapis.com/css?family=Pridi&display=swap" rel="stylesheet">
  <style>

      
    .modal {
      display: none;
      position: fixed;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
    }

    /* Display the modal when targeted */
    .modal:target {
      display: table;
      position: absolute;
    }

    /* The modal box */
    .modal-dialog {
      display: table-cell;
      vertical-align: top;
    }

    /* The modal's content */
    .modal-dialog .modal-content {
      margin: auto;
      background-color: white;
      position: relative;
      padding: 0;
      outline: 0;
      border: 1px #777 solid;
      text-align: justify;
      width: 50%;
      margin: 5% auto auto auto; /* 5% from the top, 15% from the bottom and centered */
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .closebtn {
      text-decoration: none;
      float: right;
      font-size: 3.5vw;
      font-weight: bold;
      color: black;
    }

    .closebtn:hover,
    .closebtn:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }

    .container {
      padding: 2px 5px;

    }

    header {
      font-family: 'Pridi', serif;
      background-color: whitesmoke;
      font-size: 15px;
      color: black;
      padding: 2px 16px;
    }

    div.relative {
      position: relative;
      left: 0px;
    }

    .column {
      float: left;
      width: 50%;
      height: 100px;
      background-color: whitesmoke;
      box-sizing: border-box;
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    @media screen and (max-width:700px) {
      .column {
        float: center;
        width: 100%;
        height: auto;
        background-color: white;
        box-sizing: border-box;
      }

      header {
        font-family: 'Pridi', serif;
        background-color: whitesmoke;
        font-size: 11px;
        color: black;
        padding: 2px 16px;
      }
    }

    h1 {
      padding-left: 20px;
      font-size: 20px;
      font-family: 'Pridi', serif;
    }

    p {
      
      padding-left: 25px;
      font-size: 16px;
      font-family: 'Pridi', serif;
    }
  
    .fixed-bottom{
    position:fixed;
    right:0;
    bottom:0;
    left:5px;
    z-index:1030;
    }

    .button {
        background-color: #000000;
        height: 40px;
        width: 40px;
        border: none;
        color: white;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 20px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 50%;
    }


  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>
        var currFFZoom = 1;
        var currIEZoom = 100;

        function plus(){
                var step = 0.05; // สำหรับ FF
                currFFZoom += step;
                $('body').css('MozTransform','scale(' + currFFZoom + ')');
                var stepie = 5; // สำรับ IE
                currIEZoom += stepie;
                $('body').css('zoom', ' ' + currIEZoom + '%');

        };
        function minus(){
                var step = 0.05;
                currFFZoom -= step;
                $('body').css('MozTransform','scale(' + currFFZoom + ')');
                var stepie = 5;
                currIEZoom -= stepie;
                $('body').css('zoom', ' ' + currIEZoom + '%');
        };
    </script>
    </head>
  <!--<script>popupwindow("mrt2.php", "_blank", 200, 300)</script>-->

<body>
    <div class="fixed-bottom">

    <button type="button" class="button" id="plusBtn" onclick="plus()"> + </button> 
    <button type="button" class="button" id="minusBtn" onclick="minus()"> - </button>     

    </div>

    <div class="relative">
    <img src="image/7.jpg" width="1508" height="835" alt="" usemap="#image-map" id="kkx">
    <map name="image-map">
      <!--mrt purple line-->
      <area alt="คลองบางไผ่" title="คลองบางไผ่" href="#id55" coords="37,17,10" shape="circle">
      <area alt="ตลาดบางใหญ่" title="ตลาดบางใหญ่" href="#id56" coords="37,53,10" shape="circle">
      <area alt="สามแยกบางใหญ่" title="สามแยกบางใหญ่" href="#id57" coords="58,83,10" shape="circle">
      <area alt="บางพลู" title="บางพลู" href="#id58" coords="112,83,10" shape="circle">
      <area alt="บางรักใหญ่" title="บางรักใหญ่" href="#id59" coords="155,83,10" shape="circle">
      <area alt="บางรักน้อยท่าอิฐ" title="บางรักน้อยท่าอิฐ" href="#id60" coords="200,84,10" shape="circle">
      <area alt="ไทรม้า" title="ไทรม้า" href="#id61" coords="246,84,10" shape="circle">
      <area alt="สะพานพระนั่งเกล้า" title="สะพานพระนั่งเกล้า" href="#id62" coords="293,84,10" shape="circle">
      <area alt="แยกนนทบุรี 1" title="แยกนนทบุรี 1" href="#id63" coords="342,84,10" shape="circle">
      <area alt="บางกระสอ" title="บางกระสอ" href="#id64" coords="378,84,10" shape="circle">
      <area alt="ศูนย์ราชการนนทบุรี" title="ศูนย์ราชการนนทบุรี" href="#id65" coords="436,84,10" shape="circle">
      <area alt="กระทรวงสาธารณสุข" title="กระทรวงสาธารณสุข" href="#id67" coords="409,116,10" shape="circle">
      <area alt="แยกติวานนท์" title="แยกติวานนท์" href="#id68" coords="445,140,10" shape="circle">
      <area alt="วงศ์สว่าง" title="วงศ์สว่าง" href="#id69" coords="490,160,10" shape="circle">
      <area alt="บางซ่อน" title="บางซ่อน" href="#id70" coords="532,181,10" shape="circle">
      <area alt="เตาปูน" title="เตาปูน" href="#id71" coords="532,218,10" shape="circle">
      <area alt="เตาปูน" title="เตาปูน" href="#id72" coords="533,244,10" shape="circle">
      <!--mrt blue line--
            <area target="_blank" alt="บางโพ" title="บางโพ" href="http://www.google.com" coords="631,346,15" shape="circle">
            <area target="_blank" alt="บางอ้อ" title="บางอ้อ" href="http://www.google.com" coords="585,373,15" shape="circle">
            <area target="_blank" alt="บางพลัด" title="บางพลัด" href="http://www.google.com" coords="535,406,15" shape="circle">
            <area target="_blank" alt="สิรินธร" title="สิรินธร" href="http://www.google.com" coords="533,481,15" shape="circle">
            <area target="_blank" alt="บางยี่ขัน" title="บางยี่ขัน" href="http://www.google.com" coords="532,556,15" shape="circle">
            <area target="_blank" alt="บางขุนนนท์" title="บางขุนนนท์" href="http://www.google.com" coords="534,633,15" shape="circle">
            <area target="_blank" alt="ไฟฉาย" title="ไฟฉาย" href="http://www.google.com" coords="533,714,15" shape="circle">
            <area target="_blank" alt="จรัญฯ 13" title="จรัญฯ 13" href="http://www.google.com" coords="533,795,15" shape="circle">
            <!มันยังไม่เปิดด-->
      <area alt="ท่าพระ" title="ท่าพระ" href="#id95" coords="418,651,10" shape="circle">
      <area alt="บางไผ่" title="บางไผ่" href="#id96" coords="376,652,10" shape="circle">
      <area alt="บางหว้า" title="บางหว้า" href="#id97" coords="328,652,10" shape="circle">
      <area alt="เพชรเกษม 48" title="เพชรเกษม 48" href="#id98" coords="253,652,10" shape="circle">
      <area alt="ภาษีเจริญ" title="ภาษีเจริญ" href="#id99" coords="190,652,10" shape="circle">
      <area alt="บางแค" title="บางแค" href="#id100" coords="128,652,10" shape="circle">
      <area alt="หลักสอง" title="หลักสอง" href="#id101" coords="77,652,10" shape="circle">

      <area  alt="บางซื่อ" title="บางซื่อ" href="#id73" coords="588,243,10" shape="circle">
      <area  alt="กำแพงเพชร" title="กำแพงเพชร" href="#id74" coords="655,241,10" shape="circle">
      <area  alt="สวนจตุจักร" title="สวนจตุจักร" href="#id75" coords="735,223,10" shape="circle">
      <area  alt="พหลโยธิน" title="พหลโยธิน" href="#id76" coords="735,173,10" shape="circle">
      <area  alt="ลาดพร้าว" title="ลาดพร้าว" href="#id77" coords="799,159,10" shape="circle">
      <area  alt="รัชดาภิเษก" title="รัชดาภิเษก" href="#id78" coords="858,165,10" shape="circle">
      <area  alt="สุทธิสาร" title="สุทธิสาร" href="#id79" coords="898,205,10" shape="circle">
      <area  alt="ห้วยขวาง" title="ห้วยขวาง" href="#id80" coords="905,265,10" shape="circle">
      <area  alt="ศูนย์วัฒนธรรมแห่งประเทศไทย" title="ศูนย์วัฒนธรรมแห่งประเทศไทย" href="#id81" coords="906,320,10" shape="circle">
      <area  alt="พระราม 9" title="พระราม 9" href="#id82" coords="906,374,10" shape="circle">
      <area  alt="เพชรบุรี" title="เพชรบุรี" href="#id83" coords="905,438,10" shape="circle">
      <area  alt="สุขุมวิท" title="สุขุมวิท" href="#id84" coords="906,533,10" shape="circle">
      <area  alt="ศูนย์การประชุมแห่งชาติสิริกิติ์" title="ศูนย์การประชุมแห่งชาติสิริกิติ์" href="#id85" coords="905,603,10" shape="circle">
      <area  alt="คลองเตย" title="คลองเตย" href="#id86" coords="858,603,10" shape="circle">
      <area  alt="ลุมพินี" title="ลุมพินี" href="#id87" coords="800,603,10" shape="circle">
      <area  alt="สีลม" title="สีลม" href="#id88" coords="748,603,10" shape="circle">
      <area  alt="สามย่าน" title="สามย่าน" href="#id89" coords="689,603,10" shape="circle">
      <area  alt="หัวลำโพง" title="หัวลำโพง" href="#id90" coords="629,603,10" shape="circle">
      <area  alt="วัดมังกร" title="วัดมังกร" href="#id91" coords="578,603,10" shape="circle">
      <area  alt="สามยอด" title="สามยอด" href="#id92" coords="530,603,10" shape="circle">
      <area  alt="สนามไชย" title="สนามไชย" href="#id93" coords="493,618,10" shape="circle">
      <area  alt="อิสระภาพ" title="อิสระภาพ" href="#id94" coords="460,635,10" shape="circle">

      <!--bts green line no38-->
      <area  alt="บางหว้า" title="บางหว้า" href="#id46" coords="326,674,10" shape="circle">
      <area  alt="วุฒากาศ" title="วุฒากาศ" href="#id45" coords="327,719,10" shape="circle">
      <area  alt="ตลาดพลู" title="ตลาดพลู" href="#id44" coords="373,747,10" shape="circle">
      <area  alt="โพธิ์นิมิตร" title="โพธิ์นิมิตร" href="#id43" coords="439,750,10" shape="circle">
      <area  alt="วงเวียนใหญ่" title="วงเวียนใหญ่" href="#id42" coords="504,748,10" shape="circle">
      <area  alt="กรุงธนบุรี" title="กรุงธนบุรี" href="#id41" coords="576,750,10" shape="circle">
      <area  alt="สะพานตากสิน" title="สะพานตากสิน" href="#id40" coords="648,749,10" shape="circle">
      <area  alt="สุรศักดิ์" title="สุรศักดิ์" href="#id39" coords="707,740,10" shape="circle">
      <area alt="ศึกษาวิทยา" title="ศึกษาวิทยา" coords="746,715,10" shape="circle">
      <area  alt="ช่องนนทรี" title="ช่องนนทรี" href="#id37" coords="747,669,10" shape="circle">
      <area  alt="ศาลาแดง" title="ศาลาแดง" href="#id36" coords="747,625,10" shape="circle">
      <area  alt="ราชดำริ" title="ราชดำริ" href="#id35" coords="747,558,10" shape="circle">
      <area alt="CEN" title="สยาม" href="#id10" coords="703,504,719,537" shape="rect">
      <area  alt="สนามกีฬาแห่งชาติ" title="สนามกีฬาแห่งชาติ" href="#id34" coords="634,531,10" shape="circle">
      <!--bts light green  line-->  <!-- ไม่มี 04 -->
      <area  alt="ห้าแยกลาดพร้าว" title="ห้าแยกลาดพร้าว" href="#id01" coords="711,171,10" shape="circle">
      <area  alt="หมอชิต" title="หมอชิต" href="#id02" coords="711,225,10" shape="circle">
      <area  alt="สะพานควาย" title="สะพานควาย" href="#id03" coords="711,263,10" shape="circle">
      <area alt="เสนาร่วม" title="เสนาร่วม" coords="711,269,10" shape="circle">
      <area  alt="อารีย์" title="อารีย์" href="#id05" coords="711,332,10" shape="circle">
      <area  alt="สนามเป้า" title="สนามเป้า" href="#id06" coords="711,365,10" shape="circle">
      <area  alt="อนุสาวรีย์ชัยสมรภูมิ" title="อนุสาวรีย์ชัยสมรภูมิ" href="#id07" coords="711,403,10" shape="circle">
      <area  alt="พญาไท" title="พญาไท" href="#id08" coords="711,437,10" shape="circle">
      <area  alt="ราชเทวี" title="ราชเทวี" href="#id09" coords="711,474,10" shape="circle">
      <area  alt="ชิดลม" title="ชิดลม" href="#id11" coords="758,506,10" shape="circle">
      <area  alt="เพลินจิต" title="เพลินจิต" href="#id12" coords="805,506,10" shape="circle">
      <area  alt="นานา" title="นานา" href="#id13" coords="855,508,10" shape="circle">
      <area  alt="อโศก" title="อโศก" href="#id14" coords="907,510,10" shape="circle">
      <area  alt="พร้อมพงษ์" title="พร้อมพงษ์" href="#id15" coords="951,506,10" shape="circle">
      <area  alt="ทองหล่อ" title="ทองหล่อ" href="#id16" coords="995,508,10" shape="circle">
      <area  alt="เอกมัย" title="เอกมัย" href="#id17" coords="1032,525,10" shape="circle">
      <area  alt="พระโขนง" title="พระโขนง" href="#id18" coords="1064,545,10" shape="circle">
      <area  alt="อ่อนนุช" title="อ่อนนุช" href="#id19" coords="1096,568,10" shape="circle">
      <area  alt="บางจาก" title="บางจาก" href="#id20" coords="1119,592,10" shape="circle">
      <area  alt="ปุณณวิถี" title="ปุณณวิถี" href="#id21" coords="1118,629,10" shape="circle">
      <area  alt="อุดมสุข" title="อุดมสุข" href="#id22" coords="1118,664,10" shape="circle">
      <area  alt="บางนา" title="บางนา" href="#id23" coords="1118,699,10" shape="circle">
      <area  alt="แบริ่ง" title="แบริ่ง" href="#id24" coords="1120,734,10" shape="circle">
      <area  alt="สำโรง" title="สำโรง" href="#id25" coords="1161,747,10" shape="circle">
      <area  alt="ปู่เจ้า" title="ปู่เจ้า" href="#id26" coords="1202,754,10" shape="circle">
      <area  alt="ช้างเอราวัณ" title="ช้างเอราวัณ" href="#id27" coords="1238,764,10" shape="circle">
      <area  alt="โรงเรียนนายเรือ" title="โรงเรียนนายเรือ" href="#id28" coords="1273,775,10" shape="circle">
      <area  alt="ปากน้ำ" title="ปากน้ำ" href="#id29" coords="1308,783,10" shape="circle">
      <area  alt="ศรีนครินทร์" title="ศรีนครินทร์" href="#id30" coords="1344,792,10" shape="circle">
      <area  alt="แพรกษา" title="แพรกษา" href="#id31" coords="1382,804,10" shape="circle">
      <area  alt="สายลวด" title="สายลวด" href="#id32" coords="1416,814,10" shape="circle">
      <area  alt="เคหะฯ" title="เคหะฯ" href="#id33" coords="1456,822,10" shape="circle">


      <!--ARL line-->
      <area  alt="สุวรรณภูมิ" title="สุวรรณภูมิ" href="#id47" coords="733,437,10" shape="circle">
      <area  alt="ลาดกระบัง" title="ลาดกระบัง" href="#id48" coords="814,437,10" shape="circle">
      <area  alt="บ้านทับช้าง" title="บ้านทับช้าง" href="#id49" coords="931,437,10" shape="circle">
      <area  alt="หัวหมาก" title="หัวหมาก" href="#id50" coords="1042,437,10" shape="circle">
      <area  alt="รามคำแหง" title="รามคำแหง" href="#id51" coords="1134,437,10" shape="circle">
      <area  alt="มักกะสัน" title="มักกะสัน" href="#id52" coords="1232,437,10" shape="circle">
      <area  alt="ราชปรารภ" title="ราชปรารภ" href="#id53" coords="1363,437,10" shape="circle">
      <area  alt="พญาไท" title="พญาไท" href="#id54" coords="1365,508,10" shape="circle">
    </map>

    <div id="id10" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Siam: สยาม</h2>
          </header>
          <div class="container" >
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column">
                <p>1️⃣Siam Center, ป้ายรถประจำทางไปราชประสงค์<br>
                </p>
              </div>
              <div class="column" >
                <p>2️⃣Siam Square ซอย 3 และซอย 4, ป้ายรถประจำทางไปสี่แยกปทุมวัน</p>
              </div>
              <div class="column" >
                <p>3️⃣Parc Paragon, Siam Paragon</p>
              </div>
              <div class="column" >
                <p>4️⃣Siam Square one, สยามสแควร์ซอย 5 และซอย 6</p>
              </div> 
              <div class="column" >
                <p>5️⃣Siam Paragon , วัดปทุมวนาราม, ป้ายรถประจำทางไปราชประสงค์</p>
              </div>
              <div class="column" >
                <p>6️⃣Siam Square ซอย 6, ถนนอังรีดูนังต์, Central World</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="id01" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Ha Yaek Lat Phrao: ห้าแยกลาดพร้าว </h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column">
                <p>1️⃣Central Plaza Lardprao, The one park<br>
                </p>
              </div>
              <div class="column" >
                <p>2️⃣คอนโดมิเนียม เอ็ม ลาดพร้าว</p>
              </div>
              <div class="column" >
                <p>3️⃣Centara Grand at Central Plaza Ladprao Bangkok</p>
              </div>
              <div class="column" >
                <p>4️⃣คอนโดมิเนียมไลฟ์ ลาดพร้าว<br></p>
              </div>
              <div class="column" >
                <p>5️⃣ โรงเรียนหอวัง, เทสโก้โลตัส สาขาลาดพร้าว</p>
              </div>
              <div class="column" >
                <p> 6️⃣ MRT สายสีน้ำเงิน สถานีพหลโยธิน, Union Mall</p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, สะพานลอย, ห้องน้ำ, ห้องพยาบาล</p>
          </div>
        </div>
       </div>
      </div>

    <div id="id02" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Mo Chit: หมอชิต </h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column">
                <p>1️⃣สวนจตุจักร, ตลาดนัดจตุจักร, ป้ายรถประจำทางไปห้าแยกลาดพร้าว, MRT สายสีน้ำเงิน สถานีจตุจักร
                  <br>
                </p>
              </div>
              <div class="column" >
                <p>2️⃣สถาบันการบินพลเรือน, ป้ายรถประจำทางไปสะพานควาย, MRT สายสีน้ำเงิน สถานีจตุจักร</p>
              </div>
              <div class="column" >
                <p>3️⃣สวนจตุจักร, ป้ายรถประจำทางไปห้าแยกลาดพร้าว, MRT สายสีน้ำเงิน สถานีจตุจักร</p>
              </div>
              <div class="column" >
                <p>4️⃣อาคารบีทีเอส, ป้ายรถประจำทางไปสะพานควายและสถานีขนส่งจตุจักร, MRT สายสีน้ำเงิน สถานีจตุจักร</p>
              </div>              
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, บันไดเลื่อน, ห้องพยาบาล, ATM, Sky Walk, AED</p>
          </div>
        </div>
       </div>
     </div>

    <div id="id03" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Saphan Khwai: สะพานควาย </h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column">
                <p>1️⃣ตลาดสะพานควาย, ถนนประดิพัทธ์, ที่ทำการไปรษณีย์สามเสนใน, ป้ายรถประจำทางสะพานควายไปหมอชิต
                  <br>
                </p>
              </div>
              <div class="column" >
                <p>2️⃣บิ๊กซี สะพานควาย, โรงพยาบาลเปาโลเมโมเรียล, ถนนสุทธิสารวินิจฉัย, ธนาคารออมสิน สำนักงานใหญ่, ป้ายรถประจำทางสะพานควายไปอารีย์</p>
              </div>
              <div class="column" >
                <p>3️⃣วัดไผ่ตัน, พิพิธภัณฑ์ไปรษณีย์สามเสน, ป้ายรถประจำทางวัดไผ่ตันไปหมอชิต</p>
              </div>
              <div class="column" >
                <p>4️⃣ไอดีโอมิกซ์ พหลโยธิน คอนโดมิเนียม,ป้ายรถประจำทางวัดไผ่ตันไปอารีย์
                </p>
              </div>              
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, บันไดเลื่อน, ห้องพยาบาล, ATM</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id05" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Ari: อารีย์ </h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column">
                <p>1️⃣อาคารปิยวรรณ, ซอยพหลโยธิน 5 </p>
              </div>
              <div class="column" >
                <p>2️⃣SME Tower, ธนาคารทหารไทย สาขาสนามเป้า</p>
              </div>
              <div class="column" >
                <p>3️⃣สหกรณ์พระนคร, ซอยพหลโยธิน 7, ป้ายรถประจำทางไปหมอชิต </p>
              </div>
              <div class="column" >
                <p>4️⃣อาคารไอ บี เอ็ม, ป้ายรถประจำทางไปอนุสาวรีย์ชัยสมรภูมิ  </p>
              </div>              
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, บันไดเลื่อน, ห้องพยาบาล, ATM</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id06" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Sanam Pao: สนามเป้า </h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column">
                <p>1️⃣โรงพยาบาลพญาไท 2, โชว์รูมรถยนต์ฮอนด้า, ป้ายรถประจำทางไปหมอชิต </p>
              </div>
              <div class="column" >
                <p>2️⃣กองพลทหารม้าที่ 2 รักษาพระองค์, สถานีวิทยุโทรทัศน์กองทัพบกช่อง 5, โทรทัศน์รวมการเฉพาะกิจแห่งประเทศไทย, ศูนย์ข่าววิทยุกองทัพบก, ป้ายรถประจำทางไปอนุสาวรีย์ชัยสมรภูมิ</p>
              </div>
              <div class="column" >
                <p>3️⃣ซอยพหลโยธิน 3, กิฟฟารีน, บรรษัทบริหารสินทรัพย์สถาบันการเงิน (บบส.), ป้ายรถประจำทางไปหมอชิต </p>
              </div>
              <div class="column" >
                <p>4️⃣อาคารแสงโสม ธนาคารกรุงศรีอยุธยา สาขาสนามเป้า, โชว์รูมรถยนต์โตโยต้า  </p>
              </div>              
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, บันไดเลื่อน, ห้องพยาบาล, ATM</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id07" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Victory Monument Station: อนุสาวรีย์ชัยสมรภูมิ </h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column">
                <p>1️⃣วิทยาลัยพยาบาลบรมราชชนนี กรุงเทพ, สำนักงานเขตราชเทวี, กรมแพทย์ทหารบก, ป้ายรถประจำทางไปอนุสาวรีย์ฯ </p>
              </div>
              <div class="column" >
                <p>2️⃣Century The Movie Plaza, รถรับ-ส่ง ไปยังคิง เพาเวอร์ คอมเพล็กซ์, PULLMAN BANGKOK KING POWER, ถนนรางน้ำ, ป้ายรถประจำทางไปราชเทวี</p>
              </div>
              <div class="column" >
                <p>3️⃣โรงพยาบาลราชวิถี </p>
              </div>
              <div class="column" >
                <p>4️⃣สมาคมผู้บำเพ็ญประโยชน์แห่งประเทศไทย  </p>
              </div>              
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, บันไดเลื่อน, ห้องพยาบาล, ATM, Sky Walk, AED</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id08" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Phaya Thai: พญาไท </h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column">
                <p>1️⃣คอนโดบ้านปทุมวัน, อาคารพญาไทพลาซ่า, จุดหยุดรถไฟพญาไทฝั่งใต้, ป้ายรถประจำทางไปอนุสาวรีย์ฯ </p>
              </div>
              <div class="column" >
                <p>2️⃣ที่ทำการไปรษณีย์ราชเทวี, จุดหยุดรถไฟพญาไทฝั่งเหนือ, ป้ายรถประจำทางไปราชเทวี</p>
              </div>
              <div class="column" >
                <p>3️⃣อาคารซี.พี.ทาวเวอร์ 3, สำนักงานคณะรรมการการอุดมศึกษา, ป้ายรถประจำทางไปสะพานเสาวนี-นางเลิ้ง </p>
              </div>
              <div class="column" >
                <p>4️⃣โรงแรมฟลอริดา, อาคารวรรณสรณ์, โรงแรมสยามซิตี้, โรงพยาบาลเดชา, วังสวนผักกาด  </p>
              </div>
              <div class="column" >
                <p>5️⃣Airport Railink สถานีพญาไท</p>
              </div>              
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, บันไดเลื่อน, ห้องพยาบาล, ATM, Sky Walk, ศูนย์บริการนักท่องเที่ยว, AED</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id09" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Ratchathewi: ราชเทวี </h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column">
                <p>1️⃣โรงแรมเอเชีย, สะพานหัวช้าง, ป้ายรถประจำทางไปสี่แยกพญาไท </p>
              </div>
              <div class="column" >
                <p>2️⃣Hollywood Street, สะพานหัวช้าง, วังสระปทุม, ป้ายรถประจำทางไปสี่แยกปทุมวัน</p>
              </div>
              <div class="column" >
                <p>3️⃣สี่แยกราชเทวี, ซอยกิ่งเพชร </p>
              </div>
              <div class="column" >
                <p>4️⃣สี่แยกราชเทวี, ประตูน้ำ   </p>
              </div>            
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, บันไดเลื่อน, ห้องพยาบาล, ATM, Sky Walk</p>
          </div>
        </div>
      </div>
    </div>
<!-- E1-E23-->
    <div id="id11" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Chit Lom: ชิดลม </h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣บริษัท ทีโอที จำกัด (มหาชน), สำนักงานเพลินจิต </p>
              </div>
              <div class="column" >
                <p>2️⃣อมรินทร์พลาซ่า, ป้ายรถประจำทางไปสยาม</p>
              </div>
              <div class="column" >
                <p>3️⃣ซอยชิดลม, การไฟฟ้านครหลวง, ป้ายรถประจำทางไปอโศก </p>
              </div>
              <div class="column" >
                <p>4️⃣ 5️⃣Central Department Store - Chidlom   </p>
              </div>
              <div class="column" >
                <p>6️⃣The Mercury Ville @ Chidlom</p>
              </div> 
              <div class="column" >
                <p>7️⃣อมรินทร์พลาซ่า, InterContinental Bangkok Hotels & Resorts, Grand Hyatt Erawan Bangkok, Erawan Bangkok, Gaysorn Village, The Market Bangkok, Platinum Shopping Mall   </p>
              </div>           
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, บันไดเลื่อน, ห้องพยาบาล, ATM, Sky Walk, AED</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id12" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Phloen Chit: เพลินจิต </h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column">
                <p>1️⃣ถนนวิทยุ หน้าอาคารเวฟเพลส </p>
              </div>
              <div class="column" >
                <p>2️⃣ธนาคารกรุงเทพ สาขาเพลินจิต, ป้ายรถประจำทางไปราชประสงค์</p>
              </div>
              <div class="column" >
                <p>3️⃣ซอยนายเลิศ, รพ.บำรุงราษฎร์, ป้ายรถประจำทางไปอโศก </p>
              </div>
              <div class="column" >
                <p>4️⃣ซอยร่วมฤดี, อาคารคิวเฮาส์, เพลินจิตเซ็นเตอร์ </p>
              </div>
              <div class="column" >
                <p>5️⃣Central Embassy, สถานทูตเนเธอร์แลนด์, อาคารเวฟเพลส, ป้ายรถประจำทางไปราชประสงค์</p>
              </div>          
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, บันไดเลื่อน, ห้องพยาบาล, ATM, Sky Walk</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id13" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Nana: นานา </h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣ซอยสุขุมวิท 7, ถนนสุขุมวิท 3 (นานาเหนือ), ป้ายรถประจำทางไปอโศก </p>
              </div>
              <div class="column" >
                <p>2️⃣อาคารแปซิฟิคเพลส 2, ซอยสุขุมวิท 6, ป้ายรถประจำทางไปเพลินจิต</p>
              </div>
              <div class="column" >
                <p>3️⃣ซอยสุขุมวิท 9 และ 11, Ambassador Hotel Bangkok </p>
              </div>
              <div class="column" >
                <p>4️⃣ซอยสุขุมวิท 8 </p>
              </div>         
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, บันไดเลื่อน, ห้องพยาบาล, ATM</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id14" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Asok: อโศก </h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column">
                <p>1️⃣ซอยสุขุมวิท 19, Terminal 21 ชั้น M, ป้ายรถประจำทางไปพร้อมพงษ์ </p>
              </div>
              <div class="column" >
                <p>2️⃣Sheraton Grande Sukhumvit, ป้ายรถประจำทางไปนานา</p>
              </div>
              <div class="column" >
                <p>3️⃣MRT สาสีน้ำเงิน สถานีสุขุมวิท, ถนนอโศกมนตรี, สยามสมาคม ในพระบรมราชูปถัมภ์ , มหาวิทยาลัยศรีนครินทรวิโรฒ, Terminal 21 ชั้น M </p>
              </div>
              <div class="column" >
                <p>4️⃣ซอยสุขุมวิท 14, ซอยสุขุมวิท 16, ถนนรัชดาภิเษก, สวนเบญจกิตติ </p>
              </div> 
              <div class="column" >
                <p>5️⃣Sheraton Grande Sukhumvit, The Westin Grande Sukhumvit, อาคารไทม์ สแควร์, โรบินสันสาขาสุขุมวิท</p>
              </div>
              <div class="column" >
                <p>6️⃣อาคารอินเตอร์เชนจ์ 21, อาคารเอ็กซ์เชนจ์</p>
              </div> 
              <div class="column" >
                <p>7️⃣Terminal 21 ชั้น G   </p>
              </div>         
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, บันไดเลื่อน, ห้องพยาบาล, ATM, Sky Walk, AED</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id15" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Phrom Phong: พร้อมพงษ์ </h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column">
                <p>1️⃣EmQuartier, ป้ายรถประจำทางไปทองหล่อ </p>
              </div>
              <div class="column" >
                <p>2️⃣Emporium, ซอยสุขุมวิท 24, ป้ายรถประจำทางไปอโศก</p>
              </div>
              <div class="column" >
                <p>3️⃣ซอยสุขุมวิท 39 </p>
              </div>
              <div class="column" >
                <p>4️⃣ซอยสุขุมวิท 24 และ 26 , ป้ายรถประจำทางไปอโศก </p>
              </div> 
              <div class="column" >
                <p>5️⃣ซอยสุขุมวิท 33 และ 35</p>
              </div>
              <div class="column" >
                <p>6️⃣Emporium,  อุทยานเบญจสิริ, ซอยสุขุมวิท 22</p>
              </div>          
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, บันไดเลื่อน, ห้องพยาบาล, ATM, Sky Walk</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id16" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Thong Lo: ทองหล่อ </h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column">
                <p>1️⃣ซอยสุขุมวิท 53, โรงเรียนนานาชาติบางกอกเพรพ, ป้ายรถประจำทางไปเอกมัย  </p>
              </div>
              <div class="column" >
                <p>2️⃣ที่ทำการไปรษณีย์สันติสุข, ซอยสุขุมวิท 36</p>
              </div>
              <div class="column" >
                <p>3️⃣ซอยสุขุมวิท 55 (ทองหล่อ), สถาบันปรีดี พนมยงค์ </p>
              </div>
              <div class="column" >
                <p>4️⃣ซอยสุขุมวิท 38, ป้ายรถประจำทางไปพร้อมพงษ์ </p>
              </div>         
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, บันไดเลื่อน, ห้องพยาบาล, ศูนย์แลกเปลี่ยนเงิน, Sky Walk</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id17" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Ekkamai: เอกมัย </h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column">
                <p>1️⃣โรงภาพยนตร์เมเจอร์ซีนีเพล็กซ์ สุขุมวิท, สหกรณ์กรุงเทพ, ซอยสุขุมวิท 63, โชว์รูมรถยนต์ฮอนด้า  </p>
              </div>
              <div class="column" >
                <p>2️⃣ซอยสุขุมวิท 42, อาคารณุศาศิริ, BANGKOK MEDIPLEX </p>
              </div>
              <div class="column" >
                <p>3️⃣วัดธาตุทอง, โรงเรียนวัดธาตุทอง, โรงพยาบาลสุขุมวิท, ป้ายรถประจำทางไปพระโขนง </p>
              </div>
              <div class="column" >
                <p>4️⃣โรงเรียนนานาชาติ เซนต์ แอนดรูวร์ส กรุงเทพฯ, ธนาคารทหารไทย, Gateway Ekkamai, ป้ายรถประจำทางไปทองหล่อ </p>
              </div>         
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, บันไดเลื่อน, ห้องพยาบาล, ศูนย์แลกเปลี่ยนแเงิน, Sky Walk</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id18" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Phra Khanong: พระโขนง </h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column">
                <p>1️⃣Jasmine Resort Hotel, อาคารไทซิน  </p>
              </div>
              <div class="column" >
                <p>2️⃣ริทึ่ม สุขุมวิท 44/1, ซอยสุขุมวิท 44/1, ป้ายรถประจำทางไปเอกมัย </p>
              </div>
              <div class="column" >
                <p>3️⃣ซอยสุขุมวิท 69, ที่ทำการไปรษณีย์พระโขนง, เวลท์ส เรสซิเดนซ์, ป้ายรถประจำทางไปอ่อนนุช </p>
              </div>
              <div class="column" >
                <p>4️⃣ถนนพระราม 4, อีเกิ้ล สโตร์ สุขุมวิท-พระราม 4, ซอยสุขุมวิท 46 </p>
              </div>         
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, บันไดเลื่อน, ห้องพยาบาล, ศูนย์แลกเปลี่ยนเงิน</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id19" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌On Nut: อ่อนนุช </h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column">
                <p>1️⃣สถานีตำรวจนครบาลพระโขนง, สถานีดับเพลิงพระโขนง, Ideo Verve Sukhumvit,  ซอยสุขุมวิท 79, ป้ายรถประจำทางไปสำโรง  </p>
              </div>
              <div class="column" >
                <p>2️⃣เทสโก้ โลตัส, ซอยสุขุมวิท 50 </p>
              </div>
              <div class="column" >
                <p>3️⃣Century The Movie Plaza Sukkhumvit, ซอยสุขุมวิท 81 </p>
              </div>
              <div class="column" >
                <p>4️⃣สำนักงานเขตพระโขนง, ซอยสุขุมวิท 52, ป้ายรถประจำทางไปสำโรง </p>
              </div>         
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, บันไดเลื่อน, ห้องพยาบาล, ศูนย์แลกเปลี่ยนเงิน, Sky Walk</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id20" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Bang Chak: บางจาก </h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column">
                <p>1️⃣ซอยสุขุมวิท 95/1, ซอยสุขุมวิท 97  </p>
              </div>
              <div class="column" >
                <p>2️⃣ซอยสุขุมวิท 60/2 (ซอยอัตโนมัติ) , แก้วสารพัดนึก, กรุงเทพคลินิกแพทย์สาขา 2 </p>
              </div>
              <div class="column" >
                <p>3️⃣ซอยสุขุมวิท 97/1 (ซอยแสงตะวัน), ธนาคารไทยพาณิชย์ สาขาบางจาก, วิทยาลัยเทคโนโลยีกรุงเทพ, ซอยสุขุมวิท 99 </p>
              </div>
              <div class="column" >
                <p>4️⃣สำนักงานเขตพระโขนง, ซอยสุขุมวิท 52, ป้ายรถประจำทางไปสำโรง </p>
              </div>
              <div class="column" >
                <p>5️⃣โรงเรียนสมาหารศึกษา, ซอยสุขุมวิท 60/1 (ซอยสุคนธชาติ 3), วิว่า การ์เดนท์, อาคารเจียไต๋, ตลาดบางจาก</p>
              </div>         
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, บันไดเลื่อน, ห้องพยาบาล, ห้องน้ำ</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id21" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Punnawithi  : ปุณณวิถี </h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column">
                <p>1️⃣ร้านอาหารฮั่ว เซ่ง ฮง, ซอยสุขุมวิท 101, เคซีจี กิมจั๊ว พาณิชย์</p>
              </div>
              <div class="column" >
                <p>2️⃣ซอยสุขุมวิท 62/3, เดอะรูม สุขุมวิท 62 </p>
              </div>
              <div class="column" >
                <p>3️⃣โชว์รูมรถยนต์สโกด้า, โรงเรียนดนตรีและนาฏลีลา กรุงเทพฯ </p>
              </div>
              <div class="column" >
                <p>4️⃣ซอยสุขุมวิท 64 (พงษ์เวชอนุสรณ์), โรงเรียนศิลปะการทำเบเกอรี่และอาหาร</p>
              </div>
              <div class="column" >
                <p>5️⃣เคซีจี กิมจั๊ว พาณิชย์</p>
              </div> 
              <div class="column" >
                <p>6️⃣True Digital Park,  101 Third place , ถนนวชิรธรรมสาธิต</p>
              </div>        
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, บันไดเลื่อน, ห้องพยาบาล, ห้องน้ำ</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id22" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Udom Suk: อุดมสุข </h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column">
                <p>1️⃣ซิตี้โฮม สุขุมวิท, ไอดีโอ มิกซ์ สุขุมวิท 103, ตลาดอุดมสุข</p>
              </div>
              <div class="column" >
                <p>2️⃣ปั๊มน้ำมันเชลล์, ซอยสุขุมวิท 66 </p>
              </div>
              <div class="column" >
                <p>3️⃣ซอยสุขุมวิท 103 </p>
              </div>
              <div class="column" >
                <p>4️⃣IDEO BLUCOVE, โชว์รูมรถยนต์ฮอนด้า, ซอยสุขุมวิท 66/1</p>
              </div>
              <div class="column" >
                <p>5️⃣IDEO MIX สุขุมวิท 103, ตลาดอุดมสุข</p>
              </div> 
              <div class="column" >
                <p>6️⃣ซูเปอร์สกายวอล์กไป สถานีบางนา, โรงพยาบาลผู้สูงอายุกล้วยน้ำไท 2, ท่ารถตู้แยกบางนา</p>
              </div>        
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, บันไดเลื่อน, ห้องพยาบาล, ห้องน้ำ, ศูนบริการประชาชน</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id23" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Bang Na: บางนา </h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column">
                <p>1️⃣พิพิธภัณฑ์การเรียนรู้อุตุนิยมวิทยา, กรมอุตุนิยมวิทยา</p>
              </div>
              <div class="column" >
                <p>2️⃣ที่ทำการไปรษณีย์คลองบางนา, บริษัท แลคตาซอย จำกัด </p>
              </div>
              <div class="column" >
                <p>3️⃣ปั๊มน้ำมันบางจาก, กรมอุตุนิยมวิทยา </p>
              </div>
              <div class="column" >
                <p>4️⃣โชว์รูมรถยนต์โตโยต้า, ปั๊มน้ำมันคาลเท็กซ์, โชว์รูมรถยนต์มิตซูบิชิ, Like Inn Hotel</p>
              </div>
              <div class="column" >
                <p>5️⃣กรมอุตุนิยมวิทยา</p>
              </div> 
              <div class="column" >
                <p>6️⃣ซูเปอร์สกายวอล์กไป สถานีอุดมสุข, Bitec Bangna, ท่ารถตู้แยกบางนา</p>
              </div>        
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, บันไดเลื่อน, ห้องพยาบาล, ห้องน้ำ</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id24" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Bearing: แบริ่ง </h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column">
                <p>1️⃣ซอยสุขุมวิท 105, Centerpoint Studio Thailand</p>
              </div>
              <div class="column" >
                <p>2️⃣ซอยสุขุมวิท 70/4 </p>
              </div>
              <div class="column" >
                <p>3️⃣ซอยสุขุมวิท 107, โรงเรียนนานาชาติ เซ็นต์แอนดรูวส์ สุขุมวิท 107 </p>
              </div>
              <div class="column" >
                <p>4️⃣ซอยสุขุมวิท 70/5, ปั๊มน้ำมันเอสโซ่, เบ็นซ์ บีเคเค กรุ๊ป, บีเคเค แกรนด์ เอสเตท, สยามนิสสันบีเคเค</p>
              </div>
              <div class="column" >
                <p>5️⃣APT BEARING MALL</p>
              </div>         
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, บันไดเลื่อน, ห้องพยาบาล, ห้องน้ำ</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id25" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Samrong: สำโรง </h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column">
                <p>1️⃣ทางเดินเชื่อม Imperial World Samrong,  ตลาดสำโรง , โรงพยาบาลสำโรงการแพทย์</p>
              </div>
              <div class="column" >
                <p>2️⃣โรงน้ำแข็งสำโรง , ไปรษณีย์สำโรง , ซอยสุขุมวิท 80 </p>
              </div>
              <div class="column" >
                <p>3️⃣สถานีตำรวจภูธรสำโรงเหนือ , ป้ายรถประจำทางไปถนนเทพารักษ์ </p>
              </div>
              <div class="column" >
                <p>4️⃣ปากทางแยกเทพารักษ์ ทิศใต้ ป้ายรถประจำทางไปปากน้ำ บางปู</p>
              </div>
              <div class="column" >
                <p>5️⃣ปากทางแยกเทพารักษ์ ทิศเหนือ ป้ายรถประจำทางไปบางนา</p>
              </div> 
              <div class="column" >
                <p>6️⃣ซอยนครทอง 1 , ซอยนครทอง 2</p>
              </div>        
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, บันไดเลื่อน, ห้องพยาบาล, ห้องน้ำ, Sky Walk</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id26" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Pu Chao: ปู่เจ้า </h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣บิ๊กซี สาขาสำโรง 2</p>
              </div>
              <div class="column" >
                <p>2️⃣ ปั๊มน้ำมัน ปตท </p>
              </div>
              <div class="column" >
                <p>3️⃣บริษัท พานาโซนิค เอเนอร์จี (ประเทศไทย) จำกัด </p>
              </div>
              <div class="column" >
                <p>4️⃣บริษัท โตโยต้า มอเตอร์ (ประเทศไทย) จำกัด</p>
              </div>       
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, บันไดเลื่อน, ห้องพยาบาล, ห้องน้ำ</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id27" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Chang Erawan: ช้างเอราวัณ </h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column">
                <p>1️⃣สุขุมวิท ซอย 7,พิพิธภัณฑ์ช้างเอราวัณ,สหกรณ์ออมทรัพย์ครูสมุทรปราการ จำกัด</p>
              </div>
              <div class="column" >
                <p>2️⃣สำนักงานพระพุทธศาสนาจังหวัดสมุทรปราการ, สำนักงานศึกษาธิการจังหวัดสมุทรปราการ, สำนักงานเขตพื้นที่การศึกษาประถมศึกษาสมุทรปราการ เขต 1 </p>
              </div>
              <div class="column" >
                <p>3️⃣สุขุมวิท ซอย 13 (โรงนมตรามะลิ), โรงงานนมตรามะลิ, โรงเรียนพร้านีลวัชระ </p>
              </div>
              <div class="column" >
                <p>4️⃣เดอะ ทรัสต์ คอนโด แอท บีทีเอส เอราวัณ, อู่สากลการาจ,เจริญ มอเตอร์แอร์</p>
              </div> 
              <div class="column" >
              <p>5️⃣สุขุมวิท ซอย 11</p>
              </div> 
              <div class="column" >
                <p>6️⃣สุขุมวิท ซอย 2</p>
              </div>      
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, บันไดเลื่อน, ห้องพยาบาล, ห้องน้ำ</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id28" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Royal Thai Naval Academy: โรงเรียนนายเรือ </h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column">
                <p>1️⃣พิพิธภัณฑ์ทหารเรือ, ไปรษณีย์สมุทรปราการ, การไฟฟ้านครหลวง สถานีย่อยปากน้ำ โรงพยาบาลยุวประสาทไวทโยปถัมภ์</p>
              </div>
              <div class="column" >
                <p>2️⃣โรงเรียนนายเรือ, หอเกียรติยศ โรงเรียนนายเรือ, โรงพยาบาลโรงเรียนนายเรือ </p>
              </div>
              <div class="column" >
                <p>3️⃣สุขุมวิท ซอย 25 (กองรักษาการณ์), สุขุมวิท ซอย 27 (บุญศิริ) , หจก.พร้อมสินวัสดุ,ปั๊มน้ำมันบางจาก </p>
              </div>
              <div class="column" >
                <p>4️⃣เคจี ศูนย์ค้าส่ง หิน ดิน ทราย สาขาปากน้ำ</p>
              </div>       
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, บันไดเลื่อน, ห้องพยาบาล, ห้องน้ำ</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id29" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Pak Nam: ปากน้ำ </h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column">
                <p>1️⃣ซอยศูนย์การค้าปากน้ำ</p>
              </div>
              <div class="column" >
                <p>2️⃣วิทยาลัยสารพัดช่างสมุทรปราการ </p>
              </div>
              <div class="column" >
                <p>3️⃣วิหารพระพุทธชินราชมงคลปราการ, สวนสุขภาพ ร.9, สำนักงานสรรพสามิตพื้นที่สมุทรปราการ 1 </p>
              </div>
              <div class="column" >
                <p>4️⃣เคจี ศูนย์ค้าส่ง หิน ดิน ทราย สาขาปากน้ำ</p>
              </div> 
              <div class="column" >
              <p>5️⃣วิทยาลัยสารพัดช่างสมุทรปราการ</p>
              </div> 
              <div class="column" >
                <p>6️⃣ศาลากลางจังหวัดสมุทรปราการ, ที่ว่าการอำเภอเมืองสมุทรปราการ</p>
              </div>      
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, บันไดเลื่อน, ห้องพยาบาล, ห้องน้ำ</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id30" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Srinagarindra: ศรีนครินทร์ </h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column">
                <p>1️⃣สุขุมวิท ซอย 43, โรงเรียนสตรีสมุทรปราการ</p>
              </div>
              <div class="column" >
                <p>2️⃣ซอยศิริราษฎร์ศรัทธา (วัดในสองวิหาร), โรงเรียนนพคุณวิทยา </p>
              </div>
              <div class="column" >
                <p>3️⃣สุขุมวิท ซอย 45 </p>
              </div>
              <div class="column" >
                <p>4️⃣ซอยวัดชัยมงคล, ธนาคารเพื่อการเกษตรและสหกรณ์การเกษตร สาขาสมุทรปราการ, โรงพยาบาลสัตว์เทศบาลนครสมุทรปราการ</p>
              </div>      
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, บันไดเลื่อน, ห้องพยาบาล, ห้องน้ำ</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id31" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Phraek Sa: แพรกษา </h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column">
                <p>1️⃣ถนนแพรกษา</p>
              </div>
              <div class="column" >
                <p>2️⃣บิ๊กซี ซูเปอร์เซ็นเตอร์ สาขาสมุทรปราการ,ซอย เทศบาลบางปู 20,โรงเรียนสมุทรปราการ </p>
              </div>
              <div class="column" >
                <p>3️⃣โรบินสัน ไลฟ์สไตล์ เซ็นเตอร์ สาขาสมุทรปราการ,ซอย เทศบาลบางปู 41 </p>
              </div>
              <div class="column" >
                <p>4️⃣บิ๊กซี ซูเปอร์เซ็นเตอร์ สาขาสมุทรปราการ,ปั๊มน้ำมันคาลเท็กซ์,ซอยหมู่บ้านร่มเย็น 3</p>
              </div>      
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, บันไดเลื่อน, ห้องพยาบาล, ห้องน้ำ</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id32" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Sai Luat: สายลวด </h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column">
                <p>1️⃣ซอย เทศบาลบางปู 43</p>
              </div>
              <div class="column" >
                <p>2️⃣บริษัท ศิริวัฒนา มอเตอร์ไบค์ จำกัด,ที่ทำการไปรษณีย์ </p>
              </div>
              <div class="column" >
                <p>3️⃣ซอย เทศบาลบางปู 43  </p>
              </div>
              <div class="column" >
                <p>4️⃣ถนนสายลวด,ปั๊มน้ำมันบางจาก</p>
              </div>      
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, บันไดเลื่อน, ห้องพยาบาล, ห้องน้ำ</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id33" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Kheha: เคหะฯ </h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column">
                <p>1️⃣ซอยเทศบาลบางปู 45</p>
              </div>
              <div class="column" >
                <p>2️⃣Park & Ride </p>
              </div>
              <div class="column" >
                <p>3️⃣ซอยเทศบาลบางปู 47  </p>
              </div>
              <div class="column" >
                <p>4️⃣ซอยเทศบาลบางปู 50, โรงเรียนปราณีเนาวบุตร</p>
              </div>
              <div class="column" >
              <p>5️⃣ซอยเทศบาลบางปู 45 </p>
              </div>      
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, บันไดเลื่อน, ห้องพยาบาล, ห้องน้ำ</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id34" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌National Stadium: สนามกีฬาแห่งชาติ </h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column">
                <p>1️⃣ซอยเกษมสันต์ 2, พิพิธภัณฑ์บ้านจิม ทอมป์สัน, สถาบันเทคโนโลยีปทุมวัน, เทสโก้ โลตัส พระราม 1,ป้ายรถประจำทางไปสยาม</p>
              </div>
              <div class="column" >
                <p>2️⃣ศาลาวชิราวุธ สนามกีฬาแห่งชาติ, สี่แยกเจริญผล, ป้ายรถประจำทางไปยศเส </p>
              </div>
              <div class="column" >
                <p>3️⃣หอศิลปวัฒนธรรมแห่งกรุงเทพมหานคร  </p>
              </div>
              <div class="column" >
                <p>4️⃣ห้างสรรพสินค้าTokyu ชั้น 2 (สะพานเชื่อม), ลานหน้ามาบุญครอง</p>
              </div>
              <div class="column" >
              <p>5️⃣MBK ชั้น 2 และ 3, หอศิลปวัฒนธรรมแห่งกรุงเทพมหานคร, Siam Square ซอยกลาง-ซอย 2, Siam Discovery ชั้น M และ 1  </p>
              </div>      
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, บันไดเลื่อน, ห้องพยาบาล, ATM, Sky Walk</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id35" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Ratchadamri: ราชดำริ </h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣ตรงข้ามซอยมหาดเล็กหลวง 3, ป้ายรถประจำทางไปราชประสงค์</p>
              </div>
              <div class="column" >
                <p>2️⃣อาคารนันทวัน, ซอยมหาดเล็กหลวง 3, A.U.A </p>
              </div>
              <div class="column" >
                <p>3️⃣ตรงข้ามซอยมหาดเล็กหลวง 2, โรงพยาบาลตำรวจ  </p>
              </div>
              <div class="column" >
                <p>4️⃣ซอยมหาดเล็กหลวง 2, Anantara Siam Bangkok Hotel, ป้ายรถประจำทางไปสวนลุมพินี</p>
              </div>      
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, บันไดเลื่อน, ห้องพยาบาล, ATM, Sky Walk</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id36" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Sala Daeng: ศาลาแดง </h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣อาคารธนิยะ และ อาคารสีลม 64, ถนนธนิยะ, ถนนพัฒน์พงศ์, โรงพยาบาลกรุงเทพคริสเตียน, ป้ายรถประจำทางไปถนนพระรามที่ 4</p>
              </div>
              <div class="column" >
                <p>2️⃣ถนนคอนแวนต์, อาคารซีพี, ป้ายรถประจำทางไปบางรัก  </p>
              </div>
              <div class="column" >
                <p>3️⃣อาคารญาดา, ธนาคาร ยูโอบี สาขาสีลม 2  </p>
              </div>
              <div class="column" >
                <p>4️⃣Silom Complex 2F</p>
              </div>
              <div class="column" >
              <p>5️⃣Skywalk ไปยัง MRT สายสีน้ำเงิน สถานีสีลม, อาคาร ภปร. โรงพยาบาลจุฬาลงกรณ์, คณะแพทยศาสตร์ จุฬาลงกรณ์มหาวิทยาลัย, Dusit Central Park   </p>
              </div>      
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, บันไดเลื่อน, ห้องพยาบาล, ATM, Sky Walk, ศูนย์ตรวจสอบเครดิตบูโร</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id37" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Chong Nonsi: ช่องนนทรี </h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣อาคารสาธรสแควร์ และ W Bangkok Hotel, The Infinity </p>
              </div>
              <div class="column" >
                <p>2️⃣อาคารสาธรธานี, , ถนนสาทร, I-Residence Hotel Silom, Standard Chartered Bank of Thailand, FuramaXclusive Sathorn  </p>
              </div>
              <div class="column" >
                <p>3️⃣อาคารญาดา, ธนาคาร ยูโอบี สาขาสีลม 2  </p>
              </div>
              <div class="column" >
                <p>4️⃣DIAMOND TOWER, Shangarila Suite Hotel, The Heritage Hotels Bangkok, Glow Trinity Silom, ป้ายรถประจำทางไปสาทร </p>
              </div>    
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, บันไดเลื่อน, ห้องพยาบาล, ATM, Sky Walk, AED</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id39" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Surasak: สุรศักดิ์ </h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣Chartered Square, ถนนสุรศักดิ์, ศูนย์บริการรถยนต์ฮอนด้า สาธร, Nanmeebooks, A.I.A Center </p>
              </div>
              <div class="column" >
                <p>2️⃣อาคารหอการค้าไทย-จีน, ร้าน Blue Elephant, King Royal Garden Inn Hotel, Auto City, The Bangkok Sathorn </p>
              </div>
              <div class="column" >
                <p>3️⃣A.I.A Center, Mode Sathorn Hotel Bangkok </p>
              </div>  
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, บันไดเลื่อน, ห้องพยาบาล, ATM, Sky Walk</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id40" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Saphan Taksin  : สะพานตากสิน </h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column">
                <p>1️⃣ท่าเรือข้ามฟาก-ท่าเรือเป็ปซี่ </p>
              </div>
              <div class="column" >
                <p>2️⃣ท่าเรือสาทร (เรือด่วนเจ้าพระยา-เรือโดยสารคลองดาวคะนอง-เรือโรงแรม-เรือ River City Bangkok Shopping Center, ศูนย์บริการร่วมคมนาคม   </p>
              </div>
              <div class="column" >
                <p>3️⃣ธนาคารกรุงเทพ, ถนนเจริญกรุง, ป้ายรถประจำทางถนนเจริญกรุง  </p>
              </div>
              <div class="column" >
                <p>4️⃣ถนนเจริญกรุง, ป้ายรถประจำทางถนนเจริญกรุง </p>
              </div>    
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, บันไดเลื่อน, ห้องพยาบาล, ATM</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id41" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Krung Thon Buri: กรุงธนบุรี </h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column">
                <p>1️⃣ซอยกรุงธนบุรี 3, สินสาธรทาวเวอร์, ธนาคารกรุงศรีอยุธยา, Q.House Condo Sathorn, ท่ารถประจำทางรับอากาศสาย 84 </p>
              </div>
              <div class="column" >
                <p>2️⃣Ideo Sathorn-Taksin, อาคารไทยศรีประกันภัย, ปั๊มน้ำมันบางจาก, ศูนย์บริการสาธารณสุข 28 กรุงธนบุรี, ป้ายรถประจำทางไปแยกตากสิน  </p>
              </div>
              <div class="column" >
                <p>3️⃣HIVE @ SATHORN, Villa Sathorn Condominium, ซอยกรุงธนบุรี 5  </p>
              </div>
              <div class="column" >
                <p>4️⃣ซอยกรุงธนบุรี 8, ร้านอาหารนทีทิพย์ & บ้านหลังที่ 2, The Bangkok Sathorn - Taksin,  Ideo Mobi Sathorn, ป้ายรถประจำทางไปแยกตากสิน</p>
              </div>    
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, บันไดเลื่อน, ห้องพยาบาล, ATM, ห้องน้ำ</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id42" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Wongwian Yai: วงเวียนใหญ่ </h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column">
                <p>1️⃣สถาบันเดอะเกน, อาคารสตีมมาสเตอร์, ป้ายรถประจำทางไปสะพานตากสิน, Sky Walk </p>
              </div>
              <div class="column" >
                <p>2️⃣อาคารลีแมชชีนทูลส์, TEAL Sathorn - Taksin, ป้ายรถประจำทางไปแยกตากสิน, Sky Walk   </p>
              </div>
              <div class="column" >
                <p>3️⃣ซอยกรุงธนบุรี 1, ป้ายรถประจำทางไปสะพานตากสิน  </p>
              </div>
              <div class="column" >
                <p>4️⃣ซอยกรุงธนบุรี 4, ป้ายรถประจำทางไปแยกตากสิน </p>
              </div>    
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, บันไดเลื่อน, ห้องพยาบาล, ห้องน้ำ, ATM, ศูนย์บริการประชาชน</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id43" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Pho Nimit: โพธิ์นิมิตร </h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column">
                <p>1️⃣วัดโพธิ์นิมิตสถิตมหาสีมาราม, ซอยเทอดไท 19, โรงเรียนโพธิ์นิมิต </p>
              </div>
              <div class="column" >
                <p>2️⃣โรงเรียนมณีวิทยา, ซอยสมเด็จพระเจ้าตากสิน 22  </p>
              </div>
              <div class="column" >
                <p>3️⃣ซอยเทอดไท 19, โรงเรียนโพธิ์นิมิต  </p>
              </div>
              <div class="column" >
                <p>4️⃣ซอยสมเด็จพระเจ้าตากสิน 8 </p>
              </div>    
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, บันไดเลื่อน, ห้องพยาบาล, ห้องน้ำ</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id44" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Talat Phlu: ตลาดพลู </h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column">
                <p>1️⃣ซอยเทอดไท 33 </p>
              </div>
              <div class="column" >
                <p>2️⃣ซอยเทอดไท 33  </p>
              </div>
              <div class="column" >
                <p>3️⃣ถนนรัชดาภิเษก  </p>
              </div>
              <div class="column" >
                <p>4️⃣สถานีรถโดยสารด่วนพิเศษ BRT </p>
              </div>    
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, บันไดเลื่อน, ห้องพยาบาล, ห้องน้ำ</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id45" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Wutthakat: วุฒากาศ </h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column">
                <p>1️⃣ถนนราชพฤกษ์  </p>
              </div>
              <div class="column" >
                <p>2️⃣ถนนราชพฤกษ์   </p>
              </div>
              <div class="column" >
                <p>3️⃣วัดใหม่ยายนุ้ย  </p>
              </div>
              <div class="column" >
                <p>4️⃣ซอยวุฒากาศ 27 </p>
              </div>
              <div class="column" >
              <p>5️⃣คลองด่าน  </p>
              </div>    
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, บันไดเลื่อน, ห้องพยาบาล, ห้องน้ำ</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id46" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Bang Wa: บางหว้า </h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column">
                <p>1️⃣ถนนราชพฤกษ์, วัดประดู่บางจาก, โรงเรียนวัดประดู่บางจาก, ป้ายรถประจำทางไปบางแวก  </p>
              </div>
              <div class="column" >
                <p>2️⃣ถนนราชพฤกษ์, วัดประดู่บางจาก, โรงเรียนวัดประดู่บางจาก, ป้ายรถประจำทางไปบางแวก   </p>
              </div>
              <div class="column" >
                <p>3️⃣ถนนเพชรเกษม, ซอยเพชรเกษม 34  </p>
              </div>
              <div class="column" >
                <p>4️⃣ป้ายรถประจำทางไปบางแค, Supalai Park Ratchaphruek - Phetkasem </p>
              </div>
              <div class="column" >
              <p>5️⃣ท่าเรือบางหว้า ของเรือโดยสารคลองภาษีเจริญ, MRT สายสีน้ำเงิน สถานีบางหว้า </p>
              </div>    
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, บันไดเลื่อน, ห้องพยาบาล, ห้องน้ำ, AED</p>
          </div>
        </div>
      </div>
    </div>
<!-- Airport Railink-->
    <div id="id54" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Suvarnabhumi: สุวรรณภูมิ </h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column">
                <p>1️⃣ ท่าอากาศยานพญาไท </p>
              </div>
              <div class="column" >
                <p>2️⃣ Novotel Bangkok Suvarnabhumi Airport  </p>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="id53" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Lat Krabang: ลาดกระบัง</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column1">
                <p>1️⃣ 2️⃣สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง(ต่อรถไฟหรือรถสองแถวเข้าสถาบัน) </p>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="id52" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Ban Thap Chang: บ้านทับช้าง</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column1">
                <p>1️⃣ 2️⃣ โรงเรียนสุเหร่าทับช้าง, โรงเรียนสุเหร่าทับช้างคลองบน, หมู่บ้านนักกีฬาแหลมทอง, มัสยิดนูรุ้บเอี๊ยะห์ซาน (ทับช้างคลองบน)  </p>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="id51" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Hua Mak: หัวหมาก</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column1">
                <p>1️⃣ 2️⃣ สถาบันเทคโนโลยีไทย-ญี่ปุ่น, มหาวิทยาลัยนานาชาติแสตมฟอร์ด, มหาวิทยาลัยเกษมบัณทิต, โรงเรียนรามคำแหง,
                โรงพยาบาลสมิติเวช, โรงพยาบาลวิภาราม, ห้าง Max Value พัฒนาการ, มัสยิดดาริสลาม พัฒนาการ </p>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="id50" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Ramkhamhaeng: รามคำแหง</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column1">
                <p>1️⃣ 2️⃣ ตลาดคลองตัน, มัสยิดคลองตัน, มัสยิดมูลนิธิเพื่อศูนย์กลางศาสนาอิสลามแห่งประเทศไทย, สถานีไฟฟ้าแรงสูงบางกะปิ, มหาวิทยาลัยรามคำแหง, มหาวิทยาลัยอัสสัมชัญ, สนามกีฬารามคำแหง, อาคาร UM Tower
                , สถาบันยุวทัศน์แห่งประเทศไทย, โรงเรียนเทพลีลา, The Mall Ramkhamhaeng 2, The Mall Ramkhamhaeng 3 </p>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="id48" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Ratchaprarop: ราชปรารภ</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column1">
                <p>0️⃣อยู่ทั้งสองฝั่งของถนนราชปรารภ โดยจะมีทั้งฝั่งขาออกของถนน (ไปแยกสามเหลี่ยมดินแดง), 
                ฝั่งขาเข้าของถนน (ไปแยกประตูน้ำ/ราชประสงค์/สยาม), รถไฟราชปรารภ </p>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="id49" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Makkasan: มักกะสัน</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column1">
                <p>0️⃣ ถนนรัชดาภิเษก (อโศก-ดินแดง), ถนนกำแพงเพชร 7 (เชื่อมจากถนนนิคมมักกะสัน, ถนนนานาเหนือ และสี่แยกมิตรสัมพันธ์),
                 ถนนจตุรทิศ (ถนนเลียบบึงมักกะสัน), ทางพิเศษเฉลิมมหานคร, ทางพิเศษศรีรัช, โครงการ Makkasan Complex </p>
              </div> 
              <div class="column" >
                <p>1️⃣  MRT สายสีน้ำเงิน สถานีเพชรบุรี  </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="id47" class="modal">
       <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Phaya Thai: พญาไท</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
            <div class="column">
                <p>1️⃣อาคารพญาไทพลาซ่า, จุดหยุดรถไฟพญาไทฝั่งใต้, คอนโดบ้านปทุมวัน, ร้าน HEA </p>
              </div>
              <div class="column" >
                <p>2️⃣ที่ทำการไปรษณีย์ราชเทวี, กรมปศุสัตว์, จุดหยุดรถไฟพญาไทฝั่งเหนือ, ป้ายรถประจำทางไปราชเทวี  </p>
              </div>
              <div class="column" >
                <p>3️⃣อาคารซี.พี.ทาวเวอร์ 3 (พญาไท], โรงเรียนสันติราษฎร์, สำนักงานคณะรรมการการอุดมศึกษา, ป้ายรถประจำทางไปสะพานเสาวนี-นางเลิ้ง </p>
              </div>
              <div class="column" >
                <p>4️⃣Florida Hotel Bangkok, อาคารวรรณสรณ์, SIAM CITY HOTEL, โรงพยาบาลเดชา, วังสวนผักกาด </p>
              </div>
              <div class="column" >
              <p>5️⃣ Airport Railink สถาานีพญาไท </p>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </div>


    <div id="id55" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Khlong Bang Phai: คลองบางไผ่</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column">
                <p>1️⃣ถนนหมู่บ้านบัวทอง</p>
              </div>
              <div class="column">
                <p>2️⃣ถนนเลียบคลองบางไผ่</p>
              </div>
              <div class="column">
                <p>3️⃣อาคารจอดแล้วจร</p>
              </div>
              <div class="column">
                <p>4️⃣อาคารศูนย์ซ่อมบำรุงรถไฟฟ้า</p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, ห้องน้ำ</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id56" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Talad Bang Yai: ตลาดบางใหญ่</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣ซอยหมู่บ้านบางใหญ่ซิตี้ เซ็นเตอร์</p>
              </div>
              <div class="column">
                <p>2️⃣ถนนกาญจนาภิเษก เลียบคลองบางแพรก </p>
              </div>
              <div class="column">
                <p>3️⃣ซอยหมู่บ้านรัตนาธิเบศร์</p>
              </div>
              <div class="column">
                <p>4️⃣เซ็นทรัลเวสท์เกตบางใหญ่, <br>
                  โรงพยาบาลเกษมราษฎร์รัตนาธิเบศร์ </p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, ห้องน้ำ</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id57" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Sam Yeak Bang Yai: สามแยกบางใหญ่</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣หมู่บ้านกฤษดานคร 10</p>
              </div>
              <div class="column">
                <p>2️⃣ทางเชื่อมต่ออาคารจอดแล้วจร </p>
              </div>
              <div class="column">
                <p>3️⃣ซอยวัดมะเดื่อ</p>
              </div>
              <div class="column">
                <p>4️⃣ซอยหมู่บ้านธนกาญจน์</p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, ห้องน้ำ</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id58" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Bang Phlu: บางพลู</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣วัดบางไผ่</p>
              </div>
              <div class="column">
                <p>2️⃣ซอยหมู่บ้านภัสสร</p>
              </div>
              <div class="column">
                <p>3️⃣ซอยหมู่บ้านราชพฤกษ์</p>
              </div>
              <div class="column">
                <p>4️⃣วัดบางแพรก</p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, ห้องน้ำ</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id59" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Bang Rak Yai: บางรักใหญ่</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣หมู่บ้านธนาสิริ</p>
              </div>
              <div class="column">
                <p>2️⃣ซอยโยธาธิการ นนทบุรี</p>
              </div>
              <div class="column">
                <p>3️⃣วัดบางรักใหญ่</p>
              </div>
              <div class="column">
                <p>4️⃣ถนนบางกรวย-ไทรน้อย</p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, ห้องน้ำ</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id60" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Bang Rak Noi Tha It: บางรักน้อยท่าอิฐ</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣อาคารจอดรถ</p>
              </div>
              <div class="column">
                <p>2️⃣หมู่บ้านลัดดาวัลย์</p>
              </div>
              <div class="column">
                <p>3️⃣ถนนราชพฤกษ์(ฝั่งใต้)</p>
              </div>
              <div class="column">
                <p>4️⃣ถนนราชพฤกษ์(ฝั่งเหนือ) </p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, ห้องน้ำ</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id61" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Sai Ma: ไทรม้า</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣ซอยหมู่บ้านลัดดารมย์</p>
              </div>
              <div class="column">
                <p>2️⃣ซอยตาหรั่ง</p>
              </div>
              <div class="column">
                <p>3️⃣ซอยหมู่บ้านซื่อตรง</p>
              </div>
              <div class="column">
                <p>4️⃣ซอยหมู่บ้านนราธิป</p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, ห้องน้ำ</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id62" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Phra Nang Klao Bridge: สะพานพระนั่งเกล้า</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣มหาวิทยาลัยเทคโนโลยีราชมงคลสุวรรณภูมิ</p>
              </div>
              <div class="column">
                <p>2️⃣โรงพยาบาลพระนั่งเกล้า</p>
              </div>
              <div class="column">
                <p>3️⃣ท่าเรือพระนั่งเกล้า</p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, ห้องน้ำ</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id63" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Yeak Nonthaburi 1: แยกนนทบุรี 1</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣ซอยเลี่ยงเมืองนนทบุรี 10</p>
              </div>
              <div class="column">
                <p>2️⃣ซอยประชาอุทิศ</p>
              </div>
              <div class="column">
                <p>3️⃣ธนาคากรุงเทพ สาขาถนนรัตนาธิเบศร์</p>
              </div>
              <div class="column">
                <p>4️⃣อาคารจอดแล้วจร</p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, ห้องน้ำ</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id64" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Bang Krasor: บางกระสอ</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣ซอยรัตนาธิเบศร์ 13</p>
              </div>
              <div class="column">
                <p>2️⃣ซอยรัตนาธิเบศร์ 17 </p>
              </div>
              <div class="column">
                <p>3️⃣ซอยรัตนาธิเบศร์ 24</p>
              </div>
              <div class="column">
                <p>4️⃣ซอยรัตนาธิเบศร์ 20 </p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, ห้องน้ำ</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id65" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Nonthaburi Civic Center: ศูนย์ราชการนนทบุรี</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣ศูนย์ราชการนนทบุรี</p>
              </div>
              <div class="column">
                <p>2️⃣บริษัท ไทยคม จำกัด (มหาชน) </p>
              </div>
              <div class="column">
                <p>3️⃣ซอยรัตนาธิเบศร์ 7</p>
              </div>
              <div class="column">
                <p>4️⃣ซอยรัตนาธิเบศร์ 10 </p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, ห้องน้ำ</p>
          </div>
        </div>
      </div>
    </div>


    <div id="id67" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Ministry of Public Health: กระทรวงสาธารณสุข</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣ซอยติวานนท์ 6</p>
              </div>
              <div class="column">
                <p>2️⃣กระทรวงสาธารณสุข</p>
              </div>
              <div class="column">
                <p>3️⃣ซอยติวานนท์ 1/1</p>
              </div>
              <div class="column">
                <p>4️⃣สำนักงานสรรพากร ภาค 4</p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, ห้องน้ำ</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id68" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Yeak Tiwanon: แยกติวานนท์</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column">
                <p>1️⃣ซอยกรุงเทพนนท์ 14</p>
              </div>
              <div class="column">
                <p>2️⃣ซอยกรุงเทพนนท์ 12</p>
              </div>
              <div class="column">
                <p>3️⃣ซอยกรุงเทพนนท์ 7</p>
              </div>
              <div class="column">
                <p>4️⃣ซอยกรุงเทพนนท์ 11</p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, ห้องน้ำ</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id69" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Wong Sawang: วงศ์สว่าง</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column">
                <p>1️⃣ซอยกรุงเทพ-นนทบุรี 41</p>
              </div>
              <div class="column">
                <p>2️⃣วัดทองสุทธาราม</p>
              </div>
              <div class="column">
                <p>3️⃣สถานีดับเพลิงบางซ่อน</p>
              </div>
              <div class="column">
                <p>4️⃣แยกวงศ์สว่าง</p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ATM, ห้องน้ำ</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id70" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Bang Son: บางซ่อน</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣ซอยกรุงเทพ-นนทบุรี 36</p>
              </div>
              <div class="column">
                <p>2️⃣ซอยกรุงเทพ-นนทบุรี 34</p>
              </div>
              <div class="column">
                <p>3️⃣ซอยกรุงเทพ-นนทบุรี 23/1</p>
              </div>
              <div class="column">
                <p>4️⃣ซอยกรุงเทพ-นนทบุรี 25</p>
              </div>
              <div class="column">
                <p>5️⃣สถานีรถไฟบางซ่อน (สายสีแดง)</p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, ห้องน้ำ</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id71" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Tao Poon: เตาปูน(สายสีม่วง)</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣ซอยนำชัย</p>
              </div>
              <div class="column">
                <p>2️⃣ซอยกรุงเทพ-นนทบุรี 1</p>
              </div>
              <div class="column">
                <p>3️⃣ซอยกรุงเทพ-นนทบุรี 2 ตลาดเตาปูน</p>
              </div>
              <div class="column">
                <p>4️⃣ถนนประชาราษฎร์ สาย 2</p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, ห้องน้ำ</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id72" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Tao Poon: เตาปูน(สายสีน้ำเงิน)</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣ซอยนำชัย</p>
              </div>
              <div class="column">
                <p>2️⃣ซอยกรุงเทพ-นนทบุรี 1</p>
              </div>
              <div class="column">
                <p>3️⃣ซอยกรุงเทพ-นนทบุรี 2 ตลาดเตาปูน</p>
              </div>
              <div class="column">
                <p>4️⃣ถนนประชาราษฎร์ สาย 2</p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, ห้องน้ำ</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id73" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Bang Sue: บางซื่อ</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column">
                <p>1️⃣ถนนเทอดดำริ,สถานีรถไฟชุมทางบางซื่อ1[สายเหนือ]</p>
              </div>
              <div class="column">
                <p>2️⃣ถนนรถไฟ,สถานีรถไฟชุมทางบางซื่อ2[สายใต้]</p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, ห้องน้ำ</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id74" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Kamphaeng Phet: กำแพงเพชร</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣ตลาดนัดจตุจักร</p>
              </div>
              <div class="column">
                <p>2️⃣ตลาดนัดจตุจักร ถนนกำแพงเพชร2</p>
              </div>
              <div class="column">
                <p>3️⃣ตลาดอตก. ถนนกำแพงเพชร</p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, ATM, ห้องน้ำ</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id75" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Chatuchak Park: สวนจตุจักร</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣ตลาดนัดจตุจักร</p>
              </div>
              <div class="column">
                <p>2️⃣สวนจตุจักร</p>
              </div>
              <div class="column">
                <p>3️⃣สถานีรถไฟฟ้าบีทีเอส หมอชิต</p>
              </div>
              <div class="column">
                <p>4️⃣สถาบันการบินพลเรือน กรมการขนส่งทางบก</p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, ATM, ห้องน้ำ</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id76" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Pahon Yothin: พหลโยธิน</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣ซอยลาดพร้าว 4</p>
              </div>
              <div class="column">
                <p>2️⃣มหาวิทยาลัยเซนต์จอห์น</p>
              </div>
              <div class="column">
                <p>3️⃣โรงเรียนหอวัง</p>
              </div>
              <div class="column">
                <p>4️⃣แยกลาดพร้าว</p>
              </div>
              <div class="column">
                <p>5️⃣ซอยลาดพร้าว 1</p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ลิฟต์, ATM, ห้องน้ำ</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id77" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Lat Phrao: ลาดพร้าว</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣ซอยลาดพร้าว 26 แยกรัชดา-ลาดพร้าว</p>
              </div>
              <div class="column">
                <p>2️⃣ซอยลาดพร้าว 24</p>
              </div>
              <div class="column">
                <p>3️⃣ซอยลาดพร้าว 17</p>
              </div>
              <div class="column">
                <p>4️⃣อาคารจอดแล้วจร</p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>โทรศัพท์สาธารณะ, ATM</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id78" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Ratchadaphisek: รัชดาภิเษก</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣โรงเรียนปัญจทรัพย์</p>
              </div>
              <div class="column">
                <p>2️⃣ซอยโชคชัย 29</p>
              </div>
              <div class="column">
                <p>3️⃣ซอยรัชดาภิเษก 26</p>
              </div>
              <div class="column">
                <p>4️⃣ซอยรัชดาภิเษก 24</p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>โทรศัพท์สาธารณะ, ATM, ลิฟต์</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id79" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Sutthisan: สุทธิสาร</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣สถานีตำรวนนครบาลสุทธิสาร</p>
              </div>
              <div class="column">
                <p>2️⃣ซอยรัชดาภิเษก 20</p>
              </div>
              <div class="column">
                <p>3️⃣ซอยรัชดาภิเษก 18</p>
              </div>
              <div class="column">
                <p>4️⃣ซอยรัชดาภิเษก 17</p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>โทรศัพท์สาธารณะ, ATM, ลิฟต์</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id80" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Huai Khwang: ห้วยขวาง</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣ถนนประชาราษฎร์บำเพ็ญ</p>
              </div>
              <div class="column">
                <p>2️⃣ซอยรัชดาภิเษก 12</p>
              </div>
              <div class="column">
                <p>3️⃣ถนนประชาสงเคราะห์</p>
              </div>
              <div class="column">
                <p>4️⃣โรงเรียนกุนนทีรุทธารามวิทยาคม</p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>โทรศัพท์สาธารณะ, ATM, ลิฟต์</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id81" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Thailand Cultural Centre: ศูนย์วัฒนธรรมแห่งประเทศไทย</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣ศูนย์วัฒนธรรมแห่งประเทศไทย</p>
              </div>
              <div class="column">
                <p>2️⃣ซอยรัชดาภิเษก 8</p>
              </div>
              <div class="column">
                <p>3️⃣สถานเอกอัครราชฑูตจีน ซอยรัชาภิเษก 5</p>
              </div>
              <div class="column">
                <p>4️⃣แยกเทียมร่วมมิตร</p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>โทรศัพท์สาธารณะ, ATM, ลิฟต์</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id82" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Phra Ram 9: พระราม 9</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣ซอยรัชดาภิเษก 3 อาคารฟอร์จูน ทาวน์</p>
              </div>
              <div class="column">
                <p>2️⃣ซอยพระราม 9 สแควร์</p>
              </div>
              <div class="column">
                <p>3️⃣เซนทรัลพลาซ่าพระราม 9</p>
              </div>
              <div class="column">
                <p>4️⃣แยกพระราม 9</p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>โทรศัพท์สาธารณะ, ATM, ลิฟต์, ห้องน้ำ</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id83" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Phetchaburi: เพชรบุรี</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣ถนนอโศก-ดินแดง</p>
              </div>
              <div class="column">
                <p>2️⃣ทางเชื่อมสะพานเดินลอยฟ้า รภไฟฟ้าใต้ดิน- 
                  รถไฟฟ้าแอร์พอร์ตลิงค์ สถานีมักกะสัน</p>
              </div>
              <div class="column">
                <p>3️⃣ท่าเรืออโศก คลองแสนแสบ</p>
              </div>
              <div class="column">
                <p>4️⃣ถนนอโศก-ดินแดง ถนนกำพงเพชร 7</p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>โทรศัพท์สาธารณะ, ATM, ลิฟต์</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id84" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Sukhumvit: สุขุมวิท</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣ถนนอโศกมนตรี สยามสมาคม</p>
              </div>
              <div class="column">
                <p>2️⃣ถนนอโศก</p>
              </div>
              <div class="column">
                <p>3️⃣ถนนสุขุมวิท</p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>โทรศัพท์สาธารณะ, ATM, ลิฟต์, ห้องน้ำ</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id85" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Queen Sirikit Nat3ional Convention Center: ศูนย์การประชุมแห่งชาติสิริกิติ์</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣ซอยไผ่สิงโต แยกพระราม 4</p>
              </div>
              <div class="column">
                <p>2️⃣ตลาดหลักทรัพย์แห่งประเทศไทย</p>
              </div>
              <div class="column">
                <p>3️⃣ศูนย์การประชุมแห่งชาติสิริกิติ์</p>
              </div>
              <div class="column">
                <p>4️⃣ซอยไผ่สิงโต</p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>โทรศัพท์สาธารณะ, ATM, ลิฟต์</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id86" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Khlong Toei: คลองเตย</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣การไฟฟ้านครหลวงเขตคลองเตย</p>
              </div>
              <div class="column">
                <p>2️⃣โรงงานยาสูบ ซอยโรงงานยาสูบ</p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>โทรศัพท์สาธารณะ, ATM, ลิฟต์</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id87" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Lumphini: ลุมพินี</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣ถนนพระราม 4</p>
              </div>
              <div class="column">
                <p>2️⃣ถนนสาทรใต้</p>
              </div>
              <div class="column">
                <p>3️⃣ถนนวิทยุ สวนลุมไนท์บาซาร์</p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>โทรศัพท์สาธารณะ, ATM, ลิฟต์</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id88" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Si Lom: สีลม</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣สวนลุมพินี โรงพยาบาลจุฬาลงกรณ์</p>
              </div>
              <div class="column">
                <p>2️⃣ถนนสีลม สถานีรถไฟฟ้าบีทีเอส ศาลาแดง</p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>โทรศัพท์สาธารณะ, ATM, ลิฟต์</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id89" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Sam Yan: สามย่าน</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣วัดหัวลำโพง, ถนนสี่พระยา</p>
              </div>
              <div class="column">
                <p>2️⃣ถนนพญาไท, จุฬาลงกรณ์มหาวิทยาลัย, ตลาดสามย่าน</p>0
              </div>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>โทรศัพท์สาธารณะ, ATM, ลิฟต์</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id90" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Hua Lamphong: หัวลำโพง</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣ถนนมหาพฤฒาราม วัดไตรมิตร</p>
              </div>
              <div class="column">
                <p>2️⃣สถานีรถไฟฟ้ากรุงเทพ(หัวลำโพง)</p>
              </div>
              <div class="column">
                <p>3️⃣ถนนรองเมือง</p>
              </div>
              <div class="column">
                <p>4️⃣แยกมหานคร</p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>โทรศัพท์สาธารณะ, ATM, ลิฟต์</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id91" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Wat Mangkon: วัดมังกร</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣ถนนแปลงนาม</p>
              </div>
              <div class="column">
                <p>2️⃣ซอยเจริญกรุง 16 (อิสรานุภาพ)</p>
              </div>
              <div class="column">
                <p>3️⃣วัดมังกรกลมลาวาส</p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>โทรศัพท์สาธารณะ, ATM, ลิฟต์</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id92" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Sam Yot: สามยอด</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣ถนนมหาไชย</p>
              </div>
              <div class="column">
                <p>2️⃣ถนนเจริญกรุง</p>
              </div>
              <div class="column">
                <p>3️⃣ถนนอุณากรรณ</p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ห้องพยาบาล, ห้องน้ำ, ลิฟต์</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id93" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Sanam Chai: สนามไชย</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣มิวเซียม สยาม, วัดพระศรีรัตนศาสดาราม(วัดพระแก้ว), 
                  พระบรมมหาราชวัง, สนามหลวง</p>
              </div>
              <div class="column">
                <p>2️⃣โรงเรียนนวัดราชบพิธ</p>
              </div>
              <div class="column">
                <p>3️⃣สถานีตำรวจนครบาล พระราชวัง </p>
              </div>
              <div class="column">
                <p>4️⃣ปากคลองตลาด</p>
              </div>
              <div class="column">
                <p>5️⃣ท่าเรือราชินี, โรงเรียนราชินี</p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ห้องพยาบาล, ห้องน้ำ, ลิฟต์</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id94" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Tisaraphap: อิสระภาพ</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣ซอยอิสระภาพ 34, วัดหงษ์รัตนาราม, 
                  สถานีตำรวจนครบาลบางกอกใหญ่, มัสยิดผดุงธรรมอิสลาม </p>
              </div>
              <div class="column">
                <p>2️⃣ซอยอิสระภาพ 23, วัดราชสิทธาราม, วัดใหม่พิเรนทร์, มัสยิดดิลฟัลลาห์</p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ห้องพยาบาล, ห้องน้ำ, ลิฟต์</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id95" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Tha Phra: ท่าพระ</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣ซอยเพชรเกษม 10/2</p>
              </div>
              <div class="column">
                <p>2️⃣A ซอยเพชรเกษม 11</p>
              </div>
              <div class="column">
                <p>2️⃣B สำนักงานเขตบางกอกใหญ่</p>
              </div>
              <div class="column">
                <p>3️⃣ซอยเพชรเกษม 12</p>
              </div>
              <div class="column">
                <p>3️⃣D ซอยจรัญสนิทวงศ์ 1</p>
              </div>
              <div class="column">
                <p>4️⃣ซอยคริสตจักร</p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ห้องพยาบาล, ห้องน้ำ, ลิฟต์</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id96" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Bang Phai: บางไผ่</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣โรงเรียนวัดนวลนรดิศ</p>
              </div>
              <div class="column">
                <p>2️⃣โรงเรียนพญาไท 3</p>
              </div>
              <div class="column">
                <p>3️⃣โรงพยาบาลบางไผ่, ซอยเพชรเกษม 22</p>
              </div>
              <div class="column">
                <p>4️⃣โรงเรียนเผดิมศึกษา</p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ห้องพยาบาล, ห้องน้ำ, ลิฟต์</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id97" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Bang Wa: บางหว้า</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣ซอยเพชรเกษม 36, มหาวิทยาลัยสยาม</p>
              </div>
              <div class="column">
                <p>2️⃣ซอยเพชรเกษม 25/3</p>
              </div>
              <div class="column">
                <p>3️⃣สถานีรถไฟฟ้าบีทีเอส บางหว้า</p>
              </div>
              <div class="column">
                <p>4️⃣สถานีรถไฟฟ้าบีทีเอส บางหว้า</p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ห้องพยาบาล, ห้องน้ำ, ลิฟต์</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id98" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Phetkasem 48: เพชรเกษม 48</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣ซอยเพชรเกษม 46/3, โรงเรียนนวัดจันทร์ประดิษฐาราม, วัดจันทร์ประดิษฐาราม</p>
              </div>
              <div class="column">
                <p>2️⃣ซอยเพชรเกษม 46/1, ขุนด่านศาลเจ้าพ่อเสือ</p>
              </div>
              <div class="column">
                <p>3️⃣ซอยเพชรเกษม 29/1</p>
              </div>
              <div class="column">
                <p>4️⃣ซอยเพชรเกษม 31/3, วัดรางบัว</p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ห้องพยาบาล, ห้องน้ำ, ลิฟต์</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id99" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Phasi Charoen: ภาษีเจริญ</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣ซอยเพชรเกษม 33/8, สถานีกาชาดที่ 11 วิเศษนิยม</p>
              </div>
              <div class="column">
                <p>2️⃣ซอยเพชรเกษม 35, ท่าเรือเพชรเกษม 35, โรงพยาบาลเพชรเกษม 2</p>
              </div>
              <div class="column">
                <p>3️⃣ซอยเพชรเกษม 56</p>
              </div>
              <div class="column">
                <p>4️⃣ซอยเพชรเกษม 54, สำนักงานเขตภาษีเจริญ, สถานีตำรวจภาษีเจริญ</p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ห้องพยาบาล, ห้องน้ำ, ลิฟต์</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id100" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Bang Khae: บางแค</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣โรงเรียนราชวินิตประถม บางแค, ซอยเพชรเกษม 62/4</p>
              </div>
              <div class="column">
                <p>2️⃣ซอยเพชรเกษม 62/3</p>
              </div>
              <div class="column">
                <p>3️⃣ตลาดบางแค</p>
              </div>
              <div class="column">
                <p>4️⃣แยกบางแค, วัดิมมานรดี, โรงเรียนวัดนิมมานรดี,
                  โรงเรียนเตรรียมสาธิตศึกษา, สถานีดับเพลิงและกู้ภัยบางแค
                </p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ห้องพยาบาล, ห้องน้ำ, ลิฟต์</p>
          </div>
        </div>
      </div>
    </div>

    <div id="id101" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <header>
            <a href="#" class="closebtn">×</a>
            <h2>📌Lak Song: หลักสอง</h2>
          </header>
          <div class="container">
            <h1>ข้อมูลทางออก</h1>
            <div class="row">
              <div class="column" >
                <p>1️⃣อาคารจอดแล้วจร 1, ซอยเพชรเกษม 80</p>
              </div>
              <div class="column">
                <p>2️⃣อาคารจอดแล้วจร 2, ซอยเพชรเกษม 47/1</p>
              </div>
              <div class="column">
                <p>3️⃣ซอยเพชรเกษม 47, โรงพยาบาลเกษมราษฎร์ บางแค, ศูนย์บริการสาธารณสุข 40 บางแค</p>
              </div>
              <div class="column">
                <p>4️⃣ซอยเพชรเกษม 48</p>
              </div>
            </div>
            <h1>สิ่งอำนวยความสะดวก</h1>
            <p>ห้องพยาบาล, ห้องน้ำ, ลิฟต์</p>
          </div>
        </div>
      </div>
    </div>


  </div>



</body>

</html>
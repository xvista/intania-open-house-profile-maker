<!--
  _____       _              _          ____                     _    _                       
 |_   _|     | |            (_)        / __ \                   | |  | |                      
   | |  _ __ | |_ __ _ _ __  _  __ _  | |  | |_ __   ___ _ __   | |__| | ___  _   _ ___  ___  
   | | | '_ \| __/ _` | '_ \| |/ _` | | |  | | '_ \ / _ \ '_ \  |  __  |/ _ \| | | / __|/ _ \ 
  _| |_| | | | || (_| | | | | | (_| | | |__| | |_) |  __/ | | | | |  | | (_) | |_| \__ \  __/ 
 |_____|_| |_|\__\__,_|_| |_|_|\__,_|  \____/| .__/ \___|_| |_| |_|  |_|\___/ \__,_|___/\___| 
                                             | |                                              
                                             |_|                                              

อ้าว สนใจดูโค้ดหรอครับ โค้ดไม่ค่อยเทพเท่าไหร่หรอกครับ 5555555
มาพูดคุยกันได้นะ ที่ https://www.facebook.com/intaniaopenhouse

อย่าลืมกดไลค์เพจด้วยนะครับ ขอบคุณมากครับ
แล้วเจอกันที่งาน Intania Open House นะครับ
15-17 พฤศจิกายน 2558 ณ คณะวิศวกรรมศาสตร์ จุฬาลงกรณ์มหาวิทยาลัย

มาเถอะ อยากเจอ
#มาเข้าภาคคอมกันเถอะ

-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="มาสร้างรูปโปรไฟล์ Intania Open House กันเถอะ! แล้วอย่าลืมนะ 15-17 พฤศจิกายน 2558 ณ คณะวิศวกรรมศาสตร์ จุฬาลงกรณ์มหาวิทยาลัย มาเถอะ อยากเจอ">
    <meta name="author" content="Chula Engineering">
    <meta property="og:url" content="http://xvista.in.th/intaniaopenhouse/profile/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Intania Open House | Profile Picture Maker">
    <meta property="og:description" content="มาสร้างรูปโปรไฟล์ Intania Open House กันเถอะ! แล้วอย่าลืมนะ 15-17 พฤศจิกายน 2558 ณ คณะวิศวกรรมศาสตร์ จุฬาลงกรณ์มหาวิทยาลัย มาเถอะ อยากเจอ">
    <meta property="og:image" content="http://xvista.in.th/intaniaopenhouse/profile/img/fbpic.png">

    <title>Intania Open House | Profile Picture Maker</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/cropper.css">
    <link rel="stylesheet" href="css/sweetalert.css">
    <link rel="stylesheet" href="css/app-20151107-0344.css">
  </head>

  <body>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-69663704-1', 'auto');
      ga('send', 'pageview');

    </script>

    <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="">Intania Open House</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="https://www.facebook.com/intaniaopenhouse" target="_blank"><i class="fa fa-facebook-official"></i> Official Facebook Page</a></li>
            <li><a href="https://www.facebook.com/chulaengineering" target="_blank"><i class="fa fa-facebook-official"></i> Facebook วิศวฯ จุฬาฯ</a></li>
            <li><a href="http://www.eng.chula.ac.th" target="_blank"><i class="fa fa-globe"></i> Website วิศวฯ จุฬาฯ</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="header col-md-8 col-md-offset-2">
          <img class="img-responsive" src="img/header.png">
        </div>
      </div>
    </div>

    <div class="container content">
      <div class="row step-1" id="step-1">
        <div class="col-md-6 col-md-offset-3">
          <h2>อัพโหลด Profile Picture</h2>
          <span class="btn btn-primary btn-lg btn-block btn-file" id="btn-upload">
            <i class="fa fa-file-image-o"></i> คลิกเพื่อเลือกรูปภาพ <input type="file" id="file-uploader" accept="image/*">
          </span>
        </div>
      </div>
      <div class="row step-2" id="step-2">
        <div class="col-md-6 col-md-offset-3">
          <h2>ปรับแต่งขนาดของภาพ</h2>
          <p>ลากมุมกรอบเพื่อปรับขนาด หรือลากกรอบเคลื่อนย้ายตำแหน่งได้ ถ้ารูปกลับหัวก็สามารถหมุนรูปได้นะ ลองเลย รออะไรอยู่!</p>
          <div class="img-preview-area">
            <img class="img-responsive" id="img-preview">
          </div>
          <div class="adjust-panel">
            <div class="btn-group">
              <button id="btn-rotate-ccw" type="button" class="btn btn-default" title="หมุนภาพทวนเข็มนาฬิกา">
                  <span class="fa fa-rotate-left"></span> หมุนภาพทวนเข็มนาฬิกา
              </button>
              <button id="btn-rotate-cw" type="button" class="btn btn-default" title="หมุนภาพตามเข็มนาฬิกา">
                  <span class="fa fa-rotate-right"></span> หมุนภาพตามเข็มนาฬิกา
              </button>
            </div>
          </div>
          <button id="btn-to-step-3" class="btn btn-primary btn-lg btn-block"><i class="fa fa-check"></i> ปรับขนาดภาพเสร็จแล้ว</button>
        </div>
      </div>
      <div class="row step-3" id="step-3">
        <div class="col-md-4 img-preview-block">
          <div id="img-result"><canvas id="img-canvas" width="1024" height="1024"></canvas><div id="loading">กำลังโหลด...</div></div>
          <button id="btn-download" class="btn btn-primary btn-lg btn-block"><i class="fa fa-download"></i> ดาวน์โหลด</button>
          <div class="facebook-section">
            <a href="https://www.facebook.com/intaniaopenhouse" target="_blank" class="btn btn-primary btn-lg btn-block btn-facebook"><i class="fa fa-facebook-official"></i> มากดไลค์เพจกันเถอะ นะๆ</a>
          </div>
        </div>
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2>เลือกข้อความที่ต้องการ</h2>
              <p class="text-center">คลิกเลือกข้อความแล้วดูตัวอย่างภาพที่ได้ เมื่อเลือกได้ตามที่ต้องการแล้ว คลิกปุ่มดาวน์โหลดใต้ภาพตัวอย่าง</p>
              <p class="text-center p-no-margin">ยังไม่มีข้อความถูกใจ? ลองมาขอข้อความใน<a href="https://www.facebook.com/intaniaopenhouse" target="_blank">เพจของเรา</a>สิ!</p>
            </div>
          </div>
          <div class="row overlay-selector">
            <div class="col-md-12 overlay-selector-header">
              <hr>
              <h3>ทั่วไป</h3>
            </div>
          </div>
          <div class="row overlay-selector">
            <div class="col-md-4">
              <button class="btn btn-default btn-block" id="btn-team-etc-1"><b>#ทีมนายช่าง</b></button>
            </div>
            <div class="col-md-4">
              <button class="btn btn-default btn-block" id="btn-team-etc-2"><b>#ทีมบัณฑิต</b></button>
            </div>
            <div class="col-md-4">
              <button class="btn btn-default btn-block" id="btn-team-etc-3"><b>#ทีมงานคุณภาพ</b></button>
            </div>
            <div class="col-md-4">
              <button class="btn btn-default btn-block" id="btn-team-etc-4"><b>#ทีมวิศวฯ</b></button>
            </div>
            <div class="col-md-4">
              <button class="btn btn-default btn-block" id="btn-team-etc-5"><b>#ทีมอยากมีแฟนวิศวฯ</b></button>
            </div>
            <div class="col-md-4">
              <button class="btn btn-default btn-block" id="btn-team-etc-6"><b>#ทีมPAT3</b></button>
            </div>
            <div class="col-md-4">
              <button class="btn btn-default btn-block" id="btn-team-etc-7"><b>#ทีมเสื้อช็อป</b></button>
            </div>
            <div class="col-md-4">
              <button class="btn btn-default btn-block" id="btn-team-etc-8"><b>#ทีมอยากเป็นวิศวฯ</b></button>
            </div>
            <div class="col-md-4">
              <button class="btn btn-default btn-block" id="btn-team-etc-9"><b>#ทีมแฟนวิศวฯ</b></button>
            </div>
            <div class="col-md-4">
              <button class="btn btn-default btn-block" id="btn-team-etc-10"><b>#ทีมไหนไฟแรงเฟร่อ</b></button>
            </div>
            <div class="col-md-4">
              <button class="btn btn-default btn-block" id="btn-team-etc-11"><b>#ทีมSTRONG</b></button>
            </div>
            <div class="col-md-4">
              <button class="btn btn-default btn-block" id="btn-team-etc-12"><b>#ทีมวิศวฯอยากมีแฟน</b></button>
            </div>
            <div class="col-md-4">
              <button class="btn btn-default btn-block" id="btn-team-etc-13"><b>#ทีมอะไรดี</b></button>
            </div>
            <div class="col-md-4">
              <button class="btn btn-default btn-block" id="btn-team-etc-14"><b>#ทีมคนหล่อ</b></button>
            </div>
            <div class="col-md-4">
              <button class="btn btn-default btn-block" id="btn-team-etc-15"><b>#ทีมสาวสวย</b></button>
            </div>
            <div class="col-md-4">
              <button class="btn btn-default btn-block" id="btn-team-etc-16"><b>#ทีมวิศวฯโสด</b></button>
            </div>
            <div class="col-md-4">
              <button class="btn btn-default btn-block" id="btn-team-etc-17"><b>#ทีมคนเหงา</b></button>
            </div>
            <div class="col-md-4">
              <button class="btn btn-default btn-block" id="btn-team-etc-18"><b>#ทีมอะไรๆก็อยากเป็นวิศวฯ</b></button>
            </div>
          </div>
          <div class="row overlay-selector">
            <div class="col-md-12 overlay-selector-header">
              <hr>
              <h3>ภาควิชา/หลักสูตรในคณะวิศวกรรมศาสตร์</h3>
            </div>
          </div>
          <div class="row overlay-selector">
            <div class="col-md-6">
              <button class="btn btn-default btn-block" id="btn-team-ce"><b>#TeamCE</b><br><small>(วิศวกรรมโยธา)</small></button>
            </div>
            <div class="col-md-6">
              <button class="btn btn-default btn-block" id="btn-team-ee"><b>#TeamEE</b><br><small>(วิศวกรรมไฟฟ้า)</small></button>
            </div>
            <div class="col-md-6">
              <button class="btn btn-default btn-block" id="btn-team-me"><b>#TeamME</b><br><small>(วิศวกรรมเครื่องกล)</small></button>
            </div>
            <div class="col-md-6">
              <button class="btn btn-default btn-block" id="btn-team-ae"><b>#TeamAE</b><br><small>(วิศวกรรมยานยนต์)</small></button>
            </div>
            <div class="col-md-6">
              <button class="btn btn-default btn-block" id="btn-team-mr"><b>#TeamMR</b><br><small>(วิศวกรรมเรือ)</small></button>
            </div>
            <div class="col-md-6">
              <button class="btn btn-default btn-block" id="btn-team-ie"><b>#TeamIE</b><br><small>(วิศวกรรมอุตสาหการ)</small></button>
            </div>
            <div class="col-md-6">
              <button class="btn btn-default btn-block" id="btn-team-mt"><b>#TeamMT</b><br><small>(วิศวกรรมโลหการและวัสดุ)</small></button>
            </div>
            <div class="col-md-6">
              <button class="btn btn-default btn-block" id="btn-team-pe"><b>#TeamPE</b><br><small>(วิศวกรรมปิโตรเลียม)</small></button>
            </div>
            <div class="col-md-6">
              <button class="btn btn-default btn-block" id="btn-team-mn"><b>#TeamMN</b><br><small>(วิศวกรรมทรัพยากรธรณี)</small></button>
            </div>
            <div class="col-md-6">
              <button class="btn btn-default btn-block" id="btn-team-sv"><b>#TeamSV</b><br><small>(วิศวกรรมสำรวจ)</small></button>
            </div>
            <div class="col-md-6">
              <button class="btn btn-default btn-block" id="btn-team-env"><b>#TeamENV</b><br><small>(วิศวกรรมสิ่งแวดล้อม)</small></button>
            </div>
            <div class="col-md-6">
              <button class="btn btn-default btn-block" id="btn-team-cp"><b>#TeamCP</b><br><small>(วิศวกรรมคอมพิวเตอร์)</small></button>
            </div>
            <div class="col-md-6">
              <button class="btn btn-default btn-block" id="btn-team-che"><b>#TeamCHE</b><br><small>(วิศวกรรมเคมี)</small></button>
            </div>
            <div class="col-md-6">
              <button class="btn btn-default btn-block" id="btn-team-nano"><b>#TeamNANO</b><br><small>(วิศวกรรมนาโน)</small></button>
            </div>
            <div class="col-md-6">
              <button class="btn btn-default btn-block" id="btn-team-adme"><b>#TeamADME</b><br><small>(วิศวกรรมการออกแบบและการผลิตยานยนต์)</small></button>
            </div>
            <div class="col-md-6">
              <button class="btn btn-default btn-block" id="btn-team-ice"><b>#TeamICE</b><br><small>(วิศวกรรมสารสนเทศและการสื่อสาร)</small></button>
            </div>
            <div class="col-md-6">
              <button class="btn btn-default btn-block" id="btn-team-aero"><b>#TeamAERO</b><br><small>(วิศวกรรมอากาศยาน)</small></button>
            </div>
          </div>
          <div class="row overlay-selector">
            <div class="col-md-12 overlay-selector-header">
              <hr>
              <h3>ชมรมของคณะวิศวกรรมศาสตร์ในงาน Intania Open House</h3>
            </div>
          </div>
          <div class="row overlay-selector">
            <div class="col-md-4">
              <button class="btn btn-default btn-block" id="btn-team-club-1"><b>#TeamClique</b><br><small>(ชมรม Clique)</small></button>
            </div>
            <div class="col-md-4">
              <button class="btn btn-default btn-block" id="btn-team-club-2"><b>#TeamEIC</b><br><small>(ชมรมนักประดิษฐ์วิศวกรรม)</small></button>
            </div>
            <div class="col-md-4">
              <button class="btn btn-default btn-block" id="btn-team-club-3"><b>#ทีมชวก.</b><br><small>(ชุมนุมวิชาการ)</small></button>
            </div>
            <div class="col-md-4">
              <button class="btn btn-default btn-block" id="btn-team-club-4"><b>#TeamFE</b><br><small>(ค่าย FECamp)</small></button>
            </div>
            <div class="col-md-4">
              <button class="btn btn-default btn-block" id="btn-team-club-5"><b>#TeamFormula</b><br><small>(Rapidamente Formula Club)</small></button>
            </div>
            <div class="col-md-4">
              <button class="btn btn-default btn-block" id="btn-team-club-6"><b>#ทีมลานเกียร์</b><br><small>(ค่ายลานเกียร์)</small></button>
            </div>
            <div class="col-md-4">
              <button class="btn btn-default btn-block" id="btn-team-club-7"><b>#TeamThinc.</b><br><small>(ชมรม Thinc.)</small></button>
            </div>
            <div class="col-md-4">
              <button class="btn btn-default btn-block" id="btn-team-club-8"><b>#TeamVATA</b><br><small>(ชมรมวาทะและศิลปะบันเทิง)</small></button>
            </div>
            <div class="col-md-4">
              <button class="btn btn-default btn-block" id="btn-team-club-9"><b>#TeamVESC</b><br><small>(ค่ายยุววิศวกรบพิธ)</small></button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/cropper.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script src="js/reimg.js"></script>
    <script src="js/app-20151107-0428.js"></script>
  </body>
</html>

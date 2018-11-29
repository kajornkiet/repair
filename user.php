<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>แจ้งซ่อมอุปกรณ์</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Clean responsive bootstrap website template">
  <meta name="author" content="">
  <!-- styles -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="assets/css/docs.css" rel="stylesheet">
  <link href="assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="assets/css/flexslider.css" rel="stylesheet">
  <link href="assets/css/refineslide.css" rel="stylesheet">
  <link href="assets/css/font-awesome.css" rel="stylesheet">
  <link href="assets/css/animate.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/color/default.css" rel="stylesheet">

  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="assets/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

  <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.1" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Maitree" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Krub" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Plato
    Theme URL: https://bootstrapmade.com/plato-responsive-bootstrap-website-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
   <style>
    
button {
    padding: 5px 20px;
    margin: 8px 0;
    float: center;
    border: none;
    background-color: #1E90FF;
    color: white;
    border-bottom: 2px solid #C8CCD4;
    transition: all .15s ease;
}
 select {
    padding: 5px 20px;
    margin: 8px 0;
    border: none;
    background-color: #1E90FF;
    color: white;
    border-bottom: 2px solid #C8CCD4;
    transition: all .15s ease;
}
  </style>

</head>

<body>
 <?php include 'menu.php'; ?>

  <section id="subintro">

    <div class="container">
      <div class="row">
        <div class="span4">
          <h3>หน้า <strong>แจ้งซ่อมอุปกรณ์ user</strong></h3>
        </div>
        <div class="span8">
          <ul class="breadcrumb notop">
            <li><a href="index.php">Home</a><span class="divider">/</span></li>
            <li class="active">หน้าแจ้งซ่อมอุปกรณ์</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section id="maincontent">
    <div class="container">
      <div class="row">
        <div class="span12">
          <article>
            <div class="clearfix">
            </div>
            <div class="row">
              <div class="span8">
                <aside>
                  <div class="widget">
                    <h4>อุปกรณ์</h4>
                    <ul class="project-detail">
                      <li>
                        <input type="text" name="yymmdd" class="nav-link"placeholder="Y/m/d">
                      </li>
                      <li>
                        <input type="number" name="#" class="nav-link"placeholder="หมายเลขห้อง">
                      </li>
                      <li>
                        <select name="เครื่องหมาย"class="nav-link" >
                          <option value="#"><b>คอมพิวเตอร์</b></option>
                          <option value="#"><b>ปลั๊กไฟ</b></option>
                          <option value="#"><b>หลอดไฟ</b></option>
                          <option value="#"><b>สายไฟ</b></option>
                          <option value="#"><b>ทีวี</b></option>
                          <option value="#"><b>ตู้เย็น</b></option>
                        </select>
                      </li>
                      <li>
                        <input type="text" name="เสีย" class="widget"placeholder="เสียเพราะอะไร"><br>
                        <input type="text" name="เบอร์ติดต่อ" class="widget"placeholder="เบอร์ติดต่อ"><br>
                        <input type="text" name="E-mail" class="widget"placeholder="E-mail"><br>
                        <input type="file" name="newfile" class="widget"><br>

                        <button type="submit"  class="btn btn-danger">ส่ง</button> 
                      </li>

                    </ul>
                  </div>
                </aside>
                </div>
              <div class="span4">
                <aside>
                  <div class="widget">
                    <h4>ติดต่อเจ้าหน้าที่</h4>
                    <ul class="project-detail">
                      <li><label>Project name :</label> ระบบแจ้งซ่อม</li>
                      <li><label>E-mail :</label> @gmail.com</li>
                      <li><label>Tel :</label> 02-0256789</li>
                      <li><label>Project link :</label><a href="#">http://www.cgistln.nu.ac.th</a></li>
                    </ul>
                  </div>
                </aside>
              </div>
            </div>
          </article>
          <!-- end article full post -->
        </div>
      </div>
    </div>
  </section>

  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/modernizr.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/google-code-prettify/prettify.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/jquery.prettyPhoto.js"></script>
  <script src="assets/js/portfolio/jquery.quicksand.js"></script>
  <script src="assets/js/portfolio/setting.js"></script>
  <script src="assets/js/hover/jquery-hover-effect.js"></script>
  <script src="assets/js/jquery.flexslider.js"></script>
  <script src="assets/js/classie.js"></script>
  <script src="assets/js/cbpAnimatedHeader.min.js"></script>
  <script src="assets/js/jquery.refineslide.js"></script>
  <script src="assets/js/jquery.ui.totop.js"></script>

  <!-- Template Custom Javascript File -->
  <script src="assets/js/custom.js"></script>

</body>

</html>

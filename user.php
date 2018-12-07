<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>แจ้งซ่อมอุปกรณ์ครุภัณฑ์</title>
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
 <?php 
include 'config.php';


if ( isset($_POST[submit]) ) {

  $date = $_POST[date];
  $code = $_POST[code];
  $equipment = $_POST[equipment];
  $brand = $_POST[brand];
  $gen = $_POST[generation];
  $issue = $_POST[issue];
  $username = $_POST[username];
  $department = $_POST[department];
  $phone = $_POST[phonenumber];
  $email = $_POST[email];
  $manager = $_POST[manager];
  $status = $_POST[status];
  $description = $_POST[description];

  $sql = "INSERT INTO report (  date,code,equipment,brand,generation,issue,username,department,phonenumber,email,manager,status,description )  values (  '$date','$code','$equipment','$brand','$gen','$issue' ,'$username','$department','$phone','$email','$manager','$status','$description' )  ;";

  $query = pg_query($sql);
  if ($query) {
     $text = '<div class="alert alert-success alert-dismissible">
        <a  class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> Indicates a successful or positive action.
      </div>';
  }else{
    $text = '<div class="alert alert-success alert-dismissible">
        <a  class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> Indicates a successful or positive action.
      </div>';
  }

 

}
?> 
 <?php include 'menu.php'; ?>

  <section id="subintro">

    <div class="container">
      <div class="row">
        <div class="span4">
          <h3>แจ้งซ่อม <strong>อุปกรณ์ครุภัณฑ์</strong></h3>
        </div>
        <div class="span8">
          <ul class="breadcrumb notop">
            <li><a href="index.php">Home</a><span class="divider">/</span></li>
            <li class="active">แจ้งซ่อมอุปกรณ์ครุภัณฑ์ </li>
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
                    <form action="tableu.php" method="post">
                      <?php echo $text; ?>
                    <h4>ใบแจ้งซ่อมครุภัณฑ์</h4>
                    <ul class="project-detail">
                      <li>
                        <input type="date" name="date" class="widget"placeholder="yy/mm/dd"><br>
                        <input type="number" name="code" class="widget"placeholder="รหัสครุภัณฑ์">
                        <input type="text" name="equipment" class="widget"placeholder="อุปกรณ์"><br>
                        <input type="text" name="brand" class="widget"placeholder="ยี่ห้อ">
                        <input type="text" name="generation" class="widget"placeholder="รุ่น"><br>
                        <input type="text" name="issue" class="widget"placeholder="ปัญหา"><br>
                        <input type="text" name="username" class="widget"placeholder="ชื่อ">
                        <input type="text" name="department" class="widget"placeholder="หน่วยงาน"><br>
                        <input type="text" name="phonenumber" class="widget"placeholder="เบอร์ติดต่อ">
                        <input type="text" name="email" class="widget"placeholder="E-mail"><br>

                        <input type="file" name="description" class="widget"><br>

                        <button type="submit" name="submit" class="btn btn-danger">ส่ง</button> 
                      </li>
                    </ul>
                    </form>
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

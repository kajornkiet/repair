<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>ตารางแจ้งซ่อม</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Clean responsive bootstrap website template">
  <meta name="author" content="">
  <!-- styles -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="assets/css/docs.css" rel="stylesheet">
  <link href="assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
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

  <link href="https://fonts.googleapis.com/css?family=Maitree" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Krub" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
  <!-- =======================================================
    Theme Name: Plato
    Theme URL: https://bootstrapmade.com/plato-responsive-bootstrap-website-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
 


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

}
?>

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
            <div class="heading">
              <h3><strong>ตารางบันทึกการดำเนินการแจ้งซ่อม</strong></h3>
            </div>
          </div>
            <div class="row">
              <div class="span12">
                <aside>
                  <div class="clearfix">  
                  <form action="tableu.php" method="post">           
                    <table class="table table-bordered"> 
                      <thead>
                        <tr> 
                          <th>วันที่แจ้ง</th>
                          <th>รหัสครุภัณฑ์</th>
                          <th>อุปกรณ์</th>
                          <th>ยี่ห้อ</th>
                          <th>รุ่น</th>
                          <th>ปัญหา</th>
                          <th>ชื่อผู้แจ้งซ่อม</th>
                          <th>หน่วยงาน</th>
                          <th>เบอร์ติดต่อ</th>
                          <th>E-mail</th>
                          <th>ผู้ดำเนินการ</th>
                          <th>สถานะ</th>
                          <th>รายละเอียด</th>
                        </tr>
                      </thead>
                      <?php 
                          $sql1 = 'SELECT * from report  order by id asc';
                          $query1 = pg_query($sql1);
                          while ( $arr1 = pg_fetch_array( $query1 ) ) {
                      ?>
                      <tbody>
                        <tr>
                          <td><?php echo $arr1[date]; ?></td>
                          <td><?php echo $arr1[code]; ?></td>
                          <td><?php echo $arr1[equipment]; ?></td>
                          <td><?php echo $arr1[brand]; ?></td>
                          <td><?php echo $arr1[generation]; ?></td>
                          <td><?php echo $arr1[issue]; ?></td>
                          <td><?php echo $arr1[username]; ?></td>
                          <td><?php echo $arr1[department]; ?></td>
                          <td><?php echo $arr1[phonenumber]; ?></td>
                          <td><?php echo $arr1[email]; ?></td>
                          <td><?php echo $arr1[manager]; ?></td>
                          <td><?php echo $arr1[status]; ?></td>
                          <td><?php echo $arr1[description]; ?></td>
                        </tr>  
                      </tbody>
                      <?php } ?> 
                    </table>
                  </form>
                  </div>
                </aside>
                </div>
            </div>
          </article>
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

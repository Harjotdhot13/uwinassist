<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="format-detection" content="telephone=no" />
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/grid.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/camera.css" />
  <link rel="stylesheet" href="css/owl.carousel.css" />
  <script src="js/jquery.js"></script>
  <script src="js/jquery-migrate-1.2.1.js"></script>
  <script src="js/jquery.equalheights.js"></script>
  <!--[if (gt IE 9)|!(IE)]><!-->
  <script src="js/jquery.mobile.customized.min.js"></script>
  <!--<![endif]-->
  <script src="js/camera.js"></script>
  <script src="js/owl.carousel.js"></script>
  <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0"
                 height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
    <![endif]-->
</head>

<body>
  <div class="page">
    <!--========================================================
                          HEADER
=========================================================-->
    <header id="header">
      <div id="stuck_container">
        <div class="container">
          <div class="row">
            <div class="grid_12">
              <div class="brand put-left">
                <h1>
                            <a href="index.html" class="text_1">
                                <img src="images/logo.jpg " style="width:80px;height:80px;" class="brand put-left" /> 
                              Uwindsor 
                            </a>
                            <p class="color_3">  Expert Advisor</p>
                        </h1> </div>
              <nav class="nav put-right">
                <ul class="sf-menu">
                  <li><a href="index.html">Home</a></li>
                  <li><a href=" ">Services</a>
                    <ul>
                      <li><a href="prerequirements.html">Pre-Requirements</a>
                        <li><a href="residence1.php">Residence Services</a>
                          <li><a href="transportation.php">Transportation Services</a>
                            <li><a href="recreation.php">Recreational Services</a></li>
                            <li><a href="banking.php">Banking Services</a></li>
                            <li><a href="medical.php">Medical Services</a>
                              <li><a href="food.php">Food Services</a>
                                <li><a href="shoppinginfo.php">Shopping Information</a></li>
                                <li><a href="networkoperators.php">Network Operators</a>
                                  <li><a href="additionalinformation.php">Additional Important Information</a> </ul>
                    </li>
                    <li><a href=" login.html">Chat Room</a></li>
                    <li><a href="contacts.html">Contacts</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!--========================================================
                          CONTENT
=========================================================-->
    <section id="content">
      <div class="ic">More Website Templates @ TemplateMonster.com - September08, 2014!</div>
      <div class="camera-wrapper">
        <div id="camera" class="camera-wrap">
          <div data-src="images/medical.jpg">
            <div class="fadeIn camera_caption">
              <h2 class="text_1 color_1">Medical Services</h2> <a class="btn_1" href="medical.php">More info</a> </div>
          </div>
          <div data-src="images/residence.jpg">
            <div class="fadeIn camera_caption">
              <h2 class="text_1 color_1">Residence Services</h2> <a class="btn_1" href="residence1.php">More info</a> </div>
          </div>
          <div data-src="images/recreation.jpg">
            <div class="fadeIn camera_caption">
              <h2 class="text_1 color_1">Recreation Services</h2> <a class="btn_1" href="recreation.php">More info</a> </div>
          </div>
          <div data-src="images/food.jpg">
            <div class="fadeIn camera_caption">
              <h2 class="text_1 color_1">Food Services</h2> <a class="btn_1" href="food.php">More info</a> </div>
          </div>
          <div data-src="images/shopping.jpg">
            <div class="fadeIn camera_caption">
              <h2 class="text_1 color_1">Shopping Information</h2> <a class="btn_1" href="shoppinginfo.php">More info</a> </div>
          </div>
        </div>
      </div> <br> <br>
      <div class="container">
        <div class="row">
          <p align="center" class="text_1"><u>Student Health Services</u></p>
          <p class="text_3"> We are your family physician's office while on campus. We provide confidential, student-centred health care, including comprehensive medical care, counselling, and referrals. Patients must be University of Windsor students. Even if you opt out of the student drug plan you are still welcome to see our dedicated team of physicians, nurses and administrative staff.</p>
          <p class="text_2">To Make or Cancel an Appointment Call:519-973-7002</p>
          <p> <u>Location:&nbsp;</u>Room 242 CAWSC</p>
          <p><u>Timings:&nbsp;</u>Mon-Thurs 9am-5pm & Friday 9am-1pm & 2-5pm (closed 1-2pm) by appointment</p>
          <p><u>For Blood Tests:&nbsp;</u>Monday - Friday9:30 am - 11 am and 2 pm - 4 pm</p>
          <p><u>Location:&nbsp;</u>Health Promotion Office Room 240, CAWSC</p>
          <p><u>Contact Number:&nbsp;</u>519-253-3000 X 3260</p>
          <p class="text_5"><u>CHARGE:&nbsp;</u> you will be charged for a missed doctor appointment. Call to cancel up one hour before your scheduled appointment or you will be billed. Messages to cancel appointments can be left 24 hours a day: 519-973-7002 </p>
        </div>
      </div>
      <div class="container">
        <div class="row wrap_1">
          <div class="text_4">
            <p align="center" class="text_1"><u>Other Hospitals</u></p>
            <?php include "connect.php";?>
            <?php
 $result = select_qry("select * from `medical_services`;");
?>
              <table id='display' style="width:90%">
                <tr class="text_2">
                  <td>Name</td>
                  <td>Address</td>
                  <td>Phone Number</td>
                  <td>Hours</td>
                  <td>Information</tr>
                <?php
        foreach($result as $row){
?>
                  <td><b><?php  echo $row['Med_Name']; ?></td>
        <td><b><?php echo $row['Med_Address']?></td>
        <td><b><?php echo $row['Med_Phone']?></td>
        <td><b><?php echo $row['Med_Hours'] ?></td>
        <td><b><?php echo $row['Med_Comments'] ?></td>
       
        
        </tr>
        <?php
            }
        ?>
        <?php
        mysqli_close($conn);
        ?>
  </table>
<!--========================================================
                          FOOTER
=========================================================-->
<footer id="footer" class="color_9">
    <div class="container">
        <div class="row">
            <div class="grid_12">
                <p class="info text_4 color_4">
                  <span> ©Uwindsor Expert Advisor</span>
                </p>
            </div>
        </div>
    </div>
</footer>
<script src="js/script.js"></script>
</body>
</html>
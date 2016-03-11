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
      <div class="container">
        <div class="row wrap_1 wrap_5">
          <?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

   if (empty($_POST["firstname"])) {
     $nameErr = "FirstName is required";
   } else {
     $name = test_input($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters and white space allowed"; 
     }
   }
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["lastname"])) {
     $nameErr = "LastName is required";
    } else {
     $name = test_input($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters and white space allowed"; 
     }
     }
   
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format"; 
     }
   }
     
  
   

   if (empty($_POST["comment"])) {
     $comment = "";
   } else {
     $comment = test_input($_POST["comment"]);
   }

   if (empty($_POST["gender"])) {
     $genderErr = "Gender is required";
   } else {
     $gender = test_input($_POST["gender"]);
   }
}
}
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
            <form method="post" action="adduser.php"> First Name: <input type="text" name="FirstName" value="<?php echo $firstname;?>"> <span class="error">* <?php echo $nameErr;?></span> <br><br> Last Name: <input type="text" name="LastName" value="<?php echo $lastname;?>"> <span class="error">* <?php echo $nameErr;?></span> <br><br> Phone Number <input type="text" name="PhoneNumber" value="<?php echo $phonenumber;?>"> <span class="error">* <?php echo $nameErr;?></span> <br><br> Gender: <input type="radio" name="Gender" <?php if (isset($gender) && $gender=="female" ) echo "checked";?> value="female">Female <input type="radio" name="Gender" <?php if (isset($gender) && $gender=="male" ) echo "checked";?> value="male">Male <span class="error">* <?php echo $genderErr;?></span> <br><br> E-mail: <input type="text" name="EmailId" value="<?php echo $email;?>"> <span class="error">* <?php echo $emailErr;?></span> <br><br> Password <input type="password" name="Password" value="<?php echo $password;?>"> <span class="error">* <?php echo $emailErr;?></span> <br><br> <input type="submit" name="submit" value="Submit"> </form>
</body>

</html>
</div>
<!--========================================================
                          FOOTER
=========================================================-->
<footer id="footer" class="color_9">
  <div class="container">
    <div class="row">
      <div class="grid_12">
        <p class="info text_4 color_4"> <span> ©Uwindsor Expert Advisor</span> </p>
      </div>
    </div>
  </div>
</footer>
<script src="js/script.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<style type="text/css">
.nav-pills > li > a {
      background-color:transparent;
      color: #FFFFFF;
	  font-size:20px;
	  font-weight: bold; 
    }
	ul.nav > li > a:hover {
	background-color:#337ab7;
	color: #FFFFFF;
	border-style: none;
}
	</style>
	
	<head>

<title>Online Scientific Calculator</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
  <script src="lib/jquery-2.1.3.min.js"></script> 
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
 
  <script type="text/javascript" src="lib/validator.min.js"></script>
  <script src="lib/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="lib/sweetalert.css">

  <link rel='shortcut icon' type='image/x-icon' href='images/favicon.png' />
</head>

<body style="background:url('images/calculator_background.jpg');background-position:center;background-attachment:fixed;">

<div class="container">
  <ul style="margin:20px 0 15px 0;font-style:italic;" class="nav nav-pills">
    <li class="<?php if(preg_match('/index.php/', $_SERVER['REQUEST_URI'])) echo 'active'; ?>"><a href="index.php">Home</a></li>
    <li class="<?php if(preg_match('/calculator.php/', $_SERVER['REQUEST_URI'])) echo 'active'; ?>"><a href="calculator.php">Arthematic Calculator</a></li>
    <li class="<?php if(preg_match('/conversion.php/', $_SERVER['REQUEST_URI'])) echo 'active'; ?>" ><a href="conversion.php">Number Conversion</a></li>
    <li class="<?php if(preg_match('/trigonometry.php/', $_SERVER['REQUEST_URI'])) echo 'active'; ?>"><a href="trigonometry.php">Trigonometry Calculator</a></li>
    <li class="<?php if(preg_match('/about.php/', $_SERVER['REQUEST_URI'])) echo 'active'; ?>"><a href="about.php">About Me</a></li>
	<li class="<?php if(preg_match('/contact.php/', $_SERVER['REQUEST_URI'])) echo 'active'; ?>"><a href="contact.php">Feedback</a></li>
  </ul>
</div>

	  </body></html>
<?php
   include dirname(__FILE__).'/../database/database.php';
  session_start();

  if (isset($_SESSION['errors'])) {
    $err = $_SESSION['errors'];
    unset($_SESSION['errors']);
}
if (isset($_SESSION['success'])) {
  $message = $_SESSION['success'];
  unset($_SESSION['success']);
}
if(isset($_SESSION['old_data']))
{
  $data = $_SESSION['old_data'];
  unset($_SESSION['old_data']);
}
  
?>


<!DOCTYPE html>

<html lang="">

<head>
<title>WFRTDS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=0.5, maximum-scale=0.5, user-scalable=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- <link href="layout/styles/form.css" rel="stylesheet" type="text/css" />-->
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/form.css" rel="stylesheet" type="text/css" />
<link href="assets/css/login.css" rel="stylesheet">
</head>
<body id="top">

<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.html">Wastage Food Reduction Trough Donation system</a></h1>
      <p>Food For All</p>
    </div>
    <div id="quickinfo" class="fl_right">
      <ul class="nospace inline">
        <li><strong>Hotline:</strong><br>
          +00 (123) 456 7890</li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </header>
  <nav id="mainav" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul class="clear">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="post.php">Posts</a></li>
      <li><a class="active" href="">Donate</a>
      <ul>
          <li><a href="food-donate.php">Donate Now</a></li>
         
          <li><a href="donations.php">Donate Clearification</a> </li>
        </ul>
      </li>

      <li><a class="active" href="#">Registration</a>
        <ul>
          <li><a href="user-register.php">Registration As Donner</a></li>
          <li><a href="user2-register.php">Registration As Receiver</a>
          </li>
        </ul>
      </li>
      <li><a href="donner-list.php">Donners</a></li>
      <li><a href="receiver-list.php">Receivers</a></li>
      <li><a href="#">About</a>
      <ul>
          <li><a href="about.php">About Us</a></li>
          <li><a href="contact.php">Contact Us</a>
          </li>
        </ul>
      </li>
      </li>
      <?php 
    if (isset($_SESSION['id'])) {
        ?>
           <li><a href="#">Logged In (<?php  echo  $_SESSION['username']; ?>)</a>
           <ul><li><a href="logout.php">Log Out</a></li></ul>
           </li>
           
        <?php
    } else {
        ?>
            <li><a href="enter your login page link">Log In</a>
            <ul>
         <li><a href="Admin/login.php">Log In As Admin</a></li>
          <li><a href="donner_login.php">Log In As Donner</a></li>
          <li><a href="receiver-login.php">Log In As Receiver</a>
          </li>
        </ul>
            </li>
        <?php
    }
?>
     
      <ul>
         <li><a href="Admin/login.php">Log In As Admin</a></li>
          <li><a href="donner_login.php">Log In As Donner</a></li>
          <li><a href="receiver-login.php">Log In As Receiver</a>
          </li>
        </ul>
    </li>
    </ul>
    <!-- ################################################################################################ -->
  </nav>
</div>
<!-- ################################################################################################ -->

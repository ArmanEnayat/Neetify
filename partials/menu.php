<?php 

include("config/constants.php"); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>40 Days Neet Crash Course: Neetify!</title>
  
  <!-- HTML -->
  
  <!--<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>-->
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  
  <!--<script src="https://kit.fontawesome.com/4d8f17ae40.js" crossorigin="anonymous"></script>-->
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous"></script>
  

  <!-- Custom Styles -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  
 <!-- navigation bar -->
 <nav>
   
   <img src="images/crash.png">
   
   <div class="nav">
     <ul class="navUl">
       <img id="hamClose" src="images/close.png">
       <li><a href="<?php echo SITEURL; ?>home.php">Home</a></li>
       <li><a href="<?php echo SITEURL; ?>mock-tests.php">Mocks</a></li>
       
       <li><a href="<?php echo SITEURL; ?>subscription.php">Subscriptions</a></li>
       <li><a href="<?php echo SITEURL; ?>about.html">About Us</a></li>
       <li><a href="<?php echo SITEURL; ?>logout.php">Log Out</a></li>
     </ul>
     
     <img id="ham" src="images/menu.png">
     
   </div>
   
 </nav>

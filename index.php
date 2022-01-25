<?php 

include("partials/menu.php");

//require("config/login-check.php");

if(isset($_SESSION['login']))
{
    echo $_SESSION['login'];
    unset($_SESSION['login']);
}

/*
if(isset($_SESSION['user']))
{
    echo $_SESSION['user'];
}*/

if(isset($_SESSION['login-fail']))
{
    echo $_SESSION['login-fail'];
    unset($_SESSION['login-fail']);
}

if(isset($_SESSION['account_created']))
{
    echo $_SESSION['account_created'];
    unset($_SESSION['account_created']);
}

?>
 
 <!-- Home -->
 
 <div id="landingPage">
   
   <h2>Increase Your Ability & Skills With Our Handmade Mock Tests</h2>
   
   <p>Neetify is a Neet Entrance Exam Preparation App, We Provide Mock Tests and Some Other Interesting Things, To Increase Your Skills and answering abilities, so that you perform better in your examination. You Join and Enjoy Some Benefits Absolutely For Free!</p>
   
   <div class="buttons">
     <!--<a class="btn blue_btn" href="/register.html">Join For Free</a>-->
     <a class="btn btn2" href="/login.php">Login ~ Signup</a>
   </div>
   
  </div>
  
  <!--<div class="alert show">
      <span><i class="fas fa-exclamation-circle"></i></span>
      <span class="msg">Please Login/Signup To Access The Features!</span>
      <span class="close">
          <span class="fas fa-times"></span>
      </span>
  </div>-->
  
   <!-- Amazing Featues -->
  
  <section id="features">
    <h1>Amazing Features</h1>
    <p>Provides You Many Amazing Features</p>
    
    <div class="featuresBase">
      
      <div class="featuresBox features_1">
        <i class="fa fa-check-double"></i>
        <h3>Solutions</h3>
        <p>There are Answers To The Questions along with proper solutions to them.</p>
      </div>
      <div class="featuresBox features_2">
        <i class="fas fa-vial"></i>
        <h3>All Subjects</h3>
        <p>Mock Tests of Every Subject, like Chem., Bio., Maths etc</p>
      </div>
      
      <div class="featuresBox features_3">
        <i class="fas fa-tablet-alt"></i>
        <h3>Use Anywhere</h3>
        <p>It is all accessible everywhere in every screen sizes, powerful, smooth</p>
      </div>
      
      <!-- Connect Features and
      <div class="featuresBox features_4">
        <i class="fas fa-users"></i>
        <h3>Connect With People Like You</h3>
      </div> -->
      
      <div class="featuresBox features_4">
        <i class="fas fa-chart-line"></i>
        <h3>Increase Your Performance</h3>
        <p>Check Yoir Scores, and Practice More to increase your performance with analysis</p>
      </div>
      
    </div>
  </section>
  
  <!-- Registration Section (In Landing PagePage -->
  <section id="register">
      <div class="remind">
          <p>Get 100+ Mocks For Free</p>
          <h1>Register To Get!</h1>
          
          <div class="time">
              <div class="date">
                  29 <br> Days
              </div>
              <div class="date">
                  23 <br> Hours
              </div>
              <div class="date">
                  06 <br> Minutes
              </div>
              <div class="date">
                  58 <br> Seconds
              </div>
          </div>
      </div>
      
      <div class="formI">
          <h3>Create Free Account NOW!</h3>
          <form action="" class="signupI" method="POST">
             <div class="inputField">
                 Username :
               <input type="name" placeholder="Try A Unique One!" name="username" required>
             </div>
             <div class="inputFieldI">
                 Email :
               <input type="text" placeholder="Your Email Address" name="email" required>
             </div>
             <div class="inputFieldI">
                 Password :
               <input type="password" name="password" placeholder="Make a Password">
             </div>
             <div class="inputFieldI">
                 Confirm Password :
               <input type="password" name="confirm_password" placeholder="Re-enter Your Password"> 
             </div>
             <div class="inputFieldI">
               <input type="submit" value="Signup" name="submit">
             </div>
             
            </form>
      </div>
  </section>

  
  <?php include("partials/footer.php"); ?>
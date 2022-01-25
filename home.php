<?php

include("partials/menu.php");
include("config/login-check.php");

if(isset($_SESSION['account_created']))
{
    echo $_SESSION['account_created'];
    unset($_SESSION['account_created']);

}

if(isset($_SESSION['login']))
{
    echo $_SESSION['login'];
    unset($_SESSION['login']);
}

if(isset($_SESSION['user']))
{
    echo $_SESSION['user'];
}

if(isset($_SESSION['usermail']))
{
    echo $_SESSION['usermail'];
    unset($_SESSION['usermail']);
}

?>
 
 <!-- Home -->
 
 <div id="landingPage">
   
   <h2>Increase Your Ability & Skills With Our Handmade Mock Tests</h2>
   
   <p>Neetify is a Neet Entrance Exam Preparation App, We Provide Mock Tests and Some Other Interesting Things, To Increase Your Skills and answering abilities, so that you perform better in your examination. You Join and Enjoy Some Benefits Absolutely For Free!</p>
   
   <div class="buttons">
     <a class="btn blue_btn" href="/register.html">Join For Free</a>
     <a class="btn btn2" href="/mock-test.html">Take a Test</a>
   </div>
   
  </div>
  
  <!-- Amazing Featues -->
  
  <section id="features">
    <h1>Amazing Features</h1>
    <p>There are many features we provide along with mocks</p>
    
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
  
  <?php include("partials/footerR.php"); ?>
  
</body>


<!-- Project -->
<script src="js/main.js"></script>

<?php 

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    
    $sql = "SELECT * FROM tbl_users WHERE id=$id";
    
    $res = mysqli_query($conn, $res);
    
    if($res==TRUE)
    {
        $count = mysqli_num_rows($res);
        
        if($count==1)
        {
            $row = mysqli_fetch_assoc($res);
            //user Logged In And Available
            $username = $row['username'];
            $email_id = $row['email_id'];
            
            $new_id = $row['id'];
        }
        else
        {
            $_SESSION['no-login'] = "<div class='alertR show'>
      <span><i class='fas fa-exclamation-circle'></i></span>
      <span class='msgR'>Login Failed! Username or Password Didn't Match Your Credentials</span>
      <span class='closeR'>
          <span class='fas fa-times'></span>
      </span>
  </div>";
  
           header('location:'.SITEURL.'');
        }
    }
    else
    {
        header('location:'.SITEURL.'');
    }
    
}

?>
</body>
</html>
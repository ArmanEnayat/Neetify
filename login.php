<?php 

include("partials/menu.php"); 
require("config/constants.php");

if(isset($_SESSION['no-login-message']))
{
    echo $_SESSION['no-login-message'];
    unset($_SESSION['no-login-message']);
}

?>


<div class="logCont">
<!-- Login and Register Form -->

<h1>Login or Register With Us, Its Absolutely Free</h1>
<h2>~ This is Fast and Easy.</h2>

 <section class="form">
   <div class="wrapper">
     <div class="titleText">
       <div class="login title">Login</div>
       <div class="signup title">Signup</div>
     </div>
     
       <div class="formCont">
         <div class="slideController">
           
           <input type="radio" name="slider" id="login" checked>
           <input type="radio" name="slider" id="signup">
           
           <label for="login" class="slide loginSlide">Login</label>
           <label for="signup" class="slide signupSlide">Register</label>
           <div class="superSlider"></div>
         </div>
     
         <div class="formInner">
           <form action="" class="loginForm" method="POST">
             <div class="inputField">
               Username :
               <input type="text" placeholder="Enter Username" name="email_login_id" required>
             </div>
             <div class="inputField">
                 Password :
               <input type="password" placeholder="Enter Password" name="login_password">
             </div>
             <div class="passReset"><a href="#">Forgot Password?</a></div>
             <div class="inputField">
               <input type="submit" value="Login" name="submit_login">
             </div>
             <div class="signupPageLink">Don't Have an Account?<a href="#">Join Now</a></div>
         </form>
         
         
         
         <div class="signupForm">
           <form action="" class="signup" method="POST">
             <div class="inputField">
                 Username :
               <input type="name" placeholder="Try A Unique One!" name="username" required>
             </div>
             <div class="inputField">
                 Email :
               <input type="text" placeholder="Your Email Address" name="email" required>
             </div>
             <div class="inputField">
                 Password :
               <input type="password" name="password" placeholder="Make a Password">
             </div>
             <div class="inputField">
                 Confirm Password :
               <input type="password" name="confirm_password" placeholder="Re-enter Your Password"> 
             </div>
             <div class="inputField">
               <input type="submit" value="signup" name="submit">
             </div>
           
            </form>
          </div>
       </div>
     </div>
 </section> 
 
 
</div>
</div>

<?php 

    if(isset($_POST['submit']))
    {
        //echo"Ok";
        //Get The Data From Form
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email_id = mysqli_real_escape_string($conn, $_POST['email']);
        $raw_password = md5($_POST['password']);
        $password = mysqli_real_escape_string($conn, $raw_password);
        $confirm_raw_password = md5($_POST['confirm_password']);
        $confirm_password = mysqli_real_escape_string($conn, $confirm_raw_password);
        
        $sql = "SELECT * FROM tbl_users WHERE username='$username' OR email_id='$email_id'";
        
        $res = mysqli_query($conn, $sql);
        
        if($res==TRUE)
        {
          
            //echo "True";
            $count = mysqli_num_rows($res);
            if($count>0)
            {
              
                //echo "User Already Available";
                $row = mysqli_fetch_assoc($res);
                if($row['username']==$_POST['username'])
                {
                    $_SESSION['username_available'] = "<div class='alert show'>
      <span><i class='fas fa-exclamation-circle'></i></span>
      <span class='msg'>Username Already Exists.</span>
      <span class='close'>
          <span class='fas fa-times'></span>
      </span>
  </div>";
                }
                if($row['email_id']==$_POST['email'])
                {
                    $_SESSION['email_available'] = "<div class='alert show'>
      <span><i class='fas fa-exclamation-circle'></i></span>
      <span class='msg'>Email Id Already Registered.</span>
      <span class='close'>
          <span class='fas fa-times'></span>
      </span>
  </div>";
                }
            }
            else
            {
                if($password==$confirm_password)
                {
                
                    $sql2 = "INSERT INTO tbl_users SET
                       username='$username',
                       email_id='$email_id',
                       password='$password'
                    ";
                
                    $res2 = mysqli_query($conn, $sql2);
                
                    if($res2==TRUE)
                    {
                        
                        //Account Data Added To Databse
                        $_SESSION['account_created'] = "<div class='alertG show'>
      <span><i class='fas fa-shield-check'></i></span>
      <span class='msgG'>Your Account Has Been Created Successfuly</span>
      <span class='closeG'>
          <span class='fas fa-times'></span>
      </span>
  </div>";
                        $_SESSION['user'] = $username;
                        header('location:'.SITEURL.'index.php');
                    }
                    else
                    {
                        //Failed To Add AccountData
                        $_SESSION['account_created'] = "<div class='alertR show'>
      <span><i class='fas fa-exclamation-circle'></i></span>
      <span class='msgR'>Unable To Create Account, Try Again Later</span>
      <span class='closeR'>
          <span class='fas fa-times'></span>
      </span>
  </div>";
                    }
                }
                else
                {
                  $_SESSION['pwd-not-match'] = "<div class='alertR show'>
      <span><i class='fas fa-exclamation-circle'></i></span>
      <span class='msgR'>Password Doesn't Match.</span>
      <span class='closeR'>
          <span class='fas fa-times'></span>
      </span>
  </div>";
               }
            }
          
        }
        /*
        else
        {
            //echo "False";
            $_SESSION['pwd-not-match'] = "<div class='alertR show'>
      <span><i class='fas fa-exclamation-circle'></i></span>
      <span class='msgR'>Password Doesn't Match, Unable To Create Account</span>
      <span class='closeR'>
          <span class='fas fa-times'></span>
      </span>
  </div>";
            echo "Not Match";
        }*/
        
    }


if(isset($_POST['submit_login']))
{
        //Get The Data From Form
        /*
        
        $login_username = $_POST['email_login_id'];
        $raw_login_password = md5($_POST['login_password']);
        
        $login_password = mysqli_real_escape_string($conn, $raw_login_password);
        
        
        $sql3 = "SELECT * FROM tbl_users WHERE username='$login_username' AND password='$login_password'";
        
        $res3 = mysqli_query($conn, $sql3);
        
        $count3 = mysqli_num_rows($res3);
        
        if($count3==1)
        {
            echo "Login Success";
            $_SESSION['user'] = $login_username;
        }
        else
        {
            echo "Login Unsuccessful";
        }*/
        
         //1. Get the Data from Login form
        //Previously (Unsafe) - $username = $_POST['username'];
        //Now Its Protected 
        $lusername = mysqli_real_escape_string($conn, $_POST['email_login_id']);
        $lpassword = mysqli_real_escape_string($conn, $_POST['login_password']);
       
        //2. SQL to check whether the user with username and password exists or not
        $sql3 = "SELECT * FROM tbl_users WHERE username='$lusername' AND password='$lpassword'";
        
        //3. Execute the Query
        $res3 = mysqli_query($conn, $sql3);
        
        //4. Count rows to Check Whether the user Exists or not
        $count3 = mysqli_num_rows($res3);
        
        if($count3==1)
        {
            //User Available And Login Success
            $_SESSION['login'] = "<div class='alertG show'>
      <span><i class='fas fa-check-circle fa-check-double'></i></span>
      <span class='msgG'>Yay Login Successful! Enjoy!</span>
      <span class='closeG'>
          <span class='fas fa-times'></span>
      </span>
  </div>";
            $_SESSION['user'] = $lusername; //To check whether the user is Logged in or not and logout will unset it
            
            //REdirect to HOme Page/Dashboard
            header('location:'.SITEURL.'index.php');
            
            ob_end_flush();
        }
        else
        {
            //User Not Available Login Failed
            $_SESSION['login-fail'] = "<div class='alertR show'>
      <span><i class='fas fa-exclamation-circle'></i></span>
      <span class='msgR'>Login Failed! Username or Password Didn't Match Your Credentials</span>
      <span class='closeR'>
          <span class='fas fa-times'></span>
      </span>
  </div>";
            
        }
}

?>

<?php 

if(isset($_SESSION['username_available']))
{
    echo $_SESSION['username_available'];
    unset($_SESSION['username_available']);
}

if(isset($_SESSION['email_available']))
{
    echo $_SESSION['email_available'];
    unset($_SESSION['email_available']);
}

/*
if(isset($_SESSION['login']))
{
    echo $_SESSION['login'];
    unset($_SESSION['login']);
}*/


if(isset($_SESSION['login-fail']))
{
    echo $_SESSION['login-fail'];
    unset($_SESSION['login-fail']);
}

if(isset($_SESSION['pwd-not-match']))
{
    echo $_SESSION['pwd-not-match'];
    unset($_SESSION['pwd-not-match']);
}


if(isset($_SESSION['account_created']))
{
    echo $_SESSION['account_created'];
    //unset($_SESSION['account_created']);
}

?>

<?php include("partials/footerL.php"); ?>
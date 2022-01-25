<?php

include("constants.php");
     //Authorization - Access COntrol
    //Check whether the User is Logged in or not
    if(!isset($_SESSION['user'])) //IF user Session is not set
    {
        //User is not logged in
        $_SESSION['no-login-message'] = "<div class='alert show'>
      <span><i class='fas fa-exclamation-circle'></i></span>
      <span class='msg'>Please Login/Signup To Access The Features!</span>
      <span class='close'>
          <span class='fas fa-times'></span>
      </span>
  </div>";
  
        //REdirect to login page with Message
        header('location:'.SITEURL.'login.php');
    }
    
    /*
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $email_i_id = $_POST['email_login_id'];
        $pass = $_POST['login_password'];
        $sql6 = "SELECT * FROM tbl_users WHERE email_id='$email_i_id'";
        
        $res6 = mysqli_query($conn, $sql6);
        
        $count6 = mysqli_num_rows($res6);
        if($count6==1)
        {
            $row6 = mysqli_fetch_assoc($res6);
            if(password_verify($pass, $row6['password']))
            {
                $_SESSION['loggedin'] = true;
                $_SESSION['usermail'] = $email_i_id;
                echo "logged In";
                header('location:'.SITEURL.'home.php');
            }
            else
            {
                echo "Unable To Login";
            }
        }
    }*/
    
?>
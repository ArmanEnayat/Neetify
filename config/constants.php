<?php
    //Start Session
    session_start();
    ob_start();

    //Create Constants to Store Non Repeating Values
    define('SITEURL', 'http://localhost:8080/Neetify/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'neet_test');
    
       $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error()); //Database Connection
       $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error()); //SElecting DatabasE
       
       
       
?>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

if(session_status() == PHP_SESSION_ACTIVE){
           
    if($_SESSION['check'] == 99){
        echo "Welcome to content2. <br>";
        echo "Click <a href=login.php?logout=true>here</a> to logout. <br> 
        To go back to content1 click <a href=content1.php>here</a> .</a>";
    }else
    
        echo "You must be logged in to access this page. Click <a href=login.php>here</a> to return to the login screen.";
        //exit();
}
?>
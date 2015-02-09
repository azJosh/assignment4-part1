<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

if(session_status() == PHP_SESSION_ACTIVE){
    
    //session username is set to the post username.
    if(isset($_POST['username'])){					
        $_SESSION['username'] = $_POST['username'];
        
        //Blank username entered
        if($_SESSION['username'] == ""){				
            echo "A username must be entered. Click <a href=login.php>here</a> to return to the login screen.";
            exit();				
        }
        
        //prevent access without going through the login page using a variable.
        $_SESSION['check'] = 99;
        
    //check if the user has logged in.    
    }else if(!isset($_POST['username']) && $_SESSION['check'] != 99){
        echo "You must be logged in to access this page. Click <a href=login.php>here</a> to return to the login screen.";
        exit();
           
    }
        
    
    
    //Initialize visits counter
    if(!isset($_SESSION['visits'])){						
        $_SESSION['visits'] = 0;
    }
    echo "Hello $_SESSION[username] you have visited this page $_SESSION[visits] times before. <br>";
    echo "Click <a href=login.php?logout=true>here</a> to logout. <br> 
    To continue to content2 click <a href=content2.php>here</a> .</a>";
    
    
    $_SESSION['visits']++;	
    
    
}
?>
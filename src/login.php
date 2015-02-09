<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();


if(($_GET["logout"]) == 'true'){		
    $_SESSION = array();
    session_destroy();
    /*$filePath = explode('/', $_SERVER['PHP_SELF'], -1);
    $filePath = implode('/', $filePath);
    $redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath;
    header("Location:{$redirect}/josh.php", true);*/
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login.php</title>
</head>
<body>
    <h1>Login</h1>
	<form method="post" action='http://web.engr.oregonstate.edu/~peeplesj/CS290_Assignment4/content1.php'>
		Username: <input type="text" name="username" />
		<input type="submit" value="Login">
	</form>
</body>
</html>
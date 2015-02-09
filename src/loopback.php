<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>loopback.php</title>
</head>
<body>

<?php
$myArray = array();

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $myArray["Type"] = "POST";
    foreach($_POST as $key=>$value) {
        $myArray["parameters"][$key] = $value;
    }    
}else {
    $myArray["Type"] = "GET";
    foreach($_GET as $key=>$value) {
        $myArray["parameters"][$key] = $value;
    }
}

if($myArray == null) {
    echo "null";
}else {
    echo json_encode($myArray);
}

?>
    

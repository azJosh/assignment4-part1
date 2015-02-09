<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Multtable.php</title>
</head>
<body>

<?php
//Set variables.
$minMultiplicand = ($_GET["min-multiplicand"]);
$maxMultiplicand = ($_GET["max-multiplicand"]);
$minMultiplier = ($_GET["min-multiplier"]);
$maxMultiplier = ($_GET["max-multiplier"]);

$check = true;

//for testing
/*
echo 'min-multiplicand is ' . $minMultiplicand . "  ";
echo 'max-multiplicand is ' . $maxMultiplicand . "  ";
echo 'max-multiplier is ' . $maxMultiplier . "  ";
echo 'min-multiplier is ' . $minMultiplier . "  ";
*/

//Check for integers
if (!is_numeric($minMultiplicand) || strpos($minMultiplicand, ".") !== false) {
    echo '<p>min-multiplicand must be an integer.</p>';
    $check = false;
}
if (!is_numeric($maxMultiplicand) || strpos($maxMultiplicand, ".") !== false) {
    echo '<p>max-multiplicand must be an integer.</p>';
    $check = false;
}
if (!is_numeric($minMultiplier) || strpos($minMultiplier, ".") !== false) {
    echo '<p>min-multiplier must be an integer.</p>';
    $check = false;
}
if (!is_numeric($maxMultiplier) || strpos($maxMultiplier, ".") !== false) {
    echo '<p>max-multiplier must be an integer.</p>';
    $check = false;
}

//Check for all 4 parameters
    
if(is_null($minMultiplier)===true){
	echo "<p>Missing parameter min-multiplier";
	$check = false;
}
if(is_null($maxMultiplier)===true){
	echo "<p>Missing parameter max-multiplier";
	$check = false;
}
if(is_null($minMultiplicand)===true){
	echo "<p>Missing parameter min-multiplicand";
	$check = false;
}
if(is_null($maxMultiplicand)===true){
	echo "<p>Missing parameter max-multiplicand";
	$check = false;
}

//Check min is less then max
if ($minMultiplier > $maxMultiplier) {
    $check = false;
    echo '<p>min-multiplier is larger than max-multiplier.</p>';
}
if ($minMultiplicand > $maxMultiplicand) {
    $check = false;
    echo '<p>min-multiplicand is larger than max-multiplicand</p>';
}


//if the check fails then exit()
if($check == false){
    exit();
}

$tblHeight = ($maxMultiplicand - $minMultiplicand + 1);
$tbleWidth = ($maxMultiplier - $minMultiplier + 1);

echo "<table border='1'>";
echo "<thead><tr><th>";
//Create <th>
for ($i = 0; $i < $tbleWidth; $i++) {
  echo "<th>" . ($i + $minMultiplier);
}

echo "</thead>";
echo "<tbody>";

//create <td>
for ($j = 0; $j < $tblHeight; $j++) {
    echo "<tr><th scope=row>" . ($minMultiplicand + $j);
    //create <td>
    for ($a = 0; $a < $tbleWidth; $a++) {
      echo "<td>" . (($a + $minMultiplier) * ($j + $minMultiplicand));
    }
}
echo "</tbody>";
echo "</table";

?>
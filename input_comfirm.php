<?php

$YourName = $_POST["YourName"];
$score1 = $_POST["score1"];
$score2 = $_POST["score2"];
$score3 = $_POST["score3"];
$c = ",";

$str = $YourName.$c.$score1.$c.$score2.$c.$score3;

$file = fopen("database.csv","a");
fwrite($file, $str."\n");
fclose($file);

header("Location: input.php");
exit;

?>

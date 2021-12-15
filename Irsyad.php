<?php
ini_set("auto_detect_line_endings", true);
$data = file_get_contents('localhost/api/data.php');
$decodedData = json_decode($data,true);
var_dump($decodedData);
?>

<?php

$servername = "localhost";
$serverusername = "bca";
$serverpassword = "Bca@10)#";
$dbname = "bca";

$conn = new mysqli($servername, $serverusername, $serverpassword, $dbname);
$sql = "set names utf8";
$conn->query($sql);

?>

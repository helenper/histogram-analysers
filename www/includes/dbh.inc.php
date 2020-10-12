<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "12345678";
$dBName = "loginsystem_masterclass";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>

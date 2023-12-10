<?php
session_start();
$doctor = $_GET["doctor"];
$date = $_GET["date"];
$time = $_GET["time"];

$con = mysqli_connect("localhost", "root", "", "PROJET");
$req = "DELETE FROM doctor WHERE (doctor2='$doctor' AND date='$date' AND time='$time' )";
mysqli_query($con, $req);
header( "Location: doctor_page.php");
?>
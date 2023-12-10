<?php
session_start();
$name = $_GET["name"];
$surname = $_GET["surname"];
$speciality = $_GET["speciality"];

$con = mysqli_connect("localhost", "root", "", "PROJET");
$req = "DELETE FROM doctor1 WHERE (name='$name' AND surname='$surname' AND speciality='$speciality' )";
mysqli_query($con, $req);
header( "Location: ajoute_doctor1.php");
?>
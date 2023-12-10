<?php

$doctor=$_POST['doctor'];
$date=$_POST['date'];
$heur=$_POST['heur'];
session_start();
$email=$_SESSION['email'];
$patient_name=$_SESSION['client_name'];
$req="INSERT INTO doctor values(null,'$doctor','$patient_name','$email','$date','$heur')";
$req1 = "SELECT doctor2,date,time FROM doctor";
$con=mysqli_connect("localhost","root","","PROJET");

$res=$resultat=mysqli_query($con,$req1);
while($ligne=mysqli_fetch_array($res)){
    if($ligne[0]==$doctor and $ligne[1]==$date and $ligne[2]==$heur ){
        
        
        header("Location: rendevous_fail.php");
        exit();
    }
  
}

mysqli_query($con,$req);
header( "Location: login_seccess.php");
?>
<?php 
session_start();

$logas=$_POST["logas"];
$email=$_POST["email"];
$psw=$_POST["psw"];
$req1 = "SELECT email,password,name,surname  FROM patient";
$req = "SELECT email,password,name,surname  FROM doctor1";
$con=mysqli_connect("localhost","root","","PROJET");
$resultat=mysqli_query($con,$req1);
$resultat1=mysqli_query($con,$req);



if($logas=="pastient"){
    
    while($ligne=mysqli_fetch_array($resultat)){
        if($ligne[0]==$email and $ligne[1]==$psw ){
            $_SESSION['email'] = $email;
            $_SESSION['client_name'] =$ligne[2] ." ". $ligne[3];
            
            header("Location: login_seccess.php");
            exit();
        }
    }
    header("Location: login_fail.html");
    exit();
    
}
elseif($logas=="doctor"){
    while($ligne1=mysqli_fetch_array($resultat1)){
        if($ligne1[0]==$email and $ligne1[1]==$psw ){
            $_SESSION['email'] = $email;
            $_SESSION['doc'] =$ligne1[2]."".$ligne1[3];
            echo( $_SESSION['doc']);
            header("Location: doctor_page.php");
            
            
            exit();
        }
    }
    header("Location: login_fail.html");
    exit();
}
else{
    if($email=="admin@admin" and $psw=="admin" ){
        header("Location: ajoute_doctor1.php");
        exit();
    }
    else{
        header("Location: login_fail.html");
        exit();
    }
}
?>


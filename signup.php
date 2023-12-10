<?php 
$name = $_POST["name"];
$sename = $_POST["sename"];
$gender = $_POST['gender'];
$phone = $_POST["phone"];
$cin = $_POST["cin"];
$email = $_POST["email"];
$date = $_POST["date_kkk"];
$psw = $_POST["psw"];
$psw2 = $_POST["psw-repeat"];
$req = "INSERT INTO patient values(null,'$name','$sename','$gender',$phone,'$cin','$email',$date,'$psw')";
$req1 = "SELECT cin, email FROM patient";
$con = mysqli_connect("localhost","root","","PROJET");
$resultat = mysqli_query($con,$req1);

while($ligne = mysqli_fetch_array($resultat)){
    
    if($ligne[0] == $cin or $ligne[1] == $email) {
        header("Location: sign-up.html");
        break;
    }
    
}

if($psw == $psw2) {
    mysqli_query($con, $req);
    header("Location: login.html");
} else {
    echo "Please make sure you have entered the same password.";
}






?>
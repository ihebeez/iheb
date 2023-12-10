<?php
        
        session_start();

        $name=$_POST["name"];
        $surname=$_POST["surname"];
        $email=$_POST["email"];
        $password=$_POST["password"];
        $speciality=$_POST["speciality"];
        $req = "INSERT INTO doctor1 values(null,'$name','$surname','$email','$password','$speciality')";
        $_SESSION['emaild']=$email;
        
        $con=mysqli_connect("localhost","root","","PROJET");
        mysqli_query($con,$req);
        header("Location: ajoute_doctor.php");
?>
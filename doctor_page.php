<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="doctor_page.css">
</head>
<body>
    <header class="header">
            <a href="./home.html" class="logo" ><i class="fas fa-heartbeat">VitaClinic</i></a>
            <div>
                <ul id="navbar">
                    <li><a class="active" href="doctor_page.php">appointments</a></li>  
                </ul>
                </div>
                
        </header>
        
    <section class="disconnect">
            <div id="exit-btn" ><i  id="exit1" class="fa fa-times" aria-hidden="true"></i></div>
            <div id="disconnect">
                
                <img id="img-profil" src="./profil1.png" alt="">

                <div id="hi" >
                    <?php
                        session_start();
                        $div_id = "name-client";
                        echo "<h1 id=" . $div_id . ">{$_SESSION['doc']}</h1>"; 
                    ?>
                </div>
                    
                
            </div>
            <div id="option"><a id="opt" href="./book.html">Disconnect </a></div>


            
    </section>
    <?php

        
    $doc=$_SESSION['doc'];
    $con1 = mysqli_connect("localhost", "root", "", "PROJET");
    $req1 = "SELECT patient, email, date, time FROM doctor WHERE doctor2='{$_SESSION['doc']}'";
    $resultat = mysqli_query($con1, $req1);
    

    echo("<table class='table1' border=2 style='position: absolute; top: 50%; width: 98%; border: solid 2px black;'><tr><td>patient Name</td><td>Date of Appointment</td><td>Time</td><td>Delete</td></tr>");
    while ($ligne=mysqli_fetch_array($resultat)) {
        echo("<tr><td>$ligne[0]</td><td>$ligne[2]</td><td>$ligne[3]</td><td><a href='supprimer2.php?doctor=$doc&time=$ligne[3]&date=$ligne[2]'>Delete</a></td></tr>");
    }
    echo("</table>");
    ?>


    
</body>
<script src="./jsdoc.js"></script> 
</html>
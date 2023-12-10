<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor search</title>
    <link rel="stylesheet" href="aj.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body>
    <header class="header">
        <a href="./home.html" class="logo"><i class="fas fa-heartbeat">VitaClinic</i></a>
        <div>
            <ul id="navbar">
                <li><a  href="./ajoute_doctor.php">Add doctors</a></li>
                <li><a class="active" href="./ajoute_doctor1.php">doctors</a></li>
 
    
                
            </ul>
            </div>
            <div id="menu-btn" class="fas fa-bars"></div>
    </header>
    <a href="book.html" style='position:absolute;top;left:90%;top:20%;background-color: #e3e6f3;border: 2px solid #088178;'><button>disconnect</button></a>

    <div class="recherche" style='    position: absolute; top: 30%;left: 30%; width: 40%; height: 74%; background-color: #fff; border: 5px solid #088178;align-items: center;border-radius: 12px;'>
    <form action="./ajout2.php" method="post">
            <label for="name">doctor name:</label>
            <input type="text" name="name" id="name">
            <label for=" surname">doctor surname:</label>
            <input type="text" name="surname" id="surrname">
            <label for="speciality">speciality:</label>
            <input type="text" name="speciality" id="speciality">
            <input type="submit" name="" id="">

        </form>
    </div>

    <section>
    <?php

        $con1=mysqli_connect("localhost","root","","PROJET");
        $req1 = "SELECT * FROM doctor1";
        $resultat=mysqli_query($con1,$req1);
        echo("<table class='table1' border='2' style='position: absolute; bottom: -62%; width: 98%; border: solid 2px black;'><tr><td>doctor name</td><td>doctor surname</td><td>speciality</td><td>delete</td></tr>");
        while($ligne = mysqli_fetch_array($resultat)){
            echo("<tr><td>$ligne[1]</td><td>$ligne[2]<td>$ligne[5]<td><a href='supprimer1.php?name=$ligne[1]&surname=$ligne[2]&speciality=$ligne[5]'>Delete</a>");
        }
        echo("</table>");
    ?>


    </section>
    
</body>
</html>
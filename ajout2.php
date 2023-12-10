<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="aj.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body>
    <header class="header">
        <a href="./home.html" class="logo"><i class="fas fa-heartbeat">VitaClinic</i></a>
        <div>
            <ul id="navbar">
            <li><a  href="./ajoute_doctor.php">Add doctors</a></li>
                <li><a class="active" href="home.html">doctors</a></li>
 
    
                
            </ul>
            </div>
            <div id="menu-btn" class="fas fa-bars"></div>
    </header>
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
        // Get the input values from the form
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $speciality = $_POST["speciality"];
        
        // Set a boolean variable to true
        $a = true;
        
        // Connect to the database
        $con1 = mysqli_connect("localhost", "root", "", "PROJET");
        
        // Create the SQL query with placeholders for the input values
        $req1 = "SELECT name, surname, speciality FROM doctor1 WHERE 1=1";
        
        // Add conditions to the query if input values are set
        if(isset($name)){
            $req1 = $req1 . " AND name LIKE('%$name%')";
        }
        if(isset($surname)){
            $req1 = $req1 . " AND surname LIKE('%$surname%')";
        }
        if(isset($speciality)){
            $req1 = $req1 . " AND speciality LIKE('%$speciality%')";
        }
        
        // Execute the query
        $resultat = mysqli_query($con1, $req1);
        
        // Output the results in a table

        echo("<table class='table1' border='2' style='position: absolute; bottom: -62%; width: 98%; border: solid 2px black;'><tr><td>doctor name</td><td>doctor surname</td><td>speciality</td><td>delete</td></tr>");
        while($ligne = mysqli_fetch_array($resultat)){
            echo("<tr><td>$ligne[0]</td><td>$ligne[1]<td>$ligne[2]<td><a href='supprimer1.php?name=$ligne[0]&surname=$ligne[1]&speciality=$ligne[2]'>Delete</a>");
        }
        echo("</table>");
    ?>


    </section>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="./book-profil.css">
    
</head>
<body>
    <!-- header section begin -->
    <header class="header">
    <a href="./home.html" class="logo"><i class="fas fa-heartbeat">VitaClinic</i></a>
    <div>
        <ul id="navbar">
            <li><a href="home-connected1.php">Home</a></li>
            <li><a  href="services-connected1.php">services</a></li>
            <li><a  href="doctors-connected1.php">Doctors</a></li>
            <li><a class="active" href="login_seccess.php">Book</a></li>

            
        </ul>
        </div>
        <div id="menu-btn" class="fas fa-bars"></div>
    </header>
    <!-- header section end -->
    <section class="disconnect">
        <div id="exit-btn" ><i  id="exit1" class="fa fa-times" aria-hidden="true"></i></div>
        <div id="disconnect">
            
            <img id="img-profil" src="./profil1.png" alt="">

            <div id="hi" >
                <?php
                    session_start();
                    $div_id = "name-client";
                    echo "<h1 id=" . $div_id . ">{$_SESSION['client_name']}</h1>"; 
                ?>
            </div>
                
            
        </div>
        <div id="option"><a id="opt" href="./book.html">Disconnect </a></div>


        
    </section>



    <div id="appointment" >
        <h1>Take your appointment now :</h1>
        <hr>
        <form action="rendevous.php" method="post" name="form1">
            <label for="doctor">Doctor</label>
            <select name="doctor" id="doctor">
                <optgroup label="General Practitioner :">
                    <option value="Sarah Johnson">Sarah Johnson</option>
                    <option value="John Smith">John Smith</option>
                    <option value="Michael Johnson">Michael Johnson</option>
                    <option value="Jane Doe">Jane Doe</option>
                    <option value="Samar Doe">Samar Doe</option>
                </optgroup>
                <optgroup label="Pediatrician :">
                    <option value=" kane Smith"> kane Smith</option>
                    <option value="Isra Johnson">Isra Johnson</option>
                    <option value="Sara John">Sara John</option>
                    <option value="Simon Johnson">Simon Johnson</option>
                </optgroup>
                <optgroup label="Neurologist :">
                    <option value="Jessica Lee">Jessica Lee</option>
                    <option value="Jane Williams">Jane Williams</option>
                </optgroup>
                <optgroup label="Oncologist :">
                    <option value="Michael Johnson">Michael Johnson</option>
                    <option value="Sarah Patel">Sarah Patel</option>
                </optgroup>
                <optgroup label="Gynecologist :">
                    <option value="Sara John">Sara John</option>
                    <option value="Lisa Chen">Lisa Chen</option>
                </optgroup>
                <optgroup label="Ophthalmologist :">
                    <option value=" William Lee"> William Lee</option>
                    <option value="Emily Chen">Emily Chen</option>
                </optgroup>
            </select>


            <label for="date">Date of Visit:</label>
            <input type="date" name="date" id="date" >
            <label for="time">Time of visit:</label>
            <select name="heur" id="" >
                <option value="9h>>10h" >9h>>10h</option>
                <option value="10h>>11h" >10h>>11h</option>
                <option value="11>>12h" >11>>12h</option>
                <option value="12h>>13h" >12h>>13h</option>
                <option value="14h>>15h" >14h>>15h</option>
                <option value="15h>>16h" >15h>>16h</option>
                <option value="16h>>17h" >16h>>17h</option>
                <option value="17h>>18h" >17h>>18h</option>
                <option value="18h>>19h" >18h>>19h</option>
                <option value="19h>>20h" >19h>>20h</option>
                <option value="20h>>21h" >20h>>21h</option>
                <option value="21h>>22h" >21h>>22h</option>
                <option value="22h>>23h" >22h>>23h</option>
            </select>
            <input type="submit" name="nalider" id="valider" value="reserve" >
		
        </form>

    </div>
    <?php
    $con1=mysqli_connect("localhost","root","","PROJET");
    $req1 = "SELECT doctor2,date,time FROM doctor where email='{$_SESSION['email']}'";
    $resultat=mysqli_query($con1,$req1);
    
    echo("<table class='table1'border=2 style='position: absolute;top: 145%;width: 98%;border: solid 2px black;'><tr><td>doctor name</td><td>date of appointment</td><td>time</td><td>delete</td></tr>");
    while($ligne=mysqli_fetch_array($resultat)){
        echo("<tr><td>$ligne[0]</td><td>$ligne[1]<td>$ligne[2]<td><a href='supprimer.php?doctor=$ligne[0]&time=$ligne[2]&date=$ligne[1]'>Delete</a>");
        
    }
    echo("</table>");
    ?>
</body>
<script src="./js4b.js"></script> 
</html>
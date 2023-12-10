<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="./home-connected1.css">
</head>
<body>
    <!-- header section begin -->
    <header class="header">
        <a href="#" class="logo"><i class="fas fa-heartbeat">VitaClinic</i></a>
        <div>
            <ul id="navbar">
                <li><a class="active" href="home-connected1.php">Home</a></li>
                <li><a href="services-connected1.php">services</a></li>
                <li><a href="doctors-connected1.php">Doctors</a></li>
                <li><a href="login_seccess.php">Book</a></li>

                <li><a href="#footer">Contact us</a></li>

                
            </ul>
         </div>
         <div id="menu-btn" class="fas fa-bars"></div>
    </header>
    <section class="disconnect">
        <div id="exit-btn" ><i  id="exit1" class="fa fa-times" aria-hidden="true"></i></div>
        <div id="disconnect">
            
            <img id="img-profil" src="./profil1.png" alt="">

            <div id="hi" >
                <?php
                    session_start();
                    $div_id = "name-client";
                    echo "<h1 id=" . $div_id . " style='position: absolute; right: 2%;'>{$_SESSION['client_name']}</h1>"; 
                ?>
            </div>
                
            
        </div>
        <div id="option"><a id="opt" href="./home.html">Disconnect </a></div>


    </section>
    <!-- header section end -->
    <!-- home section begin -->
    <section class="home1" id="home1">
       
       <div class="pargraph1">
           <div class="image">
               <img src="./image/1.gif" alt="">
           </div>
           <div class="p1">
               <h1>"Providing compassionate care and innovative treatments to improve the health and well-being of our patients."</h1>
               
               <p id="p1">Stay safe ! Stay helthy!</p>
               <a href="./login_seccess.php" class="btn"  id="btn1">reserve now <span class="fas fa-chevron-right"></span></a>
           </div>
       </div>
       <div class="pargraph2">
           
           <div class="p2">
               <h1>" Book your next appointment with us and experience exceptional care at our clinic. Click here to reserve your spot today! "</h1>
               <p id="p2">Welcome to our hospital! To ensure that you receive timely and efficient care, we encourage you to make a reservation for your upcoming visit. You can easily do this by calling our front desk or using our online reservation system. Thank you for choosing our hospital, and we look forward to serving you soon.</p>
               <a href="./login_seccess.php" class="btn" id="btn2">reserve now <span class="fas fa-chevron-right"></span></a>
               
           </div>
           <div class="image-a">
               <img src="./image/2.gif" alt="">
               
           </div>
       </div>
       <div class="pargraph3">
           <div class="image-a3">
               <img src="./image/3.png" alt="">
           </div>
           <div class="p3">
               <h1>" Discover exceptional medical care at our hospital - visit us today! "</h1>
               <p>We welcome you to explore our comprehensive range of medical services at our hospital. From routine check-ups to specialized treatments, our dedicated team of healthcare professionals is committed to providing personalized care and support to every patient who walks through our doors. Discover the difference that quality care can make - visit us today!</p>
               <a href="./services-connected1.php" class="btn"id="btn3">See our services <span class="fas fa-chevron-right"></span></a>
           </div>
       </div>
       <div class="pargraph4">
           <div class="p4">
               <h1>"Get in touch with us through our Contact Us section for any questions or concerns."</h1>
               <p>Our Contact Us section is designed to provide you with easy access to our hospital staff and services, should you have any questions or concerns. Please feel free to reach out to us through the channels provided below.</p>
               <a href="#footer" class="btn" id="btn4">Contact us <span class="fas fa-chevron-right"></span></a>
           </div>
           <div class="image-a4">
               <img src="./image/4.gif" alt="">
           </div>
       </div>
   </section>

   <!-- home section end -->
   <!-- link script -->
   <script src="./js1b1.js"></script>
</body>

<footer class="footer-section" id="footer">
   <div class="container">
       <div class="footer-cta pt-5 pb-5">
           <div class="row">
               <div class="col-xl-4 col-md-4 mb-30">
                   <div class="single-cta">
                       <i class="fas fa-map-marker-alt"></i>
                       <div class="cta-text">
                           <h4>Find us</h4>
                           <span>1010 Avenue, sw 54321, chandigarh</span>
                       </div>
                   </div>
               </div>
               <div class="col-xl-4 col-md-4 mb-30">
                   <div class="single-cta">
                       <i class="fas fa-phone"></i>
                       <div class="cta-text">
                           <h4>Call us</h4>
                           <span>9876543210 0</span>
                       </div>
                   </div>
               </div>
               <div class="col-xl-4 col-md-4 mb-30">
                   <div class="single-cta">
                       <i class="far fa-envelope-open"></i>
                       <div class="cta-text">
                           <h4>Mail us</h4>
                           <span>mail@info.com</span>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="footer-content pt-5 pb-5">
                       <div class="footer-social-icon">
                           <span>Follow us</span>
                           <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                           <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                           <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>

</footer>
</html>
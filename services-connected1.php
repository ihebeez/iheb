<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sevices-connected1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    
</head>
<body>
        <!-- header section begin -->
        <header class="header">
            <a href="./home.html" class="logo"><i class="fas fa-heartbeat">VitaClinic</i></a>
            <div>
                <ul id="navbar">
                    <li><a href="home-connected1.php">Home</a></li>
                    <li><a class="active" href="services-connected1.php">services</a></li>
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
                        echo "<h1 id=" . $div_id . ">{$_SESSION['client_name']}</h1>"; 
                    ?>
                </div>
                    
                
            </div>
            <div id="option"><a id="opt" href="./services.html">Disconnect </a></div>


            


        <!-- header section end -->
        <section class="facility" id="facility">

    <div class="container">

    <h1 class="heading"><span>'</span> our services <span>'</span></h1>

    <div class="box-container">
        

        <div class="box" data-aos="zoom-in" id="img1" >
            <img src="./image/service1.1.png" alt="im1"  title="Emergency care" id="img1">
        </div>

        <div class="box" data-aos="zoom-in" id="img2" >
            <img src="./image/s2.1.jpg" alt="im1"  title="Diagnostic imaging" id="img2">
        </div>

        <div class="box" data-aos="zoom-in" id="img3" >
            <img src="./image/s3.1.jpg" alt="im1"  title="Surgery service" id="img3">
        </div>

        <div class="box" data-aos="zoom-in" id="img4" >
        <img src="./image/s4.jpg" alt="im1"  title="Laboratory testing " id="img4">
    </div>

    <div class="box" data-aos="zoom-in" id="img5" >
        <img src="./image/s5.jpg" alt="im1"  title="Maternity care and childbirth services" id="img5">
    </div>

    <div class="box" data-aos="zoom-in" id="img6" >
    <img src="./image/s6.jpg" alt="im1"  title="Mental health and behavioral health services" id="img6">
    </div>

    <div class="box" data-aos="zoom-in" id="img7" >
    <img src="./image/s7.1.jpg" alt="im1"  title="Cancer treatment and oncology services" id="img7">
    </div>

    <div class="box" data-aos="zoom-in" id="img8" >
    <img src="./image/s8.png" alt="im1"  title="Cardiology and cardiovascular care" id="img8">
    </div>
    <div class="box" data-aos="zoom-in" id="img9" >
    <img src="./image/s9.jpg" alt="im1"  title="Rehabilitation services" id="img9">
    </div>





    </div>

    </div>

    </section>

    <div class="slider" id="slider3" >
    <button  id="hidden-btn3"><i class="fa fa-times" aria-hidden="true"></i></button>
    <div class="slides" id="slide3">


    <div class="slide first">
    <img src="./image/s3.jpg" alt="">
    </div>

    <!--manual navigation end-->
    </div>

    </div>
    <div class="slider" id="slider2" >
    <button  id="hidden-btn2"><i class="fa fa-times" aria-hidden="true"></i></button>
    <div class="slides" id="slide2">


    <div class="slide first">
    <img src="./image/s2.jpg" alt="">
    </div>

    <!--manual navigation end-->
    </div>

    </div>
    <div class="slider" id="slider4" >
    <button  id="hidden-btn4"><i class="fa fa-times" aria-hidden="true"></i></button>
    <div class="slides" id="slide4">


    <div class="slide first">
    <img src="./image/s4.1.jpg" alt="">
    </div>

    <!--manual navigation end-->
    </div>

    </div>
    <div class="slider" id="slider5" >
    <button  id="hidden-btn5"><i class="fa fa-times" aria-hidden="true"></i></button>
    <div class="slides" id="slide5">


    <div class="slide first">
    <img src="./image/s5.1.jpg" alt="">
    </div>

    <!--manual navigation end-->
    </div>

    </div>
    <div class="slider" id="slider6" >
    <button  id="hidden-btn6"><i class="fa fa-times" aria-hidden="true"></i></button>
    <div class="slides" id="slide6">


    <div class="slide first">
    <img src="./image/s6.1.jpg" alt="">
    </div>

    <!--manual navigation end-->
    </div>

    </div>
    <div class="slider" id="slider7" >
    <button  id="hidden-btn7"><i class="fa fa-times" aria-hidden="true"></i></button>
    <div class="slides" id="slide7">


    <div class="slide first">
    <img src="./image/s7.jpg" alt="">
    </div>

    <!--manual navigation end-->
    </div>

    </div>
    <div class="slider" id="slider8" >
    <button  id="hidden-btn8"><i class="fa fa-times" aria-hidden="true"></i></button>
    <div class="slides" id="slide8">


    <div class="slide first">
    <img src="./image/s8.1.jpg" alt="">
    </div>

    <!--manual navigation end-->
    </div>

    </div>
    <div class="slider" id="slider9" >
    <button  id="hidden-btn9"><i class="fa fa-times" aria-hidden="true"></i></button>
    <div class="slides" id="slide9">


    <div class="slide first">
    <img src="./image/s9.1.jpg" alt="">
    </div>

    <!--manual navigation end-->
    </div>

    </div>


    <!--image slider start-->
    <div class="slider" id="slider1" >
    <button  id="hidden-btn"><i class="fa fa-times" aria-hidden="true"></i></button>
    <div class="slides" id="slide1">
    <!--radio buttons start-->
    <input type="radio" name="radio-btn" id="radio1">
    <input type="radio" name="radio-btn" id="radio2">
    <input type="radio" name="radio-btn" id="radio3">
    <input type="radio" name="radio-btn" id="radio4">
    <!--radio buttons end-->
    <!--slide images start-->
    <div class="slide first">
        <img src="./image/service1.2.png" alt="">
    </div>
    <div class="slide">
        <img src="./image/service1.png" alt="">
    </div>
    <div class="slide">
        <img src="./image/service1.3.png" alt="">
    </div>
    <div class="slide">
        <img src="./image/service1.4.png" alt="">
    </div>
    <div class="navigation-manual" id="s1">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
        </div>
        <!--manual navigation end-->
    </div>
    <!--slide images end-->
    <!--automatic navigation start-->
    <div class="navigation-auto">
        <div class="auto-btn1"></div>
        <div class="auto-btn2"></div>
        <div class="auto-btn3"></div>
        <div class="auto-btn4"></div>
    </div>
    </div>








    <!--image slider end-->
    <script type="text/javascript">
    var counter = 1;

    setInterval(function() {
    console.log("First function called");
    document.getElementById('radio' + counter).checked = true;
    counter++;
    if (counter > 4) {
        counter = 1;
    }
    }, 3000);
    </script>
        <script type="text/javascript">
        var counter2 = 11;
        
        setInterval(function() {
            console.log("First function called");
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if (counter > 14) {
            counter = 11;
            }
        }, 3000);
    </script>
    <script src="./js2b1.js"></script>       
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
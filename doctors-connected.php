<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./doctors-connected.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body>
     <!-- header section begin -->
     <header class="header">
        <a href="./home.html" class="logo"><i class="fas fa-heartbeat">VitaClinic</i></a>
        <div>
            <ul id="navbar">
                <li><a href="home-connected.php">Home</a></li>
                <li><a  href="services-connected.php">services</a></li>
                <li><a  class="active" href="doctors-connected.php">Doctors</a></li>
                <li><a href="login_seccess.php">Book</a></li>

                <li><a href="contact.html">Contact us</a></li>

                
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
        <div id="option"><a id="opt" href="./doctors.html">Disconnect </a></div>


    </section>
    <section class="facility" id="facility">

           <h2>General Practitioner :</h2>
            <div class="box-container">
                
                
                <div class="box"  >
                    <img src="./image/d1.png" alt="im1" class="img1" title="Dr. John Smith">
                    <button id="see-more1">see more</button>
                    <button><a href="book.html" >reserve from her </a></button>
                </div>
                <div class="box"  >
                    <img src="./image/d2.png" alt="im1" class="img1" title="Dr. Sarah Johnson">
                    <button id="see-more2">see more</button>
                    <button><a href="book.html" >reserve from her </a></button>
                </div>
                <div class="box"  >
                    <img src="./image/d3.png" alt="im1" class="img1" title="Dr. Michael Johnson">
                    <button id="see-more3">see more</button>
                    <button><a href="book.html" >reserve from her </a></button>
                </div>
                <div class="box"  >
                    <img src="./image/d4.png" alt="im1" class="img1" title="Dr. Jane Doe">
                    <button id="see-more4">see more</button>
                    <button><a href="book.html" >reserve from her </a></button>
                </div>
                <div class="box"  >
                    <img src="./image/d5.png" alt="im1" class="img1" title="Dr. Samar Doe">
                    <button id="see-more5">see more</button>
                    <button><a href="book.html" >reserve from her </a></button>
                </div>

            </div>

           
            
        
            <h2>Pediatrician :</h2>
            <div class="box-container">
                <div class="box"  >
                    <img src="./image/d21.png" alt="im1" class="img1" title="Dr. kane Smith">
                    <button id="see-morea">see more</button>
                    <button><a href="book.html" >reserve from her </a></button>
                </div>
                <div class="box"  >
                    <img src="./image/d22.png" alt="im1" class="img1" title="Dr. Isra Johnson">
                    <button id="see-mored">see more</button>
                    <button><a href="book.html" >reserve from her </a></button>
                </div>

                <div class="box"  >
                    <img src="./image/d23.png" alt="im1" class="img1" title="Dr. Sarah Johnson">
                    <button id="see-moreb">see more</button>
                    <button><a href="book.html" >reserve from her </a></button>
                </div>
                <div class="box"  >
                    <img src="./image/d24.png" alt="im1" class="img1" title="Dr. Simon Johnson">
                    <button id="see-morec">see more</button>
                    <button><a href="book.html" >reserve from her </a></button>
                </div>

            </div>
             <h2>Neurologist: </h2>
            <div class="box-container">

                <div class="box"  >
                    <img src="./image/d31.png" alt="im1" class="img1" title="Dr. Jessica Lee">
                    <button id="see-moree">see more</button>
                    <button><a href="book.html" >reserve from her </a></button>
                </div>
                <div class="box"  >
                    <img src="./image/d32.png" alt="im1" class="img1" title="Dr. Jane Williams">
                    <button id="see-moref">see more</button>
                    <button><a href="book.html" >reserve from her </a></button>
                </div>

            </div>
            <h2>Oncologist:</h2>

            <div class="box-container">
                <div class="box"  >
                    <img src="./image/d41.png" alt="im1" class="img1" title="Dr. Michael Johnson">
                    <button id="see-moreg">see more</button>
                    <button><a href="book.html" >reserve from her </a></button>
                </div>
                <div class="box"  >
                    <img src="./image/d42.png" alt="im1" class="img1" title="Dr. Sarah Patel">
                    <button id="see-moreh">see more</button>
                    <button><a href="book.html" >reserve from her </a></button>
                </div>
 
                
            </div>

            </div>
            <h2>Gynecologist : </h2>
            <div class="box-container">
                
                
                <div class="box"  >
                    <img src="./image/d51.png" alt="im1" class="img1" title="Dr. Sara John">
                    <button id="see-morei">see more</button>
                    <button><a href="book.html" >reserve from her </a></button>
                </div>
                <div class="box"  >
                    <img src="./image/d52.png" alt="im1" class="img1" title="Dr. Lisa Chen">
                    <button id="see-morej">see more</button>
                    <button><a href="book.html" >reserve from her </a></button>
                </div>
                
            </div>
            <h2>Ophthalmologist:</h2>
            <div class="box-container">

                <div class="box"  >
                    <img src="./image/d61.png" alt="im1" class="img1" title="Dr. William Lee">
                    <button id="see-moreo">see more</button>
                    <button><a href="book.html" >reserve from her </a></button>
                </div>
                <div class="box"  >
                    <img src="./image/d62.png" alt="im1" class="img1" title="Dr. Emily Chen">
                    <button id="see-morep">see more</button>
                    <button ><a href="book.html" id="reserve">reserve from her </a></button>
                </div>

            </div>


    </section>
    <div class="see-dp" id="see-dp">
        <button id="btnp">x</button>
        <table>
            <tr>
                <td>
                    <h1>Dr. Emily Chen</h1>
                    <h2>Ophthalmologist</h2>
                </td>
                <td align="right">
                    <img id="table-img" src="./image/d62.png" alt="">
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Education and Training</h3>
                </td>
                <td>
                    <ul>
                        <li>Bachelor of Science in Biology from XYZ University</li>
                        <li>Doctor of Medicine (MD) degree from ABC Medical School</li>
                        <li>Completed residency in Ophthalmology at DEF Eye Institute</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Areas of Specialization</h3>
                </td>
                <td>
                    <p>Cataract Surgery, Glaucoma, Refractive Surgery, LASIK, Corneal Transplantation</p>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Work Experience</h3>
                </td>
                <td>
                    <ul>
                        <li>Ophthalmologist at XYZ Eye Clinic (2019-present)</li>
                        <li>Assistant Professor of Ophthalmology at ABC Medical School (2015-2019)</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Services Offered</h3>
                </td>
                <td>
                    <ul>
                        <li>Comprehensive eye exams for adults and children</li>
                        <li>Treatment of eye conditions including cataracts, glaucoma, and macular degeneration</li>
                        <li>Refractive surgery, including LASIK and PRK</li>
                        <li>Corneal transplantation</li>
                        <li>Management of diabetic eye disease and other conditions related to systemic diseases</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Appointments</h3>
                </td>
                <td>
                    <p>Patients can book an appointment with Dr. Lee online through the clinic's website or by calling the clinic's main phone number.</p>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Patient Reviews</h3>
                </td>
                <td>
                    <p>Dr. Emily has an average rating of 4.8 out of 5 stars based on 100 patient reviews. Patients have praised his professionalism, expertise, and kindness.</p>
                </td>
            </tr>
        </table>
    </div>
    
    <div class="see-do" id="see-do">
        <button id="btno">x</button>
        <table>
            <tr>
                <td>
                    <h1>Dr. William Lee</h1>
                    <h2>Ophthalmologist</h2>
                </td>
                <td align="right">
                    <img id="table-img" src="./image/d61.png" alt="">
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Education and Training</h3>
                </td>
                <td>
                    <ul>
                        <li>Bachelor of Science in Biology from XYZ University</li>
                        <li>Doctor of Medicine (MD) degree from ABC Medical School</li>
                        <li>Completed residency in Ophthalmology at DEF Eye Institute</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Areas of Specialization</h3>
                </td>
                <td>
                    <p>Cataract Surgery, Glaucoma, Refractive Surgery, LASIK, Corneal Transplantation</p>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Work Experience</h3>
                </td>
                <td>
                    <ul>
                        <li>Ophthalmologist at XYZ Eye Clinic (2019-present)</li>
                        <li>Assistant Professor of Ophthalmology at ABC Medical School (2015-2019)</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Services Offered</h3>
                </td>
                <td>
                    <ul>
                        <li>Comprehensive eye exams for adults and children</li>
                        <li>Treatment of eye conditions including cataracts, glaucoma, and macular degeneration</li>
                        <li>Refractive surgery, including LASIK and PRK</li>
                        <li>Corneal transplantation</li>
                        <li>Management of diabetic eye disease and other conditions related to systemic diseases</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Appointments</h3>
                </td>
                <td>
                    <p>Patients can book an appointment with Dr. Lee online through the clinic's website or by calling the clinic's main phone number.</p>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Patient Reviews</h3>
                </td>
                <td>
                    <p>Dr. Lee has an average rating of 4.8 out of 5 stars based on 100 patient reviews. Patients have praised his professionalism, expertise, and kindness.</p>
                </td>
            </tr>
        </table>
    </div>
    
    <div class="see-dj" id="see-dj">
        <button id="btnj">x</button>
        <table>
            <tr>
                <td>
                    <h1>Dr. Lisa Chen</h1>
                    <h2>Gynecologist</h2>
    
                </td>
                <td align="right">
                    <img id="table-img" src="./image/d52.png" alt="">
                </td>
            </tr>
    
            <tr>
                <td>
                    <h3>Education and Training</h3>     
                </td>
                <td>
                    <ul>
                        <li>Bachelor of Science in Biology from XYZ University</li>
                        <li>Doctor of Medicine (MD) degree from ABC Medical School</li>
                        <li>Completed residency in Obstetrics and Gynecology at DEF Hospital</li>
                    </ul>
    
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Areas of Specialization</h3>
                </td>
                <td>
                    <p>Obstetrics, Gynecology, Family Planning, Reproductive Health</p>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Work Experience</h3>
                </td>
                <td>
                    <ul>
                        <li>Gynecologist at XYZ Hospital (2020-present)</li>
                        <li>Obstetrics and Gynecology Resident at DEF Hospital (2017-2020)</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Services Offered</h3>
                </td>
                <td>
                    <ul>
                        <li>Comprehensive gynecological exams and screenings</li>
                        <li>Management of common gynecological conditions such as endometriosis, ovarian cysts, and pelvic pain</li>
                        <li>Family planning services including contraceptive counseling, IUD and implant insertion, and sterilization procedures</li>
                        <li>Pregnancy and childbirth care, including prenatal care and delivery</li>
                        <li>Menopause management and hormone replacement therapy</li>
                    </ul>
    
                </td>
    
            </tr>
            <tr>
                <td>
                    <h3>Appointments</h3>
                </td>
                <td>
                    <p>Patients can book an appointment with Dr. Rodriguez online through the hospital website or by calling the hospital's main phone number.</p>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Patient Reviews</h3>
    
                </td>
                <td>
                    <p>Dr. Rodriguez has an average rating of 4.8 out of 5 stars based on 100 patient reviews. Patients have praised her compassionate care, thoroughness during appointments, and ability to explain complex medical issues in an easy-to-understand manner.</p>
    
    
                </td>
            </tr>
    
    
        </table>
    
    </div>
    

    
    
    <div class="see-di" id="see-di">
        <button id="btni">x</button>
        <table>
            <tr>
                <td>
                    <h1>Dr. Sara John</h1>
                    <h2>Gynecologist</h2>
                </td>
                <td align="right">
                    <img id="table-img" src="./image/d51.png" alt="">
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Education and Training</h3>     
                </td>
                <td>
                    <ul>
                        <li>Bachelor of Medicine and Bachelor of Surgery (MBBS) from XYZ University</li>
                        <li>Master of Science in Obstetrics and Gynecology from ABC Medical School</li>
                        <li>Completed residency in Obstetrics and Gynecology at DEF Hospital</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Areas of Specialization</h3>
                </td>
                <td>
                    <p>Obstetrics and Gynecology, Reproductive Endocrinology and Infertility, Minimally Invasive Gynecologic Surgery</p>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Work Experience</h3>
                </td>
                <td>
                    <ul>
                        <li>Gynecologist at XYZ Hospital (2019-present)</li>
                        <li>Obstetrics and Gynecology Resident at DEF Hospital (2016-2019)</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Services Offered</h3>
                </td>
                <td>
                    <ul>
                        <li>Comprehensive gynecological care for women of all ages</li>
                        <li>Pregnancy and childbirth care, including prenatal care, delivery, and postpartum care</li>
                        <li>Diagnosis and treatment of reproductive system disorders, such as endometriosis, polycystic ovary syndrome (PCOS), and uterine fibroids</li>
                        <li>Fertility evaluation and treatment, including intrauterine insemination (IUI) and in vitro fertilization (IVF)</li>
                        <li>Minimally invasive gynecologic surgery, including laparoscopy and hysteroscopy</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Appointments</h3>
                </td>
                <td>
                    <p>Patients can book an appointment with Dr. Johnson online through the hospital website or by calling the hospital's main phone number.</p>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Patient Reviews</h3>
                </td>
                <td>
                    <p>Dr. Johnson has an average rating of 4.8 out of 5 stars based on 60 patient reviews. Patients have praised her expertise, professionalism, and compassionate care.</p>
                </td>
            </tr>
        </table>
    </div>
    
    <div class="see-dh" id="see-dh">
        <button id="btnh">x</button>
        <table>
            <tr>
                <td>
                    <h1>Dr. Sarah Patel</h1>
                    <h2>Oncologist</h2>
                </td>
                <td align="right">
                    <img id="table-img" src="./image/d42.png" alt="">
                </td>
            </tr>
    
            <tr>
                <td>
                    <h3>Education and Training</h3>     
                </td>
                <td>
                    <ul>
                        <li>Bachelor of Science in Biology from XYZ University</li>
                        <li>Doctor of Medicine (MD) degree from ABC Medical School</li>
                        <li>Completed residency in Internal Medicine at DEF Hospital</li>
                        <li>Fellowship in Oncology at GHI Cancer Center</li>
                    </ul>
                </td>
            </tr>
    
            <tr>
                <td>
                    <h3>Areas of Specialization</h3>
                </td>
                <td>
                    <p>Oncology, Hematology, Chemotherapy, Radiation Therapy</p>
                </td>
            </tr>
    
            <tr>
                <td>
                    <h3>Work Experience</h3>
                </td>
                <td>
                    <ul>
                        <li>Oncologist at GHI Cancer Center (2015-present)</li>
                        <li>Internist at JKL Hospital (2012-2015)</li>
                    </ul>
                </td>
            </tr>
    
            <tr>
                <td>
                    <h3>Services Offered</h3>
                </td>
                <td>
                    <ul>
                        <li>Diagnosis and treatment of various types of cancer</li>
                        <li>Chemotherapy and radiation therapy</li>
                        <li>Management of cancer-related symptoms such as pain, fatigue, and nausea</li>
                        <li>Coordination of care with other specialists as needed</li>
                        <li>Counseling and support for patients and their families</li>
                    </ul>
                </td>
            </tr>
    
            <tr>
                <td>
                    <h3>Appointments</h3>
                </td>
                <td>
                    <p>Patients can book an appointment with Dr. Patel online through the hospital website or by calling the hospital's main phone number.</p>
                </td>
            </tr>
    
            <tr>
                <td>
                    <h3>Patient Reviews</h3>
                </td>
                <td>
                    <p>Dr. Patel has an average rating of 4.8 out of 5 stars based on 100 patient reviews. Patients have praised her kindness, expertise, and ability to explain complex medical concepts in an understandable way.</p>
                </td>
            </tr>
        </table>
    </div>
    
    <div class="see-dg" id="see-dg">
        <button id="btng">x</button>
        <table>
            <tr>
                <td>
                    <h1>Dr. Michael Johnson</h1>
                    <h2>Oncologist</h2>
    
                </td>
                <td  align= "right">
                    <img id="table-img" src="./image/d41.png" alt="">
                </td>
            </tr>
    
            <tr>
                <td>
                    <h3>Education and Training</h3>     
                </td>
                <td>
                    <ul>
                        <li>Bachelor of Science in Biology from XYZ University</li>
                        <li>Doctor of Medicine (MD) degree from ABC Medical School</li>
                        <li>Completed residency in Internal Medicine at DEF Hospital</li>
                        <li>Fellowship in Medical Oncology at GHI Cancer Center</li>
                    </ul>
    
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Areas of Specialization</h3>
                </td>
                <td>
                    <p>Medical Oncology, Hematology, Cancer Research</p>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Work Experience</h3>
                </td>
                <td>
                    <ul>
                        <li>Oncologist at GHI Cancer Center (2010-present)</li>
                        <li>Medical Oncology Fellow at GHI Cancer Center (2007-2010)</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Services Offered</h3>
                </td>
                <td>
                    <ul>
                        <li>Diagnosis and treatment of various types of cancer</li>
                        <li>Management of side effects of cancer treatments such as chemotherapy and radiation therapy</li>
                        <li>Provision of chemotherapy, immunotherapy, and other cancer treatments</li>
                        <li>Counseling on lifestyle changes to help prevent cancer</li>
                        <li>Coordination of care with other medical specialists</li>
                    </ul>
    
                </td>
    
            </tr>
            <tr>
                <td>
                    <h3>Appointments</h3>
                </td>
                <td>
                    <p>Patients can book an appointment with Dr. Johnson online through the GHI Cancer Center website or by calling the center's main phone number.</p>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Patient Reviews</h3>
    
                </td>
                <td>
                    <p>Dr. Johnson has an average rating of 4.8 out of 5 stars based on 100 patient reviews. Patients have praised his expertise, professionalism, and compassion.</p>
    
    
                </td>
            </tr>
    
    
        </table>
    
    </div>
    
    <div class="see-df" id="see-df">
        <button id="btnf">x</button>
        <table>
            <tr>
                <td>
                    <h1>Dr. Jane Williams</h1>
                    <h2>Neurologist</h2>
                </td>
                <td align="right">
                    <img id="table-img" src="./image/d32.png" alt="">
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Education and Training</h3>
                </td>
                <td>
                    <ul>
                        <li>Bachelor of Science in Neuroscience from University of California, Los Angeles (UCLA)</li>
                        <li>Doctor of Medicine (MD) degree from Stanford University School of Medicine</li>
                        <li>Completed residency in Neurology at Johns Hopkins Hospital</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Areas of Specialization</h3>
                </td>
                <td>
                    <p>Headache, Migraine, Movement Disorders, Multiple Sclerosis, Stroke</p>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Work Experience</h3>
                </td>
                <td>
                    <ul>
                        <li>Attending Neurologist at Cedars-Sinai Medical Center, Los Angeles (2020-present)</li>
                        <li>Assistant Professor of Neurology at University of Southern California, Los Angeles (2018-2020)</li>
                        <li>Neurology Resident at Johns Hopkins Hospital (2014-2018)</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Services Offered</h3>
                </td>
                <td>
                    <ul>
                        <li>Diagnosis and treatment of headache and migraine disorders</li>
                        <li>Diagnosis and treatment of movement disorders such as Parkinson's disease</li>
                        <li>Diagnosis and treatment of multiple sclerosis and related disorders</li>
                        <li>Diagnosis and treatment of stroke and other cerebrovascular disorders</li>
                        <li>Neurological evaluation and treatment of other neurological conditions</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Appointments</h3>
                </td>
                <td>
                    <p>Patients can book an appointment with Dr. Williams online through the Cedars-Sinai website or by calling the medical center's main phone number.</p>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Patient Reviews</h3>
                </td>
                <td>
                    <p>Dr. Williams has an average rating of 4.8 out of 5 stars based on 100 patient reviews. Patients have praised her expertise, compassion, and thoroughness during appointments.</p>
                </td>
            </tr>
        </table>
    </div>
    
    <div class="see-de" id="see-de">
        <button id="btne">x</button>
        <table>
            <tr>
                <td>
                    <h1>Dr. Jessica Lee</h1>
                    
                    <h2>Neurologist</h2>
    
                </td>
                <td align="right">
                    <img id="table-img" src="./image/d31.png" alt="">
                </td>
            </tr>
    
            <tr>
                <td>
                    <h3>Education and Training</h3>
                </td>
                <td>
                    <ul>
                        <li>Bachelor of Science in Neuroscience from XYZ University</li>
                        <li>Doctor of Medicine (MD) degree from ABC Medical School</li>
                        <li>Completed residency in Neurology at DEF Hospital</li>
                        <li>Fellowship in Movement Disorders at GHI Institute</li>
                    </ul>
    
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Areas of Specialization</h3>
                </td>
                <td>
                    <p>Movement Disorders, Parkinson's Disease, Multiple Sclerosis, Epilepsy, Neuromuscular Disorders</p>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Work Experience</h3>
                </td>
                <td>
                    <ul>
                        <li>Neurologist at JKL Hospital (2018-present)</li>
                        <li>Neurology Resident at DEF Hospital (2014-2018)</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Services Offered</h3>
                </td>
                <td>
                    <ul>
                        <li>Comprehensive evaluation and management of neurological conditions</li>
                        <li>Specialized treatment for movement disorders, including deep brain stimulation (DBS)</li>
                        <li>Management of seizures and epilepsy, including medication and dietary therapies</li>
                        <li>Treatment of multiple sclerosis and other autoimmune neurological disorders</li>
                        <li>Diagnosis and treatment of neuromuscular disorders, such as ALS and myasthenia gravis</li>
                    </ul>
    
                </td>
    
            </tr>
            <tr>
                <td>
                    <h3>Appointments</h3>
                </td>
                <td>
                    <p>Patients can book an appointment with Dr. Lee online through the hospital website or by calling the hospital's main phone number.</p>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Patient Reviews</h3>
    
                </td>
                <td>
                    <p>Dr. Lee has an average rating of 4.8 out of 5 stars based on 30 patient reviews. Patients have praised her expertise, compassionate care, and ability to explain complex medical information in an understandable way.</p>
    
    
                </td>
            </tr>
    
    
        </table>
    
    </div>
    
        <div class="see-d2" id="see-d2">
            <button id="btn2">x</button>
            <table>
                <tr>
                    <td>
                        <h1>Dr. John Smith</h1>
                        <h2>General Practitioner</h2>

                    </td>
                    <td  align= "right">
                        <img id="table-img" src="./image/d2.png" alt="">
                    </td>
                </tr>

                <tr>
                    <td>
                        <h3>Education and Training</h3>     
                    </td>
                    <td>
                        <ul>
                            <li>Bachelor of Science in Biology from XYZ University</li>
                            <li>Doctor of Medicine (MD) degree from ABC Medical School</li>
                            <li>Completed residency in Family Medicine at DEF Hospital</li>
                        </ul>

                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Areas of Specialization</h3>
                    </td>
                    <td>
                        <p>Family Medicine, Preventive Care, Chronic Disease Management</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Work Experience</h3>
                    </td>
                    <td>
                        <ul>
                            <li>General Practitioner at XYZ Hospital (2020-present)</li>
                            <li>Family Medicine Resident at DEF Hospital (2017-2020)</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Services Offered</h3>
                    </td>
                    <td>
                        <ul>
                            <li>Routine checkups and physical exams for adults and children</li>
                            <li>Management of chronic conditions such as diabetes, hypertension, and asthma</li>
                            <li>Women's health services including Pap smears, birth control, and menopause management</li>
                            <li>Vaccinations and immunizations for children and adults</li>
                            <li>Coordination of care with specialists as needed</li>
                        </ul>

                    </td>

                </tr>
                <tr>
                    <td>
                        <h3>Appointments</h3>
                    </td>
                    <td>
                        <p>Patients can book an appointment with Dr. Smith online through the hospital website or by calling the hospital's main phone number.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Patient Reviews</h3>

                    </td>
                    <td>
                        <p>Dr. Smith has an average rating of 4.5 out of 5 stars based on 50 patient reviews. Patients have praised his friendly demeanor, thoroughness during appointments, and ability to listen to their concerns.</p>


                    </td>
                </tr>


            </table>

        </div>
        <div class="see-d1" id="see-d1">
            <button id="btn1">x</button>
            <table>
                <tr>
                    <td>
                        <h1>Dr. Sarah Johnson</h1>
                        <h2>General Practitioner</h2>
                    </td>
                    <td align="right">
                        <img id="table-img" src="./image/d1.png" alt="">
                    </td>
                </tr>
            
                <tr>
                    <td>
                        <h3>Education and Training</h3>     
                    </td>
                    <td>
                        <ul>
                            <li>Bachelor of Science in Biology from XYZ University</li>
                            <li>Doctor of Medicine (MD) degree from ABC Medical School</li>
                            <li>Completed residency in Family Medicine at DEF Hospital</li>
                        </ul>
            
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Areas of Specialization</h3>
                    </td>
                    <td>
                        <p>Family Medicine, Preventive Care, Women's Health</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Work Experience</h3>
                    </td>
                    <td>
                        <ul>
                            <li>General Practitioner at XYZ Hospital (2019-present)</li>
                            <li>Family Medicine Resident at DEF Hospital (2016-2019)</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Services Offered</h3>
                    </td>
                    <td>
                        <ul>
                            <li>Routine checkups and physical exams for adults and children</li>
                            <li>Women's health services including Pap smears, birth control, and menopause management</li>
                            <li>Management of chronic conditions such as diabetes, hypertension, and asthma</li>
                            <li>Vaccinations and immunizations for children and adults</li>
                            <li>Coordination of care with specialists as needed</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Appointments</h3>
                    </td>
                    <td>
                        <p>Patients can book an appointment with Dr. Johnson online through the hospital website or by calling the hospital's main phone number.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Patient Reviews</h3>
                    </td>
                    <td>
                        <p>Dr. Johnson has an average rating of 4.7 out of 5 stars based on 100 patient reviews. Patients have praised her compassionate bedside manner, clear communication, and thoroughness during appointments.</p>
                    </td>
                </tr>
            </table>
        </div>
        <div class="see-d3" id="see-d3">
            <button id="btn3">x</button>
            <table>
                <tr>
                    <td>
                        <h1>Dr. Michael Johnson</h1>
                        <h2>General Practitioner</h2>
                    </td>
                    <td  align= "right">
                        <img id="table-img" src="./image/d3.png" alt="">
                    </td>
                </tr>
        
                <tr>
                    <td>
                        <h3>Education and Training</h3>     
                    </td>
                    <td>
                        <ul>
                            <li>Bachelor of Science in Biology from XYZ University</li>
                            <li>Doctor of Medicine (MD) degree from ABC Medical School</li>
                            <li>Completed residency in Family Medicine at DEF Hospital</li>
                        </ul>
        
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Areas of Specialization</h3>
                    </td>
                    <td>
                        <p>Family Medicine, Preventive Care, Chronic Disease Management</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Work Experience</h3>
                    </td>
                    <td>
                        <ul>
                            <li>General Practitioner at XYZ Hospital (2018-present)</li>
                            <li>Family Medicine Resident at DEF Hospital (2015-2018)</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Services Offered</h3>
                    </td>
                    <td>
                        <ul>
                            <li>Routine checkups and physical exams for adults and children</li>
                            <li>Management of chronic conditions such as diabetes, hypertension, and asthma</li>
                            <li>Women's health services including Pap smears, birth control, and menopause management</li>
                            <li>Vaccinations and immunizations for children and adults</li>
                            <li>Coordination of care with specialists as needed</li>
                        </ul>
        
                    </td>
        
                </tr>
                <tr>
                    <td>
                        <h3>Appointments</h3>
                    </td>
                    <td>
                        <p>Patients can book an appointment with Dr. Johnson online through the hospital website or by calling the hospital's main phone number.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Patient Reviews</h3>
        
                    </td>
                    <td>
                        <p>Dr. Johnson has an average rating of 4.8 out of 5 stars based on 75 patient reviews. Patients have praised his professionalism, knowledge, and empathy during appointments.</p>
        
        
                    </td>
                </tr>
        
        
            </table>
        
        </div>
        
        <div class="see-d4" id="see-d4">
            <button id="btn4">x</button>
            <table>
                <tr>
                    <td>
                        <h1>Dr. Jane Doe</h1>
                        <h2>General Practitioner</h2>
                    </td>
                    <td  align= "right">
                        <img id="table-img" src="./image/d4.png" alt="">
                    </td>
                </tr>
    
                <tr>
                    <td>
                        <h3>Education and Training</h3>     
                    </td>
                    <td>
                        <ul>
                            <li>Bachelor of Science in Biology from XYZ University</li>
                            <li>Doctor of Medicine (MD) degree from ABC Medical School</li>
                            <li>Completed residency in Family Medicine at DEF Hospital</li>
                        </ul>
    
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Areas of Specialization</h3>
                    </td>
                    <td>
                        <p>Family Medicine, Preventive Care, Women's Health</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Work Experience</h3>
                    </td>
                    <td>
                        <ul>
                            <li>General Practitioner at XYZ Hospital (2020-present)</li>
                            <li>Family Medicine Resident at DEF Hospital (2017-2020)</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Services Offered</h3>
                    </td>
                    <td>
                        <ul>
                            <li>Routine checkups and physical exams for adults and children</li>
                            <li>Management of chronic conditions such as diabetes, hypertension, and asthma</li>
                            <li>Women's health services including Pap smears, birth control, and menopause management</li>
                            <li>Vaccinations and immunizations for children and adults</li>
                            <li>Coordination of care with specialists as needed</li>
                        </ul>
    
                    </td>
    
                </tr>
                <tr>
                    <td>
                        <h3>Appointments</h3>
                    </td>
                    <td>
                        <p>Patients can book an appointment with Dr. Doe online through the hospital website or by calling the hospital's main phone number.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Patient Reviews</h3>
    
                    </td>
                    <td>
                        <p>Dr. Doe has an average rating of 4.7 out of 5 stars based on 60 patient reviews. Patients have praised her caring and compassionate demeanor, thoroughness during appointments, and ability to make them feel comfortable.</p>
    
    
                    </td>
                </tr>
    
    
            </table>
    
        </div>
        <div class="see-d5" id="see-d5">
            <button id="btn5">x</button>
            <table>
                <tr>
                    <td>
                        <h1>Dr. Samar Doe</h1>
                        <h2>General Practitioner</h2>
        
                    </td>
                    <td  align= "right">
                        <img id="table-img" src="./image/d5.png" alt="">
                    </td>
                </tr>
        
                <tr>
                    <td>
                        <h3>Education and Training</h3>     
                    </td>
                    <td>
                        <ul>
                            <li>Bachelor of Science in Biology from ABC University</li>
                            <li>Doctor of Medicine (MD) degree from XYZ Medical School</li>
                            <li>Completed residency in Family Medicine at MNO Hospital</li>
                        </ul>
        
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Areas of Specialization</h3>
                    </td>
                    <td>
                        <p>Family Medicine, Preventive Care, Chronic Disease Management</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Work Experience</h3>
                    </td>
                    <td>
                        <ul>
                            <li>General Practitioner at PQR Hospital (2020-present)</li>
                            <li>Family Medicine Resident at MNO Hospital (2017-2020)</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Services Offered</h3>
                    </td>
                    <td>
                        <ul>
                            <li>Routine checkups and physical exams for adults and children</li>
                            <li>Management of chronic conditions such as diabetes, hypertension, and asthma</li>
                            <li>Women's health services including Pap smears, birth control, and menopause management</li>
                            <li>Vaccinations and immunizations for children and adults</li>
                            <li>Coordination of care with specialists as needed</li>
                        </ul>
        
                    </td>
        
                </tr>
                <tr>
                    <td>
                        <h3>Appointments</h3>
                    </td>
                    <td>
                        <p>Patients can book an appointment with Dr. Doe online through the hospital website or by calling the hospital's main phone number.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Patient Reviews</h3>
        
                    </td>
                    <td>
                        <p>Dr. Doe has an average rating of 4.8 out of 5 stars based on 75 patient reviews. Patients have praised her compassionate care, expertise, and willingness to listen to their concerns.</p>
        
        
                    </td>
                </tr>
        
        
            </table>
        
        </div>
        
       <div class="see-da" id="see-da">
            <button id="btna">x</button>
            <table>
                <tr>
                    <td>
                        <h1>Dr. kane Smith</h1>
                        <h2>Pediatrician</h2>
                    </td>
                    <td  align= "right">
                        <img id="table-img" src="./image/d21.png" alt="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Education and Training</h3>
                    </td>
                    <td>
                        <ul>
                            <li>Bachelor of Science in Biology from XYZ University</li>
                            <li>Doctor of Medicine (MD) degree from ABC Medical School</li>
                            <li>Completed residency in Pediatrics at DEF Hospital</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Areas of Specialization</h3>
                    </td>
                    <td>
                        <p>Pediatrics, Childhood Vaccinations, Growth and Development Monitoring</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Work Experience</h3>
                    </td>
                    <td>
                        <ul>
                            <li>Pediatrician at XYZ Hospital (2020-present)</li>
                            <li>Pediatrician at DEF Hospital (2017-2020)</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Services Offered</h3>
                    </td>
                    <td>
                        <ul>
                            <li>Newborn care and well-baby checkups</li>
                            <li>Vaccinations and immunizations for infants, children, and adolescents</li>
                            <li>Growth and development monitoring</li>
                            <li>Treatment of common childhood illnesses</li>
                            <li>Coordination of care with specialists as needed</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Appointments</h3>
                    </td>
                    <td>
                        <p>Parents can book an appointment with Dr. Smith online through the hospital website or by calling the hospital's main phone number.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Patient Reviews</h3>
                    </td>
                    <td>
                        <p>Dr. Smith has an average rating of 4.8 out of 5 stars based on 100 patient reviews. Parents have praised his patience and gentle manner with children, as well as his expertise and thoroughness during appointments.</p>
                    </td>
                </tr>
            </table>
        </div>
        <div class="see-db" id="see-db">
            <button id="btnb">x</button>
            <table>
                <tr>
                    <td>
                        <h1>Dr. Sarah Johnson</h1>
                        <h2>Pediatrician</h2>
                    </td>
                    <td align="right">
                        <img id="table-img" src="./image/d23.png" alt="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Education and Training</h3>
                    </td>
                    <td>
                        <ul>
                            <li>Bachelor of Science in Biology from XYZ University</li>
                            <li>Doctor of Medicine (MD) degree from ABC Medical School</li>
                            <li>Completed residency in Pediatrics at DEF Hospital</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Areas of Specialization</h3>
                    </td>
                    <td>
                        <p>Pediatrics, Neonatology, Child Development</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Work Experience</h3>
                    </td>
                    <td>
                        <ul>
                            <li>Pediatrician at XYZ Hospital (2015-present)</li>
                            <li>Neonatology Resident at DEF Hospital (2012-2015)</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Services Offered</h3>
                    </td>
                    <td>
                        <ul>
                            <li>Newborn care and follow-up</li>
                            <li>Vaccinations and immunizations for children</li>
                            <li>Developmental screenings and evaluations</li>
                            <li>Management of common pediatric conditions such as asthma, allergies, and infections</li>
                            <li>Coordination of care with specialists as needed</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Appointments</h3>
                    </td>
                    <td>
                        <p>Parents can book an appointment with Dr. Johnson online through the hospital website or by calling the hospital's main phone number.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Patient Reviews</h3>
                    </td>
                    <td>
                        <p>Dr. Johnson has an average rating of 4.8 out of 5 stars based on 75 patient reviews. Parents have praised her for her kindness, expertise, and ability to connect with children.</p>
                    </td>
                </tr>
            </table>
        </div>
        <div class="see-dc" id="see-dc">
            <button id="btnc">x</button>
            <table>
                <tr>
                    <td>
                        <h1>Dr. Simon Johnson</h1>
                        <h2>Pediatrician</h2>
                    </td>
                    <td align="right">
                        <img id="table-img" src="./image/d24.png" alt="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Education and Training</h3>
                    </td>
                    <td>
                        <ul>
                            <li>Bachelor of Science in Biology from XYZ University</li>
                            <li>Doctor of Medicine (MD) degree from ABC Medical School</li>
                            <li>Completed residency in Pediatrics at DEF Hospital</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Areas of Specialization</h3>
                    </td>
                    <td>
                        <p>Pediatrics, Neonatology, Child Development</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Work Experience</h3>
                    </td>
                    <td>
                        <ul>
                            <li>Pediatrician at XYZ Hospital (2015-present)</li>
                            <li>Neonatology Resident at DEF Hospital (2012-2015)</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Services Offered</h3>
                    </td>
                    <td>
                        <ul>
                            <li>Newborn care and follow-up</li>
                            <li>Vaccinations and immunizations for children</li>
                            <li>Developmental screenings and evaluations</li>
                            <li>Management of common pediatric conditions such as asthma, allergies, and infections</li>
                            <li>Coordination of care with specialists as needed</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Appointments</h3>
                    </td>
                    <td>
                        <p>Parents can book an appointment with Dr. Johnson online through the hospital website or by calling the hospital's main phone number.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Patient Reviews</h3>
                    </td>
                    <td>
                        <p>Dr. Johnson has an average rating of 4.8 out of 5 stars based on 75 patient reviews. Parents have praised her for her kindness, expertise, and ability to connect with children.</p>
                    </td>
                </tr>
            </table>
        </div>
        <div class="see-dd" id="see-dd">
            <button id="btnd">x</button>
            <table>
              <tr>
                <td>
                  <h1>Dr. Isra Johnson</h1>
                  <h2>Pediatrician</h2>
                </td>
                <td align="right">
                  <img id="table-img" src="./image/d22.png" alt="">
                </td>
              </tr>
              <tr>
                <td>
                  <h3>Education and Training</h3>
                </td>
                <td>
                  <ul>
                    <li>Bachelor of Science in Biology from XYZ University</li>
                    <li>Doctor of Medicine (MD) degree from ABC Medical School</li>
                    <li>Completed residency in Pediatrics at DEF Hospital</li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td>
                  <h3>Areas of Specialization</h3>
                </td>
                <td>
                  <p>Pediatrics, Newborn Care, Vaccinations and Immunizations</p>
                </td>
              </tr>
              <tr>
                <td>
                  <h3>Work Experience</h3>
                </td>
                <td>
                  <ul>
                    <li>Pediatrician at XYZ Hospital (2020-present)</li>
                    <li>Pediatric Resident at DEF Hospital (2017-2020)</li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td>
                  <h3>Services Offered</h3>
                </td>
                <td>
                  <ul>
                    <li>Newborn care and well-baby checkups</li>
                    <li>Management of acute and chronic childhood illnesses</li>
                    <li>Vaccinations and immunizations for children</li>
                    <li>School and sports physicals</li>
                    <li>Developmental and behavioral screenings</li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td>
                  <h3>Appointments</h3>
                </td>
                <td>
                  <p>Patients can book an appointment with Dr. Johnson online through the hospital website or by calling the hospital's main phone number.</p>
                </td>
              </tr>
              <tr>
                <td>
                  <h3>Patient Reviews</h3>
                </td>
                <td>
                  <p>Dr. Johnson has an average rating of 4.9 out of 5 stars based on 100 patient reviews. Patients have praised her expertise, professionalism, and compassion.</p>
                </td>
              </tr>
            </table>
          </div>
          
        
        
        
        
    
            

<script src="./js3.js"></script> 
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
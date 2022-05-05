<?php 
session_start(); 
include "dbconnection.php";
?>
<!doctype html>
<html lang="en">
<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>AMPS</title>
    <meta name="keywords" content="">
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="" type="image/png">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="css/slick.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="css/animate.css">
    
    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="css/nice-select.css">
    
    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="css/jquery.nice-number.min.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="css/default.css">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="css/style.css">
    
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="css/responsive.css">
  
  
</head>

<body>
   
    <!--====== PRELOADER PART START ======-->
    
    <div class="preloader">
        <div class="loader rubix-cube">
            <div class="layer layer-1"></div>
            <div class="layer layer-2"></div>
            <div class="layer layer-3 color-1"></div>
            <div class="layer layer-4"></div>
            <div class="layer layer-5"></div>
            <div class="layer layer-6"></div>
            <div class="layer layer-7"></div>
            <div class="layer layer-8"></div>
        </div>
    </div>
    
    <!--====== PRELOADER PART START ======-->
    
    <!--====== HEADER PART START ======-->
    
    <header id="header-part">
       
        <div class="header-top d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact text-lg-left text-center">
                            <ul>
                                <li><img src="images/all-icon/map.png" alt="icon"><span>Rajpur Chajpur Khandla Bhudana Muzaffarnagar U.P.</span></li>
                                <li><img src="images/all-icon/email.png" alt="icon"><span>aartimemorial@yahoo.com</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header-opening-time text-lg-right text-center">
                            <p>Opening Hours :Summer- Monday to Saturay - 7:30 AM to 2:00 PM <br> Winter- Monday to Saturay - 8:00 AM to 3:00 PM</p>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header top -->
        
        <div class="header-logo-support pt-30 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="logo">
                            <a href="index.php">
                                <img src="images/logo1.png" alt="Logo">
                             
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="support-button float-right d-none d-md-block">
                            <div class="support float-left">
                                <div class="icon">
                                    <img src="images/all-icon/support.png" alt="icon">
                                </div>
                                <div class="cont">
                                    <p>Need Help? call us free</p>
                                    <span>+91 8923078672</span>
                                </div>
                            </div>
                            <div class="button float-left">
                              
                            </div>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header logo support -->
        
        <div class="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-9 col-8">
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item">
                                        <a class="active" href="index.php">Home</a>
                                       
                                    </li>
                                    <li class="nav-item">
                                        <a href="">About us</a>
                                        <ul class="sub-menu">
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="mission.html">Vision and Mission</a></li>
                                            <li><a href="faculty.html">AMPS Faculty Member</a></li>
                                            <li><a href="chairman.html">Chaiperson Message</a></li>
                                            <li><a href="principal.html">Principal Message</a></li>
                                            
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="">Admission</a>
                                        <ul class="sub-menu">
                                            <li><a href="admission.html">Admission Procedure</a></li>
                                            <li><a href="fee.html">Fees Structure</a></li>
                                            <li><a href="withdrawal.html">Withdrawal Process</a></li>
                                           
                                        </ul>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="">Academics</a>
                                        <ul class="sub-menu">
                                            <li><a href="timetable.html">Time Table</a></li>
                                            <li><a href="syllabus.html">syllabus</a></li>
                                            <li><a href="academiccalender.html">Academic Calender</a></li>
                                          
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="">Facilities</a>
                                        <ul class="sub-menu">
                                            <li><a href="physics.html">Physics Lab</a></li>
                                            <li><a href="chemistry.html">Chemistry Lab</a></li>
                                            <li><a href="biology.html">Biology Lab</a></li>
                                            <li><a href="atl.html">ATL Lab</a></li>
                                            <li><a href="computer.html">Computer Lab</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="">Rules & Regulations</a>
                                        <ul class="sub-menu">
                                            <li><a href="dress.html">Dress Code</a></li>
                                            <li><a href="schoolpolicy.html">School Policy</a></li>
                                        </ul>
                                    </li>
                                  
                                    <li class="nav-item">
                                        <a href="">Gallery</a>
                                        <ul class="sub-menu">
                                            <li><a href="photos.html">Photos</a></li>
                                            <li><a href="videos.html">Videos</a></li>
                                        </ul>
                                       
                                    </li>
                                    <li class="nav-item">
                                        <a href="contact.html">Contact</a>
                                     
                                       
                                    </li>
                                </ul>
                            </div>
                        </nav> <!-- nav -->
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 col-4">
                        <div class="right-icon text-right">
                            <ul>
                              
                            </ul>
                        </div> <!-- right icon -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
        
    </header>
    
    <!--====== HEADER PART ENDS ======-->
   
    <!--====== SEARCH BOX PART START ======-->
    
    <div class="search-box">
        <div class="serach-form">
            <div class="closebtn">
                <span></span>
                <span></span>
            </div>
            <form action="#">
                <input type="text" placeholder="Search by keyword">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div> <!-- serach form -->
    </div>
    
    <!--====== SEARCH BOX PART ENDS ======-->
   
    <!--====== SLIDER PART START ======-->
    
    <section id="slider-part" class="slider-active">
        <div class="single-slider bg_cover pt-150" style="background-image: url(images/slider/banner-3.jpg)" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                          <h4></h4>
                          <br>
                          <h1 style="color: whitesmoke;"></h1>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
        
        <div class="single-slider bg_cover pt-150" style="background-image: url(images/slider/banner-1.jpeg)" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1></h1>
                          <br>
                          <h1></h1>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
        
        <div class="single-slider bg_cover pt-150" style="background-image: url(images/slider/banner-2.jpeg)" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1></h1>
                            <br>
                            <h1></h1>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
        <div class="single-slider bg_cover pt-150" style="background-image: url(images/slider/banner-4.jpeg)" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1></h1>
                            <br>
                            <h1></h1>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
    </section>
    
    <!--====== SLIDER PART ENDS ======-->
<!--    
    ====== CATEGORY PART START ======-
    
    <section id="category-part">
        <div class="container">
            <div class="category pt-40 pb-80">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="category-text pt-40">
                            <h2>Best platform to learn everything</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1 col-md-8 offset-md-2 col-sm-8 offset-sm-2 col-8 offset-2">
                        <div class="row category-slied mt-40">
                            <div class="col-lg-4">
                                <a href="#">
                                    <span class="singel-category text-center color-1">
                                        <span class="icon">
                                            <img src="images/all-icon/ctg-1.png" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Language</span>
                                        </span>
                                    </span> 
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#">
                                    <span class="singel-category text-center color-2">
                                        <span class="icon">
                                            <img src="images/all-icon/ctg-2.png" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Business</span>
                                        </span>
                                    </span> <!-- singel category -->
                                <!-- </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#">
                                    <span class="singel-category text-center color-3">
                                        <span class="icon">
                                            <img src="images/all-icon/ctg-3.png" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Literature</span>
                                        </span>
                                    </span> <!-- singel category -->
                                <!-- </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#">
                                    <span class="singel-category text-center color-1">
                                        <span class="icon">
                                            <img src="images/all-icon/ctg-1.png" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Language</span>
                                        </span>
                                    <!-- </span> <!-- singel category -->
                                <!-- </a>
                            </div>
                            <div class="col-lg-4"> -->
                                <!-- <a href="#">
                                    <span class="singel-category text-center color-2">
                                        <span class="icon">
                                            <img src="images/all-icon/ctg-2.png" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Business</span>
                                        </span>
                                    <!-- </span> <!-- singel category -->
                                <!-- </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#">
                                    <span class="singel-category text-center color-3"> 
                                        <span class="icon">
                                            <img src="images/all-icon/ctg-3.png" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Literature</span>
                                        </span>
                                    </span> 
                                </a>
                            </div>
                        </div> <!-- category slied -->
                    <!-- </div>
                </div> <!-- row 
            </div> <!-- category 
        </div> <!-- container 
    </section> 
     
     -->
   
    <!--====== ABOUT PART START ======-->
    
    <section id="about-part" class="pt-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-0">
                        <h5>About us</h5>
                        <h2>Welcome to Aarti Memorial Sr. Secondary Public School </h2>
                    </div> <!-- section title -->
                    <div class="about-cont">
                        <p></p>
                 
                    </div>
                </div> <!-- about cont -->
                <div class="col-lg-6 offset-lg-1">
                    <div class="about-event mt-50 ">
                      
                        
                            
                    The Aarti Memorial Senior Secondary Public School In Rajpur- Chhajpur, Kandhala- Budhana M.Nagar offers a learning environment to its students and is rated as one of the best schools in. Rajpur- Chhajpur, Kandhala- Budhana, M.Nagar The school follows an integrated CBSE syllabus which is equipped with a micro-schedule that defines preparation on an hour-to-hour basis and acts as an added advantage to students. Further, Arti Memorial Sr.Sec. Schools follow the best and top teaching methodologies. These methods offer the best possible foundation and assistance that help students perform exceptionally well in Olympiad and other competitive exams.
                            
                    
                    </div> <!-- about event -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        
       
    </section>
    
    <!--====== ABOUT PART ENDS ======-->
   
    <!--====== NOTICE PART START ======-->
    <section id="about-part" class="pt-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                <div class="section-title mt-0">
                    <h5>Notice Board</h5>
                    <h2>You can See Upcoming events here. </h2>
                </div> <!-- section title -->
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="about-event mt-50 ">
                      
                        
                        <table class="table" >
                            <tr style='background: whitesmoke;'>
                                
                                <th style="text-align:center">Date</th>
                                <th style="text-align:center">Notice</th>
                               
                            </tr>
            
                            <?php 
                            $query = "SELECT * FROM notice ORDER BY id DESC LIMIT 5";
                            $result = mysqli_query($conn,$query);
            
                            $count = 1;
                            while($row = mysqli_fetch_array($result) ){
                                $id = $row['id'];
                                $title = $row['dates'];
                                $link = $row['notice'];
            
                            ?>
                                <tr>
                                   
                                    <td align='center'><?= $title; ?></td>
                                    <td align='center'><?= $link; ?></td>
                                 
                                </tr>
                            <?php
                                $count++;
                            }
                            ?>
                        </table>
                            
                            
                    
                    </div> <!-- about event -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        
       
    </section>
    
     <!--====== COUNTER PART START ======-->
    
     <div id="counter-part" class="bg_cover pt-65 pb-110" data-overlay="8" style="background-image: url(images/slider/banner-3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter text-center mt-40">
                        <span><span class="counter">600</span>+</span>
                        <p>Students </p>
                    </div> <!-- singel counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter text-center mt-40">
                        <span><span class="counter">10</span>+</span>
                        <p>Years Experience </p>
                    </div> <!-- singel counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter text-center mt-40">
                        <span><span class="counter">20</span>+</span>
                        <p>Staff</p>
                    </div> <!-- singel counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter text-center mt-40">
                        <span><span class="counter">10</span> +</span>
                        <p>School Bus</p>
                    </div> <!-- singel counter -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
    
    <!--====== COUNTER PART ENDS ======-->
    
    <!--====== APPLY PART ENDS ======-->
   
    <!--====== COURSE PART START ======-->
    
    <section id="course-part" class="pt-115 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-45">
                        <h5 style="font-size: 32px;">Activity & Results</h5>
                        
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row course-slied mt-30">
               
               
            
             
               
                
                <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="https://i.ibb.co/7SbS3V6/IMG-20211211-WA0011-1.jpg" alt="Course">
                            </div>
                         
                        </div>
                        <div class="cont">
                            <ul>
                     
                            </ul>
                            
                            <a href=""><h4>ATL Lab Activity</h4></a>
                            <div class="course-teacher">
                                <div class="thum">
                                   
                                </div>
                                <div class="name">
                                   
                                </div>
                                <div class="admin">
                                    <ul>
                                      
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- singel course -->
                </div>
                <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="" alt="Course">
                            </div>
                            <div class="price">
                             
                            </div>
                        </div>
                        <div class="cont">
                            <ul>
                               
                            </ul>
                           
                            <a href=""><h4>Saras Ideathon</h4></a>
                            <div class="course-teacher">
                                <div class="thum">
                                   
                                </div>
                                <div class="name">
                                  
                                </div>
                                <div class="admin">
                                    <ul>
                                      
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- singel course -->
                </div>
                <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="" alt="Course">
                            </div>
                            <div class="price">
                                
                            </div>
                        </div>
                        <div class="cont">
                            <ul>
                               
                            </ul>
                            
                            <a href=""><h4>Sport competition</h4></a>
                            <div class="course-teacher">
                                <div class="thum">
                                    
                                </div>
                                <div class="name">
                                    
                                </div>
                                <div class="admin">
                                    <ul>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- singel course -->
                </div>
                <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="" alt="Course">
                            </div>
                            <div class="price">
                                
                            </div>
                        </div>
                        <div class="cont">
                            <ul>
                               
                            </ul>
                            
                            <a href=""><h4>Art competition</h4></a>
                            <div class="course-teacher">
                                <div class="thum">
                                    
                                </div>
                                <div class="name">
                                    
                                </div>
                                <div class="admin">
                                    <ul>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- singel course -->
                </div>
                <!-- <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="images/course/cu-4.jpg" alt="Course">
                            </div>
                            <div class="price">
                                <span>Free</span>
                            </div>
                        </div>
                        <div class="cont">
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>(20 Reviws)</span>
                            <a href="courses-singel.html"><h4>Learn basis javascirpt from start for beginner</h4></a>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="#"><img src="images/course/teacher/t-4.jpg" alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="#"><h6>Mark anthem</h6></a>
                                </div>
                                <div class="admin">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user"></i><span>31</span></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- singel course -->
                <!-- </div>
                <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="images/course/cu-5.jpg" alt="Course">
                            </div>
                            <div class="price">
                                <span>Free</span>
                            </div>
                        </div>
                        <div class="cont">
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>(20 Reviws)</span>
                            <a href="courses-singel.html"><h4>Learn basis javascirpt from start for beginner</h4></a>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="#"><img src="images/course/teacher/t-5.jpg" alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="#"><h6>Mark anthem</h6></a>
                                </div>
                                <div class="admin">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user"></i><span>31</span></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div> -->
            </div> <!-- course slied -->
        </div> <!-- container -->
    </section>
    
    <!--====== COURSE PART ENDS ======-->
  
    <!--====== TEASTIMONIAL PART START ======-->
    
    <section id="testimonial" class="bg_cover pt-115 pb-120" data-overlay="8" style="background-image: url(images/slider/banner-3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-40">
                        <h5>Testimonial</h5>
                        <h2>What they say</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row testimonial-slied mt-40">
                <div class="col-lg-6">
                    <div class="singel-testimonial">
                        <div class="testimonial-thum">
                            <img src="https://i.ibb.co/68RNcf5/Untitled-design-20.png" alt="Testimonial" style="height:90px; width:90px;">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p>AMPS provide best environment for innovation </p>
                            <h6>Taniya Singh</h6>
                            <span>Happy Student</span>
                        </div>
                    </div> <!-- singel testimonial -->
                </div>
                <div class="col-lg-6">
                    <div class="singel-testimonial">
                        <div class="testimonial-thum">
                            <img src="https://i.ibb.co/WyH863Y/Untitled-design-22.png" alt="Testimonial"  style="height:90px; width:90px;">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p>Good education</p>
                            <h6>Yashraj</h6>
                            <span>Happy Student</span>
                        </div>
                    </div> <!-- singel testimonial -->
                </div>
                <div class="col-lg-6"></div>
                <div class="singel-testimonial">
                    <div class="testimonial-thum">
                        <img src="images/testimonial/t4.png" alt="Testimonial">
                        <div class="quote">
                            <i class="fa fa-quote-right"></i>
                        </div>
                    </div>
                    <div class="testimonial-cont">
                        <p>AMPS provide great study material. </p>
                        <h6>Somya</h6>
                        <span>Happy Student</span>
                    </div>
                </div>
                <div class="col-lg-6"></div>
                <div class="singel-testimonial">
                    <div class="testimonial-thum">
                        <img src="images/testimonial/t4.png" alt="Testimonial">
                        <div class="quote">
                            <i class="fa fa-quote-right"></i>
                        </div>
                    </div>
                    <div class="testimonial-cont">
                        <p>AMPS provide good teacher. </p>
                        <h6>Harshit</h6>
                        <span>Happy Student</span>
                    </div>
                </div>
                </div> <!-- singel testimonial -->
            </div> <!-- testimonial slied -->
        </div> <!-- container -->
    </section>
    
    <!--====== TEASTIMONIAL PART ENDS ======-->
    <!--====== NEWS PART ENDS ======-->
   
    <!--====== PATNAR LOGO PART START ======-->
    
    <!-- <div id="patnar-logo" class="pt-40 pb-80 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-45">
                        <h5 style="font-size: 32px;">Our Gallery</h5>
                        
                    </div> 
                </div>
            </div>
            <div class="row patnar-slied">
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="https://i.ibb.co/RBqjv4D/s4.jpg" style="height: 25vh;" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="https://i.ibb.co/N9ybR3H/s2.jpg" style="height: 25vh;" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="https://i.ibb.co/ZfqS6Mf/IMG20211211125353.jpg" style="height: 25vh;" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="https://i.ibb.co/nfry9XF/s1.jpg" style="height: 25vh;" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="https://i.ibb.co/wZt2KrD/IMG20211211133058.jpg" style="height: 25vh;" alt="Logo">
                    </div>
                </div>
               
            </div> 
        </div>
    </div>  -->
    
    <!--====== PATNAR LOGO PART ENDS ======-->
   
    <!--====== FOOTER PART START ======-->
    
    <footer id="footer-part">
        <div class="footer-top pt-40 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-about mt-40">
                            <div class="logo">
                                <a href="index.php"><img src="images/logo1.png" alt="Logo"></a>
                            </div>
                           
                            <ul class="mt-20">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                               
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div> <!-- footer about -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-link mt-40">
                            <div class="footer-title pb-25">
                                <h6>AMPS</h6>
                            </div>
                            <ul>
                                <li><a href="index.php"><i class="fa fa-angle-right"></i>Home</a></li>
                                <li><a href="about.html"><i class="fa fa-angle-right"></i>About us</a></li>
                                <li><a href="academics.html"><i class="fa fa-angle-right"></i>Academics</a></li>
                                <li><a href="atl.html"><i class="fa fa-angle-right"></i>Facilities</a></li>
                                <li><a href="schoolpolicy.html"><i class="fa fa-angle-right"></i>Rules</a></li>
                            </ul>
                            <ul>
                                <li><a href="photos.html"><i class="fa fa-angle-right"></i>Gallery</a></li>
                               
                                <li><a href="contact.html"><i class="fa fa-angle-right"></i>Contact</a></li>
                                <li><a href="admin.php"><i class="fa fa-angle-right"></i>Admin</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                   
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-address mt-40">
                            <div class="footer-title pb-25">
                                <h6>Contact Us</h6>
                            </div>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="cont">
                                        <p>Rajpur Chajpur Khandla Bhudana Muzaffarnagar U.P.1</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="cont">
                                        <p>+91 8923078672</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="cont">
                                        <p>aartimemorial@yahoo.com</p>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- footer address -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer top -->
        
      
    </footer>
    
    <!--====== FOOTER PART ENDS ======-->
   
    <!--====== BACK TO TP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
    <!--====== BACK TO TP PART ENDS ======-->
   
    
    
    
    
    
    
    
    <!--====== jquery js ======-->
    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="js/bootstrap.min.js"></script>
    
    <!--====== Slick js ======-->
    <script src="js/slick.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="js/jquery.magnific-popup.min.js"></script>
    
    <!--====== Counter Up js ======-->
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    
    <!--====== Nice Select js ======-->
    <script src="js/jquery.nice-select.min.js"></script>
    
    <!--====== Nice Number js ======-->
    <script src="js/jquery.nice-number.min.js"></script>
    
    <!--====== Count Down js ======-->
    <script src="js/jquery.countdown.min.js"></script>
    
    <!--====== Validator js ======-->
    <script src="js/validator.min.js"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="js/ajax-contact.js"></script>
    
    <!--====== Main js ======-->
    <script src="js/main.js"></script>
    
    <!--====== Map js ======-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
    <script src="js/map-script.js"></script>

</body>
</html>

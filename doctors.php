 <?php 
 include "includes/header.php";
 include 'admin/admin_php/doctor.php';
 ?> 
 <html>
<title>Clinical Services | Doctor Page</title>


<!-- Stylesheets -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/bootstrap-margin-padding.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link href="vendor/jquery-ui/jquery-ui.css" rel="stylesheet">
<link href="vendor/time-picker/jquery.timepicker.css" rel="stylesheet">



    <!-- Main Header -->
    <!--End Main Header -->
    
    
    <!--Page Title-->
    <section class="page-title"  data-bg-img="images/background/page-title-1.jpg ">
        <div class="auto-container">
            <h1>Doctors</h1>
            
            <ul class="bread-crumb">
            	<li><a href="index.php">Home</a></li>
                <li><a href="#">Doctors</a></li>
            </ul>
            
        </div>
        
        <!--Go Down Button-->
        <div class="go-down">
            <div class="curve scroll-to-target" data-target="#team-section"><span class="icon fa fa-arrow-down"></span></div>
        </div>
        
    </section>

    
    <!--Team Section-->
    <section id="team-section" class="team-section">
        <div class="auto-container">
            <div class="sec-title">
                <h3>MEET OUR EXPERIENCED DOCTOR</h3>
                <h2>WE ARE EXPERTS IN OUR FIELD</h2>
                <div class="line"></div>
            </div>
            <div class="row clearfix">
                <?php

                if (mysqli_num_rows($getDoctorValueList) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($getDoctorValueList)) {
                ?>
                <!--Column-->
                <div class="col-md-6 col-sm-6 col-xs-12 column">
                    <article class="row clearfix">
                        <figure class="col-md-6 col-sm-6 col-xs-12 image"><a href="#"><img src="<?php echo 'admin/uploads/doctor_images/'.$row["doctor_image"]; ?>" alt="<?php echo $row["doctor_name"]; ?>"></a></figure>
                        <div class="col-md-6 col-sm-6 col-xs-12 content">
                            <div class="title-box">
                                <h4><?php echo $row["doctor_name"]; ?></h4>
                                <p><?php echo $row["department_name"]; ?> &amp; Surgeon</p>
                            </div>
                            <div class="text">
                                <p>
                                    <?php echo ucwords(substr($row["description"],0,200)); ?>
                                </p>
                            </div>
                            <div class="more-link">
                               
                                <a href="  <?php echo 'doctor_details.php?id='.$row["id"]; ?>" class="read-more">
                                    <span class="fa fa-caret-right"></span>
                                    More Info
                                </a>
                            </div>
                            
                        </div>
                    </article>
                </div>
                    <?php
                }
                }
                else
                {
                    echo "0 results";
                }
                ?>
                
                <!--Column-->

                
            </div>
        </div>
    </section>
    
    
    <!--Fact Counter-->

<div class="scroll-to-top scroll-to-target" data-target="#main-header"><span class="fa fa-arrow-up"></span></div>
    <!--Main Footer-->




<!--Scroll to top-->

<!--[if lt IE 9]><script src=""></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-parallax.js"></script>
<script src="js/bxslider.js"></script>
<script src="js/owl.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/wow.js"></script>
<script src="js/js-collection.js"></script>
<script src="js/script.js"></script>


<?php include "includes/footer.php" ?>
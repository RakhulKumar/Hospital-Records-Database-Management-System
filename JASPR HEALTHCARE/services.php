 <?php include "includes/header.php";
 include "admin/admin_php/services.php";
 ?> 
 <html>
<title>Clinical Services | Services</title>



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
    <section class="page-title" data-bg-img="images/background/page-title-1.jpg ">
        <div class="auto-container">
            <h1>Our Services</h1>
            
            <ul class="bread-crumb">
            	<li><a href="index.php">Home</a></li>
                <li><a href="#">Services</a></li>
            </ul>
            
        </div>
        
        <!--Go Down Button-->
        <div class="go-down">
            <div class="curve scroll-to-target" data-target="#department-section"><span class="icon fa fa-arrow-down"></span></div>
        </div>
        
    </section>

    
    <!--Start Our Department Areas-->
    <section id="department-section" class="pt-60" data-bg-color="#f1f1f1">
        <div class="auto-container pb-35">
            <div class="sec-title">
                <h3>WE CARE OUR DEPARTMENT SUPPORT</h3>
                <h2>OUR OUTSTANDING DEPARTMENT</h2>
                <div class="line"></div>
            </div>
            <div class="sec-content">
                <div class="row">
                    <?php
                    if (mysqli_num_rows($getServiceValueList) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($getServiceValueList)) {
                    ?>

                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                            <div class="department">
                                <div class="thumb">
                                    <img class="img-responsive img-fullwidth" src="<?php echo 'admin/uploads/service_images/'.$row["service_image"]; ?>"
                                         alt="<?php echo $row["service_name"]; ?>">
                                </div>
                                <div class="department-details">
                                    <div class="round-style"></div>
                                    <i class="icon icon-stethoscope10"></i>
                                    <h4 class="title"><?php echo ucwords(substr($row["service_name"],0,15)); ?></h4>
                                    <p class="details pt-5"><?php echo ucfirst(substr($row["description"],0,225)); ?></p>
                                    <a href="<?php echo 'service_details.php?id='.$row["id"]; ?>" class="thm-btn btn-xs mr-5"><i class="fa fa-angle-double-right"></i> Read More</a>
                                    <a class="thm-btn inverse btn-xs" href="#"><i class="fa fa-heart"></i> Support</a>
                                </div>
                            </div>
                        </div>

                        <?php
                    }
                    }
                    else
                    {
                        echo "0 results";
                    }
                    ?>

                   
                </div>              
            </div>
        </div>
    </section>
    <!--Main Footer-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="#main-header"><span class="fa fa-arrow-up"></span></div>



    !--[if lt IE 9]><script src=""></script><![endif]-->
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
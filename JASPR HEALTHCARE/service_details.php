 <?php include "includes/header.php" ?> <html>
<title>Clinical Services | Service Detail Page</title>


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




    
    <!--Page Title-->
    <section class="page-title"  data-bg-img="images/background/page-title-1.jpg ">
        <div class="auto-container">
            <h1>Service Details</h1>
            
            <ul class="bread-crumb">
            	<li><a href="index.php">Home</a></li>
                <li><a href="#">Service</a></li>
            </ul>
            
        </div>
        
        <!--Go Down Button-->
        <div class="go-down">
            <div class="curve scroll-to-target" data-target="#sidebar-section"><span class="icon fa fa-arrow-down"></span></div>
        </div>
        
    </section>

    
    <!--Desc Box-->
    <div class="desc-box">
        <div class="auto-container">
            <div class="sec-title no-underline">
                <h3>WE CARE ABOUT PATIENT</h3>
                <h2>OUR OUTSTANDING DEPARTMENT</h2>
                <p>Pellentesque semper quis neque dictum hendrerit. Sed nulla ipsum, porttitor pharetra tortor in, <br>consequat imperdiet nisi. Phasellus at quam tristique, cursus tellus vitae, convallis neque. </p>
            </div>
        </div>
    </div>

    
    <!--Sidebar Section-->
    <div class="sidebar-section" id="sidebar-section">
    	
        <div class="auto-container">
        	<div class="row clearfix">
                
                <!--Content Side-->
                <?php
                if(isset($_GET['id']))
                {
                $id = $_GET['id'];
                $conn =new mysqli('localhost', 'root', '', 'clinical_service');
                $view =  "SELECT * FROM services WHERE id = $id";
                $viewService = mysqli_query($conn,$view);

                // output data of each row
                while ($row = mysqli_fetch_assoc($viewService))
                {
                ?>
                <div class="col-md-7 col-sm-6 col-xs-12 content-side">
                
                    <section class="service-details">
                        <figure class="full-image"><a href="#"><img src="<?php echo 'admin/uploads/service_images/'.$row['service_image']; ?>"  alt="<?php echo  ucwords($row['service_name']); ?>"></a></figure>
                    </section>
                    
                </div>

                <!--Sidebar-->
                <div class="col-md-5 col-sm-6 col-xs-12 content-side">
                    <aside class="sidebar service-details">

                        <div class="content-outer" style="padding-bottom: 30px;">
                            <h2><?php echo  ucwords($row['service_name']); ?></h2>
                            <p>
                                <?php echo  ucfirst(substr($row['description'],0,810)); ?>
                            </p>
                            <br>

                             <!--<div class="row clearfix">
                                 <div class="col-md-12 col-sm-12 col-xs-12">
                                     <h3>Our Mission &amp; Vision</h3>
                                     <p>Nullam auctor rutrum nibh sit amet elementum. In eu  iaculis ornare nec sed nibh. Sed at neque non velit auctor malesuada. Vestibulum fringilla nisl ex, id gravida metus ullamcorper sed. Phasellus vestibulum egestas magna, et tincidunt nunc sollicitudin quis. </p>
                                     <p>Vivamus  Pellentesque fames ac turpis egestassociosqu tincidunt magna.</p>
                                 </div>


                             </div>-->
                        </div>
                    </aside>
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
                <!--Services Section-->
               <!-- <section class="services-section style-two">
                    <div class="container-fluid">
                        <h2 class="main-title">Other Department that you might want to know</h2>
                            
                        <div class="row clearfix">
                            

                            <div class="col-md-3 col-sm-6 col-xs-12 column">
                                <div class="department">
                                    <div class="thumb">
                                        <img class="img-responsive img-fullwidth" src="images/resource/featured-image-1.jpg" > alt="">
                                    </div>
                                    <div class="department-details">
                                        <div class="round-style"></div>
                                        <i class="icon icon-hospital35"></i>
                                        <h4 class="title">Lab Test Department.</h4>
                                        <p class="details pt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quia eligendi libero, laborum quaerat hic. Nesciunt, mollitia, rerum. Ex obcaecati ut consectetur ipsum a ipsam repellendus quas earum odit....</p>
                                         <a href="#donation-form" class="thm-btn btn-xs mr-5"><i class="fa fa-angle-double-right"></i> Read More</a>
                                         <a class="thm-btn inverse btn-xs" href="#"><i class="fa fa-heart"></i> Support</a>
                                    </div>
                                </div>
                            </div>
                            

                            <div class="col-md-3 col-sm-6 col-xs-12 column">
                                <div class="department">
                                    <div class="thumb">
                                        <img class="img-responsive img-fullwidth" src="images/resource/featured-image-5.jpg" > alt="">
                                    </div>
                                    <div class="department-details">
                                        <div class="round-style"></div>
                                        <i class="icon icon-heart36"></i>
                                        <h4 class="title">Cardiology Department.</h4>
                                        <p class="details pt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quia eligendi libero, laborum quaerat hic. Nesciunt, mollitia, rerum. Ex obcaecati ut consectetur ipsum a ipsam repellendus quas earum odit....</p>
                                         <a href="#donation-form" class="thm-btn btn-xs mr-5"><i class="fa fa-angle-double-right"></i> Read More</a>
                                         <a class="thm-btn inverse btn-xs" href="#"><i class="fa fa-heart"></i> Support</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12 column">
                                <div class="department">
                                    <div class="thumb">
                                        <img class="img-responsive img-fullwidth" src="images/resource/featured-image-6.jpg" > alt="">
                                    </div>
                                    <div class="department-details">
                                        <div class="round-style"></div>
                                        <i class="icon icon-brain9"></i>
                                        <h4 class="title">Neurology Department.</h4>
                                        <p class="details pt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quia eligendi libero, laborum quaerat hic. Nesciunt, mollitia, rerum. Ex obcaecati ut consectetur ipsum a ipsam repellendus quas earum odit....</p>
                                         <a href="#donation-form" class="thm-btn btn-xs mr-5"><i class="fa fa-angle-double-right"></i> Read More</a>
                                         <a class="thm-btn inverse btn-xs" href="#"><i class="fa fa-heart"></i> Support</a>
                                    </div>
                                </div>
                            </div>
                            

                            <div class="col-md-3 col-sm-6 col-xs-12 column">
                                
                                <div class="department">
                                    <div class="thumb">
                                        <img class="img-responsive img-fullwidth" src="images/resource/featured-image-10.jpg" >jpg alt="">
                                    </div>
                                    <div class="department-details">
                                        <div class="round-style"></div>
                                        <i class="icon icon-ambulance9"></i>
                                        <h4 class="title">Emergency Department.</h4>
                                        <p class="details pt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quia eligendi libero, laborum quaerat hic. Nesciunt, mollitia, rerum. Ex obcaecati ut consectetur ipsum a ipsam repellendus quas earum odit....</p>
                                         <a href="#donation-form" class="thm-btn btn-xs mr-5"><i class="fa fa-angle-double-right"></i> Read More</a>
                                         <a class="thm-btn inverse btn-xs" href="#"><i class="fa fa-heart"></i> Support</a>
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                        
                    </div>
                     
                </section>-->
    <!--Main Footer-->
    <footer class="main-footer">
        <!--Footer Bottom-->
    	<div class="footer-bottom">
            <div class="auto-container">
                <!--Copyright-->
                <div class="copyright">2016 &copy; ClinicalServices Medical &amp; Health Service. Designed with &ensp;<span class="fa fa-heart"></span>&ensp; by Rashid.</div>
                <div class="social-links">
                    <a href="#" class="icon fa fa-facebook-f"></a>
                    <a href="#" class="icon fa fa-twitter"></a>
                    <a href="#" class="icon fa fa-pinterest"></a>
                    <a href="#" class="icon fa fa-youtube-play"></a>
                    <a href="#" class="icon fa fa-envelope"></a>
                </div>
            </div>
        </div>
        
    </footer>

<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="#main-header"><span class="fa fa-arrow-up"></span></div>



<!--[if lt IE 9]><script src=""></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<script src="js/jquery.js" ></script> 
<script src="js/bootstrap.min.js" ></script>
<script src="js/jquery-parallax.js" ></script>
<script src="js/bxslider.js" ></script>
<script src="js/owl.js" ></script>
<script src="js/jquery.fancybox.pack.js" ></script>
<script src="js/wow.js" ></script>
<script src="js/js-collection.js" ></script>
<script src="js/script.js" ></script>


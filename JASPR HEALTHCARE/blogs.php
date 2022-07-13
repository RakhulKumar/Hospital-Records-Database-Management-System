 <?php
 include "includes/header.php";
 include "admin/admin_php/review.php";
 ?> <html>
<title>Clinical Services | Blogs Page</title>


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
            <h1>Blog</h1>
            
            <ul class="bread-crumb">
            	<li><a href="index.php">Home</a></li>
                <li><a href="#">Blog</a></li>
            </ul>
            
        </div>
        
        <!--Go Down Button-->
        <div class="go-down">
            <div class="curve scroll-to-target" data-target="#sidebar-section"><span class="icon fa fa-arrow-down"></span></div>
        </div>
        
    </section>
    
    <!--Sidebar Section-->
    <div class="sidebar-section no-bg" id="sidebar-section">
    	
        <div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Content Side-->
                <div class="col-md-12 col-sm-12 col-xs-12 content-side">
    				<!--Services Section-->
                    <section class="blog-section">
                        <?php
                        $getBlogDetailList =  "SELECT * FROM  blog WHERE status = 'enable' ";
                        $blogDetailList = mysqli_query($conn, $getBlogDetailList);
                        if (mysqli_num_rows($blogDetailList) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($blogDetailList)) {
                        ?>
                        <!--Post-->
                        <article class="blog-post blog-details">
                        	<div class="image">
                                <a href="blogs.php">
                                    <img src="<?php echo 'admin/uploads/blog_images/'.$row['blog_image']; ?>" alt="">
                                </a>
                            </div>
                            <div class="post-title"><h2><?php echo ucwords($row['title']); ?></h2></div>
                            <div class="post-info"><a href="#">
                                    <span class="fa fa-user"></span>
                                    <?php echo ucwords($row['posted_by']); ?>
                                </a> &ensp;&ensp;
                                <a href="#"><span class="fa fa-clock-o"></span>
                                    <?php echo date('F d, Y',strtotime($row['created_at'])); ?>
                                    
                                </a>
                            </div>
                            <div class="post-data">
                               <?php echo ucfirst($row['description']); ?>

                                
                                <br>
                                
                            </div>
                        </article>
                            <?php
                        }
                        }
                        else
                        {
                            echo "0 results";
                        }
                        ?>
                        
                        <!--About Author-->
                      
                        
                        
                        <!--Comments Area-->
                        <div class="comments-area">
                            <div class="sec-title style-three"><h2>There are <?php echo mysqli_num_rows($reviews); ?> comments on this post
                                </h2>
                                <div class="line"></div>
                            </div>
                            <div class="comment-box">
                                <?php
                                if (mysqli_num_rows($reviews) > 0) {
                                // output data of each row
                                while($row = mysqli_fetch_assoc($reviews)) {
                                ?>
                                <div class="comment reply-comment wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="author-thumb">
                                        <img class="img-circle" src="images/resource/author-thumb-2.png" alt="">
                                    </div>
                                    <div class="comment-info">
                                        <strong> <?php echo ucwords($row['name']); ?></strong>
                                        <br>
                                        <em><?php echo date('F d, Y',strtotime($row['created_at'])); ?> at <?php echo  date('H:i a',strtotime($row['created_at'])); ?> </em>
                                    </div>
                                    <div class="text">
                                        <?php echo ucfirst($row['message']); ?>
                                    </div>
                                   <!-- <a href="#" class="theme-btn reply-btn">
                                        <span class="flaticon-contract"></span>
                                        Reply
                                    </a>-->
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
                        
                        
                        <!-- Comment Form -->
                        <div class="comment-form wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="col-md-7 col-sm-6 col-xs-12 content-side">
                                <div class="sec-title style-three">
                                    <h2 class="text-left">Post a <strong>comment</strong></h2>
                                    <div class="line"></div>
                                </div>

                                <!--Comment Form-->
                                <form method="post" action="admin/admin_php/review.php" name="addReviews">
                                    <div class="row clearfix">

                                        <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group-inner">
                                                <div class="icon-box"><label for="your-name"><span class="icon fa fa-user"></span></label></div>
                                                <div class="field-outer">
                                                    <input type="text" name="username" id="your-name" placeholder="Your Name" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group-inner">
                                                <div class="icon-box"><label for="your-email"><span class="icon fa fa-envelope"></span></label></div>
                                                <div class="field-outer">
                                                    <input type="email" name="email" id="your-email" placeholder="Email" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group-inner">
                                                <textarea name="message" placeholder="Your Message" required></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <?php
                                            while($row = mysqli_fetch_assoc($blogDetailList)) {
                                                $blog_id = $row['id'];
                                            }
                                            ?>
                                            <input type="hidden" value="<?php echo $blog_id; ?>" name="blog_id">
                                            <button class="theme-btn normal-btn" type="submit" name="addReviews">Post Comment</button>
                                        </div>
                                    </div>
                                    <?php
                                    if(isset($_GET['success']))
                                    {
                                        ?>
                                        <div class="alert-success" style="height:34px;">
                                            <p class="error_message" style="text-align: center;">
                                                <?php echo 'Your review is added successfully !'; ?>
                                            </p>
                                        </div>

                                        <?php
                                    }
                                    elseif(isset($_GET['error']))
                                    {
                                        ?>
                                        <div class="alert-danger" style="height:34px;">
                                            <p class="error_message" style="text-align: center;">
                                                <?php echo 'There is an error in adding your review !'; ?>
                                            </p>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </form>
                            </div>

                            <div class="col-md-5 col-sm-6 col-xs-12 pull-right" >
                                <img alt="" src="images/resource/image-forlift2.png"
                                     class="img-responsive img-fullwidth">
                            </div>
                        </div>
                                                         
                    </section>
                </div>

                


                
    		</div>
        </div>
    </div>

    <div class="scroll-to-top scroll-to-target" data-target="#main-header"><span class="fa fa-arrow-up"></span></div>
    <!--Main Footer-->


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
<script src="admin/js/validation.js" type="text/javascript"></script>


<?php include "includes/footer.php" ?>
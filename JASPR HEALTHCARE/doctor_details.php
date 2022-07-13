 <?php include "includes/header.php" ?> <html>
<title>Clinical Services | Doctors Detail Page</title>


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

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    function getTimes(val){
//         alert("gets");
        $.ajax({
            type:"POST",
            url:"admin/admin_php/get_times.php",
            data:'doctor_id='+val,
            success:function(data){
                $("#form_appontment_time").html(data);
            }
        });
    }

</script>

 	
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
            <div class="curve scroll-to-target" data-target="#doctor-section"><span class="icon fa fa-arrow-down"></span></div>
        </div>
        
    </section>
      
    <!-- Section: Doctor Details -->
    <section id="doctor-section" class="doctor-details get-quote">
      <div class="container pt-60">
        <div class="section-content">
          <div class="row">
              <?php
              if(isset($_GET['id']))
              {
              $id = $_GET['id'];
              $conn =new mysqli('localhost', 'root', '', 'clinical_service');
              $view =  "SELECT * FROM doctors WHERE id = $id";
              $viewDoctors = mysqli_query($conn,$view);

              // output data of each row
              while ($row = mysqli_fetch_assoc($viewDoctors))
              {
              ?>
            <div class="col-xs-12 col-sm-8 col-md-8 pl-60 pl-sm-15">
              <div>
                <h3><?php echo ucwords($row['doctor_name']); ?></h3>
                <h5 class="text-thm"><?php echo ucwords($row['education']); ?></h5>
                <p>
                    <?php echo ucfirst($row['description']); ?>
                </p>
              </div>
              <div class="mt-30">
                <dl class="dl-horizontal doctor-info">
                  <dt>Expertise</dt>
                  <dd>
                    <ul class="list asterisk m-0">
                      <li class="mt-0"><?php echo ucwords($row['department_name']); ?></li>
                      <!--<li>Heart Specialist</li>-->
                    </ul>
                  </dd>
                  
                  <dt>Education</dt>
                  <dd>
                    <ul class="list asterisk m-0">
                      <li class="mt-0"><?php echo ucwords($row['education']); ?></li>
                     <!-- <li>Medical Orientation Program, St. Louis University (St. Louis, Missouri 1996)</li>-->
                    </ul>
                  </dd>
                  
                  <dt>Experience</dt>
                  <dd>
                    <ul class="list asterisk m-0">
                        <li><?php echo $row['experience']; ?> years of Experience in Medicine</li>
                    </ul>
                  </dd>
                  
                  <dt>Profession</dt>
                  <dd>
                    <ul class="list asterisk m-0">
                      <li class="mt-0"><?php echo ucwords($row['profession']); ?></li>
                     <!-- <li>School of Medicine and Graduate School of Biomedical Sciences University </li>
                      <li>of Texas Health Science Center at San Antonio</li>-->
                    </ul>
                  </dd>
                  
                  <dt>Address</dt>
                    <dd> <i class="fa fa-map-marker text-thm"></i>&nbsp; &nbsp; <?php echo ucfirst($row['address']); ?></dd>
                  
                  <dt>Phone</dt>
                    <dd><i class="fa fa-phone text-thm"></i>&nbsp; <?php echo $row['mobile']; ?></dd>
                  
                  <dt>Skype</dt>
                    <dd><i class="fa fa-skype text-thm"></i>&nbsp; <?php echo $row['skype']; ?> </dd>
                  
                  <dt>Email</dt>
                    <dd><i class="fa fa-envelope-o text-thm"></i>&nbsp; <?php echo $row['email']; ?> </dd>
                  
                 <!-- <dt>Website</dt>
                    <dd><i class="fa fa-server text-thm"></i>&nbsp; www.yourdomain.com </dd>-->
                  
                </dl>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <h5 class="text-thm bottom-border mb-30 mt-100">Make an Appoinment</h5>
                    <div class="form">
                        <form method="post" action="admin/admin_php/patient.php">
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input type="text" name="fname" value="" placeholder="First Name *" required>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input type="text" name="lname" value="" placeholder="Last Name *" required>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input type="email" name="email" value="" placeholder="Email *" required>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input type="password" name="password" value="" placeholder="Password *" required>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input type="text" name="phone" value="" placeholder="Phone *" required>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input type="text" name="address" value="" placeholder="Address *" required>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input class="datepicker" type="text" id="date" name="date" value="" placeholder="Date *" required>
                                </div>
<!--                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">-->
<!--                                    <input class="timepicker" type="text" name="time" value="" placeholder="Time *" required>-->
<!--                                </div>-->

                                <div class="col-sm-6">
                                    <div class="form-group time mb-20">

                                        <select data-height="45px"
                                                class="table-group-action-input form-control input-medium"
                                                id="form_appontment_time" type="text" name="form_appontment_time">
                                            <option value="">--  Select Time  --</option>
                                            <?php
                                                // output data of each row
                                              $sql="SELECT * FROM times WHERE doctor_id=$id AND status='Available'";
                                              $result=mysqli_query($conn,$sql);
                                                while($row1 = mysqli_fetch_assoc($result)) {
                                                    ?>

                                                    <option value="<?php echo $row1["working_time"]; ?>">
                                                        <?php echo $row1["working_time"]; ?>
                                                    </option>

                                                    <?php
                                                }
                                                    ?>
                                        </select>

                                        <!--                                          <input data-height="45px" name="form_appontment_time" class="form-control bdrs-0 required timepicker"-->
                                        <!--                                                 type="text" placeholder="Time" aria-required="true">-->
                                    </div>
                                </div>
                                
                                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                    <textarea name="message" placeholder="Describe Your Needs to Us" required></textarea>
                                </div>
                                
                                <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 form-group text-center">
                                   <!-- <input type="hidden" value="<?php /*echo $row['id']; */?>" name="doctor_id">
                                    <input type="hidden" value="<?php /*echo $row['department_name']; */?>" name="doctor_id">-->
                                    <input type="hidden" value="<?php echo $row['id']; ?>" name="doctor_id">
                                    <input type="hidden" value="<?php echo $row['department_name']; ?>" name="department_name">
                                    <button type="submit" name="addAppointment" class="theme-btn normal-btn">SUBMIT</button>
                                </div>
                            </div>
                            <?php
                            if(isset($_GET['success']))
                            {
                                ?>
                                <div class="alert-success" style="height:34px;">
                                    <p class="error_message" style="text-align: center;">
                                        <?php echo 'Your record is added successfully !'; ?>
                                    </p>
                                </div>

                                <?php
                            }
                            elseif(isset($_GET['error']))
                            {
                                ?>
                                <div class="alert-danger" style="height:34px;">
                                    <p class="error_message" style="text-align: center;">
                                        <?php echo 'There is an error in adding your record !'; ?>
                                    </p>
                                </div>
                                <?php
                            }
                            elseif(isset($_GET['alert']))
                            {
                                ?>
                                <div class="alert-danger" style="height:34px;">
                                    <p class="error_message" style="text-align: center;">
                                        <?php echo 'That time not available choose other timings !'; ?></p>
                                </div>
                                <?php
                            }elseif(isset($_GET['login']))
                            {
                                ?>
                                <div class="alert-danger" style="height:34px;">
                                    <p class="error_message" style="text-align: center;">
                                        <?php echo 'Already have an account please login and make your Appointment !'; ?></p>
                                </div>
                                <?php
                            }
                            ?>
                        </form>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-sx-12 col-sm-4 col-md-4 mb-30">
              <div class="doctor-thumb" style="padding-left: 43px;">
                <img class="img-responsive"
                     src="<?php echo 'admin/uploads/doctor_images/'.$row['doctor_image']; ?>" alt="<?php echo ucwords($row['doctor_name']); ?>">
              </div>
              <ul class="social-icons icon-thm mt-15 mb-15 text-center">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram "></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
<!--              <div class="p-30 p-sm-10 text-center" style="border: 12px solid #dddddd;">-->
<!--                <h4 class="text-thm"><i class="fa fa-clock-o text-thm"></i> Schedule</h4>-->
<!--                <div class="opening-hourse text-left">-->
<!--                  <ul class="list-unstyled">-->
<!--                    <li class="clearfix"> <span> --><?php //echo ucwords($row['working_days']); ?><!--</span>-->
<!--                      <div class="value">--><?php //echo date('H:i ',strtotime($row['working_time'])); ?><!-- </div>-->
<!--                    </li> -->
<!--                  <!--  <li class="clearfix"> <span> Friday </span>-->
<!--                      <div class="value"> 10.00 - 21.00 </div>-->
<!--                    </li>-->
<!--                    <li class="clearfix"> <span> Saturday </span>-->
<!--                      <div class="value"> 10.30 - 18.00 </div>-->
<!--                    </li>-->
<!--                    <li class="clearfix"> <span> Sunday </span>-->
<!--                      <div class="value"> 10.30 - 17.00 </div>-->
<!--                    </li>-->
<!--                  </ul>-->
<!--                </div>-->
<!--               <!-- <a href="#" class="btn thm-btn mt-30 mt-sm-20 pl-sm-10 pr-sm-10">Appointment Request</a>-->
<!--              </div>-->
              <div class="mt-30 p-40" >
                <img alt="" src="images/resource/image-forlift2.png" class="img-responsive ">
             </div>
            </div>
                  <?php
              }
              }



              ?>
          </div>
        </div>
      </div>
    </section>
<div class="scroll-to-top scroll-to-target" data-target="#main-header"><span class="fa fa-arrow-up"></span></div>

<!--Main Footer-->



<!--End pagewrapper-->

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
<script src="admin/js/validation.js" type="text/javascript"></script>

<script>
    $(document).ready(function(){
        $("#date").datepicker({
            minDate:"0",
            maxDate: new Date(2017,12,10),
            beforeShowDay: function(date)
            {
                var day= date.getDay();
                if(day==0)
                {
                    return[false];
                }else
                    return[true];
            }

        });
    });

</script>

<?php include "includes/footer.php" ?>

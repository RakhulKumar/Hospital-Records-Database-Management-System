<html>
 <?php include "includes/header.php" ?>
 <?php
 include "admin/core_files/config.php";
 ?>
<title>Clinical Services | Appointment</title>


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

    <section class="page-title" data-bg-img="images/background/page-title-1.jpg " >
        <div class="auto-container">
            <h1>Appointment</h1>
            
            <ul class="bread-crumb">
              <li><a href="index.php">Home</a></li>
                <li><a href="#">Appointment</a></li>
            </ul>
            
        </div>
        
        <!--Go Down Button-->
        <div class="go-down">
            <div class="curve scroll-to-target" data-target="#about-section"><span class="icon fa fa-arrow-down"></span></div>
        </div>
        
    </section>
    
    
    <!--About Section-->
    <section class="about-section" id="about-section">
      <!--Desc Box-->
      <div class="desc-box">
        <div class="auto-container">
              <div class="sec-title no-underline">
                    <h3>CLINICAL HISTORY</h3>
                    <h2>EVERYTHING BEGAN IN A GARAGE</h2>
                    <p>Pellentesque semper quis neque dictum hendrerit. Sed nulla ipsum, porttitor pharetra tortor in, <br>consequat imperdiet nisi. Phasellus at quam tristique, cursus tellus vitae, convallis neque. </p>
                </div>
          </div>
        </div>  
       
        <!--Lower Content-->
        <div class="lower-content" data-bg-img="images/background/1.jpg">
          <div class="auto-container">
              <div class="content-box">
                  <div class="row clearfix">
                      
                        <div class="col-md-7">
                          <h4 class="text-theme-colored title-border mt-0">Make An appointment Now</h4>
                          <!-- <p class="mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro similique ipsa deleniti doloribus fuga dicta id voluptate, excepturi nostrum cupiditate</p> -->

                          <!-- Appointment Form Sart-->
                          <!-- id="appointment_form" -->
                          <form  name="appointment_form" class="form-transparent mt-30" method="post"
                                action="admin/admin_php/patient.php">
                            <div class="row">
                              <div class="col-sm-12">
                                <div class="form-group mb-20">
                                  <input data-height="45px" id="form_name" name="form_name" class="form-control bdrs-0" type="text"
                                         required="" placeholder="Full Name" aria-required="true">
                                </div>
                              </div>                  
                            </div>
                              <div class="row">
                                  <div class="col-sm-6">
                                      <div class="form-group mb-20">
                                          <input data-height="45px" id="form_phone" name="form_phone" class="form-control bdrs-0 required"
                                                 type="text" placeholder="Enter Phone" aria-required="true">
                                      </div>
                                  </div>
                                  <div class="col-sm-6">
                                      <div class="form-group time mb-20">
                                          <input data-height="45px" name="form_address" class="form-control bdrs-0 required "
                                                 type="text" placeholder="Address" aria-required="true">
                                      </div>
                                  </div>
                              </div>
                            <div class="row">
                              <div class="col-sm-6">
                                <div class="form-group mb-20">
                                  <input data-height="45px" id="form_email" name="form_email" class="form-control bdrs-0 required email"
                                         type="email" placeholder="Enter Email" aria-required="true">
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group mb-20">
                                  <input data-height="45px" id="form_password" name="form_password" class="form-control bdrs-0 required"
                                         type="password" placeholder="Enter Password" aria-required="true">
                                </div>
                              </div>
                                  
                              </div>
                            <div class="row">
                              <div class="col-sm-6">
                                <div class="form-group date mb-20">
                                  <input data-height="45px" id="date" name="form_appontment_date" class="form-control bdrs-0 required datepicker"
                                         type="text" placeholder="MM/DD/YY" aria-required="true">
                                </div>
                              </div>

                                <div class="col-sm-6">
                                    <div class="form-group time mb-20">
                                        <select data-height="45px"
                                                class="table-group-action-input form-control input-medium"
                                                id="doctor_name" onchange="getTimes(this.value);" name="doctor_name">
                                            <option value="">--  Select Doctor Name  --</option>
                                            <?php
//                                            include 'admin/admin_php/doctor.php';
//                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                              $sql="SELECT * FROM doctors";
                                              $result=mysqli_query($conn,$sql);
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    ?>

                                                    <option value="<?php echo $row["id"]; ?>">
                                                        <?php echo $row["doctor_name"]; ?>
                                                    </option>

                                                    <?php
                                                }
//                                            }

//                                            {
//                                                echo "0 results";
//                                            }
                                            ?>
                                        </select>
                                        <!-- <input data-height="45px" name="form_doctor_name" class="form-control bdrs-0 required "
                                                type="text" placeholder="Doctor Name" aria-required="true">-->
                                    </div>
                                </div>

                            </div>

                              <div class="row">
                                  <div class="col-sm-6">
                                      <div class="form-group date mb-20">
                                          <input data-height="45px" name="form_appontment_for" class="form-control bdrs-0 required "
                                                 type="text" placeholder="Appointment For" aria-required="true">
                                      </div>
                                  </div>
<!--                                  <div class="col-sm-6">-->
<!--                                      <div class="form-group time mb-20">-->
<!---->
<!--                                          <select class="form-control bdrs-0 required" name="form_appontment_time" type="text">-->
<!--                                              <option>---Select Time---</option>-->
<!--                                              <option>09.00 - 10.00</option>-->
<!--                                              <option>10.30 - 11.30</option>-->
<!--                                              <option>11.30 - 12.30</option>-->
<!--                                              <option>14.00 - 15.30</option>-->
<!--                                              <option>15.30 - 16.30</option>-->
<!--                                              <option>16.30 - 17.30</option>-->
<!--                                              <option>18.30 - 19.30</option>-->
<!--                                              <option>19.30 - 20.30</option>-->
<!--                                              <option>20.30 - 21.30</option>-->
<!--                                          </select>-->
<!--<!--                                          <input data-height="45px" name="form_appontment_time" class="form-control bdrs-0 required timepicker"-->
<!--<!--                                                 type="text" placeholder="Time" aria-required="true">-->
<!--                                      </div>-->
<!--                                  </div>-->
                                  <div class="col-sm-6">
                                      <div class="form-group time mb-20">
                                          <select data-height="45px"
                                                  class="table-group-action-input form-control input-medium"
                                                  id="form_appontment_time" type="text" name="form_appontment_time">
                                              <option value="">--  Select Time  --</option>
<!--                                              --><?php
//                                              include 'admin/admin_php/doctor.php';
//                                              if (mysqli_num_rows($res) > 0) {
//                                                  // output data of each row
//                                                  while($row = mysqli_fetch_assoc($res)) {
//                                                      ?>
<!---->
<!--                                                      <option value="--><?php //echo $row["working_time"]; ?><!--">-->
<!--                                                          --><?php //echo $row["working_time"]; ?>
<!--                                                      </option>-->
<!---->
<!--                                                      --><?php
//                                                  }
//                                              }
//                                              else
//                                              {
//                                                  echo "0 results";
//                                              }
//                                              ?>
                                          </select>
                                          <!-- <input data-height="45px" name="form_doctor_name" class="form-control bdrs-0 required "
                                                  type="text" placeholder="Doctor Name" aria-required="true">-->
                                      </div>
                                  </div>

                              </div>
                                                     <div class="col-sm-6">
                                    <div class="form-group time mb-20">
                                        <select data-height="45px"
                                                class="table-group-action-input form-control input-medium"
                                                id="Services" onchange="getTimes(this.value);" name=" ">
                                            <option value="">--  Select here  --</option>
                                            <option value="clinic">Clinical</option>-->
                                              <option value="scan">Scan Center</option>
                                              <option value="lab"> Lab</option>
                           
                                        </select>
                                        <!-- <input data-height="45px" name="form_doctor_name" class="form-control bdrs-0 required "
                                                type="text" placeholder="Doctor Name" aria-required="true">-->
                                    </div>
                                </div>

                            </div>
                            <div class="form-group mb-20">
                              <textarea id="form_message" name="form_message" class="form-control bdrs-0 required" data-height="120px" 
                                        placeholder="Enter Message" rows="5" aria-required="true"></textarea>
<!--                                <input type="hidden" name="enable" value="enable">-->
                            </div>
                            <div class="form-group mb-0 mt-20">
                              <input id="doctor_id" name="doctor_id"  type="hidden" value="<?php
                              while($row = mysqli_fetch_assoc($result)) {
                                  echo $row["id"];
                              }
                              ?>">
<!--                                <input id="appointment_time" name="appointment_time"  type="hidden" value="--><?php
//                                while($row1 = mysqli_fetch_assoc($result1)) {
//                                    echo $row1[""];
//                                }
//                                ?><!--">-->
                              <button type="submit" class="btn thm-btn btn-flat"
                                      data-loading-text="Please wait..." name="addPatient">Submit Now</button>
                            </div>

                          </form>
                            <br />
                            <?php
                            if(isset($_GET['success']))
                            {
                                ?>
                                <div class="alert-success" style="height:34px;">
                                    <p class="error_message" style="text-align: center;">
                                        <?php echo 'New Record added successfully !'; ?></p>
                                </div>

                                <?php
                            }
                            elseif(isset($_GET['error']))
                            {
                                ?>
                                <div class="alert-danger" style="height:34px;">
                                    <p class="error_message" style="text-align: center;">
                                        <?php echo 'There is an error in adding your record !'; ?></p>
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

                        </div>
                        <div class="col-md-5">
                          <img alt="" src="images/resource/image-forlift2.png" class="img-responsive img-fullwidth">
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
         
    </section>
    
    


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="#main-header"><span class="fa fa-arrow-up"></span></div>
    


<!--[if lt IE 9]><script src=""></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-parallax.js"></script>
<script src="js/js-collection.js"></script>
<script src="js/script.js"></script>
 <script src="admin/js/validation.js" type="text/javascript"></script>

 <script>
     $("select.positionTypes").change(function () {
         $("select.positionTypes option[value='" + $(this).data('index') + "']").prop('disabled', false);
         $(this).data('index', this.value);
         $("select.positionTypes option[value='" + this.value + "']:not([value=''])").prop('disabled', true);
         $(this).find("option[value='" + this.value + "']:not([value=''])").prop('disabled', false);
     });
 </script>

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
</html>





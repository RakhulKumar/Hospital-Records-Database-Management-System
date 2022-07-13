<?php include 'admin_php/config.php';
include 'admin_php/patient.php';
$username=$_GET['value'];   
?>
<html><head><title>
    User | Personal Details

</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
<?php include "admin_includes/header.php" ?>
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <?php include "admin_includes/sidebar.php" ?>
  

            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->

                    <!-- BEGIN PAGE BAR -->
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <a href="#">Appointments</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>User/Patient Information</span>
                            </li>
                        </ul>
                        <div class="page-toolbar">
                            <div class="btn-group pull-right">
                                <a href="patients.php?value=<?php echo $username; ?>" class="btn green btn-sm btn-outline"> <i class="fa fa-long-arrow-left"></i> Appointments

                                </a>

                            </div>
                        </div>
                    </div>
                    <!-- END PAGE BAR -->

                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-6 ">

                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-red-sunglo">
                                        <span class="caption-subject bold uppercase"> User/Patient Information</span>
                                    </div>

                                </div>
                                <?php
                                
                                             $sql="SELECT * FROM login WHERE username='$username'";
                                              $result=mysqli_query($conn,$sql);
                                              $row = mysqli_fetch_assoc($result);
                                ?>
                                <div class="portlet-body form">
<form id="appointment_form" name="appointment_form" class="form-transparent mt-30" method="post"
                                action="admin_php/patients.php">
                            <div class="row">
                              <div class="col-sm-12">
                                <div class="form-group mb-20">
                                  <input data-height="45px" id="form_name" name="form_name" class="form-control bdrs-0" type="text"
                                         required="" placeholder="Full Name" value="<?php echo $row['name']; ?>" aria-required="true">
                                </div>
                              </div>                  
                            </div>
                              <div class="row">
                                  <div class="col-sm-6">
                                      <div class="form-group mb-20">
                                          <input data-height="45px" id="form_phone" name="form_phone" class="form-control bdrs-0 required"
                                                 type="text" value="<?php echo $row['mobile']; ?>" placeholder="Enter Phone" aria-required="true">
                                      </div>
                                  </div>
                                  <div class="col-sm-6">
                                      <div class="form-group time mb-20">
                                          <input data-height="45px" name="form_address" class="form-control bdrs-0 required "
                                                 type="text" value="<?php echo $row['city']; ?>" placeholder="Address" aria-required="true">
                                      </div>
                                  </div>
                              </div>
                            <div class="row">
                              <div class="col-sm-6">
                                <div class="form-group mb-20">
                                  <input data-height="45px" id="form_email" name="form_email" class="form-control bdrs-0 required email"
                                         type="email" value="<?php echo $row['username']; ?>" placeholder="Enter Email" aria-required="true">
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group mb-20">
                                  <input data-height="45px" id="form_password" name="form_password" class="form-control bdrs-0 required"
                                         type="hidden" placeholder="Enter Password" aria-required="true">
                                </div>
                              </div>
                                  
                              </div>
                            <div class="row">
                              <div class="col-sm-6">
                                <div class="form-group date mb-20">
                                  <input data-height="45px" id="date" name="form_appontment_date" class="form-control bdrs-0 required datepicker"
                                         type="date" placeholder="MM/DD/YY" aria-required="true">
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
                                                  id="form_appontment_time" type="text" name="timss">
                                              <option value="">--  Select Time  --</option>
                                               <option value="10.00">10.00</option>-->
                                              <option value="11.00">11.00</option>
                                              <option value="3.00">3.00</option>
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
                                                id="Services" onchange="getTimes(this.value);" name="type">
                                            <option value="">--  Select here  --</option>
                                            <option value="clinic">Doctor</option>-->
                                              <!-- <option value="scan">Scan Center</option> -->
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
                                </div>
                            </div>
                            <!-- END SAMPLE FORM PORTLET-->

                        </div>
                    </div>

                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->

</div>
<?php include "admin_includes/footer.php" ?>
       
        <!--[if lt IE 9]>
        <script src="global/plugins/respond.min.js"></script>
        <script src="global/plugins/excanvas.min.js"></script>
        <![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
        <script src="layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>
</html>
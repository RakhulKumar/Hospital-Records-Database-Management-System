<?php
include 'admin_php/patient.php';
?>
<html><head><title>
    Admin | Patient Details

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
                                <a href="patients.php">Appointments</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Patient Details</span>
                            </li>
                        </ul>
                        <div class="page-toolbar">
                            <div class="btn-group pull-right">
                                <a href="patients.php" class="btn green btn-sm btn-outline"> <i class="fa fa-long-arrow-left"></i> Appointments

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
                                        <span class="caption-subject bold uppercase"> Patient Details</span>
                                    </div>

                                </div>
                                <div class="portlet-body form">
                                    <form role="form" action="">
                                        <?php
                                        if(isset($_GET['id']))
                                        {
                                        $id = $_GET['id'];
                                        $conn =new mysqli('localhost', 'root', '', 'clinical_service');
                                        $viewAppointments =  "SELECT * FROM patient_appointments WHERE id = $id";
                                        $patientDetailList = mysqli_query($conn,$viewAppointments);
                                        // output data of each row
                                        while($row = mysqli_fetch_assoc($patientDetailList)) {
                                        ?>
                                        <div class="form-body">

                                            <div class="form-group form-md-line-input has-info">
                                                <div class="input-group">

                                                    <input type="text" class="form-control" placeholder="Name" value="<?php echo $row['patient_name']; ?> ">
                                                    <label for="form_control_1">Patient Name</label>
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input has-success">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Email Address" value="<?php echo $row['email']; ?>">
                                                    <label for="form_control_1">Email</label>
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-envelope-o"></i>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="form-group form-md-line-input has-success">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Mobile" value="<?php echo $row['mobile']; ?>">
                                                    <label for="form_control_1">Mobile</label>
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-phone"></i>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="form-group form-md-line-input has-success">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Purpose" value="<?php echo $row['appointment_for']; ?>">
                                                    <label for="form_control_1">Appointment For</label>
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-phone"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input has-success">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Date" value="<?php echo $row['appointment_date']; ?>">
                                                    <label for="form_control_1">Appointment Date</label>
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-phone"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input has-success">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="time" value="<?php echo $row['appointment_time']; ?>">
                                                    <label for="form_control_1">Appointment Time</label>
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-phone"></i>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="form-group form-md-line-input has-warning">
                                                <div class="input-group">

                                                    <textarea class="form-control" placeholder="Message"><?php echo $row['message']; ?></textarea>
                                                    <label for="form_control_1">Message</label>
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-comment-o"></i>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="form-actions noborder">
                                                <a href="patients.php" class="btn blue"><i class="fa fa-arrow-circle-left"></i> Back</a>
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
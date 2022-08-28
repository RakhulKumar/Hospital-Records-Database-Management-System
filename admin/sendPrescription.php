<?php include 'admin_php/config.php';
?>
<html><head><title> Doctor | Send Prescription
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
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
    <link href="global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
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
                        <a href="dashboard.php">Home</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <a href="#">Prescription</a>

                    </li>

                </ul>

            </div>
            <!-- END PAGE BAR -->

            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption font-dark">
                                <i class="fa fa-phone font-dark"></i>
                                <span class="caption-subject bold uppercase"> Prescription</span>
                            </div>

                        </div>
                        <div class="portlet-body form">
                            <?php

                            if(isset($_GET['id']))
                            {
                                $id = $_GET['id'];
                                $conn =new mysqli('localhost', 'root', '', 'clinical_service');

                                $view =  "SELECT * FROM patient_appointments WHERE id = $id";
                                $viewAppointments = mysqli_query($conn,$view);
                                // output data of each row
                                while($row = mysqli_fetch_assoc($viewAppointments))
                                {
                                    ?>
                                    <form role="form" name="addPrescription" method="post" action="admin_php/prescription.php" enctype="multipart/form-data">
                                        <div class="form-body">
                                            <div class="form-group form-md-line-input has-info">
                                                <div class="input-group">

                                                    <input type="text" value="<?php
                                                    echo ucwords($row['patient_name']); ?>" name="name"
                                                           class="form-control" placeholder="First Name" required>
                                                    <label for="form_control_1">Name</label>
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-file-text-o"></i>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="form-group form-md-line-input  has-success">
                                                <div class="input-group">
                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <label for="form_control_1">DOB</label>
                                                            <input type="text" value="<?php
                                                    echo ucwords($row['dob']); ?>" class="form-control"
                                                                   placeholder="Patient DOB" value=""
                                                                   name="birth" required>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <label for="form_control_1">Age</label>
                                                            <input type="number" value="<?php
                                                    echo ucwords($row['age']); ?>" class="form-control"
                                                                   placeholder="Patient Age"
                                                                   value=" "
                                                                   name="age" required>
                                                        </div>

                                                    </div>

                                                    <span class="input-group-addon">
                                                        <i class="fa fa-file-text-o"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input has-info">
                                                <div class="input-group">

                                                    <input type="number" class="form-control"
                                                           placeholder="Phone" value="<?php echo $row['mobile'];?>"
                                                           name="phone" required>
                                                    <label for="form_control_1">Phone</label>
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-file-text-o"></i>
                                                    </span>
                                                </div>
                                            </div>
                                           <div class="form-group form-md-line-input  has-success">
                                                <div class="input-group">

                                                    <input type="text" class="form-control"
                                                           placeholder="Patient Address" value="<?php echo $row['address'];?>"
                                                           name="patient_address" required>
                                                    <label for="form_control_1">Patient Address</label>
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-file-text-o"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input  has-success">
                                                <div class="input-group">

                                                    <input type="text" class="form-control"
                                                           placeholder="Prescription for" value="<?php echo $row['appointment_for'];?>"
                                                           name="prescription_for" required>
                                                    <label for="form_control_1">Prescription For</label>
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-file-text-o"></i>
                                                    </span>
                                                </div>
                                            </div>



                                            <div class="form-group form-md-line-input has-info">
                                                <div class="input-group">
                                                    <label for="form_control_1">Medicine to take</label>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <textarea  name="prescription" rows="4"
                                                                   class="form-control" placeholder="Prescription"
                                                                   required></textarea>
                                                            </div>
                                                        <div class="col-md-3">
                                                            <textarea  name="quantity" rows="4"
                                                                   class="form-control" placeholder="Quantity"
                                                                   required></textarea>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <textarea
                                                                rows="4" name="time_to_take"
                                                                   class="form-control" placeholder="Time to take"
                                                                   required></textarea>
                                                        </div>
                                                    </div>

                                                    <span class="input-group-addon">
                                                        <i class="fa fa-file-text-o"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input has-info">
                                                <div class="input-group">

                                                    <select data-height="45px"
                                                            class="table-group-action-input form-control input-medium"
                                                            id="pharmacy_name" name="pharmacy_name"  required>
                                                        <option value="">--  Select Pharmacy Name  --</option>
                                                        <?php
                                                        include 'admin_php/pharmacy.php';
                                                        if (mysqli_num_rows($totalPharmacyList) > 0) {
                                                            // output data of each row
                                                            while($pharmacy = mysqli_fetch_assoc($totalPharmacyList)) {
                                                                ?>

                                                                <option value="<?php echo $pharmacy["id"]; ?>">
                                                                    <?php echo ucwords($pharmacy["pharmacy_name"])   ; ?>
                                                                </option>

                                                                <?php
                                                            }
                                                        }
                                                        else
                                                        {
                                                            echo "0 results";
                                                        }
                                                        ?>

                                                    </select>
                                                    <label for="form_control_1">Pharmacy Name</label>

                                                </div>
                                            </div>
                                            <!--                                    <div class="form-group form-md-line-input has-info">
                                        <div class="input-group">
                                            <?php /*if(isset($getEmail)) {
                                                while ($row = mysqli_fetch_assoc($getEmail)) {
                                                    */?>
                                                    <input type="text" value="<?php /*if(isset($row['pharmacy_email'])) {
                                                        echo $row['pharmacy_email'];
                                                    }
                                                    */?>"
                                                           name="pharmacy_email"  id="pharmacy_email"
                                                           class="form-control" placeholder="<?php /*if(isset($row['pharmacy_email']))
                                                    {
                                                        echo  $row['pharmacy_email'];
                                                    }
                                                    */?>" required>
                                                    <label for="form_control_1">Pharmacy Email</label>
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-file-text-o"></i>
                                                    </span>
                                            <?php
                                            /*                                                }
                                                                                        }
                                                                                        */?>

                                        </div>
                                    </div>
-->
                                            <div class="form-group form-md-line-input has-info">
                                                <div class="input-group">

                                                    <input class="form-control datepicker" type="text"  placeholder="MM/DD/Year" value="<?php echo $row['appointment_date']; ?>" name="appointment_date" required>
                                                    <label class="form_control_1">Appointment Date:
                                                        <span class="required"> * </span>
                                                    </label>

                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input has-info">
                                                <div class="input-group">

                                                    <input type="text" class="form-control timepicker" placeholder="Time"
                                                           value="<?php echo date('H:i a',strtotime($row['appointment_time'])); ?>" name="appointment_time" required>
                                                    <label class="form_control_1">Appointment Time:
                                                        <span class="required"> * </span>
                                                    </label>

                                                </div>
                                            </div>


                                            <div class="form-actions noborder">
                                                <input type="hidden" value="<?php echo $row['id']; ?>" name="patient_id">
                                                <input type="hidden" value="<?php echo $row['doctor_id']; ?>" name="doctor_id">
                                                <!--<input type="hidden" value="<?php
                                                /*                                        include 'admin_php/pharmacy.php';
                                                                                        if (mysqli_num_rows($totalPharmacyList) > 0) {
                                                                                        // output data of each row
                                                                                        while($pharmacy = mysqli_fetch_assoc($totalPharmacyList)) {
                                                                                      echo $pharmacy['id'];
                                                                                        }
                                                                                        }

                                                                                        */?>" name="pharmacy_id">-->
                                                <button type="submit" name="addPrescription"
                                                        data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>"
                                                        class="btn blue"><i class="fa fa-arrow-circle-right"></i> Send Prescription
                                                </button>

                                            </div>

                                        </div>
                                        <?php
                                        if(isset($_GET['success']))
                                        {
                                            ?>
                                            <div class="alert-success" style="height:34px;">
                                                <p class="error_message" style="text-align: center;">
                                                    <?php echo 'Prescription is sended successfully !'; ?>
                                                </p>
                                            </div>

                                            <?php
                                        }
                                        elseif(isset($_GET['error']))
                                        {
                                            ?>
                                            <div class="alert-danger" style="height:34px;">
                                                <p class="error_message" style="text-align: center;">
                                                    <?php echo 'There is an error in sending your Prescription !'; ?>
                                                </p>
                                            </div>
                                            <?php
                                        }
                                        ?>

                                    </form>

                                    <?php
                                }
                            }

                            ?>

                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
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
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="global/scripts/datatable.js" type="text/javascript"></script>
<script src="global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="pages/scripts/table-datatables-managed.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
<script src="layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
<script src="layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
<script>
    function getPharmacyEmail(value)
    {
        $.ajax({
            url:'admin_php/pharmacy.php',
            type:'post',
            data:{pharmacy_id:value},
            success:function (response)
            {
                document.getElementById('pharmacy_email').innerHTML=response;
            }
        });
    }
</script>

</body>
</html>
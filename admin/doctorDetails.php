
<html><head><title>
    Admin | Edit Doctors Details

</title>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
          type="text/css"/>
    <link href="global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="global/plugins/simple-line-icons/simple-line-icons.min.css"
          rel="stylesheet" type="text/css"/>
    <link href="global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"
          rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="global/plugins/datatables/datatables.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css"
          rel="stylesheet" type="text/css"/>
    <link href="global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css"
          rel="stylesheet" type="text/css"/>
    <link href="global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"
          rel="stylesheet" type="text/css"/>
    <link href="global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet"
          type="text/css"/>
    <link href="global/plugins/icheck/skins/all.css" rel="stylesheet" type="text/css"/>

    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="global/css/components.min.css" rel="stylesheet" id="style_components"
          type="text/css"/>
    <link href="global/css/plugins.min.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css"/>
    <link href="layouts/layout/css/themes/darkblue.min.css" rel="stylesheet"
          type="text/css" id="style_color"/>
    <link href="layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/>
    <link href="linecontrol_editor/editor.css" type="text/css" rel="stylesheet"/>


</head>
<!-- END HEAD -->
<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
<?php include "admin_includes/header.php" ?>
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <?php include "admin_includes/sidebar.php" ?>




    <!-- END HEAD -->


    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <!-- BEGIN PAGE BAR -->
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <a href="#">Home</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span>Doctor Details</span>
                    </li>
                </ul>
            </div>
            <!-- END PAGE BAR -->
            <!-- BEGIN PAGE TITLE-->

            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-md-12">
                    <div class="form-horizontal form-row-seperated">
                        <div class="portlet">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-shopping-cart"></i>Edit Doctor Details
                                </div>

                            </div>
                            <div class="portlet-body">
                                <div class="tabbable-bordered">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#tab_general" data-toggle="tab">Edit Doctor Details </a>
                                        </li>




                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_general">
                                            <div class="form-body">
                                                <div class="row">
                                                    <?php
                                                    if(isset($_GET['id']))
                                                    {
                                                    $id = $_GET['id'];
                                                    $conn =new mysqli('localhost', 'root', '', 'clinical_service');
                                                    $view =  "SELECT * FROM doctors WHERE id = $id";
                                                    $viewDoctor = mysqli_query($conn,$view);

                                                    // output data of each row
                                                    while ($row = mysqli_fetch_assoc($viewDoctor))
                                                    {
                                                    ?>
                                                    <div class="col-md-8">
                                                        <div class="portlet light bordered">
                                                            <div class="portlet-title">
                                                                <div class="caption font-red-sunglo">
                                                                    <span class="caption-subject bold uppercase">Update Doctor Details</span>
                                                                </div>


                                                            </div>
                                                            <form id="editProductForm" method="post"
                                                                  action="admin_php/doctor.php" name="updateDoctor"
                                                                  enctype="multipart/form-data">

                                                                <div class="form-group">
                                                                    <label class="col-md-2 control-label">Dr. Name:
                                                                        <span class="required"> * </span>
                                                                    </label>

                                                                    <div class="col-md-10">
                                                                        <input  class="form-control"
                                                                               name="form_doctor_name" placeholder="Doctor Name"
                                                                               value="<?php echo ucwords($row['doctor_name']); ?>" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-md-2 control-label">Dept Name:
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-10">
                                                                        <input class="form-control"
                                                                               name="form_department"
                                                                               placeholder="Department" value="<?php echo ucwords($row['department_name']); ?>" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-md-2 control-label">Description:
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-10">
                                                                        <input class="form-control"
                                                                               name="form_description"
                                                                               placeholder="Description" value="<?php echo ucwords($row['description']); ?>" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-md-2 control-label"> Education:
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-10">
                                                                        <input class="form-control"
                                                                                  name="form_education"
                                                                                  placeholder="Education"
                                                                               value="<?php echo ucwords($row['education']); ?>" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-md-2 control-label"> Experience:
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-10">
                                                                        <input class="form-control"
                                                                               name="form_experience"
                                                                               placeholder="Experience" value="<?php echo $row['experience']; ?>" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-md-2 control-label">Profession:
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-10">
                                                                        <input class="form-control"
                                                                               name="form_profession"
                                                                               placeholder="profession"
                                                                               value="<?php echo ucwords($row['profession']); ?>" required>

                                                                    </div>

                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="col-md-2 control-label">Address:
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-10">
                                                                        <input class="form-control"
                                                                               name="form_address"
                                                                               placeholder="Address" value="<?php echo ucwords($row['address']); ?>" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-md-2 control-label">Mobile:
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-10">
                                                                        <input class="form-control"
                                                                               name="form_mobile"
                                                                               placeholder="Mobile" value="<?php echo $row['mobile']; ?>" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-md-2 control-label">Email:
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-10">
                                                                        <input class="form-control"
                                                                               name="form_email"
                                                                               placeholder="Email" value="<?php echo $row['email']; ?>" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-md-2 control-label">Skype::
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-10">
                                                                        <input class="form-control"
                                                                               name="form_skype"
                                                                               placeholder="Skype" value="<?php echo $row['skype']; ?>" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-md-2 control-label">Working Days::
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-10">
                                                                        <input class="form-control "
                                                                               name="form_working_days"
                                                                               placeholder="Working Days" value="<?php echo ucwords($row['working_days']); ?>" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-md-2 control-label">Working Time::
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-10">
                                                                        <input class="form-control"
                                                                               name="form_working_time"
                                                                               placeholder="Working Time" value="<?php echo $row['working_time']; ?>" required>
                                                                    </div>
<!--                                                                    <div class="col-md-10">-->
<!--                                                                        <input class="form-control"-->
<!--                                                                               name="form_working_time2"-->
<!--                                                                               placeholder="Working Time" value="--><?php //echo $row['working_time2']; ?><!--" required>-->
<!--                                                                    </div>-->
<!--                                                                    <div class="col-md-10">-->
<!--                                                                        <input class="form-control"-->
<!--                                                                               name="form_working_time3"-->
<!--                                                                               placeholder="Working Time" value="--><?php //echo $row['working_time3']; ?><!--" required>-->
<!--                                                                    </div>-->
<!--                                                                    <div class="col-md-10">-->
<!--                                                                        <input class="form-control"-->
<!--                                                                               name="form_working_time4"-->
<!--                                                                               placeholder="Working Time" value="--><?php //echo $row['working_time4']; ?><!--" required>-->
<!--                                                                    </div>-->
<!--                                                                    <div class="col-md-10">-->
<!--                                                                        <input class="form-control"-->
<!--                                                                               name="form_working_time5"-->
<!--                                                                               placeholder="Working Time" value="--><?php //echo $row['working_time5']; ?><!--" required>-->
<!--                                                                    </div>-->
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="col-md-2 control-label">Status:
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-10">
                                                                        <select class="table-group-action-input form-control input-medium"
                                                                                name="form_status" required>
                                                                            <option value="<?php echo ucwords($row['status']); ?>">-- <?php echo ucwords($row['status']); ?> --

                                                                            </option>
                                                                            <option value="Available" <?php if(isset($row['status']))
                                                                            { if($row['status'] == 'Available')
                                                                            { echo 'selected=selected'; } } ?> >
                                                                                Available</option>
                                                                            <option value="Not Available" <?php if(isset($row['status']))
                                                                            { if($row['status'] == 'Not Available')
                                                                            { echo 'selected=selected'; } } ?>>
                                                                               Not Available</option>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-actions noborder">
                                                                    <input type="hidden" value="<?php echo $row['id']; ?>" name="doctor_id">
                                                                    <button type="submit"  name="updateDoctor"
                                                                       data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>"
                                                                       class="btn blue"><i class="fa fa-arrow-circle-right"></i>
                                                                        Edit Doctor
                                                                    </button>

                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="portlet light bordered">
                                                            <div class="portlet-title">
                                                                <div class="caption font-red-sunglo">
                                                                    <span class="caption-subject bold uppercase"> Update Doctor Image</span>
                                                                </div>


                                                            </div>
                                                            <form role="form" name="updateDoctorImage" method="post"
                                                                  action="admin_php/doctor.php"
                                                                  enctype="multipart/form-data">
                                                                <div class="form-group">

                                                                    <label class="form_control_1">Doctor Image:
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <br/>
                                                                    <div class="updatedImage">
                                                                            <img width="100" height="100" name="doctor_image" src=" <?php echo 'uploads/doctor_images/'.$row['doctor_image']; ?>"
                                                                            alt=" <?php echo ucwords($row['doctor_name']); ?>/>
                                                                    </div>
                                                                    <br/>
                                                                    <input type="file" name="doctor_image"
                                                                           class="table-group-action-input form-controlm"/>
                                                                    <p class="text-success">Image Size:270 X 270 pixels</p>


                                                                </div>
                                                                <div class="form-actions noborder">
                                                                    <input type="hidden" value="<?php echo $row['id']; ?>" name="doctor_id">
                                                                    <button type="submit"
                                                                            name="updateDoctorImage"
                                                                            data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>"
                                                                            class="btn blue"><i
                                                                                class="fa fa-arrow-circle-right"></i>
                                                                        Update Doctor Image
                                                                    </button>
                                                                </div>

                                                            </form>


                                                        </div>
                                                        <?php
                                                        if(isset($_GET['success']))
                                                        {
                                                            ?>
                                                            <div class="alert-success" style="height:34px;">
                                                                <p class="error_message" style="text-align: center;">
                                                                    <?php echo 'Updated Successfully !'; ?>
                                                                </p>
                                                            </div>

                                                            <?php
                                                        }
                                                        elseif(isset($_GET['error']))
                                                        {
                                                            ?>
                                                            <div class="alert-danger" style="height:34px;">
                                                                <p class="error_message" style="text-align: center;">
                                                                    <?php echo 'Error in Update !'; ?>
                                                                </p>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                        <?php
                                                    }
                                                    }



                                                    ?>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
    <script src="global/plugins/bootstrap/js/bootstrap.min.js"
            type="text/javascript"></script>
    <script src="global/plugins/js.cookie.min.js" type="text/javascript"></script>
    <script src="global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"
            type="text/javascript"></script>
    <script src="global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"
            type="text/javascript"></script>
    <script src="global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"
            type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="global/scripts/datatable.js" type="text/javascript"></script>
    <script src="global/plugins/datatables/datatables.min.js"
            type="text/javascript"></script>
    <script src="global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"
            type="text/javascript"></script>
    <script src="global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"
            type="text/javascript"></script>
    <script src="global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"
            type="text/javascript"></script>
    <script src="global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"
            type="text/javascript"></script>
    <script src="global/plugins/fancybox/source/jquery.fancybox.pack.js"
            type="text/javascript"></script>
    <script src="global/plugins/plupload/js/plupload.full.min.js"
            type="text/javascript"></script>
    <script src="global/plugins/icheck/icheck.min.js" type="text/javascript"></script>
    <script src="pages/scripts/form-icheck.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="global/scripts/app.min.js" type="text/javascript"></script>
    <script src="pages/scripts/components-date-time-pickers.min.js"
            type="text/javascript"></script>

    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="pages/scripts/ecommerce-products-edit.min.js"
            type="text/javascript"></script>
    <script src="pages/scripts/table-datatables-managed.min.js"
            type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <script src="layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
    <script src="layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
    <script src="layouts/global/scripts/quick-sidebar.min.js"
            type="text/javascript"></script>
    <!-- END THEME LAYOUT SCRIPTS -->

    {{--text editor--}}
    <script src="linecontrol_editor/editor.js"></script>

</body>

</html>





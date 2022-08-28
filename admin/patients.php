
<html><head><title> Admin | Appointments 
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
                            <a href="#">Appointments</a>

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
                                    <span class="caption-subject bold uppercase"> Appointments</span>
                                </div>

                            </div>
                            <div class="portlet-body">

                                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Date</th>
                                        <th> Patient Name </th>
                                        <th> Mobile Number </th>
                                        <th> Appointment For </th>
                                        <th> Actions </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $email=$_GET['value'];
                                    include 'admin_php/patient.php';
                                       $sql="SELECT * FROM patient_appointments WHERE email='$email'";
                                              $result=mysqli_query($conn,$sql);
                                                while($row = mysqli_fetch_assoc($result)) {
                                    
                                    ?>
                                       <tr>
                                           <td><?php echo $row['id']; ?></td>
                                           <td><?php echo $row['appointment_date']; ?></td>
                                           <td><?php echo $row['patient_name']; ?></td>
                                           <td><?php echo $row['mobile']; ?></td>
                                           <td><?php echo $row['appointment_for']; ?></td>
                                           <td> <div class="btn-group">
                                                   <a href="<?php echo 'patientDetails.php?id='.$row["id"]; ?>" class="btn btn-xs btn-info"><i class="fa fa-eye" title="View"></i>
                                                   </a>
                                                   <a href="<?php echo 'admin_php/patient.php?patient_id='.$row["id"]; ?>" class="btn btn-xs btn-danger"><i class="fa fa-trash-o" title="Delete"></i>
                                                   </a>

                                               </div>
                                           </td>
                                       </tr>
                                        <?php
                                    }
                                    
                                    ?>
                                      
                                    </tbody>
                                </table>
                                <?php
                                if(isset($_GET['success']))
                                {
                                    ?>
                                    <div class="alert-success" style="height:34px;">
                                        <p class="error_message" style="text-align: center;">
                                            <?php echo 'New Blog is added successfully !'; ?>
                                        </p>
                                    </div>

                                    <?php
                                }
                                elseif(isset($_GET['error']))
                                {
                                    ?>
                                    <div class="alert-danger" style="height:34px;">
                                        <p class="error_message" style="text-align: center;">
                                            <?php echo 'There is an error in adding your blog !'; ?>
                                        </p>
                                    </div>
                                    <?php
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
</body>
</html>
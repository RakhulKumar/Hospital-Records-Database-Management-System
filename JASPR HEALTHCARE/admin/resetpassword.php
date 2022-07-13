
<html><head><title>
    Reset Password

</title>
    <meta charset="utf-8" />
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
    <link href="global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
    <link href="global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css" />
    <link href="global/plugins/icheck/skins/all.css" rel="stylesheet" type="text/css" />

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
                        <span>Reset Password</span>
                    </li>
                </ul>

            </div>
            <!-- END PAGE BAR -->
            <!-- BEGIN PAGE TITLE-->
            <div class="caption font-dark">
                <h3 class="caption-subject bold uppercase"> <i class="icon-list font-dark"></i> Reset Password</h3>
            </div>
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-md-12">
                    <div class="responseResetPassword"></div>

                </div>
                <div class="col-md-8 ">

                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption font-red-sunglo">
                                <span class="caption-subject bold uppercase">Edit Your Password</span>
                            </div>

                        </div>
                        <div class="portlet-body form">
                            <form role="form" id="reset_password" method="post" action="admin_php/resetPassword.php">
                                <div class="form-bodyD">

                                    <div class="form-group">
                                        <label class="control-label">Old Password</label>
                                        <input type="password" name="old_password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Password</label>
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Confirm Password</label>
                                        <input type="password" class="form-control" name="password_confirmation">
                                    </div>
                                    <div class="form-actions noborder">
                                        <button type="submit" name="resetPassword" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>"   class="btn blue pull-right"><i class="fa fa-arrow-circle-right"></i>
                                            Reset Password
                                        </button>

                                    </div>

                                </div>
                                <div class="alert-danger" id="err_confirm_password" style="height:34px;">
                                </div>
                                <?php
                                if(isset($_GET['success']))
                                {
                                    ?>
                                    <div class="alert-success" style="height:34px;">
                                        <p class="error_message" style="text-align: center;">
                                            <?php echo 'Your Password is changed !'; ?>
                                        </p>
                                    </div>

                                    <?php
                                }
                                elseif(isset($_GET['error']))
                                {
                                    ?>
                                    <div class="alert-danger" style="height:34px;">
                                        <p class="error_message" style="text-align: center;">
                                            <?php echo 'There is an error !'; ?>
                                        </p>
                                    </div>
                                    <?php
                                }
                                ?>
                            </form>
                        </div>

                    </div>
                    <!-- END SAMPLE FORM PORTLET-->

                </div>

            </div>

        </div>
    <!-- END CONTENT -->
</div>
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
    <script src="global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script src="global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script src="global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
    <script src="global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script>
    <script src="global/plugins/plupload/js/plupload.full.min.js" type="text/javascript"></script>
    <script src="global/plugins/icheck/icheck.min.js" type="text/javascript"></script>
    <script src="pages/scripts/form-icheck.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="global/scripts/app.min.js" type="text/javascript"></script>
    <script src="pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>

    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="pages/scripts/ecommerce-products-edit.min.js" type="text/javascript"></script>
    <script src="pages/scripts/table-datatables-managed.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <script src="layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
    <script src="layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
    <script src="layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
    <!-- END THEME LAYOUT SCRIPTS -->

       

</body>
</html>


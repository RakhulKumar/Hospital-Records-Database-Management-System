<!DOCTYPE html> <!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]--> <!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]--> <!--[if !IE]><!-->
<html lang="en"> <!--<![endif]--> <!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>Forgot password</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/> <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
          type="text/css"/>
    <link href="global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="global/plugins/simple-line-icons/simple-line-icons.min.css"
          rel="stylesheet" type="text/css"/>
    <link href="global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"
          rel="stylesheet" type="text/css"/> <!-- END GLOBAL MANDATORY STYLES --> <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="global/plugins/select2/css/select2.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet"
          type="text/css"/> <!-- END PAGE LEVEL PLUGINS --> <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="global/css/components.min.css" rel="stylesheet" id="style_components"
          type="text/css"/>
    <link href="global/css/plugins.min.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME GLOBAL STYLES --> <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="pages/css/login-4.min.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL STYLES --> <!-- BEGIN THEME LAYOUT STYLES --> <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/>
</head> <!-- END HEAD -->
<body class=" login" style="background-color: rgba(23, 67, 95, 0.87)!important;"> <!-- BEGIN LOGO -->
<div class="logo">
    <a href="login.php"> <img src="../images/logo.png"
                                            alt=""/>
    </a>
</div> <!-- END LOGO --> <!-- BEGIN LOGIN -->
<div class="content"> <!-- BEGIN LOGIN FORM -->


    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form  action="core_files/controller.php" method="post">
        <h3>Forget Password ?</h3>
        <p> Enter your e-mail address below to reset your password. </p>
        <div class="form-group">
            <div class="input-icon">
                <i class="fa fa-envelope"></i>
                <input class="form-control placeholder-no-fix" type="email" autocomplete="off" placeholder="Email"
                       name="email"  required />
            </div>
        </div>
        <div class="form-actions">
            <a href="login.php" type="button" id="back-btn" class="btn red btn-outline">Back</a>
            <button type="submit" name="forgot_password" id="button_forgot_password" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>" class="btn green pull-right"> Submit</button>
        </div>
        <?php

        if(isset($_GET['message'])) {
            if ($_GET['message'] == 'Invalidmail') {
                ?>
                <br/>
                <br/>
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true">&times;</span></button>
                    <span>Please Enter Your Registered email</span></div>
                <?php
            }
            if ($_GET['message'] == 'success') {
                ?>
                <br/>
                <br/>
                <div class="alert alert-success alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true">&times;</span></button>
                    <span>Your Account login details sent to your registered mail.</span></div>
                <?php
            }
        }
        ?>
    </form>


</div>

<!-- END LOGIN -->

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
<script src="global/plugins/jquery-validation/js/jquery.validate.min.js"
        type="text/javascript"></script>
<script src="global/plugins/jquery-validation/js/additional-methods.min.js"
        type="text/javascript"></script>
<script src="global/plugins/select2/js/select2.full.min.js"
        type="text/javascript"></script>
<script src="global/plugins/backstretch/jquery.backstretch.min.js"
        type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->

<!-- BEGIN THEME LAYOUT SCRIPTS -->
<!-- END THEME LAYOUT SCRIPTS -->


</body>


</html>
<!DOCTYPE html> <!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]--> <!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]--> <!--[if !IE]><!-->
<html lang="en"> <!--<![endif]--> <!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
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
<div class="logo"><center>
                                                               <a href="<?php echo '../index.php' ;?>">

                    <!-- <img src="images/logo_white.png" alt="Clinical Services" class="logo-default" />  -->
                                        <h2 style="    color: aliceblue;
    font-family: serif;
    height: 97px;
    width: 199px;
}">JASPR Healthcare</h2>
                
    </a></center></div> <!-- END LOGO --> <!-- BEGIN LOGIN -->
<div class="content"> <!-- BEGIN LOGIN FORM -->
    <form class="login-form" method="post" action="core_files/controller.php"><h3
            class="form-title text-center"> Login </h3>
        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span> Enter any username and password. </span></div>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that--> <label
                class="control-label visible-ie8 visible-ie9">Roles</label>
            <div class="input-icon"><i class="fa fa-user"></i>
                <select name="role" class="form-control">
                    <option>-- Select Your Role --</option>
                    <option value="admin" <?php if(isset($_GET['role'])) { if($_GET['role'] == 'admin') { echo 'selected=selected'; } } ?> >Admin</option>
                    <option value="user" <?php if(isset($_GET['role'])) { if($_GET['role'] == 'user') { echo 'selected=selected'; } } ?>>Patient</option>
                    <option value="doctor" <?php if(isset($_GET['role'])) { if($_GET['role'] == 'doctor') { echo 'selected=selected'; } } ?>>Doctor</option>
                     <!-- <option value="scan" <?php if(isset($_GET['role'])) { if($_GET['role'] == 'scan') { echo 'selected=selected'; } } ?>>Scan Center</option> -->
                    <option value="lab" <?php if(isset($_GET['role'])) { if($_GET['role'] == 'lab') { echo 'selected=selected'; } } ?>>lab</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that--> <label
                class="control-label visible-ie8 visible-ie9">Username</label>
            <div class="input-icon"><i class="fa fa-user"></i> <input class="form-control placeholder-no-fix"
                                                                      type="text" autocomplete="off" id="email"
                                                                      placeholder="Username" name="username"
                                                                      onblur="return emptyField(this.id)"/></div>
            <p id="err_email" class="text-danger"></p>
        </div>
        <div class="form-group"><label class="control-label visible-ie8 visible-ie9">Password</label>
            <div class="input-icon"><i class="fa fa-lock"></i> <input class="form-control placeholder-no-fix" id="password"
                                                                      type="password" autocomplete="off"
                                                                      placeholder="Password" name="password"
                                                                      onblur="return emptyField(this.id)"/></div>
            <p id="err_password" class="text-danger"></p>
        </div>
        <div class="form-actions">
            <!--<button type="submit" id="button_login" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>"
                    class="btn green pull-right"> Login</button>-->
            <button  type="submit" name="login" value="login" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>"
                     class="btn green pull-right" onclick="return userLoginValidate();"> Login</button>

            <?php

            if(isset($_GET['message'])) {
                if ($_GET['message'] == 'Invalid') {
                    ?>
                    <br/>
                    <br/>
                    <div class="alert alert-danger alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span></button>
                        <span>Invalid username or Password</span></div>
                    <?php
                }
            }
            ?>

        </div>
        <div class="forget-password"><h4>Forgot your password ?</h4>
            <p> no worries, click <a href="forgotpassword.php" id="forget-password"> here </a> to reset your password. </p>
        </div>
    </form>


    <div class="done"></div> <!-- END LOGIN FORM -->

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
<script src="js/formSubmit.js" type="text/javascript"></script>
<script src="js/validation.js" type="text/javascript"></script>

</body>



</html>
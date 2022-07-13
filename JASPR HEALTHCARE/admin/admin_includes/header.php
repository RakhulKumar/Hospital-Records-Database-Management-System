<?php session_start();
if(!isset($_SESSION['role'])) {
 header('Location: ../index.php');
}
    ?>
    <div class="page-header navbar navbar-fixed-top">
        <!-- BEGIN HEADER INNER -->
        <div class="page-header-inner ">
            <!-- BEGIN LOGO -->
            <div class="page-logo" style="margin-top: -17px;">
                <a href="<?php echo '../index.php' ;?>">

                    <!-- <img src="images/logo_white.png" alt="Clinical Services" class="logo-default" />  -->
                                        <h2 style="    color: aliceblue;
    font-family: serif;
    height: 97px;
    width: 199px;
}">JASPR Healthcare</h2>
                </a>

            </div>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                <span></span>
            </a>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">


                    <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <li class="dropdown dropdown-quick-sidebar-toggler">
                        <a  href="<?php echo 'admin_php/logout.php' ;?>" class="dropdown-toggle">
                            <b style="color:#32c5d2;">Logout <i class="icon-logout"></i></b>
                        </a>
                    </li>
                    <!-- END QUICK SIDEBAR TOGGLER -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END HEADER INNER -->
    </div>
    <!-- END HEADER -->
    <!-- BEGIN HEADER & CONTENT DIVIDER -->
    <div class="clearfix"> </div>

<!-- BEGIN HEADER -->

<!-- END HEADER & CONTENT DIVIDER -->

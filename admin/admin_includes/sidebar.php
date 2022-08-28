
<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <li class="sidebar-toggler-wrapper hide">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler">
                    <span></span>
                </div>
                <!-- END SIDEBAR TOGGLER BUTTON -->
            </li>
            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
            <li class="sidebar-search-wrapper">
                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                <form class="sidebar-search  " action="page_general_search_3.html" method="POST">
                    <a href="javascript:;" class="remove">
                        <i class="icon-close"></i>
                    </a>

                </form>
                <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>

<!--   Admin Panel       -->
            <?php if(isset($_SESSION['role']))
            {
            if($_SESSION['role'] == 'admin')
            {
            ?>
            <li class="nav-item start ">
                <a href="dashboard.php" class="nav-link ">
                    <i class="icon-bulb"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="services.php" class="nav-link ">
                    <i class="fa fa-navicon"></i>
                    <span class="title">Services</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="doctors.php" class="nav-link ">
                    <i class="icon-user"></i>
                    <span class="title">Doctors</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-comments"></i>
                    <span class="title">Blogs</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="blog.php" class="nav-link ">
                            <i class="icon-list"></i>
                            <span class="title">Blogs</span>
                        </a>
                    </li>



                    <li class="nav-item  ">
                        <a href="addBlog.php" class="nav-link ">
                            <i class="icon-shuffle"></i>
                            <span class="title">Add Blog</span>
                        </a>
                    </li>

                </ul>
            </li>
           <!--      -->
                <li class="nav-item  ">
                    <a href="prescription.php" class="nav-link ">
                        <i class="icon-paper-plane"></i>
                        <span class="title">Patient Prescriptions</span>
                    </a>
                </li>

                <?php
            }
            }
            ?>
            <!--   Doctor Role-->
            <?php if(isset($_SESSION['role']))
            {
                if($_SESSION['role'] == 'doctor')
                {
                    $conn = mysqli_connect("localhost","root","","clinical_service");
                    $user = $_SESSION['username'];
                    $doctor_id =  "SELECT id FROM doctors WHERE  email = '$user'";
                    $result = mysqli_query($conn, $doctor_id);
                    while ($row = mysqli_fetch_assoc($result))
                    {
                        $doctor_id = $row['id'];
                    }
                   /* $getpatients =  "SELECT p.* FROM patient_appointments as p INNER  JOIN doctors as d ON p.doctor_id = d.id WHERE p.doctor_id = $doctor_id";
                    $result = mysqli_query($conn, $getpatients);*/
                    ?>


            <li class="nav-item  ">
                <a href="<?php echo 'doctorPersonalInfo.php?value='.$user; ?>" class="nav-link ">
                    <i class="icon-paper-plane"></i>
                    <span class="title">Doctor Information</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="<?php echo 'doctorAppointments.php?id='.$doctor_id; ?>" class="nav-link ">
                    <i class="icon-paper-plane"></i>
                    <span class="title">Appointments</span>
                </a>
            </li>
                    <li class="nav-item  ">
                        <a href="<?php echo 'patient_prescription.php?id='.$doctor_id;?> " class="nav-link ">
                            <i class="icon-paper-plane"></i>
                            <span class="title">Prescriptions</span>
                        </a>
                    </li>
                    <?php
                }
            }
            ?>
<!-- ................ -->
 <?php if(isset($_SESSION['role']))
            {
                if($_SESSION['role'] == 'scan')
                {
                    $conn = mysqli_connect("localhost","root","","clinical_service");
                    $user = $_SESSION['username'];
                    $doctor_id =  "SELECT id FROM doctors WHERE  email = '$user'";
                    $result = mysqli_query($conn, $doctor_id);
                    while ($row = mysqli_fetch_assoc($result))
                    {
                        $doctor_id = $row['id'];
                        // $type = $row['profession'];
                    }
                   /* $getpatients =  "SELECT p.* FROM patient_appointments as p INNER  JOIN doctors as d ON p.doctor_id = d.id WHERE p.doctor_id = $doctor_id";
                    $result = mysqli_query($conn, $getpatients);*/
                    ?>


            <li class="nav-item  ">
                <a href="<?php echo 'doctorPersonalInfo.php?value='.$user; ?>" class="nav-link ">
                    <i class="icon-paper-plane"></i>
                    <span class="title">Scan Information</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="<?php echo 'scanAppointments.php?type=scan'; ?>" class="nav-link ">
                    <i class="icon-paper-plane"></i>
                    <span class="title">Appointments</span>
                </a>
            </li>
         <!--            <li class="nav-item  ">
                        <a href="<?php echo 'patient_prescription.php?id='.$doctor_id;?> " class="nav-link ">
                            <i class="icon-paper-plane"></i>
                            <span class="title">Prescriptions</span>
                        </a>
                    </li> -->
                    <?php
                }
            }
            ?>
<!-- ................ -->
<?php if(isset($_SESSION['role']))
            {
                if($_SESSION['role'] == 'lab')
                {
                    $conn = mysqli_connect("localhost","root","","clinical_service");
                    $user = $_SESSION['username'];
                    $doctor_id =  "SELECT id FROM doctors WHERE  email = '$user'";
                    $result = mysqli_query($conn, $doctor_id);
                    while ($row = mysqli_fetch_assoc($result))
                    {
                        $doctor_id = $row['id'];
                        // $type = $row['department_name'];

                    }
                   /* $getpatients =  "SELECT p.* FROM patient_appointments as p INNER  JOIN doctors as d ON p.doctor_id = d.id WHERE p.doctor_id = $doctor_id";
                    $result = mysqli_query($conn, $getpatients);*/
                    ?>


            <li class="nav-item  ">
                <a href="<?php echo 'doctorPersonalInfo.php?value='.$user; ?>" class="nav-link ">
                    <i class="icon-paper-plane"></i>
                    <span class="title">Lab Information</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="<?php echo 'labAppointments.php?type=lab'; ?>" class="nav-link ">
                    <i class="icon-paper-plane"></i>
                    <span class="title">Appointments</span>
                </a>
            </li>
         <!--            <li class="nav-item  ">
                        <a href="<?php echo 'patient_prescription.php?id='.$doctor_id;?> " class="nav-link ">
                            <i class="icon-paper-plane"></i>
                            <span class="title">Prescriptions</span>
                        </a>
                    </li> -->
                    <?php
                }
            }
            ?>
<!-- ............... -->


  <!--   User Role     -->
            <?php
            // $usernames=$_GET['value'];   
             if(isset($_SESSION['role']))
            {
            if($_SESSION['role'] == 'user')
            {
                $user = $_SESSION['username'];
            ?>

            <li class="nav-item  ">
                <a href="<?php echo 'userPersonalInfo.php?value='.$user; ?>" class="nav-link ">
                    <i class="icon-paper-plane"></i>
                    <span class="title">User/Patient Details</span>
                </a>
            </li>
                <?php
            }
            }
            ?>


            <li class="nav-item  ">
                <a href="resetpassword.php" class="nav-link ">
                    <i class="icon-key"></i>
                    <span class="title">Reset Password</span>
                </a>
            </li>
             <!--     <li class="nav-item  ">
                <a href="<?php echo 'precription_view.php?value='.$usernames; ?>" class="nav-link ">
                    <i class="icon-key"></i>
                    <span class="title">View Prescription</span>
                </a>
            </li> -->
            <li class="nav-item  ">
                <a href="<?php echo 'admin_php/logout.php' ;?>" class="nav-link ">
                    <i class="fa fa-sign-out"></i>
                    <span class="title">Logout</span>
                </a>
            </li>

        </ul>
        <!-- END SIDEBAR MENU -->
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->
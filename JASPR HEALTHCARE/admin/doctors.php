
<html xmlns="http://www.w3.org/1999/html"><head><title>Admin | Doctors Page
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
                            <a href="#">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span>Doctors</span>
                        </li>
                    </ul>

                </div>
                <!-- END PAGE BAR -->
                <div class="row" style="margin-top: 19px;margin-bottom: 20px;">
                    <div class="col-md-6" style="margin-top: 6px;font-size: 20px;">
                        <div class="caption font-dark">
                            <i class="icon-list font-dark"></i>
                            <span class="caption-subject bold uppercase"> Doctors</span>
                        </div>
                    </div>

                    <div class="col-md-6" >
                        <div class="btn-group">
                            <a href="addTime.php" id="sample_editable_1_new" class="btn sbold green"> Add Doctor Time
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                        <div class="btn-group pull-right">
                            <a href="addDoctor.php" id="sample_editable_1_new" class="btn sbold green"> Add Doctor Profile
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6">

                    </div>
                </div>

                <!-- END PAGE HEADER-->
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                        <div class="portlet light bordered">
                           
                            <div class="portlet-body">

                                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                    <thead>
                                    <tr>

                                        <th>No</th>
                                        <th>Doctor Image </th>
                                        <th> Doctor Name </th>
                                        <th> Department</th>
                                        <th> View </th>
                                        <th> Delete </th>
                                    </tr>
                                    </thead>
                                  
                                    <tbody>
                                    <?php
                                    include 'admin_php/doctor.php';
                                    if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <tr id="service_<?php echo $row["id"]; ?>">
                                        <td><?php echo $row["id"]; ?></td>
                                        <td>
                                            <img class="center-block" src="<?php echo 'uploads/doctor_images/'.$row["doctor_image"]; ?>"
                                                 width="50" height="50"
                                                 alt="<?php echo $row["doctor_name"]; ?>">
                                        </td>
                                        <td><?php echo $row["doctor_name"]; ?> </td>
                                        <td><?php echo $row["department_name"]; ?> </td>



                                        <td>
                                                <a href="<?php echo 'doctorDetails.php?id='.$row["id"]; ?>"  name="viewUpdateDoctor"
                                                         class="btn btn-xs btn-info margin-bottom-5"><i class="fa fa-eye"></i> View </a>

                                        </td>
                                        <td>
                                            <a href="<?php echo 'admin_php/doctor.php?id='.$row["id"]; ?>" type="button" id="button_delete_doctor<?php echo $row["id"]; ?>" rel="<?php echo $row["id"];  ?>"
                                                    data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>"
                                                    class="btn btn-xs btn-danger deleteDoctor"><i class="fa fa-trash-o"></i> Delete
                                            </a>
                                        </td>
                                    </tr>

                                        <?php
                                        }
                                        }
                                        else
                                        {
                                            echo "0 results";
                                        }
                                        ?>
                                    </tbody>
                                </table>
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
       function changeProductStatus(product_id,status) {
           $.ajax({
               url: 'changeproductstatus',
               type: 'get',
               data: {product_id: product_id, status: status},
               beforeSend: function () {
                   $('#button_change_status'+product_id).button('loading')
                   $('.alert').alert('close');
               },
               complete: function () {
                   $('#button_change_status'+product_id).button('reset')
               },

               success: function (response) {
                   $('#status_'+product_id).html(response);
               }
           })
       }

        $('.deleteProduct').click(function() {
           var product_id = $(this).attr('rel');
            $.ajax({
                url: 'deleteProduct',
                type: 'get',
                data: {product_id: product_id, status: status},
                beforeSend: function () {
                    $('#button_delete_product'+product_id).button('loading')
                    $('.alert').alert('close');
                },
                complete: function () {
                    $('#button_delete_product'+product_id).button('reset')
                },

                success: function (response) {
                    if(response.success == 'success') {
                        $('#product_'+product_id).hide();

                    }
                }
            })
        });

    </script>
</body>
</html>
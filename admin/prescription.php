<html><head><title>
        Admin | Prescription

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
                        <span>Prescriptions</span>
                    </li>
                </ul>

            </div>
            <!-- END PAGE BAR -->

            <!-- END PAGE HEADER-->
            <div class="row" style="margin-top: 19px;margin-bottom: 20px;">
                <div class="col-md-6" style="margin-top: 6px;font-size: 20px;">
                    <div class="caption font-dark">
                        <span class="caption-subject bold uppercase">
                            <i class="icon-list font-dark"></i>Prescriptions</span>
                    </div>
                </div>
               
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet light bordered">
                        <div class="portlet-body">
                            <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Patient Name</th>
                                    <th> Prescription </th>
                                    <th> View  </th>
                                   
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                include 'admin_php/prescription.php';
                                if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>

                                    <td><?php echo $row['patient_name']; ?></td>
                                    <td>
                                        <?php echo substr($row['prescription'],0,20); ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo 'prescriptionDetails.php?id='.$row["id"]; ?>" type="button" class="btn btn-xs btn-info margin-bottom-5"><i class="fa fa-eye"></i> View</a>
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

        $('.deleteSubcategory').click(function() {
            var subcategory_id = $(this).attr('rel');
            $.ajax({
                url: 'deleteSubcategory',
                type: 'get',
                data: {subcategory_id: subcategory_id, status: status},
                beforeSend: function () {
                    $('#button_delete_product'+subcategory_id).button('loading')
                    $('.alert').alert('close');
                },
                complete: function () {
                    $('#button_delete_product'+subcategory_id).button('reset')
                },

                success: function (response) {
                    if(response.success == 'success') {
                        $('#product_'+subcategory_id).hide();

                    }
                }
            })
        });

    </script>
@endsection
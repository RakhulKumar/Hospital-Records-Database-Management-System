
<html><head><title>
    Admin | Edit Blog Details

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
                        <span>Blog Details</span>
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
                                    <i class="fa fa-shopping-cart"></i>Edit Blog Details
                                </div>

                            </div>
                            <div class="portlet-body">
                                <div class="tabbable-bordered">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#tab_general" data-toggle="tab">Edit Blog Details </a>
                                        </li>

                                        <li>
                                            <a href="#tab_reviews" data-toggle="tab">Reviews </a>
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
                                                        $view =  "SELECT * FROM blog WHERE id = $id";
                                                        $viewBlog = mysqli_query($conn,$view);

                                                        // output data of each row
                                                        while ($row = mysqli_fetch_assoc($viewBlog))
                                                        {
                                                            ?>
                                                    <div class="col-md-6">

                                                        <div class="portlet light bordered">
                                                            <div class="portlet-title">
                                                                <div class="caption font-red-sunglo">
                                                                    <span class="caption-subject bold uppercase">Update Blog Details</span>
                                                                </div>


                                                            </div>
                                                            <form name="editBlogForm" method="post" action="admin_php/review.php" enctype="multipart/form-data">
                                                                <div class="form-body">
                                                                    <div class="form-group form-md-line-input has-info">
                                                                        <div class="input-group">

                                                                            <input type="text" name="blog_title" class="form-control" placeholder="Title"
                                                                                   value="<?php echo $row['title']; ?>" required>
                                                                            <label for="form_control_1">Title</label>
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-file-text-o"></i>
                                                    </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group form-md-line-input has-info">
                                                                        <div class="input-group">

                                                                            <input type="text" name="description" class="form-control"
                                                                                   placeholder="Description"
                                                                                   value="<?php echo $row['description']; ?>" required>
                                                                            <label for="form_control_1">Description</label>
                                              <span class="input-group-addon">
                                                        <i class="fa fa-file-text-o"></i>
                                                    </span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group form-md-line-input has-info">
                                                                        <div class="input-group">
                                                                            <select class="table-group-action-input form-control input-medium"
                                                                                    name="blog_status" required>
                                                                                <option value="<?php echo ucwords($row['status']); ?>">-- <?php echo ucwords($row['status']); ?> --

                                                                                </option>
                                                                                <option value="enable" <?php if(isset($row['status']))
                                                                                { if($row['status'] == 'enable')
                                                                                { echo 'selected=selected'; } } ?> >
                                                                                    Enable</option>
                                                                                <option value="disable" <?php if(isset($row['status']))
                                                                                { if($row['status'] == 'disable')
                                                                                { echo 'selected=selected'; } } ?>>
                                                                                    Disable</option>

                                                                            </select>
                                                                            <label for="form_control_1">Status</label>
                                              <span class="input-group-addon">
                                                        <i class="fa fa-file-text-o"></i>
                                                    </span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-actions noborder">
                                                                        <input type="hidden" name="blog_id" value="<?php echo $row['id']; ?>">
                                                                        <button type="submit" name="updateBlog"
                                                                           data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>"
                                                                           class="btn blue"><i class="fa fa-arrow-circle-right"></i> Update </button>

                                                                        <!-- <input type="hidden" name="department_id" value="{{ $subcategory->id }}" />-->
                                                                    </div>

                                                                </div>
                                                            </form>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6">

                                                        <!-- BEGIN SAMPLE FORM PORTLET-->
                                                        <div class="portlet light bordered">
                                                            <div class="portlet-title">
                                                                <div class="caption font-red-sunglo"><span>Update Blog Image</span>
                                                                </div>

                                                            </div>
                                                            <div class="portlet-body form">
                                                                <form role="form" name="updateBlogImage" method="post" action="admin_php/review.php" enctype="multipart/form-data">
                                                                    <div class="form-group form-md-line-input has-info">
                                                                        <div class="input-group">
                                                                            <label class="form_control_1">Blog Image:
                                                                                <span class="required"> * </span>
                                                                            </label>
                                                                            <br />
                                                                            <div id="updated_blog_image">
                                                                                <!--<img width="100" height="100" src="frontend/uploads/subcategory_images/'.$subcategory->subcategory_image) }}" />-->
                                                                                <img width="100" height="100" name="blog_image" src="<?php echo 'uploads/blog_images/'.$row['blog_image']; ?>" />
                                                                            </div>
                                                                            <br />

                                                                            <input type="file"  name="service_image" class="table-group-action-input form-controlm" />
                                                                            <p class="text-success">Image Size:870 X 300 pixels</p>



                                                                        </div>
                                                                    </div>

                                                                    <div class="form-actions noborder">
                                                                        <input type="hidden" name="blog_id" value="<?php echo $row['id']; ?>">
                                                                        <button type="submit" name="updateBlogImage"
                                                                                data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>"
                                                                                class="btn blue"><i class="fa fa-arrow-circle-right"></i> Update </button>
                                                                    </div>
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


                                                                </form>
                                                            </div>


                                                        </div>
                                                        <!-- END SAMPLE FORM PORTLET-->

                                                    </div>
                                                    <?php
                                                    }
                                                    }
                                                    else
                                                    {
                                                        echo "0 results";
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane " id="tab_reviews">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                                        <div class="portlet light bordered">
                                                            <div class="portlet-title">
                                                                <div class="caption font-dark">
                                                                    <i class="fa fa-paper-plane font-dark"></i>
                                                                    <span class="caption-subject bold uppercase"> Review</span>
                                                                </div>

                                                            </div>
                                                            <div class="portlet-body">

                                                                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>Name</th>
                                                                        <th> Email </th>
                                                                        <th> Status</th>
                                                                        <th> Actions </th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php
                                                                    if(isset($_GET['id']))
                                                                    {
                                                                    $viewBlogDetails =  "SELECT * FROM blog_details WHERE blog_id = $id";
                                                                    $reviews = mysqli_query($conn,$viewBlogDetails);
                                                                    // output data of each row
                                                                    while($row = mysqli_fetch_assoc($reviews)) {
                                                                    ?>

                                                                    <tr>
                                                                        <td><?php echo $row['id']; ?></td>
                                                                        <td><?php echo $row['name']; ?></td>
                                                                        <td><?php echo $row['email']; ?></td>
                                                                        <td>
                                                                           <!-- <select class="table-group-action-input form-control input-medium"
                                                                                    name="blog_detail_status"  id="blog_detail_status" onchange="change_blog_status('<?php /*echo $row['id']; */?>',this.value)">
                                                                                <option value="<?php /*echo ucwords($row['status']); */?>">-- <?php /*echo ucwords($row['status']); */?> --

                                                                                </option>
                                                                                <option value="Approved" <?php /*if(isset($row['status']))
                                                                                { if($row['status'] == 'Approved')
                                                                                { echo 'selected=selected'; } } */?> >
                                                                                    Approved</option>
                                                                                <option value="disable" <?php /*if(isset($row['status']))
                                                                                { if($row['status'] == 'Not Approved')
                                                                                { echo 'selected=selected'; } } */?>>
                                                                                    Not Approved</option>

                                                                            </select>-->
                                                                            <?php echo $row['status']; ?></td>
                                                                        <td>
                                                                            <a href="<?php echo 'reviewDetails.php?id='.$row["id"]; ?>" class="btn btn-xs btn-info"><i class="fa fa-eye"></i> View</a>
                                                                            <a href="<?php echo 'admin_php/review.php?id='.$row["id"]; ?>" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i> Delete</a>
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
    <script>

        /*changing product Status*/
        function change_blog_status(id,status)
        {
            $.ajax({
                    url: '<?php echo 'admin_php/review.php' ;?>',
                    type: 'post',
                    data: {id:id,status:status},
                    beforeSend: function ()
                    {
                        //console(3);
                        $('.response').button('reset');
                        $('#blog_detail_status'+id).button('loading');
                    },
                    success: function (response)
                    {
                        if(response)
                        {
                            $('#blog_detail_status'+id).html("<i class='fa fa-check '></i> ");
                        }
                    }
                }
            );
        }
    </script>
    {{--text editor--}}
    <script src="linecontrol_editor/editor.js"></script>

</body>

</html>





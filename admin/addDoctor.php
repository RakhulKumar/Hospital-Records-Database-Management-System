
<html>
<head>
    <title>
    Admin | Add Doctor Profile

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
    
    <link href="linecontrol_editor/editor.css" type="text/css" rel="stylesheet"/>
</head>
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
                        <span>Add Doctor</span>
                    </li>
                </ul>

            </div>
            <!-- END PAGE BAR -->
            <!-- BEGIN PAGE TITLE-->
            <div class="caption font-dark" style="margin-top: 6px;font-size: 20px;">
                <i class="icon-list font-dark"></i>
                <span class="caption-subject bold uppercase">Add Doctor</span>
                <small>Add New Doctor Here</small>
            </div>

            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal form-row-seperated"  method="post" action="admin_php/doctor.php"
                          enctype="multipart/form-data">
                        <div class="portlet">

                            <div class="portlet-body">
                                <div class="tabbable-bordered">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#tab_general" data-toggle="tab"> Doctor Informations </a>
                                        </li>

                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_general">
                                            <div class="form-body">
                                                <div class="row">

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label"> Doctor Name:
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-10">
                                                                <input type="text" class="form-control" name="doctor_name" placeholder="Doctor Name" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label"> Department Name:
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-10">
                                                                <input type="text" class="form-control" name="department_name" placeholder="Department Name" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">

                                                            <label class="col-md-2 control-label">Doctor Image:
                                                                <span class="required">* </span>
                                                            </label>
                                                            <div class="col-md-10">
                                                                <input type="file"  name="doctor_image" class="table-group-action-input form-controlm" required/>
                                                                <p class="text-success">Image Size:270 X 270 pixels</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">

                                                            <label class="col-md-2 control-label">Description:
                                                                <span class="required">* </span>
                                                            </label>
                                                            <div class="col-md-10">
                                                                <input type="text"  name="description"  class="form-control" placeholder="Description" required/>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Education
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-10">
                                                                <input class="form-control" name="education" placeholder="Education" required>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-12">
                                                        <div class="form-group">

                                                            <label class="col-md-2 control-label">Experience:
                                                                <span class="required">* </span>
                                                            </label>
                                                            <div class="col-md-10">
                                                                <input type="number"  name="experience"
                                                                       class="form-control"  placeholder="Experience" required/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">

                                                            <label class="col-md-2 control-label">Profession
                                                                <span class="required">* </span>
                                                            </label>
                                                            <div class="col-md-10">
                                                                <input type="text"  name="profession" class="form-control" placeholder="Profession" required/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">

                                                            <label class="col-md-2 control-label">Address:
                                                                <span class="required">* </span>
                                                            </label>
                                                            <div class="col-md-10">
                                                                <input type="text"  name="address" class="form-control" placeholder="Address" required/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">

                                                            <label class="col-md-2 control-label">Mobile
                                                                <span class="required">* </span>
                                                            </label>
                                                            <div class="col-md-10">
                                                                <input type="number"  name="mobile" class="form-control" placeholder="Mobile" required/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">

                                                            <label class="col-md-2 control-label">Email:
                                                                <span class="required">* </span>
                                                            </label>
                                                            <div class="col-md-10">
                                                                <input type="email"  name="email" class="form-control" placeholder="Email" required/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">

                                                            <label class="col-md-2 control-label">Password:
                                                                <span class="required">* </span>
                                                            </label>
                                                            <div class="col-md-10">
                                                                <input type="password"  name="password" class="form-control" placeholder="Password" required/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">

                                                            <label class="col-md-2 control-label">Skype
                                                                <span class="required">* </span>
                                                            </label>
                                                            <div class="col-md-10">
                                                                <input type="email"  name="skype" class="form-control" placeholder="Skype" required/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">

                                                            <label class="col-md-2 control-label">Working Days:
                                                                <span class="required">* </span>
                                                            </label>
                                                            <div class="col-md-10">
                                                                <input type="text"  name="working_days" class="form-control" placeholder="Working Days" required/>
                                                            </div>
                                                        </div>
                                                    </div>
<!--                                                    <div class="col-md-12">-->
<!--                                                        <div class="form-group">-->
<!---->
<!--                                                            <label class="col-md-2 control-label">Working Time:-->
<!--                                                                <span class="required">* </span>-->
<!--                                                            </label>-->
<!--                                                            <div class="col-md-2">-->
<!--                                                                <input type="time"  name="working_time" class="table-group-action-input form-controlm" placeholder="Working Time" required/>-->
<!--                                                            </div>-->
<!--                                                            <div class="col-md-2">-->
<!--                                                                <input type="time"  name="working_time2" class="table-group-action-input form-controlm" placeholder="Working Time" required/>-->
<!--                                                            </div>-->
<!--                                                            <div class="col-md-2">-->
<!--                                                                <input type="time"  name="working_time3" class="table-group-action-input form-controlm" placeholder="Working Time" required/>-->
<!--                                                            </div>-->
<!--                                                            <div class="col-md-2">-->
<!--                                                                <input type="time"  name="working_time4" class="table-group-action-input form-controlm" placeholder="Working Time" required/>-->
<!--                                                            </div>-->
<!--                                                            <div class="col-md-2">-->
<!--                                                                <input type="time"  name="working_time5" class="table-group-action-input form-controlm" placeholder="Working Time" required/>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                    </div>-->

                                                <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Status:
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-10">
                                                                <select class="table-group-action-input form-control input-medium" name="status" required>
                                                                    <option value="">-- Select Status --</option>
                                                                    <option>Available</option>
                                                                    <option>Not Available</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--buttons area start-->
                                                    <div class="col-md-12">
                                                        <div class="form-actions noborder">
                                                            <!--<a href="doctors.php" class="btn red"><i class="fa fa-arrow-circle-right"></i> Add Doctor</a>-->
                                                            <button type="submit" name="addDoctor"
                                                                    data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>"
                                                                    class="btn blue pull-right"><i class="fa fa-arrow-circle-right"></i> Add Doctor </button>

                                                        </div>
                                                        <?php
                                                        if(isset($_GET['success']))
                                                        {
                                                            ?>
                                                            <div class="alert-success" style="height:34px;">
                                                                <p class="error_message" style="text-align: center;"> <?php echo 'New Record added successfully !'; ?></p>
                                                            </div>

                                                            <?php
                                                        }
                                                        elseif(isset($_GET['error']))
                                                        {
                                                            ?>
                                                            <div class="alert-danger" style="height:34px;">
                                                                <p class="error_message" style="text-align: center;"> <?php echo 'There is an error in adding your record !'; ?></p>
                                                            </div>
                                                            <?php
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

                    </form>
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
    <script src="global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script src="global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script src="global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
    <script src="global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script>
    <script src="global/plugins/plupload/js/plupload.full.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="global/scripts/app.min.js" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="pages/scripts/ecommerce-products-edit.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <script src="layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
    <script src="layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
    <script src="layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
    <!-- END THEME LAYOUT SCRIPTS -->
    <script>
       
            $(document).on('submit', '#addProductForm', function (e) {
                e.preventDefault();
                $.ajax({
                    url: 'submitAddProduct',
                    type: 'post',
                    data: new FormData(this),
                    processData: false,
                    cache: false,
                    contentType: false,
                    beforeSend: function () {
                        $('#button_add_product').button('loading')
                        $('.alert').alert('close');
                    },
                    complete: function () {
                        $('#button_add_product').button('reset')
                    },
                    success: function (response) {
                        $('#addProductForm')[0].reset();
                        $('.done').html('<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                                '<button type="button" class="close" data-dismiss="alert">'+
                                '<span aria-hidden="true">&times;</span> </button> ' +
                                '<span>'+response.success+'</div>'
                        );
                        $('#briefDescriptionUpdated').hide();
                    },
                    error:function(response) {
                        obj=JSON.parse(response.responseText);
                        $('.done').html('<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                                '<button type="button" class="close" data-dismiss="alert">'+
                                '<span aria-hidden="true">&times;</span> </button> ' +
                                '<span>'+obj.error+'</div>'
                        );
                    }
                })
            })

        });

    </script>
    {{--text editor--}}
    <script src="linecontrol_editor/editor.js"></script>


    <script>
        function addBriefDescription() {

            var briefDescriptionTitle = $('#briefDescriptionTitle').val();
            var briefDescritpionContent = $('#txtEditor').Editor('getText');
            if(briefDescriptionTitle == '') {
                $('.responseBriefDescription').html('<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                        '<button type="button" class="close" data-dismiss="alert">'+
                        '<span aria-hidden="true">&times;</span> </button> ' +
                        '<span>* Please Enter Description title</div>'
                );
                return false;
            }
            if(briefDescritpionContent == '') {
                $('.responseBriefDescription').html('<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                        '<button type="button" class="close" data-dismiss="alert">'+
                        '<span aria-hidden="true">&times;</span> </button> ' +
                        '<span>* Please Enter Description Content</div>'
                );
                return false;
            }
            $.ajax({
                url: 'addBriefDescription',
                type: 'get',
                dataType: "json",
                data: { descriptionTitle:briefDescriptionTitle,descriptionContent:briefDescritpionContent },
                beforeSend: function () {
                    $('#buttonAddBriefDescription').button('loading')
                    $('.alert').alert('close');
                },
                complete: function () {
                    $('#buttonAddBriefDescription').button('reset')
                },
                success: function (response) {
                    $('#briefDescriptionTitle').val('');
                    $('#txtEditor').Editor('setText','');
                    $('.responseBriefDescription').html('<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                            '<button type="button" class="close" data-dismiss="alert">'+
                            '<span aria-hidden="true">&times;</span> </button> ' +
                            '<span>'+response.success+'</div>'
                    );
                    $('#briefDescriptionUpdated').html(response.description);
                },
                error:function(response) {
                    obj=JSON.parse(response.responseText);
                    $('.responseBriefDescription').html('<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                            '<button type="button" class="close" data-dismiss="alert">'+
                            '<span aria-hidden="true">&times;</span> </button> ' +
                            '<span>'+obj.error+'</div>'
                    );
                }
            })



        }
       $(document).on('click','.deleteDescription',function() {
           title = $(this).attr('rel');
           $.ajax({
               url: 'deleteDescription',
               type: 'get',
               dataType: "json",
               data: { descriptionTitle:title },
               beforeSend: function () {
                   $('#button_delete_description'+title).button('loading')
                   $('.alert').alert('close');
               },
               complete: function () {
                   $('#button_delete_description'+title).button('reset')
               },
               success: function (response) {
                   if(response.success == 'success') {
                       $('.description_'+title).remove();
                   }


                   $('.responseBriefDescription').html('<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                           '<button type="button" class="close" data-dismiss="alert">'+
                           '<span aria-hidden="true">&times;</span> </button> ' +
                           '<span>'+response.success+'</div>'
                   );
                   $('#briefDescriptionUpdated').html(response.description);
               },
               error:function(response) {
                   obj=JSON.parse(response.responseText);
                   $('.responseBriefDescription').html('<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                           '<button type="button" class="close" data-dismiss="alert">'+
                           '<span aria-hidden="true">&times;</span> </button> ' +
                           '<span>'+obj.error+'</div>'
                   );
               }
           })
       });


        $(document).ready(function () {
            $("#txtEditor").Editor();

        });
    </script>
</body>
</html>

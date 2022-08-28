<html><head><title>
    Admin |  Add Blog

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
                          <span>Blog</span>
                      </li>
                  </ul>
                  <div class="page-toolbar">
                      <div class="btn-group pull-right">
                          <a href="blog.php" type="button" class="btn green btn-sm btn-outline"> <i class="fa fa-long-arrow-left"></i> Back

                          </a>

                      </div>
                  </div>
              </div>
              <!-- END PAGE BAR -->
              <!-- BEGIN PAGE TITLE-->

              <!-- END PAGE TITLE-->
              <!-- END PAGE HEADER-->


              <div class="row">


                  <div class="col-md-6">

                      <!-- BEGIN SAMPLE FORM PORTLET-->
                      <div class="portlet light bordered">
                          <div class="portlet-title">
                              <div class="caption font-red-sunglo">Add Blog
                              </div>

                          </div>
                          <div class="portlet-body form">
                              <form role="form" name="addBlog" method="post" action="admin_php/review.php" enctype="multipart/form-data">
                                  <div class="form-body">
                                      <div class="form-group form-md-line-input has-info">
                                          <div class="input-group">

                                              <input type="text" name="blog_title" class="form-control" placeholder="Blog Title" required>
                                              <label for="form_control_1">Title</label>
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-file-text-o"></i>
                                                    </span>
                                          </div>
                                      </div>
                                      <div class="form-group form-md-line-input has-info">
                                          <div class="input-group">

                                              <input type="text" name="description" class="form-control" placeholder="Description" required>
                                              <label for="form_control_1">Description</label>
                                              <span class="input-group-addon">
                                                        <i class="fa fa-file-text-o"></i>
                                                    </span>
                                          </div>
                                      </div>
                                      <div class="form-group form-md-line-input has-info">
                                          <div class="input-group">
                                              <label class="form_control_1">Blog Image:
                                                  <span class="required"> * </span>
                                              </label>
                                              <input type="file"  name="blog_image" class="table-group-action-input form-controlm" required/>
                                              <p class="text-success">Image Size: 870 X 300x pixels</p>

                                          </div>
                                      </div>

                                      <div class="form-actions noborder">
                                          <input type="hidden" value="admin" name="posted_by">
                                          <button  type="submit" class="btn blue " name="addBlog">
                                              <i class="fa fa-arrow-circle-right"></i> Add
                                          </button>

                                      </div>

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
                  <div class="col-md-12">
                      <div class="subcategoryResponse"></div>

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
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
        <script src="layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    <script>
        $(document).ready(function(){
            $(document).on('submit', '#addCategoryForm', function (e) {
                e.preventDefault();
                $.ajax({
                    url: 'insertcategory',
                    type: 'post',
                    data: new FormData(this),
                    processData: false,
                    cache: false,
                    contentType: false,
                    beforeSend: function () {
                        $('#button_add_category').button('loading')
                        $('.alert').alert('close');
                    },
                    complete: function () {
                        $('#button_add_category').button('reset')
                    },
                    success: function (response) {
                        $('#addCategoryForm')[0].reset();
                        $('.categoryResponse').html('<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                                '<button type="button" class="close" data-dismiss="alert">'+
                                '<span aria-hidden="true">&times;</span> </button> ' +
                                '<span>'+response.success+'</div>'
                        );
                        $('.editCategories').html(response.updateCategoryAndSubcategory);
                        $('#categories').html(response.updateCategories);
                    },
                    error:function(response) {
                        obj=JSON.parse(response.responseText);
                        $('.categoryResponse').html('<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                                '<button type="button" class="close" data-dismiss="alert">'+
                                '<span aria-hidden="true">&times;</span> </button> ' +
                                '<span>'+obj.error+'</div>'
                        );
                    }
                })
            })
            $(document).on('submit', '#addSubcategoryForm', function (e) {
                e.preventDefault();
                $.ajax({
                    url: 'submitAddSubcategory',
                    type: 'post',
                    data: new FormData(this),
                    processData: false,
                    cache: false,
                    contentType: false,
                    beforeSend: function () {
                        $('#button_add_subcategory').button('loading')
                        $('.alert').alert('close');
                    },
                    complete: function () {
                        $('#button_add_subcategory').button('reset')
                    },
                    success: function (response) {
                        $('#addSubcategoryForm')[0].reset();
                        $('.subcategoryResponse').html('<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                                '<button type="button" class="close" data-dismiss="alert">'+
                                '<span aria-hidden="true">&times;</span> </button> ' +
                                '<span>'+response.success+'</div>'
                        );
                        $('.editCategories').html(response.updateCategoryAndSubcategory);
                    },
                    error:function(response) {
                        obj=JSON.parse(response.responseText);
                        $('.subcategoryResponse').html('<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                                '<button type="button" class="close" data-dismiss="alert">'+
                                '<span aria-hidden="true">&times;</span> </button> ' +
                                '<span>'+obj.error+'</div>'
                        );
                    }
                })
            })
            $(document).on('submit', '.editCategoryForm', function (e) {
                e.preventDefault();
                var id = $(this).find('input[name="category_id"]').val();
                $.ajax({
                    url: 'editcategory',
                    type: 'post',
                    data: new FormData(this),
                    processData: false,
                    cache: false,
                    contentType: false,
                    beforeSend: function () {
                        $('#button_edit_category'+id).button('loading')
                        $('.alert').alert('close');
                    },
                    complete: function () {
                        $('#button_edit_category'+id).button('reset')
                    },
                    success: function (response) {
                        $('.done').html('<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                                '<button type="button" class="close" data-dismiss="alert">'+
                                '<span aria-hidden="true">&times;</span> </button> ' +
                                '<span>'+response.success+'</div>'
                        );
                        $('#categories').html(response.updateCategories);
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
            $(document).on('submit', '.editSubcategoryForm', function (e) {
                e.preventDefault();
                $('.done').empty();
                var id = $(this).find('input[name="subcategory_id"]').val();
                $.ajax({
                    url: 'editsubcategory',
                    type: 'post',
                    data: new FormData(this),
                    processData: false,
                    cache: false,
                    contentType: false,
                    beforeSend: function () {
                        $('#button_edit_subcategory'+id).button('loading')
                        $('.alert').alert('close');
                    },
                    complete: function () {
                        $('#button_edit_subcategory'+id).button('reset')
                    },
                    success: function (response) {
                        $('.done').html('<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                                '<button type="button" class="close" data-dismiss="alert">'+
                                '<span aria-hidden="true">&times;</span> </button> ' +
                                '<span>'+response.success+'</div>'
                        );
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
            $(document).on('click' ,'.deleteCategory' ,function() {
                var category_id=$(this).attr('rel');
                $.ajax({
                    url: 'deletecategory',
                    type: 'get',
                    data: {category_id:category_id},
                    beforeSend: function () {
                        $('#button_delete_category'+category_id).button('loading')
                        $('.alert').alert('close');
                    },
                    complete: function () {
                        $('#button_delete_category'+category_id).button('reset')
                    },

                    success: function (response) {
                        $('.done').html('<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                                '<button type="button" class="close" data-dismiss="alert">'+
                                '<span aria-hidden="true">&times;</span> </button> ' +
                                '<span>'+response.success+'</div>'
                        );
                        $('#remove_category_'+category_id).hide();
                        $('#categories').html(response.updateCategories);
                    }
                })

            });
            $(document).on('click','.deleteSubcategory',function() {
                $('.done').empty();
                var subcategory_id=$(this).attr('rel');

                $.ajax({
                    url: 'deletesubcategory',
                    type: 'get',
                    data: {subcategory_id:subcategory_id},
                    beforeSend: function () {
                        $('#button_delete_subcategory'+subcategory_id).button('loading')
                        $('.alert').alert('close');
                    },
                    complete: function () {
                        $('#button_delete_subcategory'+subcategory_id).button('reset')
                    },

                    success: function (response) {
                        $('.done').html('<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                                '<button type="button" class="close" data-dismiss="alert">'+
                                '<span aria-hidden="true">&times;</span> </button> ' +
                                '<span>'+response.success+'</div>'
                        );
                        $('#remove_subcategory_'+subcategory_id).hide();
                    }
                })

            });
        });
    </script>
</body>
</html>
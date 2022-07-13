<?php
?>

<<html><head><title>
        Admin | Edit Services

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
                          <a href="dashboard.php">Home</a>
                          <i class="fa fa-circle"></i>
                      </li>
                      <li>
                          <span>Service</span>
                      </li>
                  </ul>
                  <div class="page-toolbar">
                      <div class="btn-group pull-right">
                          <a href="services.php" type="button" class="btn green btn-sm btn-outline"> <i class="fa fa-long-arrow-left"></i> Back

                          </a>

                      </div>
                  </div>
              </div>
              <!-- END PAGE BAR -->
              <!-- BEGIN PAGE TITLE-->

              <!-- END PAGE TITLE-->
              <!-- END PAGE HEADER-->

              <div class="row">
                  <?php
                  if(isset($_GET['id']))
                  {
                      $id = $_GET['id'];
                      $conn =new mysqli('localhost', 'root', '', 'clinical_service');
                      $view =  "SELECT * FROM services WHERE id = $id";
                      $viewService = mysqli_query($conn,$view);

                      // output data of each row
                      while ($row = mysqli_fetch_assoc($viewService))
                      {
                          ?>

                  <div class="col-md-6">

                      <!-- BEGIN SAMPLE FORM PORTLET-->
                      <div class="portlet light bordered">
                          <div class="portlet-title">
                              <div class="caption font-red-sunglo"><span>Update Service</span>
                              </div>

                          </div>
                          <div class="portlet-body form">
                              <form role="form" name="updateService" method="post" action="admin_php/services.php" enctype="multipart/form-data">

                                              <div class="form-body">

                                                  <div class="form-group form-md-line-input has-info">
                                                      <div class="input-group">

                                                          <input type="text" name="service_name" class="form-control"
                                                                 placeholder="Service"
                                                                 value="<?php echo $row['service_name']; ?>" required>
                                                          <label for="form_control_1">Service</label>
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

                                                  <div class="form-actions noborder">
                                                      <input type="hidden" value="<?php echo $row['id']; ?>" name="service_id">
                                                      <button type="submit"  name="updateService"
                                                              data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>"
                                                              class="btn blue"><i class="fa fa-arrow-circle-right"></i>
                                                          Update
                                                      </button>

                                                      <!-- <input type="hidden" name="department_id" value="{{ $subcategory->id }}" />-->
                                                  </div>

                                              </div>
                                  <?php
                                  if(isset($_GET['success']))
                                  {
                                      ?>
                                      <div class="alert-success" style="height:34px;">
                                          <p class="error_message" style="text-align: center;">
                                              <?php echo 'Updated Successfully !'; ?>
                                          </p>
                                      </div>

                                      <?php
                                  }
                                  elseif(isset($_GET['error']))
                                  {
                                      ?>
                                      <div class="alert-danger" style="height:34px;">
                                          <p class="error_message" style="text-align: center;">
                                              <?php echo 'Error in Update !'; ?>
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
                  <div class="col-md-6">

                      <!-- BEGIN SAMPLE FORM PORTLET-->
                      <div class="portlet light bordered">
                          <div class="portlet-title">
                              <div class="caption font-red-sunglo"><span>Update Service Image</span>
                              </div>

                          </div>
                          <div class="portlet-body form">
                              <form role="form" name="updateServiceImage" method="post" action="admin_php/services.php" enctype="multipart/form-data">

                                      <div class="form-group form-md-line-input has-info">
                                          <div class="input-group">
                                              <label class="form_control_1">Service Image:
                                                  <span class="required"> * </span>
                                              </label>
                                              <br />
                                              <div >
                                              <!--<img width="100" height="100" src="frontend/uploads/subcategory_images/'.$subcategory->subcategory_image) }}" />-->
                                                  <img width="100" height="100" name="service_image" src="<?php echo 'uploads/service_images/'.$row['service_image']; ?>" />
                                             </div>
                                              <br />

                                                  <input type="file"  name="service_image" class="table-group-action-input form-controlm" />
                                              <p class="text-success">Image Size:370 X 250 pixels</p>



                                          </div>
                                      </div>

                                      <div class="form-actions noborder">
                                          <input type="hidden" value="<?php echo $row['id']; ?>" name="service_id">
                                          <button type="submit" name="updateServiceImage"
                                                  data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>"
                                                  class="btn blue"><i class="fa fa-arrow-circle-right"></i> Update </button>
                                       <!--   <input type="hidden" name="_token" value="{{ Session::token() }}" />
                                          <input type="hidden" name="subcategory_id" value="{{ $subcategory->id }}" />-->
                                      </div>



                              </form>
                          </div>


                      </div>
                      <!-- END SAMPLE FORM PORTLET-->

                  </div>
                  <?php
                  }
                  }



                  ?>


              </div>
          </div>
          <!-- END CONTENT BODY -->
      </div>
      <!-- END CONTENT -->
@endsection
@section('scripts')
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
        <script src="js/formSubmit.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    <script>
        $(document).ready(function(){
            $(document).on('submit', '#updateSubcategory', function (e) {
                e.preventDefault();
                $.ajax({
                    url: 'submitUpdateSubcategory',
                    type: 'post',
                    data: new FormData(this),
                    processData: false,
                    cache: false,
                    contentType: false,
                    beforeSend: function () {
                        $('#button_update_subcategory').button('loading')
                        $('.alert').alert('close');
                    },
                    complete: function () {
                        $('#button_update_subcategory').button('reset')
                    },
                    success: function (response) {
                        $('.subcategoryResponse').html('<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                                '<button type="button" class="close" data-dismiss="alert">'+
                                '<span aria-hidden="true">&times;</span> </button> ' +
                                '<span>'+response.success+'</div>'
                        );


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
            $(document).on('submit', '#updateSubcategoryImage', function (e) {
                e.preventDefault();
                $.ajax({
                    url: 'submitUpdateSubcategoryImage',
                    type: 'post',
                    data: new FormData(this),
                    processData: false,
                    cache: false,
                    contentType: false,
                    beforeSend: function () {
                        $('#button_update_subcategory_image').button('loading')
                        $('.alert').alert('close');
                    },
                    complete: function () {
                        $('#button_update_subcategory_image').button('reset')
                    },
                    success: function (response) {
                        $('.subcategoryResponse').html('<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                                '<button type="button" class="close" data-dismiss="alert">'+
                                '<span aria-hidden="true">&times;</span> </button> ' +
                                '<span>'+response.success+'</div>'
                        );
                        $('#updated_subcategory_image').html('<img width="100" height="100" src="../../public/frontend/uploads/subcategory_images/'+response.updatedSubcategoryImage+'" />');

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

        });
    </script>
@endsection
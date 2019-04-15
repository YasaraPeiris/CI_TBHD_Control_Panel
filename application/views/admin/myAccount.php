<!-- <?php session_start();
 include '../checkSession.php';
?> -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CP :: My Account</title>
  <link rel="shortcut icon" href="../../assets/images/favicon.ico" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../assets/dist/css/AdminLTE.min.css">
   <link href="../../assets/dist/css/bootstrap-dialog.css" rel='stylesheet' type='text/css'/>
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../assets/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../assets/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../../assets/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../../assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../../assets/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../assets/plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link href="../../assets/dist/css/bootstrap-dialog.css" rel='stylesheet' type='text/css'/>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.2/css/fixedHeader.bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style type="text/css">
        table.dataTable tr.odd {
            font-size: 13px;
            font-weight: 200;
            background-color: #f8f8f8;
            color: #404040;
            font-family: -apple-system, "Helvetica Neue", Helvetica, "Segoe UI", Arial, sans-serif;
        }
        /* tr. not tr: */
        table.dataTable tr.even {
            font-size: 13px;
            font-weight: 200;
            background-color: white;
            color: #404040;
            font-family: -apple-system, "Helvetica Neue", Helvetica, "Segoe UI", Arial, sans-serif;
        }
        table.dataTable > tbody > tr.child span.dtr-title {
            text-align: left;

            float: left;
        }
        table.dataTable > tbody > tr.child span.dtr-data {
            text-align: right;

            float: right;
        }

        table.dataTable > tbody > tr.child ul.dtr-details {
            width: 50%;
        }

        table.dataTable > tbody > tr.child ul.dtr-details li {
            border-bottom: none !important;
            margin-bottom: 10px;
        }
    </style>
</head>
<body class="hold-transition skin-blue sidebar-mini" onload="">
    <?php ?>
<div class="wrapper">
    <header class="main-header">
    <!-- Logo -->
    <!-- Header Navbar: style can be found in header.less -->
    <?php include 'adminTopMost.php';?>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
<?php include 'adminSidebar.php';?>
   <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <!-- Main content -->
      <section class="content">
        <?php

        // if (!empty($_SESSION['alertDestMap'])) {
        //     echo "<div class='alert alert-info' style='margin-bottom: 0;'><strong>Alert! </strong> ".$_SESSION['alertDestMap']."</div>";
        //     unset($_SESSION['alertDestMap']);
        // }
        // if (!empty($_SESSION['bookingDtls'])) {
        //     echo "<div class='alert alert-danger' style='margin-bottom: 0;'><strong>Alert! </strong> ".$_SESSION['bookingDtls']."</div>";
        //     unset($_SESSION['bookingDtls']);
        // }
        ?>
        <!-- Small boxes (Stat box) -->
          <div class="box box-info">
              <div class="box-header with-border" style='background-color: #000044;'>
                  <h3 class="box-title"style='color:white;font-size: 1.5em;' >My Account</h3>
                  <div class="box-tools pull-right">
                      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                      </button>
                      <!-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button> -->
                  </div>
              </div><br><br>
              <div class="row" style="margin: 10px;">
                





                <!-- /.box-header -->
                <div class="box-body" style="padding:3% 4%;">

                  <div style="background: white;" >
                    <div class="box box-info" style="border: none;">
                      <div class="box-body pad" style="color: black;">

                        <div class="row">

                          <!-- left column -->
                          <script src="../../assets/js/photoResize/canvas-to-blob.min.js"></script>
                          <script src="../../assets/js/photoResize/resize.js"></script>
                          <!-- <script src="../../assets/js/photoResize/app.js"></script> -->

                          <form enctype="multipart/form-data" id="form1" method="POST">
                            <div class="col-md-3" style="padding-top: 5%; margin-top: 10px;padding-bottom: 5%;border: 2px solid #f4f4f4;">

                              <div class="text-center">
                                <?php 
                                if ($admindata->image_path != null){
                                  echo '<img src="../../'.$admindata->image_path.'" class="avatar img-circle" alt="avatar">';
                                }
                                else {echo '<img src="//placehold.it/100" class="avatar img-circle" alt="avatar">';}  ?>

                                <h6> Upload a different photo...</h6>
                                <!-- <input type="file" class="form-control"> -->
                                <input type="file" id="imgUploadId" name="imgUpload"  accept="image/jpeg, image/png" required/>
                                <!-- <input type="hidden" id="usernameHid" value="<?php echo $admindata->username; ?>" > -->
                                <br>
                                <button type="button" id="uploadBtn" class="btn btn-default btn-lg btn-save js-save" style='background-color: #8892d6;color:white;font-size: inherit;' >Submit</button>


                                <?php $_SESSION['username'] = $admindata->username; $_SESSION['owner_id'] =$admindata->owner_id;?>
                              </div>
                            </div>

                          </form>
                          <script type="text/javascript">
                            'use strict'
                            // Initialise resize library
                            var resize = new window.resize();
                            resize.init();

                            //Upload photo
                            var upload = function (photo, callback) {
                              var formData = new FormData();
                              // console.log(photo);
                              formData.append('photo', photo);
                              var request = new XMLHttpRequest();
                              request.onreadystatechange = function() {
                                if (request.readyState === 4) {
                                  callback(request.response);
                                }
                              }
                              request.open('POST', '../EditDetailsController/photoUpload');
                              request.responseType = 'json';
                              request.send(formData);
                              // alert('hi hi');
                            };
                            var fileSize = function (size) {
                              var i = Math.floor(Math.log(size) / Math.log(1024));
                              return (size / Math.pow(1024, i)).toFixed(2) * 1 + ' ' + ['B', 'kB', 'MB', 'GB', 'TB'][i];
                            };

                            document.getElementById("uploadBtn").addEventListener('click', function(e){
                              e.preventDefault();
                              var imgCount = 0;
                              var files = document.getElementById("imgUploadId").files[0];
                              //for (var i in files) {
                                // console.log(files);
                                if (typeof files == 'object'){
                                  (function () {
                                    var initialSize = files.size;
                                    resize.photo(files, 200, 200, 'file', function (resizedFile) {
                                      var resizedSize = resizedFile.size;
                                      upload(resizedFile, function (response) {

                                        // alert('done');
                                        window.location.reload(true); // reload the page so that user can see the changes he made 
                                      });
                                    }); 
                                  }()); }
                                // setTimeout(location.reload.bind(location), 800);
                              });
                            </script>
                            <!-- edit form column -->
                            <div class="col-md-9">
                              <button type="button" id="save_btn" class="btn btn-default btn-lg btn-save js-save" style='float:right;background-color: #8892d6;color:white;font-size: inherit;' disabled>Save</button>
                              <button type="button" id="edit_btn" class="btn btn-default btn-lg btn-edit js-edit" style='float:right;background-color:#8892d6;color:white;font-size: inherit;'>Edit</button>
                              <h4 style="text-align:left;color:dimgrey;padding-bottom:6px;border-bottom:1px solid #f4f4f4;">Personal Info</h4>  
                              <form class="is-readonly" method="POST" action="<?php echo site_url(); ?>/AccountController/editAdminAccount" id="form2" role="form" data-toggle="validator">
                                <input type="hidden" value = "<?php echo $admindata->login_id; ?>" name="login_id" id="login_id">
                                <input type="hidden" value = "<?php echo $admindata->owner_id; ?>" name="owner_id" id="owner_id">

                                <div class="form-group">
                                  <label for="firstname">First Name</label>
                                  <input type="text" class="form-control is-disabled" id="firstname" name="firstname" placeholder="First Name" value="<?php echo $admindata->first_name; ?>" disabled required>
                                </div>
                                <div class="form-group">
                                  <label for="lastname">Last Name</label>
                                  <input type="text" class="form-control is-disabled" id="lastname" name="lastname" placeholder="Last Name" value="<?php echo $admindata->last_name; ?>" disabled required>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Email address</label>
                                  <input type="email" class="form-control is-disabled" id="email" name="email" placeholder="Email" value="<?php echo $admindata->email; ?>"  data-error="Bruh, that email address is invalid" disabled required>
                                  <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                  <label for="tel">Tele</label>
                                  <input type="tel" class="form-control is-disabled" id="tele" name="tele" value="<?php echo $admindata->mobile; ?>" data-maxlength="10" data-minlength="9" pattern="[0-9]{10}" disabled required>
                                  <div class="help">Format of the telephone number should be [0711234567] (length - 10 numbers.)</div>
                                </div>
                                <h4 style="text-align:left;color:dimgrey;padding-bottom:6px;border-bottom:1px solid #f4f4f4;">Accounts Info</h4>
                                <div class="form-group">
                                  <label for="username">Username</label>
                                  <input type="text" class="form-control is-disabled" data-minlength="6" id="username" name="username" placeholder="username" value="<?php echo $admindata->username; ?>" disabled required>
                                </div>
                                <div class="form-group">
                                  <label for="inputPassword" class="control-label">Password</label>
                                  <input type="password" data-minlength="6" class="form-control is-disabled" id="inputPassword" name="inputPassword" placeholder="Password" value="<?php echo $admindata->password; ?>" required disabled>
                                  <div class="help-block with-errors">Minimum of 6 characters</div></div>

                                  <div class="form-group">
                                   <label for="inputPassword" class="control-label">Confirm Password</label>
                                   <input type="password" class="form-control is-disabled" name="inputPasswordConfirm" id="inputPasswordConfirm" data-match="#inputPassword" value="<?php echo $admindata->password; ?>" data-match-error="Whoops, these don't match" placeholder="Confirm" required disabled>
                                   <div class="help-block with-errors">Matching with the password.</div>
                                 </div>
                                 <div class="form-group">
                                   <label for="checkPassword" style="display:none;" id="checkPasswordLbl" class="control-label">Past Password</label>
                                   <input type="password" style="display:none;" value="<?php echo $admindata->password; ?>" id="check" name="check">
                                   <input type="password" style="display:none;" data-match="#check"  class="form-control is-disabled" id="checkPassword" name="checkPassword" data-match-error="Whoops, Entered passwordnot match wit the current password." placeholder="Current Password" value="" required disabled>
                                 </div>


                               

                             </form>
                               </div>
                           </div>
                         </div>


                       </div>
                     </div>
                     <hr style="border: 1px solid rgba(0, 0, 0, 0.3);">
                   </div>
                   <!-- /.box-body -->






















              </div>
          </div>
       </section>
  </div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="../../assets/plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="../../assets/plugins/jQuery/jQuery-2.2.0.min.js"></script>
        
<script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="../../assets/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="../../assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../../assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../../assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../assets/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="../../assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../../assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../../assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../assets/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="../../assets/dist/js/pages/dashboard.js"></script> -->
<!-- AdminLTE for demo purposes -->
      <script src="../../assets/dist/js/validator.min.js"></script>
<script src="../../assets/dist/js/demo.js"></script>
 <script src="../../assets/dist/js/bootstrap-dialog.js"></script>
<script src="vassets/dist/js/jquery.confirm.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){

        // $('.js-edit, .js-save').on('click', function(){
        //   var $form = $('#form2');
        //   $form.toggleClass('is-readonly is-editing');
        //   var isReadonly  = $form.hasClass('is-readonly');
        //   $form.find('input,textarea').prop('disabled', isReadonly);
        // });
        $('#edit_btn').on('click', function(){

          var $form = $('#form2');
          $form.removeClass('is-readonly').addClass('is-editing');
          var isReadonly  = $form.hasClass('is-readonly');
          $form.find('input,textarea').prop('disabled', isReadonly);
          document.getElementById("username").disabled = true;
          document.getElementById("save_btn").disabled = false;
          document.getElementById("edit_btn").disabled = true;
        });
        $('#save_btn').on('click', function(){

          var $form = $('#form2');
          $form.removeClass('is-editing').addClass('is-readonly');
          document.getElementById("edit_btn").disabled = false;
          document.getElementById("save_btn").disabled = true;
          if(document.getElementById("checkPassword").style.display == "none"){
           document.getElementById("checkPassword").value = document.getElementById("check").value;
           document.getElementById("checkPassword").style.display = "block";

         }

         $('#form2').submit();
       });
        $('#inputPasswordConfirm').on('keyup', function () {
          document.getElementById("checkPassword").style.display = "block";
          document.getElementById("checkPasswordLbl").style.display = "block";

        });

        $('#form2').validator().on('submit', function (e) {
          if (e.isDefaultPrevented()) {
            alert("Please fix all the errors before submitting.");// handle the invalid form...
          } else {
            document.getElementById("checkPassword").style.display = "none";
            document.getElementById("checkPasswordLbl").style.display = "none";

          }
        });




      });

    </script>
</body>
</html>
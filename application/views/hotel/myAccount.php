
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>inna.lk :: Control Panel</title>
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
  <link rel="stylesheet" href="../../assets/dist/css/AdminLTE.css">
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
  <link href="../../assets/dist/css/bootstrap-dialog.css" rel='stylesheet' type='text/css'/>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style type="text/css">
  form {
    &.is-readonly {
      .btn-save {
        display: none;
      }
      input,textarea{
        &[disabled] {
          cursor: text;
          background-color: #fff;
          border-color: transparent;
          outline-color: transparent;
          box-shadow: none;
        }
      }
    }
    &.is-editing { 
      .btn-edit{
        display: none;
      }
    }

  }
  label{
      color: dimgrey;
  }
      .box{
          box-shadow: none !important;
      }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">


  <div class="wrapper">
    <header class="main-header">
      <!-- Logo -->  
      <!-- Header Navbar: style can be found in header.less -->
      <?php include 'hotelTopMost.php';?>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <?php include 'hotelSidebar.php';?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background-color:ghostwhite;">
      <!-- Content Header (Page header) -->
      <section class="content-header" style="padding-right:5%;padding-left:5%;padding-top:2%;">
        <h1 style="font-weight:bold;font-size: 2em;">
          Edit Account Details
         <small>Control panel</small>
        </h1>
     
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Edit Details</li>
        </ol>
      </section>
      <!-- Main content -->
      <section class="content" style="padding-right:5%;padding-left:5%;">
        <div class="row" >
          <div class="col-md-12">
            <div id="about_web" class="box box-solid" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            ">
            <div class="box-header with-border" style="text-align: center;">
            <h3 class="box-title" style="text-align: center;color:dimgrey;padding-top:6px;font-weight: bold;">Personal and Account Details</h3>
          </div>
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
                              <img src="<?php if ($data1->image_path != null) {
                                echo '../../'.$data1->image_path;
                              }else{echo '//placehold.it/100';}  ?>" class="avatar img-circle" alt="avatar">
                              <h6> Upload a different photo...</h6>
                              <!-- <input type="file" class="form-control"> -->
                              <input type="file" id="imgUploadId" name="imgUpload"  accept="image/jpeg, image/png" required/>
                              <!-- <input type="hidden" id="usernameHid" value="<?php echo $data1->username; ?>" > -->
                              <br>
                              <button type="button" id="uploadBtn" class="btn btn-default btn-lg btn-save js-save" style='background-color: #8892d6;color:white;font-size: inherit;' >Submit</button>
                      
                              
                              <?php $_SESSION['username'] = $data1->username; $_SESSION['owner_id'] =$data1->owner_id;?>
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
                            console.log(files);
                            if (typeof files == 'object'){
                            (function () {
                              var initialSize = files.size;
                              resize.photo(files, 200, 200, 'file', function (resizedFile) {
                                var resizedSize = resizedFile.size;
                                upload(resizedFile, function (response) {
                                });
                              }); 
                            }()); }
                        });
                        </script>
                        <!-- edit form column -->
                        <div class="col-md-9">
                       <h4 style="text-align:left;color:dimgrey;padding-bottom:6px;border-bottom:1px solid #f4f4f4;">Personal Info</h4>   <form class="is-readonly" method="POST" action="<?php echo site_url(); ?>/AccountController/editMyAccount" id="form2" role="form" data-toggle="validator">
                            <input type="hidden" value = "<?php echo $data1->login_id; ?>" name="login_id" id="login_id">
                            <input type="hidden" value = "<?php echo $data1->owner_id; ?>" name="owner_id" id="owner_id">

                            <div class="form-group">
                              <label for="firstname">First Name</label>
                              <input type="text" class="form-control is-disabled" id="firstname" name="firstname" placeholder="First Name" value="<?php echo $data1->first_name; ?>" disabled required>
                            </div>
                            <div class="form-group">
                              <label for="lastname">Last Name</label>
                              <input type="text" class="form-control is-disabled" id="lastname" name="lastname" placeholder="Last Name" value="<?php echo $data1->last_name; ?>" disabled required>
                            </div>
                            <div class="form-group">
                              <label for="listingtype">Listing Type</label>
                              <select name="listing_type" id="listing_type" class="form-control is-disabled" disabled>
                                <?php if($data1->listing_type == "hotel"){?>
                                <option value="private_listing" >Private Listing</option>
                                <?php } 
                                else{ ?>
                                <option value="hotel" selected>Hotel</option>
                                <?php } ?>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" class="form-control is-disabled" id="email" name="email" placeholder="Email" value="<?php echo $data1->email; ?>"  data-error="Bruh, that email address is invalid" disabled required>
                              <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                              <label for="tel">Tele</label>
                              <input type="tel" class="form-control is-disabled" id="tele" name="tele" value="<?php echo $data1->mobile; ?>" data-maxlength="10" data-minlength="10" pattern="[0-9]{10}" disabled required>
                              <div class="help-block with-errors">Format of the telephone number should be [0711234567] (length - 10 numbers.)</div>
                            </div>
                           <h4 style="text-align:left;color:dimgrey;padding-bottom:6px;border-bottom:1px solid #f4f4f4;">Accounts Info</h4>
                            <div class="form-group">
                              <label for="username">Username</label>
                              <input type="text" class="form-control is-disabled" data-minlength="6" id="username" name="username" placeholder="username" value="<?php echo $data1->username; ?>" disabled required>
                            </div>
                            <div class="form-group">
                              <label for="inputPassword" class="control-label">Password</label>
                              <input type="password" data-minlength="6" class="form-control is-disabled" id="inputPassword" name="inputPassword" placeholder="Password" value="<?php echo $data1->password; ?>" required disabled>
                              <div class="help-block with-errors">Minimum of 6 characters</div></div>

                              <div class="form-group">
                                 <label for="inputPassword" class="control-label">Confirm Password</label>
                                <input type="password" class="form-control is-disabled" name="inputPasswordConfirm" id="inputPasswordConfirm" data-match="#inputPassword" value="<?php echo $data1->password; ?>" data-match-error="Whoops, these don't match" placeholder="Confirm" required disabled>
                                <div class="help-block with-errors">Matching with the password.</div>
                              </div>
                               <div class="form-group">
                             <label for="checkPassword" style="display:none;" id="checkPasswordLbl" class="control-label">Past Password</label>
                             <input type="password" style="display:none;" value="<?php echo $data1->password; ?>" id="check" name="check">
                              <input type="password" style="display:none;" data-match="#check"  class="form-control is-disabled" id="checkPassword" name="checkPassword" data-match-error="Whoops, Entered passwordnot match wit the current password." placeholder="Current Password" value="" required disabled>
                             </div>
                            </div>
                           

                            <button type="button" id="save_btn" class="btn btn-default btn-lg btn-save js-save" style='float:right;background-color: #8892d6;color:white;font-size: inherit;' disabled>Save</button>
                            <button type="button" id="edit_btn" class="btn btn-default btn-lg btn-edit js-edit" style='float:right;background-color:#8892d6;color:white;font-size: inherit;'>Edit</button>

                          </form>
                        </div>
                      </div>


                    </div>
                  </div>
              <hr style="border: 1px solid rgba(0, 0, 0, 0.3);">
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

      </div>

        </section>

        <!-- jQuery 2.2.0 -->
        <script src="../../assets/plugins/jQuery/jQuery-2.2.0.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.6 -->
        <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
        <!-- Morris.js charts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
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
        <!-- AdminLTE for demo purposes -->
        <script src="../../assets/dist/js/demo.js"></script>
        <script src="../../assets/dist/js/validator.min.js"></script>
        <!-- /.content -->
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

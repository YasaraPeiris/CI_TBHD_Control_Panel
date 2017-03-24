
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
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
       <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
            <section class="content-header" style="padding-right:5%;padding-left:5%;padding-top:5%;">
            <h1 style="font-weight:bold;font-size: 2em;">
                    Check Orders.
                    <!--        <small>Control panel</small>-->
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Edit Details</li>
                </ol>
            </section>

            <!-- Main content -->
           <section class="content" style="padding-right:5%;padding-left:5%;">
              <div  style="background:white;padding: 20px;box-shadow: 0 0px 8px 0 rgba(0, 0, 0, 0.06), 0 1px 0px 0 rgba(0, 0, 0, 0.02);-webkit-border-radius: 5px;border-radius: 5px;">

                   <h2 style="padding: 6px 15px 6px 15px;margin: 1px;font: bold 15px arial, sans-serif;color: #464646;margin-bottom: 20px;background: linear-gradient(to bottom, rgba(250,250,250,1) 0%, rgba(232,232,232,1) 100%);">Room Rates</h2>
                   <div class="small-box" id="hotelDes" style="box-shadow:none;">
                    <div style="background: white;" >
                      <div class="row">
                        <div class="col-md-12">
                          <div class="box box-info" style="border-color:gray;">
                            <div class="box-body pad" style="color: black;">
                               <table id="example" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                         <th>Order ID</th>
                                        <th>Item ID</th>
                                        <th>Room Type</th>
                                        <th>Check-In Date</th>
                                        <th>Check-Out Date</th>
                                        <th>No of Rooms</th>
                                        <th>Confirm</th>
                                        <th>Ignore</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Item ID</th>
                                        <th>Room Type</th>
                                        <th>Check-In Date</th>
                                        <th>Check-Out Date</th>
                                        <th>No of Rooms</th>
                                        <th>Confirm</th>
                                        <th>Ignore</th>
                                       </tr>
                                </tfoot>
                                <tbody>
                                  
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
              

                <!-- /.row -->


                <!-- /.row -->
                <!-- Main row -->



            </section>

            <!-- /.content -->
        </div>



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
        $('form').validator();

        $(document).ready(function(){
          $('.js-edit, .js-save').on('click', function(){
            var $form = $(this).closest('form');
            $form.toggleClass('is-readonly is-editing');
            var isReadonly  = $form.hasClass('is-readonly');
            $form.find('input,textarea').prop('disabled', isReadonly);
          });
        });

        </script>
      </body>
      </html>

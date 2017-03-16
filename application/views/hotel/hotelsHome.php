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
  <link rel="stylesheet" href="../../assets/dist/css/AdminLTE.min.css">
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
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../../assets/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../assets/plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../assets/dist/css/skins/_all-skins.min.css">
  <link href="../../assets/dist/css/bootstrap-dialog.css" rel='stylesheet' type='text/css'/>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini" style="">

  <div class="wrapper">
    <header class="main-header">
      <!-- Logo -->
      <!-- Header Navbar: style can be found in header.less -->
      <?php include 'hotelTopMost.php'; ?>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <?php include 'hotelSidebar.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" >
      <!-- Content Header (Page header) -->
      <section class="content-header" style="padding-right:5%;padding-left:5%;padding-top:5%;">
        <h1 style="font-size: 3em;font-weight: bold;">
          <?php echo $_SESSION['login_hotel']?>
          <small>Control panel</small>
        </h1>
        <br>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content" style="padding-right:5%;padding-left:5%;">
        <!-- Small boxes (Stat box) -->
        <?php include 'hotelTop.php';?>   
        <div class="row" >
          <div class="col-md-12">
            <div id="about_web" class="box box-solid" style="border: solid;border-color: #000044;border-width: 0.5em;">
              <div class="box-header with-border" style="text-align: center;background-color: #000044;">
                <h3 class="box-title" style="font-size: 1.6em;font-weight: bold;"><?php echo "Today is " . date("d/m/Y") . "<br>";?></h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body" style="padding:0 4%;">
                <h3 style="margin-bottom:15px;">Today's Checkin</h3>
                <div class="table-responsive ">          
                  <table class="table table-striped">
                    <thead>
                      <tr style="background-color:gray;">
                        <th>Visitor</th>
                        <th>Date created</th>
                        <th>Booking No</th>
                        <th>Checkin</th>
                        <th>Checkout</th>
                        <th>Room Type</th>
                        <th>Hotel</th>
                        <th>Info</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Anna</td>
                        <td>Pitt</td>
                        <td>35</td>
                        <td>New York</td>
                        <td>USA</td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Anna</td>
                        <td>Pitt</td>
                        <td>35</td>
                        <td>New York</td>
                        <td>USA</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <h3 style="margin-bottom:15px;">Today's Checkout</h3>
                <div class="table-responsive ">          
                  <table class="table table-striped">
                    <thead>
                      <tr style="background-color:gray;">
                        <th>Visitor</th>
                        <th>Date created</th>
                        <th>Booking No</th>
                        <th>Checkin</th>
                        <th>Checkout</th>
                        <th>Room Type</th>
                        <th>Hotel</th>
                        <th>Info</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Anna</td>
                        <td>Pitt</td>
                        <td>35</td>
                        <td>New York</td>
                        <td>USA</td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Anna</td>
                        <td>Pitt</td>
                        <td>35</td>
                        <td>New York</td>
                        <td>USA</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->

        </div>   
        <!-- /.row (main row) -->
        <div class="row" >
          <div class="col-md-12">
            <div id="about_web" class="box box-solid" style="border: solid;border-color: #000044;border-width: 0.5em;">
              <div class="box-header with-border" style="text-align: center;background-color: #000044;">
                <h3 class="box-title" style="font-size: 1.6em;font-weight: bold;">About BEST HOTEL DEAL</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <p style="font-size: 1.3em;font-weight: bold;">-A Hotel Reservation System which offer both local and foreign tourists to book hotels in Sri Lanka using a smart, searchable website and it lets customer to choose the best hotel to book by swiftly navigating through rates, features and offers of multiple hotels in the preferred destination. Customers will be provided with the facility to pay online using eZ cash or m-cash.Additional services offered by this website are</p><ul style="font-size: 1.3em;font-weight: bold;"><li>Enjoy low cost bookings</li><li>Cancellation without any cost.</li><li>Automated email and sms notification system.</li><li>Location based google api services.</li></ul><br><p style="font-size: 1.4em;font-weight: bold;text-align: center;text-decoration: underline;"><a href="" >THe Best Hotel Deal</a></p>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->

        </div>   
        <!-- /.row (main row) -->

      </section>
      

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
      <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
      <!-- Morris.js charts -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
      <script src="../../assets/plugins/morris/morris.min.js"></script>
      <!-- Sparkline -->
      <script src="../../assets/plugins/sparkline/jquery.sparkline.min.js"></script>
      <!-- jvectormap -->
      <script src="../../assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
      <script src="vplugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
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
      <script src="../../assets/dist/js/pages/dashboard.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="../../assets/dist/js/demo.js"></script>
      <script src="../../assets/dist/js/bootstrap-dialog.js"></script>
      <script src="../../assets/dist/js/jquery.confirm.js"></script>
    </body>
    </html>

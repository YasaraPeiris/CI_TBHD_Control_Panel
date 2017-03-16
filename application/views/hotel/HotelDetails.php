
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
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1 style="font-weight:bold;font-size: 2em;">
          Edit Details
          <!--        <small>Control panel</small>-->
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Edit Details</li>
        </ol>
      </section>
      <!-- Main content -->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="container-fluid edit-container" style="background:white;padding: 20px;box-shadow: 0 0px 8px 0 rgba(0, 0, 0, 0.06), 0 1px 0px 0 rgba(0, 0, 0, 0.02);-webkit-border-radius: 5px;border-radius: 5px;">
          <h2 style="padding: 6px 15px 6px 15px;margin: 1px;font: bold 15px arial, sans-serif;color: #464646;margin-bottom: 20px;background: linear-gradient(to bottom, rgba(250,250,250,1) 0%, rgba(232,232,232,1) 100%);">Hotel Description</h2>
          <div class="small-box" id="hotelDes" style="box-shadow:none;">
            <div style="background: white;" >
              <div class="row"  >
                <div class="col-md-12">

                  <div class="box box-info" style="border-color:gray;">

                    <!-- /.box-header -->
                    <div class="box-body pad" style="color: black;">
                      <form id="desc">
                        <textarea id="editor1" name="editor1" style="width: 100%;" rows="8" >

                        </textarea>
                        <div class ="row" style="margin-top:2%;">
                          <div class='col-md-2'>
                            <button   id="destinationid" name="submit" type="button" style='float:right;background-color: #000044;' class="btn btn-block btn-success btn-lg">Change</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <h2 style="padding: 6px 15px 6px 15px;margin: 1px;font: bold 15px arial, sans-serif;color: #464646;margin-bottom: 20px;background: linear-gradient(to bottom, rgba(250,250,250,1) 0%, rgba(232,232,232,1) 100%);">Basic Facilities</h2>
          <div class="small-box" id="hotelDes" style="box-shadow:none;">
            <div style="background: white;" >
              <div class="row"  >
                <div class="col-md-12">
                  <div class="box box-info" style="border-color:gray;">
                    <!-- /.box-header -->
                    <!-- /.box-header -->
                    <div class="box-body pad">
                      <form id="updateBasic1" method="post">
                        <div class="row" style="color:black;font-size: 1.2em;" >
                          <br>

                          <div class ='col-md-12'>
                            <?php
                            $s = 0;
                            $y = -1;
                            $facilities = array('Wi-Fi', 'TV', 'Room Service', 'Laundry Service','Parking','Beverages','Lobby','Restaurent');
                            $data = json_decode($data1, TRUE);

                            while ($y < sizeof($facilities) - 1) {
                              $y++;
                              if (in_array($facilities[$y], $data)) {
                                ?>
                                <div class ="col-md-4" style="text-align: left;">
                                  <label>
                                    <input type="checkbox" name="check_list[]" checked disabled="true"   value="<?php echo $facilities[$y] ?>"><?php echo $facilities[$y] ?>
                                  </label>
                                </div>
                                <?php } else { ?>
                                <div class ="col-md-4" style="text-align: left;">
                                  <label>
                                    <input type="checkbox" name="check_list[]" disabled="true"   value="<?php echo $facilities[$y] ?>"><?php echo $facilities[$y] ?>
                                  </label>
                                </div>
                                <?php } if (($y + 1) % 3 == 0) { ?>
                                <br><br>
                                <?php } ?>
                                <?php }
                                ?>

                              </div>

                              
                            </div>
                            <div class ="row" style="margin-top:2%;">
                              <div class='col-md-2'>
                                <button   id="destinationid" name="submit" type="button" style='float:right;background-color: #000044;' onclick="changeDisable()" class="btn btn-block btn-success btn-lg">Change</button>
                              </div>
                            </div>
                            
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



              <!--            <h1 style="color: black;padding-left: 1%;">Edit Details</h1>-->
              <!-- ./col -->

              <!-- /.row -->

              <!-- /.row -->
              <!-- Main row -->

            </div>

          </section>

          <!-- /.content -->





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
          <script src="../....//plugins/morris/morris.min.js"></script>
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
          <script src="../../assets/dist/js/pages/dashboard.js"></script>
          <!-- AdminLTE for demo purposes -->
          <script src="../../assets/dist/js/demo.js"></script>

        </body>
        </html>

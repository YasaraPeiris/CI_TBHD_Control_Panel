<!-- <?php session_start();
 include '../checkSession.php';
?> -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CP :: Price Sets</title>
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

        if (!empty($_SESSION['alertPrice'])) {
            echo "<div class='alert alert-info' style='margin-bottom: 0;'><strong>Alert! </strong> ".$_SESSION['alertPrice']."</div>";
            unset($_SESSION['alertPrice']);
        }
        if (!empty($_SESSION['warnPrice'])) {
            echo "<div class='alert alert-danger' style='margin-bottom: 0;'><strong>Alert! </strong> ".$_SESSION['warnPrice']."</div>";
            unset($_SESSION['warnPrice']);
        }
        ?>
        <!-- Small boxes (Stat box) -->
          <div class="box box-info">
              <div class="box-header with-border" style='background-color: #000044;'>
                  <h3 class="box-title"style='color:white;font-size: 1.5em;' >Delete Price Sets</h3>
                  <div class="box-tools pull-right">
                      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
              </div><br><br>
              <div style="padding: 0 10px 10px 10px;">
                <form action="<?php echo site_url(); ?>/RedirectPageController/priceSetDelete" method="post" onsubmit="return validateForm()" >

                  Id: <input type="number" min="1" name="price_id" required><br><br>
                  Price Category Id: <input type="number" min="1" name="priceCat_id" required><br><br>
                  Priority: <input type="number" min="1" name="priority" required><br><br>
                  <input type="submit" name="submit" value="Delete">
                </form>
                <script type="text/javascript">
                  function validateForm() { 
                        return confirm('Do you really want to delete this price?');
                    }
                </script>
              </div>
          </div>
          <!-- Small boxes (Stat box) -->
           <div class="box box-info">
              <div class="box-header with-border" style='background-color: #000044;'>
                  <h3 class="box-title"style='color:white;font-size: 1.5em;' >Price Categories</h3>
                  <div class="box-tools pull-right">
                      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
              </div>
              <div class="box-body">
                  <div class="table-responsive">
                      <form id="notifications" method="post" >
                          <input type="hidden" id="bookingidset" name="bookingidset"/>
                          <input type="hidden" id="itemidset" name="itemidset"/>
                          <table id="priceCatTable" class="table table-striped nowrap table-responsive"
                                   cellspacing="0" width="100%">
                                <thead class="no-border">
                                <tr style="text-align:center;color:#404040;font-size: 13px;font-weight: 200;">
                                  <th data-priority="2">Price Category ID</th>
                                  <th data-priority="1">Listing ID</th>
                                  <th data-priority="3">Listing Name</th>
                                  <th data-priority="3" data-orderable="false">Room Type ID</th>
                                  <th data-priority="4" data-orderable="false">Price ID</th>
                                  <th data-priority="5" data-orderable="false">Name</th>
                                  <th data-priority="6" >Occupancy</th>
                                </tr>
                                </thead>
                                <tbody id="orderTable" style="text-align: center;">
                                  <?php foreach ($priceCatgories as $value) {?>
                                  <tr >
                                    <th><?php echo $value->pricecategory_id; ?></th>
                                    <th><?php echo $value->listing_id; ?></th>
                                    <th><?php echo $value->listing_name; ?></th>
                                    <th><?php echo $value->room_type_id; ?></th>
                                    <th><?php echo $value->price_id; ?></th>
                                    <th><?php echo $value->price_name; ?></th>
                                    <th><?php echo $value->price_occ; ?></th>
                                  </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                      </form>
                  </div>
               </div>
          </div>
          <!-- Small boxes (Stat box) -->
           <div class="box box-info">
              <div class="box-header with-border" style='background-color: #000044;'>
                  <h3 class="box-title"style='color:white;font-size: 1.5em;' >Prices</h3>
                  <div class="box-tools pull-right">
                      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
              </div>
              <div class="box-body">
                  <div class="table-responsive">
                      <form id="notifications" method="post" >
                          <input type="hidden" id="bookingidset" name="bookingidset"/>
                          <input type="hidden" id="itemidset" name="itemidset"/>
                          <table id="pricetable" class="table table-striped nowrap table-responsive"
                                   cellspacing="0" width="100%">
                                <thead class="no-border">
                                <tr style="text-align:center;color:#404040;font-size: 13px;font-weight: 200;">
                                  <th data-priority="3">ID</th>
                                  <th data-priority="1">Price Category ID</th>
                                  <th data-priority="4">Price</th>
                                  <th data-priority="2">From</th>
                                  <th data-priority="2">Till</th>
                                  <th data-priority="2">Priority</th>
                                  <th data-priority="6">Insert Time</th>
                                </tr>
                                </thead>
                                <tbody id="orderTable" style="text-align: center;">
                                  <?php foreach ($prices as $value) {?>
                                  <tr >
                                    <th><?php echo $value->id; ?></th>
                                    <th><?php echo $value->pricecategory_id; ?></th>
                                    <th><?php echo $value->price; ?></th>
                                    <th><?php echo $value->valid_from; ?></th>
                                    <th><?php echo $value->valid_till; ?></th>
                                    <th><?php echo $value->priority; ?></th>
                                    <th><?php echo $value->insert_time; ?></th>
                                  </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                      </form>
                  </div>
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
<script src="../../assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../assets/dist/js/demo.js"></script>
 <script src="../../assets/dist/js/bootstrap-dialog.js"></script>
        <script src="vassets/dist/js/jquery.confirm.js"></script>
        <script>
            function setData(){
                 $.ajax({
            url: 'mcash.php',
            type: 'post',
            data: $('#mcashrequest').serialize(),
            success: function (data) {
                alert(data);
                result = data;
            }
        });
            }
            </script>
 <!--datatables-->
    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.1.1/js/responsive.bootstrap.min.js"></script>
    <script>
      var table_checkin = $('#priceCatTable').DataTable({
          responsive: true
      });
      var table_checkin = $('#pricetable').DataTable({
          responsive: true
      });
    </script>
</body>
</html>
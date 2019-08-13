<!-- <?php session_start();
 include '../checkSession.php';
?> -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CP:: Hotel List</title>
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
          <!-- Small boxes (Stat box) -->
          <?php
          if (!empty($_SESSION['alertHtlPromo'])) {
              echo "<div class='alert alert-info' style='margin-bottom: 0;'><strong>Alert! </strong> ".$_SESSION['alertHtlPromo']."</div>";
              unset($_SESSION['alertHtlPromo']);
          }
          ?>
          <div class="box box-info">
              <div class="box-header with-border" style='background-color: #000044;'>
                  <h3 class="box-title"style='color:white;font-size: 1.5em;' >Full Hotel List</h3>
                  <div class="box-tools pull-right">
                      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
              </div>
              <div class="box-body">





                
                <div style="background: white;" class="tab-pane fade in active">
                    <div class="box box-info" style="padding:2%;border-color:gray;border:1px solid #f4f4f4;">
                        <div class="box-body pad" style="color: black;padding-left: 3%;padding-right: 3%;padding-top: 2%;padding-bottom: 1%;">
                            <div class="col-md-12" style="margin-bottom: 10px;">
                                <table id="promotable" class="table table-striped nowrap table-responsive"
                                   cellspacing="0" width="100%">
                                    <thead>
                                    <tr style="text-align:center;">
                                        <th>Listing id</th>
                                        <th>Tag</th>
                                        <th>Start</th>
                                        <th>End</th>
                                        <th>Promo %</th>
                                        <th>Why Hotel?(Leave blank not to Show in Main Page)</th>
                                        <th>Prices</th>
                                        <th>Save</th>
                                        <!-- <th>Save</th> -->
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php for ($i = 0; $i < sizeof($data1); $i++) { ?>

                                        <form method="post" onSubmit="if(!confirm('Do you really want to submit changes?')){return false;}" action="<?php echo site_url(); ?>/EditDetailsController/editPromoDetails"  enctype="multipart/form-data" id="roomForm<?php echo $i; ?>" name="roomForm<?php echo $i; ?>">
                                            <input type="hidden" name="formId" value="<?php echo $i?>">
                                            <input type="hidden" name="promo_id" value="<?php echo $data1[$i]->promo_id?>">
                                            <tr>
                                                <td><?php echo $data1[$i]->listing_id; ?></td>
                                                <td><input type="text" name="promo" value="<?php echo $data1[$i]->promo; ?>" style="padding:4px 2px;" required></td>
                                                <td><input type="date" name="start_date" value="<?php echo $data1[$i]->start_date; ?>" style="padding:4px 2px;width:100%;max-width: 130px;" required></td>
                                                <td><input type="date" name="end_date" value="<?php echo $data1[$i]->end_date; ?>" style="padding:4px 2px;width:100%;max-width: 130px;" required></td>
                                                <td><input type="number" name="promo_amount" max="1" min="0" step="0.001" value="<?php echo $data1[$i]->promo_amount; ?>" style="padding:4px 2px;max-width: 60px;" required></td>
                                                <td><input type="text" name="top_reasons" value="<?php echo $data1[$i]->top_reasons; ?>" style="padding:4px 2px;max-width: 130px;"></td>
                                                <td><input type="text" name="starting_price" value="<?php echo $data1[$i]->starting_price; ?>" style="padding:4px 2px;max-width: 130px;" required></td>
                                                <td>
                                                    <button type="submit" name="save" class="btn btn-default btn-lg" style='float:right;background-color: #8892d6;color:white;font-size: inherit;'onclick="saveDetails(<?php echo $i; ?>)">Save </button>
                                                </td>
                                            </tr>
                                        </form>
                                    <?php } ?>
                                    </tbody>
                                </table>
                                <!-- <div class="col-md-2">
                                    <p style="color:dimgrey;font-size: 14px;"><b>Start Date</b></p>
                                </div>
                                <div class="col-md-2">
                                    <input type="date" name="strtDate" style="color:dimgrey;font-size: 14px;margin: 0px 10px; padding: 6px;width:100%;" required>
                                </div>
                                <div class="col-md-2">
                                    <p style="color:dimgrey;font-size: 14px;"><b>End Date</b></p>
                                </div>
                                <div class="col-md-2">
                                    <input type="date" name="endDate" style="color:dimgrey;font-size: 14px;margin: 0px 10px; padding: 6px;width:100%;" required>
                                </div>
                                <div class="col-md-2">
                                    <button type="reset" name="reset" class="btn btn-default btn-lg"
                                            style='float:right;background-color: #8892d6;color:white;font-size: inherit;'
                                            onclick="ResetDetails()">Reset Details
                                    </button>
                                    <button type="submit" name="save" class="btn btn-default btn-lg"
                                            style='float:right;background-color: #8892d6;color:white;font-size: inherit;'
                                            onclick="saveDetails()">Save
                                    </button>
                                </div> -->
                            </div>
                        </div>
                    </div>

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
<!-- <script src="../../assets/dist/js/pages/dashboard.js"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="../../assets/dist/js/demo.js"></script>
 <script src="../../assets/dist/js/bootstrap-dialog.js"></script>
        <!-- <script src="vassets/dist/js/jquery.confirm.js"></script> -->
        <!-- <script>
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
            </script> -->
 <!--datatables-->
   <!--  <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.1.1/js/responsive.bootstrap.min.js"></script> -->
    <script>
      // var table_checkin = $('#promotable').DataTable({
      //   "order": [[ 3, "desc" ]],
      //     responsive: true
      // });
    </script>

    <script>
        // function saveDetails(selected_item_id){
        //     // var selected_item_id = $("#roomnames li.active").attr('id');
        //     var valForm = '#roomForm'+ selected_item_id;
        //     $(valForm).submit();
        //     // alert();
        // }

        // function ResetDetails(){
        //     location.reload();
        // }
    </script>
</body>
</html>
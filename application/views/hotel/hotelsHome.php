
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
  table.dataTable tr.odd { font-size: 13px;
      font-weight: 200;background-color:  #f8f8f8;color:#404040;font-family: -apple-system,"Helvetica Neue",Helvetica,"Segoe UI",Arial,sans-serif;}   /* tr. not tr: */
  table.dataTable tr.even { font-size: 13px;
      font-weight: 200;background-color: white;color:#404040;font-family: -apple-system,"Helvetica Neue",Helvetica,"Segoe UI",Arial,sans-serif;}
  table.dataTable>tbody>tr.child span.dtr-title{
     text-align: left;

      float:left;
 }
  table.dataTable>tbody>tr.child span.dtr-data{
      text-align: right;

      float: right;
  }
  table.dataTable>tbody>tr.child ul.dtr-details{
      width:50%;
  }
  table.dataTable>tbody>tr.child ul.dtr-details li {
      border-bottom: none !important;
      margin-bottom: 10px;
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
        <h1 style="font-size: 3em;font-weight: bold;text-transform: capitalize;">
          <?php echo $_SESSION['login_hotel']?>
          <small>Control panel</small>
        </h1>

        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content" style="padding-right:5%;padding-left:5%;">
        <!-- Small boxes (Stat box) -->
        
        <?php include 'hotelTop.php';?>
          <br>
        <div class="row" >
          <div class="col-md-12">
            <div id="about_web" class="box box-solid" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-top: 3px solid #d2d6de;">
            <div class="box-header with-border" style="text-align: center;color:dimgrey;">
            <h3 class="box-title" style="font-size:21px;"><?php echo "New orders for " . date("d/m/Y") . "<br>";?></h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body" style="padding:0 4%;">
            <h3 style="margin-bottom:15px;font-size:19px;color:dimgrey;">New Bookings</h3>
            <table id="example_checkin" class="table table-striped nowrap table-responsive" cellspacing="0" width="100%">

              <thead class="no-border">
              <tr style="text-align:center;color:#404040;font-size: 13px;font-weight: 200;">
                <th data-priority="1">Order ID</th>
                  <th data-priority="8">Name</th>
                  <th data-priority="9">Tele</th>
                <th data-priority="5">Check-In</th>
                <th data-priority="6">Check-Out</th>
                <th data-priority="7" data-orderable="false" style="min-width:150px;">Room Type</th>
                <th data-priority="4">Total Rate</th>
                <th data-priority="2" style="max-width:30px;" data-orderable="false">Confirm</th>
                <th data-priority="3" style="max-width:30px;" data-orderable="false">Ignore</th>
              </tr>
            </thead>
            <tfoot>
              <tr style="text-align:center;color:#404040;font-size: 13px;font-weight: 200;">
               <th>Order ID</th>
                  <th>Name</th>
                  <th>Tele</th>
               <th>Check-In</th>
               <th>Check-Out</th>
               <th>Room Type</th>
               <th>Total Rate</th>
               <th>Confirm</th>
               <th>Ignore</th>
             </tr>
           </tfoot>
           <tbody id="orderTable" style="text-align: center;">
            <?php 
            if(sizeof($data2)>0){
              for($i=0;$i<sizeof($data2);$i++){?>
              <tr style="text-align:center;" id="<?php echo $data2[$i][0]['booking_id']?>">
                <td style="border-right:1px solid #f4f4f4;"><?php echo $data2[$i][0]['booking_id']; ?></td>
                  <td style="border-right:1px solid #f4f4f4;"><?php echo $data2[$i][0]['customer_name']; ?></td>
                  <td style="border-right:1px solid #f4f4f4;"><?php echo $data2[$i][0]['phone']; ?></td>
                  <td style="border-right:1px solid #f4f4f4;"><?php echo  $data2[$i][0]['check_in'];?></td>
                <td style="border-right:1px solid #f4f4f4;"><?php echo  $data2[$i][0]['check_out'];?></td>
                <td style="border-right:1px solid #f4f4f4;"><?php foreach ($data2[$i] as $row){
                  echo '<span style="
                  float:left;">'.$row['item_name'].' ('.$row['quantity'].')</span><span style="
             float: right;text-align: right;"> - Rs.'.$row['rate'].'</span></br>';}?>
                </td>
                <td style="text-align:right;border-right:1px solid #f4f4f4;">
                    <?php
                    echo $data2[$i][0]['total_to_hotel'];
                    ?>
                </td>

                  <td style="max-width: 30px"> <button type="button" onclick="setConfirm(this.id)" id="<?php echo $data2[$i][0]['booking_id'].'c';?>" style="border-radius:10px;background-color:#60C060;color:white;font-size: 13px;padding:6px;cursor: pointer;" class="btn btn-default">
                          <span class="glyphicon glyphicon-thumbs-up"></span>
                      </button></td>

                <td><button type="button" onclick="setIgnored(this.id)"  id="<?php echo $data2[$i][0]['booking_id'].'i';?>" style="border-radius:10px;background-color:#DA4932;color:white;font-size: 13px;padding:6px;cursor: pointer;" class="btn btn-default">
                        <span class="glyphicon glyphicon-thumbs-down"></span>
                    </button></td>
              </tr>
            <?php }
              }?>
          </tbody>
              </table>
              <hr style="border: 2px solid rgba(0, 0, 0, 0.3);">
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

      </div>   
      <div class="row" >
        <div class="col-md-12">
          <div id="about_web" class="box box-solid" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
          ">
          <div class="box-header with-border" style="text-align:center; color:dimgrey;">
          <h3 class="box-title"  style="font-size:21px;"><?php echo "Today is " . date("d/m/Y") . "<br>";?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body" style="padding:0 4%;">
          <h3 style="margin-bottom:15px;font-size:19px;color:dimgrey;">Upcoming Check Ins</h3>
          <table id="example_checkin_today" class="table table-striped nowrap table-responsive" cellspacing="0" width="100%">
              <thead class="no-border">
              <tr style="text-align:center;color:#404040;font-size: 13px;font-weight: 200;">
              <th data-priority="1">Booking Id</th>
                <th data-priority="4">Visitor</th>
                 <th data-priority="6" data-orderable="false">Nic Number</th>
                 <th data-priority="7" data-orderable="false">Phone Number</th>
                <th data-priority="5" data-orderable="false">Order created</th>
                <th data-priority="3">Checkin</th>
                <th data-priority="4">Checkout</th>
                <th data-priority="2" data-orderable="false">Room Type</th>
               
              </tr>
            </thead>
            <tfoot >
              <tr style="text-align:center;color:#404040;font-size: 13px;font-weight: 200;">

             <th data-priority="1">Booking Id</th>
                <th data-priority="5">Visitor</th>
                 <th data-priority="6">Nic Number</th>
                 <th data-priority="7">Phone Number</th>
                <th data-priority="8">Order created</th>
                <th data-priority="3">Checkin</th>
                <th data-priority="4">Checkout</th>
                <th data-priority="2">Room Type</th>
                
              </tr>
            </tfoot>
            <tbody id="orderTable" style="text-align: center;">
               <?php 
            if(sizeof($data3)>0){
              for($i=0;$i<sizeof($data3);$i++){
              $order_date = $data3[$i][0]['order_created_date'];
              $newDate = date("Y-m-d", strtotime($order_date));?>
              <tr id="<?php echo $data3[$i][0]['booking_id']?>">
                   <td style="border-right:1px solid #f4f4f4;"><?php echo  $data3[$i][0]['booking_id'];?></td>
                <td style="border-right:1px solid #f4f4f4;"><?php echo $data3[$i][0]['customer_name']; ?></td>
                 <td style="border-right:1px solid #f4f4f4;"><?php echo  $data3[$i][0]['nic_number'];?></td>
                <td style="border-right:1px solid #f4f4f4;"><?php echo  $data3[$i][0]['phone'];?></td>
                <td style="border-right:1px solid #f4f4f4;"><?php echo  $newDate;?></td>
                <td style="border-right:1px solid #f4f4f4;"><?php echo  $data3[$i][0]['check_in'];?></td>
                <td style="border-right:1px solid #f4f4f4;"><?php echo  $data3[$i][0]['check_out'];?></td>
                <td style="text-align:left;"><?php foreach ($data3[$i] as $row){
                        echo '<span style="
                  float:left;">'.$row['item_name'].'</span><span style="
             float: right;text-align: right;"> - '.$row['quantity'].'</span></br>';}?></td>

                    </tr>
            <?php }
              }?>
            </tbody>
          </table>
          <hr style="border: 2px solid rgba(0, 0, 0, 0.3);">
        
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
      <div id="about_web" class="box box-solid" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <div class="box-header with-border" style="text-align: center;">
        <h3 class="box-title" style="font-size: 21px;">About INNA.LK</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body" style="padding-right: 3%;padding-left: 3%;">
        <p style="color:dimgrey;font-size: 14px;">-A Hotel Reservation System which offer both local and foreign tourists to book hotels in Sri Lanka using a smart, searchable website and it lets customer to choose the best hotel to book by swiftly navigating through rates, features and offers of multiple hotels in the preferred destination. Customers will be provided with the facility to pay online using eZ cash or m-cash.Additional services offered by this website are</p><ul style="color:dimgrey;font-size: 14px;"><li>Enjoy low cost bookings</li><li>Cancellation without any cost.</li><li>Automated email and sms notification system.</li><li>Location based google api services.</li></ul><br><p style="font-size: 1.4em;font-weight: bold;text-align: center;text-decoration: underline;"><a href="http://inna.lk/" style="color: #00a7d0;" >inna.lk</a></p>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->

</div>   
<!-- /.row (main row) -->

</section>

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
<!--datatables-->
<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.1.1/js/responsive.bootstrap.min.js"></script>
<script>

$(document).ready(function() {
  var table_checkin = $('#example_checkin').DataTable( {
    responsive: true
  } );

 
   var table_checkin_today = $('#example_checkin_today').DataTable( {
    responsive: true
  } );

  
   var table_checkout_today = $('#example_checkout_today').DataTable( {
    responsive: true
  } );

 
} );
</script>
<script type="text/javascript">
function setConfirm(clicked_id){
 $.ajax({
  type : 'POST',
  data : 'bookingid='+clicked_id,
  url : "<?php echo base_url(); ?>index.php/HotelController/setConfirm",
  success :   function(data){

    document.getElementById(clicked_id).disabled=true;
    document.getElementById(clicked_id).value = "CONFIRMED"
    clicked_id = clicked_id.substring(0, clicked_id.length - 1);
    document.getElementById(clicked_id).style.backgroundColor="#daefdc";
    document.getElementById(clicked_id+'i').style.visibility="hidden";
    
  }
});
}

function setIgnored(clicked_id){
 $.ajax({
  type : 'POST',
  data : 'bookingid='+clicked_id,
  url : "<?php echo base_url(); ?>index.php/HotelController/setIgnore",
  success :   function(data){

    document.getElementById(clicked_id).disabled=true;
    document.getElementById(clicked_id).value = "IGNORED"
    clicked_id = clicked_id.substring(0, clicked_id.length - 1);
    document.getElementById(clicked_id).style.backgroundColor="#d8a9a5";
    document.getElementById(clicked_id+'c').style.visibility="hidden";

  }

});
}


</script>
<!-- /.content -->
</body>
</html>

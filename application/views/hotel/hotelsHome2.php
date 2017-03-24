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
  <!-- <link rel="stylesheet" href="../../assets/plugins/morris/morris.css"> -->
  <!-- jvectormap -->
  <!-- <link rel="stylesheet" href="../../assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css"> -->
  <!-- Date Picker -->
  <!-- <link rel="stylesheet" href="../../assets/plugins/datepicker/datepicker3.css"> -->
  <!-- Daterange picker -->
  <!-- <link rel="stylesheet" href="../../assets/plugins/daterangepicker/daterangepicker-bs3.css"> -->
  <!-- bootstrap wysihtml5 - text editor -->
  <!-- <link rel="stylesheet" href="../../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"> -->
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
  table.dataTable tr.odd { background-color:  #EEEFDA ; }   /* tr. not tr: */
table.dataTable tr.even { background-color: white;}
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">

  <div class="wrapper">
    <header class="main-header">
      <!-- Logo -->
      <!-- Header Navbar: style can be found in header.less -->
      <?php include 'hotelTopMost.php'; ?>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <?php include 'hotelSidebar.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background-color:rgb(235, 235, 235);">
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
            <div id="about_web" class="box box-solid" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            ">
            <div class="box-header with-border" style="text-align: center;background: rgb(235,235,235); /* Old browsers */
            background: -moz-linear-gradient(-45deg, rgba(235,235,235,1) 10%, rgba(190,212,216,1) 27%, rgba(172,196,190,1) 36%, rgba(142,166,162,1) 46%, rgba(130,157,152,1) 54%, rgba(78,92,90,1) 73%, rgba(34,45,50,1) 86%); /* FF3.6-15 */
            background: -webkit-linear-gradient(-45deg, rgba(235,235,235,1) 10%,rgba(190,212,216,1) 27%,rgba(172,196,190,1) 36%,rgba(142,166,162,1) 46%,rgba(130,157,152,1) 54%,rgba(78,92,90,1) 73%,rgba(34,45,50,1) 86%); /* Chrome10-25,Safari5.1-6 */
            background: linear-gradient(135deg, rgba(235,235,235,1) 10%,rgba(190,212,216,1) 27%,rgba(172,196,190,1) 36%,rgba(142,166,162,1) 46%,rgba(130,157,152,1) 54%,rgba(78,92,90,1) 73%,rgba(34,45,50,1) 86%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ebebeb', endColorstr='#222d32',GradientType=1 );
            ">
            <h3 class="box-title" style="font-size: 1.6em;font-weight: bold;"><?php echo "New orders for " . date("d/m/Y") . "<br>";?></h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body" style="padding:0 4%;">
            <h3 style="margin-bottom:15px;font-weight:bold;">New Bookings</h3>
            <table id="example_checkin" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%">
              <thead style="background: linear-gradient(to bottom, #f5d11d 0%,#f3d10e 1%,#efcf1c 2%,#fccd0d 4%,#f7ca0d 5%,#f9cb1e 6%,#f7cb10 7%,#f8cc14 8%,#f0c40c 54%,#edc50c 55%,#e9c108 71%,#ecc008 78%,#e6be06 91%,#e9bd06 93%,#e8bc06 100%);
    background-image: linear-gradient(rgb(245, 209, 29) 0%, rgb(243, 209, 14) 1%, rgb(239, 207, 28) 2%, rgb(252, 205, 13) 4%, rgb(247, 202, 13) 5%, rgb(249, 203, 30) 6%, rgb(247, 203, 16) 7%, rgb(248, 204, 20) 8%, rgb(240, 196, 12) 54%, rgb(237, 197, 12) 55%, rgb(233, 193, 8) 71%, rgb(236, 192, 8) 78%, rgb(230, 190, 6) 91%, rgb(233, 189, 6) 93%, rgb(232, 188, 6) 100%);">
                <tr >
                  <th data-priority="1">Order ID</th>
                  <th data-priority="4">Check-In Date</th>
                  <th data-priority="5">Check-Out Date</th>
                  <th data-priority="6">Room Type</th>
                  <th data-priority="8">Total Rate</th>
                  <th data-priority="2">Confirm</th>
                  <th  data-priority="3">Ignore</th>
                </tr>
              </thead>
              <tfoot >
                <tr>
                 <th>Order ID</th>
                 <th>Check-In Date</th>
                 <th>Check-Out Date</th>
                 <th>Room Type</th>
                 <th>Total Rate</th>
                 <th>Confirm</th>
                 <th>Ignore</th>
               </tr>
             </tfoot>
             <tbody id="orderTable" style="text-align: center;">

              <?php 
              
              
              for($i=0;$i<sizeof($data2);$i++){?>
              <tr id="<?php echo $data2[$i][0]['booking_id']?>">

                <td><?php echo $data2[$i][0]['booking_id']; ?></td>
                <td><?php echo  $data2[$i][0]['check_in'];?></td>
                <td><?php echo  $data2[$i][0]['check_out'];?></td>

                <td style="text-align:left;"><?php foreach ($data2[$i] as $row){
                  echo $row['item_name'].' - '.$row['quantity'].'</br>';}?></td>
                <td style="text-align:right;">
                  <?php 
                    foreach ($data2[$i] as $row)
                      {
                        echo $row['room_total_rate'].'</br>';
                    } 
                    echo '<span style="border-top:1px solid;border-bottom:double;">'.$data2[$i][0]['total_rate'].'</span></br>';?></td>
                <td><input type="button" style="font-weight:bold;" class="btn btn-default" onclick="setConfirm(this.id)" value="Confirm" id=<?php echo $data2[$i][0]['booking_id'].'c';?> /></td>
                <td><input type="button" style="font-weight:bold;" class="btn btn-default" onclick="setIgnored(this.id)" value="Ignore" id=<?php echo $data2[$i][0]['booking_id'].'i';?> /></td>

              </tr>
              <?php       }
              ?>
              

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
      <div class="box-header with-border" style="text-align: center;background: rgb(235,235,235); /* Old browsers */
      background: -moz-linear-gradient(-45deg, rgba(235,235,235,1) 10%, rgba(190,212,216,1) 27%, rgba(172,196,190,1) 36%, rgba(142,166,162,1) 46%, rgba(130,157,152,1) 54%, rgba(78,92,90,1) 73%, rgba(34,45,50,1) 86%); /* FF3.6-15 */
      background: -webkit-linear-gradient(-45deg, rgba(235,235,235,1) 10%,rgba(190,212,216,1) 27%,rgba(172,196,190,1) 36%,rgba(142,166,162,1) 46%,rgba(130,157,152,1) 54%,rgba(78,92,90,1) 73%,rgba(34,45,50,1) 86%); /* Chrome10-25,Safari5.1-6 */
      background: linear-gradient(135deg, rgba(235,235,235,1) 10%,rgba(190,212,216,1) 27%,rgba(172,196,190,1) 36%,rgba(142,166,162,1) 46%,rgba(130,157,152,1) 54%,rgba(78,92,90,1) 73%,rgba(34,45,50,1) 86%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ebebeb', endColorstr='#222d32',GradientType=1 );
      ">
      <h3 class="box-title" style="font-size: 1.6em;font-weight: bold;"><?php echo "Today is " . date("d/m/Y") . "<br>";?></h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body" style="padding:0 4%;">
      <h3 style="margin-bottom:15px;font-weight:bold;">Today's Checkin</h3>
      <table id="example_checkin_today" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%">
        <thead >
          <tr>
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
        <tfoot >
          <tr>
            <th>Visitor</th>
            <th>Date created</th>
            <th>Booking No</th>
            <th>Checkin</th>
            <th>Checkout</th>
            <th>Room Type</th>
            <th>Hotel</th>
            <th>Info</th>
          </tr>
        </tfoot>
        <tbody id="orderTable" style="text-align: center;">
        </tbody>
      </table>
      <hr style="border: 2px solid rgba(0, 0, 0, 0.3);">
      <h3 style="margin-bottom:15px;font-weight:bold;">Today's Checkout</h3>
      <div class="table-responsive ">          
        <table id="example" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%">
          <thead >
            <tr>
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
          <tbody id="orderTable" style="text-align: center;">


          </tbody>
        </table>
        <hr style="border: 2px solid rgba(0, 0, 0, 0.3);">
        <br>
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
    <div id="about_web" class="box box-solid" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
      <div class="box-header with-border" style="text-align: center;background: rgb(235,235,235); /* Old browsers */
      background: -moz-linear-gradient(-45deg, rgba(235,235,235,1) 10%, rgba(190,212,216,1) 27%, rgba(172,196,190,1) 36%, rgba(142,166,162,1) 46%, rgba(130,157,152,1) 54%, rgba(78,92,90,1) 73%, rgba(34,45,50,1) 86%); /* FF3.6-15 */
      background: -webkit-linear-gradient(-45deg, rgba(235,235,235,1) 10%,rgba(190,212,216,1) 27%,rgba(172,196,190,1) 36%,rgba(142,166,162,1) 46%,rgba(130,157,152,1) 54%,rgba(78,92,90,1) 73%,rgba(34,45,50,1) 86%); /* Chrome10-25,Safari5.1-6 */
      background: linear-gradient(135deg, rgba(235,235,235,1) 10%,rgba(190,212,216,1) 27%,rgba(172,196,190,1) 36%,rgba(142,166,162,1) 46%,rgba(130,157,152,1) 54%,rgba(78,92,90,1) 73%,rgba(34,45,50,1) 86%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ebebeb', endColorstr='#222d32',GradientType=1 );">
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
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script> -->
<!-- Sparkline -->
<!-- <script src="../../assets/plugins/sparkline/jquery.sparkline.min.js"></script> -->
<!-- jvectormap -->
<!-- <script src="../../assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script> -->
<!-- <script src="../../assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script> -->
<!-- jQuery Knob Chart -->
<!-- <script src="../../assets/plugins/knob/jquery.knob.js"></script> -->
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<!-- <script src="../../assets/plugins/daterangepicker/daterangepicker.js"></script> -->
<!-- datepicker -->
<!-- <script src="../../assets/plugins/datepicker/bootstrap-datepicker.js"></script> -->
<!-- Bootstrap WYSIHTML5 -->
<!-- <script src="../../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script> -->
<!-- Slimscroll -->
<!-- <script src="../../assets/plugins/slimScroll/jquery.slimscroll.min.js"></script> -->
<!-- FastClick -->
<!-- <script src="../../assets/plugins/fastclick/fastclick.js"></script> -->
<!-- AdminLTE for demo purposes -->
<!-- <script src="../../assets/dist/js/demo.js"></script> -->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.2/js/dataTables.fixedHeader.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.1.1/js/responsive.bootstrap.min.js"></script>
<script>
$.extend( true, $.fn.dataTable.defaults, {
  "searching": false,
  "ordering": false
} );

$(document).ready(function() {

  var table_checkin = $('#example_checkin').DataTable( {
    responsive: true
  } );
  new $.fn.dataTable.FixedHeader( table_checkin );

  // var table_checkin_today = $('#example_checkin_today').DataTable( {
  //   responsive: true
  // } );
  // new $.fn.dataTable.FixedHeader( table_checkin_today );

  // var table_checkout_today = $('#example_checkout_today').DataTable( {
  //   responsive: true
  // } );
  // new $.fn.dataTable.FixedHeader( table_checkout_today );

} );

</script>
<?php

    # code...

$cart_info_json = json_encode($data2);


?>
<script>
 


</script>
<script type="text/javascript"\>
// function Booking ( booking_id,item_name ) {
//   this.booking_id = booking_id;
//   this.item_name = item_name;
// };
// $('#example_checkin').DataTable( {
//   var obj = JSON.parse('<?= $cart_info_json; ?>');
//   data: [
//   for(var i =0;i<obj.length;i++){
//     for(var j =0;j<obj[i].length;j++){
//       new Booking(obj[i][j].booking_id,'');
//     }
//   }
//   ],
//   columns: [
//   { data: 'booking_id' },
//   { data: 'item_name' },

//   ]
// } );


function setConfirm(clicked_id){
 $.ajax({
  type : 'POST',
  data : 'bookingid='+clicked_id,
  url : "<?php echo base_url(); ?>index.php/HotelController/setConfirm",
  dataType: 'json',
  success :   function(data){
    alert("data");
     console.log(clicked_id);
    document.getElementById(clicked_id).disabled=true;
    clicked_id = clicked_id.substring(0, clicked_id.length - 1);

    document.getElementById(clicked_id).style.backgroundColor="blue";
  }
});
}

function setIgnore(clicked_id){
 $.ajax({
  type : 'POST',
  url : "<?php echo base_url(); ?>index.php/HotelController/setRooms",
  dataType: 'json',
  success :   function(data){}

});
}

</script>
</body>
</html>

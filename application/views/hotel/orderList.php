
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
  
  .infobtn{
    background: url('../../assets/images/info.png') left center no-repeat;
  }
  .infobtn : hover {
    background-color: #ecc008;
  }
  /* created a TESTBOX class as a PARENT ELEMENT (DIV) */
  .testbox {
    background: #000000;
    color: #FFFFFF;
    padding: 10px;
    min-height: 200px;
  }
  .testbox .modal{ 
    color: #333;
  }

  /* overwriting default behaviour of Modal Popup in Bootstrap  */
  body{ 
    overflow: auto !important;
  }
  .modal{ 
    overflow: hidden; 
  }

  /* created new class for targetting purpose - named ".modal2", ".modal1" */
  .modal2.in{ 
    position: absolute; 
    bottom: 0; 
    right:0; 
    left: auto; 
    bottom: 0; 
    overflow: auto;
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
    <div class="content-wrapper" style="background-color:#EEEFDA;">

      <!-- Content Header (Page header) -->
      <section class="content-header" style="padding-right:5%;padding-left:5%;padding-top:5%;">
     <h1 style="font-weight:bold;font-size: 2em;">
          History Of Bookings.
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
            <div class="box-header with-border" style="text-align: center;background: rgb(235,235,235); /* Old browsers */
            background: -moz-linear-gradient(-45deg, rgba(235,235,235,1) 10%, rgba(190,212,216,1) 27%, rgba(172,196,190,1) 36%, rgba(142,166,162,1) 46%, rgba(130,157,152,1) 54%, rgba(78,92,90,1) 73%, rgba(34,45,50,1) 86%); /* FF3.6-15 */
            background: -webkit-linear-gradient(-45deg, rgba(235,235,235,1) 10%,rgba(190,212,216,1) 27%,rgba(172,196,190,1) 36%,rgba(142,166,162,1) 46%,rgba(130,157,152,1) 54%,rgba(78,92,90,1) 73%,rgba(34,45,50,1) 86%); /* Chrome10-25,Safari5.1-6 */
            background: linear-gradient(135deg, rgba(235,235,235,1) 10%,rgba(190,212,216,1) 27%,rgba(172,196,190,1) 36%,rgba(142,166,162,1) 46%,rgba(130,157,152,1) 54%,rgba(78,92,90,1) 73%,rgba(34,45,50,1) 86%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ebebeb', endColorstr='#222d32',GradientType=1 );
            ">
            <h3 class="box-title" style="font-size: 1.6em;font-weight: bold;"><?php echo "Order History for " . date("d/m/Y") . "<br>";?></h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body" style="padding:0 4%;min-height:100px;">
            <div class="modal bs-modal-md col-sm-12 col-xs-12 modal2" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-md">
                <div class="modal-content"> 
                  <div class="modal-header" style="background: linear-gradient(to bottom, #f5d11d 0%,#f3d10e 1%,#efcf1c 2%,#fccd0d 4%,#f7ca0d 5%,#f9cb1e 6%,#f7cb10 7%,#f8cc14 8%,#f0c40c 54%,#edc50c 55%,#e9c108 71%,#ecc008 78%,#e6be06 91%,#e9bd06 93%,#e8bc06 100%);
    background-image: linear-gradient(rgb(245, 209, 29) 0%, rgb(243, 209, 14) 1%, rgb(239, 207, 28) 2%, rgb(252, 205, 13) 4%, rgb(247, 202, 13) 5%, rgb(249, 203, 30) 6%, rgb(247, 203, 16) 7%, rgb(248, 204, 20) 8%, rgb(240, 196, 12) 54%, rgb(237, 197, 12) 55%, rgb(233, 193, 8) 71%, rgb(236, 192, 8) 78%, rgb(230, 190, 6) 91%, rgb(233, 189, 6) 93%, rgb(232, 188, 6) 100%);">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 class="modal-title" id="myModalLabel" style="font-weight:bold;">Customer Booking Details</h3>
                  </div>
                  
                  <div class="modal-body">
                    
         
          <!-- /.box-header -->
          <div class="box-body" style="padding:0 4%;min-height:100px;font-type:roboto;font-size:1.3em;">
            <div class="row">
            <div class="col-md-4" style="font-weight:bold;">Booking Id</div>
            <div class="col-md-8" id="bid"></div><hr>
          </div>  <div class="row" style="font-weight:bold;">
            <div class="col-md-4">Customer Name</div>
            <div class="col-md-8" id="full_name"></div><hr>
              </div>  <div class="row" style="font-weight:bold;">
            <div class="col-md-4">Address</div>
            <div class="col-md-8" id="address"></div><hr>
              </div>  <div class="row" style="font-weight:bold;">
            <div class="col-md-4">Country</div>
            <div class="col-md-8" id="country"></div><hr>
              </div>  <div class="row" style="font-weight:bold;">
            <div class="col-md-4">Nic Number</div>
            <div class="col-md-8" id="nic_num"></div><hr>
                  </div>  <div class="row" style="font-weight:bold;">
            <div class="col-md-4">Email</div>
            <div class="col-md-8" id="email"></div><hr>
                  </div>  <div class="row" style="font-weight:bold;">
            <div class="col-md-4">Telephone</div>
            <div class="col-md-8" id="telephone"></div><hr>
                  </div>  
        
                  </div>
                </div>
             
                </div>
              </div>
            </div>
            <h3 style="margin-bottom:15px;font-weight:bold;">Order History</h3>
            <table id="example_checkin" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%">
              <thead style="background: linear-gradient(to bottom, #f5d11d 0%,#f3d10e 1%,#efcf1c 2%,#fccd0d 4%,#f7ca0d 5%,#f9cb1e 6%,#f7cb10 7%,#f8cc14 8%,#f0c40c 54%,#edc50c 55%,#e9c108 71%,#ecc008 78%,#e6be06 91%,#e9bd06 93%,#e8bc06 100%);
              background-image: linear-gradient(rgb(245, 209, 29) 0%, rgb(243, 209, 14) 1%, rgb(239, 207, 28) 2%, rgb(252, 205, 13) 4%, rgb(247, 202, 13) 5%, rgb(249, 203, 30) 6%, rgb(247, 203, 16) 7%, rgb(248, 204, 20) 8%, rgb(240, 196, 12) 54%, rgb(237, 197, 12) 55%, rgb(233, 193, 8) 71%, rgb(236, 192, 8) 78%, rgb(230, 190, 6) 91%, rgb(233, 189, 6) 93%, rgb(232, 188, 6) 100%);">
              <tr >
                <th data-priority="1">Order ID</th>
                <th data-priority="4">Check-In Date</th>
                <th data-priority="5">Check-Out Date</th>
                <th data-priority="6">Room Type</th>
                <th data-priority="7">Total Rate</th>
                <th data-priority="2">Status</th>
                <th data-priority="3">More Details</th>
              </tr>
            </thead>
            <tfoot >
              <tr>
               <th>Order ID</th>
               <th>Check-In Date</th>
               <th>Check-Out Date</th>
               <th>Room Type</th>
               <th>Total Rate</th>
               <th>Status</th>
               <th>More Details</th>
             </tr>
           </tfoot>
           <tbody id="orderTable" style="text-align: center;">
            <?php 

            if(sizeof($data2)>0){
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
                    echo '<span style="border-top:1px solid;border-bottom:double;">'.$data2[$i][0]['total_rate'].'</span></br>';?>
                  </td>
                  <?php $status = $data2[$i][0]['confirm_hotel'];
                  if($status==2){ ?>
                  <td style="padding-top:2%;"><img src="../../assets/images/remove.png" title="ignored orders" ></td>
                  <?php }elseif($status==0){ ?>
                  <td><input type="button" style="font-weight:bold;margin-bottom:4%;width:100%;background-color:#def1b7;color:black;" class="btn btn-default" onclick="setConfirm(this.id)" value="Confirm" id="<?php echo $data2[$i][0]['booking_id'].'c';?>" /></br>
                    <input type="button" style="font-weight:bold;width:100%;background-color:#ff8279;color:black;" class="btn btn-default" onclick="setIgnored(this.id)" value="Ignore" id="<?php echo $data2[$i][0]['booking_id'].'i';?>" /></td>
                    <?php }elseif ($status == 1) { ?>
                    <td style="padding-top:2%;"><img src="../../assets/images/icon.png" title="accepted orders" ></td>
                    <?php   } ?>
                    <td style="padding-top:2%;"><input type="button" title="click here to viewmore details" style="font-weight:bold;border:none;z-index:100;" class="btn btn-default infobtn" data-toggle="modal" data-target="#myModal"  id="<?php echo $i;?>" /></td>

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
<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.2/js/dataTables.fixedHeader.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.1.1/js/responsive.bootstrap.min.js"></script>

<script type="text/javascript">
  
function setConfirm(clicked_id){
    var dataArry =  <?php echo  json_encode($data2);?>;
    i=clicked_id;
    $('#full_name').html(dataArry[i][0].customer_name+" "+dataArry[i][0].last_name);
    $('#address').html(dataArry[i][0].address);
    $('#country').html(dataArry[i][0].country);
    $('#nic_num').html(dataArry[i][0].nic_number);
    $('#email').html(dataArry[i][0].email);
     $('#telephone').html(dataArry[i][0].telephone_num);
     $('#bid').html(dataArry[i][0].booking_id);
  }
  $(".infobtn").click(function(){
    setConfirm(this.id);
  });

</script>
<script>

$(document).ready(function() {
  
  var table = $('#example_checkin').DataTable( {
    responsive: true,
    paging:false
  } );
 



} );
$( ".infobtn" ).hover(function() {
  $( this ).fadeOut( 100 );
  $( this ).fadeIn( 500 );


});
</script>

</body>
</html>

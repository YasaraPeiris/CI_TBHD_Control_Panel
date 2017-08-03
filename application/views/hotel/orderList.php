
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
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background-color:ghostwhite;">

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
        <section class="content" style="padding-right:5%;padding-left:5%;padding-top: 2%;">
            <div id="about_web" class="box box-solid" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-top: 3px solid #d2d6de;">

                <div class="box-header with-border" style="text-align: center;">
                    <h3 class="box-title" style="text-align: center;color:dimgrey;padding-top:6px;font-weight: bold;font-size: 18px;"><?php echo "Order History for " . date("d/m/Y") . "<br>";?></h3>
                </div>
                <div class="small-box" id="hotelDes" style="box-shadow:none;">
                    <div style="background: white;" >
                        <div class="box box-info" style="border-color:gray;border:1px solid #f4f4f4;">
                            <div class="box-body pad" style="color: black;padding-left: 3%;padding-right: 3%;">
                                <table id="example_checkin" class="table table-striped nowrap table-responsive" cellspacing="0" width="100%">
                                    <thead class="no-border" style="text-align: center;">
                                    <tr style="text-align:center;color:#404040;font-size: 13px;font-weight: 200;">
                                        <th data-priority="1" style="text-align: center;">Order ID</th>
                                        <th data-priority="4" style="text-align: center;">Check-In Date</th>
                                        <th data-priority="5" style="text-align: center;">Check-Out Date</th>
                                        <th data-priority="6" style="text-align: center;" data-orderable="false" style="min-width:150px;">Room Type</th>
                                        <th data-priority="7" style="text-align: center;">Total Rate</th>
                                        <th data-priority="2" style="text-align: center;">Status</th>
                                        <th data-priority="3" style="text-align: center;" data-orderable="false">More Details</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr style="text-align:center;color:#404040;font-size: 13px;font-weight: 200;">
                                        <th>Order ID</th>
                                        <th>Check-In Date</th>
                                        <th>Check-Out Date</th>
                                        <th>Room Type</th>
                                        <th>Total Rate</th>
                                        <th>Status</th>
                                        <th>More Details</th>
                                    </tr>
                                    </tfoot>
                                    <tbody id="orderTable" style="text-align: center;color: dimgrey;font-size: 13px;">
                                    <?php

                                    if(sizeof($data2)>0){
                                        for($i=0;$i<sizeof($data2);$i++){?>
                                            <tr id="<?php echo $data2[$i][0]['booking_id']?>">
                                                <td><?php echo $data2[$i][0]['booking_id']; ?></td>
                                                <td><?php echo  $data2[$i][0]['check_in'];?></td>
                                                <td><?php echo  $data2[$i][0]['check_out'];?></td>
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

                                                <?php $status = $data2[$i][0]['confirm_hotel'];
                                                if($status==2){ ?>
                                                    <td style="padding-top:2%;"><img src="../../assets/images/remove.png" title="ignored orders" ></td>
                                                <?php }elseif($status==0){ ?>
                                                    <td style="vertical-align: middle;"><img src="../../assets/images/remove.png" title="unaccepted orders" style="margin: auto;" width="16" height="16"></td> <?php }elseif ($status == 1) { ?>
                                                    <td style="vertical-align: middle;"><img src="../../assets/images/icon.png" title="accepted orders" style="margin: auto;vertical-align: middle;" width="16" height="16"></td>
                                                <?php   } ?>
                                                <td><input type="button" title="click here to viewmore details" style="width:24px;height:24px;font-weight:bold;border:none;z-index:100;" class="btn btn-default infobtn" data-toggle="modal" data-target="#myModal"  id="<?php echo $i;?>" /></td>

                                            </tr>
                                        <?php }
                                    }?>
                                    </tbody>
                                </table>
                                <hr style="border: 1px solid rgba(0, 0, 0, 0.3);">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Main content -->

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
            $('#full_name').html(dataArry[i][0].customer_name);
            $('#country').html(dataArry[i][0].country);
            $('#nic_num').html(dataArry[i][0].nic_number);
            $('#email').html(dataArry[i][0].email);
            $('#telephone').html(dataArry[i][0].phone);
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

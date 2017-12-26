<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>inna.lk :: Control Panel</title>
    <link rel="shortcut icon" href="../../assets/images/favicon.ico"/>

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
        <?php include 'hotelTopMost.php'; ?>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <?php include 'hotelSidebar.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header" style="padding-right:5%;padding-left:5%;padding-top:2%;">
            <h1 style="font-weight:bold;font-size: 2em;">
                Edit Details
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Edit Hotel Details</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content" style="padding-right:5%;padding-left:5%;">
            <!-- Small boxes (Stat box) -->


            <div class="row" style="">
                <!--            <h1 style="color: black;padding-left: 1%;">Edit Details</h1>-->
                <!-- ./col -->
                <br>
                <div class="col-lg-6 col-xs-12">
                    <!-- small box -->
                    <div class="small-box" style="height:250px;text-align: center;background: linear-gradient(to bottom, rgba(250,250,250,1) 0%, rgba(232,232,232,1) 100%);
">
                        <div class="inner"
                             style="height:200px;background: white;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            <h1 style="color:black;">Update Hotel Details.</h1>
                            <br>
                            <p style="color: #555555;font-size: 1.2em;">(Click here to change hotel details,basic
                                facilities, and related details.)</p>

                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a title="My account"
                           href='<?php echo base_url('index.php/EditDetailsController/hotelDetails'); ?>'
                           class="small-box-footer"
                           style="height: 50px;line-height: 50px;font-size: 1.2em;color:#222d32;">Click Here <i
                                    class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-xs-12">
                    <!-- small box -->
                    <div class="small-box " style="height:250px;text-align: center;background: linear-gradient(to bottom, rgba(250,250,250,1) 0%, rgba(232,232,232,1) 100%);
">
                        <div class="inner"
                             style="height:200px;background: white;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            <h1 style="color:black;">Update Room Details.</h1>
                            <br>
                            <p style="color:#555555;font-size: 1.2em;">(Click here to change room details.)</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a title="My account"
                           href='<?php echo base_url('index.php/EditDetailsController/roomDetails'); ?>'
                           class="small-box-footer"
                           style="height: 50px;line-height: 50px;font-size: 1.2em;color:#222d32;">Click Here <i
                                    class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <div class="row" style="padding-top: 1%;padding-bottom: 1%;">
                <!--            <h1 style="color: black;padding-left: 1%;">Edit Details</h1>-->
                <!-- ./col -->
                <br>
                <div class="col-lg-6 col-xs-12">
                    <!-- small box -->
                    <div class="small-box" style="height:250px;text-align: center;background: linear-gradient(to bottom, rgba(250,250,250,1) 0%, rgba(232,232,232,1) 100%);
">
                        <div class="inner"
                             style="height:200px;background: white;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            <h1 style="color:black;">Update Images.</h1>
                            <br>
                            <p style="color: #555555;font-size: 1.2em;">(Click here to add or alter images of your listing.)</p>

                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a title="My account" href="<?php echo base_url('index.php/EditImagesController/getImages'); ?>" class="small-box-footer"
                           style="height: 50px;line-height: 50px;font-size: 1.2em;color:#222d32;">Click Here <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        <!-- href='<?php //echo base_url ('index.php/EditDetailsController/updateHotelDetails'); ?>' -->
                       <!--  <script type="text/javascript">
                            // function bb() {
                            //     // alert('Sorry, Adding promotions are not allowed yet.');
                            // }
                        </script> -->
                    </div>
                </div>
                <div class="col-lg-6 col-xs-12">
                    <!-- small box -->
                    <div class="small-box " style="height:250px;text-align: center;background: linear-gradient(to bottom, rgba(250,250,250,1) 0%, rgba(232,232,232,1) 100%);
">
                        <div class="inner"
                             style="height:200px;background: white;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            <h1 style="color:black;">Update Room Images.</h1>
                            <br>
                            <p style="color:#555555;font-size: 1.2em;">(Click here to add or alter room images.)</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a title="My account" href="<?php echo base_url('index.php/EditImagesController/roomimages'); ?>" class="small-box-footer"
                           style="height: 50px;line-height: 50px;font-size: 1.2em;color:#222d32;">Click Here <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        <!-- href='<?php //echo base_url ('index.php/EditDetailsController/viewHomePage'); ?>' -->
                        <!-- <script type="text/javascript">
                            // function aa() {
                            //     alert('Sorry, Adding package details is not allowed yet.');
                            // }
                        </script> -->
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->

            <!-- /.row -->
            <!-- Main row -->


        </section>

        <!-- /.content -->
    </div>
    <?php 
       include 'footer.html';
    ?>
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

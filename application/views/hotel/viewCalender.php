<?php
/**
 * Created by The Best Hotel Deal.
 * User: Wenuka_Guneratne_&_Yasara_Peiris
 * Date: 8/2/2017
 * Time: 6:53 AM
 */?>
<!doctype html>
<head xmlns="http://www.w3.org/1999/html">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <title>inna.lk :: Control Panel</title>
    <!-- <link href="favicon.ico" rel="shortcut icon"> -->
    <link rel="shortcut icon" href="../../assets/images/favicon.ico" />

    <script src='../../assets/lib-cal/dhtmlxScheduler/dhtmlxscheduler.js'></script>
    <script src='../../assets/lib-cal/dhtmlxScheduler/ext/dhtmlxscheduler_limit.js'></script>
    <script src='../../assets/lib-cal/dhtmlxScheduler/ext/dhtmlxscheduler_collision.js'></script>
    <script src='../../assets/lib-cal/dhtmlxScheduler/ext/dhtmlxscheduler_timeline.js'></script>
    <script src='../../assets/lib-cal/dhtmlxScheduler/ext/dhtmlxscheduler_editors.js'></script>
    <script src='../../assets/lib-cal/dhtmlxScheduler/ext/dhtmlxscheduler_minical.js'></script>
    <script src='../../assets/lib-cal/dhtmlxScheduler/ext/dhtmlxscheduler_tooltip.js'></script>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>var test='<?php echo $data_array?>'</script>
    <script src='../../assets/js-cal/mock_backend.js'></script>
    <script src='../../assets/js-cal/scripts.js'></script>

    <link rel='stylesheet' href='../../assets/lib-cal/dhtmlxScheduler/dhtmlxscheduler_flat.css'>
    <link rel='stylesheet' href='../../assets/css-cal/styles.css'>
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
<style>
    .dhx_cal_light_wide{
        position: absolute;
        left: 50% !important;
        /* now you must set a margin left under zero - value is a half width your window */
        margin-left: -312px !important;
        /* this same situation is with height - example */
        height: 500px;
        top: 50% !important;
        margin-top: -250px !important;
    }
</style>
</head>

<body class="hold-transition skin-blue sidebar-mini" onload="init()">
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
            <div class="row" >
                <div class="col-md-12">
                    <div id="about_web" class="box box-solid" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-top: 3px solid #d2d6de;">

                        <div class="box-header with-border" style="text-align: center;">
                            <h3 class="box-title" style="text-align: center;color:dimgrey;padding-top:6px;font-weight: bold;font-size: 18px;">View order calender</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body" style="padding:0 4%;">
                            <br>

                            <div id="scheduler_here" class="dhx_cal_container" style='width:100%;min-height:800px; max-height:1000px; position:relative;'>
    <div class="dhx_cal_navline">

        <div style="font-size:16px;padding:4px 20px;">
            Show rooms:
            <select id="room_filter" onchange='updateSections(this.value)'></select>
        </div>
        <div class="dhx_cal_prev_button">&nbsp;</div>
        <div class="dhx_cal_next_button">&nbsp;</div>
        <div class="dhx_cal_today_button"></div>
        <div class="dhx_cal_date"></div>
    </div>
    <div class="dhx_cal_header">
    </div>
    <div class="dhx_cal_data">
    </div>
                            </div></div></div></div></div></section>
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
</body>


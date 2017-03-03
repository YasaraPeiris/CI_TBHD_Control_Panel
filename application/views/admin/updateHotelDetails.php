<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="../../plugins/iCheck/flat/blue.css">
        <!-- Morris chart -->
        <link rel="stylesheet" href="../../plugins/morris/morris.css">
        <!-- jvectormap -->
        <link rel="stylesheet" href="../../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
        <!-- Date Picker -->
        <link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker-bs3.css">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
        <link href="../../dist/css/bootstrap-dialog.css" rel='stylesheet' type='text/css'/>

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
    <?php include './adminTopMost.php';?>
  </header>
            <!-- Left side column. contains the logo and sidebar -->
            <?php include './adminSidebar.php'; ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">

                    <div class="row">
                        Control Panel-Admin
                    </div>
                </section>

                <!-- Main content -->
                <section class="content">
                    <!-- Small boxes (Stat box) -->
                    <?php include './adminTop.php'; ?>


                    <div class="row" style="padding-top: 1%;padding-bottom: 3%;">
                        <!--            <h1 style="color: black;padding-left: 1%;">Edit Details</h1>-->
                        <!-- ./col -->
                        <br>
                        <!-- ./col -->
                        <!--      <div class="col-lg-4 col-xs-12">
                                   small box 
                                  <div class="small-box bg-red"  style="height:250px;text-align: center;">
                                    <div class="inner" style="height:200px;background: white;border:gray;border-style: dotted;border-width: 0.6em;">
                                        <h1 style="color:black;">Update Room Availability.</h1>
                                        <br>
                                        <p style="color: gray;font-size: 1.2em;">(Click here to change room's availability.)</p>
                                    </div>
                                    <div class="icon">
                                      <i class="ion ion-pie-graph"></i>
                                    </div>
                                         <a href="./roomAvailability.php" class="small-box-footer" style="height: 50px;line-height: 50px;font-size: 1.2em;;">Click Here <i class="fa fa-arrow-circle-right"></i></a>
                              </div>
                                </div>-->
                        <!-- ./ol -->
                        <div class="col-lg-6 col-xs-12">
                            <!-- small box -->
                            <div class="small-box"  style="background-color:#000044;height:300px;text-align: center;">
                                <div class="inner" style="height:250px;background: white;border:gray;border-style: dotted;border-width: 0.6em;text-align: center;">
                                    <p style="color:black;background-color:maroon;width: 10%;text-align: center;font-weight: bolder;border-radius: 20%;height:40px;font-size: 1.5em;padding: 2%;">9</p>

                                    <h1 style="color:black;">Check Hotel Description Updates</h1>
                                    <br>
                                    <p style="color: gray;font-size: 1.2em;">(Click here to check hotel updates)</p>

                                </div>
                                <!--            <div class="icon">
                                              <i class="ion ion-pie-graph"></i>
                                            </div>-->

                                <a href="descriptionNotifications.php" class="small-box-footer" style="height: 50px;line-height: 50px;font-size: 1.2em;;">Click Here <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xs-12">
                            <!-- small box -->
                            <div class="small-box"  style="background-color:#000044;height:300px;text-align: center;">
                                <div class="inner" style="height:250px;background: white;border:gray;border-style: dotted;border-width: 0.6em;">
                                    <p style="color:black;background-color:maroon;width: 10%;text-align: center;font-weight: bolder;border-radius: 20%;height:40px;font-size: 1.5em;padding: 2%;">9</p>

                                    <h1 style="color:black;">Check Basic Facility Updates</h1>
                                    <br>
                                    <p style="color: gray;font-size: 1.2em;">(Click here to check hotel updates.)</p>
                                </div>
                                <!--            <div class="icon">
                                              <i class="ion ion-pie-graph"></i>
                                            </div>-->
                                <a href="basicNotifications.php" class="small-box-footer" style="height: 50px;line-height: 50px;font-size: 1.2em;;">Click Here <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
<!--                        <div class="col-lg-4 col-xs-12">
                             small box 
                            <div class="small-box bg-red"  style="height:300px;text-align: center;">
                                <div class="inner" style="height:250px;background: white;border:gray;border-style: dotted;border-width: 0.6em;">
                                    <p style="color:black;background-color:#dd4b39;width: 20%;text-align: center;font-weight: bolder;border-radius: 20%;height:40px;font-size: 1.5em;padding: 2%;">9</p>

                                    <h1 style="color:black;">Check Room Facility Updates</h1>
                                    <br>
                                    <p style="color: gray;font-size: 1.2em;">(Click here to check hotel updates)</p>
                                </div>
                                            <div class="icon">
                                              <i class="ion ion-pie-graph"></i>
                                            </div>
                                <a href="roomNotifications.php" class="small-box-footer" style="height: 50px;line-height: 50px;font-size: 1.2em;;">Click Here <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>-->
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->


                    <!-- /.row -->
                    <!-- Main row -->



                </section>

                <!-- /.content -->
            </div>

            <!-- /.content-wrapper -->
            <?php include '../footer.php';?>

            <!-- Control Sidebar -->

            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery 2.2.0 -->
        <script src="../../plugins/jQuery/jQuery-2.2.0.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.6 -->
        <script src="../../bootstrap/js/bootstrap.min.js"></script>
        <!-- Morris.js charts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="../../plugins/morris/morris.min.js"></script>
        <!-- Sparkline -->
        <script src="../../plugins/sparkline/jquery.sparkline.min.js"></script>
        <!-- jvectormap -->
        <script src="../../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="../../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="../../plugins/knob/jquery.knob.js"></script>
        <!-- daterangepicker -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
        <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
        <!-- datepicker -->
        <script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
        <!-- Slimscroll -->
        <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="../../plugins/fastclick/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="../../dist/js/app.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="../../dist/js/pages/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../../dist/js/demo.js"></script>
        <script src="../../dist/js/bootstrap-dialog.js"></script>
        <script src="../../dist/js/jquery.confirm.js"></script>
        <script>
            function changeDisable() {
                var $checkboxes = new Array();
                document.getElementById('bfacility').disabled = false;
                $checkboxes = document.getElementsByName('check_list[]');

                for (var i = 0; i < $checkboxes.length; i++) {

                    $checkboxes[i].disabled = false;

                }
            }
            function updateBasic() {
                $.ajax({
                    type: 'POST',
                    url: 'updatebasic.php',
                    data: $('#updateBasic').serialize(),
                    success: function (data) {
                        
                    }
                });
            }
            function button1() {

                document.getElementById('hotelDes').style.display = "block";
                document.getElementById('basicFacilities').style.display = "none";
                document.getElementById('roomFacilities').style.display = "none";
            }
            function button2() {

                document.getElementById('hotelDes').style.display = "none";
                document.getElementById('basicFacilities').style.display = "block";
                document.getElementById('roomFacilities').style.display = "none";
            }
            function button3() {

                document.getElementById('hotelDes').style.display = "none";
                document.getElementById('basicFacilities').style.display = "none";
                document.getElementById('roomFacilities').style.display = "block";
            }
            function updateDes() {
                $.ajax({
                    type: 'POST',
                    url: 'updateDes.php',
                    data: $('#desc').serialize(),
                    success: function (data) {
                        
                    }
                });
            }
            function changeRoomDisable() {
                var $checkboxes = new Array();
                document.getElementById('roomfacility').disabled = false;
                $checkboxes = document.getElementsByName('check_roomlist[]');

                for (var i = 0; i < $checkboxes.length; i++) {
                    $checkboxes[i].disabled = false;
                }
            }
            function updateRoom() {
                var boolCheck;
                boolCheck = false;
                $checkboxes = document.getElementsByName('check_roomlist[]');

                for (var i = 0; i < $checkboxes.length; i++) {
                    if ($checkboxes[i].checked) {
                        boolCheck = true
                    }
                }
                if (boolCheck) {
                    $.ajax({
                        type: 'POST',
                        url: 'updatebasic.php',
                        data: $('#updateRoom').serialize(),
                        success: function (data) {
                            
                            document.getElementById('roomfacility').disabled = true;
                            document.getElementById("coreEdit").style.display = 'none';
                            var checkboxes = document.getElementsByName('check_roomlist[]');
                        }

                    });
                } else {
                    BootstrapDialog.alert("Select facilities you want to update");
                }
            }
            function loadprice() {
                document.getElementById("coreEdit").style.display = 'block';
                var comp = document.getElementById("roomtypemodal").selectedIndex;

                var obj;
                if (window.XMLHttpRequest) {
                    obj = new XMLHttpRequest();
                } else if (window.ActiveXObject) {
                    obj = new ActiveXObject("Microsoft.XMLHTTP");
                } else {
                    alert("Browser Doesn't Support AJAX!");
                }
                if (obj !== null) {
                    obj.onreadystatechange = function () {
                        if (obj.readyState < 4) {
                            // progress
                        } else if (obj.readyState === 4) {
                            var res = obj.responseText;
                            var checkboxes = document.getElementsByName('check_roomlist[]');

                            for (var f = 0; f < checkboxes.length; f++) {
                                checkboxes[f].checked = false;
                                checkboxes[f].disabled = true;
                            }
                            for (var i = 0; i < JSON.parse(res).length; i++) {

                                for (var f = 0; f < checkboxes.length; f++) {

                                    var t = JSON.parse(res)[0].basic_facility;


                                    if (t == checkboxes[f].value) {
                                        checkboxes[f].disabled = false;
                                        checkboxes[f].checked = true;
                                        checkboxes[f].disabled = true;
                                        break;
                                    }
                                }
                            }
                        }
                    }
                    obj.open("GET", "test1.php?roomType=" + encodeURIComponent(comp), true);
                    obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    obj.send();
                }
            }

        </script>
    </body>
</html>

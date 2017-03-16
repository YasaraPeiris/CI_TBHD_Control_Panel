
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
    <body class="hold-transition skin-blue sidebar-mini" style="overflow-y: auto;">
       
        <div class="wrapper">

            <!-- Left side column. contains the logo and sidebar -->
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
                    <h1 style="font-weight:bold;font-size: 3.5em;">
                        Update Hotel Details
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
                 

                    <div class="row" style="background: white;;padding-top: 1%;padding-bottom: 3%;">
                        <h1 style="color: black;padding-left: 1%;text-decoration: underline;">Edit Details</h1>

                        <!-- ./col -->
                        <br>
                        <div class="col-md-3">
                            <div class="small-box"  style="background-color: #000044;text-align: center;padding:2%;padding-top: 10px;padding-bottom: 82px;height:430px;alignment-adjust: central;">
                                <div class="btn-group-vertical" style="background: white;padding:3%;">
                                    <button type="button" class="btn btn-block btn-success btn-lg" style='background-color: maroon;' onclick="button1()">Update Hotel Description</button>
                                    <br>
                                    <button type="button" class="btn btn-block btn-success btn-lg" style='background-color: maroon;'onclick="button2()">Update Basic Facilities</button>
<!--                                    <br>
                                    <button type="button" class="btn btn-block btn-success btn-lg" onclick="button3()">Update Room Facilities</button>-->
                                </div>
                               
                                <div style="background: #555555;height: 220px;margin-left: 4%;margin-right: 4%;border:solid;border-color: white;margin-top: 15%;margin-bottom: 15%;">
                                    <p style="font-family: courier;font-size: 1.8em;padding-top: 5%;color:white;">THE BEST HOTEL DEAL.</p><br>
                                    <p>(Worldwide service provider)</p>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-md-9" >
                            <!-- small box -->
                            <div class="small-box" id="hotelDes" style="background-color: #000044;text-align: center;display: none;padding:2%;height: 430px;" >
                                <div style="background: white;" >
                                    <div class="row"  >
                                        <div class="col-md-12">
                                            <h1 style="color: black;">Update Hotel Description</h1>
                                            <div class="box box-info">
                                                <div class="box-header">
                                                    <h3 class="box-title">The Best Hotel Deal
                                                        <small>The best hotel deal website details will be updated soon.</small>
                                                    </h3>
                                                    <!-- tools box -->

                                                    <!-- /. tools -->
                                                </div>
                                                <!-- /.box-header -->
                                                <div class="box-body pad" style="color: black;">
                                                    <form id="desc">
                                                        <textarea id="editor1" name="editor1" style="width: 80%;" rows="8" >
                                            
                                                        </textarea>
                                                        <div class ="row" style="padding: 1%;">
                                                            <div class='col-lg-3 col-lg-offset-6'>
                                                                <button  type="reset" class="btn btn-block btn-success btn-lg" style='float:left;background-color: maroon;'>Reset</button>
                                                            </div>
                                                            <div class='col-lg-offset-9'>
                                                                <button   id="destinationid" name="submit" type="button" style='float:right;background-color: maroon;' class="btn btn-block btn-success btn-lg">Update</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="small-box "  style="background-color: #000044;text-align: center;display:block;padding:2%;"  id="basicFacilities" >
                                <div style="background: white;" >
                                    <div class="row" >
                                        <div class="col-md-12">
                                            <h1 style="color: black;">Update Basic Facilities</h1>
                                            <div class="box box-info">
                                                <div class="box-header">
                                                    <h3 class="box-title">The Best Hotel Deal
                                                        <small>The best hotel deal website details will be updated soon.</small>
                                                    </h3>
                                                    <!-- tools box -->

                                                    <!-- /. tools -->
                                                </div>
                                                <!-- /.box-header -->
                                                <div class="box-body pad">
                                                    <form id="updateBasic1" method="post">
                                                        <div class="row" style="color:black;font-size: 1.2em;border: dotted;margin:1%;padding:2%;" >
                                                            <br>

                                                            <div class ='col-md-9'>
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
                                                            <div class="col-md-3">
                                                                <div class="btn-group-vertical" style="background: white;padding:3%;">

                                                                    <button  style='background-color: maroon;'onclick="changeDisable()" type="button" class="btn btn-block btn-success btn-lg">Edit</button>
                                                                    <button  style='background-color: maroon;' disabled="true" id="basicfacility1" type="button" class="btn btn-block btn-success btn-lg">Update</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="small-box bg-red" id="roomFacilities"  style="background-color: #000044;text-align: center;display:none;padding:2%;" >
                                <div style="background: white;" >
                                    <div class="row" >
                                        <div class="col-md-12">
                                            <h1 style="color: black;">Update Room Facilities</h1>
                                            <div class="box box-info">
                                                <div class="box-header">
                                                    <h3 class="box-title">The Best Hotel Deal
                                                        <small>The best hotel deal website details will be updated soon.</small>
                                                    </h3>
                                                    <!-- tools box -->

                                                    <!-- /. tools -->
                                                </div>
                                                <!-- /.box-header -->
                                                <br>

                                                <div class="box-body pad">
                                                    <form id="updateRoom" method="post">
                                                        <div class="row" >
                                                            <div class ="col-md-4">

                                                                <label style="color:black;font-size: 1.8em;">Room Type</label>

                                                            </div>

                                                            <div class ="col-md-4">

                                                                $t=0;
                                                                <select id="roomtypemodal" name="roomtypemodal" class="form-control" required=""  style="width: 100%;font-size: 1.2em;" onchange="loadprice()">
                                                                    <option value="select" selected="" disabled="">Select Room Type</option>
                                                                    <?php
                                                                    $r = 0;
                                                                    while ($r < sizeof($rooms)) {
                                                                        ?><option value=<?php echo $rooms[$r]->getRoom_type_id() ?>><?php echo $rooms[$r]->getRoom_type() ?></option>";

                                                                        <?php
                                                                        $r++;
                                                                    }
                                                                    ?></select>  
                                                            </div></div>
                                                        <br><br>


                                                        <div class="row" id="coreEdit" style="color:black;font-size: 1.2em;border: dotted;margin:1%;padding:2%;display: none" >
                                                            <br>

                                                            <div class ='col-md-9'>
                                                                <?php
                                                                $dataArray = array();
                                                                $s = 0;
                                                                $t = -1;

                                                                $roomfacilities = $adminRoom->toArray();

                                                                while ($t < sizeof($roomfacilities) - 1) {
                                                                    $t++;
                                                                    ?>

                                                                    <div class ="col-md-4" style="text-align: left;">
                                                                        <label>
                                                                            <input type="checkbox"  name="check_roomlist[]"    value="<?php echo $roomfacilities[$t] ?>"><?php echo $roomfacilities[$t] ?>
                                                                        </label>
                                                                    </div>
                                                                    <?php if (($t + 1) % 3 == 0) { ?>
                                                                        <br><br>
                                                                    <?php } ?>
                                                                <?php }
                                                                ?>

                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="btn-group-vertical" style="background: white;padding:3%;">

                                                                    <button onclick="changeRoomDisable()" type="button" class="btn btn-block btn-success btn-lg">Edit</button>
                                                                    <button  disabled="true" id="roomfacility" type="button" class="btn btn-block btn-success btn-lg">Update</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- ./col -->

                        <!-- ./col -->
                    </div>
                    <!-- /.row -->


                    <!-- /.row -->
                    <!-- Main row -->



                </section>

                <!-- /.content -->
            </div>

            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.3.3
                </div>
                <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
                reserved.
            </footer>

            <!-- Control Sidebar -->
            <?php include './hotelSidebar.php'; ?>
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
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
        <script src="../../assets/dist/js/jquery.confirm.js"></script>
        <script>
                                                                        function changeDisable() {
                                                                            document.getElementById('basicfacility1').disabled = false;
                                                                            var $checkboxes = new Array();
                                                                            // $('#bfacility').disabled =false;

                                                                            $checkboxes = document.getElementsByName('check_list[]');
                                                                            for (var i = 0; i < $checkboxes.length; i++) {

                                                                                $checkboxes[i].disabled = false;
                                                                            }
                                                                        }
                                                                        $("#basicfacility1").confirm({
                                                                            title: "Confirmation Dialog",
                                                                            text: "Are you sure you want to send?",
                                                                            confirm: function (button) {
                                                                                $.ajax({
                                                                                    type: 'POST',
                                                                                    url: 'updatebasic.php',
                                                                                    data: $('#updateBasic1').serialize(),
                                                                                    success: function (data) {
                                                                                        BootstrapDialog.alert("You have successfully updated basic facilities in your hotel.")
                                                                                        document.getElementById("updateBasic1").reset();
                                                                                        document.getElementById('basicfacility1').disabled = true;
                                                                            var $checkboxes = new Array();
                                                                            // $('#bfacility').disabled =false;

                                                                            $checkboxes = document.getElementsByName('check_list[]');
                                                                            for (var i = 0; i < $checkboxes.length; i++) {

                                                                                $checkboxes[i].disabled = true;
                                                                            }

                                                                                    }
                                                                                });
                                                                            },
                                                                            cancel: function (button) {
                                                                            },
                                                                            confirmButton: "Yes I am",
                                                                            cancelButton: "No"
                                                                        });

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
                                                                        $("#destinationid").confirm({
                                                                            title: "Confirmation Dialog",
                                                                            text: "Are you sure you want to send?",
                                                                            confirm: function (button) {
                                                                                $.ajax({
                                                                                    type: 'POST',
                                                                                    url: 'updateDes.php',
                                                                                    data: $('#desc').serialize(),
                                                                                    success: function (data) {
                                                                                        BootstrapDialog.alert("You have successfully updated hotel description.")
                                                                                        document.getElementById("desc").reset();

                                                                                    }
                                                                                });
                                                                            },
                                                                            cancel: function (button) {
                                                                            },
                                                                            confirmButton: "Yes,Sure",
                                                                            cancelButton: "No"
                                                                        });

                                                                        function changeRoomDisable() {
                                                                            var $checkboxes = new Array();
                                                                            document.getElementById('roomfacility').disabled = false;
                                                                            $checkboxes = document.getElementsByName('check_roomlist[]');
                                                                            for (var i = 0; i < $checkboxes.length; i++) {
                                                                                $checkboxes[i].disabled = false;
                                                                            }
                                                                        }
                                                                        $("#roomfacility").confirm({
                                                                            title: "Confirmation Dialog",
                                                                            text: "Are you sure you want to send?",
                                                                            confirm: function (button) {
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
                                                                                            BootstrapDialog.alert("You have successfully updated your room facility details.");

                                                                                            var checkboxes = document.getElementsByName('check_roomlist[]');
                                                                                            document.getElementById("updateRoom").reset();
                                                                                        }

                                                                                    });
                                                                                } else {
                                                                                    BootstrapDialog.alert("Select facilities you want to update");
                                                                                }
                                                                            },
                                                                            cancel: function (button) {
                                                                            },
                                                                            confirmButton: "Yes,Sure",
                                                                            cancelButton: "No"
                                                                        });
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

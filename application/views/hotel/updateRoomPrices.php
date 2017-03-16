
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
         <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
          <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css">
           <link rel="stylesheet" href="https://cdn.datatables.net/select/1.2.1/css/select.dataTables.min.css">
            <link rel="stylesheet" href="https://editor.datatables.net/extensions/Editor/css/editor.dataTables.min.css">
        


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
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
                    <h1 style="font-weight:bold;font-size: 2em;">
                      Update Room Rates
                  </h1>
                  <ol class="breadcrumb">
                      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                     <li class="active">Edit Details</li>
                  </ol>
              </section>
              <section class="content">
                   <div class="container-fluid edit-container" style="background:white;padding: 20px;box-shadow: 0 0px 8px 0 rgba(0, 0, 0, 0.06), 0 1px 0px 0 rgba(0, 0, 0, 0.02);-webkit-border-radius: 5px;border-radius: 5px;">
      
               <h2 style="padding: 6px 15px 6px 15px;margin: 1px;font: bold 15px arial, sans-serif;color: #464646;margin-bottom: 20px;background: linear-gradient(to bottom, rgba(250,250,250,1) 0%, rgba(232,232,232,1) 100%);">Room Rates</h2>
               <div class="small-box" id="hotelDes" style="box-shadow:none;">
                <div style="background: white;" >
                  <div class="row">
                    <div class="col-md-12">
                      <div class="box box-info" style="border-color:gray;">
                        <div class="box-body pad" style="color: black;">
                           <form id="updateRate" method="post">
                            <div class="row" style="padding:3% 0;" >
                                <div class ="col-md-4">
                                    <label style="color:black;font-size: 1.4em;">Room Type</label>
                                </div>
                                <div class ="col-md-4">
                                    <select id="roomtypemodal" name="roomtypemodal" class="form-control" required=""  style="width: 100%;font-size: 1.2em;" onchange="loadprice()">
                                        <option value="select" selected="" disabled="">Select Room Type</option>
                                        <?php
                                        $r = 0;
                                        while ($r < sizeof($data1)) {
                                            ?><option value=<?php echo $data1[$r]->room_type_id ?>><?php  echo $data1[$r]->room_name ?> </option>";
                                            <?php
                                            $r++;
                                        }
                                        ?></select>  
                                    </div></div>
                                    <br><br>
                                    <div class="row" id="coreEdit" style="display: none;padding :3% 0;" >
                                       
                                            <div class ="col-md-4">
                                                <label style="color:black;font-size: 1.4em;">With Breakfast/Without Breakfast</label>
                                            </div>
                                            <div class ="col-md-4">
                                                <select id="roomratemodal" name="roomratemodal" class="form-control"   style="width: 100%;font-size: 1.1em;" onchange="displayPrice()">
                                                    <option value="select" selected="" disabled="">WITH / WITHOUT Breakfast</option>
                                                    <option value="0" >Without Breakfast</option>
                                                    <option value="1" >With Breakfast</option>
                                                </select> 
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="row"id="prices" style="display: none;">
                                            <div class ='col-md-9'>
                                                <div class="form-group">
                                                    <div class="col-md-6">
                                                        <label>Current Value</label>
                                                        <input id="roomtypeid" name="roomtypeid" type="hidden"  class="form-control"  >
                                                        <input id="hotelid" type="hidden"  class="form-control"  >
                                                        <input id="rate" type="text"  class="form-control" value="" disabled="true" >
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>New Value</label>
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <input  type="text" class="form-control" value="Rs." disabled="true">

                                                            </div>
                                                            <div class="col-md-9">
                                                                <input id="added_rate" name="added_rate" type="number" class="form-control" value="Rs." disabled="true">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="btn-group-vertical" style="background: white;padding:3%;">
                                                    <button onclick="changeRoomDisable()" style='background-color: maroon;' type="button" class="btn btn-block btn-success btn-lg">Edit</button>
                                                    <button onclick="updateRoom()" style='background-color: maroon;' disabled="true" id="roomfacility" type="button" class="btn btn-block btn-success btn-lg">Update</button>
                                                </div>
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
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.1.min.js"></script>

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
        <script src="../../assets/dist/js/f_clone_Notify.js" type="text/javascript"></script>

        <script>
        function displayPrice() {
            document.getElementById("prices").style.display = 'block';
            var comp = document.getElementById("roomratemodal").selectedIndex;
            var compp = document.getElementById("roomtypemodal").selectedIndex;
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
                                                                                            var opt1 = JSON.parse(res)[0].price_only_bed;
                                                                                            var opt2 = JSON.parse(res)[0].price_bed_breakfast;
                                                                                            var opt3 = JSON.parse(res)[0].hotel_id;
                                                                                            var opt4 = JSON.parse(res)[0].roomType;
                                                                                            var opt5 = JSON.parse(res)[0].room_type_id;

                                                                                            document.getElementById("roomtypeid").value = opt5;
                                                                                            document.getElementById("hotelid").value = opt3;
                                                                                            if (comp == 1) {
                                                                                                document.getElementById("rate").value = "Rs. " + opt1;
                                                                                            }
                                                                                            if (comp == 2) {
                                                                                                document.getElementById("rate").value = "Rs. " + opt2;
                                                                                            }
                                                                                            document.getElementById("added_rate").disabled = true;
                                                                                        }
                                                                                    }
                                                                                    obj.open("GET", "test2.php?roomType=" + encodeURIComponent(compp), true);
                                                                                    obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                                                                                    obj.send();
                                                                                }
                                                                            }

                                                                            function changeRoomDisable() {

                                                                                document.getElementById('added_rate').disabled = false;
                                                                                document.getElementById('roomfacility').disabled = false;

                                                                            }
                                                                            function updateRoom() {
                                                                                $.ajax({
                                                                                    type: 'POST',
                                                                                    url: 'updateprice.php',
                                                                                    data: $('#updateRate').serialize(),
                                                                                    success: function (data) {
                                                                                        cleanData();
                                                                                        

                                                                                    }
                                                                                });
                                                                            }
                                                                            function cleanData() {

                                                                                document.getElementById('added_rate').value = 123;
                                                                                document.getElementById("coreEdit").style.display = 'none'
                                                                                document.getElementById("roomtypemodal").selectedIndex = 0;
                                                                                document.getElementById('roomratemodal').selectedIndex = 0;


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

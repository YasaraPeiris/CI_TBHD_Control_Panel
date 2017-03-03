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
    <body class="hold-transition skin-blue sidebar-mini" onload="myTimer()">
        <?php ?>

        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->

                <!-- Header Navbar: style can be found in header.less -->
                <?php include './hotelTopMost.php'; ?>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <?php include './hotelSidebar.php'; ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
      <h1 style="font-weight:bold;font-size: 2em;">
        Check Orders.
<!--        <small>Control panel</small>-->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Details</li>
      </ol>
    </section>

                <!-- Main content -->
                <section class="content">
                    <!-- Small boxes (Stat box) -->
                  <?php include './hotelTop.php'; ?>

                    <!-- TABLE: LATEST ORDERS -->
                    <div class="box box-info">
                        <div class="box-header with-border" style='background-color: #000044;'>
                            <h3 class="box-title"style='color:white;font-size: 1.5em;' >Latest Orders</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <form id="notifications" method="post" >
                                    <input type="hidden" id="bookingidset" name="bookingidset"/>
                                    <input type="hidden" id="itemidset" name="itemidset"/>
  </form>
                                    <table class="table no-margin" style=''>
                                        <thead >
                                            <tr>
                                                <th style="text-align: center;">Order ID</th>
                                                <th style="text-align: center;">Item ID</th>
                                                <th style="text-align: center;">Room Type</th>
                                                <th style="text-align: center;">Check-In Date</th>
                                                <th style="text-align: center;">Check-Out Date</th>
                                                <th style="text-align: center;">No of Rooms</th>
                                                <th style="text-align: center;">Confirm</th>
                                                <th style="text-align: center;">Ignore</th>
                                            </tr>
                                        </thead>
                                        <tbody id="orderTable" style="text-align: center;">


                                        </tbody>
                                    </table>
                              
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.box-body -->

                        <!-- /.box-footer -->
                    </div>
                    <!-- /.box -->


                    <!-- /.row -->


                    <!-- /.row -->
                    <!-- Main row -->



                </section>

                <!-- /.content -->
            </div>

            <!-- /.content-wrapper -->
            <?php include '../footer.php'; ?>

            <!-- Control Sidebar -->
            <?php include 'hotelSidebar.php'; ?>
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
        <script src="../../dist/js/bootstrap-dialog.js"></script>

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
        <script src="../../plugins/jQuery/jQuery-2.2.0.min.js"></script>
<script src="../../dist/js/bootstrap-dialog.js"></script>
        <script src="../../dist/js/jquery.confirm.js"></script>

        <script>
        var myVar = setInterval(myTimer, 1000 * 60 * 10);

        function myTimer() {
            
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

                        var arr = obj.responseText;

                        var response = JSON.parse(arr);
                        var i;
                        //var tableV = document.getElementById('orderTable');
                        for (i = 0; i < response.length; i++) {
                            var booking_id = response[i].booking_id;
                            var hotel = response[i].hotel_form;
                            var item_name = response[i].item_name;
                            var quantity = response[i].quantity;
                            var checkin = response[i].check_in;
                            var checkout = response[i].check_out;
                            var itemId = response[i].item_id;
                            var tableV = document.getElementById('orderTable');
                            var rowNew = document.createElement("TR");
                            rowNew.setAttribute("id", "btn" + i);

                            var col1 = document.createElement("TD");
                            var col2 = document.createElement("TD");
                            var col3 = document.createElement("TD");
                            var col4 = document.createElement("TD");
                            var col5 = document.createElement("TD");
                            var col6 = document.createElement("TD");
                            var col7 = document.createElement("TD");
                            var col8 = document.createElement("TD");


                            var btnDiv1 = document.createElement("BUTTON");
                            var btnDiv2 = document.createElement("BUTTON");
                            col1.appendChild(document.createTextNode(booking_id));
                            col2.appendChild(document.createTextNode(itemId));
                            col3.appendChild(document.createTextNode(item_name));
                            col4.appendChild(document.createTextNode(checkin));
                            col5.appendChild(document.createTextNode(checkout));
                            col6.appendChild(document.createTextNode(quantity));
                            col7.appendChild(btnDiv1);
                            col8.appendChild(btnDiv2)
                            btnDiv1.setAttribute("type", "button");
                            btnDiv1.setAttribute("style", "background-color:maroon");
                            btnDiv1.setAttribute("class", "btn btn-success btn-send");
                            btnDiv1.setAttribute("id", "btn" + i);
                            btnDiv1.setAttribute("onclick", "displayAlert1()");
                            btnDiv2.setAttribute("onclick", "displayAlert2()");
                            btnDiv2.setAttribute("style", "background-color:#555555");
                            var t1 = document.createTextNode("  Notified >>  ");
                            btnDiv1.appendChild(t1);
                            btnDiv2.setAttribute("type", "button");
                            btnDiv2.setAttribute("class", "btn btn-success btn-send");
                            btnDiv2.setAttribute("id", "btn" + i);
                            var t2 = document.createTextNode("  Ignored >>  ");
                            btnDiv2.appendChild(t2);

                            rowNew.appendChild(col1);
                            rowNew.appendChild(col2);
                            rowNew.appendChild(col3);
                            rowNew.appendChild(col4);
                            rowNew.appendChild(col5);
                            rowNew.appendChild(col6);
                            rowNew.appendChild(col7);
                            rowNew.appendChild(col8);
                            tableV.appendChild(rowNew);
                        }
                    }
                }
                obj.open("GET", "order.php", true);
                obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                obj.send();
            }
        }
        function displayAlert1() {

            var e = window.event,
                    btn = e.target || e.srcElement;

            
            document.getElementById(btn.id).disabled = true;
            var Row = document.getElementById(btn.id);
            var Cells = Row.getElementsByTagName("td");

            document.getElementById("bookingidset").value = Cells[0].innerText;
            document.getElementById("itemidset").value = Cells[1].innerText;
            document.getElementById('orderTable').deleteRow(btn.id);
            confirmationCalling1();

        }
        function confirmationCalling1() {
            $.ajax({
                type: 'POST',
                url: 'updateNotifications.php',
                data: $('#notifications').serialize(),
                success: function (data) {
                    
                    BootstrapDialog.alert("You have confirmed the order");
                }
            });

        }
        function displayAlert2() {

            var e = window.event,
                    btn = e.target || e.srcElement;

            
            document.getElementById(btn.id).disabled = true;
            var Row = document.getElementById(btn.id);
            var Cells = Row.getElementsByTagName("td");

            document.getElementById("bookingidset").value = Cells[0].innerText;
            document.getElementById("itemidset").value = Cells[1].innerText;
            document.getElementById('orderTable').deleteRow(btn.id);
            confirmationCalling2();
        }
        function confirmationCalling2() {
            $.ajax({
                type: 'POST',
                url: 'ignoreNotifications.php',
                data: $('#notifications').serialize(),
                success: function (data) {
                    
                    BootstrapDialog.alert("You have ignored an order and notification will be sent user.");
                }
            });

        }
        </script>
    </body>
</html>

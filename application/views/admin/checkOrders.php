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
    <!-- jvectormap -->
    <link rel="stylesheet" href="../../assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <link href="../../assets/dist/css/bootstrap-dialog.css" rel='stylesheet' type='text/css'/>

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
        <?php include 'adminTopMost.php';?>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <?php include 'adminSidebar.php'; ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1 style="font-weight:bold;font-size: 3.5em;">
                Admin
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
            <?php include 'adminTop.php'; ?>
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

                            <table class="table no-margin" style="font-family: Verdana;">
                                <thead >
                                <tr >
                                    <th style="text-align: center;">Order ID</th>
                                    <th style="text-align: center;">Item ID</th>
                                    <th style="text-align: center;">Hotel</th>
                                    <th style="text-align: center;">Room Type</th>
                                    <th style="text-align: center;">Check-In Date</th>
                                    <th style="text-align: center;">Check-Out Date</th>
                                    <th style="text-align: center;">No of Rooms</th>
                                    <th style="text-align: center;">Notified</th>
                                    <th style="text-align: center;">Status</th>
                                </tr>
                                </thead>
                                <tbody id="orderTable" style="text-align: center;">


                                </tbody>
                            </table>
                        </form>
                    </div>
                    <!-- /.table-responsive -->
                </div>
            </div>
        </section>

        <!-- /.content -->
    </div>
    <?php include '../footer.php'; ?>
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
<script src="../../assets/dist/js/bootstrap-dialog.js"></script>

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
<script src="../../assets/plugins/jQuery/jQuery-2.2.0.min.js"></script>
<script src="../../assets/dist/js/bootstrap-dialog.js"></script>
<script src="../../assets/dist/js/jquery.confirm.js"></script>

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
                        var status = response[i].notify;

                        var status1;

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
                        var col9 = document.createElement("TD");
                        var newE = document.createElement("DIV");
                        if(status==1){
                            status1="Confirmed";
                            newE.setAttribute("style", "background-color:#996515;text-align:center;font-weight:bold;font-size:1em");

                        }
                        else if(status==2){
                            status1="Ignored";
                            newE.setAttribute("style", "background-color:red;text-align:center;font-weight:bold;font-size:1em");

                        }
                        else{
                            status1="Pending";
                            newE.setAttribute("style", "background-color:green;text-align:center;font-weight:bold;font-size:1em");

                        }
                        newE.appendChild(document.createTextNode(status1));

                        var btnDiv1 = document.createElement("BUTTON");
                        //    var btnDiv2 = document.createElement("BUTTON");
                        col1.appendChild(document.createTextNode(booking_id));
                        col2.appendChild(document.createTextNode(itemId));
                        col3.appendChild(document.createTextNode(item_name));
                        col4.appendChild(document.createTextNode(checkin));
                        col5.appendChild(document.createTextNode(checkout));
                        col6.appendChild(document.createTextNode(quantity));
                        col9.appendChild(document.createTextNode(hotel));
                        col7.appendChild(newE);
                        col8.appendChild(btnDiv1);
                        btnDiv1.setAttribute("type", "button");
                        btnDiv1.setAttribute("style", "background-color:maroon");
                        btnDiv1.setAttribute("class", "btn btn-success btn-send");
                        btnDiv1.setAttribute("id", "btn" + i);
                        btnDiv1.setAttribute("onclick", "displayAlert1()");
                        if(status!=1 &&status!=2 ){
                            btnDiv1.setAttribute("disabled","true");
                        }
                        //   btnDiv2.setAttribute("onclick", "displayAlert2()");
                        var t1 = document.createTextNode("  Notified >>  ");
                        btnDiv1.appendChild(t1);
                        //  btnDiv2.setAttribute("type", "button");
                        //  btnDiv2.setAttribute("class", "btn btn-success btn-send");
                        //  btnDiv2.setAttribute("id", "btn" + i);
                        //   var t2 = document.createTextNode("  Ignored >>  ");
                        // btnDiv2.appendChild(t2);

                        rowNew.appendChild(col1);
                        rowNew.appendChild(col2);
                        rowNew.appendChild(col9);
                        rowNew.appendChild(col3);
                        rowNew.appendChild(col4);
                        rowNew.appendChild(col5);
                        rowNew.appendChild(col6);
                        rowNew.appendChild(col7);
                        rowNew.appendChild(col8);
                        tableV.appendChild(rowNew);
                    }
                }
            };
            obj.open("GET", "orders.php", true);
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
        confirmationCalling1();

    }
    function confirmationCalling1() {
        $.ajax({
            type: 'POST',
            url: 'getDescription.php',
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

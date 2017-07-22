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
        <?php include './adminTopMost.php'; ?>
    </header>
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
            <?php include './adminTop.php'; ?>
            <!-- TABLE: LATEST ORDERS -->
            <div class="box box-info">
                <div class="box-header with-border" style='background-color: #000044;'>
                    <h3 class="box-title"style='color:white;font-size: 1.5em;' >New Inquiries</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <form id="notifications" method="post" >
                            <input type="hidden" id="bookingidset" name="bookingidset"/>
                            <input type="hidden" id="itemidset" name="itemidset"/>
                            <table class="table no-margin" style="font-family: Verdana;">
                                <thead>
                                <tr>
                                    <th style="text-align: center;">Hotel ID</th>
                                    <th style="text-align: center;">Hotel Name</th>
                                    <th style="text-align: center;">Check</th>
                                </tr>
                                </thead>
                                <tbody id="orderTable" style="text-align: center;">
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div id="modalset">
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog" >
                Modal content
                <div class="modal-content"  style="background-color: white;">
                    <div class="modal-header"  style="background-color: navy;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Approve Description</h4>
                    </div>
                    <div class="modal-body">
                        <div class="small-box bg-red" id="hotelDes" style="text-align: center;display: none;padding:2%;height: 420px;" >
                            <div style="background: white;" >
                                <div class="row"  >
                                    <div class="col-md-12">
                                        <h1 style="color: black;">Update Hotel Description</h1>
                                        <div class="box box-info">
                                            <div class="box-header">
                                                <h3 class="box-title">The Best Hotel Deal
                                                    <small>The best hotel deal website details will be updated soon.</small>
                                                </h3>
                                            </div>
                                            <!-- /.box-header -->
                                            <div class="box-body pad" style="color: black;">
                                                <form id="desc">
                                                            <textarea id="editor1" name="editor1" style="width: 80%;" rows="8" >
                                            
                                                            </textarea>
                                                    <div class ="row" style="padding: 1%;">
                                                        <div class=" col-md-3">
                                                            <button  type="reset" class="btn btn-block btn-success btn-lg">Reset</button>
                                                        </div>
                                                        <div class =" col-md-offset-9">
                                                            <button onclick="updateDes()"  id="bfacility" name="submit" type="button" class="btn btn-block btn-success btn-lg">Update</button>
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
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-wrapper -->
    <?php include '../footer.php'; ?>

    <!-- Control Sidebar -->
    <?php include 'adminSidebar.php'; ?>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
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
        var comp = 1;
        for (var i = document.getElementById("orderTable").rows.length; i > 0; i--) {
            document.getElementById("orderTable").deleteRow(i - 1);
        }
        var tableV = document.getElementById('orderTable');

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
                    var count;
                    count = 0;
                    var count2;
                    count2 = 0;
                    var count3;
                    count3 = 0;
                    var count1;
                    count1 = 0;
                    //var tableV = document.getElementById('orderTable');
                    for (i = 0; i < response.length; i++) {


                        var hotel_id = response[i].hotel_id;
                        var hotel = response[i].hotel_name;
                        var facility = response[i].facility;
                        if (count != hotel_id) {
                            count = hotel_id;
                            var modalWindow = document.createElement("DIV");
                            modalWindow.setAttribute("class", "modal fade");
                            modalWindow.setAttribute("id", "modalNew" + hotel_id);
                            modalWindow.setAttribute("role", "dialog");
                            var modalDialog = document.createElement("DIV");
                            modalDialog.setAttribute("class", "modal-dialog");
                            var modalContent = document.createElement("DIV");
                            modalContent.setAttribute("class", "modal-content");
                            var modalHeader = document.createElement("DIV");
                            modalHeader.setAttribute("class", "modal-header");
                            modalHeader.setAttribute("style", "background-color:#000044;color:white;");
                            var modalTitle = document.createElement("H4");
                            modalTitle.appendChild(document.createTextNode("Update Confirmation"));
                            var modalBody = document.createElement("DIV");

                            modalBody.setAttribute("class", "modal-body");
                            var descContainer = document.createElement("DIV");
                            descContainer.setAttribute("id", "contain" + hotel_id);
                            descContainer.setAttribute("style", "padding:1%;height:320px;background-color:#000044");
                            descContainer.setAttribute("class", "small-box");
                            var descContainer1 = document.createElement("DIV");
                            descContainer1.setAttribute("style", "background: white");
                            var descContainer2 = document.createElement("DIV");
                            descContainer2.setAttribute("class", "row");
                            var descContainer3 = document.createElement("DIV");
                            descContainer3.setAttribute("class", "col-md-12");
                            var descContainer4 = document.createElement("H1");
                            descContainer4.setAttribute("style", "color: black");
                            descContainer4.appendChild(document.createTextNode("Update Hotel Description"));
                            var descContainer5 = document.createElement("DIV");
                            descContainer5.setAttribute("class", "box-box-info");
                            var descContainer6 = document.createElement("DIV");
                            descContainer6.setAttribute("class", "box-header");
                            var descContainer7 = document.createElement("H3");
                            descContainer7.setAttribute("class", "box-title");
                            descContainer7.appendChild(document.createTextNode("The Best Hotel Deal"));
                            var descContainer8 = document.createElement("DIV");
                            descContainer8.setAttribute("class", "box-body pad");
                            descContainer8.setAttribute("style", "color:black");
                            var descContainer9 = document.createElement("FORM");
                            descContainer9.setAttribute("id", "formd" + hotel_id);
                            var descContainerNew = document.createElement("DIV");
                            descContainerNew.setAttribute("class", "row");
                            descContainerNew.setAttribute("style", "color:black;border: dotted;border-color:black;margin:1%;padding:2%;")


                        }
                        var descContainerNewIn = document.createElement("DIV");
                        descContainerNewIn.setAttribute("class", "col-md-4");
                        descContainerNewIn.setAttribute("style", "text-align:left");
                        var descContainerNewInLabel = document.createElement("LABEL");

                        var descContainerNewInput1 = document.createElement("INPUT");
                        //   descContainerNewInput1.setAttribute("name","check_list"+hotel_id+"[]");
                        //   descContainerNewInput1.setAttribute("type","checkbox");
                        descContainerNewInput1.setAttribute("style", "border:none;font-weight:bold;");
                        descContainerNewInput1.setAttribute("id", i);
                        //   descContainerNewInput1.setAttribute("checked","true");
                        descContainerNewInput1.setAttribute("value", facility);
                        descContainerNewInput1.appendChild(document.createTextNode(facility));

                        descContainerNewInLabel.appendChild(descContainerNewInput1);

                        descContainerNewIn.appendChild(descContainerNewInLabel);
                        descContainerNew.appendChild(descContainerNewIn);
                        if (count1 != hotel_id) {
                            descContainer9.appendChild(descContainerNew);
                            var hiddenHotelID = document.createElement("INPUT");
                            hiddenHotelID.setAttribute("value", hotel_id);
                            hiddenHotelID.setAttribute("type", "hidden");
                            hiddenHotelID.setAttribute("name", "hotelCheck");
                            descContainer9.appendChild(hiddenHotelID);
                            descContainer8.appendChild(descContainer9);
                            descContainer6.appendChild(descContainer7);
                            descContainer5.appendChild(descContainer6);
                            descContainer5.appendChild(descContainer8);
                            descContainer3.appendChild(descContainer4);
                            descContainer3.appendChild(descContainer5);
                            descContainer2.appendChild(descContainer3);
                            descContainer1.appendChild(descContainer2);
                            descContainer.appendChild(descContainer1);
                            modalBody.appendChild(descContainer);


                            var modalFooter = document.createElement("DIV");
                            modalFooter.setAttribute("class", "modal-footer");

                            var buttonadd = document.createElement("BUTTON");
                            buttonadd.setAttribute("id", hotel_id);
                            buttonadd.setAttribute("name", i);
                            buttonadd.setAttribute("onclick", "callFunction()");
                            buttonadd.setAttribute("class", "btn btn-success btn-send");
                            buttonadd.setAttribute("data-dismiss", "modal");
                            var t1 = document.createTextNode("Update Confirm >>");
                            buttonadd.appendChild(t1);
                            var buttoncancel = document.createElement("BUTTON");
                            buttoncancel.setAttribute("id", hotel_id);
                            buttoncancel.setAttribute("onclick", "callFunction2()");
                            buttoncancel.setAttribute("class", "btn btn-success btn-send");
                            buttoncancel.setAttribute("data-dismiss", "modal");
                            buttoncancel.setAttribute("style", "background-color:maroon");
                            buttonadd.setAttribute("style", "background-color:maroon");
                            var t2 = document.createTextNode("Update Ignore >>");
                            buttoncancel.appendChild(t2);
                            modalFooter.appendChild(buttonadd);
                            modalFooter.appendChild(buttoncancel);
                            modalFooter.setAttribute("style", "background-color:#000044");
                            var modalClose = document.createElement("BUTTON")
                            modalClose.setAttribute("type", "button");
                            modalClose.setAttribute("class", "close");
                            modalClose.setAttribute("data-dismiss", "modal");
                            modalClose.appendChild(document.createTextNode("X"));
                            modalHeader.appendChild(modalClose);
                            modalHeader.appendChild(modalTitle);
                            modalContent.appendChild(modalHeader);
                            modalContent.appendChild(modalBody);
                            modalContent.appendChild(modalFooter);
                            modalDialog.appendChild(modalContent);
                            modalWindow.appendChild(modalDialog);
                            document.getElementById("modalset").appendChild(modalWindow);


                            var tableV = document.getElementById('orderTable');
                            var rowNew = document.createElement("TR");
                            rowNew.setAttribute("id", "btn" + hotel_id);
                            var col1 = document.createElement("TD");
                            var col2 = document.createElement("TD");
                            var col3 = document.createElement("TD");

                            var btnDiv1 = document.createElement("BUTTON");

                            col1.appendChild(document.createTextNode(hotel_id));
                            col2.appendChild(document.createTextNode(hotel));
                            col3.appendChild(btnDiv1);


                            btnDiv1.setAttribute("type", "button");
                            btnDiv1.setAttribute("class", "btn btn-success btn-send");
                            btnDiv1.setAttribute("id", "btn" + hotel_id);
                            btnDiv1.setAttribute("style", "background-color:maroon");
                            btnDiv1.setAttribute("data-toggle", "modal");
                            btnDiv1.setAttribute("data-target", "#modalNew" + hotel_id);
                            // btnDiv1.setAttribute("onclick", "displayAlert1()");

                            var t1 = document.createTextNode("       Check >>      ");
                            btnDiv1.appendChild(t1);
                            rowNew.appendChild(col1);
                            rowNew.appendChild(col2);
                            rowNew.appendChild(col3);

                            tableV.appendChild(rowNew);
                            count1 = hotel_id;

                        }
                    }
                }
            }

            obj.open("GET", "getBasic.php?value=" + encodeURIComponent(comp), true);
            obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            obj.send();
        }
    }
    function callFunction() {

        var e = window.event,
            btn = e.target || e.srcElement;

        $.ajax({
            type: 'POST',
            url: 'confirmUpdate.php',
            data: $('#formd' + btn.id).serialize(),
            success: function (data) {

                BootstrapDialog.alert("You have confirmed the update");
                document.getElementById('orderTable').deleteRow(btn.name);
            }
        });
    }
    function callFunction2() {

        var e = window.event,
            btn = e.target || e.srcElement;

        $.ajax({
            type: 'POST',
            url: 'ignoreUpdate.php',
            data: $('#formd' + btn.id).serialize(),
            success: function (data) {

                BootstrapDialog.alert("You have ignored the update.");
                document.getElementById('orderTable').deleteRow(btn.name);
            }
        });
    }

</script>
</body>
</html>

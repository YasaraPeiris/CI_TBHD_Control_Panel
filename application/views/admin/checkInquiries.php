<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CP :: Inquiries</title>
  <link rel="shortcut icon" href="../../assets/images/favicon.ico" />
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
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <form id="notifications" method="post" >
                            <input type="hidden" id="bookingidset" name="bookingidset"/>
                            <input type="hidden" id="itemidset" name="itemidset"/>
                            <table class="table no-margin" style="font-family: Verdana;">
                                <thead>
                                <tr>
                                    <th style="text-align: center;">Contact ID</th>
                                    <th style="text-align: center;">Customer First Name</th>
                                    <th style="text-align: center;">Customer Last Name</th>
                                    <th style="text-align: center;">EMail</th>
                                    <th style="text-align: center;">Phone</th>
                                    <th style="text-align: center;">Check</th>
                                </tr>
                                </thead>
                                <tbody id="inquiryTable" style="text-align: center;">
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div id="modalset">
    </div>
    <?php include '../footer.php'; ?>
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
        for (var i = document.getElementById("inquiryTable").rows.length; i > 0; i--) {
            document.getElementById("inquiryTable").deleteRow(i - 1);
        }
        var tableV = document.getElementById('inquiryTable');

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
                    //var tableV = document.getElementById('inquiryTable');
                    for (i = 0; i < response.length; i++) {

                        var firstName = response[i].first_name;
                        var lastName = response[i].last_name;
                        var email = response[i].email;
                        var contactId = response[i].contact_id;
                        var message = response[i].message;
                        var phone = response[i].phone;
                        var modalWindow = document.createElement("DIV");
                        modalWindow.setAttribute("class", "modal fade");
                        modalWindow.setAttribute("id", "modalNew" + contactId);
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
                        descContainer.setAttribute("id", "contain" + i);
                        descContainer.setAttribute("style", "padding:1%;height:320px;background-color:#000044");
                        descContainer.setAttribute("class", "small-box ");
                        var descContainer1 = document.createElement("DIV");
                        descContainer1.setAttribute("style", "background: white");
                        var descContainer2 = document.createElement("DIV");
                        descContainer2.setAttribute("class", "row");
                        var descContainer3 = document.createElement("DIV");
                        descContainer3.setAttribute("class", "col-md-12");
                        var descContainer4 = document.createElement("H1");
                        descContainer4.setAttribute("style", "color: black");
                        descContainer4.appendChild(document.createTextNode("Inquiries"));
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
                        descContainer9.setAttribute("id", "formd" + contactId);
                        descContainer9.setAttribute("method", "post");
                        descContainer9.setAttribute("action", "quickEmail.php")
                        var textContainer2 = document.createElement("DIV");
                        textContainer2.setAttribute("class", "row");
                        var textContainer3 = document.createElement("DIV");
                        textContainer3.setAttribute("class", "col-md-2 col-lg-2 col-sm-2");
                        var textContainer4 = document.createElement("DIV");
                        textContainer4.setAttribute("class", "col-md-10 col-lg-10 col-sm-10");
                        var textlabel = document.createElement("LABEL");
                        textlabel.appendChild(document.createTextNode("Message  -  "));
                        textlabel.setAttribute("style", "color:green");
                        var descText = document.createElement("TEXTAREA");
                        descText.setAttribute("name", "editor");
                        //   descText.setAttribute("rows", "8");
                        descText.setAttribute("style", "width: 100%");
                        descText.appendChild(document.createTextNode(message));
                        textContainer3.appendChild(textlabel);
                        textContainer2.appendChild(textContainer3);
                        textContainer4.appendChild(descText);
                        textContainer2.appendChild(textContainer4);
                        var descinputhidden = document.createElement("INPUT");
                        descinputhidden.setAttribute("type", "hidden");
                        descinputhidden.setAttribute("value", "The Best Hotel Deal - Inquiry Reply");
                        descinputhidden.setAttribute("name", "Message");
//textContainer2.appendChild(descText);
                        //  descText.setAttribute("disabled", "true");
                        var descinputContainer2 = document.createElement("DIV");
                        descinputContainer2.setAttribute("class", "row");
                        var descinputContainer3 = document.createElement("DIV");
                        descinputContainer3.setAttribute("class", "col-md-6");
                        var descinputContainer4 = document.createElement("DIV");
                        descinputContainer4.setAttribute("class", "col-md-6");
                        var descinput1 = document.createElement("INPUT");
                        var desclabel1 = document.createElement("LABEL");
                        desclabel1.appendChild(document.createTextNode("Contact ID  -  "));
                        desclabel1.setAttribute("style", "color:green");
                        descinput1.setAttribute("type", "text");
                        descinput1.setAttribute("style", "border:none;font-weight:bold");
                        descinput1.setAttribute("value", contactId);
                        descinput1.setAttribute("name", "Id");
                        var descinput2 = document.createElement("INPUT");
                        var desclabel2 = document.createElement("LABEL");
                        desclabel2.setAttribute("style", "color:green");
                        desclabel2.appendChild(document.createTextNode("Name  -  "));

                        descinput2.setAttribute("type", "text");
                        descinput2.setAttribute("value", firstName + " " + lastName);
                        descinput2.setAttribute("style", "border:none;font-weight:bold");
                        descinput2.setAttribute("name", "Name");
                        descinputContainer3.appendChild(desclabel1);
                        descinputContainer3.appendChild(descinput1);
                        descinputContainer4.appendChild(desclabel2);
                        descinputContainer4.appendChild(descinput2);
                        descinputContainer2.appendChild(descinputContainer3);
                        descinputContainer2.appendChild(descinputContainer4);

                        var descinputContainer5 = document.createElement("DIV");
                        descinputContainer5.setAttribute("class", "row");
                        var descinputContainer6 = document.createElement("DIV");
                        descinputContainer6.setAttribute("class", "col-md-6");
                        var descinputContainer7 = document.createElement("DIV");
                        descinputContainer7.setAttribute("class", "col-md-6");
                        var descinput3 = document.createElement("INPUT");
                        var desclabel3 = document.createElement("LABEL");
                        desclabel3.appendChild(document.createTextNode("Phone  -  "));
                        desclabel3.setAttribute("style", "color:green");
                        descinput3.setAttribute("type", "text");
                        descinput3.setAttribute("style", "border:none;font-weight:bold");
                        descinput3.setAttribute("value", phone);
                        descinput3.setAttribute("name", "Phone");
                        var descinput4 = document.createElement("INPUT");
                        var desclabel4 = document.createElement("LABEL");
                        desclabel4.setAttribute("style", "color:green");
                        desclabel4.appendChild(document.createTextNode("EMail  -  "));

                        descinput4.setAttribute("type", "text");
                        descinput4.setAttribute("value", email);
                        descinput4.setAttribute("style", "border:none;font-weight:bold");
                        descinput4.setAttribute("name", "Email");
                        descinputContainer6.appendChild(desclabel3);
                        descinputContainer6.appendChild(descinput3);
                        descinputContainer7.appendChild(desclabel4);
                        descinputContainer7.appendChild(descinput4);
                        descinputContainer5.appendChild(descinputContainer6);
                        descinputContainer5.appendChild(descinputContainer7);
                        var break1 = document.createElement("BR");
                        var break2 = document.createElement("BR");
                        //    descText.appendChild(document.createTextNode(description));
                        descContainer9.appendChild(descinputContainer2);


                        descContainer9.appendChild(break1);
                        descContainer9.appendChild(descinputhidden);
                        descContainer9.appendChild(descinputContainer5);
                        descContainer9.appendChild(break1);
                        descContainer9.appendChild(textContainer2);
                        //     descContainer9.appendChild(descText);
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
                        modalFooter.setAttribute("style", "padding:2%;background-color:#000044");
                        var buttonadd = document.createElement("BUTTON");
                        buttonadd.setAttribute("id", contactId);
                        buttonadd.setAttribute("name", i);
                        buttonadd.setAttribute("onclick", "callFunction()");
                        buttonadd.setAttribute("class", "btn btn-success btn-send");
                        buttonadd.setAttribute("style", "background-color:maroon");
                        buttonadd.setAttribute("data-dismiss", "modal");
                        var t1 = document.createTextNode("Reply by Email >>");
                        buttonadd.appendChild(t1);
                        var buttoncancel = document.createElement("BUTTON");
                        buttoncancel.setAttribute("id", contactId);
                        buttoncancel.setAttribute("name", i);
                        buttoncancel.setAttribute("onclick", "callFunction2()");
                        buttoncancel.setAttribute("class", "btn btn-success btn-send");
                        buttoncancel.setAttribute("data-dismiss", "modal");
                        buttoncancel.setAttribute("style", "background-color:maroon");
                        var t2 = document.createTextNode(" Ignore Message>>");
                        buttoncancel.appendChild(t2);
                        modalFooter.appendChild(buttonadd);
                        modalFooter.appendChild(buttoncancel);

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
                        document.getElementById("modalset").appendChild(modalWindow)



                        var tableV = document.getElementById('inquiryTable');
                        var rowNew = document.createElement("TR");
                        rowNew.setAttribute("id", "btn" + i);

                        var col1 = document.createElement("TD");
                        var col2 = document.createElement("TD");
                        var col3 = document.createElement("TD");
                        var col4 = document.createElement("TD");
                        var col5 = document.createElement("TD");
                        var col6 = document.createElement("TD");


                        var btnDiv1 = document.createElement("BUTTON");

                        col1.appendChild(document.createTextNode(contactId));
                        col2.appendChild(document.createTextNode(firstName));
                        col3.appendChild(document.createTextNode(lastName));
                        col4.appendChild(document.createTextNode(email));
                        col5.appendChild(document.createTextNode(phone));
                        col6.appendChild(btnDiv1);



                        btnDiv1.setAttribute("type", "button");
                        btnDiv1.setAttribute("class", "btn btn-success btn-send");
                        btnDiv1.setAttribute("id", "btn" + i);
                        btnDiv1.setAttribute("style", "background-color:maroon");
                        btnDiv1.setAttribute("data-toggle", "modal");
                        btnDiv1.setAttribute("data-target", "#modalNew" + contactId);
                        // btnDiv1.setAttribute("onclick", "displayAlert1()");

                        var t1 = document.createTextNode("       Check >>      ");
                        btnDiv1.appendChild(t1);
                        rowNew.appendChild(col1);
                        rowNew.appendChild(col2);
                        rowNew.appendChild(col3);
                        rowNew.appendChild(col4);
                        rowNew.appendChild(col5);
                        rowNew.appendChild(col6);


                        tableV.appendChild(rowNew);
                    }
                }
            }

            obj.open("GET", "getDescription.php?inquiry=" + encodeURIComponent(comp), true);
            obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            obj.send();
        }
    }
    function callFunction() {

        var e = window.event,
            btn = e.target || e.srcElement;
        //     document.getElementById('inquiryTable').deleteRow(btn.name);
        $('#formd' + btn.id).submit();

    }
    function callFunction2() {

        var e = window.event,
            btn = e.target || e.srcElement;
        //  document.getElementById('inquiryTable').deleteRow(btn.name);
        $.ajax({
            type: 'POST',
            url: 'ignoreUpdate.php',
            data: $('#formd' + btn.id).serialize(),
            success: function (data) {

                BootstrapDialog.alert("You have ignored the customer inquiry.");
                document.getElementById('inquiryTable').deleteRow(btn.name);
            }
        });

    }

</script>
</body>
</html>

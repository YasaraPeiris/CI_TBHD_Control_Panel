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
    <style>
        .para1 {
            color: dimgrey;
            font-size: 14px;
        }

        .faci {
            color: dimgrey;
            font-size: 14px;
        }

        ul.nav li.active {
            background-color: #8892d6;
        }

        .nav-tabs {
            border: none;

        }

        .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover {
            border: none;
        }
    </style>

</head>
<body class="hold-transition skin-blue sidebar-mini" style="font-size: 14px;">

<div class="wrapper">

    <!-- Left side column. contains the logo and sidebar -->
    <header class="main-header">
        <!-- Logo -->

        <!-- Header Navbar: style can be found in header.less -->
        <?php include 'hotelTopMost.php'; ?>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <?php include 'hotelSidebar.php'; ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 88vh">
        <!-- Content Header (Page header) -->
        <?php 
        if (!empty($_SESSION['errorURP'])) {
            echo "<div class='alert alert-info' style='margin-bottom: 0;'><strong>Warning! </strong> ".$_SESSION['errorURP']."</div>";
            unset($_SESSION['errorURP']);
        }
        ?>
        <section class="content-header" style="padding-right:5%;padding-left:5%;padding-top:2%;">
            <h1 style="font-weight:bold;font-size: 2em;">
                Update Room Price Details
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Edit Details</li>
            </ol>
        </section>

        <section class="content" style="padding-right:5%;padding-left:5%;">
            <div id="about_web" class="box box-solid"
                 style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-top: 3px solid #d2d6de;">
                <div class="box-header with-border" style="text-align: center;">
                    <h3 class="box-title"
                        style="text-align: center;color:dimgrey;padding-top:6px;font-weight: bold;font-size: 18px;">Price Details</h3>
                </div>

                <div class="small-box" id="hotelDes" style="box-shadow:none;">
                    <ul class="nav nav-tabs" id="roomnames">
                        <li id="0" class="active"><a id="0" data-toggle="tab" style="background-color: transparent;"
                                                     href="<?php echo '#' . preg_replace('/\s+/', '', $data1[0]->room_name); ?>"><?php echo $data1[0]->room_name ?></a>
                        </li>
                        <?php for ($i = 1; $i < sizeof($data1); $i++) { ?>

                            <li id="<?php echo $i ?>"><a id="<?php echo $i ?>" data-toggle="tab" style="background-color: transparent;" href="<?php echo '#' . preg_replace('/\s+/', '', $data1[$i]->room_name); ?>"><?php echo $data1[$i]->room_name ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                    <div class="tab-content">
                        <div style="background: white;" id="<?php echo preg_replace('/\s+/', '', $data1[0]->room_name); ?>"
                             class="tab-pane fade in active">
                            <div class="box box-info" style="padding:2%;border-color:gray;border:1px solid #f4f4f4;">


                                <div class="box-body pad"
                                     style="color: black;padding-left: 3%;padding-right: 3%;padding-top: 2%;padding-bottom: 1%;">

                                    <form method="post" action="<?php echo site_url(); ?>/EditDetailsController/saveNewPriceDetails"  id="roomForm0" name="roomForm0">
                                        <input type="hidden" name="formId" value="0">
                                        <input type="hidden" name="roomTypeId" value="<?php echo $data1[0]->room_type_id?>">
                                        <!-- <?php echo $data1[0]->room_type_id ?> -->
                                        <!-- <label for="rent_area">Your Rent Area</label> -->
                                        <div class="col-md-12" style="margin-bottom: 10px;">
                                            <div class="col-md-2">
                                                <p style="color:dimgrey;font-size: 14px;"><b>Start Date</b></p>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="date" name="strtDate" style="color:dimgrey;font-size: 14px;margin: 0px 10px; padding: 6px;width:100%;" required>
                                            </div>
                                            <div class="col-md-2"></div>
                                            <div class="col-md-2">
                                                <p style="color:dimgrey;font-size: 14px;"><b>End Date</b></p>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="date" name="endDate" style="color:dimgrey;font-size: 14px;margin: 0px 10px; padding: 6px;width:100%;" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12" name="roomprices" style="border:1px solid #f4f4f4;padding:2%">
                                            <table class="table table-striped">
                                                <thead>
                                                <tr style="text-align:center;">
                                                    <th>Price Condition</th>
                                                    <th>Price</th>
                                                    <th>Facilities</th>
                                                    <th>Note</th>
                                                    <!--                                                         <th>Add Facilities</th>-->
                                                    <!--                                                    <th>Remove Facilities</th>-->
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $r = json_decode($data1[0]->price_details);
                                                for($i=0;$i<sizeof($r->priceArry);$i++){  // for number of rooms

                                                    ?>

                                                    <tr>
                                                        <td><?php echo $r->priceNameArry[$i]; ?>
                                                        <input type="hidden" value="<?php echo $r->priceNameArry[$i]; ?>" name="pricename0[]"></td>
                                                        <td><input   value="<?php echo number_format(floatval(preg_replace('/[^\d.]/', '', $r->priceArry[$i])),2); ?>" name="roomprice0[]"></td>
<!--                                                        <td><input style="border: none;background-color:transparent;text-align: right;"  value="--><?php //echo $r->priceArry[$i]; ?><!--" name="roomprice0[]"></td>-->

                                                        <td>
                                                        <?php
                                                        if (isset($r->priceFaci[$i])) {                                                          
                                                            $nm= sizeof($r->priceFaci[$i]);

                                                            for($j=0; $j<$nm; $j++){
                                                                echo $r->priceFaci[$i][$j]." , " ; }
                                                        }


                                                            ?>
                                                        </td>
                                                        <td><?php echo $r->priceOtherArry[$i]; ?></td>

                                                    </tr>
                                                <?php } 
                                                ?>



                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-12" style="margin-bottom: 10px;">
                                            <div class="col-md-2">
                                                <p style="color:dimgrey;font-size: 14px;"><b>Priority</b></p>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="number" min="1" max="10" name="priority" style="color:dimgrey;font-size: 14px;margin: 0px 10px; padding: 6px;width:100%;" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style=";color:dimgrey;margin-top:2%;">
                                            <button type="reset" name="reset0" class="btn btn-default btn-lg"
                                                    style='float:right;background-color: #8892d6;color:white;font-size: inherit;'
                                                    onclick="ResetDetails()">Reset Details
                                            </button>
                                            <button type="btn" id="save0" name="save0" class="btn btn-default btn-lg"
                                                    style='float:right;background-color: #8892d6;color:white;font-size: inherit;'
                                                    onclick="saveDetails()">Save
                                            </button>
                                        </div>
                                    </form>
                                </div>


                            </div>
                        </div>
                        <?php for ($i = 1; $i < sizeof($data1); $i++) { ?>
                            <div style="background: white;" id="<?php echo preg_replace('/\s+/', '', $data1[$i]->room_name); ?>"
                                 class="tab-pane fade">
                                <div class="box box-info" style="border-color:gray;border:1px solid #f4f4f4;">
                                    <div class="box-body pad"
                                         style="color: black;padding-left: 3%;padding-right: 3%;padding-top: 2%;padding-bottom: 1%;">

                                        <form method="post" action="<?php echo site_url(); ?>/EditDetailsController/saveNewPriceDetails"  enctype="multipart/form-data" id="roomForm<?php echo $i; ?>" name="roomForm<?php echo $i; ?>">
                                            <input type="hidden" name="formId" value="<?php echo $i?>">
                                            <input type="hidden" name="roomTypeId" value="<?php echo $data1[$i]->room_type_id?>">
                                            <div class="col-md-12" style="margin-bottom: 10px;">
                                                <div class="col-md-2">
                                                    <p style="color:dimgrey;font-size: 14px;"><b>Start Date</b></p>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="date" name="strtDate" style="color:dimgrey;font-size: 14px;margin: 0px 10px; padding: 6px;width:100%;" required>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <p style="color:dimgrey;font-size: 14px;"><b>End Date</b></p>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="date" name="endDate" style="color:dimgrey;font-size: 14px;margin: 0px 10px; padding: 6px;width:100%;" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12" style="border:1px solid #f4f4f4;padding:2%">
                                                <table class="table table-striped">
                                                    <thead>
                                                    <tr style="text-align:center;">
                                                        <th>Price Condition</th>
                                                        <th>Price</th>
                                                        <th>Facilities</th>
                                                        <th>Note</th>
                                                        <!--                                                         <th>Add Facilities</th>-->
                                                        <!--                                                    <th>Remove Facilities</th>-->
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $r = json_decode($data1[$i]->price_details);
                                                    for($k=0;$k<sizeof($r->priceArry);$k++){

                                                        ?>

                                                        <tr>
                                                            <td><?php echo $r->priceNameArry[$k]; ?>
                                                            <input type="hidden" value="<?php echo $r->priceNameArry[$k]; ?>" name="pricename<?php echo $i; ?>[]"></td>
                                                            <td><input name="roomprice<?php echo $i; ?>[]"  value="<?php echo number_format(floatval(preg_replace('/[^\d.]/', '', $r->priceArry[$k])),2); ?>"></td>
                                                    <!-- <td><input style="text-align: right;border: none;background-color:transparent;" name="roomprice<?php //echo $i; ?><!--[]"  value="--><?php //echo $r->priceArry[$k]; ?><!--"></td>--> 

                                                            <td>
                                                            <?php
                                                            $nm= sizeof($r->priceFaci[$k]);
                                                            if($nm>0){

                                                                for($j=0; $j<$nm; $j++){
                                                                    echo $r->priceFaci[$k][$j]." , " ; }}
                                                                ?>
                                                            </td>
                                                            <td><?php echo $r->priceOtherArry[$k]; ?></td>
                                                        </tr>
                                                    <?php } 
                                                    // echo json_encode($r->priceFaci);
                                                    // echo "--------";
                                                    // print_r( json_encode($r->priceFaci));
                                                    ?>

                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-md-12" style="margin-bottom: 10px;">
                                                <div class="col-md-2">
                                                    <p style="color:dimgrey;font-size: 14px;"><b>Priority</b></p>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="number" min="1" max="10" name="priority" style="color:dimgrey;font-size: 14px;margin: 0px 10px; padding: 6px;width:100%;" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12" style=";color:dimgrey;margin-top:2%;">
                                                <button type="reset" name="reset" class="btn btn-default btn-lg"
                                                        style='float:right;background-color: #8892d6;color:white;font-size: inherit;'
                                                        onclick="ResetDetails()">Reset Details
                                                </button>
                                                <button type="submit" name="save" class="btn btn-default btn-lg"
                                                        style='float:right;background-color: #8892d6;color:white;font-size: inherit;'
                                                        onclick="saveDetails()">Save
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        <?php } ?>
                        <!--<!-- <hr> -->


                        <!-- <button onclick="goBack()" class="back_button">Back</button> -->
                        <!-- <input type="submit" value="Finish" name="finishButton" id="dsas"> -->


                        <hr style="border: 1px solid rgba(0, 0, 0, 0.3);margin-top: 60px;">

                    </div>
                </div>
            </div>

        </section>


        <!-- <section class="content" style="padding-right:5%;padding-left:5%;">
            <div  style="background:white;padding: 20px;box-shadow: 0 0px 8px 0 rgba(0, 0, 0, 0.06), 0 1px 0px 0 rgba(0, 0, 0, 0.02);-webkit-border-radius: 5px;border-radius: 5px;">

            <h2 style="padding: 6px 15px 6px 15px;margin: 1px;font: bold 15px arial, sans-serif;color: #464646;margin-bottom: 20px;background: linear-gradient(to bottom, rgba(250,250,250,1) 0%, rgba(232,232,232,1) 100%);">Room Rates</h2>
            <div class="small-box" id="hotelDes" style="box-shadow:none;">
                <div style="background: white;" >
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box box-info" style="border-color:gray;">
                                <div class="box-body pad" style="color: black;">
                                    <table id="example" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Room Type</th>
                                                <th>Room Name</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        </section>
     -->
        <!-- /.content -->
    </div>

    <!-- /.content-wrapper -->
    <?php 
       include 'footer.html';
    ?>

    <!-- Control Sidebar -->

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
<!-- AdminLTE for demo purposes -->
<script src="../../assets/dist/js/demo.js"></script>
<script src="../../assets/dist/js/validator.min.js"></script>
<!--datatables-->

<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.1.1/js/responsive.bootstrap.min.js"></script>


<script type='text/javascript'>
    <?php
    $php_array = $data1;
    $js_array = json_encode($php_array);
    echo "var javascript_array = ". $js_array . ";\n";
    ?>

</script>
<script>

    $(document).ready(function () {
        setInitialRadioButton();
    });


    $(document).ready(function () {
        $('a[data-toggle="tab"]').bind('click', function (e) {
//            alert($(e.target.id));

        });

        $('a[data-toggle=tab]').click(function(){
            var id_val = $(this).attr('id');
            setRadioButton(id_val);
        });

    });


    function capitalizeFirstLetter(string) {
        return string.charAt(0).toUpperCase() + string.slice(1);
    }
    function setInitialRadioButton() {
        var selected_item_id = $("#roomnames li.active").attr('id');

        var room_val = capitalizeFirstLetter(javascript_array[selected_item_id].room_type);
        $('#' + room_val + selected_item_id).prop("checked", true);
        var valg = '#' + room_val + selected_item_id;

    }

    function setRadioButton(val_id)
    {
        var selected_item_id = val_id;

        var room_val = capitalizeFirstLetter(javascript_array[selected_item_id].room_type);
        $('#' + room_val + selected_item_id).prop("checked", true);
        var valg = '#' + room_val + selected_item_id;


    }

    function saveDetails(){
        var selected_item_id = $("#roomnames li.active").attr('id');
        var valForm = '#roomForm'+ selected_item_id;
        $(valFrom).submit();
    }

    function ResetDetails(){
        location.reload();
    }
</script>
</body>
</html>

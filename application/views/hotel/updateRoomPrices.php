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
                Update Room Details
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
                        style="text-align: center;color:dimgrey;padding-top:6px;font-weight: bold;font-size: 18px;">Room
                        Details</h3>
                </div>

                <div class="small-box" id="hotelDes" style="box-shadow:none;">
                    <ul class="nav nav-tabs" id="roomnames">
                        <li id="0" class="active"><a id="0" data-toggle="tab" style="background-color: transparent;"
                                                     href="<?php echo '#' . preg_replace('/\s+/', '', $data1[0]->room_name); ?>"><?php echo $data1[0]->room_name ?></a>
                        </li>
                        <?php for ($i = 1; $i < sizeof($data1); $i++) { ?>

                            <li id="<?php echo $i ?>"><a id="<?php echo $i ?>" data-toggle="tab"
                                                         style="background-color: transparent;"
                                                         href="<?php echo '#' . preg_replace('/\s+/', '', $data1[$i]->room_name); ?>"><?php echo $data1[$i]->room_name ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                    <div class="tab-content">
                        <div style="background: white;" id="<?php echo preg_replace('/\s+/', '', $data1[0]->room_name); ?>"
                             class="tab-pane fade in active">
                            <div class="box box-info" style="padding:2%;border-color:gray;border:1px solid #f4f4f4;">


                                <div class="box-body pad"
                                     style="color: black;padding-left: 3%;padding-right: 3%;padding-top: 2%;padding-bottom: 1%;">

                                    <form method="post" action="<?php echo site_url(); ?>/EditDetailsController/saveDetails"  id="roomForm0" name="roomForm0">
                                        <input type="hidden" name="formId" value="0">
                                                                                <input type="hidden" name="roomTypeId" value="<?php echo $data1[0]->room_type_id?>">
                                        <div class="col-md-12" style="margin-bottom: 10px;">
                                            <div class="col-md-4">
                                                <p style="color:dimgrey;font-size: 14px;"> Room Type</p>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="col-md-12">
                                                    <div class="col-md-6" style="margin-bottom: 2%;">
                                                        <label class="radio-inline"><input type="radio" id="Single0"
                                                                                           name="optradio0" value="Single">Single Room</label>
                                                    </div>
                                                    <div class="col-md-6" style="margin-bottom: 2%;">
                                                        <label class="radio-inline"><input type="radio" id="Double0"
                                                                                           name="optradio0" value="Double">Double Room</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="col-md-6" style="margin-bottom: 2%;">
                                                        <label class="radio-inline"><input type="radio" id="Twin0"
                                                                                           name="optradio0" value="Twin">Twin
                                                            Room</label>
                                                    </div>
                                                    <div class="col-md-6" style="margin-bottom: 2%;">
                                                        <label class="radio-inline"><input type="radio" id="Triple0"
                                                                                           name="optradio0" value="Triple">Triple Room</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="col-md-6" style="margin-bottom: 2%;">
                                                        <label class="radio-inline"><input type="radio" id="Quadruple0"
                                                                                           name="optradio0" value="Quadruple">Quadruple
                                                            Room</label>
                                                    </div>
                                                    <div class="col-md-6" style="margin-bottom: 2%;">
                                                        <label class="radio-inline"><input type="radio" id="Family0"
                                                                                           name="optradio0" value="Family">Family Room</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="col-md-6" style="margin-bottom: 2%;">
                                                        <label class="radio-inline"><input type="radio" id="Studio0"
                                                                                           name="optradio0" value="Studio">Studio Room</label>
                                                    </div>
                                                </div>


                                            </div>

                                        </div>
                                        <div class="col-md-12" style="margin-bottom: 10px;">
                                            <div class="col-md-4">
                                                <p style="color:dimgrey;font-size: 14px;"> Room Name</p>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" name="room_name0"
                                                       value="<?php echo $data1[0]->room_name; ?>"
                                                       style="color:dimgrey;font-size: 14px;margin: 0px 10px; padding: 6px;width:100%;"
                                                       required>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="margin-bottom: 10px;">
                                            <div class="col-md-4">
                                                <p style="color:dimgrey;font-size: 14px;"> Occupancy</p>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="number" name="occupancy0"
                                                       value="<?php echo $data1[0]->no_of_people; ?>" min="1" max="16"
                                                       style="color:dimgrey;font-size: 14px;margin: 0 10px; min-width: 50px; padding: 2px 10px; "
                                                       required>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="margin-bottom: 10px;">
                                            <div class="col-md-4">
                                                <p style="color:dimgrey;font-size: 14px;"> Maximum Occupancy</p>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="number" name="max_occupancy0" id="max_ppl"
                                                       value="<?php echo $data1[0]->max_no_of_guests; ?>" min="1"
                                                       max="16"
                                                       style="margin: 0 10px;color:dimgrey;font-size: 14px; min-width: 50px; padding: 2px 10px; "
                                                       required>
                                            </div>
                                        </div>
                                        
                                        <!-- <label for="rent_area">Your Rent Area</label> -->
                                        <br>
                                        <hr>
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

                                                        <input type="hidden" value='<?php echo json_encode( $r->priceOtherArry); ?>' name="priceOtherArry0">
                                                        <input type="hidden" value='<?php echo json_encode( $r->priceFaci); ?>' name="pricefaci0">
                                                        <input type="hidden" value='<?php echo (isset($r->priceOccArry))?json_encode( $r->priceOccArry):""; ?>' name="priceOccArry0">


                                                </tbody>
                                            </table>
                                        </div>

                                        <br>
                                        <div class="col-md-12" style="margin-bottom: 10px;margin-top:4%;">
                                            <div class="col-md-4">
                                                <p style="color:dimgrey;font-size: 14px;"> Bathroom</p>
                                            </div>
                                            <div class="col-md-4">

                                                <select id="bathroom_type" name="bathroom_type0"
                                                        style="color:dimgrey;font-size:13px;margin: 0px 10px; padding: 8px;width:100%;"
                                                        required="true">
                                                    <option selected disabled>Please Select</option>
                                                    <option value="attached" <?php if ($data1[0]->bathroom_type == "attached") {
                                                        echo "selected";
                                                    } ?> >Attached
                                                    </option>
                                                    <option value="private" <?php if ($data1[0]->bathroom_type == "private") {
                                                        echo "selected";
                                                    } ?>>Private
                                                    </option>
                                                    <option value="shared" <?php if ($data1[0]->bathroom_type == "shared") {
                                                        echo "selected";
                                                    } ?>>Shared
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12"
                                             style="border:1px solid #f4f4f4;padding:2%;margin-top: 2%;color:dimgrey;">
                                            <?php $array = json_decode($data1[0]->room_facilities); ?>
                                            <div class="col-md-12" style="margin-bottom: 1%;">
                                                <div class="col-md-6">
                                                    <input type="checkbox" class="faci" name='room_faci0[]' value="Wifi" <?php if (in_array("Wifi", $array)) { echo 'checked="checked"';}?>>
                                                    Wifi @ the room <br>
                                                    <input type="checkbox" class="faci" name='room_faci0[]' value="AC" <?php if (in_array("AC", $array)) { echo 'checked="checked"';}?>>
                                                    Air Conditioned room <br>
                                                    <input type="checkbox" class="faci" name='room_faci0[]'
                                                           value="Heating Fireplace" <?php if (in_array("Heating Fireplace", $array)) { echo 'checked="checked"';}?>>
                                                    Heating/ Fireplace in the room
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="checkbox" class="faci" name='room_faci0[]' value="Fan" <?php if (in_array("Fan", $array)) { echo 'checked="checked"';}?>>
                                                    Fans in the room<br>
                                                    <input type="checkbox" class="faci" name='room_faci0[]'
                                                           value="Mosquito Nets" <?php if (in_array("AC", $array)) { echo 'checked="checked"';}?>> Mosquito Nets <br>
                                                    <input type="checkbox" class="faci" name='room_faci0[]'
                                                           value="Hot Water" <?php if (in_array("Hot Water", $array)) { echo 'checked="checked"';}?>> Hot Water
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-md-12" style="margin-bottom: 1%;">
                                                <div class="col-md-6">
                                                    <input type="checkbox" class="faci" name='room_faci0[]'
                                                           value="Refrigerator"> Refrigerator in the room<br>
                                                    <input type="checkbox" class="faci" name='room_faci0[]' value="Iron" <?php if (in_array("Refrigerator", $array)) { echo 'checked="checked"';}?>>
                                                    Iron in the room<br>
                                                    <input type="checkbox" class="faci" name='room_faci0[]'
                                                           value="Flat Screen TV" <?php if (in_array("Flat Screen TV", $array)) { echo 'checked="checked"';}?>> Flat Screen TV in the room<br>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="checkbox" class="faci" name='room_faci0[]' value="TV" <?php if (in_array("TV", $array)) { echo 'checked="checked"';}?>>
                                                    TV in the room<br>
                                                    <input type="checkbox" class="faci" name='room_faci0[]'
                                                           value="Satellite Channels" <?php if (in_array("Satellite Channels", $array)) { echo 'checked="checked"';}?>> Satellite Channels <br>
                                                    <input type="checkbox" class="faci" name='room_faci0[]'
                                                           value="Hair Dryer" <?php if (in_array("Hair Dryer", $array)) { echo 'checked="checked"';}?>> Hair Dryer in the room<br>
                                                </div>
                                            </div>

                                            <div class="col-md-12" style="margin-bottom: 1%;">
                                                <div class="col-md-6">
                                                    <input type="checkbox" class="faci" name='room_faci0[]'
                                                           value="ClothRack" <?php if (in_array("ClothRack", $array)) { echo 'checked="checked"';}?>> Cloth Rack in the room<br>
                                                    <input type="checkbox" class="faci" name='room_faci0[]'
                                                           value="Wardrobe Closet" <?php if (in_array("Wifi", $array)) { echo 'checked="checked"';}?>> Wardrobe / Closet in the room<br>
                                                    <input type="checkbox" class="faci" name='room_faci0[]' value="Safe" <?php if (in_array("Safe", $array)) { echo 'checked="checked"';}?>>
                                                    Safe in the room<br>
                                                </div>
                                                <div class="col-md-6">
                                                    Seating facilities to, <br>
                                                    <input type="radio" name="room_faci_radio0[]" class="faci"  checked="checked"
                                                           value="Chairs To Every One"> 
                                                    every one 

                                                    <input type="radio" name="room_faci_radio0[]" value="Chairs Only To Fewer" <?php if (in_array("Chairs Only To Fewer", $array)) { echo 'checked="checked"';}?>>
                                                    fewer 
                                                    <input type="radio" name="room_faci_radio0[]"  value="No chairs" <?php if (in_array("No chairs", $array)) { echo 'checked="checked"';}?>> 
                                                    No chairs
                                                    <br>
                                                    <input type="checkbox" name="room_faci0[]" class="faci" name='room_faci0[]' value="Desk" <?php if (in_array("Desk", $array)) { echo 'checked="checked"';}?>>
                                                    Desk in the room
                                                </div>
                                            </div>

                                            <div class="col-md-12" style="margin-bottom: 1%;">
                                                <div class="col-md-6">
                                                    <input type="checkbox" class="faci" name='room_faci0[]'
                                                           value="Carpeted" <?php if (in_array("Carpeted", $array)) { echo 'checked="checked"';}?>> Carpeted Room<br>
                                                    <input type="checkbox" class="faci" name='room_faci0[]'
                                                           value="Tiled/Marble Floor" <?php if (in_array("Tiled/Marble Floor", $array)) { echo 'checked="checked"';}?>> Tiled/Marble Room Floor<br>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="checkbox" class="faci" name='room_faci0[]'
                                                           value="Balcony Directly Accessible from the room" <?php if (in_array("Balcony Directly Accessible from the room", $array)) { echo 'checked="checked"';}?>> Balcony
                                                    Directly Accessible from the room<br>
                                                    <input type="checkbox" class="faci" name='room_faci0[]'
                                                           value="Terrace Directly Accessible from the room" <?php if (in_array("Terrace Directly Accessible from the room", $array)) { echo 'checked="checked"';}?>> Terrace
                                                    Directly Accessible from the room<br>
                                                </div>
                                            </div>
                                        </div>
                                        <!--                                        <div class="col-md-12"-->
                                        <!--                                             style="border:1px solid #f4f4f4;padding:2%;margin-top: 2%;;color:dimgrey;">-->
                                        <!--                                            <div class="col-md-12" style="margin-bottom: 10px;">-->
                                        <!--                                                <div class="col-md-4">-->
                                        <!--                                                    <p style="color:dimgrey;font-size: 14px;"> Room has a</p>-->
                                        <!--                                                </div>-->
                                        <!--                                                <div class="col-md-4">-->
                                        <!---->
                                        <!--                                                    <select i-->
                                        <!--                                                            d="view" name="view"-->
                                        <!--                                                            style="color:dimgrey;font-size:13px;margin: 0px 10px; padding: 8px;width:100%;"-->
                                        <!--                                                            required="true">-->
                                        <!--                                                        <option value="no_view" selected>No view</option>-->
                                        <!--                                                        <option value="City">City View</option>-->
                                        <!--                                                        <option value="Garden">Garden View</option>-->
                                        <!--                                                        <option value="Lake">Lake View</option>-->
                                        <!--                                                        <option value="Mountain">Mountain View</option>-->
                                        <!--                                                        <option value="River">River View</option>-->
                                        <!--                                                        <option value="Sea">Sea View</option>-->
                                        <!--                                                        <option value="Pool">Pool View</option>-->
                                        <!--                                                        <option value="Landmark_View">Landmark View</option>-->
                                        <!--                                                    </select>-->
                                        <!--                                                </div>-->
                                        <!--                                            </div>-->
                                        <!--                                        </div>-->
                                        <div class="col-md-12"
                                             style=";color:dimgrey;border:1px solid #f4f4f4;padding:2%;margin-top: 2%;">
                                            <div class="col-md-12">
                                                <div class="col-md-6">
                                                    <input type="checkbox" name='room_faci0[]'
                                                           value="Wheelchair Accessible" <?php if (in_array("Wheelchair Accessible", $array)) { echo 'checked="checked"';}?>> Room is Wheelchair
                                                    accessible<br>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="checkbox" name='room_faci0[]'
                                                           value="Elevator Accessible" <?php if (in_array("Elevator Accessible", $array)) { echo 'checked="checked"';}?>> Room is Elevator
                                                    accessible<br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12"
                                             style=";color:dimgrey;border:1px solid #f4f4f4;padding:2%;margin-top: 2%;">

                                            <div class="col-md-12" style=";color:dimgrey;">
                                                <div class="col-md-6">
                                                    How many this kind of rooms?
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="number" name="each_room_count0"
                                                           value="<?php echo $data1[0]->no_of_rooms; ?>" min="1"
                                                           max="10"
                                                           style="margin: 5px 10px; min-width: 50px; padding: 2px 10px; ">
                                                </div>
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

                                        <form method="post" action="<?php echo site_url(); ?>/EditDetailsController/saveDetails"  enctype="multipart/form-data" id="roomForm<?php echo $i; ?>" name="roomForm<?php echo $i; ?>">
                                            <input type="hidden" name="formId" value="<?php echo $i?>">
                                                                                        <input type="hidden" name="roomTypeId" value="<?php echo $data1[$i]->room_type_id?>">
                                            <div class="col-md-12" style="margin-bottom: 10px;">
                                                <div class="col-md-4">
                                                    <p style="color:dimgrey;font-size: 14px;"> Room Type</p>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="col-md-12">
                                                        <div class="col-md-6" style="margin-bottom: 2%;">
                                                            <label class="radio-inline"><input type="radio" id='Single<?php echo $i ?>'
                                                                                               name="optradio<?php echo $i; ?>" value="Single">Single
                                                                Room</label>
                                                        </div>
                                                        <div class="col-md-6" style="margin-bottom: 2%;">
                                                            <label class="radio-inline"><input type="radio" id="Double<?php echo $i ?>"
                                                                                               name="optradio<?php echo $i; ?>" value="Double">Double
                                                                Room</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="col-md-6" style="margin-bottom: 2%;">


                                                            <label class="radio-inline"><input type="radio" id="Twin<?php echo $i; ?>"
                                                                                               name="optradio<?php echo $i; ?>" value="Twin">Twin
                                                                Room</label>
                                                        </div>
                                                        <div class="col-md-6" style="margin-bottom: 2%;">
                                                            <label class="radio-inline"><input type="radio" id="Triple<?php echo $i; ?>"
                                                                                               name="optradio<?php echo $i; ?>" value="Triple">Triple
                                                                Room</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="col-md-6" style="margin-bottom: 2%;">
                                                            <label class="radio-inline"><input type="radio"
                                                                                               id="Quadruple<?php echo $i; ?>"
                                                                                               name="optradio<?php echo $i; ?>" value="Quadruple">Quadruple
                                                                Room</label>
                                                        </div>
                                                        <div class="col-md-6" style="margin-bottom: 2%;">
                                                            <label class="radio-inline"><input type="radio" id="Family<?php echo $i; ?>"
                                                                                               name="optradio<?php echo $i; ?>" value="Family">Family
                                                                Room</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="col-md-6" style="margin-bottom: 2%;">
                                                            <label class="radio-inline"><input type="radio" id="Studio<?php echo $i; ?>"
                                                                                               name="optradio<?php echo $i; ?>" value="Studio">Studio
                                                                Room</label>
                                                        </div>
                                                    </div>


                                                </div>

                                            </div>
                                            <div class="col-md-12" style="margin-bottom: 10px;">
                                                <div class="col-md-4">
                                                    <p style="color:dimgrey;font-size: 14px;"> Room Name</p>
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="text" name="room_name<?php echo $i; ?>"
                                                           value="<?php echo $data1[$i]->room_name; ?>"
                                                           style="color:dimgrey;font-size: 14px;margin: 0px 10px; padding: 6px;width:100%;"
                                                           required>
                                                </div>
                                            </div>
                                            <div class="col-md-12" style="margin-bottom: 10px;">
                                                <div class="col-md-4">
                                                    <p style="color:dimgrey;font-size: 14px;"> Occupancy</p>
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="number" name="occupancy<?php echo $i; ?>"
                                                           value="<?php echo $data1[$i]->no_of_people; ?>" min="1"
                                                           max="16"
                                                           style="color:dimgrey;font-size: 14px;margin: 0 10px; min-width: 50px; padding: 2px 10px; "
                                                           required>
                                                </div>
                                            </div>
                                            <div class="col-md-12" style="margin-bottom: 10px;">
                                                <div class="col-md-4">
                                                    <p style="color:dimgrey;font-size: 14px;"> Maximum Occupancy</p>
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="number" name="max_occupancy<?php echo $i; ?>" id="max_ppl"
                                                           value="<?php echo $data1[$i]->max_no_of_guests; ?>" min="1"
                                                           max="16"
                                                           style="margin: 0 10px;color:dimgrey;font-size: 14px; min-width: 50px; padding: 2px 10px; "
                                                           required>
                                                </div>
                                            </div>

                                            <!-- <label for="rent_area">Your Rent Area</label> -->
                                            <br>
                                            <hr>
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
<!--                                                    <td><input style="text-align: right;border: none;background-color:transparent;" name="roomprice--><?php //echo $i; ?><!--[]"  value="--><?php //echo $r->priceArry[$k]; ?><!--"></td>-->

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
                                                    <input type="hidden" value='<?php echo json_encode( $r->priceFaci); ?>' name="pricefaci<?php echo $i; ?>">
                                                    <input type="hidden" value='<?php echo json_encode( $r->priceOtherArry); ?>' name="priceOtherArry<?php echo $i; ?>">
                                                    <input type="hidden" value='<?php echo (isset($r->priceOccArry))?json_encode( $r->priceOccArry):""; ?>' name="priceOccArry<?php echo $i; ?>">

                                                    </tbody>
                                                </table>
                                            </div>
                                            <br>
                                            <div class="col-md-12" style="margin-bottom: 10px;margin-top:4%;">
                                                <div class="col-md-4">
                                                    <p style="color:dimgrey;font-size: 14px;"> Bathroom</p>
                                                </div>
                                                <div class="col-md-4">

                                                    <select id="bathroom_type" name="bathroom_type<?php echo $i; ?>"
                                                            style="color:dimgrey;font-size:13px;margin: 0px 10px; padding: 8px;width:100%;"
                                                            required="true">
                                                        <option selected disabled>Please Select</option>
                                                        <option value="attached" <?php if ($data1[$i]->bathroom_type == "attached") {
                                                            echo "selected";
                                                        } ?> >Attached
                                                        </option>
                                                        <option value="private" <?php if ($data1[$i]->bathroom_type == "private") {
                                                            echo "selected";
                                                        } ?>>Private
                                                        </option>
                                                        <option value="shared" <?php if ($data1[$i]->bathroom_type == "shared") {
                                                            echo "selected";
                                                        } ?>>Shared
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-12"
                                                 style="border:1px solid #f4f4f4;padding:2%;margin-top: 2%;color:dimgrey;">
                                                <?php $array = json_decode($data1[$i]->room_facilities);
                                                ?>
                                                <div class="col-md-12" style="margin-bottom: 1%;">
                                                    <div class="col-md-6">
                                                        <input type="checkbox" class="faci" name='room_faci<?php echo $i?>[]' value="Wifi" <?php if (in_array("Wifi", $array)) { echo 'checked="checked"';}?>>
                                                        Wifi @ the room <br>
                                                        <input type="checkbox" class="faci" name='room_faci<?php echo $i?>[]' value="AC" <?php if (in_array("AC", $array)) { echo 'checked="checked"';}?>>
                                                        Air Conditioned room <br>
                                                        <input type="checkbox" class="faci" name='room_faci<?php echo $i?>[]'
                                                               value="Heating Fireplace" <?php if (in_array("Heating Fireplace", $array)) { echo 'checked="checked"';}?>>
                                                        Heating/ Fireplace in the room
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="checkbox" class="faci" name='room_faci<?php echo $i?>[]' value="Fan" <?php if (in_array("Fan", $array)) { echo 'checked="checked"';}?>>
                                                        Fans in the room<br>
                                                        <input type="checkbox" class="faci" name='room_faci<?php echo $i?>[]'
                                                               value="Mosquito Nets" <?php if (in_array("AC", $array)) { echo 'checked="checked"';}?>> Mosquito Nets <br>
                                                        <input type="checkbox" class="faci" name='room_faci<?php echo $i?>[]'
                                                               value="Hot Water" <?php if (in_array("Hot Water", $array)) { echo 'checked="checked"';}?>> Hot Water
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="col-md-12" style="margin-bottom: 1%;">
                                                    <div class="col-md-6">
                                                        <input type="checkbox" class="faci" name='room_faci<?php echo $i?>[]'
                                                               value="Refrigerator"> Refrigerator in the room<br>
                                                        <input type="checkbox" class="faci" name='room_faci<?php echo $i?>[]' value="Iron" <?php if (in_array("Refrigerator", $array)) { echo 'checked="checked"';}?>>
                                                        Iron in the room<br>
                                                        <input type="checkbox" class="faci" name='room_faci<?php echo $i?>[]'
                                                               value="Flat Screen TV" <?php if (in_array("Flat Screen TV", $array)) { echo 'checked="checked"';}?>> Flat Screen TV in the room<br>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="checkbox" class="faci" name='room_faci<?php echo $i?>[]' value="TV" <?php if (in_array("TV", $array)) { echo 'checked="checked"';}?>>
                                                        TV in the room<br>
                                                        <input type="checkbox" class="faci" name='room_faci<?php echo $i?>[]'
                                                               value="Satellite Channels" <?php if (in_array("Satellite Channels", $array)) { echo 'checked="checked"';}?>> Satellite Channels <br>
                                                        <input type="checkbox" class="faci" name='room_faci<?php echo $i?>[]'
                                                               value="Hair Dryer" <?php if (in_array("Hair Dryer", $array)) { echo 'checked="checked"';}?>> Hair Dryer in the room<br>
                                                    </div>
                                                </div>

                                                <div class="col-md-12" style="margin-bottom: 1%;">
                                                    <div class="col-md-6">
                                                        <input type="checkbox" class="faci" name='room_faci<?php echo $i?>[]'
                                                               value="ClothRack" <?php if (in_array("ClothRack", $array)) { echo 'checked="checked"';}?>> Cloth Rack in the room<br>
                                                        <input type="checkbox" class="faci" name='room_faci<?php echo $i?>[]'
                                                               value="Wardrobe Closet" <?php if (in_array("Wifi", $array)) { echo 'checked="checked"';}?>> Wardrobe / Closet in the room<br>
                                                        <input type="checkbox" class="faci" name='room_faci<?php echo $i?>[]' value="Safe" <?php if (in_array("Safe", $array)) { echo 'checked="checked"';}?>>
                                                        Safe in the room<br>
                                                    </div>
                                                    <div class="col-md-6">
                                                        Seating facilities to, <br>
                                                        <input type="radio" class="faci" name="room_faci_radio<?php echo $i?>[]" checked="checked"
                                                               value="Chairs To Every One"> every one 

                                                        <input type="radio" name="room_faci_radio<?php echo $i?>[]" value="Chairs Only To Fewer" <?php if (in_array("Chairs Only To Fewer", $array)) { echo 'checked="checked"';}?>>
                                                        fewer <input type="radio" name="room_faci_radio<?php echo $i?>[]" value="No chairs" <?php if (in_array("No chairs", $array)) { echo 'checked="checked"';}?>> No
                                                        chairs<br>
                                                        <input type="checkbox" class="faci" name='room_faci<?php echo $i?>[]' value="Desk" <?php if (in_array("Desk", $array)) { echo 'checked="checked"';}?>>
                                                        Desk in the room
                                                    </div>
                                                </div>

                                                <div class="col-md-12" style="margin-bottom: 1%;">
                                                    <div class="col-md-6">
                                                        <input type="checkbox" class="faci" name='room_faci<?php echo $i?>[]'
                                                               value="Carpeted" <?php if (in_array("Carpeted", $array)) { echo 'checked="checked"';}?>> Carpeted Room<br>
                                                        <input type="checkbox" class="faci" name='room_faci<?php echo $i?>[]'
                                                               value="Tiled/Marble Floor" <?php if (in_array("Tiled/Marble Floor", $array)) { echo 'checked="checked"';}?>> Tiled/Marble Room Floor<br>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="checkbox" class="faci" name='room_faci<?php echo $i?>[]'
                                                               value="Balcony Directly Accessible from the room" <?php if (in_array("Balcony Directly Accessible from the room", $array)) { echo 'checked="checked"';}?>> Balcony
                                                        Directly Accessible from the room<br>
                                                        <input type="checkbox" class="faci" name='room_faci<?php echo $i?>[]'
                                                               value="Terrace Directly Accessible from the room" <?php if (in_array("Terrace Directly Accessible from the room", $array)) { echo 'checked="checked"';}?>> Terrace
                                                        Directly Accessible from the room<br>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--                                            <div class="col-md-12"-->
                                            <!--                                                 style="border:1px solid #f4f4f4;padding:2%;margin-top: 2%;;color:dimgrey;">-->
                                            <!--                                                <div class="col-md-12" style="margin-bottom: 10px;">-->
                                            <!--                                                    <div class="col-md-4">-->
                                            <!--                                                        <p style="color:dimgrey;font-size: 14px;"> Room has a</p>-->
                                            <!--                                                    </div>-->
                                            <!--                                                    <div class="col-md-4">-->
                                            <!---->
                                            <!--                                                        <select id="view" name="view"-->
                                            <!--                                                                style="color:dimgrey;font-size:13px;margin: 0px 10px; padding: 8px;width:100%;"-->
                                            <!--                                                                required="true">-->
                                            <!--                                                            <option value="no_view" selected>No view</option>-->
                                            <!--                                                            <option value="City">City View</option>-->
                                            <!--                                                            <option value="Garden">Garden View</option>-->
                                            <!--                                                            <option value="Lake">Lake View</option>-->
                                            <!--                                                            <option value="Mountain">Mountain View</option>-->
                                            <!--                                                            <option value="River">River View</option>-->
                                            <!--                                                            <option value="Sea">Sea View</option>-->
                                            <!--                                                            <option value="Pool">Pool View</option>-->
                                            <!--                                                            <option value="Landmark_View">Landmark View</option>-->
                                            <!--                                                        </select>-->
                                            <!--                                                    </div>-->
                                            <!--                                                </div>-->
                                            <!--                                            </div>-->
                                            <div class="col-md-12"
                                                 style=";color:dimgrey;border:1px solid #f4f4f4;padding:2%;margin-top: 2%;">
                                                <div class="col-md-12">
                                                    <div class="col-md-6">
                                                        <input type="checkbox" name='room_faci<?php echo $i?>[]'
                                                               value="Wheelchair Accessible" <?php if (in_array("Wheelchair Accessible", $array)) { echo 'checked="checked"';}?>> Room is Wheelchair
                                                        accessible<br>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="checkbox" name='room_faci<?php echo $i?>[]'
                                                               value="Elevator Accessible" <?php if (in_array("Elevator Accessible", $array)) { echo 'checked="checked"';}?>> Room is Elevator
                                                        accessible<br>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12"
                                                 style=";color:dimgrey;border:1px solid #f4f4f4;padding:2%;margin-top: 2%;">

                                                <div class="col-md-12" style=";color:dimgrey;">
                                                    <div class="col-md-6">
                                                        How many this kind of rooms?
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="number" name="each_room_count<?php echo $i; ?>"
                                                               value="<?php echo $data1[$i]->no_of_rooms; ?>" min="1"
                                                               max="10"
                                                               style="margin: 5px 10px; min-width: 50px; padding: 2px 10px; ">
                                                    </div>
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

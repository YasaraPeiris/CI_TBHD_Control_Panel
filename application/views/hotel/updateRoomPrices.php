
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>inna.lk :: Control Panel</title>
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
        .para1{  color:dimgrey;font-size: 14px;
        }
        .faci{
            color:dimgrey;font-size: 14px;
        }
    </style>
    </head>
    <body class="hold-transition skin-blue sidebar-mini" style="font-size: 14px;">

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
            <div class="content-wrapper" style="min-height: 88vh">
                <!-- Content Header (Page header) -->
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
                    <div id="about_web" class="box box-solid" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-top: 3px solid #d2d6de;">
                        <div class="box-header with-border" style="text-align: center;">
                            <h3 class="box-title" style="text-align: center;color:dimgrey;padding-top:6px;font-weight: bold;font-size: 18px;">Room Details</h3>
                          </div> <div class="small-box" id="hotelDes" style="box-shadow:none;">
                            <div style="background: white;" >
                                <div class="box box-info" style="border-color:gray;border:1px solid #f4f4f4;">
                                    <div class="box-body pad" style="color: black;padding-left: 3%;padding-right: 3%;padding-top: 2%;padding-bottom: 1%;">

                                        <form action="" method="post" enctype="multipart/form-data" id="roomForm">
                                            <div class="col-md-12" style="margin-bottom: 10px;">
                                                <div class="col-md-4">
                                                    <p style="color:dimgrey;font-size: 14px;"> Room Type</p>
                                                </div>
                                                <div class="col-md-4">

                                                        <select id="room_type" name="room_type" style="color:dimgrey;font-size:13px;margin: 0px 10px; padding: 8px;width:100%;" required="true">
                                                            <option selected disabled>Please Select</option>
                                                            <option value="Single" <?php if ($data1[0]->room_type == "Single") {echo "selected"; } ?> >Single Room</option>
                                                            <option value="Double" <?php if ($data1[0]->room_type == "Double") {echo "selected"; } ?> >Double Room</option>
                                                            <option value="Twin" <?php if ($data1[0]->room_type == "Twin") {echo "selected"; } ?> >Twin Room</option>
                                                            <option value="Triple">Triple Room</option>
                                                            <option value="Quadruple">Quadruple Room</option>
                                                            <option value="family">Family Room</option>
                                                            <option value="Studio">Studio Room</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12" style="margin-bottom: 10px;">
                                                <div class="col-md-4">
                                                    <p style="color:dimgrey;font-size: 14px;"> Room Name</p>
                                                </div>
                                                <div class="col-md-4">
                                                          <input type="text" name="room_name" value="<?php echo $data1[0]->room_name;?>" style="color:dimgrey;font-size: 14px;margin: 0px 10px; padding: 6px;width:100%;" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12" style="margin-bottom: 10px;">
                                                <div class="col-md-4">
                                                    <p style="color:dimgrey;font-size: 14px;"> Occupancy</p>
                                                </div>
                                                <div class="col-md-4">
                                                        <input type="number" name="occupancy" value="<?php echo $data1[0]->no_of_people;?>"  min="1" max="16" style="color:dimgrey;font-size: 14px;margin: 0 10px; min-width: 50px; padding: 2px 10px; " required>
                                                </div>
                                            </div>
                                            <div class="col-md-12" style="margin-bottom: 10px;">
                                                <div class="col-md-4">
                                                    <p  style="color:dimgrey;font-size: 14px;"> Maximum Occupancy</p>
                                                </div>
                                                <div class="col-md-4">
                                                        <input type="number" name="max_occupancy" id="max_ppl" value="<?php echo $data1[0]->max_no_of_guests;?>" min="1" max="16" style="margin: 0 10px;color:dimgrey;font-size: 14px; min-width: 50px; padding: 2px 10px; " required>
                                                </div>
                                            </div>

                                            <!-- <label for="rent_area">Your Rent Area</label> -->
                                             <br>
                                            <hr>
                                      <div class="col-md-12" style="border:1px solid #f4f4f4;padding:2%">
                                          <div class="col-md-4" style="color:dimgrey;font-size: 14px;">
                                               Price
                                              <input style="color:dimgrey;font-size: 14px;" type="hidden" name="priceValueCount" id="priceValueCount" value="1">

                                          </div>

                                          <div class="col-md-3">
                                              <select name="priceName1" id="priceName1" style=" margin:0px 10px;min-width: 85px;max-width: 140px; padding:8px;color:dimgrey;font-size;13px;">
                                                  <option value="Room Only">Room Only</option>
                                                  <option value="Bed and Breakfast">Bed and Breakfast</option>
                                                  <option value="Half-board">Half-board</option>
                                                  <option value="Full-board">Full-board</option>
                                                  <option value="with AC">with AC</option>
                                                  <option value="without AC">without AC</option>
                                                  <option value="AC room with breakfast">AC room with breakfast</option>
                                                  <option value="non AC room with breakfast">non AC room with breakfast</option>
                                                  <option value="Other">Other</option>
                                              </select>   </div>

                                            <div class="col-md-3" style="color:dimgrey;font-size: 14px;">

                                                Rs.&nbsp;<input type="number" name="price1" id="price1" min="0" style="width:80%;padding:6px;" required>

                                            </div>

                                          <div class="col-md-2" style="color:dimgrey;font-size: 14px;">

                                              <input type="text" name="priceNameCustm1" id="priceNameCustm1" placeholder="please specify." style=" visibility: hidden; max-width: 150px;margin: 5px 5px;padding: 5px 5px;" >

                                          </div>
                                          <div class="col-md-12" style="margin-bottom: 2%;color:dimgrey;font-size: 14px;">
                                          Special things to note
                                          </div>
                                          <div class="col-md-12" style="margin-bottom: 2%;color:dimgrey;font-size: 14px;">
                                          <textarea rows="2" cols="50" name="priceOther1" style="color:dimgrey;font-size: 14px;width: 85%; margin: 5px ; padding: 5px; resize: vertical; border-radius: 5px;" ></textarea>
                                          </div>
                                          <div class="col-md-12" style="color:dimgrey;font-size: 14px;"> Extra facilities for the price.</div>
                                          <br>
                                          <div class="col-md-12" style="margin-bottom: 2%;color:dimgrey;font-size: 14px;">
                                              <br>
                                              <div class="col-md-6">
                                                  <input type="checkbox" name="extraFaci1[]" style="margin-right: 5px;" value="Breakfast">Breakfast<br>
                                                  <input type="checkbox" name="extraFaci1[]" style="margin-right: 5px;" value="Lunch">Lunch<br>
                                                  <input type="checkbox" name="extraFaci1[]" style="margin-right: 5px;" value="Dinner">Dinner<br>
                                              </div>
                                              <div class="col-md-6">
                                                  <input type="checkbox" name="extraFaci1[]" style="margin-right: 5px;" value="AC">A/C<br>
                                                  <input type="checkbox" name="extraFaci1[]" style="margin-right: 5px;" value="Hot water">Hot water<br>
                                              </div>
                                          </div>

                                          <button type="button" class="btn btn-default btn-lg" style='float:right;background-color: #8892d6;color:white;font-size: inherit;' onclick="addAnotherPrice()">Add Another Price.</button>
                                          <button type="button" class="btn btn-default btn-lg" style='float:right;background-color: #8892d6;color:white;font-size: inherit;' onclick="removeLastPrice()">Remove Last Price</button>
                                      </div>
                                            <br>
                                                <div class="col-md-12" style="margin-bottom: 10px;margin-top:4%;">
                                                    <div class="col-md-4">
                                                        <p style="color:dimgrey;font-size: 14px;"> Bathroom</p>
                                                    </div>
                                                    <div class="col-md-4">

                                                        <select  id="bathroom_type" name="bathroom_type" style="color:dimgrey;font-size:13px;margin: 0px 10px; padding: 8px;width:100%;" required="true">
                                                        <option selected disabled>Please Select</option>
                                                        <option value="attached" <?php if ($data1[0]->bathroom_type == "attached") {echo "selected"; } ?> >Attached</option>
                                                        <option value="private" <?php if ($data1[0]->bathroom_type == "private") {echo "selected"; } ?>>Private</option>
                                                        <option value="shared" <?php if ($data1[0]->bathroom_type == "shared") {echo "selected"; } ?>>Shared</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            <div class="col-md-12" style="border:1px solid #f4f4f4;padding:2%;padding-left: 0;">
                                                <div class="col-md-12">
                                                <div class="col-md-4" style="margin-bottom: 2%;">
                                                    <p style="color:dimgrey;font-size: 14px;">Add Photos</p>
                                                </div>
                                                </div>
                                                <div class="col-md-12" style="margin-bottom: 4%;">
                                                <div class="col-md-6" style="font-size:13px;color: dimgrey;">

                                                    Images of the Room<span style="font-size:13px;color: dimgrey;">  (Add Multiple images)</span>

                                                </div>
                                                    <div class="col-md-6">
                                                        <input type="file"  id="roomImg" multiple required style="font-size:13px;color: dimgrey;">
                                                    </div>
                                                </div>
                                            <div class="col-md-12" style="margin-bottom: 2%;">
                                                <div class="col-md-6" style="font-size:13px;color: dimgrey;">

                                                    Images of the Bathroom<span style="font-size:13px;color: dimgrey;">  (Add Multiple images)</span>

                                                </div>
                                                <div class="col-md-6">
                                                    <input type="file"  id="bathroomImg" multiple required style="font-size:13px;color: dimgrey;">
                                                </div>
                                            </div>
                                    </div>

                                            <div class="col-md-12" style="border:1px solid #f4f4f4;padding:2%;margin-top: 2%;color:dimgrey;">
                                                <div class="col-md-12" style="margin-bottom: 1%;">
                                                    <div class="col-md-6">
                                                        <input type="checkbox" class="faci" name='room_faci[]' value="Wifi" > Wifi @ the room <br>
                                                        <input type="checkbox" class="faci" name='room_faci[]' value="AC" >  Air Conditioned room <br>
                                                        <input type="checkbox" class="faci" name='room_faci[]' value="Heating Fireplace" > Heating/ Fireplace in the room
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="checkbox" class="faci" name='room_faci[]' value="Fan" > Fans in the room<br>
                                                        <input type="checkbox" class="faci" name='room_faci[]' value="Mosquito Nets" > Mosquito Nets <br>
                                                        <input type="checkbox" class="faci" name='room_faci[]' value="Hot Water" > Hot Water
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="col-md-12" style="margin-bottom: 1%;">
                                                    <div class="col-md-6">
                                                        <input type="checkbox" class="faci" name='room_faci[]' value="Refrigerator"> Refrigerator in the room<br>
                                                        <input type="checkbox" class="faci" name='room_faci[]' value="Iron" > Iron in the room<br>
                                                        <input type="checkbox" class="faci" name='room_faci[]' value="Flat Screen TV" > Flat Screen TV in the room<br>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="checkbox" class="faci" name='room_faci[]' value="TV" > TV in the room<br>
                                                        <input type="checkbox" class="faci" name='room_faci[]' value="Satellite Channels" > Satellite Channels <br>
                                                        <input type="checkbox" class="faci" name='room_faci[]' value="Hair Dryer" > Hair Dryer in the room<br>
                                                    </div>
                                                </div>

                                                <div class="col-md-12" style="margin-bottom: 1%;">
                                                    <div class="col-md-6">
                                                        <input type="checkbox" class="faci" name='room_faci[]' value="ClothRack" > Cloth Rack in the room<br>
                                                        <input type="checkbox" class="faci" name='room_faci[]' value="Wardrobe Closet" > Wardrobe / Closet in the room<br>
                                                        <input type="checkbox" class="faci" name='room_faci[]' value="Safe" > Safe in the room<br>
                                                    </div>
                                                    <div class="col-md-6">
                                                        Seating facilities to, <br>
                                                        <input type="radio" class="faci" name="Seating" checked="checked" value="Chairs To Every One"> every one <input type="radio" name="Seating" value="Chairs Only To Fewer"> fewer <input type="radio" name="Seating" value="No chairs"> No chairs<br>
                                                        <input type="checkbox" class="faci" name='room_faci[]' value="Desk" > Desk in the room
                                                    </div>
                                                </div>

                                                <div class="col-md-12" style="margin-bottom: 1%;">
                                                    <div class="col-md-6">
                                                        <input type="checkbox" class="faci" name='room_faci[]' value="Carpeted" > Carpeted Room<br>
                                                        <input type="checkbox" class="faci" name='room_faci[]' value=" Tiled/Marble Floor" >  Tiled/Marble Room Floor<br>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="checkbox" class="faci" name='room_faci[]' value="Balcony Directly Accessible from the room" > Balcony Directly Accessible from the room<br>
                                                        <input type="checkbox" class="faci" name='room_faci[]' value="Terrace Directly Accessible from the room" > Terrace Directly Accessible from the room<br>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12" style="border:1px solid #f4f4f4;padding:2%;margin-top: 2%;;color:dimgrey;">
                                                <div class="col-md-12" style="margin-bottom: 10px;">
                                                    <div class="col-md-4">
                                                        <p style="color:dimgrey;font-size: 14px;"> Room has a</p>
                                                    </div>
                                                    <div class="col-md-4">

                                                        <select id="view" name="view" style="color:dimgrey;font-size:13px;margin: 0px 10px; padding: 8px;width:100%;" required="true">
                                                            <option value="no_view" selected>No view</option>
                                                            <option value="City">City View</option>
                                                            <option value="Garden">Garden View</option>
                                                            <option value="Lake">Lake View</option>
                                                            <option value="Mountain">Mountain View</option>
                                                            <option value="River">River View</option>
                                                            <option value="Sea">Sea View</option>
                                                            <option value="Pool">Pool View</option>
                                                            <option value="Landmark_View">Landmark View</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12" style=";color:dimgrey;border:1px solid #f4f4f4;padding:2%;margin-top: 2%;">
                                            <div class="col-md-12">
                                                    <div class="col-md-6">
                                                    <input type="checkbox" name='room_faci[]' value="Wheelchair Accessible" >  Room is Wheelchair accessible<br>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="checkbox" name='room_faci[]' value="Elevator Accessible" > Room is Elevator accessible<br>
                                                    </div>
                                                    </div>
                                            </div>
                                            <div class="col-md-12" style=";color:dimgrey;border:1px solid #f4f4f4;padding:2%;margin-top: 2%;">
                                            <div class="col-md-12" style="margin-bottom: 2%;color:dimgrey;font-size: 14px;">
                                                Other things to note on amenities
                                            </div>
                                            <div class="col-md-12" style="margin-bottom: 2%;color:dimgrey;font-size: 14px;">
                                                <textarea rows="2" cols="50" name="other_amenities" style="color:dimgrey;font-size: 14px;width: 85%; margin: 5px ; padding: 5px; resize: vertical; border-radius: 5px;" value="<?php echo $data1[0]->other_on_faci;?>" ></textarea>
                                            </div>
                                            </div>
                                            <div class="col-md-12" style=";color:dimgrey;border:1px solid #f4f4f4;padding:2%;margin-top: 2%;">
                                                <div class="col-md-12" style="margin-bottom: 2%;color:dimgrey;font-size: 14px;">
                                                    Details of uploaded photos
                                                </div>
                                                <div class="col-md-12" style="margin-bottom: 2%;color:dimgrey;font-size: 14px;">
                                                    <table class="table" id="imgTable1">
                                                        <thead>
                                                        <th>Time</th>
                                                        <th>Initial Size</th>
                                                        <th>Image</th>
                                                        <th>Status</th>
                                                        <!-- <th>Uploaded Size</th> -->
                                                        </thead>
                                                        <tbody id="tbodyID1">

                                                        </tbody>
                                                        <tbody id="tbodyID2">
                                                        </tbody>
                                                    </table>     </div>
                                            </div>
                                            <div class="col-md-12" style=";color:dimgrey;border:1px solid #f4f4f4;padding:2%;margin-top: 2%;">

                                            <div class="col-md-12" style=";color:dimgrey;">
                                                <div class="col-md-6">
                                                    How many this kind of rooms?
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="number" name="each_room_count" value="<?php echo $data1[0]->no_of_rooms;?>"  min="1" max="10" style="margin: 5px 10px; min-width: 50px; padding: 2px 10px; ">
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-md-12" style=";color:dimgrey;margin-top:2%;">
                                                <button type="submit" name="save" class="btn btn-default btn-lg" style='float:right;background-color: #8892d6;color:white;font-size: inherit;' onclick="addAnotherPrice()">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                            </div>

                                            </div>
                                            <!--<!-- <hr> -->
                                             <script type="text/javascript">
                                                var x = 2;
                                                function addAnotherPrice() {
                                                    // alert('ayeee');
                                                    var appendLi = '<li><hr class="hr_style"><select name="priceName'+x+'" id="priceName'+x+'" style="margin: 5px 5px; min-width: 85px;max-width: 140px; padding: 5px 5px;">'+
                                                        '<option value="Room Only">Room Only</option>'+
                                                        '<option value="Bed and Breakfast">Bed and Breakfast</option>'+
                                                        '<option value="Half-board">Half-board</option>'+
                                                        '<option value="Full-board">Full-board</option>'+
                                                        '<option value="with AC">with AC</option>'+
                                                        '<option value="without AC">without AC</option>'+
                                                        '<option value="AC room with breakfast">AC room with breakfast</option>'+
                                                        '<option value="non AC room with breakfast">non AC room with breakfast</option>'+
                                                        '<option value="Other">Other</option>'+
                                                        '</select>'+
                                                        '<input type="text" name="priceNameCustm'+x+'" id="priceNameCustm'+x+'" placeholder="please specify." style=" visibility: hidden; max-width: 150px;margin: 5px 5px;padding: 5px 5px;" >'+
                                                        'Rs.&nbsp;<input type="number" name="price'+x+'" id="price'+x+'" min="0" style="margin: 5px; min-width: 85px;" required>'+
                                                        '<br>Special things to note,<br>'+
                                                        '<textarea rows="2" cols="50" name="priceOther'+x+'" style="width: 85%; margin: 5px ; padding: 5px; resize: vertical; border-radius: 5px;" ></textarea>'+
                                                        '<br>Extra facilities for the price.<br>'+
                                                        '<div class="row">'+
                                                        ' <div class="col-md-6">'+
                                                        '  <input type="checkbox" name="extraFaci'+x+'[]" value="Breakfast">Breakfast<br>'+
                                                        ' <input type="checkbox" name="extraFaci'+x+'[]" value="Lunch">Lunch<br>'+
                                                        '<input type="checkbox" name="extraFaci'+x+'[]" value="Dinner">Dinner<br>'+
                                                        '</div>'+
                                                        '<div class="col-md-6">'+
                                                        ' <input type="checkbox" name="extraFaci'+x+'[]" value="AC">A/C<br>'+
                                                        '<input type="checkbox" name="extraFaci'+x+'[]" value="Hot water">Hot water<br>'+
                                                        '</div>'+
                                                        '</div>'+

                                                        '</li>';
                                                    // alert(x);
                                                    var y =x;
                                                    $('#Price_ul').append(appendLi);
                                                    $('#priceName'+y).change(function(){
                                                        // alert('asasas'+y);
                                                        if ($('#priceName'+y).val() == "Other") {
                                                            // alert('sasasas'+y);
                                                            $('#priceNameCustm'+y).css("visibility", "visible");
                                                            $('#priceNameCustm'+y).prop('required',true);
                                                        }
                                                        else{
                                                            $('#priceNameCustm'+y).css("visibility", "hidden");
                                                            $('#priceNameCustm'+y).prop('required',false);
                                                        }

                                                    });
                                                    // alert(x);
                                                    $('#priceValueCount').val(x);
                                                    // alert( $('#priceValueCount').val());
                                                    x = x +1;
                                                    // alert(x);
                                                }
                                                function removeLastPrice() {
                                                    if (x>2) {
                                                        $('#Price_ul li:last-child').remove();
                                                        x = x -1;
                                                        $('#priceValueCount').val(x-1);
                                                        // alert( $('#priceValueCount').val());
                                                    }
                                                    else{alert('You have to add atleast one price to the room.')}

                                                    // $event.preventDefault();
                                                    // return false;
                                                }
                                                $('#priceName1').change(function(){
                                                    if ($('#priceName1').val() == "Other") {
                                                        // alert('sasasas');
                                                        $('#priceNameCustm1').css("visibility", "visible");
                                                        $('#priceNameCustm1').prop('required',true);
                                                    }
                                                    else{
                                                        $('#priceNameCustm1').css("visibility", "hidden");
                                                        $('#priceNameCustm1').prop('required',false);
                                                    }

                                                });
                                            </script>



                                            <!-- <button onclick="goBack()" class="back_button">Back</button> -->
                                            <!-- <input type="submit" value="Finish" name="finishButton" id="dsas"> -->



                                        <hr style="border: 1px solid rgba(0, 0, 0, 0.3);margin-top: 60px;">

                                    </div>

                                </div>
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
        <!--datatables-->
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/fixedheader/3.1.2/js/dataTables.fixedHeader.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.1.1/js/responsive.bootstrap.min.js"></script>
        <script>

        $(document).ready(function() {
            var table = $('#example').DataTable( {
                responsive: true
            } );

            new $.fn.dataTable.FixedHeader( table );
        } );

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

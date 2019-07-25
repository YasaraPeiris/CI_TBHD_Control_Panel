
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

    <link rel="stylesheet" href="../../assets/css/new_listing.css">
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style type="text/css">
    form {
      &.is-readonly {
        .btn-save {
          display: none;
        }
        input,textarea{
          &[disabled] {
            cursor: text;
            background-color: #fff;
            border-color: transparent;
            outline-color: transparent;
            box-shadow: none;
          }
        }
      }
      &.is-editing { 
        .btn-edit{
          display: none;
        }
      }

    }
    label{
      color: dimgrey;
    }
    .box{
      box-shadow: none !important;
    }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">


  <div class="wrapper">
    <header class="main-header">
      <!-- Logo -->  
      <!-- Header Navbar: style can be found in header.less -->
      <?php include 'hotelTopMost.php';?>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <?php include 'hotelSidebar.php';?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background-color:ghostwhite;">
      <!-- Content Header (Page header) -->
      <?php
      if (!empty($_SESSION['alerAddRoom'])) {
          echo "<div class='alert alert-warning' style='margin-bottom: 0;'><strong>Alert! </strong>" . $_SESSION['alerAddRoom'] . "</div>";
          unset($_SESSION['alerAddRoom']);
      }
      ?>
      <section class="content-header" style="padding-right:5%;padding-left:5%;padding-top:2%;">
        <h1 style="font-weight:bold;font-size: 2em;">
          Add New Room
          <small>Control panel</small>
        </h1>

        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">New Room</li>
        </ol>
      </section>
      <!-- Main content -->
      <section class="content" style="padding-right:5%;padding-left:5%;">
        <div class="row" >
          <div class="col-md-12">
            <div id="about_web" class="box box-solid" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            ">
            <div class="box-header with-border" style="text-align: center;">
              <h3 class="box-title" style="text-align: center;color:dimgrey;padding-top:6px;font-weight: bold;">New Room Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="padding:3% 4%;">

              <div style="background: white;" >
                <div class="box box-info" style="border: none;">
                  <div class="box-body pad" style="color: black;">

                    <div class="row">
        <div class="form_box">
              <form action="<?php echo site_url(); ?>/EditDetailsController/newRoomAdd" method="post" enctype="multipart/form-data" id="roomForm">
                <p class="para1 "> Room Type 
                <select id="room_type" name="room_type" style="margin: 5px 10px; padding: 6px; max-width: 70%;" required="true">
                  <option selected disabled>Please Select</option>
                  <option value="Single">Single Room</option>
                  <option value="Double">Double Room</option>
                  <option value="Twin">Twin Room</option>
                  <option value="Triple">Triple Room</option>
                  <option value="Quadruple">Quadruple Room</option>
                  <option value="family">Family Room</option>
                  <option value="Studio">Studio Room</option>
                </select></p>
                  <!-- <label for="rent_area">Your Rent Area</label> -->
                  <p class="para1 "> Room Name<input type="text" name="room_name" placeholder="Customize your room's name" style="margin: 5px 10px; padding: 6px; max-width: 70%;" required></p>
                  <p class="para1 ">Occupancy <input type="number" name="occupancy" id="occupancyid"  min="1" max="45" style="margin: 0 10px; min-width: 50px; padding: 2px 10px; " required></p>
                  <p class="para1 ">Maximum Occupancy <input type="number" name="max_occupancy" id="max_ppl"  min="1" max="45" style="margin: 0 10px; min-width: 50px; padding: 2px 10px; " required></p>
                  <hr class="hr_style">
                  <label for="how_much">State Prices </label><span> (including Commission and all applicable Taxes)</span><br>
                 <!-- 
                  -->


                   <!-- <hr> -->
                   <input type="hidden" name="priceValueCount" id="priceValueCount" value="1">
                   <ul id="Price_ul">
                     <li>
                       <!-- <p class="para1 with_indent">  --><!-- <input type="text" name="priceName1" id="priceName1" min="0" style="margin: 10px 10px; min-width: 85px;max-width: 150px; padding: 5px 10px;" value="Room Only Price"> -->
                       <select name="priceName1" id="priceName1" style="margin: 5px 5px; min-width: 85px;max-width: 140px; padding: 5px 5px;">
                         <option value="Room Only">Room Only</option>
                         <option value="Bed and Breakfast">Bed and Breakfast</option>
                         <option value="Half-board">Half-board</option>
                         <option value="Full-board">Full-board</option>
                         <option value="with AC">with AC</option>
                         <option value="without AC">without AC</option>
                         <option value="AC room with breakfast">AC room with breakfast</option>
                         <option value="non AC room with breakfast">non AC room with breakfast</option>
                         <option value="with extra bed">with an Extra Bed</option>
                         <option value="Other">Other</option>
                       </select>
                       <input type="text" name="priceNameCustm1" id="priceNameCustm1" placeholder="please specify." style=" visibility: hidden; max-width: 150px;margin: 5px 5px;padding: 5px 5px;" >
                        <span>Rs.&nbsp;<input type="number" name="price1" id="price1" min="0" style="margin: 5px; min-width: 85px;" required></span>
                        <br>
                        <div style="margin: 0; padding: 0;">
                          <!-- <input type="checkbox" name="occSame1" value="occSame1" onclick="var input1 = document.getElementById('occid1'); if(this.checked){ input1.disabled = false; input1.focus();}else{input1.disabled=true;}"> --> Occupancy for this price
                          <input type="number" name="occ1" id="occid1" style="max-width: 38px;margin: 2px;padding: 2px;" min="1">
                        </div>
                       <!-- <br style="margin: 0; padding: 0;"> -->Special note for this price,<br>
                       <textarea rows="2" cols="50" name="priceOther1" style="width: 85%; margin: 0 5px ; padding: 5px; resize: vertical; border-radius: 5px;" ></textarea>
                       <br>Extra facilities for the price.
                       <br>
                       <div class="row">
                         <div class="col-md-6">
                           <input type="checkbox" name="extraFaci1[]" value="Breakfast">Breakfast<br>
                           <input type="checkbox" name="extraFaci1[]" value="Lunch">Lunch<br>
                           <input type="checkbox" name="extraFaci1[]" value="Dinner">Dinner<br>
                         </div>
                         <div class="col-md-6">                           
                           <input type="checkbox" name="extraFaci1[]" value="AC">A/C<br>
                           <input type="checkbox" name="extraFaci1[]" value="Hot water">Hot water<br>
                         </div>
                       </div>
                       
                     </li>
                     <!-- <li>
                        <input type="text" name="priceName2" id="priceName2" min="0" style="margin: 10px 10px; min-width: 85px; max-width: 150px; padding: 5px 10px;" value="Bed and Breakfast"> Rs. <input type="number" name="price2" id="price2"  min="0" style="margin: 0 10px; min-width: 85px; "> 
                       <textarea rows="2" cols="50" name="other_amenities" style="width: 85%; margin: 5px ; margin-left: 20px; padding: 10px; resize: vertical; border-radius: 5px;" ></textarea>
                     </li> -->
                   </ul>
                     <button type="button" onclick="addAnotherPrice()">Add Another Price.</button>
                     <button type="button" onclick="removeLastPrice()" style="margin-bottom: 10px;" >Remove Last Price</button><br>
                     Click this (<img src="../../assets/images/arrow-up.png" height="15px" width="15px"/>) button to add more Price Categories (BB, HB, FB) for this room.
                   <script type="text/javascript">
                    $('#occupancyid').change(function () {
                      $('#occid1').val($('#occupancyid').val());
                    }); 
                    $('#max_ppl').change(function () {
                      $('#occid1').attr('max',$('#max_ppl').val());
                    });
                     var x = 2;
                     function addAnotherPrice() {
                       // alert('ayeee');
                       var appendLi = '<li><hr class="hr_style2"><select name="priceName'+x+'" id="priceName'+x+'" style="margin: 5px 5px; min-width: 85px;max-width: 140px; padding: 5px 5px;">'+
                         '<option value="Room Only">Room Only</option>'+
                         '<option value="Bed and Breakfast">Bed and Breakfast</option>'+
                         '<option value="Half-board">Half-board</option>'+
                         '<option value="Full-board">Full-board</option>'+
                         '<option value="with AC">with AC</option>'+
                         '<option value="without AC">without AC</option>'+
                         '<option value="AC room with breakfast">AC room with breakfast</option>'+
                         '<option value="non AC room with breakfast">non AC room with breakfast</option>'+
                         '<option value="with extra bed">with an Extra Bed</option>'+
                         '<option value="Other">Other</option>'+
                       '</select>'+
                       '<input type="text" name="priceNameCustm'+x+'" id="priceNameCustm'+x+'" placeholder="please specify." style=" visibility: hidden; max-width: 150px;margin: 5px 5px;padding: 5px 5px;" >'+
                        'Rs.&nbsp;<input type="number" name="price'+x+'" id="price'+x+'" min="0" style="margin: 5px; min-width: 85px;" required>'+
                       '<br><div style="margin: 0; padding: 0;">Occupancy for this price'+
                          '<input type="number" name="occ'+x+'" id="occid'+x+'" style="max-width: 38px;margin: 2px;padding: 2px;" min="1">'+
                        '</div>Special note for this price,<br>'+
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
                       $('#occid'+y).val($('#occupancyid').val());
                       // $('#occupancyid').change(function () {
                       //   $('#occid'+y).val($('#occupancyid').val());
                       // }); 
                       $('#occid'+y).attr('max',$('#max_ppl').val());
                       $('#max_ppl').change(function () {
                         $('#occid'+y).attr('max',$('#max_ppl').val());
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
                      else{alert('You have to add atleast one price for a room.')}
                       
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
                   <hr class="hr_style">
                  <p class="para1">Bathroom
                  <select id="bathroom_type" name="bathroom_type" style="margin: 5px 10px; padding: 6px; max-width:200px;width: 70%;" required>
                  <!-- <option disabled>Please Select</option> -->
                  <option  value="attached">Attached</option>
                  <option value="private">Private</option>
                  <option value="shared">Shared</option>
                </select></p>
                   <br>
                   <p class="para1">Add Photos</p>
                   <p><b>Main Image of the Room</b><!-- <span style="font-size: 0.8em;">  (Add Multiple images)</span> -->
                   <input type="file"  id="roomImg" required></p>
                   <p><b>Other Images of the Room</b><span style="font-size: 0.8em;">  (Add Multiple images)</span>
                   <input type="file"  id="bathroomImg" multiple required></p>
                   <br><br>
                   <label for="amenties"> Facilities special for the room</label>
                   <br>

                   <div class="row" style="margin: 5px 0px ;">
                     <div class="col-md-6">
                     <input type="checkbox" name='room_faci[]' value="Wifi" > Wifi @ the room <br>
                     <input type="checkbox" name='room_faci[]' value="AC" >  Air Conditioned room <br>
                     <input type="checkbox" name='room_faci[]' value="Heating Fireplace" > Heating/ Fireplace in the room
                     </div>
                     <div class="col-md-6">
                     <input type="checkbox" name='room_faci[]' value="Fan" > Fans in the room<br>
                     <input type="checkbox" name='room_faci[]' value="Mosquito Nets" > Mosquito Nets <br>
                     <input type="checkbox" name='room_faci[]' value="Hot Water" > Hot Water
                     </div>
                   </div>
                   <br>
                   <div class="row" style="margin: 5px 0;">
                     <div class="col-md-6">
                         <input type="checkbox" name='room_faci[]' value="Refrigerator" > Refrigerator in the room<br>
                         <input type="checkbox" name='room_faci[]' value="Iron" > Iron in the room<br>
                         <input type="checkbox" name='room_faci[]' value="Flat Screen TV" > Flat Screen TV in the room<br>
                     </div>
                     <div class="col-md-6">
                         <input type="checkbox" name='room_faci[]' value="TV" > TV in the room<br>
                         <input type="checkbox" name='room_faci[]' value="Satellite Channels" > Satellite Channels <br>
                         <input type="checkbox" name='room_faci[]' value="Hair Dryer" > Hair Dryer in the room<br>
                     </div>
                   </div>
                   <br>
                   <div class="row" style="margin: 5px 0px;">
                     <div class="col-md-6">
                       <input type="checkbox" name='room_faci[]' value="ClothRack" > Cloth Rack in the room<br>
                       <input type="checkbox" name='room_faci[]' value="Wardrobe Closet" > Wardrobe / Closet in the room<br>
                       <input type="checkbox" name='room_faci[]' value="Safe" > Safe in the room<br>
                     </div>
                     <div class="col-md-6">
                       Seating facilities to, <br>
                       <input type="radio" name="Seating" checked="checked" value="Chairs To Every One"> every one 
                       <input type="radio" name="Seating" value="Chairs Only To Fewer"> fewer 
                       <input type="radio" name="Seating" value="No chairs"> No chairs<br>
                       <input type="checkbox" name='room_faci[]' value="Desk" > Desk in the room
                     </div>
                   </div>
                   <br>

                   <div style="margin: 5px 0px 0px;">
                     

                       <input type="checkbox" name='room_faci[]' value="Carpeted" > Carpeted Room<br>
                       <input type="checkbox" name='room_faci[]' value=" Tiled or Marble Floor" >  Tiled/Marble Room Floor<br>

                       <br>
                       <input type="checkbox" name='room_faci[]' value="Balcony Directly Accessible from the room" > Balcony Directly Accessible from the room<br>
                       <input type="checkbox" name='room_faci[]' value="Terrace Directly Accessible from the room" > Terrace Directly Accessible from the room<br>

                       <br>
                       <p>Room has a
                       <select id="view" name="view" style="width: 70% ; max-width: 400px; margin: 0 20px;" required>
                        <!-- <option selected disabled>Please Select</option> -->
                        <option value="no_view" selected>No view</option>
                        <option value="City">City View</option>
                        <option value="Garden">Garden View</option>
                        <option value="Lake">Lake View</option>
                        <option value="Mountain">Mountain View</option>
                        <option value="River">River View</option>
                        <option value="Sea">Sea View</option>
                        <option value="Pool">Pool View</option>
                        <option value="Landmark_View">Landmark View</option>
                        
                      </select></p>
                       <input type="checkbox" name='room_faci[]' value="Wheelchair Accessible" >  Room is Wheelchair accessible<br>
                       <input type="checkbox" name='room_faci[]' value="Elevator Accessible" > Room is Elevator accessible<br>
                       <br>
                       <p> Other things to note on amenities
                        <textarea rows="4" cols="50" name="other_amenities" style="width: 85%; margin: 5px ; margin-left: 20px; padding: 10px; resize: vertical; border-radius: 5px;" ></textarea>
                        <!-- <input type="text" name="other_amenties" style="margin-bottom: 0;"> -->
                        </p><br>
                   
                   </div>
                   <hr class="hr_style">
                   <p class="para1"><b>Details of uploaded photos,</b></p>

                   <table class="table" id="imgTable1">
                    <thead>
                      <th>Time</th>
                      <th>Initial Size</th>
                      <th>Image</th>
                      <th>Status</th>
                      <!-- <th>Uploaded Size</th> -->
                    </thead>
                    <tbody id="tbodyID1">
                      <!-- <tr>
                        <td>-NA-</td>
                        <td>-NA-</td>
                        <td>-NA-</td>
                        <td>Not Any Photos Uploaded Yet</td>
                      </tr> -->
                      
                    </tbody>
                    <tbody id="tbodyID2">
                      <!-- <tr>
                        <td>-NA-</td>
                        <td>-NA-</td>
                        <td>-NA-</td>
                        <td>Not Any Photos Uploaded Yet</td>
                      </tr> -->
                      
                    </tbody>
                   </table>
                   <hr class="hr_style">
                   <label >How many this kind of rooms? </label> 
                   <input type="number" name="each_room_count" value="1"  min="1" style="margin: 5px 10px; min-width: 50px; padding: 2px 10px; ">
                  <!-- <input type="text" id="fname" name="firstname"> -->
                  <!-- <label for="property_type">The place is a</label>
                  
                  <label for="floor_level">Floor Level</label>
                  <br>
                  <input type="Number" id="floor_level" name="floor level" min="-1" max="50">  -->
                  <br>
                  <br>
                  <!-- <input type="submit" value="Add Another Room Type" name="another_room" > -->
                  <!-- <button onclick="goBack()" class="back_button">Back</button> -->
                  <input type="submit" value="Add This Room" name="finishButton">
                </form>
              </div>

              <div style="text-align: right;"><form action="<?php echo site_url(); ?>/EditDetailsController/lastRoomRmv"><input type="submit" value="Delete Last Room" name="deleteButton" style="background-color: #F83650;"></form></div>
                    </div>
                  </div>


                   </div>
                 </div>
                 <hr style="border: 1px solid rgba(0, 0, 0, 0.3);">
               </div>
               <!-- /.box-body -->
             </div>
             <!-- /.box -->
           </div>
           <!-- /.col -->

         </div>

       </section>
</div>
<?php 
       include 'footer.html';
    ?>
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
      <!-- AdminLTE App -->
      <script src="../../assets/dist/js/app.min.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="../../assets/dist/js/demo.js"></script>
      <script src="../../assets/dist/js/validator.min.js"></script>

      <!-- photo upload -->
      <script src="../../assets/js/photoResize/canvas-to-blob.min.js"></script>
      <script src="../../assets/js/photoResize/resize.js"></script>
      <script src="../../assets/js/photoResize/app2.js"></script>
      <!-- /.content -->

    </body>
    </html>

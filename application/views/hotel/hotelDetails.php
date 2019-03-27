
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

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style type="text/css">
  .para1 {color: #101010; font-family: cursive; padding: 2px;} 
  .with_indent {
      text-indent: 5em;
  }
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
    <div class="content-wrapper" style="background-color:rgb(235, 235, 235);">
      <!-- Content Header (Page header) -->
      <section class="content-header" style="padding-right:5%;padding-left:5%;padding-top:2%;">
          <h1 style="font-weight:bold;font-size: 2em;">
          Edit Property Details
         <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Edit Details</li>
        </ol>
      </section>


      <!-- Main content -->
      <section class="content" style="padding:10px 5% 0 5%">
          <div id="about_web" class="box box-solid" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-top: 3px solid #d2d6de;">

            <div class="box-header with-border" style="text-align: center;">
                <h3 class="box-title" style="text-align: center;color:dimgrey;padding-top:6px;font-weight: bold;font-size: 18px;">Hotel Description</h3>
            </div> 
            <div class="small-box" id="hotelDes" style="box-shadow:none;">
              <div style="background: white;" >
                  <div class="box box-info" style="border-color:gray;border:1px solid #f4f4f4;">
                    <div class="box-body pad" style="color: black;padding-left: 3%;padding-right: 3%;padding-top: 5px;padding-bottom: 2px;">
                      <form class="is-readonly" method="POST" action="<?php echo site_url(); ?>/EditDetailsController/updateHotelDescription" id="form2" role="form" data-toggle="validator">
                       <textarea id="editor1" name="editor1" style="padding:2px;width: 100%;margin-bottom: 1%;" rows="5" disabled><?php echo $data2->listing_desc ?></textarea>


                          <button type="button" id="save_btn" class="btn btn-default btn-lg btn-save js-save" style='float:right;background-color: #8892d6;color:white;font-size: inherit;' disabled>Save</button>
                        <button type="button" id="edit_btn" class="btn btn-default btn-lg btn-edit js-edit" style='float:right;background-color: #8892d6;color:white;font-size: inherit;'>Edit</button>
                     </form>
                    </div>
                  </div>
                </div>
              </div>





            <div class="box-header with-border" style="text-align: center;">
              <h3 class="box-title" style="text-align: center;color:dimgrey;padding-top:6px;font-weight: bold;font-size: 18px;">Hotel Rules and Other Details</h3>
            </div> 
            <div class="small-box" id="hotelDes" style="box-shadow:none;">
              <div style="background: white;" >
                  <div class="box box-info" style="border-color:gray;border:1px solid #f4f4f4;">
                    <div class="box-body pad" style="color: black;padding-left: 3%;padding-right: 3%;padding-top: 5px;padding-bottom: 2px;">
                      <form class="is-readonly" method="POST" action="<?php echo site_url(); ?>/EditDetailsController/updateHotelRules" id="formrules" role="form" data-toggle="validator">
                       <textarea id="editorrules" name="editorrules" style="padding:2px;width: 100%;margin-bottom: 1%;" rows="5" disabled><?php echo $data3->other_policies; ?></textarea>


                          <button type="button" id="save_btnrules" class="btn btn-default btn-lg btn-save js-save" style='float:right;background-color: #8892d6;color:white;font-size: inherit;' disabled>Save</button>
                        <button type="button" id="edit_btnrules" class="btn btn-default btn-lg btn-edit js-edit" style='float:right;background-color: #8892d6;color:white;font-size: inherit;'>Edit</button>
                     </form>
                    </div>
                  </div>
                </div>
              </div>







          </div>
      </section>
        <section class="content" style="padding:0 5%">
            <div id="about_web" class="box box-solid" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-top: 3px solid #d2d6de;">

                <div class="box-header with-border" style="text-align: center;">
                    <h3 class="box-title" style="text-align: center;color:dimgrey;padding-top:6px;font-weight: bold;font-size: 18px;">Basic Facilities</h3>
                </div> <div class="small-box" id="hotelDes" style="box-shadow:none;">
                    <div style="background: white;" >
                        <div class="box box-info" style="border-color:gray;border:1px solid #f4f4f4;">
                            <div class="box-body pad" style="color: black;padding-left: 3%;padding-right: 3%;">
                                <form class="is-readonly" method="POST" action="<?php echo site_url(); ?>/EditDetailsController/updateFacilities" id="form1" role="form" data-toggle="validator">
                                    <div class="row" style="color:black;font-size: 13px;" >
                                        <br>
                                        <div class ='col-md-12'>
                                            <?php
                                            $s = 0;
                                            $y = -1;
                                            $facilities = array('Wifi', 'TV', 'Room Service', 'Laundry Service','Parking','Beverages','Lobby','Restaurant');
                                            $data = json_decode($data2->main_facilities, TRUE);
                                            while ($y < sizeof($facilities) - 1) {
                                                $y++;
                                                if (in_array($facilities[$y], $data)) {
                                                    ?>
                                                    <div class ="col-md-3" style="text-align: left;color: dimgrey;">
                                                        <label>
                                                            <input type="checkbox" style="margin-right:5px;" name="check_list[]" checked disabled="true"   value="<?php echo $facilities[$y] ?>"><?php echo $facilities[$y] ?>
                                                        </label>
                                                    </div>
                                                <?php } else { ?>
                                                    <div class ="col-md-3" style="text-align: left;">
                                                        <label style="color: dimgrey;">
                                                            <input type="checkbox" style="margin-right: 5px;" name="check_list[]" disabled="true"   value="<?php echo $facilities[$y] ?>"><?php echo $facilities[$y] ?>
                                                        </label>
                                                    </div>
                                                <?php } if (($y + 1) % 4 == 0) { ?>
                                                    <br><br>
                                                <?php } ?>
                                            <?php }
                                            ?>
                                        </div>
                                    </div>
                                    <div class ="row" style="margin-top:2px;">
                                        <button type="button" id="save_btn_fac" class="btn btn-default btn-lg btn-save js-save" style='float:right;background-color: #8892d6;color:white;font-size: inherit;' disabled>Save</button>
                                        <button type="button" id="edit_btn_fac" class="btn btn-default btn-lg btn-edit js-edit" style='float:right;background-color: #8892d6;color:white;font-size: inherit;'>Edit</button>
                                    </div>
                                </form>
                                <!-- <hr style="border: 1px solid rgba(0, 0, 0, 0.3);"> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="content" style="padding:0 5% 15px 5%;">
            <div id="about_web" class="box box-solid" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-top: 3px solid #d2d6de;">

                <div class="box-header with-border" style="text-align: center;">
                    <h3 class="box-title" style="text-align: center;color:dimgrey;padding-top:6px;font-weight: bold;font-size: 18px;">Hotel Rules</h3>
                </div> <div class="small-box" id="hotelDes" style="box-shadow:none;">
              <div style="background: white;" >
                    <div class="box box-info" style="border-color:gray;border:1px solid #f4f4f4;">
                      <div class="box-body pad" style="color: black;padding-left: 3%;padding-right: 3%;padding-top: 5px;padding-bottom: 2px;">
                          <!-- <label for="basic">Basic Rules</label> -->
                          <p class="para1"> Advance percentage required, <span style="background-color: #eee; padding: 1px 4px; border-radius: 3px;"><?php echo $data2->advance ?> </span> %<!-- <input type="number" value="0" min="0" max="100" name="bookforvalue"  style="margin-top: 0; min-width: 65px;" required> % --></p>
                          <!-- <br> -->
                          <p class="para1 with_indent"> Check-in Time <span style="background-color: #eee; padding: 1px 4px; border-radius: 3px;"><?php echo $data2->check_in ?> </span> <!-- <input type="Time" value="13:00" name="hotel_check_in"  style="margin-top: 0; min-width: 85px;" required> --></p>
                           <p class="para1 with_indent"> Check-out Time <span style="background-color: #eee; padding: 1px 4px; border-radius: 3px;"><?php echo $data2->check_out ?> </span><!-- <input type="Time" value="11:00" name="hotel_check_out"  style="margin-top: 0; min-width: 85px; " required> --></p>
                           <label for="stay_within">Stay should be within, </label>
                           <br>
                           <p class="with_indent">
                           <!-- <input type="Number" id="min_stay" value="1" name="min_stay" min="1" max="60" required> --><span style="background-color: #eee; padding: 1px 4px; border-radius: 3px;"><?php echo $data3->min_stay ?> </span> (min) days to 
                           <!-- <input type="Number" placeholder="-" id="max_stay" name="max_stay" min="1" > --><span style="background-color: #eee; padding: 1px 4px; border-radius: 3px;"><?php if ($data3->max_stay != null) {
                             echo $data3->max_stay;
                           } else{echo "<span style='font-size: .8em;'>not specified</span>";} ?> </span> (max) days .</p> 
                          
                        <!-- max should be greater than min -->
                           <label for="stay_within">Guests should book atleast, <span style="background-color: #eee; padding: 1px 4px; border-radius: 3px;"><?php echo $data3->confirm_before ?> </span></label> 
                           <!-- <input type="Number" id="book_min_dates_before" value="0" name="book_min_dates_before" min="0" max="30" style="margin-top: 0;" required> --> days before.
                           <br>


                          <label for="Cancellation">Cancellation Policy </label><span style="font-size: .8em;"><?php if ($data2->advance == 0) { echo "not vital since the commission rate is zero";} ?></span>
                          <?php
                            $cancellationpolicy = json_decode($data3->cancelation_policy);
                          ?>
                          <p class="para1 with_indent"> Full pre payement if cancels before <span style="background-color: #eee; padding: 1px 4px; border-radius: 3px;"><?php echo $cancellationpolicy->full_before ?> </span>
                          <!-- <input type="number" id="full_before" name="full_before" value="20" min="2" style="margin: 0; " required> --> days. </p>
                          <p class="para1 with_indent" > <span style="background-color: #eee; padding: 1px 4px; border-radius: 3px;"><?php echo $cancellationpolicy->return_percentage ?> </span>
                          <!-- <input type="number" name="return_percentage" value="50" min="0" max="100" style="margin: 0; " required> --> % pay back if cancels before <span style="background-color: #eee; padding: 1px 4px; border-radius: 3px;"><?php echo $cancellationpolicy->days_before ?> </span>
                          <!-- <input type="number" id="days_before" name="days_before" value="7" min="1"  max="100" style="margin: 0; " required> --> days. </p>
                          <p class="para1 with_indent"> No refund if cancels after <span style="background-color: #eee; padding: 1px 4px; border-radius: 3px;"><?php echo $cancellationpolicy->zero_after ?> </span>
                           days. </p>
                          <!-- <input type='hidden' id="zero_after" name="zero_after" min="0" style="margin: 0; " required> -->
                          <!-- <hr style="border: 1px solid rgba(0, 0, 0, 0.3);margin-top: 20px;"> -->
                          <br>
                          <p style="font-size: .8em;"> Please note that these sensitive data are not subject to direct alter from the control panel. Please contact the system administraters to alter these values.<br>Thank you for your understanding.</p>
                      </div>

              </div>
            </div>
          </div>
            </div>
        </section>

     <!-- /.content -->

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
     <!-- FastClick -->
     <script src="../../assets/plugins/fastclick/fastclick.js"></script>
     <script src="../../assets/dist/js/validator.min.js"></script>

     <script>
     function setIgnore(){
       $.ajax({
        type : 'POST',
        data : 'roomid='+val+'&roomquantitybed='+quantity1+'&roomquantitybreakfast='+quantity2,
        url : "<?php echo base_url(); ?>index.php/HotelController/setRooms",
        dataType: 'json',
        success :   function(data){}
      });
     }
     $(document).ready(function(){

      $('#edit_btn_fac').on('click', function(){

        var $form = $('#form1');
        $form.removeClass('is-readonly').addClass('is-editing');
        var isReadonly  = $form.hasClass('is-readonly');
        $form.find('input,textarea').prop('disabled', isReadonly);
        document.getElementById("save_btn_fac").disabled = false;
        document.getElementById("edit_btn_fac").disabled = true;
      });
      $('#save_btn_fac').on('click', function(){
        var $form = $('#form1');
        $form.removeClass('is-editing').addClass('is-readonly');
        document.getElementById("edit_btn_fac").disabled = false;
        document.getElementById("save_btn_fac").disabled = true;
        $('#form1').submit();
      });

      $('#form1').validator().on('submit', function (e) {
        if (e.isDefaultPrevented()) {
              alert("Please fix all the errors before submitting.");// handle the invalid form...
            } else {

            }
          });

      $('#edit_btn').on('click', function(){
        var $form = $('#form2');
        $form.removeClass('is-readonly').addClass('is-editing');
        var isReadonly  = $form.hasClass('is-readonly');
        $form.find('input,textarea').prop('disabled', isReadonly);
        document.getElementById("save_btn").disabled = false;
        document.getElementById("edit_btn").disabled = true;
      });
      $('#save_btn').on('click', function(){
        var $form = $('#form2');
        $form.removeClass('is-editing').addClass('is-readonly');
        document.getElementById("edit_btn").disabled = false;
        document.getElementById("save_btn").disabled = true;
        $('#form2').submit();
      });



      $('#form2').validator().on('submit', function (e) {
        if (e.isDefaultPrevented()) {
              alert("Please fix all the errors before submitting.");// handle the invalid form...
            } else {

            }
          });




      $('#edit_btnrules').on('click', function(){

        var $form = $('#formrules');
        $form.removeClass('is-readonly').addClass('is-editing');
        var isReadonly  = $form.hasClass('is-readonly');
        $form.find('input,textarea').prop('disabled', isReadonly);
        document.getElementById("save_btnrules").disabled = false;
        document.getElementById("edit_btnrules").disabled = true;
      });
      $('#save_btnrules').on('click', function(){
        var $form = $('#formrules');
        $form.removeClass('is-editing').addClass('is-readonly');
        document.getElementById("edit_btnrules").disabled = false;
        document.getElementById("save_btnrules").disabled = true;
        $('#formrules').submit();
      });



      $('#formrules').validator().on('submit', function (e) {
        if (e.isDefaultPrevented()) {
              alert("Please fix all the errors before submitting.");// handle the invalid form...
            } else {

            }
          });






    });
$('#form2').validator().on('submit', function (e) {
  if (e.isDefaultPrevented()) {
              alert("Please fix all the errors before submitting.");// handle the invalid form...
            } else {

            }
          });


$('#formrules').validator().on('submit', function (e) {
  if (e.isDefaultPrevented()) {
              alert("Please fix all the errors before submitting.");// handle the invalid form...
            } else {

            }
          });


</script>


</body>
</html>

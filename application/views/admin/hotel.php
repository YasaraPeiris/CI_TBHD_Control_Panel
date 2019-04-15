<!-- <?php session_start();
 include '../checkSession.php';
?> -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CP:: <?php echo $commondetails->listing_name; ?></title>
  <link rel="shortcut icon" href="../../assets/images/favicon.ico" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../assets/dist/css/AdminLTE.min.css">
   <link href="../../assets/dist/css/bootstrap-dialog.css" rel='stylesheet' type='text/css'/>
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
  <!-- bootstrap wysihtml5 - text editor -->
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
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <style type="text/css">
        table.dataTable tr.odd {
            font-size: 13px;
            font-weight: 200;
            background-color: #f8f8f8;
            color: #404040;
            font-family: -apple-system, "Helvetica Neue", Helvetica, "Segoe UI", Arial, sans-serif;
        }
        /* tr. not tr: */
        table.dataTable tr.even {
            font-size: 13px;
            font-weight: 200;
            background-color: white;
            color: #404040;
            font-family: -apple-system, "Helvetica Neue", Helvetica, "Segoe UI", Arial, sans-serif;
        }
        table.dataTable > tbody > tr.child span.dtr-title {
            text-align: left;

            float: left;
        }
        table.dataTable > tbody > tr.child span.dtr-data {
            text-align: right;

            float: right;
        }

        table.dataTable > tbody > tr.child ul.dtr-details {
            width: 50%;
        }

        table.dataTable > tbody > tr.child ul.dtr-details li {
            border-bottom: none !important;
            margin-bottom: 10px;
        }
    </style>

        <!--datatables-->

        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.2/css/fixedHeader.bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css">

        <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/fixedheader/3.1.2/js/dataTables.fixedHeader.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.1.1/js/responsive.bootstrap.min.js"></script>
        <script src='../../assets/js/viewdetect.js'></script>
        <script>

            $(document).ready(function () {

                var table = $('#example').DataTable({
                    responsive: {
                        details: {
                            type: 'column',
                            target: 'tr'
                        }
                    }, columnDefs: [{
                        className: 'control',
                        orderable: false,
                        targets: 0
                    }],
                    "aLengthMenu": [[25, 50, 75, -1], [25, 50, 75, "All"]],
                    "pageLength":-1
                });

            });
        </script>
        <style>
            @media screen and (max-width: 767px) {
                div.dataTables_wrapper div.dataTables_length, div.dataTables_wrapper div.dataTables_filter, div.dataTables_wrapper div.dataTables_info, div.dataTables_wrapper div.dataTables_paginate {
                    /* text-align: center; */
                    display: none;
                }
            }


        </style>

        <style type="text/css">

            .selecthotel{
                max-width: 80px;
            }
            select option:disabled {
                color: #000;
                background-color: #ccc;
                text-decoration: line-through; 
            }
            table.dataTable tr.odd {
                font-size: 13px;
                font-weight: 200;
                background-color: #f8f8f8;
                color: #404040;
                font-family: -apple-system, "Helvetica Neue", Helvetica, "Segoe UI", Arial, sans-serif;
            }

            /* tr. not tr: */
            table.dataTable tr.even {
                font-size: 13px;
                font-weight: 200;
                background-color: white;
                color: #404040;
                font-family: -apple-system, "Helvetica Neue", Helvetica, "Segoe UI", Arial, sans-serif;
            }

            table.dataTable > tbody > tr.child span.dtr-title {
                text-align: left;
                float: left;
                padding-left: 5px;
            }

            table.dataTable > tbody > tr.child ul.dtr-details li {
                border-bottom: none !important;
                margin-bottom: 5px !important;
                padding-left: 4%;
                width: 100%;
            }

            table.dataTable > tbody > tr.child ul.dtr-details {
                width: 100%;
            }
        </style>
        <script type="text/javascript">
            function editbtn(){
                document.getElementById("insights").disabled = false;
                document.getElementById("save_btn").disabled = false;
                document.getElementById("edit_btn").disabled = true;
            }
            function savebtn(){
                document.getElementById("insights").disabled = true;
                document.getElementById("save_btn").disabled = true;
                document.getElementById("edit_btn").disabled = false;
                // $('#form2').submit();
                var insightData = document.getElementById("insights").value;
                $.ajax({
                    type: 'POST',
                    data: {'insightData': insightData ,'listingId': '<?php echo $commondetails->listing_id; ?>'},
                    url: "<?php echo base_url(); ?>index.php/HotelDeatailController/changeHotelInfo",
                    success: function (data) {
                        alert("succesfully updated.");
                    }
                });
            }
        </script>
        <script type="text/javascript">

            var roomPrices = <?php echo json_encode($roomPricesFull); ?>;
            var roomAvl = <?php echo json_encode($roomAvailability); ?>;
            var roomCount = <?php echo json_encode($roomCount); ?>; 
            var countarry = <?php echo json_encode($countarry); ?>; 
            var roomNames = <?php echo json_encode($roomNames); ?>;
            var diffDays = 1; // just to initialize
            var serviceFee = <?php echo ($commondetails->commision) / 100; ?>;
            var advancePerc = <?php echo ($commondetails->advance) / 100; ?>; 
            var promoCodeVal = <?php echo (isset($_SESSION['promorate']))?$_SESSION['promorate']:0; ?>; 
            var promoCodeMax = <?php echo (isset($_SESSION['promomax']))?$_SESSION['promomax']:1000; ?>; 
            if (serviceFee == 0) {
                document.getElementById("servicefeevaldiv").style.display = "none";
                document.getElementById("servicefeetextdiv").style.display = "none";
            }


            // initialize on change functions and etc...
            function update_with_date(roomAvl) {
                for (var i = 1; i < (roomPrices.length) + 1; i++) {
                    for (var j = 0; j < roomPrices[i - 1].length; j++) {
                        // initially set room count
                        $('#roomCountOf' + i + '_' + j + '').val(roomCount[i - 1][j]).change();
                        // if room availability is one and if it is selected by min price(by Default), reduce the availablity of other prices for the same room, initialy.
                        if (roomCount[i - 1][j] > 0) {
                            for (var k = 0; k < roomPrices[i - 1].length; k++) {
                                if (j != k) {
                                    // alert(i+ "----"+ k);
                                    $('input[id=roomCountOf' + i + '_' + k + ']').attr('data-max', (roomAvl[i - 1] - roomCount[i - 1][j]));
                                    $('#roomCountOf' + i + '_' + k + ' option[value='+roomAvl[i - 1]+']').prop("disabled", true);
                                }
                            }
                        }
                        // change price as room count changes
                        $('#roomCountOf' + i + '_' + j + '').change({dataItr: i, dataItr2: j}, function (event) {
                            // console.log(event.data.dataItr2);
                            roomCount[event.data.dataItr - 1][event.data.dataItr2] = $('#roomCountOf' + event.data.dataItr + '_' + event.data.dataItr2 + '').val();
                            var price = CalcPrice(roomPrices, roomCount);
                            var afterpromo = 1 - <?php echo $promotions->promo_amount; ?>;
                            // $('#pricePerNightH3').html('<span style="font-size: 0.7em;">Rs. </span>' + (price*afterpromo).toFixed(2));
                            // $('#noOfDays').text(diffDays);
                            $('#subTotalDiv').text((price * diffDays).toFixed(2));
                            if (afterpromo < 1) {
                                $('#promoPriceDiv').text((price * afterpromo * diffDays).toFixed(2));
                            }
                            promoCodeDeduction = Math.min(price * afterpromo * diffDays* promoCodeVal,promoCodeMax);
                            if (promoCodeVal > 0) {
                                $('#promoCodePriceDiv').text('('+(promoCodeDeduction).toFixed(2)+')');
                            }
                            $('#serviceFeeDiv').text((price * afterpromo * diffDays * serviceFee).toFixed(2));
                            $('#totalDiv').text((price * afterpromo * diffDays * (1 + serviceFee)- promoCodeDeduction).toFixed(2));
                            $('#payOnlyDiv').text("(LKR "+((price * afterpromo * diffDays * (1 + serviceFee )-promoCodeDeduction)* advancePerc).toFixed(2)+")");
                            var SelRooms = '<ul>';
                            for (var i = 0; i < roomPrices.length; i++) {
                                for (var j = 0; j < roomPrices[i].length; j++) {
                                    if (roomCount[i][j] > 0) {
                                        SelRooms += '<li style="width:88%;">' + roomNames[i] + '<span style="float:right;"> (' + roomPrices[i][j] + ' x ' + roomCount[i][j] + ')</span></li>';
                                    }
                                }
                            }
                            SelRooms += '</ul>';
                            $('#SlctdRooms').html(SelRooms);
                            $('#submit_id').html("Book Now");
                            $('#perNightspan').html("per Night");
                            $('#priceTab').show();

                            //to make the room count less than desired
                            // calculate roomOccupancy & now remaining
                            roomOccupancy = 0;
                            for (var j = 0; j < roomCount[event.data.dataItr - 1].length; j++) {
                                roomOccupancy += parseInt(roomCount[event.data.dataItr - 1][j]);
                            }
                            var remnngRooms = roomAvl[event.data.dataItr - 1] - roomOccupancy;
                            for (var j = 0; j < roomPrices[event.data.dataItr - 1].length; j++) {                    // update max
                                var nowMax = parseInt($('#roomCountOf' + event.data.dataItr + '_' + j + '').val()) + remnngRooms;
                                for (var jj = roomAvl[event.data.dataItr - 1]; jj >= 0; jj--) {
                                    if (jj > nowMax) {
                                        $('#roomCountOf' + event.data.dataItr + '_' + j + ' option[value='+jj+']').prop("disabled", true);
                                    }
                                    else{
                                        $('#roomCountOf' + event.data.dataItr + '_' + j + ' option[value='+jj+']').prop("disabled", false);
                                    }
                                }
                            }
                        });
                    }

                }
            }

            // caling the function
            // update_with_date(roomAvl);


            // SelRooms += '</ul>';
            // $('#SlctdRooms').html(SelRooms);
            function changePriceBoxVal(start, end) { // further, this will fill the price box initially
                diffDays = end.diff(start, 'days');
                var price = CalcPrice(roomPrices, roomCount);
                var afterpromo = 1 - <?php echo $promotions->promo_amount; ?>;
                var minRoomVal = <?php echo (isset($minRoomVal))?$minRoomVal:$roomPricesFull[0][0]; ?>;
                // var price2 = price * afterpromo;
                // $('#pricePerNightH3').html('<span style="font-size: 0.7em;">Rooms From Rs. </span>' + (minRoomVal*afterpromo).toFixed(2));
                $('#noOfDays').text(diffDays);
                $('#subTotalDiv').text((price * diffDays).toFixed(2));
                if (afterpromo < 1) {
                    $('#promoPriceDiv').text((price * afterpromo * diffDays).toFixed(2));
                }
                $('#serviceFeeDiv').text((price * diffDays * afterpromo * serviceFee).toFixed(2));
                $('#totalDiv').text((price * diffDays * afterpromo * (1 + serviceFee- promoCodeVal)).toFixed(2));
                // $('#payOnlyDiv').text("(LKR "+(price * afterpromo * diffDays * (1 + serviceFee)* advancePerc).toFixed(2)+")");
                // alert(diffDays);

            }

            function CalcPrice(roomPrices, roomCount) {
                var price = 0;
                var str_html = '';  //<input type="hidden" id="guest_count" name="guest_count" value="' + document.getElementById('guest_count_form').value + '">
                for (var i = 0; i < roomCount.length; i++) {
                    for (var j = 0; j < roomCount[i].length; j++) {
                        // console.log(i+' - '+j)
                        price += roomCount[i][j] * roomPrices[i][j];

                    }
                    var r = i + 1;
                    str_html += '<input type="hidden" id="roomcount' + i + '" name="roomcount[' + i + ']" value="' + roomCount[i] + '">';

                }
                // str_html+='<input type="hidden" id="roomCount" name="roomCount" value="'+roomCount+'">';
                // console.log(roomCount);
                //str_html+='    <button type="submit" name="submit" class="btn hvr-overline-from-left" style="float:right;background: linear-gradient(to bottom, #f5d11d 0%,#f3d10e 1%,#efcf1c 2%,#fccd0d 4%,#f7ca0d 5%,#f9cb1e 6%,#f7cb10 7%,#f8cc14 8%,#f0c40c 54%,#edc50c 55%,#e9c108 71%,#ecc008 78%,#e6be06 91%,#e9bd06 93%,#e8bc06 100%);background-image: linear-gradient(rgb(245, 209, 29) 0%, rgb(243, 209, 14) 1%, rgb(239, 207, 28) 2%, rgb(252, 205, 13) 4%, rgb(247, 202, 13) 5%, rgb(249, 203, 30) 6%, rgb(247, 203, 16) 7%, rgb(248, 204, 20) 8%, rgb(240, 196, 12) 54%, rgb(237, 197, 12) 55%, rgb(233, 193, 8) 71%, rgb(236, 192, 8) 78%, rgb(230, 190, 6) 91%, rgb(233, 189, 6) 93%, rgb(232, 188, 6) 100%);border-radius: 0;border: none;" >Book Now</button>';
                $('#room_val_div').html(str_html);
                return price;
            }

            // $('input[name=price1]').change(function(){
            //     console.log ('roomPrices');
            // })
            // console.log (roomPrices);
            // console.log($('input[name=price2]:checked').val());
            function setLength(x, val) {

                var id = "showmore" + x;

                if (document.getElementById(id).innerText == "Show More...") {
                    for (var i = 4; i < val; i++) {
                        var id2 = i + 'r' + x;
                        document.getElementById(id2).style.display = "block";
                    }
                    document.getElementById(id).innerText = "Show Less...";
                } else {
                    for (var i = 4; i < val; i++) {
                        var id2 = i + 'r' + x;
                        document.getElementById(id2).style.display = "none";
                    }
                    document.getElementById(id).innerText = "Show More...";
                }
            }
        </script>
</head>
<body class="hold-transition skin-blue sidebar-mini" onload="">
    <?php ?>
<div class="wrapper">
    <header class="main-header">
    <!-- Logo -->
    <!-- Header Navbar: style can be found in header.less -->
    <?php include 'adminTopMost.php';?>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
<?php include 'adminSidebar.php';?>
   <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
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
          <?php
          if (!empty($_SESSION['alertHtlDStatus'])) {
              echo "<div class='alert alert-danger' style='margin-bottom: 0;'><strong>Danger! </strong> ".$_SESSION['alertHtlDStatus']."</div>";
              unset($_SESSION['alertHtlDStatus']);
          }
          if (!empty($_SESSION['error_hotel'])) {
              echo "<div class='alert alert-info' style='margin-bottom: 0;'><strong>Alert! </strong> ".$_SESSION['error_hotel']."</div>";
              unset($_SESSION['error_hotel']);
          }
          ?>
          <div class="box box-info">
              <div class="box-header with-border" style='background-color: #000044;'>
                  <h3 class="box-title"style='color:white;font-size: 1.5em;' ><?php echo $commondetails->listing_name."- ".$commondetails->display_loc." (Listing id #".$commondetails->listing_id.")"; ?></h3>
                  <div class="box-tools pull-right">
                      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
              </div>
              <div class="box-body" style="padding: 0;">
                <section style="padding:0 40px;">
                  
                  <div class="tm-form-inner">
                      <br>
                      <div id="reportrange" class="selectbox "
                           style="border: 1px solid #ddd; border-radius: 4px; padding:5px; background: #fff; cursor: pointer; margin: 0  0 4px 0;overflow: hidden; white-space: nowrap;">
                          <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
                          <input type="hidden" name="selectdaterange" id="selectdaterange"
                                 value="<?php echo $_SESSION['checkin'] ?> - <?php echo $_SESSION['checkout'] ?>"
                                 disabled/>
                          <span></span>
                          <!-- <b class="caret" style="border: 1px solid #ddd; "></b> -->
                      </div>
                      <script type="text/javascript">
                          $(function () {

                              // var start = moment().add(1, 'days');
                              // var end = moment().add(2, 'days');
                              var start = moment('<?php echo $_SESSION['checkin'] ?>', 'MM/DD/YYYY');
                              var end = moment('<?php echo $_SESSION['checkout'] ?>', 'MM/DD/YYYY');
                              var initialtime = true;
                              var availableflag = <?php echo $available_flag; ?>;
                              var prev_indate = start.format('MM%2FDD%2FYYYY');
                              var prev_outdate = end.format('MM%2FDD%2FYYYY');
                              var min_date = moment().add(1, 'days');

                              function cb(start, end) {
                                  $('#selectdaterange').val(start.format('MM/DD/YYYY') + ' - ' + end.format('MM/DD/YYYY'));
                                  $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                                  var startNew = start.format('MM/DD/YYYY');
                                  var endNew = end.format('MM/DD/YYYY');
                                  // GetDateRange(start, end);
                                  changeSession(startNew, endNew);
                                  if (availableflag) {
                                      changePriceBoxVal(start, end);
                                      update_with_date(roomAvl);                                                    
                                  }
                                  else{
                                      if (initialtime) {
                                          BootstrapDialog.alert('Sorry, there are no Rooms Available for this date. Please select another date.');
                                      }
                                  }
                                  // end.diff(start, 'days');
                                  // $('#noOfDays').text(end.diff(start, 'days'));
                                  // alert (start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                                  // alert (roomAvl);
                                  // roomAvl = [3,3] ;
                                  if (!initialtime) {
                                      // alert("date change succesfull");
                                      var url = window.location.href.replace(prev_outdate, end.format('MM%2FDD%2FYYYY'));
                                      url = url.replace(prev_indate, start.format('MM%2FDD%2FYYYY'));
                                      setTimeout(function() {
                                          window.location.href = url;
                                      }, 1500);
                                      
                                  }
                                  initialtime = false;
                                  prev_indate = start.format('MM%2FDD%2FYYYY');
                                  prev_outdate = end.format('MM%2FDD%2FYYYY');

                              }

                              $('#reportrange').daterangepicker({
                                  "autoApply": true,
                                  "startDate": start,
                                  "endDate": end,
                                  "minDate": min_date,
                                  "opens": "center"
                              }, cb);
                              cb(start, end);

                              $('#guest_count_form').change(function () {
                                  $('#guest_count').val($(this).val());
                                  // alert($('#guest_count').val());
                              })

                          });

                          function changeSession(start, end) {
                              // alert("gfgf");
                              $.ajax({
                                  type: 'POST',
                                  data: 'checkin=' + start + '&checkout=' + end,
                                  url: "<?php echo base_url(); ?>index.php/DateController/setHotelPageDate",
                                  dataType: 'json',
                                  success: function (response) {
                                  }
                              });
                          }


                      </script>
                  </div>
                </section>
                <section>
                  <div class="container" style="padding: 0;">
                    <div class="col-md-12" style="width:100% !important;padding-left:0;padding-right:0;margin-top:10px;">
                        <div class="hidden-lg hidden-md hidden-sm"><br></div>
                        <!-- <h4 style="color:black;">All available rooms</h4> -->
                        <?php
                        if ($promotions->promo_amount != 0) { ?>
                          <h4 >
                            <span style="color: red;font-weight: bold;"><?php echo $promotions->promo_amount*100; ?>% OFF</span> <span style="font-size: 0.8em;">(*for the selected date)</span>
                          </h4> 
                        <?php }
                        else { echo "No Promotion For the selected date.<br><br>";}
                        echo "<b>Check-in Time: ".$commondetails->check_in;
                        echo "<br>Check-out Time: ".$commondetails->check_out."<br></b>";
                        if ($commondetails->advance == 100) {
                            echo "<p style='font-weight:bold;color:darkred;margin-bottom: 5px; '>Full payment needed.</p>";
                        } elseif ($commondetails->advance > 0) {
                            echo "<p style='font-weight:bold;color:orange;margin-bottom: 5px; '>Pay only " . $commondetails->advance . " %   to book now.</p>";
                        } else {
                            echo "<p style='font-weight:bold;color:green;margin-bottom: 5px;'>No payment needed today. Pay when you stay.</p>";
                        } 
                        echo "<p style='margin-bottom: 5px; '>";
                        if ($commondetails->commision > 0) {
                            echo "<span style='font-weight:bold;color:darkred;' >".$commondetails->commision."% Service Fee. </span>";
                        }
                        echo "(Commission ".$commondetails->commission_hotel."%)</p>";
                        ?>
                        <?php echo "<a href='https://inna.lk/index.php/HotelApartmentController/index?guestcount=2&destination=".$commondetails->destination_id."&listing_id=".$commondetails->listing_id."&listing_type=hotel' target='_blank'>https://inna.lk/index.php/HotelApartmentController/index?guestcount=2&destination=".$commondetails->destination_id."&listing_id=".$commondetails->listing_id."&listing_type=hotel</a>"; ?>
                        <br>
                        <br>
                        <table id="example" class="vistable table-striped table-bordered table-responsive" cellspacing="0"
                               width="100%">

                            <thead style="background:gainsboro;font-weight: bold;padding: 1%;">
                            <tr>
                                <th data-priority="1" style="min-width:10px;padding: 5px 15px 5px 5px;"
                                    data-orderable="false">No
                                </th>
                                <th data-priority="3" style="max-width: 100px;padding: 5px 15px 5px 5px;">Room Type</th>
                                <th data-priority="4" style="min-width: 100px;padding: 5px 15px 5px 5px;">Max</th>
                                <th data-priority="4" style="min-width: 100px;padding: 5px 15px 5px 5px;">Availability</th>
                                <th data-priority="2" style="min-width: 120px;padding: 5px 15px 5px 5px;"
                                    data-orderable="false">Select Rooms
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($roomtypes as $rooms) { ?>
                                <tr style="max-height: 10px;overflow-y: auto;">
                                    <td><?php echo $rooms->room_type_id ?></td>
                                    <td style="font-weight:bold;text-transform: capitalize;"><?php echo $rooms->room_name ?></td>
                                    <td><?php
                                        $price_detailArry = json_decode($rooms->price_details);
                                        if (!isset($price_detailArry->priceOccArry)) {  // if occupancy array not set just show general occupancy
                                            if ($rooms->no_of_people < 5) {
                                                for ($i = 0; $i < $rooms->no_of_people; $i++) {
                                                    if ($i == 0) {
                                                        ?>
                                                        <i class="material-icons" style="font-size: 22px;">person</i>
                                                    <?php } else { ?>
                                                        <i class="material-icons" style="font-size: 22px;margin-left: -10px;">person</i>
                                                    <?php }
                                                }
                                            } else { ?>
                                                <i class='material-icons'
                                                   style='font-size: 22px; margin: 0;padding: 0;'>person</i>x
                                                <?php echo $rooms->no_of_people;
                                            }
                                        }
                                        else{
                                            $prv_count = $rooms->no_of_people;
                                            $checksum = 0;
                                            for ($j = 0; $j < sizeof($price_detailArry->priceOccArry); $j++) {
                                                $no_of_people = $price_detailArry->priceOccArry[$j];
                                                if ($prv_count != $no_of_people) {
                                                    break;
                                                }
                                                $checksum += 1;
                                            }
                                            if ($checksum == sizeof($price_detailArry->priceOccArry) || $price_detailArry->priceOccArry[0] == "") {  // if all occupancy is same
                                                // echo "same";
                                                if ($rooms->no_of_people < 5) {
                                                    for ($i = 0; $i < $rooms->no_of_people; $i++) {
                                                        if ($i == 0) {
                                                            ?>
                                                            <i class="material-icons" style="font-size: 22px;">person</i>
                                                        <?php } else { ?>
                                                            <i class="material-icons" style="font-size: 22px;margin-left: -10px;">person</i>
                                                        <?php }
                                                    }
                                                } else { ?>
                                                    <i class='material-icons'
                                                       style='font-size: 22px; margin: 0;padding: 0;'>person</i>x
                                                    <?php echo $rooms->no_of_people;
                                                }
                                            }
                                            else{      // if atleast one occupancy is different
                                                for ($j = 0; $j < sizeof($price_detailArry->priceOccArry); $j++) {

                                                    $no_of_people = $price_detailArry->priceOccArry[$j];
                                                    echo '<div class="row" style="margin:0 10px 30px 0; font-weight:bold;">';
                                                    if ($no_of_people < 5) {
                                                        for ($i = 0; $i < $no_of_people; $i++) {
                                                            if ($i == 0) {
                                                                ?>
                                                                <i class="material-icons" style="font-size: 22px;">person</i>
                                                            <?php } else { ?>
                                                                <i class="material-icons" style="font-size: 22px;margin-left: -10px;">person</i>
                                                            <?php }
                                                        }
                                                    } else { ?>
                                                        <i class='material-icons'
                                                           style='font-size: 22px; margin: 0;padding: 0;'>person</i>x
                                                        <?php echo $no_of_people;
                                                    }
                                                    echo '</div>'; 
                                                }
                                            }
                                        }
                                        ?>
                                    </td>
                                    <td> <b><?php print_r($roomAvailability[($rooms->room_type_id) - 1]); ?> rooms</b></td>
                                    <td name="priceColumn">
                                        <?php 
                                        $price_detailArry = json_decode($rooms->price_details); 
                                        for ($i = 0; $i < sizeof($price_detailArry->priceNameArry); $i++) {
                                            if ($promotions->promo_amount > 0) {
                                                echo '<div class="row" style="width:100% !important;font-weight:bold;"><div class="col-md-5 col-sm-5 col-xs-12" >' . $price_detailArry->priceNameArry[$i] . '</div><div class="hidden-xs hidden-sm col-md-1 col-sm-1">-</div><div class="col-sm-6 col-md-5 col-xs-12"> <span style="text-decoration: line-through;margin-right: 20px;text-decoration-color: red;"> Rs.' . number_format($price_detailArry->priceArry[$i], 2, '.', ',') . '</span><span style="color: darkgreen;font-weight: bold;">Rs.' . number_format(($price_detailArry->priceArry[$i] * (1 - $promotions->promo_amount)), 2, '.', ',') . '</span></div><div class="col-sm-12 col-xs-12" style="margin-top:3px;"> ';
                                            } else {
                                                echo '<div class="row" style="width:100% !important;font-weight:bold;"><div class="col-md-5 col-sm-5 col-xs-12"  style="">' . $price_detailArry->priceNameArry[$i] . '</div><div class="hidden-xs hidden-sm col-md-1 col-sm-1">-</div><div class="col-sm-6 col-md-5 col-xs-12"> Rs. ' . number_format($price_detailArry->priceArry[$i] , 2, '.', ','). '</div><div class="col-sm-12 col-xs-12" style="margin-top:3px;"> ';
                                            }

                                            if ($roomAvailability[($rooms->room_type_id) - 1] > 0) {
                                                echo '<div  style="width:100% !important;">';
                                                echo '<select class="selecthotel" id="roomCountOf' . $rooms->room_type_id . '_' . $i . '">';
                                                for ($num=0; $num < $roomAvailability[($rooms->room_type_id) - 1] +1; $num++) { 
                                                    echo '<option value="'.$num.'">'.$num.'</option>';
                                                }
                                                echo '</select>';

                                                echo '</div><div class="col-sm-12 col-xs-12" style="margin-top:3px;"></div> ';

                                            } else {
                                                echo "<span style='color:coral;'>Sorry, All rooms are booked.</span>";
                                            }
                                            echo '</div></div>';
                                        }
                                        ?>
                                    </td>
                                </tr>
                            <?php } ?>


                            </tbody>

                        </table>
                    </div>
                  </div>
                </section>
                <section id="priceTab" style="display: none;">
                  <div class="col-md-12" id="tabs" style="padding: 20px;"> 
                      <div class="col-md-6" id="tabs" style="padding: 20px; background-color: #eee;"> 
                        <div id="tabcontent" style="width:auto;border-radius: 0;">
                          <div class="row" style="width:100% !important;font-family:sans-serif;padding:0;">
                              <div class="col-md-8 col-xs-8" style="margin-bottom: 2%;">
                                  <h5>No of Days</h5>
                                  <h5>Selected Room Types</h5>
                              </div>
                              <div class="col-md-4 col-xs-4" style="padding:0;margin-bottom: 2%;">
                                  <h5 id="noOfDays" style="text-align:right;"><!-- <?php echo $range ?> --></h5>
                              </div>
                              <div class="col-md-12 col-xs-12" style="margin: 0 30px; padding: 0;">

                                  <div id="SlctdRooms"><ul><li style="width:88%;">-Select a Room Type Below-<span style="float:right;">-Qty-</span></li></ul></div>
                              </div>
                              <div class="col-md-12 col-xs-12">
                                  <hr style="margin-top:3px;margin-bottom:5px;border-color:#555;">
                              </div>
                              <div id="bookings">
                                  <div class="col-md-8 col-xs-8">
                                      <h5>Sub Total</h5>
                                  </div>
                                  <div class="col-md-4 col-xs-4" style="padding:0;">
                                      <h5 style="text-align:right;" id="subTotalDiv">
                                          <!-- <?php //echo  number_format($tot, 2, '.', ''); ?> --></h5>
                                  </div>
                                  <?php if ($promotions->promo_amount > 0) { ?>
                                      <div class="col-md-8 col-xs-8">
                                          <h5>After Promotion Price</h5>
                                      </div>
                                      <div class="col-md-4 col-xs-4" style="padding:0;">
                                          <h5 style="text-align:right; border-top:  1px solid; font-size: 1.2em; font-weight: bold; "
                                              id="promoPriceDiv">
                                              <!-- <?php //echo  number_format($tot, 2, '.', ''); ?> --></h5>
                                      </div>
                                  <?php } ?>
                                  <?php if (isset($_SESSION['promorate'])) { 
                                      if ($_SESSION['promorate'] > 0) { ?>
                                      <div class="col-md-8 col-xs-8">
                                          <h5>Deduction on Promocode</h5>
                                      </div>
                                      <div class="col-md-4 col-xs-4" style="padding:0;">
                                          <h5 style="text-align:right;" id="promoCodePriceDiv">-</h5>
                                      </div>
                                  <?php }}else{ $_SESSION['promorate'] = 0;} ?>





                                  <div class="col-md-8 col-xs-8" id="servicefeetextdiv">
                                      <h5>Service Fee</h5>
                                  </div>
                                  <div class="col-md-4 col-xs-4" style="padding:0;" id="servicefeevaldiv">
                                      <h5 style="text-align:right;"
                                          id="serviceFeeDiv">
                                          <!-- <?php //echo  number_format($service, 2, '.', ''); ?> --></h5>
                                  </div>
                                  <div class="col-md-8 col-xs-8">
                                      <h5 style="font-weight: bold;font-size: medium;padding-top:10px;">Total</h5>
                                  </div>
                                  <div class="col-md-4 col-xs-4" style="padding:0;">
                                      <h5 style="padding-bottom:6px;padding-top:10px;text-align:right;border-bottom:  4px double ;border-top:  1px solid ;font-weight: bold;font-size: medium;"
                                          id="totalDiv">
                                          <!-- //<?php //echo  number_format($tot, 2, '.', ''); ?> --></h5>
                                  </div>
                                  <div class="col-md-12 col-xs-12">
                                      <h5 style="font-weight: bold; color: #999;">
                                          <?php if ($commondetails->advance == 0) { ?>
                                              *no prepayment required,<br><span style="color: white;">*</span>pay the full amount to the Hotel.
                                          <?php } elseif ($commondetails->advance < 100) { ?>
                                              *pay only <?php echo $commondetails->advance; ?>% <span id="payOnlyDiv"></span> to book now.
                                          <?php } ?>
                                      </h5>
                                  </div>
                                  

                              </div>
                          </div>
                        </div>
                      </div>
                  </div>
                </section>
                <section style="color: white;">.</section>
                <section style="padding: 10px;">
                  <!-- Faq Item -->
                  <div id="amenityid" class="panel panel-default panel-faq"
                       style="background: ghostwhite;">
                      <div class="panel-heading" style="background: ghostwhite;">
                          <a data-toggle="collapse" data-parent="#accordion" href="#faq-sub-2">
                              <h4 class="panel-title" style="color:black;">
                                  Amenities/ Facilities
                                  <span class="pull-right">
                                              <i class="glyphicon glyphicon-plus"></i>
                                          </span>
                              </h4>
                          </a>
                      </div>
                      <div id="faq-sub-2" class="panel-collapse collapse">
                          <div class="panel-body">

                              <?php $facilities_hotel = json_decode($moredetails->facilities);
                              for ($x = 0; $x < sizeof($facilities_hotel); $x++) {
                                  ?>
                                  <ul class="col-md-4 col-sm-4 col-xs-4"
                                      style="list-style-type: square; text-transform: capitalize;">
                                      <li>
                                          <?php $img_url = str_replace(' ', '', $facilities_hotel[$x]); ?>
                                          <?php echo "<img style='margin-right:5px;' src='../../assets/images/img_icons/" . $img_url . ".png' height='16' width='16' alt=''>" . $facilities_hotel[$x];
                                          ?>
                                      </li>
                                  </ul>
                              <?php }
                              ?>
                          </div>
                      </div>
                  </div>
                  <!-- End FAQ Item -->
                  <!-- Faq Item -->
                  <div class="panel panel-default panel-faq" style="background: ghostwhite;">
                      <div class="panel-heading" style="background: ghostwhite;">
                          <a data-toggle="collapse" data-parent="#accordion" href="#faq-sub-3">
                              <h4 class="panel-title" style="color:black;">
                                  Description <span class="pull-right">
                                          <i class="glyphicon glyphicon-plus"></i>
                                      </span>
                              </h4>
                          </a>
                      </div>
                      <div id="faq-sub-3" class="panel-collapse collapse">
                          <div class="panel-body">
                              <?php echo $commondetails->listing_desc; ?>
                          </div>
                      </div>
                  </div>
                  <!-- End FAQ Item -->
                  <div class="panel panel-default panel-faq" style="background: ghostwhite;">
                      <div class="panel-heading" style="background:ghostwhite;">
                          <a data-toggle="collapse" data-parent="#accordion" href="#faq-sub-7">
                              <h4 class="panel-title" style="color:black;">
                                  Location / Map
                                  <span class="pull-right">
                                      <i class="glyphicon glyphicon-plus"></i>
                                  </span>
                              </h4>
                          </a>
                      </div>
                      <div id="faq-sub-7" class="panel-collapse collapse">
                          <div class="panel-body">
                              <div class="map" style="margin-top: 0px;">
                                  <h5 style="font-weight:bold;">Hotel Address</h5>
                                  <?php echo $commondetails->address_line_1; ?>
                                  <br>
                                  <?php echo $commondetails->address_line_2; ?>
                                  <br>
                                  <?php echo $commondetails->city; ?><br>
                                  <button id="mapBtn" style="margin: 10px 0;">Load Map</button>
                                  <br>
                                  <?php echo "<a href='https://maps.google.com/?q=".$commondetails->latitude.",".$commondetails->longitude."&ll=".$commondetails->latitude.",".$commondetails->longitude."&z=12' target='_blank'>https://maps.google.com/?q=".$commondetails->latitude.",".$commondetails->longitude."&ll=".$commondetails->latitude.",".$commondetails->longitude."&z=12</a>"; ?>
                                  <br><br>
                                  <?php echo 'Lonitude : ' . $commondetails->longitude;
                                  echo ' Latitude : ' . $commondetails->latitude; ?>

                                  <!-- <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7922.625388456117!2d79.908538633914!3d6.8530716618097545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwNTEnMTEuMSJOIDc5wrA1NCc0Ni41IkU!5e0!3m2!1sen!2slk!4v1463212794605"></iframe><br><small><a href="https://www.google.lk/maps/place/6%C2%B051'11.1%22N+79%C2%B054'46.5%22E/@<?php //echo $commondetails->longitude; ?>,<?php //echo $commondetails->latitude; ?>,16z/data=!4m5!3m4!1s0x0:0x0!8m2!3d6.853069!4d79.912916" ><b></b></a></small> -->
                                  <div id="MapDiv"></div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Faq Item -->
                  <div class="panel panel-default panel-faq" style="background: ghostwhite;">
                      <div class="panel-heading" style="background: ghostwhite;">
                          <a data-toggle="collapse" data-parent="#accordion" href="#faq-sub-4">
                              <h4 class="panel-title" style="color:black;">
                                  Hotel Rules / Policies
                                  <span class="pull-right">
                                      <i class="glyphicon glyphicon-plus"></i>
                                  </span>
                              </h4>
                          </a>
                      </div>
                      <div id="faq-sub-4" class="panel-collapse collapse">
                          <div class="panel-body">

                              <?php


                              $rules_hotel = json_decode($moredetails->rules);
                              for ($x = 0; $x < sizeof($rules_hotel); $x++) {
                                  ?>
                                  <ul class="col-md-12"
                                      style="list-style-type: square; text-transform: capitalize;">
                                      <li>
                                          <?php echo $rules_hotel[$x]; ?>
                                      </li>
                                  </ul>
                              <?php }
                              ?>

                              <?php
                              if ($moredetails->other_policies != null) {
                                  echo "<br>" . $moredetails->other_policies."<br>";
                              }

                              echo "<b>Check-in Time: ".$commondetails->check_in;
                              echo "<br>Check-out Time: ".$commondetails->check_out."<br></b>";
                              if ($commondetails->advance == 100) {
                                  echo "<p style='font-weight:bold;color:darkred;margin-bottom: 5px; '>Full payment needed.</p>";
                              } elseif ($commondetails->advance > 0) {
                                  echo "<p style='font-weight:bold;color:orange;margin-bottom: 5px; '>Pay only " . $commondetails->advance . " %   to book now.</p>";
                              } else {
                                  echo "<p style='font-weight:bold;color:green;margin-bottom: 5px;'>No payment needed today. Pay when you stay.</p>";
                              }

                              ?>
                          </div>

                      </div>
                  </div>
                  <!-- End FAQ Item -->
                  <!-- Faq Item -->
                  
                  <div class="panel panel-default panel-faq" style="background: ghostwhite;">
                      <div class="panel-heading" style="background: ghostwhite;">
                          <a data-toggle="collapse" data-parent="#accordion" href="#faq-sub-8">
                              <h4 class="panel-title" style="color:black;">
                                  Our Comments/ Insights <?php if ($commondetails->other_insights == "") { echo "<span style='font-weight:bold; color:darkred;'>(-still no details-)</span>"; }?>
                                  <span class="pull-right">
                                      <i class="glyphicon glyphicon-plus"></i>
                                  </span>
                              </h4>
                          </a>
                      </div>
                      <div id="faq-sub-8" class="panel-collapse collapse">
                          <div class="panel-body">



                             <form class="is-readonly" method="POST" id="form2" role="form" data-toggle="validator">


                                <textarea rows='<?php echo substr_count($commondetails->other_insights,"\n")+1; ?>' cols="50" name="insights" id="insights" style="width: 85%; margin: 5px ; margin-left: 20px; padding: 10px; resize: vertical; border-radius: 5px;" required disabled><?php echo $commondetails->other_insights; ?></textarea>



                                <button type="button" onclick="savebtn()" id="save_btn" class="btn btn-default btn-lg btn-save js-save" style='float:right;background-color: #8892d6;color:white;font-size: inherit;' disabled>Save</button>
                                <button type="button" onclick="editbtn()" id="edit_btn" class="btn btn-default btn-lg btn-edit js-edit" style='float:right;background-color: #8892d6;color:white;font-size: inherit;'>Edit</button>
                             </form>




                          </div>

                      </div>
                  </div>
                  <!-- End FAQ Item -->
                  <!-- Faq Item -->
                  <div class="panel panel-default panel-faq" style="background: ghostwhite;">
                      <div class="panel-heading" style="background: ghostwhite;">
                          <a data-toggle="collapse" data-parent="#accordion" href="#faq-sub-5">
                              <h4 class="panel-title" style="color:black;">
                                  Cancellation Policies <span class="pull-right">
                                  <i class="glyphicon glyphicon-plus"></i>
                              </span>
                              </h4>
                          </a>
                      </div>
                      <div id="faq-sub-5" class="panel-collapse collapse">
                          <div class="panel-body">
                              <b style="margin-bottom:6px;">Cancellation and prepayment policies</b>
                              <?php if ($commondetails->advance != 0) { ?>
                                  <ul>
                                      <?php foreach (json_decode($moredetails->cancelation_policy) as $key => $value) {
                                          if ($key == "full_before") {
                                              ?>
                                              <li>Full amount will be refunded if you make the cancelation
                                                  before <?php echo $value ?> days.
                                              </li>
                                          <?php }
                                          if ($key == "return_percentage") {

                                              ?>
                                              <li><?php echo $value; ?> % of the amount would be refunded if you make the cancelation before

                                          <?php }
                                          if ($key == "days_before") {
                                              echo $value; ?> days. </li>
                                              <li style="color:red;">No paybacks
                                                  after <?php echo $value-1; ?> days.
                                              </li>

                                          <?php }
                                      } ?>
                                  </ul>
                              <?php } else {
                                  echo "<p>&nbsp;You can cancel the booking at any time.</p>";
                              } ?>
                              <!-- <?php //print_r( $moredetails->cancelation_policy); ?><br> -->
                          </div>
                      </div>

                  </div>
                  <!-- End FAQ Item -->
                  <!-- Faq Item -->
                   <div class="panel panel-default panel-faq" style="background: ghostwhite;">
                      <div class="panel-heading" style="background: ghostwhite;">
                          <a data-toggle="collapse" data-parent="#accordion" href="#faq-sub-6">
                              <h4 class="panel-title" style="color:black;">
                                  Hotel Contact Details
                                  <span class="pull-right">
                                          <i class="glyphicon glyphicon-plus"></i>
                                      </span>
                              </h4>
                          </a>
                      </div>
                      <div id="faq-sub-6" class="panel-collapse collapse">
                          <div class="panel-body">

                              <ul class="col-md-12"
                                  style="list-style-type: square; text-transform: capitalize;">
                                  <li>
                                      <h5> <?php echo $commondetails->listing_name; ?></h5>
                                      <h5> <?php echo (isset($moredetails->hotel_chain_name))?$moredetails->hotel_chain_name:"-No Hotel Chain Name-"; ?></h5>

                                  </li>
                                  <li>
                                      <h5 style="font-weight:bold;">Email Addrsess</h5>
                                      <?php echo $commondetails->email; ?>

                                  </li>
                                  <li>
                                      <h5 style="font-weight:bold;">Tel</h5>
                                      <?php echo $moredetails->hotel_main_contact_number; ?>
                                      /
                                      <?php echo $moredetails->hotel_mobile_number; ?>
                                      /
                                      <?php echo $moredetails->hotel_land_line; ?>


                                  </li>
                                  <li>
                                      <h5 style="font-weight:bold;">Website</h5>
                                      <?php echo (isset($moredetails->website))?$moredetails->website:"-No Website-"; ?>


                                  </li>
                              </ul>
                              <br>
                          </div>
                      </div>
                  </div>

                  <!-- End FAQ Item -->
                </section>
              </div>
          </div>
       </section>
  </div>
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
<script src="../../assets/plugins/jQuery/jQuery-2.2.0.min.js"></script>
        
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
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="../../assets/plugins/daterangepicker/daterangepicker.js"></script> -->
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
        <script src="vassets/dist/js/jquery.confirm.js"></script>
        <script>
            function setData(){
                 $.ajax({
            url: 'mcash.php',
            type: 'post',
            data: $('#mcashrequest').serialize(),
            success: function (data) {
                alert(data);
                result = data;
            }
          });
        }
            </script>
 <!--datatables-->
    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.1.1/js/responsive.bootstrap.min.js"></script>
    <script type="text/javascript">

        $('#submit_id').click(function (e) {
            var flag = 0;
            var totalcount = 0;
            for (i = 0; i < roomCount.length; ++i) {
                for (j = 0; j < roomCount[i].length; ++j) {
                    if (roomCount[i][j] != 0) {
                        flag = 1;
                        totalcount += roomCount[i][j]* countarry[i];
                        // break;
                    }
                }
            }
            var e = document.getElementById("guest_count_form");
            var value = e.options[e.selectedIndex].value;
            if (flag) {
                if (value > totalcount) {
                    alert ('You have choosen guest count to be '+value+'. \nHowever, according to your selected rooms, maximum number of guest count allowed is '+totalcount+' \nSo that guest count will be set to '+totalcount+'.');
                    document.getElementById("guest_count").value = totalcount;
                }
                HTMLFormElement.prototype.submit.call($('#room_val')[0]);

            } else {
                BootstrapDialog.alert('Atleast Select One Room.');
            }

        });

        function checklogin(e) {
            firebase.auth().onAuthStateChanged(function (user) {
                if (user.emailVerified) {
                    setSessionVariables(user.uid, user.displayName, user.email);
                    var checkLogin = checkAgain();
                    if (checkLogin == "true") {
                        e.preventDefault();
                        BootstrapDialog.configDefaultOptions({
                            cssClass: 'header_classes'
                        });
                        BootstrapDialog.show({
                            title: '<div style="font-size:1.2em;"><img class="icon icons8-Key-Exchange-Filled" width="60" height="60" src="data:image/png;base64,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">  Booking Confirmation</div>',
                            message: '<div style="font-size:1.1em;">Are you sure you want to make this booking?</div>',
                            buttons: [{
                                label: '<i class="fa fa-ban" aria-hidden="true"></i>   No',
                                cssClass: 'btn_css hvr-shutter-in-horizontal_modal',
                                action: function (dialog) {
                                    dialog.close();
                                }
                            }, {
                                label: '<i class="fa fa-check-square-o" aria-hidden="true"></i>  Yes',
                                cssClass: 'btn_css hvr-shutter-in-horizontal_modal',
                                action: function (dialog) {
                                    //    document.forms["#room_val"].submit();
                                    HTMLFormElement.prototype.submit.call($('#room_val')[0]);
                                }
                            }
                            ]
                        });

                    }
                    else {
                        e.preventDefault();
                        register();
                    }
                }
                else {
                    showAlert(user.displayName, user.email);
                    e.preventDefault();
                }
            });
        }

        $('#mapBtn').click(function () {
            $('#MapDiv').html('<div id="googleMap" style="width:100%;height:400px;"></div>');
            myMap();
            // alert('done');
        });
    </script>

    <script>
        function myMap() {
            var bounds = new google.maps.LatLngBounds();
            var latitude = '<?php echo $commondetails->latitude; ?>';
            var longitude = '<?php echo $commondetails->longitude; ?>';
            var mapProp = {
                center: new google.maps.LatLng(latitude, longitude),
                zoom: 14,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
            var position = new google.maps.LatLng(latitude, longitude);
            bounds.extend(position);
            marker = new google.maps.Marker({
                position: position,
                map: map,
                title: "markers"
            });
            // map.fitBounds(bounds);
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlFwHhg15iNpuqL5psZs8TVXMbtrwRUJo"></script>
</body>
</html>
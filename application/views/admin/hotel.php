<!-- <?php session_start();
 include '../checkSession.php';
?> -->
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
                  <h3 class="box-title"style='color:white;font-size: 1.5em;' ><?php echo $commondetails->listing_name."- ".$commondetails->display_loc; ?></h3>
                  <div class="box-tools pull-right">
                      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
              </div>
              <div class="box-body" style="padding: 0;">
                <section>
                  <div class="container" style="padding: 0;">
                    <div class="col-md-12" style="padding-left:0;padding-right:0;" id="check">
                      <!-- <div class="col-md-8" style="margin-bottom: 20px;">
                        <div class="visible-lg visible-md">
                          <h2 id="pageheading" style="text-transform: capitalize;color:black;"><?php echo $commondetails->listing_name; ?></h2>
                        </div>
                      </div> -->

                      <div class="col-md-12" style="width:100% !important;padding:0;">

                          <div class="col-md-12" style="width:100% !important;padding-left:0;padding-right:0;margin-top:10px;">
                              <div class="hidden-lg hidden-md hidden-sm"><br></div>
                              <!-- <h4 style="color:black;">All available rooms</h4> -->
                              <?php
                              echo "<b>Check-in Time: ".$commondetails->check_in;
                              echo "<br>Check-out Time: ".$commondetails->check_out."<br></b>";
                              if ($commondetails->advance == 100) {
                                  echo "<p style='font-weight:bold;color:darkred;margin-bottom: 5px; '>Full payment needed.</p>";
                              } elseif ($commondetails->advance > 0) {
                                  echo "<p style='font-weight:bold;color:orange;margin-bottom: 5px; '>Pay only " . $commondetails->advance . " %   to book now.</p>";
                              } else {
                                  echo "<p style='font-weight:bold;color:green;margin-bottom: 5px;'>No payment needed today. Pay when you stay.</p>";
                              } 
                              if ($commondetails->commision > 0) {
                                  echo "<p style='font-weight:bold;color:darkred;margin-bottom: 5px; '>".$commondetails->commision."% Service Fee Included.</p>";
                              }
                              ?>
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



                    </div>
                  </div>
                </section>
                <section style="padding: 10px; margin-top: 20px;">
                  <!-- Faq Item -->
                  <div id="amenityid" class="panel panel-default panel-faq"
                       style="background: ghostwhite;">
                      <div class="panel-heading" style="background: ghostwhite;">
                          <a data-toggle="collapse" data-parent="#accordion" href="#faq-sub-2">
                              <h4 class="panel-title" style="color:black;">
                                  Amenities
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
                                  Location
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
                                  Hotel Rules
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
    //        if(currentUid != null){
    //            checklogin(e);
    //        }
    //        else{
    //
    //            BootstrapDialog.show({
    //                title: '<div style="font-size:1.2em;"><img class="icon icons8-Mandatory" width="100" height="100" src="data:image/png;base64,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"> Sign-In Required. </div>',
    //                message: '<div style="font-size:1.1em;">Please sign in to continue </div>',
    //                buttons: [{
    //                    label: 'Cancel',
    //                    cssClass: 'btn_css hvr-shutter-in-horizontal_modal',
    //                    action: function(dialog) {
    //                        dialog.close();
    //                    }},{
    //                    label: 'Ok',
    //                    cssClass: 'btn_css hvr-shutter-in-horizontal_modal',
    //                    action: function(dialog) {
    //                        window.location.href = "<?php //echo base_url(); ?>///index.php/Welcome/signin";
    //                    }}
    //                ]
    //            });
    //
    //            e.preventDefault();
    //
    //        }
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
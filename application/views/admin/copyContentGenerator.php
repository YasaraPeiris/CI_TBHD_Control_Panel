<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Content Generator</title>
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

  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
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
        Content Generator 
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Content Generator</li>
      </ol>
    </section>
    <!-- Main content -->
      <section class="content">
          <form name="myForm" action="<?php echo site_url(); ?>/RedirectPageController/saveContent" onsubmit="return validateForm()"  method="post">
            <input type="hidden" name="roomValueCount" id="roomValueCount" value="1">
            Customer ID: <input type="Number" name="cid" min="0" placeholder="Customer Incoming ID" required><br>
            Hotel Name: <input type="text" name="hotelname" value="<?php echo $mbdata->hotel_name ?>" placeholder="Okrin Hotel - Katharagama" required><br>
            Customer Name: <input type="text" name="name" value="<?php echo $mbdata->cname ?>" required><br>
            Customer Email: <input type="email" name="email" value="<?php echo $mbdata->cemail ?>" required><br>
            Customer NIC: <input type="text" name="nic" value="<?php echo $mbdata->cnic ?>" required><br>
            Customer Contact Number: <input type="text" value="<?php echo $mbdata->cmobile ?>" name="contact" required><br><br>
            check in Date: <input type="Date" name="checkin" value="<?php echo $mbdata->checkin ?>" required>
            check in Time: <input type="Time" name="checkinT" value="<?php echo $mbdata->checkintime ?>" required><br>
            Check out Date: <input type="Date" name="checkout" value="<?php echo $mbdata->checkout ?>" required>
            Check out TIme: <input type="Time" name="checkoutT" value="<?php echo $mbdata->checkouttime ?>" required><br>
            Number of Days: <input type="Number" min="0" name="dayCount" required><br><br>
            <ul id="roomtype_ul">
              <li>
                Room Name: <input type="text" name="item_name1"  placeholder="Double Room" value="<?php echo $mbsubdata[0]->room_name ?>" required><br>
                Room Rate: <input type="Number" step="0.01" name="rate1" placeholder="1200.00" value="<?php echo $mbsubdata[0]->room_rate ?>" required><br>
                Quantity: <input type="Number" name="quantity1" placeholder="1" value="<?php echo $mbsubdata[0]->qty ?>" required><br>
                Price Type: <input type="text" name="item_type1" placeholder="Half Board" value="<?php echo $mbsubdata[0]->price_type ?>" required><br><br>
              </li>
            </ul>
            <button type="button" onclick="addAnotherPrice()">Add Another Room Type.</button>
            <button type="button" onclick="removeLastPrice()">Remove Last Room Type</button><br><br>
            Service Fee: <input type="Number" min="0" step="0.01" max="100" name="servicefee" value="<?php echo $mbdata->service_fee ?>" required>%<br>
            Commission: <input type="Number" min="0" step="0.01" max="100" name="commission" value="<?php echo $mbdata->commission ?>" required>%<br>
            Paid Amount: <input type="Number" min="0" step="0.01" name="paid" value="<?php echo $mbdata->paid ?>" ><br>
            Pay Only: <input type="Number" min="0" step="0.01" name="payonly" value="<?php echo $mbdata->payonly ?>" >%<br>
            Total Amount: <input type="Number" min="0" step="0.01" name="total" value="<?php echo $mbdata->total ?>" ><br>
            Promo Amount: <input type="Number" min="0" max="100"  name="promo" value="0" value="<?php echo $mbdata->promo_amount ?>" required>%<br>
            Special Note:<br> <textarea rows="2" cols="20"  placeholder="Any Special Notes on this booking?" name="extranote" style="width: 85%; margin: 5px ; margin-left: 20px; padding: 10px; resize: vertical; border-radius: 5px;"></textarea><br><br>
            <input type="submit" value="Submit">
          </form>
       </section>
  </div>
</div>
<div id="confirmation-msg" style="display:none">
        Update Record?
        <button type="submit" id="yesButton">Yes</button>
        <button type="button" onClick="$('#confirmation-msg').hide()">No</button>
    </div>
<script type="text/javascript">
  var x = 2;
  function addAnotherPrice() {
    // alert('ayeee');
    var appendLi = '<li>'+
                'Room Name: <input type="text" name="item_name'+x+'" required><br>'+
                'Room Rate: <input type="Number" step="0.01" name="rate'+x+'" required><br>'+
                'Quantity: <input type="Number" name="quantity'+x+'" required><br>'+
                'Price Type: <input type="text" name="item_type'+x+'" required><br>'+
               '<br></li>';
  // alert(x);
  var y =x;
  $('#roomtype_ul').append(appendLi);
  // alert(x);
  $('#roomValueCount').val(x);
  // alert( $('#roomValueCount').val());
    x = x +1;
  // alert(x);
  }
  function removeLastPrice() {
   if (x>2) {
     $('#roomtype_ul li:last-child').remove();
     x = x -1;
     $('#roomValueCount').val(x-1);
     // alert( $('#roomValueCount').val());
   }
   else{alert('You have to add atleast one room type.')}
    
    // $event.preventDefault();
    // return false;
  }
</script>
<script type="text/javascript">
  function validateForm() { 
    var rcount = document.forms["myForm"]["roomValueCount"].value;
    var i;
    var val = 0;
    var namerate = "";
    var qtyname = "";
    for (i = 1; i <= rcount; i++) { 
        val += document.forms["myForm"]["rate"+i].value * document.forms["myForm"]["quantity"+i].value;
        // alert (val);
    }
    var subtotal = val*document.forms["myForm"]["dayCount"].value*(1+ document.forms["myForm"]["servicefee"].value/100)*(1-document.forms["myForm"]["promo"].value/100);
    var total = document.forms["myForm"]["total"].value;
    if (total != subtotal) {
        alert('The Total prices are not matching. \nTotal Sum of Room Prices is : '+subtotal+'\nTotal Sum You entered is : '+total+' \nPlease refill the form.')
        return confirm('Do you really want to submit the form?');
    }
}
</script>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<!-- <script src="../../assets/plugins/jQuery/jQuery-2.2.0.min.js"></script> -->
<!-- jQuery UI 1.11.4 -->
<!-- <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script> -->
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
        <script src="assets/dist/js/jquery.confirm.js"></script>
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
</body>
</html>
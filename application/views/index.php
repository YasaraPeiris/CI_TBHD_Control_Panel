
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page " >
  <?php $errors = "";?>
<div class="login-box" style="background: #000044;border: solid;">
    <div class="login-logo" >
    <a href="" style="color:white;"><b>THE BEST</b>HOTEL DEAL</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg" id="message"><?php echo $errors ?></p>

    <form action="<?php echo base_url(); ?>LoginController/login" method="post">
      <div class="form-group has-feedback">
          <input type="text" style="cursor: pointer;" class="form-control" placeholder="UserName" name="username" onfocus="this.value = '';" onclick="setMess()" autocomplete="off">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
          <input type="password" style="cursor: pointer;" class="form-control" placeholder="Password" onfocus="this.value = '';" name="password" autocomplete="off">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" id="signin"  name="submit" class="btn btn-primary btn-block btn-flat" style="background-color: #000044;">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    
    <!-- /.social-auth-links -->

<!--    <a href="#">I forgot my password</a><br>-->
   
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<!-- jQuery 2.2.0 -->
<script src="assets/plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
  function setMess(){
     document.getElementById('message').innerHTML="Sign in to continue";
  }
//$(document).ready(function(){   


 //    $("#signin").click(function()
 //    {  
 //    var username = document.getElementById()     
 //     $.ajax({
 //         type: "POST",
 //         url: "<?php echo base_url(); ?>index.php/LoginController/hello", 
 //         data: 'checkin='+start+'&checkout='+end,
 //         success: 
 //              function(data){
 //                alert(data);  //as a debugging message.
 //              }
 //          });// you have missed this bracket
 //     return false;
 // });
 //});
</script>
<?php ?>
</body>
</html>

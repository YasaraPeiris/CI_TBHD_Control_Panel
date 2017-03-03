<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | Registration Page</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../bootstrap/css/bootstrapValidator.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css">
        <link href="../../dist/css/bootstrap-dialog.css" rel='stylesheet' type='text/css'/>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition register-page">

        <div class="register-box">
            <div class="register-logo">
                <a href="../../index2.html"><b>THE BEST</b>HOTEL DEAL</a>
            </div>

            <div class="register-box-body">
                <p class="login-box-msg">Register a new membership</p>


                <form  method="post" id="register">
                    <label for="roomtypemodal">Username</label>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Username" id="user" name="user">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="roomtypemodal">Destination</label>
                        <select id="country" name="destination" style="cursor: pointer;width:100%;" onchange="loadprice()" autocomplete="off"   class="form-control">
                            <option value="null"></option>
                            <option value="Colombo">Colombo</option>
                            <option value="Anuradhapura">Anuradhapura</option>
                            <option value="Galle">Galle</option> 
                            <option value="Katharagama">Katharagama</option>        
                            <option value="Kandy">Kandy</option>

                        </select>
<!--<input type="text" class="form-control" placeholder="Hotel name">-->
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="hotelmodal">Hotel Name </label>
                        <select id="hotelmodal" name="hotelmodal" class="form-control" required="" style="width: 100%;" >
                            <option value="null" selected="" disabled="">Select Hotel</option>
                        </select>  
<!--<input type="text" class="form-control" placeholder="Hotel name">-->
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="hotelmodal">Password </label>
                        <input type="password" class="form-control" name="pass1" id="pass1" placeholder="Password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="hotelmodal">Retype Password </label>
                        <input type="password" class="form-control" name="pass2" id="pass2" placeholder="Password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>

                    <div class="row">

                        <!-- /.col -->
                        <div class="col-xs-offset-6">
                            <button type="button" onclick="checkprices()" class="btn btn-primary btn-block btn-flat">Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

            </div>
            <!-- /.form-box -->
        </div>
        <!-- /.register-box -->

        <!-- jQuery 2.2.0 -->
        <script src="../../plugins/jQuery/jQuery-2.2.0.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="../../bootstrap/js/bootstrap.min.js"></script>
        <!-- iCheck -->
        <script src="../../plugins/iCheck/icheck.min.js"></script>
        <script src="../../dist/js/bootstrap-dialog.js"></script>
        <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
        <script src="../../bootstrap/js/bootstrapValidator.js"></script>
<!--        <script src="../../dist/js/jquery.confirm.js"></script>-->
        <script>
                                $(function () {
                                    $('input').iCheck({
                                        checkboxClass: 'icheckbox_square-blue',
                                        radioClass: 'iradio_square-blue',
                                        increaseArea: '20%' // optional
                                    });
                                });
                                function loadprice() {

                                    var comp = document.getElementById("country").selectedIndex;
                                    //  var countrymodal = document.getElementById("countrymodal");
                                    var length = document.getElementById("hotelmodal").options.length;
                                    if (length > 1) {
                                        document.getElementById('hotelmodal').options.length = 0;
                                        var e2 = document.createElement("option");
                                        e2.textContent = "Select";
                                        e2.value = "null";
                                        hotelmodal.appendChild(e2);
                                    }
                                    var obj;
                                    if (window.XMLHttpRequest)
                                    {
                                        obj = new XMLHttpRequest();
                                    } else if (window.ActiveXObject)
                                    {
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
                                                alert(res);
                                                var i;
                                                for (i = 0; i < res.length; i++) {
                                                    var opt = JSON.parse(res)[i].hotel_id;
                                                    var opt2 = JSON.parse(res)[i].hotel_name + " - " + JSON.parse(res)[i].Location;


                                                    var el = document.createElement("option");
                                                    el.textContent = opt2;
                                                    el.value = opt;
                                                    hotelmodal.appendChild(el);
                                                }

                                            }
                                        }

                                        obj.open("GET", "test1.php?register=" + encodeURIComponent(comp), true);
                                        obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                                        obj.send();
                                    }
                                }
                                function checkprices() {

                                    if (document.getElementById('user').value != " " && document.getElementById('hotelmodal').value != "null" && document.getElementById('country').value != "null" && document.getElementById('pass1').value != "" && document.getElementById('pass2').value != "") {
                                        if (document.getElementById('pass1').value != document.getElementById('pass2').value) {
                                            BootstrapDialog.alert("Retype password is not matching with the previous.");
                                        } else {
                                            $.ajax({
                                                type: 'POST',
                                                url: 'registerController.php',
                                                data: $('#register').serialize(),
                                                success: function (data) {
                                                    alert(data);
                                                    BootstrapDialog.alert("Registration Successful");
                                                    window.location.href='../../index.php';

                                                }
                                            });
                                        }
                                    } else {
                                        BootstrapDialog.alert("Please fill all the details");
                                    }
                                }
                                $('#register').ready(function () {
                                    $('#register').bootstrapValidator({
                                        message: 'This value is not valid',
                                        feedbackIcons: {
                                            valid: 'glyphicon glyphicon-ok',
                                            invalid: 'glyphicon glyphicon-remove',
                                            validating: 'glyphicon glyphicon-refresh'
                                        },
                                        fields: {
                                            user: {
                                                validators: {
                                                    notEmpty: {
                                                        message: 'The username cannot be empty'
                                                    },
                                                    stringLength: {
                                                        min: 5,
                                                        max: 20,
                                                        message: 'The username should have minimum 5 charachters and maximum 20 charachters numbers.'
                                                    },
                                                }
                                            },
                                            pass1: {
                                                validators: {
                                                    notEmpty: {
                                                        message: 'The password is required and can\'t be empty'
                                                    },
                                                    identical: {
                                                        field: 'pass2',
                                                        message: 'The password and its confirm are not the same'
                                                    }
                                                }
                                            },
                                            pass2: {
                                                validators: {
                                                    notEmpty: {
                                                        message: 'The confirm password is required and can\'t be empty'
                                                    },
                                                    identical: {
                                                        field: 'pass1',
                                                        message: 'The password and its confirm are not the same'
                                                    }
                                                }
                                            },
                                        }
                                    });
                                });

        </script>
    </body>
</html>

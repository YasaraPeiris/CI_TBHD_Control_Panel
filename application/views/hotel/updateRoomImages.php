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
    <style type="text/css">



        body {
            background-color: #fff;

            color: #4F5155;
        }

        a {
            color: #003399;
            background-color: transparent;
            font-weight: normal;
        }

        h1 {
            color: #444;
            background-color: transparent;
            border-bottom: 1px solid #D0D0D0;
            font-size: 19px;
            font-weight: normal;
            margin: 0 0 14px 0;
            padding: 14px 15px 10px 15px;
        }

        code {
            font-family: Consolas, Monaco, Courier New, Courier, monospace;
            font-size: 12px;
            background-color: #f9f9f9;
            border: 1px solid #D0D0D0;
            color: #002166;
            display: block;
            margin: 14px 0 14px 0;
            padding: 12px 10px 12px 10px;
        }

        #body {
            margin: 15px;
        }

        p.footer {
            text-align: right;
            font-size: 11px;
            border-top: 1px solid #D0D0D0;
            line-height: 32px;
            padding: 0 10px 0 10px;
            margin: 20px 0 0 0;
        }

        #container {
            margin: 10px;
            box-shadow: 4px 4px 4px 4px rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            padding: 10px;

        }
        h4{
            color:dimgrey;
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
                 style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-top: 3px solid #d2d6de;padding: 5px;">
                <div class="box-header with-border" style="text-align: center;">
                    <h3 class="box-title"
                        style="text-align: center;color:dimgrey;padding-top:6px;font-weight: bold;font-size: 18px;">
                        Room Images Gallery</h3>
                </div>
                <?php ?>
                <div class="small-box" id="hotelDes" style="box-shadow:none;">
                    <ul class="nav nav-tabs" id="roomnames">
                        <li id="0" class="active"><a id="0" data-toggle="tab" style="background-color: transparent;"
                                                     href="<?php echo '#' . preg_replace('/\s+/', '', $room[0]['room_name']); ?>"><?php echo $room[0]['room_name'] ?></a>
                        </li>
                        <?php for ($i = 1; $i < sizeof($room); $i++) { ?>

                            <li id="<?php echo $i ?>"><a id="<?php echo $i ?>" data-toggle="tab"
                                                         style="background-color: transparent;"
                                                         href="<?php echo '#' . preg_replace('/\s+/', '', $room[$i]['room_name']); ?>"><?php echo $room[$i]['room_name'] ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                    <div class="tab-content">
                        <div style="background: white;" id="<?php echo preg_replace('/\s+/', '', $room[0]['room_name']); ?>"
                             class="tab-pane fade in active">
                            <div id="container">
                                <h4 style="font-weight:bold;">Main Images</h4>

                                <div id="body">
                                    <?php

                                    $images = $room[0]['room_images'];

                                    if (sizeof($images) > 0) : ?>

                                        <?php if ($this->session->flashdata('message')) : ?>
                                            <div class="alert alert-success" role="alert" align="center">
                                                <?= $this->session->flashdata('message') ?>
                                            </div>
                                        <?php endif; ?>

                                        <!-- Modal -->


                                        <hr/>
                                        <div class="row">

                                            <?php
                                            foreach ($images as $img) :

                                                if($img->is_main){?>
                                                    <div class="col-md-3 col-sm-3">
                                                        <div class="thumbnail">
                                                            <img height="100px" src="../../<?php echo $img->image_path ?>">
                                                            <div class="caption" style="padding-bottom: 0;">

                                                                <p style="text-align: center;">
                                                                    <button type="button" class="btn btn-success btn-sm" style="text-align: center;margin: 0 auto;"
                                                                            onclick="changeImage(<?php echo $img->roompic_id?>,'../../<?php echo $img->image_path ?>')">
                                                                        Change
                                                                    </button>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php }
                                                endforeach; ?>
                                        </div>
                                    <?php else : ?>
                                        <div align="center">We don't have any image yet, go ahead and add a new image.</div>
                                    <?php endif;
                                    ?>
                                </div>

                            </div>


                        <hr>
                        <div id="container">
                            <h4 style="font-weight:bold;">Other Images</h4>
                            <hr>
                            <div id="body">
                                <?php
                                if (sizeof($images) > 0) :
                                    ?>
                                    <?php
                                if ($this->session->flashdata('message')) :
                                    ?>
                                    <div class="alert alert-success" role="alert" align="center">
                                        <?= $this->session->flashdata('message') ?>
                                    </div>
                                <?php
                                endif;
                                ?>
                                    <button type="button" class="btn btn-info btn-md" data-toggle="modal"
                                            data-target="#myModal" style="background-color: #8892d6;border: #8892d6;">Add a new Image
                                    </button>
                                    <!-- Modal -->
                                <hr style="margin-top: 5px;margin-bottom: 5px;">
                                    <div class="row">
                                        <?php foreach ($images as $img) :
                                            if(!$img->is_main){?>
                                                <div class="col-md-3 col-sm-3">
                                                    <div class="thumbnail">
                                                        <img height="100px" src="../../<?php echo $img->image_path ?>">
                                                        <div class="caption" style="padding-bottom: 0;">

                                                            <p>
                                                                <button type="button" class="btn btn-danger btn-sm"
                                                                        onclick="confirmDialog(<?php echo $img->roompic_id ?>)">
                                                                    Delete
                                                                </button>
                                                                <button type="button" style="float: right;" class="btn btn-success btn-sm"
                                                                        onclick="changeImage(<?php echo $img->roompic_id ?>,'../../<?php echo $img->image_path ?>')">
                                                                    Change
                                                                </button>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php }endforeach; ?>
                                    </div>
                                <?php else : ?>
                                    <div align="center">We don't have any image yet, go ahead and add a new image.</div>
                                <?php endif; ?>
                            </div>

                        </div>

                        </div>
                        <?php for ($i = 1; $i < sizeof($room); $i++) { ?>
                        <div style="background: white;" id="<?php echo preg_replace('/\s+/', '', $room[$i]['room_name']); ?>"
                             class="tab-pane fade">
                    <div id="container">
                        <h4 style="font-weight:bold;">Main Images</h4>

                        <div id="body">
                            <?php

                            $images = $room[$i]['room_images'];

                            if (sizeof($images) > 0) : ?>

                                <?php if ($this->session->flashdata('message')) : ?>
                                    <div class="alert alert-success" role="alert" align="center">
                                        <?= $this->session->flashdata('message') ?>
                                    </div>
                                <?php endif; ?>

                                <!-- Modal -->

                                <hr/>
                                <div class="row">
                                    <?php foreach ($images as $img) :
                                        if($img->is_main){?>
                                            <div class="col-md-3 col-sm-3">
                                                <div class="thumbnail">
                                                    <img height="100px" src="../../<?php echo $img->image_path ?>">
                                                    <div class="caption" style="padding-bottom: 0;">

                                                        <p style="text-align: center;">
                                                            <button type="button" class="btn btn-success btn-sm" style="text-align: center;margin: 0 auto;"
                                                                    onclick="changeImage(<?php echo $img->roompic_id?>,'../../<?php echo $img->image_path ?>')">
                                                                Change
                                                            </button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php }endforeach; ?>
                                </div>
                            <?php else : ?>
                                <div align="center">We don't have any image yet, go ahead and add a new image.</div>
                            <?php endif;
                            ?>
                        </div>

                    </div>


                <hr>
                <div id="container">
                    <h4 style="font-weight:bold;">Other Images</h4>
                    <hr>
                    <div id="body">
                        <?php
                        if (sizeof($images) > 0) :
                            ?>
                            <?php
                        if ($this->session->flashdata('message')) :
                            ?>
                            <div class="alert alert-success" role="alert" align="center">
                                <?= $this->session->flashdata('message') ?>
                            </div>
                        <?php
                        endif;
                        ?>
                            <button type="button" class="btn btn-info btn-md" data-toggle="modal"
                                    data-target="#myModal" style="background-color: #8892d6;border: #8892d6;">Add a new Image
                            </button>
                            <!-- Modal -->

                        <hr style="margin-top: 5px;margin-bottom: 5px;">
                            <div class="row">
                                <?php foreach ($images as $img) :
                                    if(!$img->is_main){?>
                                        <div class="col-md-3 col-sm-3">
                                            <div class="thumbnail">
                                                <img height="100px" src="../../<?php echo $img->image_path ?>">
                                                <div class="caption" style="padding-bottom: 0;">

                                                    <p>
                                                        <button type="button" class="btn btn-danger btn-sm"
                                                                onclick="confirmDialog(<?php echo $img->roompic_id ?>)">
                                                            Delete
                                                        </button>
                                                        <button type="button" style="float: right;" class="btn btn-success btn-sm"
                                                                onclick="changeImage(<?php echo $img->roompic_id ?>,'../../<?php echo $img->image_path ?>')">
                                                            Change
                                                        </button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }endforeach; ?>
                            </div>
                        <?php else : ?>
                            <div align="center">We don't have any image yet, go ahead and add a new image.</div>
                        <?php endif; ?>
                    </div>

                </div>

                    </div>
                    <?php } ?>

                    <hr style="border: 1px solid rgba(0, 0, 0, 0.3);margin-top: 60px;">

                </div>
            </div>
    </div>

    </section>
    <script src="../../assets/js/photoResize/canvas-to-blob.min.js"></script>
    <script src="../../assets/js/photoResize/resize.js"></script>
    <script src="../../assets/js/photoResize/appmainImages.js"></script>
    <script>


        function deleteImage() {
            id = $('#runFunc').val();
            $.ajax({
                type: 'POST',
                data: 'imageid=' + id,
                url: "<?php echo base_url(); ?>index.php/EditImagesController/deleteRoomImage",
                success: function (data) {
                    location.reload();
                }
            });

        }

        function addImage() {
            var val=true;
            $("input[name='userfile2[]']").each(function () {

                if ($(this).val() == "") {
                    alert("No image location is specified for the given location.");
                    val = false;
                }
            });
            if (!val) {
                return false;
            }
            else {
                $('#myModal').modal('hide');
                var values = [];

                $("input[name='userfile2[]']").each(function () {
                    values.push($(this).val());
                });
                $.ajax({
                    type: 'POST',
                    data: 'imagefile=' + values,
                    url: "<?php echo base_url(); ?>index.php/EditImagesController/addRoomImages",
                    success: function (data) {

                        location.reload();
                    }
                });
            }
        }

        function  changeImage(imageId,loc){
            $('#changeId').attr('value',imageId);
            $('#changePath').attr('value',loc);
            $("#myModalChange").modal();
        }

        function saveImage(){

            var checkVal = $("input[name='userfile']").val();
            var files = document.getElementById("userfile").files;
            if (checkVal == "") {
                alert("No image location is specified for the given location.");
                return false;
            }
            else{
                var id = $("#changeId").val();
                var loc = $("#changePath").val();
                // console.log(id);
                // console.log(loc);
                (function () {

                    var initialSize = files[0].size;

                    resize.photo(files[0], 880, 488, 'file', function (resizedFile) {

                        //var resizedSize = resizedFile.size;
                        // ds.push(resizedFile);
                        upload(resizedFile,initialSize,id, loc,'big', function (response) {
                        });

                    });
                    // alert('for loop');
                }());
                $('#myModalChange').modal('hide');

                //upload to the same location
                // $.ajax({
                //     type: 'POST',
                //     data: {"imageid": id, "imageloc": loc},
                //     url: "<?php echo base_url(); ?>index.php/EditImagesController/updateRoomImage",
                //     success: function (data) {
                //         location.reload();
                //     }
                // });
            }
        }

        function addAnotherInput() {
            var values = [];
            var val=true;
            $("input[name='userfile2[]']").each(function () {

                if ($(this).val() == "") {
                    alert("No image location is specified for the given location.");
                   val = false;
                }
            });
            if(!val){
                return false;
            }
            var node_input = document.createElement("input");
            node_input.setAttribute("type", "file");
            node_input.setAttribute("class", "form-control");
            node_input.setAttribute("name", "userfile2[]");
            var node = document.createElement("DIV");
            node.setAttribute("class", "form-group");
            node.appendChild(node_input);
            document.getElementById("inputImagesAdd").appendChild(node);

        }


        function  confirmDialog(id) {
            $('#runFunc').attr('value',id);
            $("#confirmDialog").modal();
        }
    </script>
</div>
    <div id="myModalChange" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;
                    </button>
                    <h4 class="modal-title">Change existing main image</h4>
                </div>
                <div class="modal-body" id="inputImages">
                    <div class="form-group">
                        <label for="userfile">Image File</label>
                        <input type="file" class="form-control" name="userfile" id="userfile">
                    </div>
                    <input type="hidden" id="changeId">
                    <input type="hidden" id="changePath">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default"
                            data-dismiss="modal">Cancel
                    </button>
                    <button type="button" class="btn btn-default btn-sm"
                            onclick="saveImage()">Save Image
                    </button>
                </div>
            </div>

        </div>
    </div>
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add new Image</h4>
                </div>
                <div class="modal-body" id="inputImagesAdd">
                    <div class="form-group">
                        <label for="userfile2[]">Image File</label>
                        <input type="file" class="form-control" name="userfile2[]">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" onclick="addAnotherInput()">
                        Add another image
                    </button>
                    <button type="button" class="btn btn-default btn-sm"
                            onclick="addImage()">Upload
                    </button>
                </div>
            </div>

        </div>
    </div>

    <div id="confirmDialog" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
        <div class="modal-body">
            Are you sure you want to do this thing?
        </div>
        <div class="modal-footer">
            <input type="hidden" id="runFunc">
            <button type="button" data-dismiss="modal" class="btn btn-primary" id="confirmed" onclick="deleteImage()">Yes</button>
            <button type="button" data-dismiss="modal" class="btn">No</button>
        </div>
        </div>
        </div>
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
<script src="../../assets/bootstrap/js/Bootstrap-Confirmation.js"></script>
<!--datatables-->

<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.1.1/js/responsive.bootstrap.min.js"></script>
<script>
    $('#myModal').on('hide',function(e){
        e.preventDefault();
    });
</script>

</body>
</html>

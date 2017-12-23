<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <title>CodeIgniter Image Gallery</title>

   <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   <style type="text/css">

   ::selection { background-color: #E13300; color: white; }
   ::-moz-selection { background-color: #E13300; color: white; }

   body {
      background-color: #fff;
      margin: 40px;
      font: 16px/24px normal 'Oxygen', sans-serif;
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
      margin: 0 15px 0 15px;
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
      border: 1px solid #D0D0D0;
      box-shadow: 0 0 8px #D0D0D0;
   }
   </style>
</head>
<body>

<div id="container">
   <h1>Hotel Image Gallery</h1>

   <div id="body">
      <?php
       if(sizeof($images) > 0) : ?>
         
         <?php if($this->session->flashdata('message')) : ?>
            <div class="alert alert-success" role="alert" align="center">
               <?=$this->session->flashdata('message')?>
            </div>
         <?php endif; ?>
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add a new Image</button>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add new Image</h4>
      </div>
      <div class="modal-body" id="inputImages">
        <div class="form-group">
                  <label for="userfile[]">Image File</label>
                  <input type="file" class="form-control" name="userfile[]">
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" onclick="addAnotherInput()">Add another image</button>
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="addImage()">Upload</button>
      </div>
    </div>

  </div>
</div>
<script>
function addAnotherInput(){
	var values = [];
    $("input[name='userfile[]']").each(function() {

    	if($(this).val()==""){
    	alert("No image location is specified for the given location.");
    	e.preventDefault();
       }
    });
	var node_input = document.createElement("input");
	node_input.setAttribute("type", "file");
	node_input.setAttribute("class", "form-control");
	node_input.setAttribute("name", "userfile[]");
	var node = document.createElement("DIV");
	node.setAttribute("class", "form-group");
	node.appendChild(node_input);
	document.getElementById("inputImages").appendChild(node);

}
</script>
          <hr />
         <div class="row">
            <?php foreach($images as $img) : ?>
            <div class="col-md-3 col-sm-3">
               <div class="thumbnail">
                 <img src="../../<?php echo $img->image_path?>" >
                  <div class="caption">

                     <p>
                      <button type="button" class="btn btn-danger" onclick="deleteImage(<?php echo $img->listing_pic_id?>)">Delete</button>
                     </p>
                  </div>
               </div>
            </div>
            <?php endforeach; ?>
         </div>
      <?php else : ?>
         <div align="center">We don't have any image yet, go ahead and add a new image.</div>
      <?php endif; ?>
   </div>

   </div>
<script>

function deleteImage(id){
$.ajax({
                    type: 'POST',
                    data: 'imageid=' + id,
                    url: "<?php echo base_url(); ?>index.php/EditImagesController/deleteImage",
                    success: function (data) {
    						location.reload();
                    }
                });

}

function addImage(){
var values = [];
$("input[name='userfile[]']").each(function() {
    values.push($(this).val());
});
$.ajax({
                    type: 'POST',
                    data: 'imagefile=' + values,
                    url: "<?php echo base_url(); ?>index.php/EditImagesController/addImage",
                    success: function (data) {
    						location.reload();
                    }
                });

}
</script>
</body>
</html>

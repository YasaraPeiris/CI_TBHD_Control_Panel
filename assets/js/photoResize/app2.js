// document.addEventListener('DOMContentLoaded', function (event) {

	'use strict';

	// Initialise resize library
	var resize = new window.resize();
	resize.init();

	//Upload photo
	var upload = function (photo, callback) {
		var formData = new FormData();
		// console.log(photo);
		formData.append('photo', photo);
		var request = new XMLHttpRequest();
		request.onreadystatechange = function() {
			if (request.readyState === 4) {
				callback(request.response);
			}
		}
		request.open('POST', '../ImagesController/photoUploadRoom');
		request.responseType = 'json';
		request.send(formData);
		// request.upload.onprogress;
		// alert('hi hi');
	};
	var upload2 = function (photo, callback) {
		var formData = new FormData();
		// console.log(photo);
		formData.append('photo', photo);
		var request = new XMLHttpRequest();
		request.onreadystatechange = function() {
			if (request.readyState === 4) {
				callback(request.response);
			}
		}
		request.open('POST', '../ImagesController/photoUploadBathroom');
		request.responseType = 'json';
		request.send(formData);
		// alert('hi hi');
	};
	var fileSize = function (size) {
		var i = Math.floor(Math.log(size) / Math.log(1024));
		return (size / Math.pow(1024, i)).toFixed(2) * 1 + ' ' + ['B', 'kB', 'MB', 'GB', 'TB'][i];
	};

	document.querySelector('#roomImg').addEventListener('change', function (e) {
	    e.preventDefault();
	    // alert('hi');
	    $('#tbodyID1').html('');
	    var request = new XMLHttpRequest();
		request.open('POST', '../ImagesController/startProcessRoomIm');
		request.responseType = 'json';
		request.send();
	    var imgCount = 0;
		var files = document.getElementById("roomImg").files;
		for (var i in files) {

			if (typeof files[i] !== 'object'){
				// alert ('not object');
			    continue;
			}

			(function () {

				var initialSize = files[i].size;

				resize.photo(files[i], 880, 488, 'file', function (resizedFile) {

					var resizedSize = resizedFile.size;
					// ds.push(resizedFile);
					upload(resizedFile, function (response) {
						resize.photo(resizedFile, 100, 71,  'dataURL', function (thumbnail) {
							var rowElement = document.createElement('tr');
							rowElement.innerHTML = '<td>'+new Date().getHours()+':'+new Date().getMinutes()+':'+new Date().getSeconds()+'</td><td>'+fileSize(initialSize)+'</td><td><img src="'+thumbnail+'"  width="100px" height="71px"></img></td><td>uploaded</td>';
							document.querySelector('table.table #tbodyID1').appendChild(rowElement);
						});
					});
				});  

				// alert('for loop');
			}());
		}
	});
	document.querySelector('#bathroomImg').addEventListener('change', function (e) {
	    e.preventDefault();
	    // alert('hi');
	    $('#tbodyID2').html('');
	    var request = new XMLHttpRequest();
		request.open('POST', '../ImagesController/startProcessBathroomIm');
		request.responseType = 'json';
		request.send();
	    var imgCount = 0;
		var files = document.getElementById("bathroomImg").files;
		for (var i in files) {

			if (typeof files[i] !== 'object'){
				// alert ('not object');
			    continue;
			}

			(function () {

				var initialSize = files[i].size;

				resize.photo(files[i], 880, 488, 'file', function (resizedFile) {

					var resizedSize = resizedFile.size;
					// ds.push(resizedFile);
					upload2(resizedFile, function (response) {
						resize.photo(resizedFile, 100, 71,  'dataURL', function (thumbnail) {
							var rowElement = document.createElement('tr');
							rowElement.innerHTML = '<td>'+new Date().getHours()+':'+new Date().getMinutes()+':'+new Date().getSeconds()+'</td><td>'+fileSize(initialSize)+'</td><td><img src="'+thumbnail+'"  width="100px" height="71px"></img></td><td>uploaded</td>';
							document.querySelector('table.table #tbodyID2').appendChild(rowElement);
						});
					});
				});  

				// alert('for loop');
			}());
		}
	});
	$('#roomForm').on('submit', function(e){
		var x = document.getElementById("tbodyID1").rows.length;
		var y = document.getElementById("tbodyID2").rows.length;
		// alert(x);
		if (x<1 || y<1) { 
			alert('Please attach atleast one images. Atleast one for room and one for bathroom.') //If you have alredy attached more than three images, please press "Upload Photos" button and wait till those photos shown in this web page with status uploaded
			return false;
		}
		else {
			$(this).children('#roomImg').remove();
			$(this).children('#bathroomImg').remove();
			return true;
		}
	});

// });

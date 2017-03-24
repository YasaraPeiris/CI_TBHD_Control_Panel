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
		request.open('POST', '../EditDetailsController/photoUpload');
		request.responseType = 'json';
		request.send(formData);
		// alert('hi hi');
	};
	var fileSize = function (size) {
		var i = Math.floor(Math.log(size) / Math.log(1024));
		return (size / Math.pow(1024, i)).toFixed(2) * 1 + ' ' + ['B', 'kB', 'MB', 'GB', 'TB'][i];
	};

	// document.querySelector('form input[type=file]').addEventListener('change', function (event) {
	// 	event.preventDefault();
	document.getElementById("uploadBtn").addEventListener('click', function(e){
	// $('#uploadBtn').on('click', function(e){
	// document.querySelector('#imgUploadId').addEventListener('change', function (e) {
	    e.preventDefault();
	    alert('hi');
	    // $('#tbodyID').html('');
	    var request = new XMLHttpRequest();
		request.open('POST', '../FormSubmission/startProcess');
		request.responseType = 'json';
		request.send();
	    var imgCount = 0;
		var files = document.getElementById("fileToUploadId").files;
		for (var i in files) {

			if (typeof files[i] !== 'object'){
				// alert ('not object');
			    continue;
			}

			(function () {

				var initialSize = files[i].size;

				resize.photo(files[i], 200, 200, 'file', function (resizedFile) {

					var resizedSize = resizedFile.size;
					// ds.push(resizedFile);
					upload(resizedFile, function (response) {
						// var rowElement = document.createElement('tr');
						// rowElement.innerHTML = '<td>'+new Date().getHours()+':'+new Date().getMinutes()+':'+new Date().getSeconds()+'</td><td>'+fileSize(initialSize)+'</td><td>'+fileSize(resizedSize)+'</td><td>'+Math.round((initialSize - resizedSize) / initialSize * 100)+'%</td><td><img src="'+resizedFile+'"  width="100px" height="200px"></img></td>';
						// document.querySelector('table.images tbody').appendChild(rowElement);
						// resize.photo(resizedFile, 100, 71,  'dataURL', function (thumbnail) {
							// var rowElement = document.createElement('tr');
							// rowElement.innerHTML = '<td>'+new Date().getHours()+':'+new Date().getMinutes()+':'+new Date().getSeconds()+'</td><td>'+fileSize(initialSize)+'</td><td><img src="'+thumbnail+'"  width="100px" height="71px"></img></td><td>uploaded</td>';
							// document.querySelector('table.table tbody').appendChild(rowElement);
							// console.log('Display the thumbnail to the user: ', thumbnail);
							// var rowElement = document.createElement('p');
							// rowElement.innerHTML = '<img src="'+thumbnail+'"  width="100px" height="200px"></img>';
							// document.querySelector('#showImage').appendChild(rowElement);
						// });
					});
					

					// This is not used in the demo, but an example which returns a data URL so yan can show the user a thumbnail before uploading th image.
					// resize.photo(resizedFile, 100, 71,  'dataURL', function (thumbnail) {
					// 	var rowElement = document.createElement('tr');
					// 	rowElement.innerHTML = '<td>'+new Date().getHours()+':'+new Date().getMinutes()+':'+new Date().getSeconds()+'</td><td>'+fileSize(initialSize)+'</td><td><img src="'+thumbnail+'"  width="100px" height="71px"></img></td><td>uploaded</td>';
					// 	document.querySelector('table.images tbody').appendChild(rowElement);
					// 	// console.log('Display the thumbnail to the user: ', thumbnail);
					// 	// var rowElement = document.createElement('p');
					// 	// rowElement.innerHTML = '<img src="'+thumbnail+'"  width="100px" height="200px"></img>';
					// 	// document.querySelector('#showImage').appendChild(rowElement);
					// });

				});  

				// alert('for loop');
			}());
			// imgCount = imgCount +1;
		}

		// alert('start posting');
		// console.log(ds);
		// upload2(ds, function (response) {
			// var rowElement = document.createElement('tr');
			// rowElement.innerHTML = '<td>'+new Date().getHours()+':'+new Date().getMinutes()+':'+new Date().getSeconds()+'</td><td>'+fileSize(initialSize)+'</td><td>'+fileSize(resizedSize)+'</td><td>'+Math.round((initialSize - resizedSize) / initialSize * 100)+'%</td><td><a href="'+response.url+'">view image</a></td>';
			// document.querySelector('table.images tbody').appendChild(rowElement);
		// });
		// var post_url='../FormSubmission/get_data';
		// var data={};
		// data.photos = ds;
		// data.aa = 'asd';
		// data.bb= {'a':12,'b':23};
		// console.log(data.bb);
		// $.post(post_url, data, function(returnedData)
		// {
		// 	if(returnedData.status == "fail")
		// 	{
		// 		alert(returnedData.details);
		// 		return;
		// 	}
		// 	else{
		// 		alert('woow');
		// 		alert(returnedData.details);
		// 	}


		// });
		// var x = document.getElementById("tbodyID").rows.length;
		// // alert(imgCount);
		// alert(x);
		// var formData = new FormData();
		// // console.log(photo);

		// formData.append('imgCount', x);
		// var request = new XMLHttpRequest();
		// // request.onreadystatechange = function() {
		// // 	if (request.readyState === 4) {
		// // 		callback(request.response);
		// // 	}
		// // }
		// request.open('POST', '../FormSubmission/finishProcess');
		// request.responseType = 'json';
		// request.send(formData);

		// var aa ="kkk";
		// return true;
	});

	// $('#uploadImageForm').on('submit', function(e){
	// 	var x = document.getElementById("tbodyID").rows.length;
	// 	// alert(x);
	// 	if (x<3) { 
	// 		alert('Please attach atleast three images.\n Then hit "Upload Photos" button and wait till those images get uploaded.') //If you have alredy attached more than three images, please press "Upload Photos" button and wait till those photos shown in this web page with status uploaded
	// 		return false;
	// 	}
	// 	else return true;
	// });

// });

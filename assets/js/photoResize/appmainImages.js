// document.addEventListener('DOMContentLoaded', function (event) {

	'use strict';

	// Initialise resize library
	var resize = new window.resize();
	resize.init();

	//Upload photo
	var upload = function (photo,initialSize,id, loc, size, callback) {

		var formData = new FormData();
		// console.log(id);
		// console.log(loc);
		formData.append('photo', photo);
		formData.append('id', id);
		formData.append('loc', loc);
		formData.append('size', size);
		var request = new XMLHttpRequest();
		request.onreadystatechange = function() {
			if (request.readyState === 4) {
				callback(request.response);
			}
		}
		request.open('POST', '../EditImagesController/photoUpload');
		request.responseType = 'json';
		request.send(formData);
	};
	var upload2 = function (photo,initialSize,loc,roomid, callback) {

		var prgrsid = "progress"+roomid;
		// var tbodyID = "#tbodyID"+roomid;
		// alert(tbodyID);
		// console.log(tbodyID);
		// var o = document.getElementById(prgrsid);
		// var progress = o.appendChild(document.createElement("p"));
		// progress.appendChild(document.createTextNode("uploading...." ));  //  + file.name
		var rowElement = document.createElement('tr');
		var listHtml = '<td>'+new Date().getHours()+':'+new Date().getMinutes()+':'+new Date().getSeconds()+'</td><td>'+fileSize(initialSize)+'</td><td><img src="'; 	
		listHtml +=  window.URL.createObjectURL( photo );
		listHtml += '"  width="100px" height="71px"></img></td><td>'+fileSize( photo.size)+'</td>';  //fileSize( photo.size)
		rowElement.innerHTML = listHtml;
		document.querySelector("#tbodyID"+roomid).appendChild(rowElement);



		var formData = new FormData();
		// console.log(loc);
		formData.append('loc', loc);
		formData.append('roomid', roomid);
		formData.append('photo', photo);
		var request = new XMLHttpRequest();



		// progress bar
		// request.upload.addEventListener(prgrsid, function(e) {
		// 	var pc = parseInt(100 - (e.loaded / e.total * 100));
		// 	progress.style.backgroundPosition = pc + "% 0";
			
		// 	if (e.loaded == e.total ) {progress.innerHTML ='Uploaded';}
		// }, false);

		// request.onreadystatechange = function(e) {
		// 	if (request.readyState == 4) {
		// 		progress.className = (request.status == 200 ? "success" : "failure");
		// 	}
		// };




		request.onreadystatechange = function() {
			if (request.readyState === 4) {
				// progress.className = (request.status == 200 ? "success" : "failure");
				callback(request.response);
			}
		}
		request.open('POST', '../EditImagesController/photoUploadRoomMultiple');
		request.responseType = 'json';
		request.send(formData);
	};
	var upload3 = function (photo,initialSize,loc, callback) {
		// var o = document.getElementById("progress");
		// var progress = o.appendChild(document.createElement("p"));
		// progress.appendChild(document.createTextNode("uploading...." ));  //  + file.name
		var rowElement = document.createElement('tr');
		var listHtml = '<td>'+new Date().getHours()+':'+new Date().getMinutes()+':'+new Date().getSeconds()+'</td><td>'+fileSize(initialSize)+'</td><td><img src="'; 	
		listHtml +=  window.URL.createObjectURL( photo );
		listHtml += '"  width="100px" height="71px"></img></td><td>'+fileSize( photo.size)+'</td>';  //fileSize( photo.size)
		rowElement.innerHTML = listHtml;
		document.querySelector("#tbodyID").appendChild(rowElement);
		var formData = new FormData();
		// console.log(loc);
		formData.append('loc', loc);
		formData.append('photo', photo);
		var request = new XMLHttpRequest();
		// progress bar
		// request.upload.addEventListener("progress", function(e) {
		// 	var pc = parseInt(100 - (e.loaded / e.total * 100));
		// 	progress.style.backgroundPosition = pc + "% 0";
			
		// 	if (e.loaded == e.total ) {progress.innerHTML ='Uploaded';}
		// }, false);
		request.onreadystatechange = function() {
			if (request.readyState === 4) {
				callback(request.response);
			}
		}
		request.open('POST', '../EditImagesController/photoUploadMainMultiple');
		request.responseType = 'json';
		request.send(formData);
	};

	var fileSize = function (size) {
		var i = Math.floor(Math.log(size) / Math.log(1024));
		return (size / Math.pow(1024, i)).toFixed(2) * 1 + ' ' + ['B', 'kB', 'MB', 'GB', 'TB'][i];
	};

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


	var fileSize = function (size) {
		var i = Math.floor(Math.log(size) / Math.log(1024));
		return (size / Math.pow(1024, i)).toFixed(2) * 1 + ' ' + ['B', 'kB', 'MB', 'GB', 'TB'][i];
	};


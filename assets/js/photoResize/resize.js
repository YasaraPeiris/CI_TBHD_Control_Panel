window.resize = (function () {

	'use strict';

	function Resize() {
		//
	}

	Resize.prototype = {

		init: function(outputQuality) {
			this.outputQuality = (outputQuality === 'undefined' ? 0.8 : outputQuality);
		},

		photo: function(file, maxSize, maxHeight, outputType, callback) {

			var _this = this;

			var reader = new FileReader();
			reader.onload = function (readerEvent) {
				_this.resize(readerEvent.target.result, maxSize, maxHeight, outputType, callback);
			}
			reader.readAsDataURL(file);

		},

		resize: function(dataURL, maxSize, maxHeight, outputType, callback) {

			var _this = this;

			var image = new Image();
			image.onload = function (imageEvent) {

				// Resize image
				var canvas = document.createElement('canvas'),
					width = image.width,
					height = image.height;
				if (width > height) {
					if (width > maxSize) {
						height *= maxSize / width;
						width = maxSize;
					}
					var canvas_width = width;
					var canvas_height = width*maxHeight/maxSize;
				} else {
					if (height > maxHeight) {
						width *= maxHeight / height;
						height = maxHeight;
					}
					var canvas_height = height;
					var canvas_width = height*maxSize/maxHeight;
				}
				canvas.width = canvas_width;
				canvas.height = canvas_height;
				var ctx = canvas.getContext("2d");
				ctx.rect(0, 0, canvas_width, canvas_height);
				ctx.fillStyle = "white";
				ctx.fill();
				ctx.globalAlpha = 0.4;
				ctx.drawImage(image, 0, 0 ,canvas_width,canvas_height);
				ctx.globalAlpha = 1;
				ctx.drawImage(image, (canvas_width-width)/2, (canvas_height-height)/2, width, height);
			    // ctx.globalAlpha = 0.5;
			    // ctx.drawImage(img, 0, -100,250,300);
			    // ctx.globalAlpha = 1;
			    // ctx.drawImage(img, 20, 100,350,300);
				_this.output(canvas, outputType, callback);

			}
			image.src = dataURL;

		},

		output: function(canvas, outputType, callback) {

			switch (outputType) {

				case 'file':
					canvas.toBlob(function (blob) {
						callback(blob);
					}, 'image/jpeg', 0.8);
					break;

				case 'dataURL':
					callback(canvas.toDataURL('image/jpeg', 0.8));
					break;

			}

		}

	};

	return Resize;

}());

$(document).ready(function(){
	$("#drop-zone").on('dragenter', function (e){
		e.preventDefault();
		$(this).css('background', '#ccc');
	});

	$("#drop-zone").on('dragover', function (e){
		e.preventDefault();
	});

	$("#drop-zone").on('drop', function (e){
		$(this).css('background', '#fff');
		e.preventDefault();
		var image = e.originalEvent.dataTransfer.files;
		uploadimage(image);
	});
});

function uploadimage(image) {
	var formData = new FormData();
	formData.append('image', image[0]);
	$.ajax({
		url: "upload_image.php",
		type: "POST",
		data: formData,
		contentType:false,
		cache: false,
		processData: false,
		success: function(data){
			if(data == "success"){
				alert('Image Uploaded');
			}else if(data == "error1"){
				alert('Wrong Image format');
			}else if(data == "error2"){
				alert('File too large to upload');
			}
		}
	});
}
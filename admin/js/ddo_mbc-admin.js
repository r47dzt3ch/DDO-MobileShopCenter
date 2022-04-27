(function($) {
  "use strict"; // Start of use strict
  // Configure tooltips for collapsed side navigation
  $('.navbar-sidenav [data-toggle="tooltip"]').tooltip({
    template: '<div class="tooltip navbar-sidenav-tooltip" role="tooltip" style="pointer-events: none;"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
  })
  // Toggle the side navigation
  $("#sidenavToggler").click(function(e) {
    e.preventDefault();
    $("body").toggleClass("sidenav-toggled");
    $(".navbar-sidenav .nav-link-collapse").addClass("collapsed");
    $(".navbar-sidenav .sidenav-second-level, .navbar-sidenav .sidenav-third-level").removeClass("show");
  });
  // Force the toggled class to be removed when a collapsible nav link is clicked
  $(".navbar-sidenav .nav-link-collapse").click(function(e) {
    e.preventDefault();
    $("body").removeClass("sidenav-toggled");
  });
  // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
  $('body.fixed-nav .navbar-sidenav, body.fixed-nav .sidenav-toggler, body.fixed-nav .navbar-collapse').on('mousewheel DOMMouseScroll', function(e) {
    var e0 = e.originalEvent,
      delta = e0.wheelDelta || -e0.detail;
    this.scrollTop += (delta < 0 ? 1 : -1) * 30;
    e.preventDefault();
  });
  // Scroll to top button appear
  $(document).scroll(function() {
    var scrollDistance = $(this).scrollTop();
    if (scrollDistance > 100) {
      $('.scroll-to-top').fadeIn();
    } else {
      $('.scroll-to-top').fadeOut();
    }
  });
  // Configure tooltips globally
  $('[data-toggle="tooltip"]').tooltip()
  // Smooth scrolling using jQuery easing
  $(document).on('click', 'a.scroll-to-top', function(event) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: ($($anchor.attr('href')).offset().top)
    }, 1000, 'easeInOutExpo');
    event.preventDefault();
  });
})(jQuery); // End of use strict

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

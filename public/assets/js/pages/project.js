$(document).ready(function(){
	// Listen for clicks on screenshots and update the lightbox image with
	// the correlating screenshot image
	$('.project-screenshot[data-image]').click(function(){
		$('#lightbox-image').attr('src', $(this).attr('data-image'));
	});
});
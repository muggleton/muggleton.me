$(document).ready(function(){
	// Loop through all elements with the data-screenshot attribute to load as a background
	$('.project-screenshot[data-image]').each(function() {
		// For testing purposes we will use a stock image for screenshot url
		// var screenshot_url = image_url + $(this).attr('data-image');
		var screenshot_url = 'http://www.irishmark.net/MEDIA//2010/02/NewFacebook.png';
		var background_image_url = 'url("' + screenshot_url + '");';
		// Update div CSS background image to screenshot url
		$(this).css('background-image', 'url("http://www.irishmark.net/MEDIA//2010/02/NewFacebook.png")');
	});

	// Listen for clicks on screenshots and update the lightbox image with
	// the correlating screenshot image
	$('.project-screenshot[data-image]').click(function(){
		$('#lightbox-image').attr('src', 'http://www.irishmark.net/MEDIA//2010/02/NewFacebook.png');
	});
});
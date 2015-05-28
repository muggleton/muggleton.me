$(document).ready(function(){
	// Load colors
	loadColors();
	// Load images
	loadImages();

});

// Function to load an background image to elements with the data 
// image attribute
function loadImages()
{
	// Loop through all elements with the data-screenshot attribute to load as a background
	$('[data-image]').each(function() {
		// For testing purposes we will use a stock image for screenshot url
		// var screenshot_url = image_url + $(this).attr('data-image');
		$(this).css('background-image', 'url("' + $(this).attr('data-image') + '")');
	});

}

// Function to load an background image to elements with the data 
// image attribute
function loadColors()
{
	// Loop through all elements with the data-screenshot attribute to load as a background
	$('[data-color]').each(function() {
		// For testing purposes we will use a stock image for screenshot url
		// var screenshot_url = image_url + $(this).attr('data-image');
		$(this).css('background-color', '#' + $(this).attr('data-color'));
	});

}


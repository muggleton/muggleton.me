// Need to add some catching on request
// with local storage
/**
$(document).ready(function(){
	// Unsplash RSS feed url
	var unsplash_url = 'https://unsplash.com/rss';
	// Ajax request to RSS using Google RSS feed API
	$.ajax({
		url: document.location.protocol + '//ajax.googleapis.com/ajax/services/feed/load?v=1.0&num=10&callback=?&q=' + encodeURIComponent(unsplash_url),
		dataType: 'json',
		success: function(data) {
			// Handle the response if successful
			loadImage(data);
		}
	});
});

function loadImage(data)
{
	if(image_src = $(data.responseData.feed.entries[Math.floor((Math.random() * 5) + 1)].content).find("img:first").attr("src"))
	{
				// Load the src as the pages background
				$('body').css('background-image', 'url("' + image_src +  '")');

			}
		}
		**/
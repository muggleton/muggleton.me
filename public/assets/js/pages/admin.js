var technology_input_index = 0;
var screenshot_input_index = 0;

$(document).ready(function(){
	// Calculate total number of technology inputs and screenshot inputs
	// Minus one as the index starts at 0
	technology_input_index = $('.technology-input').length - 1;
	screenshot_input_index = $('.screenshot-input').length -1;

	// Listen to adding another input on the new project form for technologies and screenshots
	$('.btn-add-input').on('click', function(e){
		// Prevent default behaviour for links
		e.preventDefault(); 

		// Find the previous input or textarea
		var previous_input = $(this).prev('input,textarea');

		// Check whether input is technology or screenshot
		if(previous_input.hasClass('technology-input'))
		{
			// Its a technology
			// Increment index count
			technology_input_index++;
			// Insert new input before button
			$('<textarea class="form-control input-lg technology-input" placeholder="nginx" name="technology[' + technology_input_index + ']"></textarea>').insertAfter(previous_input);
		}
		else
		{
			// its a screenshot
			// Increment index count
			screenshot_input_index++;
			// Insert new input before button
			$('<input type="text" placeholder="http://muggleton.me/screenshot.png" name="screenshot[' + screenshot_input_index + ']" class="form-control input-lg screenshot-input">').insertAfter(previous_input);
		}
	});

	// Listen to project deletes and give confirmation
	$('.btn-delete-project').on('click', function(e){
		// Confirm digalog
		if(confirm('Are you sure you want to delete this project?'))
		{
			// Confirmed
			return this.click;
		}
		else
		{
			// Canceled, prevent default behaviour
			event.preventDefault();
		}       
		
	});
});
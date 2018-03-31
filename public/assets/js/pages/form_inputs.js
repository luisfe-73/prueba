/* ------------------------------------------------------------------------------
*
*  # Basic form inputs
*
*  Specific JS code additions for form_input_basic.html page
*
*  Version: 1.1
*  Latest update: Feb 5, 2016
*
* ---------------------------------------------------------------------------- */

$(function() {

	// Default file input style
	$(".file-styled").uniform({
		fileButtonClass: 'action btn bg-info',
	   fileButtonHtml: '<i class="icon-plus2"></i>',
		fileDefaultHtml: 'no imagen'
	});


	// Primary file input
	$(".file-styled-primary").uniform({
		fileButtonClass: 'action btn bg-blue',
		fileButtonHtml: 'selecciona',
		fileDefaultHtml: 'no imagen'
	});

});

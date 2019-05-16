(function ($) {
	
	"use strict";

	$(document).ready(function() {

		// Comments
		$(".commentlist li").addClass("card");
		$(".comment-reply-link").addClass("btn btn-secondary");
	
		// Forms
		$('select, input[type=text], input[type=email], input[type=password], textarea').addClass('form-control');
		$('input[type=submit]').addClass('btn btn-primary');
		
		// You can put your own code in here
		
		//slide toggle
		jQuery.fn.slideFadeToggle  = function(speed, easing, callback) {
			return this.animate({opacity: 'toggle', height: 'toggle'}, speed, easing, callback);
		};

	});

}(jQuery));

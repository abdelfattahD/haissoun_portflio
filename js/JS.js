



(function($) { "use strict";
		
	
	
	//About page
	
	$(".about-text").on('click', function () {
		$("body").addClass("about-on");
	});
	$(".about-close").on('click', function () {
		$("body").removeClass("about-on");
	});

	
	//Contact page
	
	$(".contact-text").on('click', function () {
		$("body").addClass("contact-on");
	});
	$(".contact-close").on('click', function () {
		$("body").removeClass("contact-on");
	});

	
	//competence portfolio page
	
	$(".competence").on('click', function () {
		$("body").addClass("competence-on");
	});
	$(".competence-close").on('click', function () {
		$("body").removeClass("competence-on");
	});

	
	
	
	//portfolio portfolio page
	
	$(".portfolio").on('click', function () {
		$("body").addClass("portfolio-on");
	});
	$(".portfolio-close").on('click', function () {
		$("body").removeClass("portfolio-on");
	});

	
})(jQuery); 
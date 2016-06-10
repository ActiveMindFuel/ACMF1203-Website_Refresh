/*------------------------------------------------------------------
[Master Stylesheet]

Project:		Active Mind Fuel
Version:		1.0
Last change:	06/09/16 [development, html tags]
Assigned to:	Active Mind Fuel (AG)
Primary use:	Website refresh
---------------------------------------------------------------------
[Table of contents]

1.	3rd Party Library Settings
2.  Custom jQuery
*/

jQuery(document).ready(function(){

	/* ---------------------------------------------------------------------
	[1. 3rd Party Library Settings] */

	//slick slider settings
  	jQuery('.slickslider').slick({
		slidesToShow: 1,
  		slidesToScroll: 1,
  		arrows: true,
  		dots: true,
  		autoplay: true,
  		autoplaySpeed: 5000,
	});

	//magnific-popup initialize
	jQuery('.parent-container').magnificPopup({
		delegate: 'a', // child items selector, by clicking on it popup will open
		type: 'image'
	});

	/* ---------------------------------------------------------------------
	[2. Custom jQuery] */


});
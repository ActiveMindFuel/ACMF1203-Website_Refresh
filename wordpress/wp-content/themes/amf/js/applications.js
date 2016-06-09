/*------------------------------------------------------------------
[Master Stylesheet]

Project:		Active Mind Fuel
Version:		1.0
Last change:	06/09/16 [development, html tags]
Assigned to:	Active Mind Fuel (AG)
Primary use:	Website refresh
---------------------------------------------------------------------
[Table of contents]

1.  Custom jQuery

---------------------------------------------------------------------
[1. Custom jQuery] */

$(document).ready(function(){
  $('.your-class').slick({
		slidesToShow: 1,
  		slidesToScroll: 1,
  		arrows: false,
  		dots: true,
  		autoplay: true,
  		autoplaySpeed: 5000,
	});
});
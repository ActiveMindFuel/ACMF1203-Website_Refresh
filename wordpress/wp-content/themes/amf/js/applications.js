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
  		arrows: false,
  		dots: true,
  		autoplay: true,
  		autoplaySpeed: 5000,
	});

	//magnific-popup initialize
	jQuery('.parent-container').magnificPopup({
		delegate: 'a', // child items selector, by clicking on it popup will open
		type: 'image'
	});

	//hamburger
	var forEach=function(t,o,r){if("[object Object]"===Object.prototype.toString.call(t))for(var c in t)Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);else for(var e=0,l=t.length;l>e;e++)o.call(r,t[e],e,t)};

    var hamburgers = document.querySelectorAll(".hamburger");
    if (hamburgers.length > 0) {
      forEach(hamburgers, function(hamburger) {
        hamburger.addEventListener("click", function() {
          this.classList.toggle("is-active");
        }, false);
      });
    };

	/* ---------------------------------------------------------------------
	[2. Custom jQuery] */

	//pill tabs (samples menu)
	jQuery('#samples-module a').click(function (e) {
		e.preventDefault()
		jQuery(this).tab('show')
	});

	jQuery('#samples-module .nav-pills li:nth-child(2)').addClass('active');

});
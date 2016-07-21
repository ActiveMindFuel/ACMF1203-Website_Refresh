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

jQuery(document).ready(function($){

	/* ---------------------------------------------------------------------
	[1. 3rd Party Library Settings] */

	//slick slider settings
  	$('.slickslider').slick({
		slidesToShow: 1,
  		slidesToScroll: 1,
  		arrows: false,
  		dots: true,
  		autoplay: true,
  		autoplaySpeed: 5000,
	});

	$('.slickslider-samples').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		autoplay: true,
  		autoplaySpeed: 5000,
		fade: true,
		adaptiveHeight: true,
		asNavFor: '.slider-nav'
	});
	$('.slider-nav').slick({
		//slidesToShow: 7,
		//slidesToScroll: 1,
		asNavFor: '.slickslider-samples',
		dots: false,
		arrows: false,
		centerMode: false,
        centerPadding: '40px',
		focusOnSelect: true
	});

	//magnific-popup initialize
	$('.parent-container').magnificPopup({
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

    //tabslet
    //$('.tabs, .tabs-menu').tabslet();

    //masonry-layout
    jQuery('.grid').masonry({
		// options
		itemSelector: '.grid-item',
		columnWidth: 25
	});

	/* ---------------------------------------------------------------------
	[2. Custom jQuery] */

	//Thoughtfuel first word style
	$('h3').each(function(){
  		var me = $(this);
  		me.html( me.text().replace(/(^\w+)/,'<span>$1</span>') );
  	});

	//pill tabs (samples menu)
	$('#samples-thumbnails-module .nav-pills a').click(function (e) {
		e.preventDefault()
		$(this).tab('show')
	});

	$('#samples-thumbnails-module .nav-pills li:nth-child(1)').addClass('active');

	function iframeModalOpen(){

		// impostiamo gli attributi da aggiungere all'iframe es: data-src andrà ad impostare l'url dell'iframe
		$('.modalButton').on('click', function(e) {
			var src = $(this).attr('data-src');
			var width = $(this).attr('data-width') || 640; // larghezza dell'iframe se non impostato usa 640
			var height = $(this).attr('data-height') || 360; // altezza dell'iframe se non impostato usa 360

			var allowfullscreen = $(this).attr('data-video-fullscreen'); // impostiamo sul bottone l'attributo allowfullscreen se è un video per permettere di passare alla modalità tutto schermo
			
			// stampiamo i nostri dati nell'iframe
			$("#myModal iframe").attr({
				'src': src,
				'height': height,
				'width': width,
				'allowfullscreen':''
			});
		});

		// se si chiude la modale resettiamo i dati dell'iframe per impedire ad un video di continuare a riprodursi anche quando la modale è chiusa
		$('#myModal').on('hidden.bs.modal', function(){
			$(this).find('iframe').html("");
			$(this).find('iframe').attr("src", "");
		});
	}
  
  	$(document).ready(function(){
		iframeModalOpen();
  	});

});
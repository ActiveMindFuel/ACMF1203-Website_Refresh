jQuery(document).ready(function($){$(".slickslider").slick({slidesToShow:1,slidesToScroll:1,arrows:!1,dots:!0,autoplay:!0,autoplaySpeed:5e3}),$(".slickslider-samples").slick({slidesToShow:1,slidesToScroll:1,arrows:!1,autoplay:!0,autoplaySpeed:5e3,fade:!0,adaptiveHeight:!0,asNavFor:".slider-nav"}),$(".slider-nav").slick({asNavFor:".slickslider-samples",dots:!1,arrows:!1,centerMode:!1,centerPadding:"40px",focusOnSelect:!0}),$(".parent-container").magnificPopup({delegate:"a",type:"image"});var e=function(e,l,a){if("[object Object]"===Object.prototype.toString.call(e))for(var t in e)Object.prototype.hasOwnProperty.call(e,t)&&l.call(a,e[t],t,e);else for(var s=0,i=e.length;i>s;s++)l.call(a,e[s],s,e)},l=document.querySelectorAll(".hamburger");l.length>0&&e(l,function(e){e.addEventListener("click",function(){this.classList.toggle("is-active")},!1)}),jQuery(".grid").masonry({itemSelector:".grid-item",columnWidth:25}),$("#samples-thumbnails-module .nav-pills a").click(function(e){e.preventDefault(),$(this).tab("show")}),$("#samples-thumbnails-module .nav-pills li:nth-child(1)").addClass("active")});
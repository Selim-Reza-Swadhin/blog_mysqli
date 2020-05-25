/*-----------------------------------------------------------------------------------
/*
/* Main JS
/*
----------------------------------------------------------------------------------- */  

(function($) { 	


  	/* Mobile Menu
   ------------------------------------------------------ */  
  	let toggle_button = $("<a>", {                         
                        id: "toggle-btn", 
                        html : "Menu",
                        title: "Menu",
                        href : "#" } 
                        );
  	let nav_wrap = $('nav#nav-wrap')
  	let nav = $("ul#nav");  

  	/* if JS is enabled, remove the two a.mobile-btns 
  	and dynamically prepend a.toggle-btn to #nav-wrap */
  	nav_wrap.find('a.mobile-btn').remove(); 
  	nav_wrap.prepend(toggle_button); 

  	toggle_button.on("click", function(e) {
   	e.preventDefault();
    	nav.slideToggle("fast");     
  	});

  	if (toggle_button.is(':visible')) nav.addClass('mobile');
  	$(window).resize(function(){
   	if (toggle_button.is(':visible')) nav.addClass('mobile');
    	else nav.removeClass('mobile');
  	});

  	$('ul#nav li a').on("click", function(){      
   	if (nav.hasClass('mobile')) nav.fadeOut('fast');      
  	});	

  
  	/* Smooth Scrolling
  	------------------------------------------------------ */
  	$('.smoothscroll').on('click', function (e) {
	 	
	 	e.preventDefault();

   	let target = this.hash,
    	$target = $(target);

    	$('html, body').stop().animate({
       	'scrollTop': $target.offset().top
      }, 800, 'swing', function () {
      	window.location.hash = target;
      });

  	}); 

  	
  	/*	Back To Top Button
	------------------------------------------------------- */
	let pxShow = 300; //height on which the button will show
	let fadeInTime = 400; //how slow/fast you want the button to show
	let fadeOutTime = 400; //how slow/fast you want the button to hide
	let scrollSpeed = 300; //how slow/fast you want the button to scroll to top. can be a value, 'slow', 'normal' or 'fast'

   // Show or hide the sticky footer button
	$(window).scroll(function() {

		if ($(window).scrollTop() >= pxShow) {
			$("#go-top").fadeIn(fadeInTime);
		} else {
			$("#go-top").fadeOut(fadeOutTime);
		}

	});  


})(jQuery);
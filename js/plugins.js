$(document).ready(function(){
	
	var toggle_primary_button = $('.nav_toggle_button i'),
				toggle_primary_icon = $('.nav_toggle_button i'),
				toggle_secondary_button = $('nav li span'),
				toggle_secondary_icon = $('nav li span i'),
				primary_menu = $('nav'),
				secondary_menu = $('nav ul ul'),
				webHeight = $(document).height(),
				window_width = $(window).width();
	
				
	var hamburger = $(".hamburger");
    hamburger.each(function(){
        $(this).click(function(){
         $(this).toggleClass("is-active");
        });
      });
	  
	hamburger.click(function(){
		primary_menu.stop().slideToggle();
		toggle_primary_icon.toggleClass("fa-times").toggleClass("fa-navicon");
	});  
	
	// Add class to tab having drop down
	$( "nav li:has(ul)").find('span i').addClass("fa-caret-down");

	// Reset all configs when width > 760
	$(window).resize(function(){  
        
        if(window_width > 760 && primary_menu.is(':visible') || primary_menu.is(':hidden')) {
            primary_menu.removeAttr('style');  
            toggle_primary_icon.removeClass("fa-times").addClass("fa-navicon");        
        }
    });
	
	$(window).scroll(function(){  // fade in fade out button
	var windowScroll = $(this).scrollTop();

		if (windowScroll > (webHeight * 0.5) ) {
			$(".back_top").fadeIn();
		} else{
			$(".back_top").fadeOut()
		};

	});
	//Head-Nav swapping
	function myFunction(){
	if(window_width <= 1000){
	$('.navigation_area').insertBefore('header');
	}else{
	$('header').insertBefore('.navigation_area');
	}
	}

	myFunction(); //execute function when page load

	$(window).resize(function(){

	window_width = $(this).width();
	myFunction();

	}); //execute every windows resize
});
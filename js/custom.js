(function($) {
	
	/* Go up */
	jQuery(window).scroll(function () {
		if(jQuery(this).scrollTop() > 300 ) {
	    	jQuery(".go-up").css("bottom","0px");
		}
		else {
	   		jQuery(".go-up").css("bottom","-60px");
		}
	});
		jQuery(".go-up").click(function(){
		jQuery("html,body").animate({scrollTop:0},500);
		return false;
	 });
 

	/* Slime Menu */
	$('.slimmenu').slimmenu({
		resizeWidth: '991',
		collapserTitle: '',
		animSpeed:'medium',
		indentChildren: true,
		childrenIndenter: ' '
	});
	// Close Effect Menu
	$(function() {
		$('.collapse-button').click(function() {
			$('.collapse-button').toggleClass('close-menu');
		});
	});
	
	/* ===== Slider ===== */
	$( document ).ready(function( $ ) {
		$( '#example5' ).sliderPro({
			width: 600,
			height: 380,
			orientation: 'vertical',
			loop: false,
			arrows: true,
			buttons: false,
			autoplay: false,
			thumbnailsPosition: 'right',
			thumbnailPointer: true,
			thumbnailWidth: 130,
			breakpoints: {
				575: {
					thumbnailsPosition: 'bottom',
					thumbnailWidth: 100,
					thumbnailHeight: 100
				},
				500: {
					thumbnailsPosition: 'bottom',
					thumbnailWidth: 80,
					thumbnailHeight: 80
				}
			}
		});
	});
	
	
	/* WOW */
	wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
	/* END WOW */
	
	/* ----- Language Select UL LI select Box Script ----- */
	$("ul").on("click", ".init", function() {
		$(this).closest(".language-flag ul").children('li:not(.init)').slideDown();
	});
	
	var allOptions = $(".language-flag ul").children('li:not(.init)');
	$(".language-flag ul").on("click", "li:not(.init)", function() {
		allOptions.removeClass('selected');
		$(this).addClass('selected');
		$(".language-flag ul").children('.init').html($(this).html());
		allOptions.slideUp();
	});
	/* ----- Top Fix Header Script ----- */
	$(window).scroll(function(){
		if ($(window).scrollTop() >= 44) {
		   $('#FixTopBar').addClass('fixed-header');
		}
		else {
		   $('#FixTopBar').removeClass('fixed-header');
		}
	});
		
		
})(jQuery);

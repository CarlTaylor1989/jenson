jQuery(document).ready(function() {

/** Superfish *****************************************************************/
   if (jQuery().superfish) {
   	       jQuery('ul.sf-menu').superfish({
                        delay: 200, // delay on mouseout
                        animation: {opacity:'show',height:'show'}, // fade-in and slide-down animation
                        speed: 'fast', // faster animation speed
                        delay: 600,
                        autoArrows: false, // arrow mark-up
                        dropShadows: false // drop shadows
               });
   }


/** prettyPhoto ***************************************************************/
   if (jQuery().prettyPhoto) {
      	       jQuery("a[data-rel^='prettyPhoto']").prettyPhoto({
                        animation_speed: 'fast', // fast/slow/normal 
			slideshow: 5000, // false OR interval time in ms 
			autoplay_slideshow: false, // true/false 
			opacity: 0.80, // Value between 0 and 1 
			show_title: true, // true/false 
			allow_resize: true, // Resize the photos bigger than viewport. true/false 
			default_width: 540,
			default_height: 344,
			counter_separator_label: '/', // The separator for the gallery counter 1 "of" 2
			theme: 'pp_default', // light_rounded / dark_rounded / light_square / dark_square / facebook
			horizontal_padding: 20, // The padding on each side of the picture 
			autoplay: true, // Automatically start videos: True/False 					
			ie6_fallback: true,
                        social_tools: false
		});
   }

   if (jQuery().prettyPhoto) {
      	       jQuery("a[data-rel^='prettyPhoto-login']").prettyPhoto({
                        animation_speed: 'fast', // fast/slow/normal
                        slideshow: false,
                        default_width: 600,
			default_height: 420,
			opacity: 0.80, // Value between 0 and 1 
			theme: 'pp_default', // light_rounded / dark_rounded / light_square / dark_square / facebook
			horizontal_padding: 20, // The padding on each side of the picture 					
			ie6_fallback: true,
                        social_tools: false
		});
   }


/** prettyPhoto hover *********************************************************/ 
   jQuery(function (){      
               jQuery('.pretty_image').hover(function() {  
                        jQuery(this).stop().animate({opacity: 0.5}, {duration: 10});
               },
               function(){
                        jQuery(this).stop().animate({opacity: 1}, 'fast' );
               });
   });


/** Slider ********************************************************************/
   jQuery(window).load(function() {      
         jQuery('#slider').nivoSlider({
            effect: 'fade', // Specify sets like: 'fold,fade,sliceDown'
            randomStart: true, // Start on a random slide
            animSpeed: 500, // Slide transition speed
            pauseTime: 8000, // How long each slide will show
            directionNav: true, // Next & Prev navigation
            directionNavHide: false, // Only show on hover
            controlNav: false, // 1,2,3... navigation
            keyboardNav: true, // Use left & right arrows
            pauseOnHover: true, // Stop animation while hovering
            manualAdvance: false, // Force manual transitions
            captionOpacity: 0.85, // Universal caption opacity
            prevText: 'Prev', // Prev directionNav text
            nextText: 'Next', // Next directionNav text
            afterLoad: function(){
                jQuery(".nivo-caption").css("cursor","pointer");
                jQuery("#slider").on("click", ".nivo-caption", function(){
                        location.href = jQuery(this).siblings(".nivo-imageLink:visible").attr("href");
                        
                });
            }
         });
   });

/** Contact form **************************************************************/
   if (jQuery().validate) {		
	       jQuery("#contactForm").validate();		
   }



/** Hide empty span (used for Reply Button in Comments) ***********************/
jQuery(document).ready(function() { jQuery('span:empty').remove(); });




/** Mosaic Sliding Boxes ******************************************************/
   jQuery('.bar').mosaic({
      animation	: 'slide'
   });
   
   jQuery('.fade').mosaic({
      opacity : 1.0,
      speed : 10
   });
   
   jQuery('.circle').mosaic({
      opacity: 0.8
   });

  
  
/** Toggle *******************************************************************/	
   jQuery(".toggle_container").hide(); 
   jQuery("h6.trigger").click(function(){
	       jQuery(this).toggleClass("active").next().slideToggle("fast");
	       return false; //Prevent the browser jump to the link anchor
	});



/** Tabs **********************************************************************/
   jQuery(function() {
      jQuery(".tabs").tabs();
   });

});
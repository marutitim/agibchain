/*
  Theme Name: Bizfry
  Description: Creative Multipurpose HTML Template 
  Version: 1.0
  Author: anycsm
*/

/* Start Document */
(function($) {

    "use strict";
   

   

    $(document).ready(function() {
        
        $('#block-mainnavigation').contents().unwrap();

          $('#nav-menu li').hover(function(){
		$(this).find("ul").slideDown(50);
	},function(){
		$(this).find("ul").slideUp(50);
	});

    });


    /* End Document */
})(jQuery);
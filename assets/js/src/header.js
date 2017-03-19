jQuery(document).ready(function($) {

	$(".toggleNav").click(function () {

   		$("#subnav").toggleClass( "desactive active").promise().done(function(){
		   $mobileHeight = $(window).height();
					$("#subnav").css({
						height: $mobileHeight,

			});

		});

   		$(".socialIcons").toggleClass( 'displayed nealbit');
   		$("#header").toggleClass( "desactive-bg active-bg")
    	$(".toggleNavButton").toggleClass("active");
 	});

 	$(window).scroll(function(e) {
 		$windowHeight = $(window).height();
 		$whatiwant = $windowHeight - 400.
 		$scrollTop  = $(window).scrollTop();
 		if ($scrollTop > $whatiwant) {
 			$('#header').addClass('header-background', 500)
 		}
 		else {
 			$('#header').removeClass('header-background', 500)
 		}

 	});


});




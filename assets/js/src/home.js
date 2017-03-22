jQuery(document).ready(function($) {

	$('.mixitupclass').mixItUp();

	$windowSize = $(window).height();
	$windowSizeW = $(window).width();
	$('.fullSize').css({
		height: $windowSize,




	});

	$( '.centered' ).center({
	  			 against : '.holdSlide',
	  			 topPercentage: '0.6',

	});

	$('div.containerBox > section.boxesTitle').html(function (i, oldHtml){
	    return oldHtml.replace(/(\s)(\w+)/, '$1<span>$2</span>');
	});

	$('.owl-carousel').owlCarousel({
		items: 1,
	    loop:true,
	    center: true,
	    autoplay: true,
	    autoplayHoverPause: true,
	    autoplaySpeed: 200,


	})

	$('.buttomKnow').click(function(e) {
	  			$('.typeSlider').addClass('animacao');
	  			 setTimeout(function() {
			     	$('.titleSlider').addClass('titleblack');

			     	$('.centerContent a').text("SEGUIR CAMINHO");



			 	}, 2890);



	  		});


	var action = 1;

	$(".holdSlide .buttomKnow").on("click", viewSomething);

	function viewSomething() {
	    if ( action == 1 ) {
	        $(".holdSlide a.buttomKnow").attr("href", "#")
	        action = 2;
	    } else {
	        $(".holdSlide a.buttomKnow").attr("href", link)
	        action = 1;
	    }
	}






});

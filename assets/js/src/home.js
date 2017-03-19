jQuery(document).ready(function($) {

	$('.mixitupclass').mixItUp();

	$windowSize = $(window).height();
	$('.fullSize').css({
		height: $windowSize,

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


});

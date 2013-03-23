jQuery(function() {
	jQuery('#da-slider').cslider({
		bgincrement : parseInt( prlx.bgincrement ),
		autoplay    : parseInt( prlx.autoplay ),
		interval    : parseInt( prlx.interval ),
		current     : parseInt( prlx.current )
	});

	jQuery('#da-slider').swipe({
		 swipeLeft:  function() { jQuery('#da-slider').find('span.da-arrows-next').click() },
		 swipeRight: function() { jQuery('#da-slider').find('span.da-arrows-prev').click() },
	})
});

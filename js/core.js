jQuery(function() {

	// Fixed issue: https://github.com/jlethuau/wp-parallax-content-slider/issues/7
	// Old code : only one slider per page
/*	jQuery('#da-slider').cslider({
		bgincrement : parseInt( prlx.bgincrement ),
		autoplay    : parseInt( prlx.autoplay ),
		interval    : parseInt( prlx.interval ),
		current     : parseInt( prlx.current )
	});

	jQuery('#da-slider').swipe({
		 swipeLeft:  function() { jQuery('#da-slider').find('span.da-arrows-next').click() },
		 swipeRight: function() { jQuery('#da-slider').find('span.da-arrows-prev').click() },
	})
*/

	jQuery('.da-slider').each( function( index ) {
		
		// Call cslider script on each parallax-slider
		jQuery(this).cslider({
								bgincrement : parseInt( prlx.bgincrement ),
								autoplay    : parseInt( prlx.autoplay ),
								interval    : parseInt( prlx.interval ),
								current     : parseInt( prlx.current )
							});
	});

	jQuery('.da-slider').each( function( index ) {
		// Call touchSwipe script on each parallax-slider
		jQuery(this).swipe({
							 swipeLeft:  function() { jQuery('#da-slider').find('span.da-arrows-next').click() },
							 swipeRight: function() { jQuery('#da-slider').find('span.da-arrows-prev').click() },
							});
	});

});

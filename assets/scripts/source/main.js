/* =Main site js
 ----------------------------------------------- */
(function( $ ) {

	// Default popup
	var popup = $( '.popup' );
	if ( popup.length > 0 ) {
		popup.magnificPopup( {
			type: 'image'
		} );
	}

	// Gallery popup
	var gallery = $( '.gallery' );
	if ( gallery.length > 0 ) {
		gallery.magnificPopup( {
			delegate: 'a[href*="wp-content/uploads"]',
			type: 'image',
			gallery: {
				enabled: true,
				preload: [0, 2],
				navigateByImgClick: true,
				arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',
				tPrev: '<',
				tNext: '>',
				tCounter: '%curr% of %total%'
			}
		} );
	}

})( jQuery );

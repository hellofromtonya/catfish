/**
 * Fulcrum Catfish JavaScript handling.
 *
 * @package     Fulcrum Catfish
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        http://hellofromtonya.com
 * @license     GNU General Public License 2.0+
 */
;(function ( $, window, document, undefined ) {
	'use strict'

	var $catfish,
		height = 0,
		$window;

	function init() {
		_getWindowDimensions();
		_catfishHandler();
		_scrollToTop();
	}

	function _getWindowDimensions() {
		height = $window.height() / 2;
	}

	function _catfishHandler() {
		$catfish = $( '#catfish' );

		$window.scroll( function () {
			var position =  $( this ).scrollTop();

			_isVisible( position );
		} );
	}

	function _isVisible( position ) {
		if ( position > height ) {
			$catfish.addClass('is-visible');
		}
	}

	function _scrollToTop() {
		var $scrollup = $('.scrolltotop');

		$scrollup.on('click', function(){

			$( "html, body" ).animate({
				scrollTop: 0
			}, 2000);

			return false;
		});
	}

	$( document ).ready( function () {
		$window = $( window );

		init();
	} );

}( jQuery, window, document ));
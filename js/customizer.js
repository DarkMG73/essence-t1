/* global wp, jQuery */
/**
 * File customizer.js.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a, #welcome-title-wrap .page-title.site-title' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title, .site-description' ).css( {
					clip: 'rect(1px, 1px, 1px, 1px)',
					position: 'absolute',
				} );
			} else {
				$( '.site-title, .site-description' ).css( {
					clip: 'auto',
					position: 'relative',
				} );
				$( '.site-title a, .site-description' ).css( {
					color: to,
				} );
			}
		} );
	} );

	wp.customize( 'color_palette_reset', function( value ) {

    	// When the value changes.
    	value.bind( function( newval ) {
			console.log('Reset attempted')

			const resetConfirm = confirm('Reseting the color palette to the original theme default will refresh this page. This means you will lose any unsaved data. Confirm to continue with the reset or cancel to return to the Customizer.');

			if(resetConfirm) {
				console.log('Confirm' )
				var data = {
				 'action': 'color_palette_reset',
				 'request': 'reset'
				};
			} else {

			console.log('cancel')
			var data = {
				'action': 'color_palette_reset',
				'request': 'nochange'
			};
			}


		  
			$.ajax({
			  url: ajaxurl,
			  type: 'post',
			  data: data,
			  dataType: 'json',
			  success: function(data) {
				if(data.status == 'success'){
					window.top.location.reload();
				}else if(data.status == 'nochange'){
					alert("The current color palette was not changed.");
				}else if(data.status == 'error'){
					alert("There was error.");
					console.log('response',data);
					console.log(data.status);
					console.log(data.msg);
				}
			},
			  error: function(data) {
				console.log('response',data);
				console.log(data.status);
				console.log(data.msg);
				alert("There was an error. Please try again");
			  }
			})
			
			// const paletteResetBtn = window.parent.document.getElementById('switch_color_palette_reset')
			// paletteResetBtn.checked = !paletteResetBtn.checked;
		} );
	} );


	// if text-align:center and letter-spacing, offset right whitespace
	wp.customize( 'page_title_font_setting', function( value ) {
		value.bind( function( to ) {
			giGlobalChest.adjustForLetterSpacing('#site-welcome-container #welcome-title-wrap .page-title')
		} );
	} );

	wp.customize( 'description_font_setting', function( value ) {
		value.bind( function( to ) {
			giGlobalChest.adjustForLetterSpacing('#site-welcome-container #welcome-title-wrap .site-description')
		} );
	} );
	////////////////////////////////////////////////////////////////

}( jQuery ) );

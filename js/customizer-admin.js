/**
 * File customizer-admin.js.
 *
 * Scripts for special handling of the Customizer interface
 */

( function( $ ) {

    $( document ).ready(function(){

        // Add eventListener to Photo CTA ON/OFF toggle switch
        const photoCtaToggleCheck = setInterval(() => {

            const targetElm = $('#customize-control-footer_photo_cta_on_off_toggle_setting #toggle_footer_photo_cta_on_off_toggle_setting')

            if( targetElm.length >= 1 ) {

                clearInterval(photoCtaToggleCheck)

                targetElm.on('change', 
                    function(e){

                        if(targetElm.is(':checked')){

                            $('li[id*="photo_cta_photo"]').slideDown('slow'); 

                        } else {
                            
                            $('li[id*="photo_cta_photo"]').slideUp('slow');
                        }
                    }
                )
            }     
        }, 1000);
    })     
}( jQuery ) );
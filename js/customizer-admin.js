/**
 * File customizer-admin.js.
 *
 * Scripts for special handling of the Customizer interface
 */

 window.giAdminGlobalChest = {};

// Add color palette change warning if the palette was not saved.
 function addPaletteUpdateNotice() {

    containers = document.querySelectorAll('.control-section:not(#sub-accordion-section-colors) .wp-picker-container .wp-picker-holder');
    containers.forEach(container => {
        const hasWarning = container.querySelector('.color-palette-warning')
        if(hasWarning)  return
        textElm = document.createElement('div');
        textElm.className = 'color-palette-warning';
        textElm.innerHTML = '<p><b>&uarr; Caution &uarr;</b><br>It looks like the color palette might have changed, but not saved. If the colors shown here do not match recent color palette changes, please click "Publish & Reload" below to store unsaved changes and then refresh the browser. This will allow all of the color tools to load the new color palette.';

        container.append(textElm);
    })
    
}


    giAdminGlobalChest.cpChanged = false;
    wp.customize.bind( 'ready', function() {

        wp.customize.section.each( function ( section ) { 
            section.expanded.bind( function( isExpanding ) {
                // If is the Color Palette section, bind changes and leave
                if( section.id == 'colors') {
                    jQuery('.customize-control-kirki-color .kirki-input-container').each(function(i, elm) {
                        
                        wp.customize.control( jQuery(elm).attr('data-id'), function( control ) {
                            control.setting.bind(function (control) {
                                window.giAdminGlobalChest.cpChanged = true
                             
                                if(jQuery('.save-warning-wrap').length >= 1) return
                
                                container = document.querySelector('.wp-full-overlay')
                                elmWrap = document.createElement('div')
                                elmWrap.className = 'save-warning-wrap'
                
                                textElm = document.createElement('div');
                                textElm.className = 'large-color-palette-warning';
                                textElm.innerHTML = '<h3>Caution</h3>  <p>It looks like the color palette might have changed and has not yet been saved. These color palette changes will not show up the color tools in this Customizer until they are saved and the browser is refreshed. Please click "Publish & Reload" to store unsaved changes and then refresh the browser. This will allow all of the color tools to load the new color palette.';

                                const btnClass = 'save-warning-btn'
                                saveBtn = document.createElement('button')
                                saveBtn.className = btnClass
                                saveBtn.innerText= 'Publish & Reload'
                
                                elmWrap.append(textElm);
                                elmWrap.append(saveBtn);
                                container.append(elmWrap);
                
                
                                jQuery('#customize-header-actions').addClass('accomodateReloadButton')
                                jQuery('.' + btnClass).clone().appendTo( "#customize-save-button-wrapper" );
                
                                jQuery('.' + btnClass).each(function(index, element){
                                    jQuery(element).on('click', function(){
                                        jQuery('.save-warning-btn').each(function(i, btn){
                                            jQuery(btn).addClass('gi-btn-down')
                                        })
                                        jQuery('input#save').click()
                                        setInterval(checkForSave, 1000)
                                        function checkForSave() {
                                            if (jQuery('input#save').attr('disabled')) location.reload();
                                        }
                                    }) 
                                })
                            } );
                        });
                    })

                    return
                }
                if(isExpanding && window.giAdminGlobalChest.cpChanged == true){
                        addPaletteUpdateNotice() 
                }
            });
        });
});


// Begin jQuery
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
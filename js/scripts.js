// In very rare cases of need for global, this object is clear of  collisions
giGlobalChest = {}

/////////////////////
// Masonry
////////////////////
function masonry1Init(){
    if(document.querySelector('.ms-container')){
        var masonry1 = new MiniMasonry({
            container: '.ms-container',
            gutter: 0,
            // basewidth: '500px'
        });
    }
}


/////////////////////
//   Element  Placement Adjustments
////////////////////
giGlobalChest.adjustForLetterSpacing = function(elm){ 
    targetElm = document.querySelector(elm)

    if(targetElm){
        const elmStyles = window.getComputedStyle(targetElm)

        if(elmStyles.textAlign === 'center'){
            const letterSpacingAmount = parseFloat(elmStyles.letterSpacing, 10)
            targetElm.style.marginLeft = letterSpacingAmount/2 + 'px'
        } else {
            targetElm.style.marginLeft =  ''
        }
    }
}

function allowAdjustment() {
    if(jQuery('#wpadminbar').length) {jQuery('body').addClass('has-wp-toolbar'); jQuery('#wpadminbar').addClass('wp-toolbar');}
}


/////////////////////
//   Run Functions
////////////////////
window.onload = function() {
    masonry1Init()

    // if text-align:center and letter-spacing, offset right whitespace
    giGlobalChest.adjustForLetterSpacing('#site-welcome-container #welcome-title-wrap .page-title')
    giGlobalChest.adjustForLetterSpacing('#site-welcome-container #welcome-title-wrap .site-description')

    allowAdjustment() 
}


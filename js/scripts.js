/////////////////////
// Masonry
////////////////////
function masonry1Init(){
    if(document.querySelector('.ms-container')){
        var masonry1 = new MiniMasonry({
            container: '.ms-container',
            gutter: 40,
            // basewidth: '500px'
        });
    }
}


/////////////////////
//   Run Functions
////////////////////
window.onload = function() {
    masonry1Init()
}

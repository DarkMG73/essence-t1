(function($){
    $(window).on('load', function() {
        
        setTimeout(showpanel, 1000)

        function showpanel(){
            $(' .menu-item-has-children').each(
               
                function() {
                    jQuery( this ).prepend('<div class="sub-menu-toggle"></div>')
                });

                $(' .page_item_has_children').each(
               
                    function() {
                        jQuery( this ).prepend('<div class="sub-menu-toggle"></div>')
                    });

            $('.sub-menu-toggle').each(
                function() {
                    $( this ).click(function() {
                        $(this).toggleClass(('sub-menu-open'))
                        $(this).siblings('.sub-menu').toggleClass(('sub-menu-open'))
                        $(this).siblings('.children').toggleClass(('sub-menu-open'))
                      });
                });
        
        }
    });
})(jQuery)

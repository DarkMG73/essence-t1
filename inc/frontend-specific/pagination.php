<?php

/********************
 *  
 *   Navigation
 * 
********************/

//  Basic post navigation
function postnav_standard() {
    ?>

    <div class="postnav-outerwrap postnav-standard">
        <h4>Post Navigation</h4>
        <div class="pagenav-wrap">
                            
            <div class="previous"><?php next_post_link( '%link', '&larr; %title' ); ?>
            </div>
            
            <div class="next "><?php previous_post_link( '%link', '%title &rarr;' ); ?>
            </div>
        
        </div> <!-- /END .pagenav-wrap -->
    </div> <!-- /END .postnav-outerwrap -->
    <?php
}  

//  Post navigation with a number bar
function postnav_numberbar() {
        global $wp_query;
 
    $total_pages = $wp_query->max_num_pages;
        if ($total_pages > 1){
    ?>
    <div class="postnav-outerwrap">
        <h4>Post Navigation</h4>
        <div class="pagenav-wrap">
            <?php pagination_numberbar(); ?>
        </div> <!-- /END .pagenav-wrap -->
    </div> <!-- /END .postnav-outerwrap -->   
    <?php
    }
}

//  Basic page navigation                       
function pagenav_standard() {
    ?>
    <div class="pagenav-outerwrap pagenav-standard">
                <h3>Page Navigation</h3>
        <div class="pagenav-wrap">
            <div class="pagenav-holder"></div>
        </div><!-- /END .pagenav-wrap -->  
            
            <!-- Page list -->
            <div class="pagenav-outerwrap pagenav-special-post">
                <div class="pagenav-wrap">

                    <h4>Page List</h4>
                <div class="pagenav-list-wrap">
                        <div class="pagenav-holder">
                            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                        </div>
                    </div>
                 </div> <!-- /END .pagenav-wrap --> 
                 <div class="arrow">q</div>
            </div> <!-- /END .pagenav-outerwrap -->
         
    </div> <!-- /END .pagenav-outerwrap.pagenav-standard -->
    <script>
            (function($) {
                $(window).load(function(){
                    // Page Navigation via Main Menu
                    var prevPageName = $('.current_page_item, .current_page_parent').prev('.menu-item').children('a').first().text();
                    var nextPageName = $('.current_page_item, .current_page_parent').next('.menu-item').children('a').first().text();
                    var prevPageId = '#' + $('.current_page_item, .current_page_parent').prev('.menu-item').attr('id');
                    var nextPageId = '#' + $('.current_page_item, .current_page_parent').next('.menu-item').attr('id');
                    var prevPageUrl = $(prevPageId + ' a').attr('href');
                    var nextPageUrl = $(nextPageId + ' a').attr('href');
                    
                    if (prevPageUrl) {
                        
                        $('.pagenav-standard .pagenav-holder').append('<div class="pagenav-prev previous"><a href="' + prevPageUrl + '"><span>q</span>' + prevPageName + '</a></div>');
                    }
                    
                    if (nextPageUrl) {
                        
                        $('.pagenav-standard .pagenav-holder').append('<div class="pagenav-next next"><a href="' + nextPageUrl + '">' + nextPageName + '<span>q</span></a></div>');
                    }


                    function openMunuList(elm) {

                        elm.children('.pagenav-wrap').addClass('pagenav-open');
                        elm.children('.arrow').addClass('pagenav-open');
                        
                        //  Arrow click closes menu
                        setTimeout(function(){
                            
                                $('.pagenav-special-post .arrow').off().on('click', function() {
                                    closeMunuList(elm);
                                });
                        }, 500);
                    }
                    
                    
                    function closeMunuList(elm) {

                        elm.children('.pagenav-wrap').removeClass('pagenav-open'); 
                        elm.children('.arrow').removeClass('pagenav-open');
                        
                        //  Arrow click opens menu
                        setTimeout(function(){ 
                            
                            $('.pagenav-special-post .arrow').off().on('click', function() {
                                openMunuList(elm);
                            });
                        }, 500);
                    }
                        
                    
                    var thisElm;
                    $('.pagenav-special-post .arrow').off().on('click', function() {
                        
                        thisElm = $(this).parent('.pagenav-special-post');
                        openMunuList(thisElm);
                    });
                    
                    // Page list
                    $('.pagenav-special-post').hover(function() {
                        
                            thisElm = $(this);
                            openMunuList(thisElm);
                            
                    }, function() {
                        
                            closeMunuList(thisElm);
                    });
                }); // END (window).load

            })( jQuery );
            </script>
    <?php

}

//  Page navigation with a number bar
function pagination_numberbar() {
    global $wp_query;
 
    $total_pages = $wp_query->max_num_pages;
 
    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));
        echo '<div class="page-navigation numberbar" role="navigation">';
        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
        echo '</div> <!-- /END .page-navigation -->';
    }
}

// Special page nav: a collapsable page list
function pagenav_special_post() {
    ?>
    <div class="pagenav-outerwrap pagenav-special-post">
        <div class="pagenav-wrap">
            <h3>Where to next?</h3>
            <div class="pagenav-holder">
                <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
            </div>
         </div> <!-- /END .pagenav-wrap --> 
         <div class="icon-long-arrow-down"></div>
    </div> <!-- /END .pagenav-outerwrap -->
     <script>
            (function($) {
                $(document).ready(function(){
                $('.pagenav-special-post').hover(function() {
                    $(this).children('.pagenav-wrap').addClass('pagenav-open');
                    $(this).children('.arrow').addClass('pagenav-open');
                    }, function() {
                       $(this).children('.pagenav-wrap').removeClass('pagenav-open'); 
                       $(this).children('.arrow').removeClass('pagenav-open');
                    });
                });
                
            })( jQuery );
            </script>
   
    <?php
    
}
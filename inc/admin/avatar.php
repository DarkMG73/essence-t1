<?php

/* Custom Default Avatar */
function glassinteractive_new_avatar($avatar_defaults){
    
    $avatar_url                 =  get_template_directory_uri() . '/assets/images/default_avatar7.png';

    $new_avatar_defaults[$avatar_url]      = 'Essence T1 Avatar';

    $new_avatar_defaults = array_merge($new_avatar_defaults, $avatar_defaults);

    return $new_avatar_defaults;
}
add_filter( 'avatar_defaults', 'glassinteractive_new_avatar' );

<?php

/* Custom Default Avatar */
function gi_new_avatar($avatar_defaults){
    
    $avatar_url                 =  get_template_directory_uri() . '/assets/images/default_avatar7.png';

    $new_avatar_defaults[$avatar_url]      = 'Default EssenceTheme Avatar';

    $new_avatar_defaults = array_merge($new_avatar_defaults, $avatar_defaults);

    return $new_avatar_defaults;
}
add_filter( 'avatar_defaults', 'gi_new_avatar' );

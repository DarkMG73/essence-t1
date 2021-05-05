<?php

add_action( 'tgmpa_register', 'gi_register_required_plugins' );

function gi_register_required_plugins(){
  $config               =   [];
  $plugins              =   [
    // [
    //   'name'            =>  'Adsense WP Quads',
    //   'slug'            =>  'quick-adsense-reloaded',
    //   'required'        =>  false
    // ],

    [
      'name'            =>  'BuddyPress',
      'slug'            =>  'buddypress',
      'required'        =>  false
    ],
  ];
  
  tgmpa( $plugins, $config );
}


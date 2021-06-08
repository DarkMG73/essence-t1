<?php

add_action( 'tgmpa_register', 'gi_register_required_plugins' );

function gi_register_required_plugins(){
  $config               =   [];
  $plugins              =   [

    [
      'name'            =>  'JetPack',
      'slug'            =>  'jetpack',
      'required'        =>  false
    ],

    [
      'name'            =>  'BuddyPress',
      'slug'            =>  'buddypress',
      'required'        =>  false
    ],

    [
      'name'            =>  'Sassy Social Share',
      'slug'            =>  'sassy-social-share',
      'required'        =>  false
    ],

  ];
  
  tgmpa( $plugins, $config );
}


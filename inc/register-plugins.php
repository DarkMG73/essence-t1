<?php

add_action( 'tgmpa_register', 'glassinteractive_register_required_plugins' );

function glassinteractive_register_required_plugins(){
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


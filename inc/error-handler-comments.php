<?php
// Add custom 'die' handler to avoid the very plain default WP error page
function glassinteractive_custom_die_handler($message, $title='', $args=array()) {
$errorTemplate = get_theme_root().'/'.get_template().'/commenterror.php';
if(!is_admin() && file_exists($errorTemplate)) {
    $defaults = array( 'response' => 500 );
    $r = wp_parse_args($args, $defaults);
    $have_gettext = function_exists('__');
    if ( function_exists( 'is_wp_error' ) && is_wp_error( $message ) ) {
        if ( empty( $title ) ) {
            $error_data = $message->get_error_data();
            if ( is_array( $error_data ) && isset( $error_data['title'] ) )
                $title = $error_data['title'];
        }
        $errors = $message->get_error_messages();
        switch ( count( $errors ) ) :
        case 0 :
            $message = '';
            break;
        case 1 :
            $message = "<p>{$errors[0]}</p>";
            break;
        default :
            $message = "<ul>\n\t\t<li>" . join( "</li>\n\t\t<li>", $errors ) . "</li>\n\t</ul>";
            break;
        endswitch;
    } elseif ( is_string( $message ) ) {
        $message = "<p>$message</p>";
    }
    if ( isset( $r['back_link'] ) && $r['back_link'] ) {
        $back_text = $have_gettext? __('&laquo; Back', 'essence-t1') : __('&laquo; Back', 'essence-t1');
        $message .= "\n<p><a href='javascript:history.back()'>$back_text</a></p>";
    }
    if ( empty($title) )
        $title = $have_gettext ? __('WordPress &rsaquo; Error', 'essence-t1') : __('WordPress &rsaquo; Error', 'essence-t1');
    require_once($errorTemplate);
    die();
} else {
    _default_wp_die_handler($message, $title, $args);
}

}
function get_glassinteractive_custom_die_handler() {
return 'glassinteractive_custom_die_handler';
}
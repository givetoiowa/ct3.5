<?php
/**
 *  Functions file for Common 3.5 Home WP Template
 */

add_theme_support( 'custom-background', array(
		// Let WordPress know what our default background color is.
		// This is dependent on our current color scheme.
		'default-color' => 'efefef',
	) );

// set up menus
register_nav_menu( 'primary_navigation', __( 'Primary Menu' ) );
register_nav_menu( 'press_navigation', __( 'Press Menu' ) );

// register require.js
wp_register_script( 'require-js', get_stylesheet_directory_uri() . '/javascripts/vendor/requirejs/require.js' );
//  my script, main.js
wp_register_script( 'main-js', get_stylesheet_directory_uri() . '/javascripts/main.js', array( 'require-js' ), '', true);
//  Add the WP_DIRECTORY object directory.path to the script main-js
//  note that `directory` is the object, and `path` is the object's property.
$WP_DIRECTORY = array( 'path' => get_stylesheet_directory_uri() . '/javascripts' );
wp_localize_script( 'main-js', 'directory', $WP_DIRECTORY );

// This theme uses post thumbnails
	add_theme_support( 'post-thumbnails' );

//PRESS KIT SHORTCODES
function fifm_press () {
    return '
        <a href="http://www.uifoundation.org/press/kit/fifm">Press Kit</a>
    ';
}

add_shortcode('fifm', 'fifm_press');

function wivr_press () {
    return '
        <a href="http://www.uifoundation.org/press/kit/wivr">Press Kit</a>
    ';
}

add_shortcode('wivr', 'wivr_press');

function wynn_press () {
    return '
        <a href="http://www.uifoundation.org/press/kit/wynn">Press Kit</a>
    ';
}

add_shortcode('wynn', 'wynn_press');

// brand login screen
function brand_login() { 
    echo '<style type="text/css">';
    echo 'h1 a { background-image:url('.get_bloginfo('template_directory').'/uif_login_logo.png) !important; }';
    echo '</style>';
}
add_action('login_head', 'brand_login');

//brand admin screen
function brand_admin() {
    echo '<style type="text/css">';
    echo '#header-logo { background-image: url('.get_bloginfo('template_directory').'/uif_logo.gif) !important;';
    echo '</style>';
}

add_action('admin_head', 'brand_admin');

?>
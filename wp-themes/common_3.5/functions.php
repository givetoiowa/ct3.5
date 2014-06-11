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

function mytheme_addmenus() {
    register_nav_menus(
        array(
            'site_nav' => 'Site Menu',
        )
    );
}
add_action( 'init', 'mytheme_addmenus' );

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

//SIDEBAR WIDGETS

if ( function_exists('register_sidebar') ){
    register_sidebar(array(
        'name' => 'Main Sidebar',
        'before_widget' => '<div class="ten columns centered">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
}
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

// AREA CONTACT INFORMATION

function area_contact ($atts) {
    // Extract function attributes from shortcode
    extract( shortcode_atts( array(
        'name' => 'default',
        'sorttype' => 'default',
        'nonlead' => 'false'
    ), $atts ) );
    // if $atts['nonlead'] unset set it to false (allows field to be optional in shortcode)
    if(!isset($atts['nonlead'])){
        $atts['nonlead'] = 'false';
    }

    // Build error message in case attributes aren't entered
    $errorMsg = "
		<div class='ten columns centered contact-fix'>
			<div class='panel'>
				<p><b>For more information</b>, please contact the Foundation at the Levitt Center for University Advancement,
																					 1 West Park Road,
																					 Iowa City, IA 52244,
																					 (800) 648-6973 or (319) 335-3305.</p>
			</div>
		</div>
		";

    // Make sure attributes were entered with shortcode. If not, return general contact info
    if (is_string($atts)) {
        return $errorMsg;
    } elseif (!array_key_exists('name', $atts) or !array_key_exists('sorttype', $atts)) {
        return $errorMsg;
    } else {
        // Build query and send it to the database
        $tableName = 'staffdir_' . strtolower($atts['sorttype']);
        $query = ($atts['nonlead'] == 'false') ? "SELECT `sorttype`, `name`, `title`, `email`, `phone` FROM $tableName WHERE `name` = ? AND `lead` = 1" : "SELECT `sorttype`, `name`, `title`, `email`, `phone` FROM $tableName WHERE `name` = ?";

        // Connect to MySQL database
        include 'db_connect.php';
        $con = new mysqli('sandboxuif.db.10188817.hostedresource.com', 'sandboxuif', "edHinkel@11", "sandboxuif");
        if ($con->connect_error) {
            die('Could not connect establish a connection with the database.');
        }
        // Proper prepared query order: prepare -> bind_param -> execute -> store_result -> bind_result -> fetch
        $stmt = $con->prepare($query);
        $stmt->bind_param("s", $atts['name']);
        $stmt->execute();
        $stmt->store_result();
        $columns = array('sorttype', 'name', 'title', 'email', 'phone');
        $query_result = fetchPreparedResults($stmt, $columns);
        // close statement and db connection
        $stmt->close() ;
        $con->close() ;

        return  "
			<div class='ten columns centered contact-fix'>
				<div class='panel'>
					<p><b>For more information</b>, contact: ".$query_result['name'].", ".$query_result['title'].", ".$query_result['sorttype']." <a href='mailto:".$query_result['email']."'>".$query_result['email']."</a> ".$query_result['phone']."</p>
				</div>
			</div>
			";

    }
}



/**
 * Function fetchPreparedResults used to fetch an unknown number of rows from a db using prepared statements
 * @param $stmt is statement object from prepared query
 * @param $columns is an array of the column names that are slected from in the query
 * returns array( 0 => array ('col name 1' => value, ..., 'col name n' => value), ... ,  n => array('col name 1' => value, ...))
 */
function fetchPreparedResults($stmt, $columns){
    $data = array() ; // Array that accepts the data.
    $params = array() ; // Parameter array passed to 'bind_result()'

    foreach($columns as $col_name){
        // 'fetch()' will assign fetched value to the variable '$data[$col_name]'
        $params[] =& $data[$col_name] ;
    }
    $res = call_user_func_array(array($stmt, "bind_result"), $params);
    // if success fetch results
    if(!$res){
        $query_result =  "bind_result() failed: " . $db->error . "\n" ;
    } else {
        $i=0;
        // fetch all rows of result and store in $query_result
        while($stmt->fetch()){
            $query_result = array();
            foreach($data as $key=>$value){
                $query_result[$key] = $value;
                $i++;
            }
        }
    }
    return $query_result;
}


add_shortcode('area', 'area_contact');


//IMPACT
function impact_contact () {
    return '
<div class="ten columns centered">
	<div class="panel">
		<p><b>For more information</b>, contact: Derek Pendergast, Director of Development, Special University Initiatives Major Gifts <a href="mailto:derek-pendergast@uiowa.edu">derek-pendergast@uiowa.edu</a> (319) 467-3684</p>
	</div>
</div>
';
}

add_shortcode('impact', 'impact_contact');


?>
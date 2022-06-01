<?php
/**
 * Main Functions File.
 *
 * @package Byte Ki Duniya
*/

// Define CONSTANT for plugin directory url.
if ( ! defined( 'THEME_DIR_URL' ) ) {
    define( 'THEME_DIR_URL', get_template_directory_uri() );
}

/************** Function using for removing excerpt dots **************/
function bkd_remove_excerpt_dots($content) {
	return str_replace('[&hellip;]', '...', $content);
}
add_filter('the_excerpt', 'bkd_remove_excerpt_dots');

/************** Adding Files **************/
require_once 'inc/enqueue-styles.php';
require_once 'inc/add-theme-supports.php';
require_once 'inc/custom-post-types.php';

/************** Adding kirki sections and fields files **************/
require_once 'kirki/kirki-sections.php';
require_once 'kirki/kirki-fields.php';

?>
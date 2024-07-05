<?php
/**
 * Fancy Book Cover
 *
 * @package           FancyBookCover
 * @author            Blocktech Lab
 *
 * Plugin Name:       Fancy Book Cover
 * Plugin URI:        https://github.com/blocktech-lab/fancy-book-cover
 * Description:       The Fancy Book Cover block showcases a realistic 3D rendering of a book cover, featuring captivating animations triggered by mouse hover interactions.
 * Version:           0.6.2
 * Requires at least: 5.9
 * Requires PHP:      7.0
 * Author:            Blocktech Lab
 * Author URI:        https://blocktech.dev
 * Text Domain:       fancy-book-cover
*/

// Prevent direct access to the plugin file.
defined( 'ABSPATH' ) || exit;

// Define constants.
if ( ! defined( 'COVER_URL' ) ) :
    define( 'COVER_URL', untrailingslashit( plugin_dir_url( __FILE__ ) ) );
endif;
if ( ! defined( 'COVER_PATH' ) ) :
    define( 'COVER_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );
endif;

// Require resource files.
if ( ! class_exists( 'BL_Helper_v2' ) ) :
    require_once( COVER_PATH . '/inc/wp_bl_helpers.php' );
endif;
if ( ! class_exists( 'BL_Blocks' ) ) :
    require_once ( COVER_PATH . '/inc/wp_bl_blocks_helpers.php' );
endif;

/**
 * Require the file that creates the block and
 * load block translations in the editor.
 * @return void
 */
add_action('init', function () {
    require_once ( COVER_PATH . '/blocks/book/book_register.php' );
    wp_set_script_translations('block-fancy-book-cover-book-script', 'fancy-book-cover');
});

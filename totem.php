<?php
/**
 * Totem plugin
 *
 * Develop site-specific plugins for ClassicPress and WordPress.
 *
 * @package  Totem
 * @category Core
 * @since    1.0.0
 * @link     https://github.com/CCDzine-Builds/sitecore
 *
 * Plugin Name:       Totem
 * Plugin URI:        https://github.com/CCDzine-Builds/sitecore
 * Description:       Develop site-specific plugins for ClassicPress and WordPres.
 * Version:           1.0.0
 * UpdateURI:         https://github.com/CCDzine-Builds/releases/latest/download/sitecore.zip
 * Author:            Controlled Chaos Design
 * Author URI:        https://github.com/CCDzine-Builds
 * Text Domain:       sitecore
 * Domain Path:       /languages
 * Requires PHP:      7.4
 * Requires at least: 4.9
 * Requires CP        2.0.0
 * License            Nope
 * License URI        DISCLAIMER.md
 * Tested up to:      7.0
 * Network:           true
 */

namespace Totem;

// Restrict direct access.
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

/**
 * Constant: Plugin base name
 *
 * @since 1.0.0
 * @var   string The base name of this plugin file.
 */
define( 'TMG_BASENAME', plugin_basename( __FILE__ ) );

// Maybe get plugin file to check for other plugins.
$get_plugin = ABSPATH . 'wp-admin/includes/plugin.php';
if ( ! function_exists( 'is_plugin_active' ) && file_exists( $get_plugin ) ) {
	include_once( $get_plugin );
}

/**
 * Load text domain
 *
 * @since  1.0.0
 * @return void
 */
function load_plugin_textdomain() {

	// Standard plugin installation.
	\load_plugin_textdomain(
		'sitecore',
		false,
		dirname( TMG_BASENAME ) . '/languages'
	);

	// If this plugin is in the must-use plugins directory.
	\load_muplugin_textdomain(
		'sitecore',
		dirname( TMG_BASENAME ) . '/languages'
	);
}
add_action( 'init', __NAMESPACE__ . '\load_plugin_textdomain' );

/**
 * Plugin page link
 *
 * Adds a link to the plugin's action links
 * under the plugin description.
 *
 * Currently links to the website management page.
 * Change URL as needed. Remove conditions for
 * options as needed.
 *
 * @param  array $links Default plugin links on the 'Plugins' admin page.
 * @since  1.0.0
 * @return array Returns an array of links.
 */
function plugin_page_link( $links ) {

	$page = '';
	if ( get_option( 'enable_sample_files', false ) ) {
		$page = 'index.php?page=manage-website';
	} elseif ( get_option( 'enable_custom_dashboard', false ) ) {
		$page = 'index.php';
	} else {
		return $links;
	}

	$url  = apply_filters( 'tmg_plugin_page_link_url', $page );
	$html = sprintf(
			'<a href="%s" class="tmg-plugin-page-link">%s</a>',
			esc_url( admin_url( $url ) ),
			__( 'Help', 'sitecore' )
	);
	$link = [ $html ];

	return array_merge( $link, $links );
}
add_action( 'plugins_loaded', function() {
	add_filter( 'plugin_action_links_' . TMG_BASENAME, __NAMESPACE__ . '\plugin_page_link' );
} );

// Get plugin configuration file.
require plugin_dir_path( __FILE__ ) . 'config.php';

/**
 * Activation & deactivation
 *
 * The activation & deactivation methods run here before the check
 * for PHP version which otherwise disables the functionality of
 * the plugin.
 */
include_once TMG_PATH . 'includes/activate/activate.php';
include_once TMG_PATH . 'includes/activate/deactivate.php';

/**
 * Register the activation & deactivation hooks
 *
 * The namespace of this file must remain escaped by use of the
 * backslash (`\`) prepending the activation hooks and corresponding
 * functions.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
\register_activation_hook( __FILE__, __NAMESPACE__ . '\activate_plugin' );
\register_deactivation_hook( __FILE__, __NAMESPACE__ . '\deactivate_plugin' );

/**
 * Plugin activation
 *
 * The code that runs during plugin activation.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function activate_plugin() {

	// Update options.
	Activate\options();
}

/**
 * Plugin deactivation
 *
 * The code that runs during plugin deactivation.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function deactivate_plugin() {

	// Update options.
	Deactivate\options();
}

/**
 * Disable plugin for PHP version
 *
 * Stop here if the minimum PHP version is not met.
 * Prevents breaking sites running older PHP versions.
 *
 * A notice is added to the plugin row on the Plugins
 * screen as a more elegant and more informative way
 * of disabling the plugin than putting the PHP minimum
 * in the plugin header, which activates a die() message.
 * However, the Requires PHP tag is included in the
 * plugin header with a minimum of version 5.4
 * because of the namespaces.
 *
 * @since  1.0.0
 */
if ( ! min_php_version() ) {

	// Add a notice to the plugin page header.
	Activate\get_php_notice();

	// Add a notice to the plugin row.
	Activate\get_row_notice();

	// Stop here.
	return;
}

/**
 * Disable plugin for wordpress[dot]com
 *
 * Personal protest of Matt Mullenweg.
 * Remove if you feel otherwise.
 *
 * This renders the plugin useless when activated
 * for sites hosted by wordpress[dot]com.
 *
 * @since  1.0.0
 */
if ( IS_WPCOM ) {

	// Add a notice to the plugin page header.
	Activate\megalomattic();

	// Stop here.
	return;
}

// Get the plugin initialization file.
require_once TMG_PATH . 'init.php';

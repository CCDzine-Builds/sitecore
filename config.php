<?php
/**
 * Plugin configuration
 *
 * The constants defined here do not override any default behavior
 * or default user interfaces. However, the corresponding behavior
 * can be overridden in the system config file (e.g. `wp-config`,
 * `app-config` ).
 *
 * The reason for using constants in the config file rather than
 * in a settings file is to prevent site administrators wrongly
 * or incorrectly configuring the site built by developers.
 *
 * @package    Totem
 * @subpackage Configuration
 * @category   Core
 * @since      1.0.0
 */

namespace Totem;

// Alias namespaces.
use Totem\Classes as Classes;

// Restrict direct access.
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

/**
 * Constant: Minimum PHP version
 *
 * @since 1.0.0
 * @var   string The minimum required PHP version.
 */
define( 'TMG_MIN_PHP_VERSION', '7.4' );

/**
 * Function: Minimum PHP version
 *
 * Checks the PHP version running on the current host
 * against the minimum version required by this plugin.
 *
 * @since  1.0.0
 * @return boolean Returns false if the minimum is not met.
 */
function min_php_version() {

	if ( version_compare( phpversion(), TMG_MIN_PHP_VERSION, '<' ) ) {
		return false;
	}
	return true;
}

/**
 * Constant: WordPress hosted
 *
 * @since 1.0.0
 * @var   boolean False when not wordpress[dot]com host.
 */
if ( ! defined( 'IS_WPCOM' ) ) {
	define( 'IS_WPCOM', false );
}

/**
 * Constant: Plugin version
 *
 * Keeping the version at 1.0.0 as this is a starter plugin but
 * you may want to start counting as you develop for your use case.
 *
 * Remember to find and replace the `@version x.x.x` in docblocks.
 *
 * @since 1.0.0
 * @var   string The latest plugin version.
 */
define( 'TMG_VERSION', '1.0.0' );

/**
 * Plugin name
 *
 * @since 1.0.0
 * @var   string The name of the plugin.
 */
if ( ! defined( 'TMG_NAME' ) ) {
	define( 'TMG_NAME', __( 'Totem', 'sitecore' ) );
}

/**
 * Constant: Plugin folder path
 *
 * @since 1.0.0
 * @var   string The filesystem directory path (with trailing slash)
 *               for the plugin __FILE__ passed in.
 */
define( 'TMG_PATH', plugin_dir_path( __FILE__ ) );

/**
 * Constant: Plugin folder URL
 *
 * @since 1.0.0
 * @var   string The URL directory path (with trailing slash)
 *               for the plugin __FILE__ passed in.
 */
define( 'TMG_URL', plugin_dir_url( __FILE__ ) );

/**
 * PHP version check
 *
 * Stop here if the minimum PHP version is not met.
 * The following array definitions wi break sites
 * running older PHP versions.
 *
 * @since  1.0.0
 * @return void
 */
if ( ! min_php_version() ) {
	return;
}

/**
 * Constant: Plugin configuration.
 *
 * @since 1.0.0
 * @var   array Plugin identification, support, settings.
 */
if ( ! defined( 'TMG_CONFIG' ) ) {

	define( 'TMG_CONFIG', [

		/**
		 * Plugin name
		 *
		 * Remember to replace in the plugin header.
		 *
		 * @since 1.0.0
		 * @var   string The name of the plugin.
		 */
		'name' => TMG_NAME,

		/**
		 * Companion theme
		 *
		 * @since 1.0.0
		 * @var   string Slug of the companion theme.
		 */
		'theme' => 'frontcore',

		/**
		 * Companion theme prefix
		 *
		 * The prefix used for options by the companion theme.
		 *
		 * @since 1.0.0
		 * @var   string Slug of the companion theme.
		 */
		'theme_prefix' => 'fct_',

		/**
		 * Developer name
		 *
		 * @since 1.0.0
		 * @var   string The name of the developer/agency.
		 */
		'dev_name' => __( 'Controlled Chaos', 'sitecore' ),

		/**
		 * Developer URL
		 *
		 * @since 1.0.0
		 * @var   string The URL of the developer/agency.
		 */
		'dev_url' => esc_url( 'https://github.com/CCDzine-Builds' ),

		/**
		 * Developer email
		 *
		 * @since 1.0.0
		 * @var   string The URL of the developer/agency.
		 */
		'dev_email' => sanitize_email( '' ),

		/**
		 * Plugin URL
		 *
		 * @since 1.0.0
		 * @var   string The URL of the plugin.
		 */
		'plugin_url' => esc_url( 'https://github.com/CCDzine-Builds/sitecore' ),

		/**
		 * Allow Site Health
		 *
		 * @since 1.0.0
		 * @var   boolean Whether to allow the Site Health feature.
		 */
		'site_health' => false,

		/**
		 * Allow Customizer
		 *
		 * @since 1.0.0
		 * @var   boolean Whether to allow the Customizer.
		 */
		'customizer' => true,

		/**
		 * User admin color picker
		 *
		 * @since 1.0.0
		 * @var   boolean Whether to allow admin color pickers.
		 */
		'color_picker' => true
	] );
}

/**
 * Companion theme
 *
 * @since 1.0.0
 * @var   string Slug of the companion theme.
 */
if ( ! defined( 'TMG_THEME' ) ) {
	define( 'TMG_THEME', TMG_CONFIG['theme'] );
}

/**
 * Companion theme prefix
 *
 * @since 1.0.0
 * @var   string Slug of the companion theme.
 */
if ( ! defined( 'TMG_THEME_PREFIX' ) ) {
	define( 'TMG_THEME_PREFIX', TMG_CONFIG['theme_prefix'] );
}

/**
 * Developer name
 *
 * @since 1.0.0
 * @var   string The name of the developer/agency.
 */
if ( ! defined( 'TMG_DEV_NAME' ) ) {
	define( 'TMG_DEV_NAME', TMG_CONFIG['dev_name'] );
}

/**
 * Developer URL
 *
 * @since 1.0.0
 * @var   string The URL of the developer/agency.
 */
if ( ! defined( 'TMG_DEV_URL' ) ) {
	define( 'TMG_DEV_URL', TMG_CONFIG['dev_url'] );
}

/**
 * Developer email
 *
 * @since 1.0.0
 * @var   string The URL of the developer/agency.
 */
if ( ! defined( 'TMG_DEV_EMAIL' ) ) {
	define( 'TMG_DEV_EMAIL', TMG_CONFIG['dev_email'] );
}

/**
 * Plugin URL
 *
 * @since 1.0.0
 * @var   string The URL of the plugin.
 */
if ( ! defined( 'TMG_PLUGIN_URL' ) ) {
	define( 'TMG_PLUGIN_URL', TMG_CONFIG['plugin_url'] );
}

/**
 * Allow Site Health
 *
 * @since 1.0.0
 * @var   boolean Whether to allow the Site Health feature.
 */
if ( ! defined( 'TMG_DISABLE_SITE_HEALTH' ) ) {
	define( 'TMG_DISABLE_SITE_HEALTH', TMG_CONFIG['site_health'] );
}

/**
 * Allow Customizer
 *
 * @since 1.0.0
 * @var   boolean Whether to allow the Customizer.
 */
if ( ! defined( 'TMG_ALLOW_CUSTOMIZER' ) ) {
	define( 'TMG_ALLOW_CUSTOMIZER', TMG_CONFIG['customizer'] );
}

/**
 * User admin color picker
 *
 * @since 1.0.0
 * @var   boolean Whether to allow admin color pickers.
 */
if ( ! defined( 'TMG_ALLOW_ADMIN_COLOR_PICKER' ) ) {
	define( 'TMG_ALLOW_ADMIN_COLOR_PICKER', TMG_CONFIG['color_picker'] );
}

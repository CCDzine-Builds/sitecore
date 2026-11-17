<?php
/**
 * Initiate vendor classes
 *
 * @package    Totem
 * @subpackage Includes
 * @category   Vendor
 * @since      1.0.0
 */

namespace Totem\Vendor;

use Totem\{
	Classes\Vendor as Vendor_Class,
	Compatibility  as Compat
};

// Restrict direct access.
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

/**
 * Execute functions
 *
 * @since  1.0.0
 * @return void
 */
function setup() {

	// Return namespaced function.
	$ns = function( $function ) {
		return __NAMESPACE__ . "\\$function";
	};

	add_action( 'plugins_loaded', $ns( 'acf' ) );
}

/**
 * Advanced Custom Fields
 *
 * @since  1.0.0
 * @return void
 */
function acf() {

	$tmg_acf = new Vendor_Class\Plugin_ACF;
	$tmg_acf->include();
}

<?php
/**
 * Sample plugin compatibility
 *
 * @package    Totem
 * @subpackage Classes
 * @category   Vendor
 * @since      1.0.0
 */

namespace Totem\Classes\Vendor;

// Restrict direct access.
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

class Plugin_Sample extends Plugin {

	/**
	 * Constructor method
	 *
	 * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {

		$paths = [
			'bundled_dir'    => 'sample',
			'bundled_file'   => 'sample.php',
			'installed_dir'  => 'sample',
			'installed_file' => 'sample.php',
			'upgrade_dir'    => 'sample-pro',
			'upgrade_file'   => 'sample.php'
		];

		parent :: __construct(
			$paths, // Plugin directories & files.
			true, // Allow installed plugin.
			true // Allow upgrade plugin.
			'sample' // Plugin hook name.
		);
	}

	/**
	 * Use bundled plugin
	 *
	 * @since  1.0.0
	 * @access public
	 * @return boolean Default should be true. False only
	 *                 if defined as such elsewhere.
	 */
	public function use_bundled() {

		// Override constant.
		if ( defined( 'TMG_USE_SAMPLE_PLUGIN' ) && false == TMG_USE_SAMPLE_PLUGIN ) {
			return false;
		}
		return true;
	}
}

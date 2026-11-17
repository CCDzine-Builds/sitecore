<?php
/**
 * Register media type taxonomy
 *
 * @package    Totem
 * @subpackage Classes
 * @category   Core
 * @since      1.0.0
 */

namespace Totem\Classes\Core;

// Restrict direct access.
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

class Register_Media_Type extends Register_Tax {

	/**
	 * Constructor method
	 *
	 * @see Register_Tax::__construct()
	 *
	 * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {

		$types = [
			'attachment'
		];

		$labels = [
			'singular'    => __( 'media type', 'totem' ),
			'plural'      => __( 'media types', 'totem' ),
			'description' => __( 'Organize the media library by file types.', 'totem' ),
			'menu_icon'   => 'dashicons-tag'
		];

		$options = [];

		// Run the parent constructor method.
		parent :: __construct(
			'media_type',
			$types,
			$labels,
			$options,
			10
		);
	}
}

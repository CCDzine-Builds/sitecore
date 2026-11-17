<?php
/**
 * Network admin settings sections
 *
 * @package    Totem
 * @subpackage Classes
 * @category   Settings
 * @since      1.0.0
 */

namespace Totem\Classes\Settings;

class Settings_Sections_Network_Admin extends Settings_Sections {

	/**
	 * Constructor method
	 *
	 * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {

		$sections = [
			[
				'id'       => 'tmg-settings-section-network-admin-menu',
				'title'    => __( 'Menu Settings', 'totem' ),
				'callback' => '',
				'page'     => 'options-admin',
				'args'     => [
					'before_section' => '',
					'after_section'  => '',
					'section_class'  => 'settings-section-network-admin-menu'
				]
			],
			[
				'id'       => 'tmg-settings-section-network-admin-dashboard',
				'title'    => __( 'Dashboard Settings', 'totem' ),
				'callback' => '',
				'page'     => 'options-admin',
				'args'     => [
					'before_section' => '',
					'after_section'  => '',
					'section_class'  => 'settings-section-network-admin-dashboard'
				]
			]
		];

		parent :: __construct(
			$sections
		);
	}
}

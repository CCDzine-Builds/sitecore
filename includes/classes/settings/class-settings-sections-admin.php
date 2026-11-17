<?php
/**
 * Admin settings sections
 *
 * @package    Totem
 * @subpackage Classes
 * @category   Settings
 * @since      1.0.0
 */

namespace Totem\Classes\Settings;

class Settings_Sections_Admin extends Settings_Sections {

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
				'id'       => 'tmg-settings-section-admin-menu',
				'title'    => __( 'Menu Settings', 'sitecore' ),
				'callback' => '',
				'page'     => 'options-admin',
				'args'     => [
					'before_section' => '',
					'after_section'  => '',
					'section_class'  => 'settings-section-admin-menu'
				]
			],
			[
				'id'       => 'tmg-settings-section-admin-dashboard',
				'title'    => __( 'Dashboard Settings', 'sitecore' ),
				'callback' => '',
				'page'     => 'options-admin',
				'args'     => [
					'before_section' => '',
					'after_section'  => '',
					'section_class'  => 'settings-section-admin-dashboard'
				]
			],
			[
				'id'       => 'tmg-settings-section-admin-forms',
				'title'    => __( 'Form Settings', 'sitecore' ),
				'callback' => '',
				'page'     => 'options-admin',
				'args'     => [
					'before_section' => '',
					'after_section'  => '',
					'section_class'  => 'settings-section-admin-forms'
				]
			],
			[
				'id'       => 'tmg-settings-section-admin-toolbar',
				'title'    => __( 'Toolbar Settings', 'sitecore' ),
				'callback' => '',
				'page'     => 'options-admin',
				'args'     => [
					'before_section' => '',
					'after_section'  => '',
					'section_class'  => 'settings-section-admin-toolbar'
				]
			],
			[
				'id'       => 'tmg-settings-section-admin-header',
				'title'    => __( 'Header Settings', 'sitecore' ),
				'callback' => '',
				'page'     => 'options-admin',
				'args'     => [
					'before_section' => '',
					'after_section'  => '',
					'section_class'  => 'settings-section-admin-header'
				]
			],
			[
				'id'       => 'tmg-settings-section-admin-users',
				'title'    => __( 'User Settings', 'sitecore' ),
				'callback' => '',
				'page'     => 'options-admin',
				'args'     => [
					'before_section' => '',
					'after_section'  => '',
					'section_class'  => 'settings-section-admin-users'
				]
			]
		];

		parent :: __construct(
			$sections
		);
	}
}

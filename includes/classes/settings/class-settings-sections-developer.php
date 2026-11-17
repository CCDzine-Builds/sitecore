<?php
/**
 * Developer settings sections
 *
 * @package    Totem
 * @subpackage Classes
 * @category   Settings
 * @since      1.0.0
 */

namespace Totem\Classes\Settings;

class Settings_Sections_Developer extends Settings_Sections {

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
				'id'       => 'tmg-options-developer',
				'title'    => '',
				'callback' => '',
				'page'     => 'developer-tools',
				'args'     => [
					'before_section' => '',
					'after_section'  => '',
					'section_class'  => 'options-developer'
				]
			],
			[
				'id'       => 'tmg-options-developer-content',
				'title'    => '',
				'callback' => '',
				'page'     => 'developer-tools',
				'args'     => [
					'before_section' => '',
					'after_section'  => '',
					'section_class'  => 'options-developer'
				]
			],
			[
				'id'       => 'tmg-options-developer-users-content',
				'title'    => '',
				'callback' => '',
				'page'     => 'developer-tools',
				'args'     => [
					'before_section' => '',
					'after_section'  => '',
					'section_class'  => 'options-developer-users'
				]
			]
		];

		parent :: __construct(
			$sections
		);
	}
}

<?php
/**
 * Network admin dashboard settings fields
 *
 * @package    Totem
 * @subpackage Classes
 * @category   Settings
 * @since      1.0.0
 */

namespace Totem\Classes\Settings;

class Settings_Fields_Network_Admin_Dashboard extends Settings_Fields {

	/**
	 * Constructor method
	 *
	 * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {

		$fields = [
			[
				'id'       => 'enable_custom_network_dashboard',
				'title'    => __( 'Custom Dashboard', 'totem' ),
				'page'     => 'options-admin',
				'section'  => 'tmg-settings-section-network-admin-dashboard',
				'type'     => 'checkbox',
				'args'     => [
					'description' => __( 'Check to replace the default dashboard with a custom dashboard for this network.', 'totem' ),
					'class'       => 'admin-field'
				]
			]
		];

		parent :: __construct(
			null,
			$fields
		);
	}

	/**
	 * Sanitize Custom Dashboard field
	 *
	 * @since  1.0.0
	 * @access public
	 * @return boolean
	 */
	public function enable_custom_network_dashboard_sanitize() {

		$option = get_site_option( 'enable_custom_network_dashboard', false );
		if ( true == $option ) {
			$option = true;
		} else {
			$option = false;
		}
		return apply_filters( 'tmg_enable_custom_network_dashboard', $option );
	}

	/**
	 * Custom Dashboard field callback
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enable_custom_network_dashboard_callback() {

		$fields   = $this->settings_fields;
		$order    = 0;
		$field_id = $fields[$order]['id'];
		$option   = $this->enable_custom_network_dashboard_sanitize();

		$html = sprintf(
			'<fieldset><legend class="screen-reader-text">%s</legend>',
			$fields[$order]['title']
		);
		$html .= sprintf(
			'<label for="%s">',
			$field_id
		);
		$html .= sprintf(
			'<input type="checkbox" id="%s" name="%s" value="1" %s /> %s',
			$field_id,
			$field_id,
			checked( 1, $option, false ),
			$fields[$order]['args']['description']
		);
		$html .= '</label></fieldset>';

		echo $html;
	}
}

<?php
/**
 * Admin menu settings fields
 *
 * @package    Totem
 * @subpackage Classes
 * @category   Settings
 * @since      1.0.0
 */

namespace Totem\Classes\Settings;

use function Totem\Core\platform_name;

class Settings_Fields_Admin_Menu extends Settings_Fields {

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
				'id'       => 'admin_menu_menus_top',
				'title'    => __( 'Navigation Link', 'totem' ),
				'page'     => 'options-admin',
				'section'  => 'tmg-settings-section-admin-menu',
				'type'     => 'checkbox',
				'args'     => [
					'description' => __( 'Check to make the link to the navigation menus screen a top-level menu entry.', 'totem' ),
					'label_for'   => 'admin_menu_menus_top',
					'class'       => 'admin-field'
				]
			],
			[
				'id'       => 'admin_menu_widgets_top',
				'title'    => __( 'Widgets Link', 'totem' ),
				'page'     => 'options-admin',
				'section'  => 'tmg-settings-section-admin-menu',
				'type'     => 'checkbox',
				'args'     => [
					'description' => __( 'Check to make the link to the widgets screen a top-level menu entry.', 'totem' ),
					'label_for'   => 'admin_menu_widgets_top',
					'class'       => 'admin-field'
				]
			],
			[
				'id'       => 'admin_menu_nav_blocks',
				'title'    => __( 'Navigation Blocks', 'totem' ),
				'page'     => 'options-admin',
				'section'  => 'tmg-settings-section-admin-menu',
				'type'     => 'checkbox',
				'args'     => [
					'description' => __( 'Check to show navigation blocks in the menu.', 'totem' ),
					'label_for'   => 'admin_menu_nav_blocks',
					'class'       => 'admin-field'
				]
			],
			[
				'id'       => 'admin_menu_reuse_blocks',
				'title'    => __( 'Reusable Blocks', 'totem' ),
				'page'     => 'options-admin',
				'section'  => 'tmg-settings-section-admin-menu',
				'type'     => 'checkbox',
				'args'     => [
					'description' => __( 'Check to show reusable blocks in the menu.', 'totem' ),
					'label_for'   => 'admin_menu_reuse_blocks',
					'class'       => 'admin-field'
				]
			],
			[
				'id'       => 'admin_menu_custom_order',
				'title'    => __( 'Custom Order', 'totem' ),
				'page'     => 'options-admin',
				'section'  => 'tmg-settings-section-admin-menu',
				'type'     => 'checkbox',
				'args'     => [
					'description' => __( 'Check to use the custom menu order.', 'totem' ),
					'label_for'   => 'admin_menu_custom_order',
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
	 * Sanitize Navigation Link field
	 *
	 * @since  1.0.0
	 * @access public
	 * @return boolean
	 */
	public function admin_menu_menus_top_sanitize() {

		$option = get_option( 'admin_menu_menus_top', true );
		if ( true == $option ) {
			$option = true;
		} else {
			$option = false;
		}
		return apply_filters( 'tmg_admin_menu_menus_top', $option );
	}

	/**
	 * Sanitize Widgets Link field
	 *
	 * @since  1.0.0
	 * @access public
	 * @return boolean
	 */
	public function admin_menu_widgets_top_sanitize() {

		$option = get_option( 'admin_menu_widgets_top', true );
		if ( true == $option ) {
			$option = true;
		} else {
			$option = false;
		}
		return apply_filters( 'tmg_admin_menu_widgets_top', $option );
	}

	/**
	 * Sanitize Navigation Blocks field
	 *
	 * @since  1.0.0
	 * @access public
	 * @return boolean
	 */
	public function admin_menu_nav_blocks_sanitize() {

		$option = get_option( 'admin_menu_nav_blocks', false );
		if ( true == $option ) {
			$option = true;
		} else {
			$option = false;
		}
		return apply_filters( 'tmg_admin_menu_nav_blocks', $option );
	}

	/**
	 * Sanitize Reusable Blocks field
	 *
	 * @since  1.0.0
	 * @access public
	 * @return boolean
	 */
	public function admin_menu_reuse_blocks_sanitize() {

		$option = get_option( 'admin_menu_reuse_blocks', false );
		if ( true == $option ) {
			$option = true;
		} else {
			$option = false;
		}
		return apply_filters( 'tmg_admin_menu_reuse_blocks', $option );
	}

	/**
	 * Sanitize Custom Order field
	 *
	 * @since  1.0.0
	 * @access public
	 * @return boolean
	 */
	public function admin_menu_custom_order_sanitize() {

		$option = get_option( 'admin_menu_custom_order', true );
		if ( true == $option ) {
			$option = true;
		} else {
			$option = false;
		}
		return apply_filters( 'tmg_admin_menu_custom_order', $option );
	}

	/**
	 * Navigation Link field callback
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function admin_menu_menus_top_callback() {

		if ( ! current_theme_supports( 'menus' ) ) {
			return;
		}

		$fields   = $this->settings_fields;
		$order    = 0;
		$field_id = $fields[$order]['id'];
		$option   = $this->admin_menu_menus_top_sanitize();

		$html = sprintf(
			'<label for="%s">',
			$field_id
		);
		$html .= sprintf(
			'<input type="checkbox" id="%s" name="%s" value="1" %s /> <span>%s</span>',
			$field_id,
			$field_id,
			checked( 1, $option, false ),
			$fields[$order]['args']['description']
		);
		$html .= '</label>';

		echo $html;
	}

	/**
	 * Menus Link field callback
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function admin_menu_widgets_top_callback() {

		if ( ! current_theme_supports( 'widgets' ) ) {
			return;
		}

		$fields   = $this->settings_fields;
		$order    = 1;
		$field_id = $fields[$order]['id'];
		$option   = $this->admin_menu_widgets_top_sanitize();

		$html = sprintf(
			'<label for="%s">',
			$field_id
		);
		$html .= sprintf(
			'<input type="checkbox" id="%s" name="%s" value="1" %s /> <span>%s</span>',
			$field_id,
			$field_id,
			checked( 1, $option, false ),
			$fields[$order]['args']['description']
		);
		$html .= '</label>';

		echo $html;
	}

	/**
	 * Navigation Blocks field callback
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function admin_menu_nav_blocks_callback() {

		$fields   = $this->settings_fields;
		$order    = 2;
		$field_id = $fields[$order]['id'];
		$option   = $this->admin_menu_nav_blocks_sanitize();

		if ( get_option( 'admin_menu_menus_top', true ) ) {
			$parent = __( 'Navigation', 'totem' );
		} else {
			$parent = __( 'Appearance', 'totem' );
		}

		$html = sprintf(
			'<label for="%s">',
			$field_id
		);
		$html .= sprintf(
			'<input type="checkbox" id="%s" name="%s" value="1" %s /> <span>%s</span>',
			$field_id,
			$field_id,
			checked( 1, $option, false ),
			$fields[$order]['args']['description']
		);
		$html .= '</label>';
		$html .= sprintf(
			__( '<p class="description">Adds a link under %s in the admin menu.</p>', 'totem' ),
			$parent
		);

		echo $html;
	}

	/**
	 * Reusable Blocks field callback
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function admin_menu_reuse_blocks_callback() {

		$fields   = $this->settings_fields;
		$order    = 3;
		$field_id = $fields[$order]['id'];
		$option   = $this->admin_menu_reuse_blocks_sanitize();

		$html = sprintf(
			'<label for="%s">',
			$field_id
		);
		$html .= sprintf(
			'<input type="checkbox" id="%s" name="%s" value="1" %s /> <span>%s</span>',
			$field_id,
			$field_id,
			checked( 1, $option, false ),
			$fields[$order]['args']['description']
		);
		$html .= '</label>';
		$html .= sprintf(
			'<p class="description">%s</p>',
			__( 'Adds a link under Content in the admin menu.', 'totem' )
		);

		echo $html;
	}

	/**
	 * Custom Order field callback
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function admin_menu_custom_order_callback() {

		$fields   = $this->settings_fields;
		$order    = 4;
		$field_id = $fields[$order]['id'];
		$option   = $this->admin_menu_custom_order_sanitize();

		$html = sprintf(
			'<label for="%s">',
			$field_id
		);
		$html .= sprintf(
			'<input type="checkbox" id="%s" name="%s" value="1" %s /> <span>%s</span>',
			$field_id,
			$field_id,
			checked( 1, $option, false ),
			$fields[$order]['args']['description']
		);
		$html .= '</label>';

		echo $html;
	}
}

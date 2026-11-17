<?php
/**
 * ACF custom dashboard tabs
 *
 * Used to replace the tabbed content on
 * the custom user dashboard.
 *
 * @package    Totem
 * @subpackage Includes
 * @category   Fields
 * @since      1.0.0
 */

namespace Totem\Fields\ACF;

// Restrict direct access.
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

acf_add_local_field_group( [
	'key'    => 'group_6436262911e79',
	'title'  => __( 'Dashboard Tabs', 'totem' ),
	'fields' => [
		[
			'key'               => 'field_6436cea4f97b0',
			'label'             => null,
			'name'              => '',
			'type'              => 'message',
			'instructions'      => __( '', 'totem' ),
			'required'          => 0,
			'conditional_logic' => 0,
			'wrapper'           => [
				'width' => '',
				'class' => 'acf-options-page-subtitle',
				'id'    => ''
			],
			'message'   => __( 'Used to replace the tabbed content on the custom user dashboard.', 'totem' ),
			'new_lines' => 'wpautop',
			'esc_html'  => 0,
		],
		[
			'key'               => 'field_643733e0b9da6',
			'label'             => __( 'Tabs Display', 'totem' ),
			'name'              => 'dashboard_content_tabs_active',
			'type'              => 'true_false',
			'instructions'      => __( 'Individual tabs can be deactivated. If tabs display is inactive, or no individual tabs are active, then the default custom dashboard content will be displayed.', 'totem' ),
			'required'          => 0,
			'conditional_logic' => 0,
			'wrapper'           => [
				'width' => '',
				'class' => '',
				'id'    => ''
			],
			'acfe_permissions'      => '',
			'message'       => __( '', 'totem' ),
			'default_value' => 1,
			'ui'            => 1,
			'ui_on_text'  => __( 'Active', 'totem' ),
			'ui_off_text' => __( 'Inactive', 'totem' ),
		],
		[
			'key'               => 'field_6436268b4dd5e',
			'label'             => __( 'Content Tabs', 'totem' ),
			'name'              => 'dashboard_content_tabs',
			'type'              => 'repeater',
			'instructions'      => __( 'If only one tab is added then the content will appear without the tabs switcher interface. <br />If no tabs are added then the default custom dashboard content will be displayed.', 'totem' ),
			'required'          => 0,
			'conditional_logic' => [
				[
					[
						'field'    => 'field_643733e0b9da6',
						'operator' => '==',
						'value'    => '1'
					]
				]
			],
			'wrapper'           => [
				'width' => '',
				'class' => '',
				'id'    => ''
			],
			'acfe_repeater_stylised_button' => 1,
			'collapsed'    => 'field_6436268c4dd60',
			'min'          => 0,
			'max'          => 0,
			'layout'       => 'row',
			'button_label' => __( 'Add Tab', 'totem' ),
			'sub_fields'   => [
				[
					'key'               => 'field_6436268c4dd5f',
					'label'             => __( 'Options', 'totem' ),
					'name'              => '',
					'type'              => 'tab',
					'instructions'      => __( '', 'totem' ),
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => [
						'width' => '',
						'class' => '',
						'id'    => ''
					],
					'acfe_permissions' => '',
					'placement'        => 'top',
					'endpoint'         => 0,
				],
				[
					'key'               => 'field_643ee8e3806e3',
					'label'             => __( 'Active', 'totem' ),
					'name'              => 'dashboard_content_tab_active',
					'type'              => 'true_false',
					'instructions'      => __( '', 'totem' ),
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => [
						'width' => '',
						'class' => '',
						'id'    => ''
					],
					'hide_field' => '',
					'hide_label' => '',
					'hide_instructions'     => '',
					'hide_required'         => '',
					'instruction_placement' => '',
					'acfe_permissions'      => '',
					'acf-column-enabled'    => 0,
					'acf-column-post_types' => '',
					'acf-column-taxonomies' => '',
					'message'       => '',
					'default_value' => 1,
					'ui'            => 1,
					'ui_on_text'    => __( 'Yes', 'totem' ),
					'ui_off_text'   => __( 'No', 'totem' ),
					'acfe_settings' => '',
					'acfe_validate' => '',
					'acfe_field_group_condition' => 0,
				],
				[
					'key'               => 'field_6436268c4dd60',
					'label'             => __( 'Tab Label', 'totem' ),
					'name'              => 'dashboard_content_tab_label',
					'type'              => 'text',
					'instructions'      => __( '', 'totem' ),
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => [
						'width' => '',
						'class' => '',
						'id'    => ''
					],
					'acf-column-enabled'    => 0,
					'acf-column-post_types' => '',
					'acf-column-taxonomies' => [
						0 => 'category',
						1 => 'post_tag',
						2 => 'link_category',
						3 => 'acf-field-group-category',
						4 => 'media_type'
					],
					'default_value' => '',
					'placeholder'   => __( '', 'totem' ),
					'prepend'       => '',
					'append'        => '',
					'maxlength'     => '',
				],
				[
					'key'               => 'field_643ee34103d7c',
					'label'             => __( 'Tab Icon', 'totem' ),
					'name'              => 'dashboard_content_tab_icon',
					'type'              => 'text',
					'instructions'      => __( 'Add a CSS class for a Dashicons icon.', 'totem' ),
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper' => [
						'width' => '',
						'class' => '',
						'id'    => '',
					],
					'hide_field' => '',
					'hide_label' => '',
					'hide_instructions'     => '',
					'hide_required'         => '',
					'instruction_placement' => '',
					'acfe_permissions'      => '',
					'acf-column-enabled'    => 0,
					'acf-column-post_types' => '',
					'acf-column-taxonomies' => [
						0 => 'category',
						1 => 'post_tag',
						2 => 'link_category',
						3 => 'acf-field-group-category',
						4 => 'media_type'
					],
					'default_value' => '',
					'placeholder'   => 'dashicons-admin-generic',
					'prepend'       => 'dashicons',
					'append'        => '',
					'maxlength'     => '',
					'acfe_settings' => '',
					'acfe_validate' => '',
					'acfe_field_group_condition' => 0,
				],
				[
					'key'               => 'field_6436268c4dd61',
					'label'             => __( 'Tab Heading', 'totem' ),
					'name'              => 'dashboard_content_tab_heading',
					'type'              => 'text',
					'instructions'      => __( '', 'totem' ),
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => [
						'width' => '',
						'class' => '',
						'id'    => ''
					],
					'acf-column-enabled'    => 0,
					'acf-column-post_types' => '',
					'acf-column-taxonomies' => [
						0 => 'category',
						1 => 'post_tag',
						2 => 'link_category',
						3 => 'acf-field-group-category',
						4 => 'media_type'
					],
					'default_value' => '',
					'placeholder'   => __( '', 'totem' ),
					'prepend'       => '',
					'append'        => '',
					'maxlength'     => '',
				],
				[
					'key'               => 'field_6436268c4dd62',
					'label'             => __( 'User Capability', 'totem' ),
					'name'              => 'dashboard_content_tab_user_cap',
					'type'              => 'text',
					'instructions'      => __( '', 'totem' ),
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => [
						'width' => '',
						'class' => '',
						'id'    => ''
					],
					'acf-column-enabled'    => 0,
					'acf-column-post_types' => '',
					'acf-column-taxonomies' => [
						0 => 'category',
						1 => 'post_tag',
						2 => 'link_category',
						3 => 'acf-field-group-category',
						4 => 'media_type'
					],
					'default_value' => 'read',
					'placeholder'   => __( '', 'totem' ),
					'prepend'       => '',
					'append'        => '',
					'maxlength'     => '',
				],
				[
					'key'               => 'field_6436268c4dd63',
					'label'             => __( 'Editor', 'totem' ),
					'name'              => '',
					'type'              => 'tab',
					'instructions'      => __( '', 'totem' ),
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => [
						'width' => '',
						'class' => '',
						'id'    => ''
					],
					'acfe_permissions' => '',
					'placement'        => 'top',
					'endpoint'         => 0,
				],
				[
					'key'               => 'field_6436268c4dd64',
					'label'             => __( 'Tab Content', 'totem' ),
					'name'              => 'dashboard_content_tab_content',
					'type'              => 'wysiwyg',
					'instructions'      => __( '', 'totem' ),
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => [
						'width' => '',
						'class' => '',
						'id'    => ''
					],
					'acf-column-enabled'    => 0,
					'acf-column-post_types' => '',
					'acf-column-taxonomies' => [
						0 => 'category',
						1 => 'post_tag',
						2 => 'link_category',
						3 => 'acf-field-group-category',
						4 => 'media_type'
					],
					'default_value' => '',
					'tabs'          => 'all',
					'toolbar'       => 'full',
					'media_upload'  => 1,
					'delay'         => 0,
				],
			],
		],
	],
	'location' => [
		[
			[
				'param'    => 'options_page',
				'operator' => '==',
				'value'    => 'acf-dashboard-tabs'
			]
		]
	],
	'menu_order'            => 0,
	'position'              => 'acf_after_title',
	'style'                 => 'seamless',
	'label_placement'       => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen'        => '',
	'active'                => true,
	'description'           => __( '', 'totem' ),
	'acfe_display_title'    => '',
	'acfe_permissions'      => [
		0 => 'administrator',
		1 => 'developer'
	],
	'acfe_autosync' => '',
	'acfe_form'     => 0,
	'acfe_meta'     => '',
	'acfe_note'     => ''
] );

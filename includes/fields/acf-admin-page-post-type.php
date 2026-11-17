<?php
/**
 * ACF fields for the `admin` post type
 *
 * Requires ACF Pro to be active,
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

if ( ! class_exists( 'acf_pro' ) ) {
	return;
}

acf_add_local_field_group( [
	'key'    => 'group_641fa9326c59e',
	'title'  => __( 'Admin Pages', 'totem' ),
	'fields' => [
		[
			'key'               => 'field_6423c22c70f37',
			'label'             => __( 'Page', 'totem' ),
			'name'              => '',
			'aria-label'        => '',
			'type'              => 'tab',
			'instructions'      => __( '', 'totem' ),
			'required'          => 0,
			'conditional_logic' => 0,
			'wrapper'           => [
				'width' => '',
				'class' => '',
				'id'    => ''
			],
			'placement' => 'top',
			'endpoint'  => 0,
		],
		[
			'key'               => 'field_641fb215c7dac',
			'label'             => __( 'User Capability', 'totem' ),
			'name'              => 'admin_post_capability',
			'type'              => 'text',
			'instructions'      => __( '', 'totem' ),
			'required'          => 0,
			'conditional_logic' => 0,
			'wrapper'           => [
				'width' => '50',
				'class' => '',
				'id'    => ''
			],
			'default_value' => 'read',
			'placeholder'   => __( '', 'totem' ),
			'prepend'       => '',
			'append'        => '',
			'maxlength'     => '',
		],
		[
			'key'               => 'field_641fb27233f80',
			'label'             => __( 'Menu Label', 'totem' ),
			'name'              => 'admin_post_menu_title',
			'type'              => 'text',
			'instructions'      => __( '', 'totem' ),
			'required'          => 0,
			'conditional_logic' => 0,
			'wrapper'           => [
				'width' => '50',
				'class' => '',
				'id'    => ''
			],
			'default_value' => '',
			'placeholder'   => __( '', 'totem' ),
			'prepend'       => '',
			'append'        => '',
			'maxlength'     => '',
		],
		[
			'key'               => 'field_641fa9b6422b4',
			'label'             => __( 'Icon URL', 'totem' ),
			'name'              => 'admin_post_icon_url',
			'type'              => 'text',
			'instructions'      => __( '', 'totem' ),
			'required'          => 0,
			'conditional_logic' => 0,
			'wrapper'           => [
				'width' => '50',
				'class' => '',
				'id'    => ''
			],
			'default_value' => '',
			'placeholder'   => __( '', 'totem' ),
			'prepend'       => '',
			'append'        => '',
			'maxlength'     => '',
		],
		[
			'key'               => 'field_641fabeff9496',
			'label'             => __( 'Menu Position', 'totem' ),
			'name'              => 'admin_post_position',
			'type'              => 'number',
			'instructions'      => __( '', 'totem' ),
			'required'          => 0,
			'conditional_logic' => 0,
			'wrapper'           => [
				'width' => '50',
				'class' => '',
				'id'    => ''
			],
			'default_value' => '',
			'placeholder'   => __( '', 'totem' ),
			'prepend'       => '',
			'append'        => '',
			'min'  => '',
			'max'  => '',
			'step' => 1,
		],
		[
			'key'               => 'field_641fa95b422b3',
			'label'             => __( 'Page Slug', 'totem' ),
			'name'              => 'admin_post_page_slug',
			'type'              => 'text',
			'instructions'      => __( '', 'totem' ),
			'required'          => 0,
			'conditional_logic' => 0,
			'wrapper'           => [
				'width' => '50',
				'class' => '',
				'id'    => ''
			],
			'default_value' => '',
			'placeholder'   => __( '', 'totem' ),
			'prepend'       => '',
			'append'        => '',
			'maxlength'     => '',
		],
		[
			'key'               => 'field_641fabc7f9495',
			'label'             => __( 'Parent Slug', 'totem' ),
			'name'              => 'admin_post_parent_slug',
			'type'              => 'text',
			'instructions'      => __( '', 'totem' ),
			'required'          => 0,
			'conditional_logic' => 0,
			'wrapper'           => [
				'width' => '50',
				'class' => '',
				'id'    => ''
			],
			'default_value' => '',
			'placeholder'   => __( '', 'totem' ),
			'prepend'       => '',
			'append'        => '',
			'maxlength'     => '',
		],
		[
			'key'               => 'field_642622e9e343c',
			'label'             => __( 'Hook Priority', 'totem' ),
			'name'              => 'admin_post_hook_priority',
			'aria-label'        => '',
			'type'              => 'number',
			'instructions'      => __( 'When to hook into the admin menu. Set lower than 10 if post types are added as submenu items.', 'totem' ),
			'required'          => 0,
			'conditional_logic' => 0,
			'wrapper'           => [
				'width' => '50',
				'class' => '',
				'id'    => ''
			],
			'default_value' => 10,
			'placeholder'   => '',
			'min'           => '',
			'max'           => '',
			'step'          => 1,
			'prepend'       => '',
			'append'        => '',
		],
		[
			'key'               => 'field_641faf68b8b3f',
			'label'             => __( 'Page Description', 'totem' ),
			'name'              => 'admin_post_description',
			'type'              => 'text',
			'instructions'      => __( '', 'totem' ),
			'required'          => 0,
			'conditional_logic' => 0,
			'wrapper'           => [
				'width' => '',
				'class' => '',
				'id'    => ''
			],
			'default_value' => '',
			'placeholder'   => __( '', 'totem' ),
			'prepend'       => '',
			'append'        => '',
			'maxlength'     => '',
		],
		[
			'key'               => 'field_6423c24670f38',
			'label'             => __( 'Content', 'totem' ),
			'name'              => '',
			'aria-label'        => '',
			'type'              => 'tab',
			'instructions'      => __( '', 'totem' ),
			'required'          => 0,
			'conditional_logic' => 0,
			'wrapper'           => [
				'width' => '',
				'class' => '',
				'id'    => ''
			],
			'placement' => 'top',
			'endpoint'  => 0,
		],
		[
			'key'               => 'field_6423c04c1d0ae',
			'label'             => __( 'Content Tabs', 'totem' ),
			'name'              => 'admin_post_content_tabs',
			'aria-label'        => '',
			'type'              => 'repeater',
			'instructions'      => __( 'If only one tab is added then the content will appear without the tabs switcher interface.', 'totem' ),
			'required'          => 0,
			'conditional_logic' => 0,
			'wrapper'           => [
				'width' => '',
				'class' => '',
				'id'    => ''
			],
			'acfe_repeater_stylised_button' => 0,
			'layout'        => 'row',
			'pagination'    => 0,
			'min'           => 0,
			'max'           => 0,
			'collapsed'     => 'field_6423c0c2c5e1f',
			'button_label'  => __( 'Add Tab', 'totem' ),
			'rows_per_page' => 20,
			'sub_fields'    => [
				[
					'key'               => 'field_6423c3b763d5e',
					'label'             => __( 'Options', 'totem' ),
					'name'              => '',
					'aria-label'        => '',
					'type'              => 'tab',
					'instructions'      => __( '', 'totem' ),
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => [
						'width' => '',
						'class' => '',
						'id'    => ''
					],
					'placement' => 'top',
					'endpoint'  => 0,
					'parent_repeater' => 'field_6423c04c1d0ae',
				],
				[
					'key'               => 'field_6423c0c2c5e1f',
					'label'             => __( 'Tab Label', 'totem' ),
					'name'              => 'admin_post_content_tab_label',
					'aria-label'        => '',
					'type'              => 'text',
					'instructions'      => __( '', 'totem' ),
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper' => [
						'width' => '',
						'class' => '',
						'id'    => ''
					],
					'default_value' => '',
					'maxlength'     => '',
					'placeholder'   => __( '', 'totem' ),
					'prepend' => '',
					'append'  => '',
					'parent_repeater' => 'field_6423c04c1d0ae',
				],
				[
					'key'               => 'field_6423c0f6c5e20',
					'label'             => __( 'Tab Heading', 'totem' ),
					'name'              => 'admin_post_content_tab_heading',
					'aria-label'        => '',
					'type'              => 'text',
					'instructions'      => __( '', 'totem' ),
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => [
						'width' => '',
						'class' => '',
						'id'    => ''
					],
					'default_value' => '',
					'maxlength'     => '',
					'placeholder'   => __( '', 'totem' ),
					'prepend' => '',
					'append'  => '',
					'parent_repeater' => 'field_6423c04c1d0ae',
				],
				[
					'key'               => 'field_6423c42ab8ca3',
					'label'             => __( 'User Capability', 'totem' ),
					'name'              => 'admin_post_content_tab_user_cap',
					'aria-label'        => '',
					'type'              => 'text',
					'instructions'      => __( '', 'totem' ),
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => [
						'width' => '',
						'class' => '',
						'id'    => ''
					],
					'default_value' => 'read',
					'maxlength'     => '',
					'placeholder'   => __( '', 'totem' ),
					'prepend'       => '',
					'append'        => '',
					'parent_repeater' => 'field_6423c04c1d0ae',
				],
				[
					'key'               => 'field_6423c3cf63d5f',
					'label'             => __( 'Editor', 'totem' ),
					'name'              => '',
					'aria-label'        => '',
					'type'              => 'tab',
					'instructions'      => __( '', 'totem' ),
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => [
						'width' => '',
						'class' => '',
						'id'    => ''
					],
					'placement' => 'top',
					'endpoint'  => 0,
					'parent_repeater' => 'field_6423c04c1d0ae',
				],
				[
					'key'               => 'field_6423c116c5e21',
					'label'             => __( 'Tab Content', 'totem' ),
					'name'              => 'admin_post_content_tab_content',
					'aria-label'        => '',
					'type'              => 'wysiwyg',
					'instructions'      => __( '', 'totem' ),
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => [
						'width' => '',
						'class' => '',
						'id'    => ''
					],
					'default_value'   => '',
					'tabs'            => 'all',
					'toolbar'         => 'full',
					'media_upload'    => 1,
					'delay'           => 0,
					'parent_repeater' => 'field_6423c04c1d0ae',
				],
			],
		],
	],
	'location' => [
		[
			[
				'param'    => 'post_type',
				'operator' => '==',
				'value'    => 'admin'
			]
		]
	],
	'menu_order'            => 0,
	'position'              => 'acf_after_title',
	'style'                 => 'seamless',
	'label_placement'       => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen'        => [
		0 => 'block_editor',
		1 => 'discussion',
		2 => 'comments',
		3 => 'slug',
		4 => 'author',
		5 => 'format',
		6 => 'categories',
		7 => 'tags',
		8 => 'send-trackbacks',
		9 => 'the_content'
	],
	'active'             => true,
	'description'        => __( '', 'totem' ),
	'show_in_rest'       => 0,
	'acfe_display_title' => '',
	'acfe_autosync'      => '',
	'acfe_form' => 0,
	'acfe_note' => ''
] );

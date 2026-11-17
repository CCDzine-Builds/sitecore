<?php
/**
 * Form fields for admin settings menu tab
 *
 * @package    Totem
 * @subpackage Views
 * @category   Forms
 * @since      1.0.0
 */

namespace Totem\Views\Admin;

use Totem\Classes\Settings as Settings;
use function Totem\Core\{
	is_classicpress,
	can_fse
};

$settings = new Settings\Settings_Fields_Admin_Menu;

// Determine whether blocks are used.
$editor_replace     = get_option( 'editor-options-replace' );
$editor_allow_users = get_option( 'editor-options-allow-users' );
$show_blocks        = false;

if ( 'block' == $editor_replace || ( 'tinymce' == $editor_replace && 'allow' == $editor_allow_users ) ) {
	$show_blocks = true;
}

settings_fields( 'options-admin' );

?>
<div>
	<?php do_action( 'tmg_before_admin_menu_settings' ); ?>
	<table class="form-table" role="presentation">
		<tbody>
			<?php if ( ! can_fse() ) : ?>
			<tr class="admin-field">
				<th scope="row"><?php _e( 'Link Positions', 'totem' ); ?></th>
				<td>
					<fieldset>
						<legend class="screen-reader-text"><?php _e( 'Manage Link Position Options', 'totem' ); ?></legend>
						<?php $settings->admin_menu_menus_top_callback(); ?><br />
						<?php $settings->admin_menu_widgets_top_callback(); ?>
					</fieldset>
				</td>
			</tr>
			<?php endif; ?>
			<?php if ( ! is_classicpress() && $show_blocks ) : ?>
			<tr class="admin-field">
				<th scope="row"><?php _e( 'Content Types', 'totem' ); ?></th>
				<td>
					<p><?php _e( 'These content types are normally hidden from the admin menu.', 'totem' ); ?></p>
					<fieldset>
						<legend class="screen-reader-text"><?php _e( 'Show Hidden Content Types', 'totem' ); ?></legend>
						<?php $settings->admin_menu_nav_blocks_callback(); ?><br />
						<?php $settings->admin_menu_reuse_blocks_callback(); ?>
					</fieldset>
				</td>
			</tr>
			<?php endif; ?>
			<tr class="admin-field">
				<th scope="row"><?php _e( 'Custom Order', 'totem' ); ?></th>
				<td>
					<fieldset>
						<legend class="screen-reader-text"><?php _e( 'Custom Admin Menu Order', 'totem' ); ?></legend>
						<?php $settings->admin_menu_custom_order_callback(); ?>
					</fieldset>
				</td>
			</tr>
		</tbody>
	</table>
	<?php do_action( 'tmg_after_admin_menu_settings' ); ?>
</div>


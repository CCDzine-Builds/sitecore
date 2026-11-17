<?php
/**
 * Form fields for network admin settings menu tab
 *
 * @package    Totem
 * @subpackage Views
 * @category   Forms
 * @since      1.0.0
 */

namespace Totem\Views\Admin;

use Totem\Classes\Settings as Settings;
use function Totem\Core\is_classicpress;

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
	<?php do_action( 'tmg_before_network_admin_menu_settings' ); ?>
	<table class="form-table" role="presentation">
		<?php
		settings_fields( 'options-admin' );
		do_settings_fields( 'options-admin', 'tmg-settings-section-network-admin-menu' );
		?>
	</table>
	<?php do_action( 'tmg_after_network_admin_menu_settings' ); ?>
</div>


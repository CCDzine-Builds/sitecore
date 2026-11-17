<?php
/**
 * Form fields for admin settings users tab
 *
 * @package    Totem
 * @subpackage Views
 * @category   Forms
 * @since      1.0.0
 */

namespace Totem\Views\Admin;

?>
<div>
	<?php do_action( 'tmg_before_admin_users_settings' ); ?>
	<table class="form-table" role="presentation">
		<?php
		settings_fields( 'options-admin' );
		do_settings_fields( 'options-admin', 'tmg-settings-section-admin-users' );
		?>
	</table>
	<?php do_action( 'tmg_after_admin_users_settings' ); ?>
</div>

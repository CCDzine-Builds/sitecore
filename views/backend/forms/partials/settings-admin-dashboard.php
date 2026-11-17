<?php
/**
 * Form fields for admin settings dashboard tab
 *
 * @package    Totem
 * @subpackage Views
 * @category   Forms
 * @since      1.0.0
 */

namespace Totem\Views\Admin;

?>
<div>
	<?php do_action( 'tmg_before_admin_dashboard_settings' ); ?>
	<table class="form-table" role="presentation">
		<?php
		settings_fields( 'options-admin' );
		do_settings_fields( 'options-admin', 'tmg-settings-section-admin-dashboard' );
		?>
	</table>
	<?php do_action( 'tmg_after_admin_dashboard_settings' ); ?>
</div>

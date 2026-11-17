<?php
/**
 * Form fields for network admin settings dashboard tab
 *
 * @package    Totem
 * @subpackage Views
 * @category   Forms
 * @since      1.0.0
 */

namespace Totem\Views\Admin;

?>
<div>
	<?php do_action( 'tmg_before_network_admin_dashboard_settings' ); ?>
	<table class="form-table" role="presentation">
		<?php
		settings_fields( 'options-admin' );
		do_settings_fields( 'options-admin', 'tmg-settings-section-network-admin-dashboard' );
		?>
	</table>
	<?php do_action( 'tmg_after_network_admin_dashboard_settings' ); ?>
</div>

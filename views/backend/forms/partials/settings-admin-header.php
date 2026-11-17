<?php
/**
 * Form fields for admin settings header tab
 *
 * @package    Totem
 * @subpackage Views
 * @category   Forms
 * @since      1.0.0
 */

namespace Totem\Views\Admin;

?>
<div>
	<?php do_action( 'tmg_before_admin_header_settings' ); ?>
	<table class="form-table" role="presentation">
		<?php
		settings_fields( 'options-admin' );
		do_settings_fields( 'options-admin', 'tmg-settings-section-admin-header' );
		?>
	</table>
	<?php do_action( 'tmg_after_admin_header_settings' ); ?>
</div>

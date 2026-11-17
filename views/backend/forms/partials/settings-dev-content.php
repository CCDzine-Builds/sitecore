<?php
/**
 * Form fields for developer content settings tab
 *
 * @package    Totem
 * @subpackage Views
 * @category   Forms
 * @since      1.0.0
 */

namespace Totem\Views\Admin;

?>
<div>
	<?php do_action( 'tmg_before_dev_content_settings' ); ?>
	<table class="form-table" role="presentation">
		<?php
		settings_fields( 'developer-tools' );
		do_settings_fields( 'developer-tools', 'tmg-options-developer-content' );
		?>
	</table>
	<?php do_action( 'tmg_after_dev_content_settings' ); ?>
</div>

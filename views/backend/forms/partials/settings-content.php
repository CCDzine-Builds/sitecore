<?php
/**
 * Content settings tab
 *
 * @package    Totem
 * @subpackage Views
 * @category   Forms
 * @since      1.0.0
 */

namespace Totem\Views\Admin;

?>
<div>
	<?php do_action( 'tmg_before_content_settings' ); ?>
	<?php
	settings_fields( 'custom-content' );
	do_settings_sections( 'custom-content' );
	?>
	<?php do_action( 'tmg_after_content_settings' ); ?>
</div>

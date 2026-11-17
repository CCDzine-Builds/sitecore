<?php
/**
 * Content features tab
 *
 * @package    Totem
 * @subpackage Views
 * @category   Forms
 * @since      1.0.0
 */

namespace Totem\Views\Admin;

?>
<div>
	<?php do_action( 'tmg_before_features_settings' ); ?>
	<?php
	settings_fields( 'custom-content' );
	do_settings_sections( 'custom-content', 'tmg-options-features' );
	?>
	<?php do_action( 'tmg_after_features_settings' ); ?>
</div>

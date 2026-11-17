<?php
/**
 * Output of the Administration Settings page
 *
 * @package    Totem
 * @subpackage Views
 * @category   Admin
 * @since      1.0.0
 */

$page = get_plugin_page_hook( TMG_BASENAME, $this->parent_slug );

?>
<div class="wrap admin-settings">

	<?php
	printf(
		'<h1>%s</h1>',
		__( $this->heading(), 'totem' )
	);

	printf(
		'<p class="description">%s</p>',
		__( $this->description(), 'totem' )
	);

	?>
	<form method="post" action="options.php">

		<?php echo do_action( 'render_screen_tabs_' . $page ); ?>

		<p class="submit"><?php submit_button( __( 'Save Settings', 'totem' ), 'button-primary', '', false, [] ); ?></p>
	</form>
</div>

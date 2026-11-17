<?php
/**
 * Form fields for developer user settings tab
 *
 * @package    Totem
 * @subpackage Views
 * @category   Forms
 * @since      1.0.0
 */

namespace Totem\Views\Admin;

use Totem\Core as Core,
	Totem\System_Summary as Summary;

/**
 * Tab description
 *
 * Add case for network admin,
 * should you need it.
 */
if ( is_multisite() && is_network_admin() ) {
	$system_type = __( 'network', 'totem' );
} else {
	$system_type = __( 'website', 'totem' );
}
$tab_description = apply_filters(
	'tmg_system_info_description',
	sprintf(
		__( '<p class="description">Some technical details about the <a href="%s">%s</a> %s.</p>', 'totem' ),
		esc_url( get_site_url( get_current_blog_id() ) ),
		get_bloginfo( 'name' ),
		$system_type
	)
);

/**
 * Database icon
 *
 * As of April, 10, 2021 ClassicPress has not
 * updated the Dashicons icon font from the
 * WordPress 4.9.8 version. An issue has been
 * opened on GitHub.
 *
 * Until the font is updated the generic icon
 * will be used for ClassicPress.
 *
 * @link https://github.com/ClassicPress/ClassicPress/issues/695
 */
if ( Core\is_classicpress() ) {
	$database_icon = 'dashicons-admin-generic';
} else {
	$database_icon = 'dashicons-database';
}

?>
<div>
	<?php do_action( 'tmg_before_dev_system_info' ); ?>

	<p class="description"><?php echo $tab_description; ?></p>

	<ul class="tmg-widget-details-list tmg-widget-system-list">
		<li><icon class="dashicons dashicons-editor-code"></icon> <?php echo Summary\php_version(); ?></li>
		<li><icon class="dashicons <?php echo $database_icon; ?>"></icon> <?php echo Summary\database_version(); ?></li>
		<li><icon class="dashicons dashicons-dashboard"></icon> <?php echo Summary\system_notice(); ?></li>
		<?php if ( current_user_can( 'install_themes' ) || current_user_can( 'customize' ) ) : ?>
		<li><icon class="dashicons dashicons-art"></icon> <?php echo Summary\available_themes(); ?></li>
		<?php endif; ?>
		<li><icon class="dashicons dashicons-admin-appearance"></icon> <?php echo Summary\active_theme(); ?></li>
		<?php
		if ( ! empty( Summary\search_engines() ) ) {
			echo sprintf(
				'<li><icon class="dashicons dashicons-search"></icon> %s</li>',
				Summary\search_engines()
			);
		} ?>
	</ul>

	<?php do_action( 'tmg_after_dev_system_info' ); ?>
</div>

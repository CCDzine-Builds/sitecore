<?php
/**
 * Content settings intro tab
 *
 * @package    Totem
 * @subpackage Views
 * @category   Forms
 * @since      1.0.0
 */

namespace Totem\Views\Admin\Content_Settings_Intro;

use Totem\Users as Users;

function content_settings_intro( $content = '' ) {

	$get_roles = Users\get_user_roles();

	if ( count( $get_roles ) > 1 ) {
		$roles = __( 'roles', 'sitecore' );
	} else {
		$roles = __( 'role', 'sitecore' );
	}

	$role_message = sprintf(
		__( '<p>This content is for users with your %s: %s.</p>', 'sitecore' ),
		$roles,
		Users\user_roles()
	);

	// If ACF is active.
	if ( current_user_can( 'develop' ) && class_exists( 'acf' ) ) {

		$content .= sprintf(
			'<p>%s</p>',
			__( 'You are seeing this content because you have the user role of Developer, and because Advanced Custom Fields is active.', 'sitecore' )
		);
	} else {
		$content = $role_message;
	}

	echo apply_filters( 'tmg_content_settings_intro_text', $content );
}
add_action( 'tmg_content_settings_intro', __NAMESPACE__ . '\content_settings_intro' );

?>
<div>
	<?php do_action( 'tmg_before_content_settings_intro' ); ?>
	<p class="description"><?php _e( 'Change this intro as needed for your project.', 'sitecore' ); ?></p>
	<?php do_action( 'tmg_content_settings_intro' ); ?>
	<?php do_action( 'tmg_after_content_settings_intro' ); ?>
</div>

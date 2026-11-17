<?php
/**
 * Manage ACF fields
 *
 * Adds a metabox to the ACF content tools screen.
 *
 * @package    Totem
 * @subpackage Classes
 * @category   Tools
 * @since      1.0.0
 */

namespace Totem\Classes\Tools;

// Restrict direct access.
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

class Manage_Fields extends \ACF_Admin_Tool {

	/**
	 * Menu icon
	 *
	 * @since  1.0.0
	 * @access public
	 * @var string Admin menu icon class.
	 */
	public $icon = '';

	/**
	 * Initialize metabox
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function initialize() {
		$this->name  = 'manage-acf-fields';
		$this->title = __( 'Manage Custom Fields', 'totem' );
    	$this->icon  = 'dashicons-editor-table';
	}

	/**
	 * Metabox output
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function html() {

	?>
	<p><?php _e( 'Manage custom fields & field groups.', 'totem' ); ?></p>
	<p>
		<a href="<?php echo admin_url( 'edit.php?post_type=acf-field-group' ); ?>" class="button button-primary">
			<?php _e( 'Field Groups', 'totem' ); ?>
		</a>
		<a href="<?php echo admin_url( 'edit-tags.php?taxonomy=acf-field-group-category' ); ?>" class="button button-primary">
			<?php _e( 'Field Categories', 'totem' ); ?>
		</a>
	</p>
	<?php

	}
}

<?php
/**
 * Sample widget form
 *
 * @package    Totem
 * @subpackage Views
 * @category   Front, Widgets
 * @since      1.0.0
 */

$instance = wp_parse_args(
	(array) $instance,
	[
		'title' => '',
		'content'  => ''
	]
);
$title   = $instance['title'];
$content = $instance['content'];

?>
<p>
	<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'totem' ); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
	<br /><span class="description"><?php _e( 'Title display may vary by the active theme.', 'totem' ); ?></span>
</p>

<p>
	<label for="<?php echo $this->get_field_id( 'content' ); ?>"><?php _e( 'Content:', 'totem' ); ?></label>
	<textarea id="<?php echo $this->get_field_id( 'content' ); ?>" name="<?php echo $this->get_field_name( 'content' ); ?>" rows="6" cols="50" class="widefat code"><?php echo esc_textarea( $instance['content'] ); ?></textarea>
	<br /><span class="description"><?php _e( 'Add some content to the widget.', 'totem' ); ?></span>
</p>

<?php
/**
 * Output of the Manage Website page
 *
 * @package    Totem
 * @subpackage Views
 * @category   Admin
 * @since      1.0.0
 */

use Totem\Classes\Admin as Admin;

// Instance of the Manage_Website_Page class.
$page = new Admin\Manage_Website_Page;

?>
<div class="wrap manage-website">

	<?php
	printf(
		'<h1>%s</h1>',
		$page->heading()
	);

	echo $page->description();
	echo $page->page_content();

	?>
</div>

<?php
/**
 * Sidebar content goes here. You can manage different sidebar content inside this folder.
 *
 * @link https://developer.wordpress.org/themes/basics/linking-theme-files-directories/
 */
?>

<div class="pages"></div>
	<?php
		wp_list_pages( array(
			'title_li' => '',
		) );
	?>
</div>

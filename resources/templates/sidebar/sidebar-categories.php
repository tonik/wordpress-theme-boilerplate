<?php
/**
 * Sidebar content goes here. You can manage different sidebar content inside this folder.
 *
 * @link https://developer.wordpress.org/themes/basics/linking-theme-files-directories/
 */
?>

<div class="categories">
	<?php
		wp_list_categories( array(
			'taxonomy' => 'category',
			'title_li' => '',
		) );
	?>
</div>

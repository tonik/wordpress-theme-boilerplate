<?php
/**
 * Top nav menu content goes here. Customize it to your needs. How to do it? Read link below :)
 *
 * @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
 */
?>

<nav>
	<?php
		wp_nav_menu( array(
			'theme_location' => 'top',
		) );
	?>
</nav>

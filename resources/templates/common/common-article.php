<?php
/**
 * <article> common component that display basic information about post in loop. You can manage other commons components in this folder.
 */
?>

<header>
	<h1><?php the_title(); ?></h1>

	<?php the_post_thumbnail(); ?>
</header>

<div><?php the_content(); ?></div>

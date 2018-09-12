<?php
/**
 * Homepage template part that include content
 *
 * @link https://developer.wordpress.org/themes/basics/linking-theme-files-directories/
 */
?>

<section>
	<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>

		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php get_template_part( 'resources/templates/common/common', 'article' ); ?>
		</a>
	<?php endwhile; ?>
</section>

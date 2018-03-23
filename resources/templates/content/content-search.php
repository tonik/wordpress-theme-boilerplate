<?php
/**
 * Template part for displaying search result from search.php
 *
 * @link https://developer.wordpress.org/themes/basics/linking-theme-files-directories/
 */
?>

<section>
	<?php while ( have_posts() ) : ?>
		<article>
			<?php the_post(); ?>

			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<article>
					<header><?php the_title(); ?></header>
				</article>
			</a>
		</article
	<?php endwhile; ?>
</section>

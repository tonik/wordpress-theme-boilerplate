<?php
/**
 * Template part for displaying search result from search.php
 *
 * @link https://developer.wordpress.org/themes/basics/linking-theme-files-directories/
 */
?>

<?php while ( have_posts() ) : the_post(); ?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <article>
            <header><?php the_title(); ?></header>
        </article>
    </a>
<?php endwhile; ?>

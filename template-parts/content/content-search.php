<?php
/**
 * Template part for displaying search result from search.php
 *
 *
 * @link https://codex.wordpress.org/Creating_a_Search_Page
 *
 * @package Tonik Boilerplate
 */

?>

<main>
    <?php while ( have_posts() ) : the_post(); ?>
            <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
                <article>

                    <header><?php the_title() ?></header>

                </article>
            </a>
    <?php endwhile; ?>
</main>

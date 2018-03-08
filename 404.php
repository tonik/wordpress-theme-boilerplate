<?php
/**
 * Template that handle 404 requests on server
 *
 * @link https://developer.wordpress.org/themes/functionality/404-pages/
 *
 * @package Tonik Boilerplate
 */

get_header();
?>

<?php get_header(); ?>

    <main role="main">
        <section>

            <article>
                <h1><?php _e( 'Page not found', 'tonik_b' ); ?></h1>
                <h2>
                    <a href="<?= home_url(); ?>">
                        <?php _e( 'Homepage', 'tonik_b' ); ?>
                    </a>
                </h2>
            </article>

        </section>
    </main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

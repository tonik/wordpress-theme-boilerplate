<?php
/**
 * Template that handle 404 requests on server
 *
 * @link https://developer.wordpress.org/themes/functionality/404-pages/
 */
?>

<?php get_header(); ?>

<main>
    <section>
        <article>
            <h1><?php echo __( 'Page not found', 'tonik' ); ?></h1>

            <h2>
                <a href="<?php echo home_url(); ?>">
                    <?php echo __( 'Homepage', 'tonik' ); ?>
                </a>
            </h2>
        </article>
    </section>

    <aside>
        <?php get_sidebar(); ?>
    </aside>
</main>

<?php get_footer(); ?>

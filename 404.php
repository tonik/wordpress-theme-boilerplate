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
            <h1><?= __( 'Page not found', 'tonik' ); ?></h1>

            <h2>
                <a href="<?= home_url(); ?>">
                    <?= __( 'Homepage', 'tonik' ); ?>
                </a>
            </h2>
        </article>
    </section>

    <aside>
        <?php get_sidebar(); ?>
    </aside>
</main>

<?php get_footer(); ?>

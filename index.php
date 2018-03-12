<?php
/**
 * The most generic template file in hierarchy.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>

<?php get_header(); ?>

<main class="box">
    <?php if ( have_posts() ) : ?>
        <section>
            <?php if ( is_home() && is_front_page() ) : ?>
                <?php get_template_part( 'resources/templates/content/content', 'homepage' ); ?>
            <?php else : ?>
                <?php while ( have_posts() ) : the_post() ?>
                    <article>
                        <?php get_template_part( 'resources/templates/content/content', get_post_type() ); ?>
                    </article>
                <?php endwhile; ?>
            <?php endif; ?>
        </section>
    <?php endif; ?>

    <aside>
        <?php get_sidebar(); ?>
    </aside>
</main>

<?php get_footer(); ?>

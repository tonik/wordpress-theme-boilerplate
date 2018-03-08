<?php
/**
 * The main template file
 *
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tonik Boilerplate
 */

get_header();
?>

<main>
    <?php
        if ( have_posts() ) {
            if ( is_home() && is_front_page()) {
                get_template_part('resources/templates/content/content', 'homepage');
            } else {
                while ( have_posts() ) {
                    the_post();

                    get_template_part( 'resources/templates/content/content', get_post_type() );
                }
            }
        }
    ?>
</main>

<?php
get_sidebar();
get_footer();

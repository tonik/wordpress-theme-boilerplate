<?php
/**
 * <header> content with top-nav content
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tonik Boilerplate
 */

?>

<header class="header">

    <!-- logo -->
    <a href="<?= get_site_url() ?>" title="<?php echo __( 'Back to homepage', 'tonik' ); ?>">
        <img src="<?= get_template_directory_uri() ?>/public/images/ico/test.svg" class="logo" alt="logo" />
    </a>

    <!-- top nav -->
    <?php get_template_part( 'resources/templates/nav/nav', 'top' ) ?>

    <!-- search form -->
    <?php get_search_form(); ?>
</header>

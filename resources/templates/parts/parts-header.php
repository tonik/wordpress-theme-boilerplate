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
    <div>logo</div>

    <!-- top nav -->
    <?php get_template_part('resources/templates/nav/nav', 'top') ?>

    <!-- search form -->
    <?php get_search_form(); ?>
</header>

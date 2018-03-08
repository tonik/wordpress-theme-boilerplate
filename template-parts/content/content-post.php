<?php
/**
 * Template part for displaying page content in single-post.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tonik Boilerplate
 */

?>

<article>
    <header>
        <h1><?= the_title(); ?></h1>
        <?= the_post_thumbnail() ?>
    </header>

    <div>
        <?= the_content(); ?>
    </div>

    <footer></footer>
</article>

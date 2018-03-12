<?php
/**
 * <article> common component that display basic information about post in loop. You can manage other commons components in this folder.
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

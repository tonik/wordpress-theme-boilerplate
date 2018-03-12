<?php
/**
 * Sidebar content goes here. You can manage different sidebar content inside this folder
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/
 *
 * @package Tonik Boilerplate
 */

?>

<div class="categories">
    <?php
        wp_list_categories([
            'taxonomy' => 'category',
            'title_li' => ''
        ]);
    ?>
</div>

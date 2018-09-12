<?php
/**
 * <header> content with top-nav content.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

<header class="header">
	<a href="<?php echo esc_attr( get_site_url() ); ?>" title="<?php echo esc_attr( 'Back to homepage', 'tonik' ); ?>">
		<img src="<?php echo esc_html( get_template_directory_uri() ); ?>/public/images/ico/test.svg" class="logo" alt="logo" />
	</a>

	<?php get_template_part( 'resources/templates/nav/nav', 'top' ); ?>

	<?php get_search_form(); ?>
</header>

<?php
/**
 * The template for the projects page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area projects-page-bg">
	<main id="main" class="site-main" role="main">

		<?php get_template_part('template-parts/hero-projects', 'page'); ?>

		<?php get_template_part('template-parts/solo-projects', 'page'); ?>

		<?php get_template_part('template-parts/collab-projects', 'page'); ?>

		<?php get_template_part('template-parts/play-projects', 'page'); ?>

	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>

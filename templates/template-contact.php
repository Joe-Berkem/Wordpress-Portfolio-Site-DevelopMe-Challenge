<?php /* Template Name: Contact Template */ ?>
<?php


get_header(); ?>

<div id="primary" class="content-area contact-page-bg">
	<main id="main" class="site-main" role="main">

		<?php get_template_part('template-parts/hero-contact', 'page'); ?>

		<?php get_template_part('template-parts/text-area-contact', 'page'); ?>

		<?php get_template_part('template-parts/form-contact', 'page'); ?>

	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>

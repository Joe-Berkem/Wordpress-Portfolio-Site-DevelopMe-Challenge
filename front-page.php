<?php get_header(); ?>

	<div id="primary" class="content-area front-page-bg">
		<main id="main" class="site-main" role="main">

			<?php get_template_part('template-parts/hero-front', 'page'); ?>

			<?php get_template_part('template-parts/my-story-front', 'page'); ?>

			<?php get_template_part('template-parts/my-work-front', 'page'); ?>

			<?php get_template_part('template-parts/my-expertise-front', 'page'); ?>

			<?php get_template_part('template-parts/contact-front', 'page'); ?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>

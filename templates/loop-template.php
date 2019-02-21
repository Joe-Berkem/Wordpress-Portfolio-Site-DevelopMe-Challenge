<?php /* Template Name: Loop Template */ ?>
<?php
/**
 * The template for displaying pages
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

<div id="primary" class="content-area flex-row">
	
			
<?php
	
	$query_solo = array(
			'category_name' => 'solo',
			'post_type' => 'post',
			'posts_per_page' => 3,
			'orderby' => 'rand'
		);

	$result = new WP_Query( $query_solo );



	while ( $result->have_posts() ) : $result->the_post(); ?>
		


			<div>

				<h1><?php the_title(); ?></h1>
				<p>dummmy text sjhkjbsadkfolsajhf</p>

			</div>

		<!-- // End the loop -->
		<?php endwhile;
		wp_reset_query(); ?>

</div><!-- .content-area -->

<div id="primary" class="content-area flex-row">
	
			
<?php
	
	$query_collab = array(
			'category_name' => 'collab',
			'post_type' => 'post',
			'posts_per_page' => 3,
			'orderby' => 'rand'
		);

	$result = new WP_Query( $query_collab );



	while ( $result->have_posts() ) : $result->the_post(); ?>
		


			<div>

				<h1><?php the_title(); ?></h1>

				<div class="entry-content">
					<?php the_content(); ?>
				</div>

			</div>

		<!-- // End the loop -->
		<?php endwhile;
		wp_reset_query(); ?>

</div><!-- .content-area -->

<?php get_footer(); ?>

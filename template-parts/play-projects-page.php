<?php
/**
 * The template part for displaying the play section on the projects page
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<div class="container-fluid play-projects-container">

	<?php if (get_field('play_projects_heading')){  ?>
		    <h2 class="yellow-text section-top-padding bottom-padding"> <?php the_field('play_projects_heading')?> </h2>
	<?php } ?> 

	<div class="play-projects-cards-row">

	<?php

	$query_play = array(
			'category_name' => 'play',
			'post_type' => 'post',
			'posts_per_page' => 3,
			'orderby' => 'rand'
		);

	$result = new WP_Query( $query_play );

	while ( $result->have_posts() ) : $result->the_post(); ?>
		

				<?php if (get_field('image')){ 
				    echo '<img class="card play-card" src="'. get_field('image') . '"/>' ?> 
				<?php } ?> 

		

		<!-- // End the loop -->
		<?php endwhile;
		wp_reset_query(); ?>

	</div>

	<?php if (get_field('play_projects_button_text')){  ?>
		    <button class="button-yellow centered-button button-bottom-margin"><?php the_field('play_projects_button_text')?></button>
	<?php } ?> 
	
</div>
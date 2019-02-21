<?php
/**
 * The template part for displaying the my story section on the front page
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<div class="container-fluid my-work-hp-container">

	<?php 
	if (get_field('my_work_heading')){  ?>
		    <h2> <?php the_field('my_work_heading')?> </h2>
	<?php } ?>

	<div class="container fp-my-work-cards">

	<!-- solo card -->
	<?php

	$query_solo = array(
			'category_name' => 'solo',
			'post_type' => 'post',
			'posts_per_page' => -1,
			'orderby' => 'rand'
		);

	$result = new WP_Query( $query_solo );

	while ( $result->have_posts() ) : $result->the_post(); ?>
		

				<?php if (get_field('image')){ 
				    echo '<img class="card solo-card" src="'. get_field('image') . '"/>' ?> 
				<?php } ?> 

		

		<!-- // End the loop -->
		<?php endwhile;
		wp_reset_query(); ?>

	<!-- collab card -->
	<?php

	$query_collab = array(
			'category_name' => 'collab',
			'post_type' => 'post',
			'posts_per_page' => 1,
			'orderby' => 'rand'
		);

	$result = new WP_Query( $query_collab );

	while ( $result->have_posts() ) : $result->the_post(); ?>
			

				<?php if (get_field('image')){ 
				    echo '<img class="card collab-card" src="'. get_field('image') . '"/>' ?> 
				<?php } ?> 

			

		<!-- // End the loop -->
		<?php endwhile;
		wp_reset_query(); ?>

	<!-- Play card -->
	<?php

	$query_play = array(
			'category_name' => 'play',
			'post_type' => 'post',
			'posts_per_page' => 1,
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

</div>
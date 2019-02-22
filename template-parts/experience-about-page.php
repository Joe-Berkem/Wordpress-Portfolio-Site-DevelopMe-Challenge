<?php
/**
 * The template part for displaying the my expertise section on the front page
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<div class="container-fluid experience-about-container">

	<?php if (get_field('experience_heading')){  ?>
	    <h2> <?php the_field('experience_heading')?> </h2>
	<?php } ?> 

	<div class="container">
		<div>
			<?php if (get_field('field1_subheading')){  ?>
				    <h3> <?php the_field('field1_subheading')?> </h3>
			<?php } ?> 

			<?php if (get_field('field1_summary')){  ?>
				    <p class="full-width-text"> <?php the_field('field1_summary')?> </p>
			<?php } ?> 
		</div>

		<div>
			<?php if (get_field('field2_subheading')){  ?>
				    <h3> <?php the_field('field2_subheading')?> </h3>
			<?php } ?> 

			<?php if (get_field('field2_summary')){  ?>
				    <p class="full-width-text"> <?php the_field('field2_summary')?> </p>
			<?php } ?> 
		</div>

		<div>
			<?php if (get_field('field3_subheading')){  ?>
				    <h3> <?php the_field('field3_subheading')?> </h3>
			<?php } ?> 

			<?php if (get_field('field3_summary')){  ?>
				    <p class="full-width-text"> <?php the_field('field3_summary')?> </p>
			<?php } ?> 
		</div>
	</div>	
	
</div>
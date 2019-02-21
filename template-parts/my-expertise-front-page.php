<?php
/**
 * The template part for displaying the my expertise section on the front page
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<div class="container-fluid my-expertise-hp-container">

	<?php if (get_field('expertise_heading')){  ?>
	    <h2> <?php the_field('expertise_heading')?> </h2>
	<?php } ?> 

	<div class="container flex-row">
		<div>
			<?php if (get_field('discipline1_subheading')){  ?>
				    <h3> <?php the_field('discipline1_subheading')?> </h3>
			<?php } ?> 

			<?php if (get_field('discipline1_summary')){  ?>
				    <p> <?php the_field('discipline1_summary')?> </p>
			<?php } ?> 
		</div>

		<div>
			<?php if (get_field('discipline2_subheading')){  ?>
				    <h3> <?php the_field('discipline2_subheading')?> </h3>
			<?php } ?> 

			<?php if (get_field('discipline2_summary')){  ?>
				    <p> <?php the_field('discipline1_summary')?> </p>
			<?php } ?> 
		</div>

		<div>
			<?php if (get_field('discipline3_subheading')){  ?>
				    <h3> <?php the_field('discipline3_subheading')?> </h3>
			<?php } ?> 

			<?php if (get_field('discipline3_summary')){  ?>
				    <p> <?php the_field('discipline3_summary')?> </p>
			<?php } ?> 
		</div>
	</div>	

	<?php if (get_field('expertise_button_text')){  ?>
		    <button><?php the_field('expertise_button_text')?></button>
	<?php } ?> 
	
</div>
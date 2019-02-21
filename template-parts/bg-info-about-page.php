<?php
/**
 * The template part for displaying the my story section on the front page
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<div class="container-fluid bg-info-about-container">

	<?php if (get_field('background_heading')){  ?>
		    <h2> <?php the_field('background_heading')?> </h2>
	<?php } ?> 

	<?php if (get_field('image')){ 
				    echo '<img class="card collab-card" src="'. get_field('image') . '"/>' ?> 
				<?php } ?> 

	<?php if (get_field('background_summary')){  ?>
		    <p> <?php the_field('background_summary')?> </p>
	<?php } ?> 

</div>
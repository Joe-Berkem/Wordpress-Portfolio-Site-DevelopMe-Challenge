<?php
/**
 * The template part for displaying the my story section on the front page
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<div class="container-fluid aspirations-about-container">

	<?php if (get_field('aspirations_heading')){  ?>
		    <h2> <?php the_field('aspirations_heading')?> </h2>
	<?php } ?> 

	<?php if (get_field('aspirations_summary')){  ?>
		    <p> <?php the_field('aspirations_summary')?> </p>
	<?php } ?> 

</div>
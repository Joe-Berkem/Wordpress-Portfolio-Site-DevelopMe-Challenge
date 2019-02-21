<?php
/**
 * The template part for displaying the hero section on the projects page
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<div class="container-fluid hero-projects-container">
	<div class="container">

    	<?php if (get_field('hero_heading')){  ?>
		    <h1 class="display-4"> <?php the_field('hero_heading')?> </h1>
		<?php } ?> 

    </div>
</div>
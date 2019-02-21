<?php
/**
 * The template part for displaying the my story section on the front page
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<div class="container-fluid hero-about-container">
	<div class="container">

    	<?php if (get_field('hero_heading')){  ?>
		    <h1 class="display-4"> <?php the_field('hero_heading')?> </h1>
		<?php } ?> 

    </div>
</div>
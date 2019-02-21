<?php
/**
 * The template part for displaying the my story section on the front page
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<div class="container-fluid hero-container">
	<div class="container">

    	<?php if (get_field('hero_name')){  ?>
		    <h1 class="display-4"> <?php the_field('hero_name')?> </h1>
		<?php } ?> 

		<?php if (get_field('hero_focus1')){  ?>
			    <h2> <?php the_field('hero_focus1')?> </h2>
		<?php } ?> 

		<?php if (get_field('hero_focus2')){  ?>
			    <h2><?php the_field('hero_focus2')?></h2>
		<?php } ?> 
    </div>
</div>
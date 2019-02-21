<?php
/**
 * The template part for displaying the my story section on the front page
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<div class="container-fluid my-story-hp-container">

	<?php if (get_field('my story heading')){  ?>
		    <h2> <?php the_field('my story heading')?> </h2>
	<?php } ?> 

	<?php if (get_field('my_story_summary')){  ?>
		    <p> <?php the_field('my_story_summary')?> </p>
	<?php } ?> 

	<?php if (get_field('my_story_button_text')){  ?>
		    <button><?php the_field('my_story_button_text')?></button>
	<?php } ?> 
	
</div>
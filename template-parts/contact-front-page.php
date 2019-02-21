<?php
/**
 * The template part for displaying the my story section on the front page
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<div class="container-fluid contact-hp-container">

	<?php if (get_field('contact_hp_heading')){  ?>
		    <h2> <?php the_field('contact_hp_heading')?> </h1>
	<?php } ?> 

	<?php if (get_field('contact_hp_summary')){  ?>
		    <p> <?php the_field('contact_hp_summary')?> </p>
	<?php } ?> 

	<?php if (get_field('contact_hp_button_text')){  ?>
		    <button><?php the_field('contact_hp_button_text')?></button>
	<?php } ?> 
	
</div>
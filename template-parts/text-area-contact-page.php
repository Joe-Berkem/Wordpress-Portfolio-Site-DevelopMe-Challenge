<?php
/**
 * The template part for displaying the text section on the contact page
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<div class="container-fluid text-area-contact-container">

	
	<?php if (get_field('contact_text')){  ?>
		    <p class="full-width-text"> <?php the_field('contact_text')?> </p>
	<?php } ?> 

	
</div>
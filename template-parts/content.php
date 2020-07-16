<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * 
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Homitska 1.0
 */

?>

<div id="post-<?php the_ID(); ?>" class="content <?php echo implode(' ', Get_post_class());  ?>">
	<?php	
		the_content( __( 'Continue reading', 'twentytwenty' ) );
	?>
</div>
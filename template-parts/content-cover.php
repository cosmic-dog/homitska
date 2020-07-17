<?php
/**
 * Displays the content when the cover template is used.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

$imageUrl = get_the_post_thumbnail_url( get_the_ID(), 'twentytwenty-fullscreen' );
		
if ( $imageUrl ) {
	$coverStyle   = ' style="background-image: url( ' . esc_url( $imageUrl ) . ' );"';
}
?>

<div id="post-<?php the_ID(); ?>" class="content <?php echo implode(' ', Get_post_class());  ?>">
	<div class="cover" <?php echo $coverStyle; ?>></div>

	<?php	
		the_content( __( 'Continue reading', 'twentytwenty' ) );
	?>
</div>

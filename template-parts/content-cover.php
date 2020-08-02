<?php
/**
 * Displays the content when the cover template is used.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

$isMiddle = is_page_template('templates/template-cover-middle.php');
$imageUrl = get_the_post_thumbnail_url( get_the_ID(), 'twentytwenty-fullscreen' );
		
if ($imageUrl) 
	$coverStyle   = ' style="background-image: url( ' . esc_url( $imageUrl ) . ' );"';

?>

<div id="post-<?php the_ID(); ?>" class="content-cover <?php echo implode(' ', Get_post_class());  ?>">
	<div class="cover" <?php echo $coverStyle; ?>>
		<div class="title-wrap">
			<?php the_title( '<h1 class="ptop wow fadeInDown" data-wow-delay="0.3s">', '</h1>' ); ?>
		</div>
	</div>

	<?php	
		if ($isMiddle) 
			echo '<div class="middle">';
			
		the_content(__( 'Continue reading', 'twentytwenty' ));
		
		if ($isMiddle)
			echo '</div>';
	?>	
</div>

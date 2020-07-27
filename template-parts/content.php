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

$contentClasses = 'content ' . implode(' ', Get_post_class());
$isMiddle = is_page_template('templates/template-middle.php');

if ($isMiddle) $contentClasses .= ' middle';

?>

<div id="post-<?php the_ID(); ?>" class="<?php echo $contentClasses; ?>">
	<?php	
		if ($isMiddle) {
			the_title( '<h1 class="ptop">', '</h1>' );
		}

		the_content( __( 'Continue reading', 'twentytwenty' ) );
	?>
</div>
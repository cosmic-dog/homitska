<?php
/**
 * The template for displaying the 404 page.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Homitska 1.0
 */

get_header();
?>

<div id="error-page" class="content-cover">
	<div class="cover no-margin-bottom" style="background: #faf5f6;">
		<div class="title-wrap">
			<h1 class="entry-title">404. <?php _e( 'Page Not Found', 'twentytwenty' ); ?></h1>
			<p><?php _e( 'The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place.', 'twentytwenty' ); ?></p>
			<div>
				<a href="/" class="btn"><span>На начало</span></a>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();

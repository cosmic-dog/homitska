<?php
/**
 * Displays search
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

<?php
	// Check whether the header search is activated in the customizer.
	$enable_header_search = get_theme_mod( 'enable_header_search', true );

	if ( true === $enable_header_search ) {
?>
		<button class="toggle search-toggle mobile-search-toggle" data-toggle-target=".search-modal"
			data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
			<span class="toggle-inner">
				<span class="toggle-icon">
					<?php twentytwenty_the_theme_svg( 'search' ); ?>
				</span>
				<span class="toggle-text"><?php _e( 'Search', 'twentytwenty' ); ?></span>
			</span>
		</button><!-- .search-toggle -->
<?php } ?>
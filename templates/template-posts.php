<?php
/**
 * Template Name: Posts template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Homitska 1.0
 */

get_header();
?>

<main class="main" role="main">
	<?php
		$catObj = get_category_by_slug('portfolio-' . ICL_LANGUAGE_CODE);
		$catID = $catObj->term_id;

		$lastposts = get_posts(array(
			'category' => $catID
		));
	 
		if ( $lastposts ) {
			foreach ($lastposts as $post) : ?>
				<div class="block b-main">
					<div class="b-main-a">
						<a href="<?php block_field( 'url' ); ?>">
							<img class="wow fadeInLeft" src="<?php the_post_thumbnail_url(); ?>" alt="<?php block_field( 'heading' ); ?>" data-wow-delay="0.2s">
						</a>
					</div>

					<div class="b-main-b">
						<div>
							<h1 class="wow fadeInRight" data-wow-delay="0.1s">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h1>
				
							<p class="wow fadeInRight" data-wow-delay="0.5s">
								<?php echo get_the_excerpt(); ?> 
								<a href="<?php the_permalink(); ?>" class="h-icon h-icon-small h-icon-more">
									<i class="fa fa-arrow-circle-right"></i>
								</a>
							</p>
						</div>
					</div>
				</div>
				
			<?php
			endforeach; 
			
			wp_reset_postdata();
		}

		if ( have_posts() ) {

			while ( have_posts() ) {
				the_post();

				get_template_part( 'template-parts/content' );
			}
		}
	?>
</main>

<?php get_footer(); ?>



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
		$catObj = get_category_by_slug(get_post_meta(get_the_ID(), 'category', true));
		$catID = $catObj->term_id;
		
		$posts = get_posts(array(
			'numberposts' => 0,
			'category' => $catID
		));
	 
		if ($posts) {
			foreach ($posts as $post) : ?>
				<div class="block b-main">
					<div class="b-main-a">
						<a href="<?php the_permalink(); ?>">
							<img class="wow fadeInLeft" src="<?php the_post_thumbnail_url(); ?>" alt="<?php block_field( 'heading' ); ?>" data-wow-delay="0.2s">
						</a>
					</div>

					<div class="b-main-b">
						<div>
							<h1 class="wow fadeInRight" data-wow-delay="0.1s">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
							</h1>

							<?php 								
								if (has_blocks( $post->post_content )) {
									$blocks = parse_blocks( $post->post_content );
									$blockName = $blocks[0]['blockName'];
									$blockAttrs = $blocks[0]['attrs'];
								
									if ($blockName === 'block-lab/heading' && $blockAttrs['heading'] == 3)
										echo "<h4 class=\"lead wow fadeInRight\" data-wow-delay=\"0.3s\">{$blockAttrs['text']}</h4>";
								}
							?>
				
							<p class="wow fadeInRight" data-wow-delay="0.5s">
								<?php echo get_the_excerpt(); ?> 
								<a href="<?php the_permalink(); ?>" class="h-icon h-icon-small h-icon-more">
									<i class="fa fa-arrow-right"></i>
								</a>
							</p>
						</div>
					</div>
				</div>
				
			<?php
			endforeach; 
			
			wp_reset_postdata();
		}
	?>
</main>

<?php get_footer(); ?>



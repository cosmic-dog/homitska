<?php
/**
 * Block for displaying About first section
 *
 *
 * @package WordPress
 * @subpackage Homitska
 * @since Homitska 1.0
 */
?>


<div class="b-about">
    <div class="b-about-left">
        <img src="<?php block_field( 'image' ); ?>" alt="<?php block_field( 'heading' ); ?>">
    </div>
    <div class="b-about-right">
        <h1 class="wow fadeInRight" data-wow-delay="0.1s"><?php block_field( 'heading' ); ?></h1>
        <p class="wow fadeInRight" data-wow-delay="0.2s"><?php block_field( 'text' ); ?></p>
    </div>
</div>
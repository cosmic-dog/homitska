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


<div class="block b-about">
    <div class="b-about-left">
        <img src="<?php block_field( 'image' ); ?>" alt="<?php block_field( 'heading' ); ?>">
    </div>
    <div class="b-about-right">
        <h1 class="wow fadeInRight" data-wow-delay="0.1s"><?php block_field( 'heading' ); ?></h1>
        <h4 class="lead wow fadeInRight" data-wow-delay="0.3s"><?php block_field( 'lead' ); ?></h4>
        <p class="wow fadeInRight" data-wow-delay="0.5s"><?php block_field( 'text' ); ?></p>
    </div>
</div>
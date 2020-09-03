<?php
/**
 * Block for displaying Landing top part
 *
 *
 * @package WordPress
 * @subpackage Homitska
 * @since Homitska 1.0
 */

$hasBtn = !empty(block_field('button-label', false));
?>

<div class="cover b-landing-top" style="background-image: url(<?php  block_field( 'image'); ?>)">
    <div class="title-wrap">
        <h4 class="wow fadeInDown" data-wow-delay="0.1s"><?php block_field('top-lead'); ?></h4>
        <h1 class="alt wow fadeInDown" data-wow-delay="0.3s"><?php block_field('heading'); ?></h1>
        <p class="wow fadeInUp" data-wow-delay="0.4s"><?php block_field('text'); ?></p>

        <?php if ($hasBtn) : ?>
            <a href="<?php block_field('button-url'); ?>" class="btn wow fadeInUp" data-wow-delay="0.7s"> 
                <span><?php block_field('button-label'); ?></span>
            </a>
        <?php endif; ?>
    </div>
</div>


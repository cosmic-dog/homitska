<?php
/**
 * Block for displaying About second section
 *
 *
 * @package WordPress
 * @subpackage Homitska
 * @since Homitska 1.0
 */
?>

<div class="block b-question">
    <h2 class="wow fadeInDown" data-wow-delay="0.5s"><?php block_field( 'heading' ); ?></h2>

    <div class="b-question-left b-question-left-bg">
        <div class="b-question-inner">
            <h3 class="wow fadeInLeft" data-wow-delay="0.1s"><?php block_field( 'section-first' ); ?></h3>
            <p class="wow fadeInLeft" data-wow-delay="0.4s"><?php block_field( 'section-first-text' ); ?></p>
        </div>
    </div>
    
    <div class="b-question-right b-question-right-bg">
        <div class="b-question-inner">
            <h3 class="wow fadeInRight" data-wow-delay="0.5s"><?php block_field( 'section-second' ); ?></h3>
            <p class="wow fadeInRight" data-wow-delay="0.8s"><?php block_field( 'section-second-text' ); ?></p>
        </div>
    </div>

    <div class="b-question-left b-question-left-bga">
        <div class="b-question-inner">
            <h3 class="wow fadeInLeft" data-wow-delay="0.1s"><?php block_field( 'section-third' ); ?></h3>
            <p class="wow fadeInLeft" data-wow-delay="0.4s"><?php block_field( 'section-third-text' ); ?></p>
        </div>
    </div>
    
    <div class="b-question-right">
        <div class="b-question-inner">
            <?php block_field('form-shortcode') ?>
        </div>
    </div>
</div>
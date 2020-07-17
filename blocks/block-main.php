<?php
/**
 * Block for displaying main block with picture and text 
 *
 *
 * @package WordPress
 * @subpackage Homitska
 * @since Homitska 1.0
 */
?>

<div class="block b-main" style="background: <?php block_field( 'bg-color' ); ?>">
    <div class="b-main-a" style="background: <?php block_field( 'image-bg-color' ); ?>">
        <a href="<?php block_field( 'url' ); ?>">
            <img class="wow fadeInLeft" src="<?php block_field( 'image' ); ?>" alt="<?php block_field( 'heading' ); ?>" data-wow-delay="0.2s">
        </a>
    </div>
    <div class="b-main-b">
        <div>
            <h1 class="wow fadeInRight" data-wow-delay="0.1s">
                <a href="<?php block_field( 'url' ); ?>">
                    <?php block_field( 'heading' ); ?>
                </a>
            </h1>
            
            <?php if (!empty(block_field( 'lead', false ))) {  ?>
                <h4 class="lead wow fadeInRight" data-wow-delay="0.3s"><?php block_field( 'lead' ); ?></h4>
            <?php } ?>
            
            <p class="wow fadeInRight" data-wow-delay="0.5s"><?php block_field( 'text' ); ?> <a href="<?php block_field( 'url' ); ?>"><i class="fa fa-arrow-circle-right"></i></a></p>
        </div>
    </div>
    <!-- <div style="clear: both;"></div> -->
</div>
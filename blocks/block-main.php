<?php
/**
 * Block for displaying main block with picture and text 
 *
 *
 * @package WordPress
 * @subpackage Homitska
 * @since Homitska 1.0
 */

 $hasLink =  !empty(block_field( 'url', false ));
?>

<div class="block b-main" style="background: <?php block_field( 'bg-color' ); ?>">
    
<div class="b-main-a" style="background: <?php block_field( 'image-bg-color' ); ?>">
        <?php if ($hasLink) { ?>
            <a href="<?php block_field( 'url' ); ?>">
                <img class="wow fadeInLeft" src="<?php block_field( 'image' ); ?>" alt="<?php block_field( 'heading' ); ?>" data-wow-delay="0.2s">
            </a>
        <?php } else { ?>
            <img class="wow fadeInLeft" src="<?php block_field( 'image' ); ?>" alt="<?php block_field( 'heading' ); ?>" data-wow-delay="0.2s">
        <?php } ?>
    </div>

    <div class="b-main-b">
        <div>
            <?php if ($hasLink) { ?>
                <h1 class="alt wow fadeInRight" data-wow-delay="0.1s">
                    <a href="<?php block_field( 'url' ); ?>"><?php block_field( 'heading' ); ?></a>
                </h1>
            <?php } else { ?>
                <h1 class="alt wow fadeInRight" data-wow-delay="0.1s"><?php block_field( 'heading' ); ?></h1>
            <?php } ?>
            
            <?php if (!empty(block_field( 'lead', false ))) {  ?>
                <h4 class="lead wow fadeInRight" data-wow-delay="0.3s"><?php block_field( 'lead' ); ?></h4>
            <?php } ?>
            
            <p class="wow fadeInRight" data-wow-delay="0.5s"><?php block_field( 'text' ); ?> 
                <?php if ($hasLink) { ?>
                    <a href="<?php block_field( 'url' ); ?>" class="h-icon h-icon-small h-icon-more">
                        <i class="fa fa-arrow-circle-right"></i>
                    </a>
                <?php } ?>
            </p>
        </div>
    </div>
    <!-- <div style="clear: both;"></div> -->
</div>
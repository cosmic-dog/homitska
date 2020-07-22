<?php
/**
 * Block for displaying Map
 *
 *
 * @package WordPress
 * @subpackage Homitska
 * @since Homitska 1.0
 */

 $shortcode = block_field('shortcode', false);
 $html = block_field('html', false);
?>

<div class="block b-modal modal" id="<?php block_field('id') ?>">
    <svg class="modal-cross" viewBox="0 0 50 50"><path d="M1,1 l48,48 m-48,0 l48,-48"></path></svg>

    <h3><?php block_field('title'); ?></h3>
    <h4><?php block_field( 'lead' ); ?></h4>
    
    <div class="b-modal-body">
        <?php  
            if (!empty($shortcode)) {
                echo $shortcode;
            }
            else if (!empty($html)) {
                echo $html;
            }
        ?>
    </div>
</div>
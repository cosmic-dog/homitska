<?php
/**
 * Block for displaying Promotion modal
 *
 *
 * @package WordPress
 * @subpackage Homitska
 * @since Homitska 1.0
 */
?>

<div id="promotion-modal" class="block b-modal modal">
    <svg class="modal-cross" viewBox="0 0 50 50"><path d="M1,1 l48,48 m-48,0 l48,-48"></path></svg>

    <div class="modal-image" style="background-image: url(<?php block_field('image'); ?>)"></div>
    
    <h3><?php block_field('title'); ?></h3>
    <h4><?php block_field( 'lead' ); ?></h4>
    
    <div class="b-modal-body">
        <a href="<?php block_field('button-url'); ?>" class="btn modal-promotion-btn"><span><?php block_field('button-label'); ?></span></a>
    </div>
</div>

<script>
    setTimeout(() => {
        H.modal.modalOpen('promotion-modal');    
    }, <?php block_field('delay-time') ?>*1000);    
</script>
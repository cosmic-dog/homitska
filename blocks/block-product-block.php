<?php
/**
 * Block for displaying product block
 *
 *
 * @package WordPress
 * @subpackage Homitska
 * @since Homitska 1.0
 */

?>

<div class="block b-product-block">
    <div class="h-checkbox">
        <input type="checkbox" value="<?php block_field( 'price' ); ?>" />
    </div>
    <div class="b-product-block-info">
        <span class="b-product-block-number"><?php block_field( 'number' ); ?></span>
        <span class="b-product-block-price"><?php block_field( 'price' ); ?></span>
        <div style="clear: both;"></div>
        <p class="b-product-block-name"><?php block_field( 'name' ); ?></p>
    </div>
</div>

<?php
/**
 * Block for displaying product blocks total and button
 *
 *
 * @package WordPress
 * @subpackage Homitska
 * @since Homitska 1.0
 */

?>

<div class="block b-product-blocks-total">
    <h4 class="b-product-blocks-sum">Сумма &euro;<span>0</span></h4>

    <div style="text-align: center" class="btn-wrap">
        <button class="b-product-buy-btn" role="button" data-buy-url="<?php block_field( 'url' ); ?>">
            <span><?php block_field( 'label' ); ?></span>
        </button>
    </div>
</div>

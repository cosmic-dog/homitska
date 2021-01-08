<?php
/**
 * Block for displaying product
 *
 *
 * @package WordPress
 * @subpackage Homitska
 * @since Homitska 1.0
 */

$text = block_field( 'list', false );
$text = str_replace('<p>', '', $text);
$textArr = explode('</p>', $text);
$html = '';

array_pop($textArr);

foreach ($textArr as $el) {
    $html .= '<li>';
    $html .= $el;
    $html .= '</li>';
}
?>

<div class="block b-product b-product-rows-<?php block_field('blocks-row'); ?> wow <?php block_field('animation'); ?>" data-wow-delay="<?php block_field('animation-delay'); ?>s">
    <h3 style="background-color: <?php block_field('heading-bg-color'); ?>; color: <?php block_field('heading-color'); ?>;"><?php block_field( 'heading' ); ?></h3>
    <p class="b-product-intro"><?php block_field( 'intro' ); ?></p>
    <ul class="b-product-list h-list">
        <?php echo $html; ?>
    </ul>
    <p class="b-product-highlights"><?php block_field( 'highlights' ); ?></p>
    <div class="b-product-btn-wrap">
        <button class="b-product-buy-btn btn-bold" role="button" data-buy-url="<?php block_field( 'url' ); ?>">
            <span><?php block_field( 'price' ); ?></span>
        </button>
    </div>
</div>

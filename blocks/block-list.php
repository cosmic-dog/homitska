<?php
/**
 * Block for displaying List
 *
 *
 * @package WordPress
 * @subpackage Homitska
 * @since Homitska 1.0
 */

$text = block_field( 'text', false );
$text = str_replace('<p>', '', $text);
$textArr = explode('</p>', $text);
$html = '';

$delayValue = block_field( 'animation-delay', false );
$delay = !empty($delayValue) ? $delayValue : 0;

array_pop($textArr);

foreach ($textArr as $el) {
    $html .= '<li class="wow ' . block_field('animation', false) . '" data-wow-delay="' . $delay . 's">';
    $html .= $el;
    $html .= '</li>';
    $delay = $delay + 0.2;
}
?>

<div class="block b-list">
    <ul class="h-list <?php echo block_value('className'); ?>">
        <?php echo $html; ?>
    </ul> 
</div>
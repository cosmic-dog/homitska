<?php
/**
 * Block for displaying CTA button/link
 *
 *
 * @package WordPress
 * @subpackage Homitska
 * @since Homitska 1.0
 */

$html = '';
$delayValue = block_field( 'animation-delay', false );
$delay = !empty($delayValue) ? $delayValue : 0;

$url = block_field('url', false);
$modal = block_field('modal', false);
$align = block_field('alignment', false);

$span = '<span>' . block_field('label', false) . '</span>';

$isAligned = !empty($align) && $align != 'none';
$isLink =  !empty($url) && empty($modal);

$wrapAttrs = ($isAligned ? 'style="text-align: ' . $align . '" class="btn-wrap"' : 'style="display: inline-block"');
$buttonAttrs = ' class="'. ($isLink ? 'btn ' : '') 
                . 'wow ' 
                . block_field('animation', false) . ' ' 
                . block_value('className') 
                . '" data-wow-delay="' . $delay . 's"';
?>

<div <?php echo $wrapAttrs; ?>>
    <?php 
        if ($isLink)  {
            $html .= '<a href="' . $url . '"' . $buttonAttrs . '>';
            $html .= $span;
            $html .= '</a>';
        }
        else {
            $html .= '<button' . $buttonAttrs . ' data-modal="' . $modal . '"' . '>';
            $html .= $span;
            $html .= '</button>';
        }

        echo $html;
    ?>
</div>
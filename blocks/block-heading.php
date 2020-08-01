<?php
/**
 * Block for displaying Headings
 *
 *
 * @package WordPress
 * @subpackage Homitska
 * @since Homitska 1.0
 */

    $html = '';
    $heading = block_field( 'heading', false );
    $animation = block_field('animation', false);
    $delayValue = block_field( 'animation-delay', false );
    $delay = !empty($delayValue) ? $delayValue : 0;
    $text = block_field('text', false);

    $html .= "<h$heading class=\"wow $animation\" data-wow-delay=\"{$delay}s\">$text</h$heading>";
    
    echo $html;
?>
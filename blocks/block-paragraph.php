<?php
/**
 * Block for displaying Paragraph
 *
 *
 * @package WordPress
 * @subpackage Homitska
 * @since Homitska 1.0
 */

$link = block_field('url', false);
$bgColor = block_field('background-color', false);
$delayValue = block_field('animation-delay', false);
$delay = !empty($delayValue) ? $delayValue : 0;
$bgColorClass = '';

if (!empty($bgColor)) {
    $bgColorClass = 'bg-color ' . $bgColor;
}
?>

<p class="b-paragraph wow <?php echo $bgColorClass; ?> <?php block_field('animation'); ?> <?php echo block_value('className'); ?>" data-wow-delay="<?php echo $delay; ?>s">
    <?php 
        echo block_field('text'); 

        if (!empty($link)) : ?>
            <a href="<?php echo $link ?>" class="h-icon h-icon-small h-icon-more">
                <i class="fa fa-arrow-right"></i>
            </a>
        <?php endif; ?>
</p>
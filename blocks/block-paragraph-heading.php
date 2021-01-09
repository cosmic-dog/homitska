<?php
/**
 * Block for displaying Paragraph with heading
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

<div class="b-paragraph-heading middle <?php echo $bgColorClass; ?> <?php echo block_value('className'); ?>" style="text-align: <?php block_field('text-align'); ?>;"> 
    <h3 class="wow <?php block_field('heading-animation'); ?>" data-wow-delay="<?php block_field('heading-animation-delay'); ?>s"><?php block_field('heading'); ?></h3>

    <p class="wow <?php block_field('paragraph-animation'); ?>" data-wow-delay="<?php block_field('paragraph-animation-delay'); ?>s"><?php echo block_field('paragraph'); ?></p>
</div>
<?php
/**
 * Block for displaying Paragraph
 *
 *
 * @package WordPress
 * @subpackage Homitska
 * @since Homitska 1.0
 */

$delayValue = block_field( 'animation-delay', false );
$delay = !empty($delayValue) ? $delayValue : 0;
?>

<p class="b-paragraph wow <?php block_field('animation'); ?> <?php echo block_value('className'); ?>" data-wow-delay="<?php echo $delay; ?>s">
    <?php echo block_field('text'); ?>
</p>
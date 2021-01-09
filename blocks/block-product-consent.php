<?php
/**
 * Block for displaying product consent
 *
 *
 * @package WordPress
 * @subpackage Homitska
 * @since Homitska 1.0
 */

$bgColor = block_field('background-color', false);
$bgColorClass = '';

if (!empty($bgColor)) {
    $bgColorClass = 'bg-color ' . $bgColor;
}
?>

<div class="block b-product-consent product-consent middle <?php echo $bgColorClass; ?>">
    <h4 class="lead"><?php block_field('text'); ?></h4>

    <ul>
        <li>
            <div class="h-checkbox">
                <input type="checkbox" value="consent" />
            </div>
            <a href="<?php block_field('consent-one-link'); ?>" target="_blank"><?php block_field('consent-one-text'); ?></a>
        </li>
        <li>
            <div class="h-checkbox">
                <input type="checkbox" value="consent" />
            </div>
            <a href="<?php block_field('consent-two-link'); ?>" target="_blank"><?php block_field('consent-two-text'); ?></a>
        </li>
        <li>
            <div class="h-checkbox">
                <input type="checkbox" value="consent" />
            </div>
            <a href="<?php block_field('consent-three-link'); ?>" target="_blank"><?php block_field('consent-three-text'); ?></a>
        </li>
    </ul>

    <div class="btn-wrap">
        <a href="#" class="btn consent-btn disabled" target="_blank"><span><?php block_field('button-text'); ?></span></a>
        <p class="link-tip"><?php block_field('tip'); ?></p>
    </div>
</div>

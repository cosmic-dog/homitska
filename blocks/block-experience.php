<?php
/**
 * Block for displaying 3 columns of experience
 *
 *
 * @package WordPress
 * @subpackage Homitska
 * @since Homitska 1.0
 */
$h1arr = explode(' ', block_field('heading-1', false));
$h2arr = explode(' ', block_field('heading-2', false));
$h3arr = explode(' ', block_field('heading-3', false));
?>
<div class="block b-experience">
    <ul>
        <li class="wow fadeInRight" data-wow-delay="0.1s">
            <h3 class="alt">
                <?php echo $h1arr[0]; ?>
                <em><?php echo $h1arr[1]; ?></em>
            </h3>
            <span><?php block_field('text-1'); ?></span>
        </li>
        <li class="wow fadeInRight" data-wow-delay="0.3s">
            <h3 class="alt">
                <?php echo $h2arr[0]; ?>
                <em><?php echo $h2arr[1]; ?></em>
            </h3>
            <span><?php block_field('text-2'); ?></span>
        </li>
        <li class="wow fadeInRight" data-wow-delay="0.5s">
            <h3 class="alt">
                <?php echo $h3arr[0]; ?>
                <em><?php echo $h3arr[1]; ?></em>
            </h3>
            <span><?php block_field('text-3'); ?></span>
        </li>
    </ul>
</div>
<?php
/**
 * Block for displaying About second section
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
$liIndex = 0.2;

array_pop($textArr);

foreach ($textArr as $el) {
    $html .= '<li class="wow fadeInLeft" data-wow-delay="' . $liIndex . 's">';
    $html .= $el;
    $html .= '</li>';
    $liIndex = $liIndex + 0.2;
}
?>

<div class="block b-about-two">
    <div class="b-about-two-left">
       <ul>
            <?php echo $html; ?>
        </ul> 
        
    </div>

    <div class="b-about-two-right">
        <img src="<?php block_field( 'image' ); ?>" alt="Elga" class="wow fadeInRight">       
        <div class="b-about-two-bg"></div> 
    </div>
</div>
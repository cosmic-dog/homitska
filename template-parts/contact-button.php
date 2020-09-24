<?php
/**
 * Displays Contacts Us button
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Homitska 1.0
 */

?>

<button class="trans btn-small" data-modal="contactus">
	<?php 
		if (ICL_LANGUAGE_CODE == 'ru') 
			echo '<span>Связаться с нами</span>';
		if (ICL_LANGUAGE_CODE == 'en') 
			echo '<span>Сontact us</span>';
		if (ICL_LANGUAGE_CODE == 'lv') 
			echo '<span>Sazinātos ar mums</span>';
	?>
</button>
<?php
/**
 * Displays Contacts Us button
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Homitska 1.0
 */

?>

<button class="header-menu-btn trans no-animation">
	<?php 
		if (ICL_LANGUAGE_CODE == 'ru') 
			echo '<span>Меню</span>';
		if (ICL_LANGUAGE_CODE == 'en') 
			echo '<span>Menu</span>';
		if (ICL_LANGUAGE_CODE == 'lv') 
			echo '<span>Izvēlne</span>';
	?>
							
	<i class="fa fa-close"></i>
</button>

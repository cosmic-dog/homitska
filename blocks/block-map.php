<?php
/**
 * Block for displaying Map
 *
 *
 * @package WordPress
 * @subpackage Homitska
 * @since Homitska 1.0
 */

 $hMapKey = 'AIzaSyAC85p5I78f2GsVnHsurGI5wd2RJelsHAg';
 $yMapKey = 'AIzaSyA5dG5ZVpo0kX1TTbSllPkXHQK7SODUi-0';

 $countriesString = '';
 $countries = block_field( 'countries', false );
 $countries = explode(',', $countries);

 foreach ($countries as $country) {
    $countriesString .=  "'{$country}',";
 }

 $countriesString = rtrim($countriesString, ",");
?>

<div class="block b-map">
    <h2 class="bg-alt wow fadeInUp" data-wow-delay="0.5s"><?php block_field( 'heading' ); ?></h2>
    
    <div id="map"></div>
</div>

<script>var hCountries = [<?php echo $countriesString; ?>]</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/map.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=<?php echo $hMapKey ?>&callback=hMap.initMap"></script>
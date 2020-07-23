<?php
/**
 * Block for displaying Posts by Category
 *
 *
 * @package WordPress
 * @subpackage Homitska
 * @since Homitska 1.0
 */

$heading = block_field('heading', false); 
$cat = block_field('category', false);
$slideToShow = block_field('slide-show', false);
$showContent = block_field('show-content', false);
$showReadmore = block_field('show-readmore', false);
$showArrows = block_field('show-arrows', false);
$autoPlay = block_field('auto-play', false); 
  /* 
    Add background field
*/
?>

<div class="block b-posts">
    <?php
        if (!empty($heading)) { 
            echo "<h2 class=\"wow fadeInUp\" data-wow-delay=\"0.5s\">$heading</h2>";
        }
          

        $shortcode = "[psac_post_carousel 
                        orderby='ID' show_author='false' show_category='false' show_date='false' show_comments='false' dots='false' 
                        category='$cat' 
                        slide_show='$slideToShow' 
                        show_content='$showContent' 
                        show_read_more='$showReadmore'  
                        arrows='$showArrows' 
                        autoplay='$autoPlay']";

        echo $shortcode;
    ?>    
</div>

<?php /*
# limit=”10″                ( i.e Display 5 posts in a slider or carousel. To show all posts use limit=”-1″ )

# category=”category_ID”    ( i.e Display posts by their category ID )

# design=”design-1″         (Select design for post design. There are 2 designs. design-1 and design-2 )

# show_author=”false”       (Show post author or not. values are true or false)
# show_category=”false”     (Show post category or not. values are true or false)
# show_date=”false”         (Show post date or not. values are true or false)
# show_content=”false”      (Show post content or not. values are true or false)
# content_words_limit=”40″  (Set content words limit for post.)

# media_size=”large”        (Set media size for post. values are thumbnail, medium, large, full)

# show_read_more=”true”     (Show read more button of post. values are true or false)
# show_tags=”true”          (Show tags of post. values are true or false)
# show_comments=”true”      (Show comments of post. values are true or false)

# order=”DESC”              (Designates the ascending or descending order of the ‘orderby’ parameter. Defaults to ‘DESC’. Values are “DESC” and “ASC”)
# orderby=”post_date”       (Sort retrieved posts by parameter. Defaults to ‘date (post_date)’. One or more options can be passed. ‘none’,ID’,’author’,’title’,’name’,rand’,date’)

# dots=”false”              
# arrows=”false”            (Display dot and arrows in the slider or carousel)

# autoplay=”true” autoplay_interval=”2000″ (Set autoplay and autoplay interval for slider or carousel)
# speed=”1000″ (Set speed for slider or carousel)
# loop=”true” ( Display slider in Loop OR not : You can use “true” OR “false”)
# sliderheight=”400″ ( Set media height for slider or carousel )

Others Parameters for Carousel Shortcode
# [psac_post_carousel slide_show=”3″] (Display 3 slide item at a time.)
# [psac_post_carousel slide_scroll=”1″] (Scroll 1 slide item at a time.)
*/?>
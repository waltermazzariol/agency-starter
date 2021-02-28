<?php /* Template Name: Home Template */ 

get_header();
?>

<?php 
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
   
        /* grab the url for the full size featured image */
    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
    echo '<section class="container-fluid hero" style="background-image: url('.esc_url($featured_img_url).');"></section>';
    }
}
?>



<?php
get_sidebar();
get_footer();

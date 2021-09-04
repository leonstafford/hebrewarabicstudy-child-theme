<?php
/**
 * The front page template file
 *
 * @package HebrewArabicChildTheme
 */

get_header();

?>

This is the front page

<?php

if ( have_posts() ) {

    // Load posts loop.
    while ( have_posts() ) {
        the_post();

        the_title('<h2>', '</h2>');
 
        the_content();
    }


} else {

        echo "<h2>No content found</h2>";
 
        echo "<p>Put something here</p>";
        

}

get_footer();

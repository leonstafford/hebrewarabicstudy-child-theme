<?php
/**
 * The front page template file
 *
 * @package HebrewArabicChildTheme
 */

get_header();

?>

<h1>Hebrew &amp; Arabic Study</h1>

<p>Welcome to my site!</p>

<p>I created this site for a few reasons:</p>

<ul>
    <li> to force me to learn in public for extra pressure/motivation</li>
    <li> to help others with learning resources and to see my embarrassing struggle hopefully bear fruit with persistence</li>
    <li> to get more familiar with Strattic's awesome static WordPress publishing system, as a user, not just a developer/employee</li>
    <li> to see me fork my <a href="">Accessible Minimalism Hugo Theme</a> to WordPress</li>
</ul>

<h2>My latest Hebrew &amp; Arabic study notes</h2>

<?php
// display recent Blog posts
$the_query = new WP_Query(
    [ 
        'category_name' => 'blog', 
        'posts_per_page' => 5 
    ]
 ); 
      
if ( $the_query->have_posts() ) {

    echo '<ul>';

    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        echo '<li><a href="' . get_the_permalink() .'">' . get_the_title() .'</a></li>';
    }
}

echo '</ul>';
  
// reset after custom WP_Query (needed?)
wp_reset_postdata();

get_footer();
?>




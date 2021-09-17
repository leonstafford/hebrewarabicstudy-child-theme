<?php
/**
 * The front page template file
 *
 * @package HebrewArabicChildTheme
 */

get_header();

?>

<p><b>Welcome to my site!</b></p>

<p>I created this site for a few reasons:</p>

<ul>
    <li> to force me to learn in public for extra pressure/motivation</li>
    <li> to help others with learning resources and to see my embarrassing struggle hopefully bear fruit with persistence</li>
    <li> to get more familiar with Strattic's awesome static WordPress publishing system, as a user, not just a developer/employee</li>
    <li> to see me fork my <a href="https://github.com/leonstafford/accessible-minimalism-hugo-theme">Accessible Minimalism Hugo Theme</a> to WordPress</li>
</ul>

<h2>My latest Hebrew &amp; Arabic study notes</h2>

<?php
// display recent Blog posts
$the_query = new WP_Query(
    [ 
        'cat' => 2, 
        'posts_per_page' => 5 
    ]
 ); 

var_dump($the_query);
      
if ( $the_query->have_posts() ) {

    echo '<ul>';

    while ( have_posts() ) {
        the_post();

?>
       <li> 
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php the_title('', ''); ?></a>

        <?php echo get_the_date(); ?>

        </li>
<?php 
    } // end posts loop
}

echo '</ul>';
  
// reset after custom WP_Query (needed?)
wp_reset_postdata();

get_footer();
?>




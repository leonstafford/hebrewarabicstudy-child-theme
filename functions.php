<?php
/**
 * The functions.php file
 *
 * @package HebrewArabicChildTheme
 */

add_filter( 'wp_title', 'accessible_minimalism_wp_title_for_home' );
 
/**
 * Customize the title for the home page, if one is not set.
 *
 * @param string $title The original title.
 * @return string The title to use.
 */
function accessible_minimalism_wp_title_for_home( $title )
{
  if ( empty( $title ) && ( is_home() || is_front_page() ) ) {
    $title = 'Hebrew &amp; Arabic Study';
  }

  return $title;
}

function accessible_minimalism_category_template( $template ) {
    if ( cat_is_ancestor_of( 4, get_queried_object_id() /* The current category ID */ ) )
    {
        $template = locate_template( 'category-resource.php' );
    }

    return $template;
}


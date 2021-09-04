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

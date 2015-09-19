<?php
/**
* Function for responsive featured images.
* Creates a  element and populates it with appropriate image sizes for different screen widths.
* Works in place of the_post_thumbnail();
*/

function responsive_featured_image($post_id) {
// Check to see if there is a transient available. If there is, use it.
if ( false === ( $thumb_data = get_transient( 'featured_image_' . $post_id ) ) ) {
  set_responsive_featured_transient($post_id);
  $thumb_data = get_transient( 'featured_image_' . $post_id );
}

echo '<picture>';
 echo '<!--[if IE 9]><video style="display: none;"><![endif]-->';
 echo '<source srcset="' . $thumb_data['thumb_xtralarge'] . ', ' . $thumb_data['thumb_original'] . ' 2x" media="(min-width: 1030px)">';
 echo '<source srcset="' . $thumb_data['thumb_large'] . ', ' . $thumb_data['thumb_original'] . ' 2x" media="(min-width: 786px)">';
 echo '<source srcset="' . $thumb_data['thumb_medium'] . ', ' . $thumb_data['thumb_large'] . ' 2x" media="(min-width: 400px)">';
 echo '<source srcset="' . $thumb_data['thumb_small'] . ', ' . $thumb_data['thumb_medium'] . ' 2x">';
 echo '<!--[if IE 9]></video><![endif]-->';
 echo '<img class="hero-img" srcset="' . $thumb_data['thumb_small'] . ', ' . $thumb_data['thumb_medium'] . ' 2x" alt="' . $thumb_data['thumb_alt'] . '">';
 echo '</picture>';
}

/**
* Create image transient to avoid looping through multiple image queries every time a post loads.
* Called any time a post is saved or updated right after existing transient is flushed.
* Called by responsive_featured_image when no transient is set.
*
* - Get the featured image ID
* - Get the alt text (if no alt text is defined, set the alt text to the post title)
* - Build an array with each of the available image sizes + the alt text
* - Set a transient with the label "featured_image_[post_id] that expires in 12 months
*/

function set_responsive_featured_transient($post_id) {
  $attachment_id = get_post_thumbnail_id($post_id);
  $alt_text = get_post_meta($attachment_id, '_wp_attachment_image_alt', true);
  if ( !$alt_text ) { $alt_text = esc_html( get_the_title($post_id) ); }
    $thumb_original = wp_get_attachment_image_src($attachment_id, 'full');
    $thumb_xtralarge = wp_get_attachment_image_src($attachment_id, 'xtralarge-thumb');
    $thumb_large   = wp_get_attachment_image_src($attachment_id, 'large-thumb');
    $thumb_medium   = wp_get_attachment_image_src($attachment_id, 'medium-thumb'); 
    $thumb_small   = wp_get_attachment_image_src($attachment_id, 'small-thumb');
    $thumb_data = array(
      'thumb_original'  => $thumb_original[0],
      'thumb_xtralarge' => $thumb_xtralarge[0],
      'thumb_large'     => $thumb_large[0], 
      'thumb_medium'    => $thumb_medium[0],
      'thumb_small'     => $thumb_small[0],
      'thumb_alt'       => $alt_text
);

set_transient( 'featured_image_' . $post_id, $thumb_data, 52 * WEEK_IN_SECONDS );
}

/**
* Reset featured image transient when the post is updated
*/

add_action('save_post', 'reset_responsive_featured_transient');

function reset_responsive_featured_transient( $post_id ) {
  delete_transient( 'featured_image_' . $post_id );
  if ( has_post_thumbnail($post_id) ) {
    set_responsive_featured_transient($post_id);
  }
}

<?php
/**
 * Get the excerpt for a WP_Post by post ID.
 *
 * @param int $post_id
 */
function get_excerpt_by_id( $post_id = 0 ) {
    global $post;
    $save_post = $post;
    $post = get_post( $post_id );
    setup_postdata( $post );
    $excerpt = get_the_excerpt();
    $post = $save_post;
    wp_reset_postdata( $post );
    return $excerpt;
}
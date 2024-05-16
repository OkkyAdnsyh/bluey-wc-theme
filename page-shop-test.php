<?php
/**
 * This is test page to check if it's okay to create standalone custom page
 */

/**
 * Querying All Post on Product Post Type
 */
 $query_args = array(
    'post_type' => 'product',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'ASC'
 );

 $post = new WP_Query($query_args);
 $product = wc_get_product( $post->posts[0]->ID );
 $product_thumb = get_the_post_thumbnail_url( $post->posts[0]->ID );
 $price = $product->get_price();
 echo '<pre>';
 print_r($product);
 echo '</pre>';

?>
<img src="<?php echo esc_url( $product_thumb ); ?>" alt="">
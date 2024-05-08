<?php
/**
 * Theme class to override woocommerce hook
 */

   defined( 'ABSPATH' ) || die;

   if(class_exists( 'Woocommerce' )){
       
      if(!function_exists('bluey_wc_main_content_wrapper_start')){
           /**
           * Wrapper content for loop container with open section
           */
           function bluey_wc_main_content_wrapper_start(){
             echo '<section class="bluey-loop__wrapper">';
           }
      }
      if(!function_exists('bluey_wc_main_content_wrapper_end')){
           /**
           * Wrapper content for loop container with closed section
           */
           function bluey_wc_main_content_wrapper_end(){
                echo '</section>';
           }
      }
      if(!function_exists('bluey_wc_product_taxonomy_header')){
           /**
            * Print template part from shop header
            */
           function bluey_wc_product_taxonomy_header(){
             echo get_template_part( 'shop', 'header' );
           }
      }
      if(!function_exists('bluey_wc_product_loop_container_start')){
           /**
            * Wrapper for product container loop
            */
           function bluey_wc_product_loop_container_start(){
              global $product;
              $link = apply_filters( 'bluey_wc_product_link', get_the_permalink( ), $product );
              echo '<a href="' . esc_url( $link ) . '" class="bluey__product-container">';
           }
      }
      if(!function_exists('bluey_wc_product_loop_container_end')){
           /**
            * Wrapper for product container loop with closing a tag
            */
           function bluey_wc_product_loop_container_end(){
               echo '</a>';
           }
      }
      if(!function_exists('bluey_wc_product_thumbnail')){
         /**
          * Bluey WC product thumbnail with container
          */
         function bluey_wc_product_thumbnail(){
            echo get_template_part( 'product', 'thumb' );
         }
      }
   }

/**
 * unhook initial WC action
 * 
 * Hook: woocommerce_before_main_content.
 *
 * @unhooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @unhooked woocommerce_breadcrumb - 20
 * @hooked bluey_wc_main_content_wrapper_start - 10
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
   remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
   remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
   add_action( 'woocommerce_before_main_content', 'bluey_wc_main_content_wrapper_start', 10 );

/**
 * Hook: woocommerce_shop_loop_header.
 *
 * @since 8.6.0
 *
 * @unhooked woocommerce_product_taxonomy_archive_header - 10
 * @hooked bluey_wc_product_taxonomy_header -10
 */
   remove_action( 'woocommerce_shop_loop_header', 'woocommerce_product_taxonomy_archive_header', 10 );
   add_action( 'woocommerce_shop_loop_header', 'bluey_wc_product_taxonomy_header', 10);

   /**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @unhooked woocommerce_result_count - 20
	 * @unhooked woocommerce_catalog_ordering - 30
	 */
	remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
	remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

   /**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @unhooked woocommerce_template_loop_product_link_open - 10
    * @hooked bluey_wc_product_loop_container_start - 10
	 */
	remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
   add_action( 'woocommerce_before_shop_loop_item', 'bluey_wc_product_loop_container_start', 10 );

   /**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @unhooked woocommerce_template_loop_product_thumbnail - 10
    * @hooked bluey_wc_product_thumbnail - 10
	 */
	remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
	add_action( 'woocommerce_before_shop_loop_item_title', 'bluey_wc_product_thumbnail', 10 );

   /**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @unhooked woocommerce_template_loop_product_link_close - 5
    * @hooked bluey_wc_product_loop_container_end - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
   remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );
   add_action( 'woocomerce_after_shop_loop_item', 'bluey_wc_product_loop_container_end', 5 );
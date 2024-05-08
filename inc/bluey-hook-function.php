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
           function bluey_wc_product_taxonomy_header(){
              echo get_template_part( 'shop', 'header' );
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
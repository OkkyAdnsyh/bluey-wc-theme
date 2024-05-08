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
               echo '</section>'
            }
        }
    }
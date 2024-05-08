<?php
    /**
     * Class served for initial purpose of the theme when activated
     * 
     * @package WC Bluey Theme
     */

    defined( 'ABSPATH' ) || die;
    
    if ( !class_exists( 'Bluey_Init' ) ){
        class Bluey_Init{
            /**
             * Execute function when class created
             */
            public function __construct(){
                add_action( 'after_setup_theme', array($this, 'setup') );
				add_action( 'after_switch_theme', array($this, 'register_new_page') );
                add_action( 'wp_enqueue_scripts', array($this, 'register_style'), 30 );
                add_action( 'wp_enqueue_scripts', array($this, 'register_script'), 10 );
            }

            /**
             * Setup all Wordpress theme support upon init hook
             */
            public function setup(){
			    /**
			     * Add default posts and comments RSS feed links to head.
			     */
			    add_theme_support( 'automatic-feed-links' );

			    /*
			     * Enable support for Post Thumbnails on posts and pages.
			     *
			     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#Post_Thumbnails
			     */
			    add_theme_support( 'post-thumbnails' );

                /**
                 * Enable menu creation support
                 */
                add_theme_support( 'menus' );

			    /**
			     * Enable support for site logo.
			     */
			    add_theme_support(
			    	'custom-logo',
			    	apply_filters(
			    		'bluey_custom_logo_args',
			    		array(
			    			'height'      => 110,
			    			'width'       => 470,
			    			'flex-width'  => true,
			    			'flex-height' => true,
			    		)
			    	)
			    );

			    /**
			     * Register menu locations.
			     */
			    register_nav_menus(
			    	apply_filters(
			    		'bluey_register_nav_menus',
			    		array(
			    			'primary'   => __( 'Primary Menu', 'wc-bluey' ),
			    			'secondary' => __( 'Secondary Menu', 'wc-bluey' ),
			    			'responsive'  => __( 'Responsive Menu', 'wc-bluey' ),
			    		)
			    	)
			    );

			    /*
			     * Switch default core markup for search form, comment form, comments, galleries, captions and widgets
			     * to output valid HTML5.
			     */
			    add_theme_support(
			    	'html5',
			    	apply_filters(
			    		'bluey_html5_args',
			    		array(
			    			'search-form',
			    			'comment-form',
			    			'comment-list',
			    			'gallery',
			    			'caption',
			    			'widgets',
			    			'style',
			    			'script',
			    		)
			    	)
			    );

			    /**
			     * Setup the WordPress core custom background feature.
			     */
			    add_theme_support(
			    	'custom-background',
			    	apply_filters(
			    		'bluey_custom_background_args',
			    		array(
			    			'default-color' => apply_filters( 'bluey_default_background_color', 'ffffff' ),
			    			'default-image' => '',
			    		)
			    	)
			    );

			    /**
			     * Setup the WordPress core custom header feature.
			     */
			    add_theme_support(
			    	'custom-header',
			    	apply_filters(
			    		'bluey_custom_header_args',
			    		array(
			    			'default-image' => '',
			    			'header-text'   => false,
			    			'width'         => 1950,
			    			'height'        => 500,
			    			'flex-width'    => true,
			    			'flex-height'   => true,
			    		)
			    	)
			    );

			    /**
			     *  Add support for the Site Logo plugin and the site logo functionality in JetPack
			     *  https://github.com/automattic/site-logo
			     *  http://jetpack.me/
			     */
			    add_theme_support(
			    	'site-logo',
			    	apply_filters(
			    		'bluey_site_logo_args',
			    		array(
			    			'size' => 'full',
			    		)
			    	)
			    );

			    /**
			     * Declare support for title theme feature.
			     */
			    add_theme_support( 'title-tag' );

			    /**
			     * Declare support for selective refreshing of widgets.
			     */
			    add_theme_support( 'customize-selective-refresh-widgets' );

			    /**
			     * Add support for Block Styles.
			     */
			    add_theme_support( 'wp-block-styles' );

			    /**
			     * Add support for full and wide align images.
			     */
			    add_theme_support( 'align-wide' );

			    /**
			     * Add support for editor styles.
			     */
			    add_theme_support( 'editor-styles' );

			    /**
			     * Add support for editor font sizes.
			     */
			    add_theme_support(
			    	'editor-font-sizes',
			    	array(
			    		array(
			    			'name' => __( 'Small', 'wc-bluey' ),
			    			'size' => 14,
			    			'slug' => 'small',
			    		),
			    		array(
			    			'name' => __( 'Normal', 'wc-bluey' ),
			    			'size' => 16,
			    			'slug' => 'normal',
			    		),
			    		array(
			    			'name' => __( 'Medium', 'wc-bluey' ),
			    			'size' => 23,
			    			'slug' => 'medium',
			    		),
			    		array(
			    			'name' => __( 'Large', 'wc-bluey' ),
			    			'size' => 26,
			    			'slug' => 'large',
			    		),
			    		array(
			    			'name' => __( 'Huge', 'wc-bluey' ),
			    			'size' => 37,
			    			'slug' => 'huge',
			    		),
			    	)
			    );

			    /**
			     * Add support for responsive embedded content.
			     */
			    add_theme_support( 'responsive-embeds' );

                /**
                 * Woocommerce theme support 
                 */
                add_theme_support( 'woocommerce' );

            }

            /**
             * Register style 
             */
            public function register_style(){
                global $theme_version;
                /**
                 * Enqueue main style & editor style
                 */
                wp_enqueue_style( 'main_style', get_template_directory_uri(  ) . 'css/style.css', $theme_version);
                add_editor_style( get_template_directory_uri(  ) . 'editor-style.css' );
            }

            /**
             * Register function
             */
            public function register_script(){
                /**
                 * Enqueue main script and conditional script
                 */
                wp_enqueue_script( 'main', get_template_directory_uri(  ) . 'script/script.js', array('jquery'), $theme_version, true );

                if(is_home(  )){
                    wp_enqueue_script( 'slider', get_template_directory_uri(  ) . 'script/slider.js', array('jquery'), $theme_version, true );
                }
            }
			/**
			 * Insert tempalate page
			 */
			public function add_new_page($page_name){
				$check_page = new WP_query( 
					array(
						'post_type' => 'page',
						'post_title' => $page_name,
						'post_status' => 'publish'
					)
				 );
				$page_title = __($page_name, 'wc-bluey');

				$new_page = array(
					'post_type' => 'page',
					'post_title' => $page_title,
					'post_content' => ''
				);

				// if page not exist create
				if(!isset($check_page->ID)){
					wp_insert_post( $new_page );
				}
			}
			/**
			 * Register faq, about-us, contact
			 */
			public function register_new_page(){
				$this->add_new_page( 'About Us' );
				$this->add_new_page( 'F.A.Q' );
				$this->add_new_page( 'Contact' );
			}
        }
    }

    return new Bluey_Init();
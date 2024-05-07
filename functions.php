<?php
/**
 * WC Bluey Theme Engine Room
 *
 * @package WC Bluey Theme
 */

/**
 * Assign the WC Bluey Theme version to a var
 */
$theme              = wp_get_theme( 'wc-bluey-theme' );
$theme_version = $theme['Version'];

$theme_init = (object) array(
	'version'    => $theme_version,

	/**
	 * Initialize all the things.
	 */
	'main'       => require 'inc/class-bluey-init.php',
);
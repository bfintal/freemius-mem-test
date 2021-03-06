<?php
/**
 * Init Freemius.
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Create a helper function for easy SDK access.
if ( ! function_exists( 'test_fs' ) ) {
	function test_fs() {
	    global $sugb_fs;

	    if ( ! isset( $sugb_fs ) ) {
	        // Include Freemius SDK.
	        require_once dirname(__FILE__) . '/freemius/start.php';

	        $sugb_fs = fs_dynamic_init( array(
	            'id'                  => '1748',
	            'slug'                => 'stackable-ultimate-gutenberg-blocks',
	            'type'                => 'plugin',
	            'public_key'          => 'pk_771ae29c5255d20a4880980729a17',
				'is_premium'          => true,
				'has_premium_version' => true,
	            'has_addons'          => false,
				'has_paid_plans'      => true,
				'navigation'          => 'tabs',
				// 'menu'                => array(
				// 	'slug'       => 'stackable',
				// 	// 'first-path'  => 'options-general.php?page=stackable-getting-started',
				// 	'account'    => true,
				// 	'pricing'    => true,
				// 	'contact'    => true,
                //     'support'    => false,
                //     'affiliation' => false,
				// 	// 'parent'     => array(
                //         // 'slug' => 'options-general.php',
				// 	// ),
				// ),
	        ) );
	    }

	    return $sugb_fs;
	}

	// Init Freemius.
	test_fs();
	// Signal that SDK was initiated.
	do_action( 'sugb_fs_loaded' );

}

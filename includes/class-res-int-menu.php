<?php
/**
 * The main Plugin Class
 *
 * @since 1.0.0
 *
 * @package Responsive_Int_Menu
 */


// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
* The Main plugin Class / Loads the core features for the plugin
*/
class Res_Int_Menu
{
	
	function __construct()
	{

		add_action( 'admin_menu', array ( $this, 'add_menu' ) );

	}

	public function add_menu() {
		//Add Menu page 
		 add_menu_page(
        __( 'Responsive Menu', 'textdomain' ),
        'Responsive Menu',
        'manage_options',
        'responsive-menu',
        array( $this, 'add_menu_callback' ),
        'dashicons-marker',
        6
    );


	}

	public function add_menu_callback() {


		
	}
}
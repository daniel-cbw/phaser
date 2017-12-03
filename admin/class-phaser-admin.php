<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       coolblueweb.com
 * @since      1.0.0
 *
 * @package    Phaser
 * @subpackage Phaser/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Phaser
 * @subpackage Phaser/admin
 * @author     Daniel Jackson <daniel@coolblueweb.com>
 */
class Phaser_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

		if ( !get_option( 'phaser_settings' ) ) {
			update_option('phaser_settings', '' );
		}

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Phaser_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Phaser_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/phaser-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Phaser_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Phaser_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/phaser-admin.js', array( 'jquery' ), $this->version, false );

	}

	public function render_svg_on_upload( $attachment_ID ) {

		$svg_util = new Phaser_Create_SVG();
		$path = $svg_util->get_image_path( $attachment_ID );
		
		
		$meta = $svg_util->get_image_data( $attachment_ID, $path );
		//update_option('phaser_settings', imagecreatefromjpeg($path));
		/*
		[width] => 128
		[height] => 228
		[file] => 2017/12/magento_solution_specialist_360-1.png
		*/

		//update_option('phaser_settings', $svg_util->create_svg( $path, $meta ));
		$svg_util->create_svg( $meta );
	}

}

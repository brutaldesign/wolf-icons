<?php
/**
 * Plugin Name: Wolf Icons
 * Plugin URI: http://wpwolf.com/plugin/wolf-icons
 * Description: A selection of 200 vector icons
 * Version: 1.1.3
 * Author: WpWolf
 * Author URI: http://wpwolf.com
 * Requires at least: 3.5
 * Tested up to: 3.8.1
 *
 * Text Domain: wolf
 * Domain Path: /lang/
 *
 * @package Wolf_Icons
 * @author WpWolf
 *
 * Being a free product, this plugin is distributed as-is without official support. 
 * Verified customers however, who have purchased a premium theme
 * at http://themeforest.net/user/BrutalDesign/portfolio?ref=BrutalDesign
 * will have access to support for this plugin in the forums
 * http://help.wpwolf.com/
 *
 * Copyright (C) 2013 Constantin Saguin
 * This WordPress Plugin is a free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * It is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * See http://www.gnu.org/licenses/gpl-3.0.html
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! class_exists( 'Wolf_Icons' ) ) {

	class Wolf_Icons {

		/**
		 * @var string
		 */
		public $version = '1.1.3';

		/**
		 * @var string
		 */
		private $update_url = 'http://plugins.wpwolf.com/update';

		
		public function __construct() {

			define( 'WOLF_ICONS_URL', plugins_url( '/' . basename( dirname( __FILE__ ) ) ) );
			define( 'WOLF_ICONS_DIR', dirname( __FILE__ ) );

			add_action( 'init', array( $this, 'plugin_textdomain' ) );
			
			add_action( 'wp_print_styles', array( $this,  'style' ) );
			add_shortcode( 'wolf_icon', array( $this,  'shortcode' ) );
			
			add_action( 'admin_init', array($this, 'mce_init' ) );

			add_action( 'admin_menu', array( $this, 'menu_init' ) );
			add_action( 'admin_print_styles', array( $this,  'admin_styles' ) );
			add_action( 'admin_enqueue_scripts', array($this, 'admin_scripts' ) );

			add_action( 'admin_init', array( $this, 'update' ) );

		}

		/**
		 * Loads the plugin text domain for translation
		 */
		public function plugin_textdomain() {

			$domain = 'wolf';
			$locale = apply_filters( 'wolf', get_locale(), $domain );
			load_textdomain( $domain, WP_LANG_DIR.'/'.$domain.'/'.$domain.'-'.$locale.'.mo' );
			load_plugin_textdomain( $domain, FALSE, dirname( plugin_basename( __FILE__ ) ) . '/lang/' );

		}

		/**
		 * Registers TinyMCE rich editor buttons
		 */
		public function mce_init() {
			
			if ( ! current_user_can( 'edit_posts' ) && ! current_user_can( 'edit_pages' ) )
				return;
		
			if ( get_user_option( 'rich_editing' ) == 'true' ) {
				add_filter( 'mce_external_plugins', array($this, 'add_rich_plugins' ) );
				add_filter( 'mce_buttons', array($this, 'register_rich_buttons' ) );
			}
		}

		/**
		 * Defines TinyMCE rich editor js plugin
		 */
		public function add_rich_plugins( $plugin_array ) {
			$plugin_array['WolfIcons'] = WOLF_ICONS_URL . '/tinymce/plugin.js';
			return $plugin_array;
		}

		/**
		 * Adds TinyMCE rich editor buttons
		 *
		 * @param array $buttons
		 * @return array $buttons
		 */
		public function register_rich_buttons( $buttons ) {
			array_push( $buttons, '|', 'wolf_icons_button' );
			return $buttons;
		}

		/**
		 * Enqueue Admin Styles
		 */
		public function admin_styles() {
			
			if ( isset( $_GET['page'] ) && $_GET['page'] == basename( __FILE__ ) )
				wp_enqueue_style( 'wolf-icon-font', WOLF_ICONS_URL . '/assets/css/icon-font.min.css', array(), $this->version );
		}

		/**
		 * Localize TinyMCE plugin Script
		 */
		public function admin_scripts() {
			if ( ! wp_script_is( 'jquery' ) )
				wp_enqueue_script( 'jquery' );

			wp_localize_script( 'jquery', 'Wolf_Icons', array( 'plugin_folder' => WOLF_ICONS_URL .'/tinymce/' ) );
		}

		/**
		 * Enqueue Icon Styles
		 */
		public function style() {

			wp_enqueue_style( 'wolf-icon-font', WOLF_ICONS_URL . '/assets/css/icon-font.min.css', array(), $this->version );

		}

		/**
		 * Add Icon list menu
		 */
		public function menu_init() {

			add_menu_page( __( 'Icons List', 'wolf' ), __( 'Icons List', 'wolf' ), 'activate_plugins', basename( __FILE__ ), array( $this,  'page' ), 'dashicons-editor-ul' );
		}

		/**
		 * Icon list Page
		 */
		public function page() {
			include_once( 'includes/list.php' );
		}

		/**
		 * Icon shortcode
		 */
		public function shortcode($atts, $content = null) {
			$output = '';
			$type = '';
			
			extract(
				shortcode_atts(
					array(
						'name' => 'twitter',
						'scale' => '1',
						'style' => '',
						'type' => '',
						'class' => '',
						'url' => '',
						'target' => '_self',
						'spin' => 'false',
						'align' => 'none'
					), $atts 
				)
			);

			$open_tag = 'i';
			$close_tag = 'i';

			if ( $style )
				$style = 'style="'.$style.'"';

			if ( $type )
				$type = ' wolf-icon-type-'.$type;

			if ( $spin == 'true' )
				$class .= ' wolf-icon-spin';

			if ( $align != 'center' )
				$class .= ' wolf-icon-align-' . $align;

			if ( $align == 'center' )
				$output .= '<div class="wolf-icon-align-center">';

			if ( $url ) {
				$open_tag = 'a href="' . esc_url($url) . '" target="'.$target.'"';
				$close_tag = 'a';
			}
				
			$output .=  '<' . $open_tag . ' aria-hidden="true" ' . $style . ' class="wolf-icon-' . $name . ' wolf-icon-'. $scale . 'x'. $type .' '. $class.'"></' . $close_tag . '>';
			
			if ( $align == 'center' )
				$output .= '</div>';

			return $output;
		}

		/**
		 * Plugin update
		 */
		public function update() {
			
			$plugin_data     = get_plugin_data( __FILE__ );
			$current_version = $plugin_data['Version'];
			$plugin_slug     = plugin_basename( dirname( __FILE__ ) );
			$plugin_path     = plugin_basename( __FILE__ );
			$remote_path     = $this->update_url . '/' . $plugin_slug;
			
			if ( ! class_exists( 'Wolf_WP_Update' ) )
				include_once('class/class-wp-update.php' );
			
			$wolf_plugin_update = new Wolf_WP_Update( $current_version, $remote_path, $plugin_path );
		}

	} // end class

	$wolf_do_icons = new Wolf_Icons;

} // end class exists check
<?php
/**
 * Plugin Name: Elementor Custom Widget - Leonardo G.
 * Description: New custom widgets for Elementor to increase your design possibilities!
 * Plugin URI:  https://github.com/Gazzola-Leonardo/Elementor-Custom-Widget
 * Version:     1.0.0
 * Author:      Leonardo G.
 * Author URI:  https://it.linkedin.com/in/leonardo-gazzola
 * Text Domain: elementor-custom-widget-leo-g
 *
 * Elementor tested up to: 3.16.0
 * Elementor Pro tested up to: 3.16.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Register team Widget.
 *
 * Include widget file and register widget class.
 *
 * @since 1.0.0
 * @param \Elementor\Widgets_Manager $widgets_manager Elementor widgets manager.
 * @return void
 */
function register_team_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/team-widget.php' );

	$widgets_manager->register( new \Elementor_team_Widget() );

}
add_action( 'elementor/widgets/register', 'register_team_widget' );
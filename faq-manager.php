<?php
/**
 * Plugin Name: FAQ Manager
 * Description: Manage and display FAQs with a shortcode [faq_list].
 * Version: 1.0
 * Author: XXSylviaXX
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Include required files
require_once plugin_dir_path(__FILE__) . 'includes/class-faq-cpt.php';
require_once plugin_dir_path(__FILE__) . 'includes/class-faq-shortcode.php';
require_once plugin_dir_path(__FILE__) . 'public/class-faq-frontend.php';

// Hooks
add_action('init', ['FAQ_CPT', 'register']);
add_action('wp_enqueue_scripts', ['FAQ_Frontend', 'enqueue_assets']);
add_shortcode('faq_list', ['FAQ_Shortcode', 'render']);

register_activation_hook(__FILE__, function() {
    FAQ_CPT::register(); // register CPT first
    flush_rewrite_rules();
});

register_deactivation_hook(__FILE__, function() {
    flush_rewrite_rules();
});

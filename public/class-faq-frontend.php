<?php
class FAQ_Frontend {
    public static function enqueue_assets() {
        wp_enqueue_style('faq-style', plugin_dir_url(__FILE__) . 'css/faq-style.css');
        wp_enqueue_script('faq-script', plugin_dir_url(__FILE__) . 'js/faq-script.js', ['jquery'], null, true);
       
        // font-awesome for icons
        wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
    }
}

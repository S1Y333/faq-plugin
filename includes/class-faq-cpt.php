<?php
class FAQ_CPT {
    public static function register() {
        $labels = [
            'name' => 'FAQs',
            'singular_name' => 'FAQ',
            'add_new_item' => 'Add New FAQ',
            'edit_item' => 'Edit FAQ',
            'all_items' => 'All FAQs',
        ];

        $args = [
            'labels' => $labels,
            'public' => true,
            'show_in_menu' => true,
            'menu_icon' => 'dashicons-editor-help',
            'supports' => ['title', 'editor'],
             'rewrite' => ['slug' => 'faqs'],
        ];

        register_post_type('faq', $args);
    }
}

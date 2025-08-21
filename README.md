# faq-plugin# 📖 FAQs Manager Plugin for WordPress

A simple and elegant **FAQ (Frequently Asked Questions) manager** plugin for WordPress.  
This plugin registers a custom post type **FAQ**, and displays them in a responsive **accordion-style layout** with a **+ / - toggle animation** (using Bootstrap + FontAwesome).

---

## ✨ Features

- ✅ Custom Post Type: **FAQ**
- ✅ Easy Add/Edit/Delete from WP Admin
- ✅ Responsive **Accordion UI** (Bootstrap 5)
- ✅ FontAwesome icons for **+ / - toggle**
- ✅ Prevents comments on FAQ posts
- ✅ Shortcode support: `[faq_list]`
- ✅ Works with any theme

---

## 📂 Installation

1. Download the plugin or clone it into your WordPress `wp-content/plugins/` folder.
   ```bash
   wp-content/plugins/faq-manager

2. Activate FAQ Manager from the WordPress admin dashboard.

3. Create FAQs under FAQs → Add New. Delete/Edit FAQs like edit any posts.

4. Insert the shortcode `[faq_list] into any page or post.

---

## 📂 Folder Structures

/faq-manager/
│
├── faq-manager.php                # Main plugin file
├── uninstall.php                  # Cleanup (optional)
│
├── /admin/                        
│   ├── class-faq-admin.php        # Optional Handles custom admin menu (if needed)
│   ├── views/                     
│   │   ├── faq-list.php           # Optional custom FAQ admin page
│   │   ├── faq-form.php           # Optional add/edit FAQ form
│
├── /includes/                     
│   ├── class-faq-cpt.php          # Registers FAQ CPT
│   ├── class-faq-shortcode.php    # Shortcode for frontend display
│
├── /public/                       
│   ├── css/
│   │   └── faq-style.css          # FAQ styling
│   ├── js/
│   │   └── faq-script.js          # Toggle/accordion behavior
│   ├── class-faq-frontend.php     # Enqueue scripts + css assets
│
└── /languages/                    
    └── faq-manager.pot

---

## 📂 Customization

1. css file is in public/css/faq-style.css, change styles as needed
2. js file is in public/js/faq-script.js, control the behavior of collapsing and animation effects, change as needed


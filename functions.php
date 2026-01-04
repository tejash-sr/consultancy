<?php
/**
 * Agency Pro Theme Functions
 * 
 * @package Agency_Pro
 * @since 1.0.0
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function agency_pro_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');
    
    // Let WordPress manage the document title
    add_theme_support('title-tag');
    
    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');
    
    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'agency-pro'),
        'footer'  => __('Footer Menu', 'agency-pro'),
    ));
    
    // Add support for HTML5 markup
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'script',
        'style',
    ));
    
    // Add support for custom background
    add_theme_support('custom-background', array(
        'default-color' => 'ffffff',
    ));
    
    // Add support for wide alignment
    add_theme_support('align-wide');
    
    // Add support for responsive embeds
    add_theme_support('responsive-embeds');
}
add_action('after_setup_theme', 'agency_pro_setup');

/**
 * Enqueue scripts and styles
 */
function agency_pro_scripts() {
    // Main stylesheet
    wp_enqueue_style('agency-pro-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Custom JavaScript
    wp_enqueue_script('agency-pro-script', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true);
    
    // Localize script for AJAX
    wp_localize_script('agency-pro-script', 'agencyProAjax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('agency_pro_nonce'),
    ));
    
    // Comment reply script
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'agency_pro_scripts');

/**
 * Register widget areas
 */
function agency_pro_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer 1', 'agency-pro'),
        'id'            => 'footer-1',
        'description'   => __('Add widgets here to appear in your footer.', 'agency-pro'),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer 2', 'agency-pro'),
        'id'            => 'footer-2',
        'description'   => __('Add widgets here to appear in your footer.', 'agency-pro'),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer 3', 'agency-pro'),
        'id'            => 'footer-3',
        'description'   => __('Add widgets here to appear in your footer.', 'agency-pro'),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'agency_pro_widgets_init');

/**
 * Handle Contact Form Submission
 */
function agency_pro_handle_contact_form() {
    // Verify nonce
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'agency_pro_contact_form')) {
        wp_send_json_error(array('message' => 'Security verification failed.'));
        return;
    }
    
    // Sanitize input
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $company = sanitize_text_field($_POST['company']);
    $message = sanitize_textarea_field($_POST['message']);
    
    // Validate required fields
    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        wp_send_json_error(array('message' => 'Please fill in all required fields.'));
        return;
    }
    
    // Validate email
    if (!is_email($email)) {
        wp_send_json_error(array('message' => 'Please enter a valid email address.'));
        return;
    }
    
    // Get Google Sheets Web App URL from theme options
    $google_sheets_url = get_option('agency_pro_google_sheets_url', '');
    
    // Prepare data for Google Sheets
    $data = array(
        'timestamp' => current_time('mysql'),
        'name'      => $name,
        'email'     => $email,
        'phone'     => $phone,
        'company'   => $company,
        'message'   => $message,
    );
    
    // Send to Google Sheets
    if (!empty($google_sheets_url)) {
        $response = wp_remote_post($google_sheets_url, array(
            'method'    => 'POST',
            'timeout'   => 45,
            'headers'   => array(
                'Content-Type' => 'application/json',
            ),
            'body'      => json_encode($data),
        ));
        
        if (is_wp_error($response)) {
            error_log('Google Sheets API Error: ' . $response->get_error_message());
        }
    }
    
    // Send email notification to admin
    $to = get_option('admin_email');
    $subject = 'New Contact Form Submission from ' . get_bloginfo('name');
    $body = "New contact form submission:\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Company: $company\n";
    $body .= "Message:\n$message\n";
    
    $headers = array('Content-Type: text/plain; charset=UTF-8');
    
    wp_mail($to, $subject, $body, $headers);
    
    wp_send_json_success(array('message' => 'Thank you for your message! We will get back to you soon.'));
}
add_action('wp_ajax_agency_pro_contact_form', 'agency_pro_handle_contact_form');
add_action('wp_ajax_nopriv_agency_pro_contact_form', 'agency_pro_handle_contact_form');

/**
 * Add custom settings page for Google Sheets integration
 */
function agency_pro_add_settings_page() {
    add_options_page(
        'Agency Pro Settings',
        'Agency Pro',
        'manage_options',
        'agency-pro-settings',
        'agency_pro_settings_page'
    );
}
add_action('admin_menu', 'agency_pro_add_settings_page');

/**
 * Settings page content
 */
function agency_pro_settings_page() {
    ?>
    <div class="wrap">
        <h1>Agency Pro Theme Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('agency_pro_settings');
            do_settings_sections('agency-pro-settings');
            submit_button();
            ?>
        </form>
        
        <div class="card" style="max-width: 800px; margin-top: 20px;">
            <h2>Google Sheets Integration Setup</h2>
            <ol>
                <li>Create a new Google Sheet with columns: <code>Timestamp, Name, Email, Phone, Company, Message</code></li>
                <li>Open Google Apps Script: <strong>Extensions > Apps Script</strong></li>
                <li>Copy and paste the script from the <code>google-apps-script.js</code> file in your theme folder</li>
                <li>Deploy: <strong>Deploy > New deployment > Web app</strong></li>
                <li>Set "Execute as" to <strong>Me</strong> and "Who has access" to <strong>Anyone</strong></li>
                <li>Copy the Web App URL and paste it in the field above</li>
                <li>Click <strong>Save Changes</strong></li>
            </ol>
        </div>
    </div>
    <?php
}

/**
 * Register settings
 */
function agency_pro_register_settings() {
    register_setting('agency_pro_settings', 'agency_pro_google_sheets_url');
    
    add_settings_section(
        'agency_pro_google_section',
        'Google Sheets Integration',
        'agency_pro_google_section_callback',
        'agency-pro-settings'
    );
    
    add_settings_field(
        'agency_pro_google_sheets_url',
        'Google Sheets Web App URL',
        'agency_pro_google_sheets_url_callback',
        'agency-pro-settings',
        'agency_pro_google_section'
    );
}
add_action('admin_init', 'agency_pro_register_settings');

function agency_pro_google_section_callback() {
    echo '<p>Configure your Google Sheets integration to automatically save contact form submissions.</p>';
}

function agency_pro_google_sheets_url_callback() {
    $value = get_option('agency_pro_google_sheets_url', '');
    echo '<input type="url" name="agency_pro_google_sheets_url" value="' . esc_attr($value) . '" class="regular-text" placeholder="https://script.google.com/macros/s/..." />';
    echo '<p class="description">Enter the Web App URL from your Google Apps Script deployment.</p>';
}

/**
 * Customize excerpt length
 */
function agency_pro_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'agency_pro_excerpt_length');

/**
 * Customize excerpt more string
 */
function agency_pro_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'agency_pro_excerpt_more');

/**
 * Add custom body classes
 */
function agency_pro_body_classes($classes) {
    // Add page slug class
    if (is_page()) {
        global $post;
        $classes[] = 'page-' . $post->post_name;
    }
    
    return $classes;
}
add_filter('body_class', 'agency_pro_body_classes');

/**
 * Custom navigation walker for mobile menu
 */
class Agency_Pro_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"sub-menu\">\n";
    }
}

/**
 * Add security headers
 */
function agency_pro_security_headers() {
    header('X-Content-Type-Options: nosniff');
    header('X-Frame-Options: SAMEORIGIN');
    header('X-XSS-Protection: 1; mode=block');
}
add_action('send_headers', 'agency_pro_security_headers');

/**
 * Disable WordPress emoji scripts
 */
function agency_pro_disable_emojis() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
}
add_action('init', 'agency_pro_disable_emojis');

/**
 * Optimize WordPress performance
 */
function agency_pro_optimize_performance() {
    // Remove query strings from static resources
    if (!is_admin()) {
        add_filter('script_loader_src', 'agency_pro_remove_query_strings', 15);
        add_filter('style_loader_src', 'agency_pro_remove_query_strings', 15);
    }
}
add_action('init', 'agency_pro_optimize_performance');

function agency_pro_remove_query_strings($src) {
    if (strpos($src, '?ver=')) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}

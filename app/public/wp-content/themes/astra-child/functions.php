<?php

/**
 * Astra Child Theme functions and definitions
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Enqueue styles and scripts
 */
function astra_child_enqueue_styles()
{
    // Parent theme style
    wp_enqueue_style(
        'astra-theme-css',
        get_template_directory_uri() . '/style.css',
        array(),
        wp_get_theme('astra')->get('Version'),
        'all'
    );

    // Child theme style
    wp_enqueue_style(
        'astra-child-theme-css',
        get_stylesheet_directory_uri() . '/style.css',
        array('astra-theme-css'),
        '1.0.0',
        'all'
    );

    // Enqueue Tailwind CSS
    wp_enqueue_style(
        'tailwind-css',
        get_stylesheet_directory_uri() . '/dist/output.css',
        array('astra-child-theme-css'),
        '1.0.0',
        'all'
    );

    // Enqueue custom JavaScript
    wp_enqueue_script(
        'astra-child-script',
        get_stylesheet_directory_uri() . '/dist/script.js',
        array('jquery'),
        '1.0.0',
        true
    );

    wp_localize_script('astra-child-script', 'ajax_object', array(
        'ajax_url' => admin_url('admin-post.php'),
    ));
}
add_action('wp_enqueue_scripts', 'astra_child_enqueue_styles');

/**
 * Register menus
 */
function astra_child_register_menus()
{
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'astra-child'),
        'footer'  => esc_html__('Footer Menu', 'astra-child'),
    ));
}
add_action('after_setup_theme', 'astra_child_register_menus');

/**
 * Support post thumbnails
 */
function astra_child_setup()
{
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'astra_child_setup');

/**
 * Include customizer
 */
require_once get_stylesheet_directory() . '/inc/customizer.php';

/**
 * Create subscribers table on theme activation
 */
function astra_child_create_subscribers_table()
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'newsletter_subscribers';
    $charset_collate = $wpdb->get_charset_collate();

    // Check if table exists
    if ($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
        $sql = "CREATE TABLE $table_name (
            id mediumint(9) NOT NULL AUTO_INCREMENT,
            name varchar(100) NOT NULL,
            email varchar(100) NOT NULL,
            status varchar(20) DEFAULT 'active' NOT NULL,
            created_at datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
            PRIMARY KEY  (id),
            UNIQUE KEY email (email)
        ) $charset_collate;";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
    }
}
add_action('after_switch_theme', 'astra_child_create_subscribers_table');

/**
 * Handle newsletter form submission
 */
function astra_child_process_newsletter_subscription()
{
    ob_start();

    try {
        error_log('Newsletter form submission received');

        if (!isset($_POST['newsletter_nonce']) || !wp_verify_nonce($_POST['newsletter_nonce'], 'subscribe_newsletter')) {
            throw new Exception('Security check failed.');
        }

        $name = sanitize_text_field($_POST['subscriber_name'] ?? '');
        $email = sanitize_email($_POST['subscriber_email'] ?? '');
        $terms = isset($_POST['subscriber_terms']);


        // Validate data
        if (empty($name)) {
            return astra_child_newsletter_json_response(false, 'Please provide your name.');
        }

        if (empty($email) || !is_email($email)) {
            throw new Exception('Please provide a valid email address.');
        }

        if (!$terms) {
            throw new Exception('You must agree to the privacy policy.');
        }

        // Save to database
        global $wpdb;
        $table_name = $wpdb->prefix . 'newsletter_subscribers';

        if ($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
            astra_child_create_subscribers_table();
        }

        $existing = $wpdb->get_var($wpdb->prepare("SELECT email FROM $table_name WHERE email = %s", $email));

        if ($existing) {
            $result = $wpdb->update(
                $table_name,
                array(
                    'name' => $name,
                    'status' => 'active',
                    'created_at' => current_time('mysql')
                ),
                array('email' => $email),
                array('%s', '%s', '%s'),
                array('%s')
            );
        } else {
            $result = $wpdb->insert(
                $table_name,
                array(
                    'name' => $name,
                    'email' => $email,
                    'status' => 'active',
                    'created_at' => current_time('mysql')
                ),
                array('%s', '%s', '%s', '%s')
            );
        }

        if ($result === false) {
            throw new Exception('Database error: ' . $wpdb->last_error);
        }

        try {
            astra_child_send_subscription_confirmation($name, $email);
        } catch (Exception $e) {
            error_log("Email sending failed: " . $e->getMessage());
        }

        return astra_child_newsletter_json_response(true, 'Thank you for subscribing!');
    } catch (Exception $e) {
        error_log("Newsletter subscription error: " . $e->getMessage());
        return astra_child_newsletter_json_response(false, $e->getMessage());
    } finally {
        ob_end_clean();
    }
}

/**
 * Send JSON or redirect response
 */
function astra_child_newsletter_json_response($success, $message)
{
    // Check if this is an AJAX request
    $is_ajax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
        strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';

    if ($is_ajax) {
        if (ob_get_length()) ob_clean();
        header('Content-Type: application/json');
        echo json_encode([
            'success' => $success,
            'message' => $message
        ]);
        exit;
    } else {
        // Handle regular form submission redirect
        $param = $success ? 'success' : 'error';
        $redirect_url = add_query_arg('newsletter', $param, wp_get_referer() ?: home_url());
        wp_redirect($redirect_url);
        exit;
    }
}

/**
 * Send confirmation email
 */
function astra_child_send_subscription_confirmation($name, $email)
{
    $site_name = get_bloginfo('name');
    $admin_email = get_option('admin_email');

    $subject = sprintf(__('Welcome to %s Newsletter!', 'astra-child'), $site_name);
    $message = sprintf(__('Hello %s,', 'astra-child'), $name) . "\n\n";
    $message .= sprintf(__('Thank you for subscribing to %s newsletter.', 'astra-child'), $site_name) . "\n\n";
    $message .= __('You will now receive our latest updates and tutorials.', 'astra-child') . "\n\n";
    $message .= __('Thank you!', 'astra-child') . "\n";
    $message .= $site_name;

    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        'From: ' . $site_name . ' <' . $admin_email . '>'
    ];

    $result = wp_mail($email, $subject, $message, $headers);

    if (!$result) {
        error_log("Failed to send confirmation email to: $email");
    }

    return $result;
}

/**
 * Register the admin menu for viewing subscribers
 */
function astra_child_register_subscribers_menu()
{
    add_menu_page(
        __('Subscribers', 'astra-child'),     // Page title
        __('Subscribers', 'astra-child'),     // Menu title
        'manage_options',                     // Capability
        'astra-subscribers',                  // Menu slug
        'astra_child_subscribers_page',       // Callback function
        'dashicons-email-alt2',               // Icon
        26                                    // Position
    );
}
add_action('admin_menu', 'astra_child_register_subscribers_menu');

/**
 * Display subscribers table in admin
 */
function astra_child_subscribers_page()
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'newsletter_subscribers';
    $subscribers = $wpdb->get_results("SELECT * FROM $table_name ORDER BY created_at DESC");
?>
    <div class="wrap">
        <h1><?php _e('Newsletter Subscribers', 'astra-child'); ?></h1>
        <table class="wp-list-table widefat fixed striped">
            <thead>
                <tr>
                    <th><?php _e('Name', 'astra-child'); ?></th>
                    <th><?php _e('Email', 'astra-child'); ?></th>
                    <th><?php _e('Status', 'astra-child'); ?></th>
                    <th><?php _e('Subscribed on', 'astra-child'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($subscribers)) : ?>
                    <tr>
                        <td colspan="4"><?php _e('No subscribers found.', 'astra-child'); ?></td>
                    </tr>
                <?php else : ?>
                    <?php foreach ($subscribers as $subscriber) : ?>
                        <tr>
                            <td><?php echo esc_html($subscriber->name); ?></td>
                            <td><?php echo esc_html($subscriber->email); ?></td>
                            <td><?php echo esc_html($subscriber->status); ?></td>
                            <td><?php echo esc_html(date_i18n(get_option('date_format') . ' ' . get_option('time_format'), strtotime($subscriber->created_at))); ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
<?php
}

/**
 * Handle AJAX and form post
 */
add_action('admin_post_nopriv_subscribe_newsletter', 'astra_child_process_newsletter_subscription');
add_action('admin_post_subscribe_newsletter', 'astra_child_process_newsletter_subscription');

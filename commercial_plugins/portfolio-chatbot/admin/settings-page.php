<?php
if (!defined('ABSPATH')) exit;

// Register settings
function chatbot_register_settings() {
    register_setting('chatbot_settings_group', 'chatbot_api_url');
    register_setting('chatbot_settings_group', 'chatbot_api_key');
}
add_action('admin_init', 'chatbot_register_settings');

// Add menu
function chatbot_add_settings_page() {
    add_options_page(
        'Chatbot Settings',
        'Chatbot',
        'manage_options',
        'chatbot-settings',
        'chatbot_render_settings_page'
    );
}
add_action('admin_menu', 'chatbot_add_settings_page');

// Render settings page
function chatbot_render_settings_page() { ?>
    <div class="wrap">
        <h1>Chatbot Settings</h1>
        <form method="post" action="options.php">
            <?php settings_fields('chatbot_settings_group'); ?>
            <?php do_settings_sections('chatbot_settings_group'); ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">API URL</th>
                    <td><input type="text" name="chatbot_api_url" value="<?php echo esc_attr(get_option('chatbot_api_url')); ?>" size="50"/></td>
                </tr>
                <tr valign="top">
                    <th scope="row">API Key</th>
                    <td><input type="password" name="chatbot_api_key" value="<?php echo esc_attr(get_option('chatbot_api_key')); ?>" size="50"/></td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>
    </div>
<?php }
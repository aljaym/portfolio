<?php
/**
 * Plugin Name: Portfolio Chatbot
 * Description: Adds a chatbot to the frontend and provides settings in wp-admin for my portfolio.
 * Version: 1.0.0
 * Author: Aljay Mallari <aljay.github.io>
 */

// Prevent direct access
if (!defined('ABSPATH')) exit;

// Define constants
define('CHATBOT_PLUGIN_DIR', plugin_dir_path(__FILE__));

// Include files
require_once CHATBOT_PLUGIN_DIR . 'admin/settings-page.php';
require_once CHATBOT_PLUGIN_DIR . 'public/chatbot-widget.php';

// Add settings link in plugin list
function chatbot_plugin_action_links($links) {
    $settings_link = '<a href="options-general.php?page=chatbot-settings">Settings</a>';
    array_unshift($links, $settings_link);
    return $links;
}
add_filter('plugin_action_links_' . plugin_basename(__FILE__), 'chatbot_plugin_action_links');
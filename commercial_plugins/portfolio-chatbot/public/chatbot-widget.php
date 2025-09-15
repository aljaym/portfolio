<?php
if (!defined('ABSPATH')) exit;

function chatbot_enqueue_assets() {
    wp_enqueue_style('chatbot-style', plugins_url('chatbot.css', __FILE__));
    wp_enqueue_script('chatbot-script', plugins_url('chatbot.js', __FILE__), array('jquery'), '1.1', true);
}
add_action('wp_enqueue_scripts', 'chatbot_enqueue_assets');

function chatbot_render_widget() {
    ?>
    <div id="chatbot-widget">
        <div id="chatbot-box">
            <div id="chatbot-header">
                <div class="chatbot-header-left">
                    <img src="https://cdn-icons-png.flaticon.com/512/4712/4712100.png" alt="Bot Logo" class="chatbot-logo" />
                    <div>
                        <div class="chatbot-title">Aljay's Agent</div>
                        <div class="chatbot-status">🟢 Online now</div>
                    </div>
                </div>
                <button id="chatbot-close">&times;</button>
            </div>

            <div id="chatbot-messages">
                <div class="chatbot-message bot">
                    👋 Welcome to Aljay’s Agent! How can I help you today?
                </div>
            </div>

            <div id="chatbot-input-container">
                <input type="text" id="chatbot-input" placeholder="Type a message..." />
                <button id="chatbot-send">➤</button>
            </div>
        </div>

        <div id="chatbot-toggle">💬</div>
    </div>
    <?php
}
add_action('wp_footer', 'chatbot_render_widget');
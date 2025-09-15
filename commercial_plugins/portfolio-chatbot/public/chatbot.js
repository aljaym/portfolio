jQuery(document).ready(function ($) {
    const box = $("#chatbot-box");
    const toggle = $("#chatbot-toggle");
    const closeBtn = $("#chatbot-close");
    const input = $("#chatbot-input");
    const sendBtn = $("#chatbot-send");
    const messages = $("#chatbot-messages");

    toggle.on("click", function () {
        box.show();
        toggle.hide();
    });

    closeBtn.on("click", function () {
        box.hide();
        toggle.show();
    });

    function sendMessage() {
        const text = input.val().trim();
        if (text) {
            messages.append(`<div class="chatbot-message user">${text}</div>`);
            input.val("");

            setTimeout(() => {
                messages.append(`<div class="chatbot-message bot">🤖 Got it! "${text}"</div>`);
                messages.scrollTop(messages[0].scrollHeight);
            }, 600);

            messages.scrollTop(messages[0].scrollHeight);
        }
    }

    sendBtn.on("click", sendMessage);

    input.on("keypress", function (e) {
        if (e.which === 13) sendMessage();
    });
});
document.addEventListener("DOMContentLoaded", function () {
    const postBtn = document.querySelector(".post-btn");
    const textArea = document.querySelector("textarea");
    const messagesContainer = document.querySelector(".messages-container");

    // Function to get a formatted timestamp
    function getFormattedTime() {
        const now = new Date();
        return `${now.getHours()}:${now.getMinutes().toString().padStart(2, "0")} ${now.getHours() >= 12 ? 'PM' : 'AM'}`;
    }

    postBtn.addEventListener("click", function () {
        const text = textArea.value.trim();
        if (text) {
            // Create a new message element
            const newMessage = document.createElement("div");
            newMessage.classList.add("message");

            newMessage.innerHTML = `
                <img src="profile.jpg" alt="Profile">
                <div class="message-content">
                    <p>${text}</p>
                    <span class="message-time">${getFormattedTime()}</span>
                </div>
            `;

            // Insert at the top to keep the latest messages first
            messagesContainer.prepend(newMessage);
            textArea.value = "";
            textArea.focus();
        }
    });

    // Disable the post button if the textarea is empty
    textArea.addEventListener("input", function () {
        postBtn.disabled = textArea.value.trim() === "";
    });

    // Initially disable the button
    postBtn.disabled = true;
});

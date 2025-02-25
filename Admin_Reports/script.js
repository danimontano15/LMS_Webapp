document.addEventListener("DOMContentLoaded", () => {
    const replyButtons = document.querySelectorAll(".reply-btn");

    replyButtons.forEach(button => {
        button.addEventListener("click", () => {
            alert("Reply feature coming soon!");
        });
    });
});

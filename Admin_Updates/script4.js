document.addEventListener("DOMContentLoaded", function () {
    const postBtn = document.querySelector(".post-btn");
    const textArea = document.querySelector("textarea");
    const postedUpdates = document.querySelector(".posted-updates");

    postBtn.addEventListener("click", function () {
        const text = textArea.value.trim();
        if (text) {
            const newUpdate = document.createElement("div");
            newUpdate.classList.add("update");
            newUpdate.innerHTML = `
                <img src="profile.jpg" alt="Profile">
                <p>${text}</p>
                <span>Just now</span>
            `;
            postedUpdates.appendChild(newUpdate);
            textArea.value = "";
        }
    });
});

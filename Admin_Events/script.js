document.addEventListener("DOMContentLoaded", function() {
    const logoutBtn = document.querySelector(".logout");

    logoutBtn.addEventListener("click", function() {
        alert("Logging out...");
        window.location.href = "login.php";
    });

    document.querySelector("button").addEventListener("click", function() {
        alert("Schedule submitted!");
    });
});

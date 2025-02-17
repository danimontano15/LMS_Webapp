document.addEventListener("DOMContentLoaded", function() {
    console.log("User Dashboard Loaded");
    document.querySelector('h1').textContent = "Welcome Back, User!";

    const hamburger = document.getElementById('hamburger');
    const navMenu = document.getElementById('nav-menu');

    hamburger.addEventListener('click', function() {
        navMenu.classList.toggle('show');
    });
});

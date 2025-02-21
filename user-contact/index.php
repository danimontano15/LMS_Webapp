<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Barangay Officials</title>
    <link rel="stylesheet" href="style.CSS">
    <script src="script.js" defer></script>
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="logo">
            <img src="HERE FINAL.png" alt="Community Care Solution">
            <div class="profile">
                <img src="Maloi.jpg" alt="User Profile">
                <p class="profile-name">Maloi Ricalde</p>
                <p class="profile-role">Resident</p>
            </div>
            <nav class="menu">
                <a href="#" class="menu-item">Dashboard</a>
                <a href="#" class="menu-item">Send a Report</a>
                <a href="#" class="menu-item">Events</a>
                <a href="#" class="menu-item">Updates</a>
                <a href="#" class="menu-item active">Contact Officials</a>
            </nav>
        </aside>

        <main class="content">
            <header class="content-header">
                <h1>Contact Barangay Officials</h1>
                <button id="logout-button">Log out</button>
            </header>

            <section class="contact-section">
                <div class="contact-info">
                    <h2>Contact us</h2>
                    <p>Get in touch with us for any inquiries, feedback, or support—we're here to help!</p>
                </div>
                <form class="contact-form">
                    <h2>Get in Touch</h2>
                    <p>You can reach us anytime</p>
                    <div class="form-group">
                        <input type="text" placeholder="First Name">
                        <input type="text" placeholder="Last Name">
                    </div>
                    <input type="email" placeholder="Email">
                    <input type="tel" placeholder="+63 Phone Number">
                    <textarea placeholder="How can we help?"></textarea>
                    <button type="submit" class="send-btn">Send</button>
                </form>
            </section>
        </main>
    </div>
</body>
</html>

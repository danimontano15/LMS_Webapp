<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="logo">
            <img src="HERE FINAL.png" alt="Community Care Solution">
            <div class="profile">
                <img src="maloi.jpg" alt="User profile">
                <p class="profile-name">Maloi Ricalde</p>
                <p class="profile-role">Resident</p>
            </div>
            <nav class="menu">
                <a href="#" class="menu-item active">Dashboard</a>
                <a href="#" class="menu-item">Send a Report</a>
                <a href="#" class="menu-item">Events</a>
                <a href="#" class="menu-item">Updates</a>
                <a href="#" class="menu-item">Contact Officials</a>
            </nav>
        </aside>
        <main class="content">
            <header class="content-header">
                <h1>Home</h1>
                <button id="logout-button">Log out</button>
            </header>

            <section class="dashboard-section">
                <div class="welcome-card">
                    <h2>Hi Maloi!</h2>
                    <h1>Welcome Back!</h1>
                    <img src="welcome.jpg" alt="Welcome Image">
                </div>

                <div class="event-updates">
                    <div class="event-card">
                        <p>Event</p>
                        <h1>FEB 10</h1>
                        <p>No event today...</p>
                    </div>
                    <div class="updates-card">
                        <p>See</p>
                        <h1>UPDATES</h1>
                        <p>&rarr;</p>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <link rel="stylesheet" href="style5.css">
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="logo">
                <img src="HERE FINAL.png" alt="Community Care Solution">
            </div>
            <div class="profile">    
                <img src="Admin.jpg" alt="Admin profile">
                <p class="profile-name">Eros Cruz</p>
                <p class="profile-role">Admin</p>
            </div>
            <nav class="menu">
                <a href="Admin_Dashboard.php" class="menu-item">Dashboard</a>
                <a href="Admin_Reports.php" class="menu-item">Reports</a>
                <a href="Admin_Events.php" class="menu-item">Events</a>
                <a href="Admin_Updates.php" class="menu-item">Updates</a>
                <a href="Admin_Messages.php" class="menu-item active">Messages</a>
            </nav>
        </aside>

        <main class="content">
            <header class="content-header">
                <h2>Messages</h2>
                <button id="logout-button">Log out</button>
            </header>

            <div class="messages-container">
                <!-- Individual messages -->
                <div class="message">
                    <img src="Admin.jpg" alt="Profile">
                    <div class="message-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                        <span class="message-time">1 hour ago</span>
                    </div>
                </div>

                <div class="message">
                    <img src="Admin.jpg" alt="Profile">
                    <div class="message-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor labore et dolore magna aliqua...</p>
                        <span class="message-time">2 hours ago</span>
                    </div>
                </div>

                <div class="message">
                    <img src="Admin.jpg" alt="Profile">
                    <div class="message-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                        <span class="message-time">5 hours ago</span>
                    </div>
                </div>

                <div class="message">
                    <img src="Admin.jpg" alt="Profile">
                    <div class="message-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor labore et dolore magna aliqua...</p>
                        <span class="message-time">10 hours ago</span>
                    </div>
                </div>

                <div class="message">
                    <img src="Admin.jpg" alt="Profile">
                    <div class="message-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                        <span class="message-time">18 hours ago</span>
                    </div>
                </div>

                <div class="message">
                    <img src="Admin.jpg" alt="Profile">
                    <div class="message-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                        <span class="message-time">1 day ago</span>
                    </div>
                </div>

                <div class="message">
                    <img src="Admin.jpg" alt="Profile">
                    <div class="message-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                        <span class="message-time">2 days ago</span>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>

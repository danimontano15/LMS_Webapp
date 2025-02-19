<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Care Solution</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="logo">
                <img src="logo.png" alt="Community Care Solution">
            </div>
            <div class="profile">
                <img src="profile.jpg" alt="User Profile">
                <p class="name">Maloi Ricalde</p>
                <p class="role">Resident</p>
            </div>
            <nav>
                <ul>
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#" class="active">Send a Report</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Updates</a></li>
                    <li><a href="#">Contact Officials</a></li>
                </ul>
            </nav>
        </div>
        
        <!-- Main Content -->
        <div class="main-content">
            <header>
                <h1>Send a Report to Barangay Officials</h1>
                <button class="logout-btn">Log out</button>
            </header>
            <div class="report-form">
                <textarea placeholder="Send a report..."></textarea>
                <div class="attachments">
                    <button>File</button>
                    <button>Image</button>
                    <button>Location</button>
                </div>
                <button class="send-btn">Send</button>
            </div>
        </div>
    </div>
</body>
</html>

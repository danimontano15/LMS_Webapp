<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updates</title>
    <link rel="stylesheet" href="style4.css">
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="logo">
                <img src="HERE FINAL.png" alt="Community Care Solution">
            <div class="profile">    
            <img src="Admin.jpg" alt="Admin profile">
            <p class="profile-name">Eros Cruz<p>
            <p class="profile-role">Admin<p>

        </div>
        <nav class="menu">
                <a href="Admin_Dashboard.php" class="menu-item active">Dashboard</a>
                <a href="Admin_Reports.php" class="menu-item">Reports</a>
                <a href="Admin_Events.php" class="menu-item">Events</a>
                <a href="Admin_Updates.php" class="menu-item">Updates</a>
                <a href="Admin_Messages.php" class="menu-item">Messages</a>
        </nav>
        </aside>

    <main class="content">
        <header class="content-header">
            <h2>Updates</h2>

            <button id="logout-button">Log out</button>
        </header>
       
        <div class="post-box">
            <textarea placeholder="Post an update..."></textarea>
            <div class="actions">
                <label><input type="file"> File</label>
                <label><input type="file"> Image</label>
                <button class="post-btn">Post</button>
            </div>
        </div>

        <div class="posted-updates">
             <p class="outset">Posted Updates</p>

            <div class="update">
                <img src="Admin.jpg" alt="Profile">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <span>1 hour ago</span>
            </div>
            <div class="update">
                <img src="Admin.jpg" alt="Profile">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <span>1 hour ago</span>
            </div>
        </div>
    </div>

    <script src="script4.js"></script>
</body>
</html>

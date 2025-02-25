<!DOCTYPE html>
<htm>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin's Reports</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="logo">
                <img src="HERE FINAL.png" alt="Community Care Solution">
            <div class="profile">
                <img src="Admin.jpg" alt="Admin profile">
                <p class="profile-name">Eros Cruz</p>
                <p class="profile-role">Admin</p>
            </div>
            <nav class="menu">
                <a href="#" class="menu-item">Dashboard</a>
                <a href="#" class="menu-item active">Reports</a>
                <a href="#" class="menu-item">Events</a>
                <a href="#" class="menu-item">Updates</a>
                <a href="#" class="menu-item">Contact Officials</a>
            </nav>
        </aside>
        <main class="main-content">
            <header class=content-header>
                <h2>Reports</h2>
                <button id= "logout-button">Logout</button>
            </header>    
            <section class="reports">
                 <div class="report-card">
                    <div class="report-header">
                    <img src="rose.jpeg" alt="User">
                 <div>
                    <p class="report-author">Roseanne Park</p>
                    <p class="report-time"> 5 mins ago</p> 
                </div>
            </div>  
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <button class="reply-btn">Reply</button>
            </div>

                  <div class="report-card">
                     <div class="report-header">
                    <img src="stacey.jpg" alt="User">
                    <div>
                    <p class="report-author">Stacey Sevilleja</p>
                    <p class="report-time">4 hours ago</p>
                    </div>
                </div>
                <p>Clogged drainage in our area.</p>
                <div class="report-images">
                    <img src="drain1.png" alt="Drain Issue">
                    <img src="drain2.png" alt="Drain Issue">
                </div>
                <button class="reply-btn">Reply</button>
                </div>
                
            <div class="report-card">
                <div class="report-header">
                    <img src="jenny.jpg" alt="User">
                    <div>
                    <p class="report-author">Jennie Ruby Jane</p>
                    <p class="report-time">5 hours ago</p>
                    </div>
                </div>
                <p>There are potholes in our area.</p>
                <div class="report-images">
                    <img src="pothole1.jpg" alt="Potholes">
                    <img src="pothole2.jpg" alt="Potholes">
                </div>
                <button class="reply-btn">Reply</button>    
            </div>
        </main>
    </div>
    <script src="script.js"></script>
</body>
</html>

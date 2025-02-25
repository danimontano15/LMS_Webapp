<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <link rel="stylesheet" href="style.css">
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
                <a href="#" class="menu-item">Dashboard</a>
                <a href="#" class="menu-item">Reports</a>
                <a href="#" class="menu-item active">Events</a>
                <a href="#" class="menu-item">Updates</a>
                <a href="#" class="menu-item">Contact Officials</a>
            </nav>
        </aside>

        <main class="main-content">
            <header class="content-header">
                <h2>Events</h2>
                <button id="logout-button">Logout</button>
            </header>
    
            <section class="events">
                <div class="event-box">
                    <div class="date"><span>MON</span>10</div>
                    <div class="details">
                        <h3>Garbage Collection</h3>
                        <p>6:00 AM - 7:30 AM Purok Sunflower</p>
                        <p>7:30 AM - 9:00 AM Purok Bloom</p>
                        <p>9:00 AM - 10:30 AM Deca Homes</p>
                    </div>
                </div>
    
                <div class="event-box">
                    <div class="date"><span>WED</span>12</div>
                    <div class="details">
                        <h3>Garbage Collection</h3>
                        <p>6:00 AM - 7:30 AM Purok Sunflower</p>
                        <p>7:30 AM - 9:00 AM Purok Bloom</p>
                        <p>9:00 AM - 10:30 AM Deca Homes</p>
                    </div>
                </div>
                
                <div class="event-box highlighted">
                    <div class="date"><span>SUN</span>16</div>
                    <div class="details">
                        <h3>Biodegradable Collection</h3>
                        <p>6:00 AM - 10:30 AM All Areas</p>
                    </div>
                </div>
            </section>
    
            <section class="schedule-form">
                <h3>Add a Schedule</h3>
                <input type="text" placeholder="New event title...">
                <input type="date">
                <div class="time-inputs">
                    <input type="time"> → <input type="time">
                </div>
                <textarea placeholder="Add a description..."></textarea>
                <button>Submit</button>
            </section>
        </main>
    </div>
    <script src="script.js"></script>
</body>
</html>
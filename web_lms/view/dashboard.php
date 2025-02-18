<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="sidebar">
        <img src="maloi.jpg" alt="Profile">
        <h3><?= $user->name ?></h3>
        <p><?= $user->role ?></p>
        <nav>
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Send a Report</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Updates</a></li>
                <li><a href="#">Contact Officials</a></li>
            </ul>
        </nav>
    </div>
    <div class="maincontent">
        <div class="welcome-box">
            <p>Hi <?= $user->name ?>!</p>
            <h1>Welcome Back!</h1>
            <img src="welcome.jpg" alt="Welcome">
        </div>
        <div class="event-box">
            <p>Event</p>
            <h2>FEB 10</h2>
            <p>No event today...</p>
        </div>
        <div class="updates-box">
            <p>See</p>
            <h2>UPDATES</h2>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="/web_lms/style.css">
    <script src="/web_lms/script.js" defer></script>
</head>
<body>
    <aside>
        <img src="maloi.jpg" alt="User Image">
        <h2><?php echo htmlspecialchars($user['name'], ENT_QUOTES, 'UTF-8'); ?></h2>
        <p><?php echo htmlspecialchars($user['role'], ENT_QUOTES, 'UTF-8'); ?></p>
        <nav>
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Send a Report</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Updates</a></li>
                <li><a href="#">Contact Officials</a></li>
            </ul>
        </nav>
    </aside>
    <main>
        <h1>Welcome Back!</h1>
        <p>No event today...</p>
    </main>
</body>
</html>
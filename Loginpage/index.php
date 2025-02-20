<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Care Solution - Login</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <div class="login-container">
    <img src="HERE FINAL.png" alt="" class="clas">
        <h1>Community Care Solution</h1>
        <p class="tagline">Empowering Communities, Connecting Lives.</p>
        <h2>GET STARTED!</h2>
        <form method="post" action="login.php">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <a href="#" class="forgot-password">Forgot password?</a>
            <div class="button-container">
                <button type="button" onclick="signUp()">Sign up</button>
                <button type="submit">Log in</button>
            </div>
        </form>
        <p class="signup-prompt">Don’t have an account? <a href="signup.php">Sign up.</a></p>
    </div>

</body>
</html>

<?php
session_start();

if (!isset($_SESSION['token'])) {
    header('Location: login.php');
    exit();
}

// Logout Logic
if (isset($_POST['logout'])) {
    // Unset and destroy the session
    session_unset();
    session_destroy();
    header('Location: login.php'); // Redirect to the login page
    exit();
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome to the Dashboard</h2>
    <!-- Add your dashboard content here -->

    <!-- Add a form for the logout button -->
    <form method="post">
        <input type="submit" name="logout" value="Logout">
    </form>
</body>
</html>
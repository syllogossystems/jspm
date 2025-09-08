<?php
// logout.php - clear session and cookie
session_start();

// clear session array
$_SESSION = [];

// destroy session cookie if exists
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// destroy session
session_destroy();

// clear our demo cookie (fb_username)
setcookie('fb_username', '', time() - 3600, '/', '', false, true);

// redirect back to form
header('Location: feedback.html');
exit;

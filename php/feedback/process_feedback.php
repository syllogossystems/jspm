<?php
// process_feedback.php
// Handles both GET and POST, sets cookie when requested, starts session and stores data.
// DEV: show errors for debugging (remove in production)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Start or resume session for session-tracking demo
session_start();

// Determine method and source superglobal
$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'POST') {
    $raw = $_POST;
} elseif ($method === 'GET') {
    $raw = $_GET;
} else {
    $raw = [];
}

// helper to safely fetch a field
function safe($arr, $key, $default = '') {
    return isset($arr[$key]) ? htmlspecialchars(trim($arr[$key])) : $default;
}

// read fields (works for both GET and POST)
$name     = safe($raw, 'name');
$email    = safe($raw, 'email');
$rating   = safe($raw, 'rating');
$comments = safe($raw, 'comments');
$remember = isset($raw['remember']) && $raw['remember'] ? true : false;

// If user checked "remember me", set a cookie (1 hour). cookie is HttpOnly
if ($remember && $name !== '') {
    // setcookie must be sent before output; we're already before HTML output
    setcookie('fb_username', $name, time() + 3600, '/', '', false, true);
}

// Store values in session for session-tracking demo
$_SESSION['feedback'] = [
    'name'    => $name,
    'email'   => $email,
    'rating'  => $rating,
    'comments'=> $comments,
    'time'    => date('Y-m-d H:i:s')
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Feedback Received</title>
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <style>
    body { font-family: Arial, sans-serif; background:#f4f6f8; padding:20px; }
    .card { max-width:900px; margin:auto; background:#fff; padding:18px; border-radius:8px; box-shadow:0 4px 12px rgba(0,0,0,0.06); border:1px solid #e6eef6;}
    h2 { color:#2b6cb0; margin:0 0 8px 0; }
    .row { display:flex; gap:20px; flex-wrap:wrap; }
    .col { flex:1 1 300px; }
    pre { background:#f7fafc; padding:10px; border-radius:6px; overflow:auto; }
    .meta { margin-top:10px; font-size:0.95rem; color:#444; }
    .actions { margin-top:12px; }
    a.button { display:inline-block; padding:8px 12px; background:#2b6cb0; color:#fff; text-decoration:none; border-radius:6px; }
    .small { font-size:0.9rem; color:#555; }
  </style>
</head>
<body>
  <div class="card">
    <h2>Feedback Received (via <?= htmlspecialchars($method) ?>)</h2>

    <div class="row">
      <div class="col">
        <h3>Submitted Data</h3>
        <p><strong>Name:</strong> <?= $name ?: '<span class="small">[empty]</span>' ?></p>
        <p><strong>Email:</strong> <?= $email ?: '<span class="small">[empty]</span>' ?></p>
        <p><strong>Rating:</strong> <?= $rating ?: '<span class="small">[empty]</span>' ?></p>
        <p><strong>Comments:</strong><br> <?= nl2br($comments ?: '<span class="small">[none]</span>') ?></p>
      </div>

      <div class="col">
        <h3>Session Info (Server-side)</h3>
        <p class="small">A PHP session stores data on the server and links it to the user via a session ID (usually sent as a cookie).</p>
        <pre><?php echo htmlspecialchars(print_r($_SESSION, true)); ?></pre>

        <h3>Cookie Info (Client-side)</h3>
        <p class="small">Cookies are stored on the client and sent with each request to the server.</p>
        <pre><?php echo htmlspecialchars(print_r($_COOKIE, true)); ?></pre>
      </div>
    </div>

    <div class="meta">
      <p><strong>Session ID:</strong> <?= session_id() ?></p>
      <p><strong>Remember Me Cookie Set:</strong> <?= isset($_COOKIE['fb_username']) ? 'Yes (value: ' . htmlspecialchars($_COOKIE['fb_username']) . ')' : ($remember ? 'Just set — refresh to see it in $_COOKIE' : 'No') ?></p>
      <p class="small">Note: Cookie becomes visible in <code>$_COOKIE</code> after the next request (browser saves it). Session data is available immediately.</p>
    </div>

    <div class="actions">
      <a class="button" href="feedback.html">Back to forms</a>
      &nbsp;
      <a class="button" href="logout.php">Logout / Clear Session & Cookie</a>
    </div>

  </div>
</body>
</html>

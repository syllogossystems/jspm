<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>JSPM Login</title>
  <style>
    body {
      display: flex;
      flex-direction: column;
      align-items: center;
      min-height: 100vh;
    }
    header {
      text-align: center;
      background: #004080;
      color: white;
      width: 100%;
    }
    .login-container {
      background: #fff;
      padding: 25px;
      margin-top: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      width: 300px;
    }
    .login-container h3 {
      margin-bottom: 15px;
      color: #333;
      text-align: center;
    }
    
    input[type="text"], input[type="password"] {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }
    button {
      margin-top: 15px;
      width: 100%;
      padding: 10px;
      background: #004080;
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
    }
    .error {
      color: red;
      margin-top: 10px;
      text-align: center;
    }
  </style>
</head>
<body>
  <header>
    <h1>JSPM's Jayawantrao Sawant College of Engineering (JSCOE)</h1>
    <h2>Survey No. 58, Indrayani Nagar, Handewadi Road, Hadapsar, Pune</h2>
  </header>

  <div class="login-container">
    <h3>Login</h3>
    <form action="login.php" method="POST">
      <label for="username">Username:</label>
      <input type="text" name="username" id="username" required>

      <label for="password">Password:</label>
      <input type="password" name="password" id="password" required>

      <button type="submit">Login</button>
    </form>

    <?php if (isset($_GET['error'])): ?>
      <p class="error"><?php echo $_GET['error']; ?></p>
    <?php endif; ?>
  </div>
</body>
</html>

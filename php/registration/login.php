<?php
    require_once "db_connect.php";
    session_start();
    $users = getAllUsers($conn);

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        foreach ($users as $user) {
            if ($user['username'] === $username && $password === $user['password']) {
                $found = true;
                $_SESSION['username'] = $user['username'];
                break;
            }
        }

        if ($found){
            echo "Login Successful.", "Welcome $username" ;
            setcookie("username", $username, time() + 3600, "/");
            header("Location: welcome.php");
            exit;
        } else {
            header("Location: index.php?error=Invalid+username+or+password");
            exit;
        }
    } else {
        echo "Invalid Request Method.";
    }
?>
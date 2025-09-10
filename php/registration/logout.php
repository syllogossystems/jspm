<?php
//error_log("********************C:\xampp\apache\logs\error.log****************************");
session_start();
session_destroy();
header("Location: index.php");
exit;
?>
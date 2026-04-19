<?php
// Start The Session
session_start();

// Undo ALL Session Variables
$_SESSION = array();

// Destroy The Session
session_destroy();

// Redirect To The Login Page
header("Location: login.php");
exit();
?>
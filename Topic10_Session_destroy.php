<?php
session_start(); // Start session

// Destroy all session data
session_unset();    // Unset all session variables
session_destroy();  // Destroy the session

echo "Session destroyed successfully.";
?>

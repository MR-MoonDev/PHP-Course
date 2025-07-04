<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Get Session</title>
</head>
<body>
    <h2>Session Data:</h2>
    <p>
        <?php
        if (isset($_SESSION['username'])) {
            echo "Username: " . $_SESSION['username'];
        } else {
            echo "No session data found.";
        }
        ?>
    </p>

    <!-- Button to go to destroy session -->
    <form action="Topic10_Session_destroy.php" method="get">
        <button type="submit">Destroy Session</button>
    </form>
</body>
</html>

<?php
session_start();
$_SESSION['username'] = "Muneeb";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Set Session</title>
</head>
<body>
    <h2>Session is set successfully!</h2>
    <p>Username: <?php echo $_SESSION['username']; ?></p>

    <!-- Button to go to getData file -->
    <form action="Topic10_Session_getData.php" method="get">
        <button type="submit">Go to Get Session</button>
    </form>
</body>
</html>

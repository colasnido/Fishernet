<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fisherman Website</title>
    <link rel="stylesheet" href="stylefish.css">
</head>
<body>
    <header>
        <h1>Fisherman Website</h1>
        <nav>
            <ul>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="fishing_zone.html">Fishing Zones</a></li>
                <li><a href="catch_logbook.html">Catch Logbook</a></li>
                <li><a href="fish_market_prices.html">Fish Market Prices</a></li>
                <li><a href="equipment_management.html">Equipment Management</a></li>
                <li><a href="logout.html">Log Out</a></li>
            </ul>
        </nav>
    </header>
    <main>
       <h1> Welcome <?php echo $_SESSION['username']; ?> </h1>
    </main>
    <footer>
        <p>&copy; 2024 Fisherman Website</p>
    </footer>
</body>
</html>

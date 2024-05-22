<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>User Log-in</h1>
    </header>
    <br>
    <main>
        <form action="validation.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br>       
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>
            <input type="submit" value="Log-in">
        </form>
    </main>
    
    <nav id=back>
        <a href="index_fish.php">Home</a>
    </nav>
    <footer>
        <p>&copy; 2024 Fisherman Website</p>
    </footer>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylefish.css">
</head>
<body>
    <header>
        <h1>User Registration</h1>
    </header>
    <br>
    <main>
        <form action="register.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>
            
            <label for="userType">User Type:</label>
            <select id="userType" name="userType" required>
                <option value="Fisherman">Fisherman</option>
            </select><br>
            
            <input type="submit" value="Register">
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

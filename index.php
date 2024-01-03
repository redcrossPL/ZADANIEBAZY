<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
</head>
<body>
    <h2>Logowanie</h2>
    <form action="login.php" method="post">
        <label for="username">Nazwa Użytkownika:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Hasło:</label>
        <input type="password" id="password" name="password" required><br>

        <button type="submit">Loguj</button>
    </form>

    <p>Nie masz konta? <a href="formREGISTER.php">Zarejestruj sie!</a>.</p>
</body>
</html>

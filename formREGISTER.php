<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestrajca</title>
</head>
<body>
    <h2>Rejestracja</h2>
    <form action="register.php" method="post">
        <label for="reg_username">Nazwa użytkownika:</label>
        <input type="text" id="reg_username" name="reg_username" required><br>

        <label for="reg_password">Hasło:</label>
        <input type="password" id="reg_password" name="reg_password" required><br>

        <button type="submit">Zarejestruj</button>
    </form>
</body>
</html>

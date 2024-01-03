<?php
session_start();
require_once(__DIR__ . '/connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT id, username, password FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["username"] = $row["username"];
            header("Location: dashboard.php");
        } else {
            echo "Bledne haslo!";
        }
    } else {
        echo "Nie znaleziono uzytkownika";
    }
}

$conn->close();
?>

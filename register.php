<?php
session_start();
require_once(__DIR__ . '/connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $reg_username = $_POST["reg_username"];
    $reg_password = password_hash($_POST["reg_password"], PASSWORD_DEFAULT);

    $check_user_sql = "SELECT id FROM users WHERE username = '$reg_username'";
    $check_user_result = $conn->query($check_user_sql);

    if ($check_user_result->num_rows > 0) {
        echo "Uzytkownik o takiej nazwie juz istnieje wybierz inna nazwe";
    } else {
        $insert_user_sql = "INSERT INTO users (username, password) VALUES ('$reg_username', '$reg_password')";
        
        if ($conn->query($insert_user_sql) === TRUE) {
            echo "Rejestracja zakonczona. Mozesz sie zalogowac";
        } else {
            echo "Error: " . $insert_user_sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>

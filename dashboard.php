<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: index.php");
    exit();
}

echo "Witaj, " . $_SESSION["username"] . " w panelu uzytkownika!!!";
?>

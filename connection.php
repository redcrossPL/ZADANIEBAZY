<?php
$servername = "localhost";
$username = "administrator";
$password = "1234";
$dbname = "logindb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Blad laczenia z db: " . $conn->connect_error);
}
?>

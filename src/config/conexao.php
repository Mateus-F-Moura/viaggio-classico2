<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "viaggioclassico2";
$port = 3306;

$conn = new mysqli($servername, $username, $password, $dbname, $port);


if ($conn->connect_error) {
    error_log("Connection failed: " . $conn->connect_error);
    die("Desculpe, não foi possível conectar ao banco de dados. Tente novamente mais tarde.");
}

$conn->set_charset("utf8mb4");
?>
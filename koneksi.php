<?php

$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "data_ mahasiswa";

$conn = new mysqli(
    $host,
    $user,
    $password,
    $database
);

if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

?>
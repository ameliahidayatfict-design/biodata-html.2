<?php

require "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $program_studi = $_POST["program_studi"];
    $email = $_POST["email"];

    $stmt = $conn->prepare(
        "INSERT INTO mahasiswa
        (nim, nama, program_studi, email)
        VALUES (?, ?, ?, ?)"
    );

    $stmt->bind_param(
        "ssss",
        $nim,
        $nama,
        $program_studi,
        $email
    );

    $stmt->execute();

    $stmt->close();
}

$conn->close();

header("Location: data_mahasiswa.php");
exit;

?>
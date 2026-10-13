<?php

require "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $id = $_POST["id"];
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $program_studi = $_POST["program_studi"];
    $email = $_POST["email"];

    $sql = "UPDATE mahasiswa
            SET nim = ?, nama = ?, program_studi = ?, email = ?
            WHERE id = ?";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param(
        "ssssi",
        $nim,
        $nama,
        $program_studi,
        $email,
        $id
    );

    if ($stmt->execute()) {

        $stmt->close();
        $conn->close();

        header("Location: data_mahasiswa.php");
        exit;

    } else {

        echo "Gagal mengubah data: " . $stmt->error;

    }

}

?>
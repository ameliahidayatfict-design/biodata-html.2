<?php

require "koneksi.php";

if (isset($_GET["id"])) {

    $id = $_GET["id"];

    $sql = "DELETE FROM mahasiswa WHERE id = ?";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {

        $stmt->close();
        $conn->close();

        header("Location: data_mahasiswa.php");
        exit;

    } else {

        echo "Gagal menghapus data: " . $stmt->error;

    }

} else {

    echo "ID mahasiswa tidak ditemukan.";

}

?>
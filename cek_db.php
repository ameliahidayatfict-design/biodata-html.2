<?php

$conn = new mysqli("127.0.0.1", "root", "");

if ($conn->connect_error) {
    die("Koneksi MySQL gagal: " . $conn->connect_error);
}

echo "<h2>Koneksi MySQL Berhasil</h2>";

$result = $conn->query("SHOW DATABASES");

echo "<h3>Database yang terlihat oleh PHP:</h3>";

while ($row = $result->fetch_assoc()) {
    echo $row["Database"] . "<br>";
}

$conn->close();

?>

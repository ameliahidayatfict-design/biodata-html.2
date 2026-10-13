<?php

require "koneksi.php";

$id = $_GET["id"];

$sql = "SELECT * FROM mahasiswa WHERE id = ?";
$stmt = $conn->prepare($sql);

$stmt->bind_param("i", $id);
$stmt->execute();

$result = $stmt->get_result();
$data = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Mahasiswa</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <h1>Edit Mahasiswa</h1>
        <p>Web Programming 1</p>
    </header>

    <nav>
        <a href="index.html">Biodata</a>
        <a href="layout.html">Layout Experiment</a>
        <a href="data_mahasiswa.php">Data Mahasiswa</a>
        <a href="form_mahasiswa.php">Tambah Mahasiswa</a>
    </nav>

    <main>

        <section>

            <h2>Edit Data Mahasiswa</h2>

            <form action="proses_edit.php" method="POST" class="student-form">

                <input
                    type="hidden"
                    name="id"
                    value="<?php echo $data['id']; ?>"
                >

                <label for="nim">NIM</label>

                <input
                    id="nim"
                    name="nim"
                    type="text"
                    value="<?php echo htmlspecialchars($data['nim']); ?>"
                    required
                >

                <label for="nama">Nama</label>

                <input
                    id="nama"
                    name="nama"
                    type="text"
                    value="<?php echo htmlspecialchars($data['nama']); ?>"
                    required
                >

                <label for="program_studi">Program Studi</label>

                <input
                    id="program_studi"
                    name="program_studi"
                    type="text"
                    value="<?php echo htmlspecialchars($data['program_studi']); ?>"
                    required
                >

                <label for="email">Email</label>

                <input
                    id="email"
                    name="email"
                    type="email"
                    value="<?php echo htmlspecialchars($data['email']); ?>"
                    required
                >

                <button type="submit">
                    Update Data
                </button>

            </form>

        </section>

    </main>

    <footer>
        <p>Web Programming 1</p>
    </footer>

</body>

</html>

<?php

$stmt->close();
$conn->close();

?>
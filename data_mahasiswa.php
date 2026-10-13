<?php

require "koneksi.php";

$sql = "SELECT id, nim, nama, program_studi, email
        FROM mahasiswa
        ORDER BY id ASC";

$result = $conn->query($sql);

?>


<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Mahasiswa - Ocean Blue</title>

    <link rel="stylesheet" href="style.css">

</head>


<body>


    <!-- HEADER -->

    <header>

        <h1>🌊 DATA MAHASISWA 🌊</h1>

        <p>Website Data Mahasiswa</p>

        <p>Mata Kuliah Web Programming 1</p>

    </header>




    <!-- NAVBAR -->

    <nav class="top-nav">

        <a href="index.html">
            🏠 Biodata
        </a>


        <a href="layout.html">
            🌊 Layout Experiment
        </a>


        <a href="data_mahasiswa.php">
            📋 Data Mahasiswa
        </a>


        <a href="form_mahasiswa.php">
            ➕ Tambah Mahasiswa
        </a>


    </nav>





    <main>


        <section class="card">


            <h2>🐬 Daftar Mahasiswa</h2>



            <div class="table-wrapper">


                <table class="data-table">


                    <caption>
                        Data Mahasiswa dari MySQL
                    </caption>



                    <thead>

                        <tr>

                            <th>No</th>

                            <th>NIM</th>

                            <th>Nama</th>

                            <th>Program Studi</th>

                            <th>Email</th>

                            <th>Aksi</th>

                        </tr>

                    </thead>




                    <tbody>


                    <?php

                    $no = 1;


                    while ($row = $result->fetch_assoc()) {


                    ?>


                        <tr>


                            <td>
                                <?= $no; ?>
                            </td>


                            <td>
                                <?= htmlspecialchars($row["nim"]); ?>
                            </td>


                            <td>
                                <?= htmlspecialchars($row["nama"]); ?>
                            </td>


                            <td>
                                <?= htmlspecialchars($row["program_studi"]); ?>
                            </td>


                            <td>
                                <?= htmlspecialchars($row["email"]); ?>
                            </td>



                            <td>


                                <a class="btn-edit"
                                   href="edit_mahasiswa.php?id=<?= $row["id"]; ?>">
                                    ✏️ Edit
                                </a>


                                <a class="btn-hapus"
                                   href="hapus_mahasiswa.php?id=<?= $row["id"]; ?>"
                                   onclick="return confirm('Yakin ingin menghapus data ini?');">
                                    🗑️ Hapus
                                </a>



                            </td>


                        </tr>


                    <?php

                        $no++;

                    }

                    ?>


                    </tbody>


                </table>


            </div>


        </section>


    </main>





    <footer>

        <p>
            🌊 Web Programming 1
        </p>

    </footer>




</body>


</html>



<?php

$conn->close();

?>
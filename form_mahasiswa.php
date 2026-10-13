<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Mahasiswa - Ocean Blue</title>

    <link rel="stylesheet" href="style.css">

</head>


<body>


    <!-- HEADER -->

    <header>

        <h1>🌊 TAMBAH MAHASISWA 🌊</h1>

        <p>Website Data Mahasiswa</p>

        <p>Mata Kuliah Web Programming 1</p>

    </header>




    <!-- NAVIGATION -->

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


            <h2>🐬 Form Data Mahasiswa</h2>



            <form action="proses_tambah.php"
                  method="POST"
                  class="student-form">



                <label for="nim">
                    NIM
                </label>

                <input 
                    type="text"
                    id="nim"
                    name="nim"
                    placeholder="Masukkan NIM"
                    required
                >




                <label for="nama">
                    Nama
                </label>

                <input
                    type="text"
                    id="nama"
                    name="nama"
                    placeholder="Masukkan Nama"
                    required
                >




                <label for="program_studi">
                    Program Studi
                </label>


                <input
                    type="text"
                    id="program_studi"
                    name="program_studi"
                    placeholder="Masukkan Program Studi"
                    required
                >




                <label for="email">
                    Email
                </label>


                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Masukkan Email"
                    required
                >




                <button type="submit">
                    💾 Simpan Data
                </button>



            </form>


        </section>


    </main>





    <footer>

        <p>
            🌊 Web Programming 1
        </p>

    </footer>




</body>

</html>
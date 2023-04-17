<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main>
        <div class="form-card">
            <h2>Siswa yang sudah mendaftar</h2>

            <table class="table">
            <thead>
                <tr class="table__header">
                    <th class="input__label">No</th>
                    <th class="input__label">Nama</th>
                    <th class="input__label">Alamat</th>
                    <th class="input__label">Jenis Kelamin</th>
                    <th class="input__label">Agama</th>
                    <th class="input__label">Sekolah Asal</th>
                    <th class="input__label">Tindakan</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "SELECT * FROM calon_siswa";
                $query = mysqli_query($db, $sql);

                while($siswa = mysqli_fetch_array($query)){
                    echo "<tr class='table__row'>";

                    echo "<td class='input__label'>".$siswa['id']."</td>";
                    echo "<td class='input__label'>".$siswa['nama']."</td>";
                    echo "<td class='input__label'>".$siswa['alamat']."</td>";
                    echo "<td class='input__label'>".$siswa['jenis_kelamin']."</td>";
                    echo "<td class='input__label'>".$siswa['agama']."</td>";
                    echo "<td class='input__label'>".$siswa['sekolah_asal']."</td>";

                    echo "<td class='input__label'>";
                    echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
                    echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
                    echo "</td>";

                    echo "</tr>";
                }
                ?>

            </tbody>
            </table>

            <div class="edit__footer">
                <p class="input__label">Total: <?php echo mysqli_num_rows($query) ?></p>
                <a href="form-daftar.php" class="button">Tambah Baru</a>
            </div>
        </div>
    </main>

    </body>
</html>
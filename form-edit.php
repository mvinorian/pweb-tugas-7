<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Siswa | SMK Coding</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main>
        <div class="form-card">
            <h2>Formulir Edit Siswa</h2>

            <form action="proses-edit.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

                <div class='input'>
                    <label for="nama" class='input__label'>Nama: </label>
                    <input type="text" name="nama" placeholder="Nama lengkap" value="<?php echo $siswa['nama'] ?>" class="input__form" />
                </div>
                <div class='input'>
                    <label for="alamat" class='input__label'>Alamat: </label>
                    <textarea name="alamat" class="input__form"><?php echo $siswa['alamat'] ?></textarea>
                </div>
                <div class='input'>
                    <label for="jenis_kelamin" class='input__label'>Jenis Kelamin: </label>
                    <label class="input__label"><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($siswa['jenis_kelamin'] == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
                    <label class="input__label"><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($siswa['jenis_kelamin'] == 'perempuan') ? "checked": "" ?>> Perempuan</label>
                </div>
                <div class='input'>
                    <label for="agama" class='input__label'>Agama: </label>
                    <select name="agama" class="input__form">
                        <option <?php echo ($siswa['agama'] == 'Islam') ? "selected": "" ?>>Islam</option>
                        <option <?php echo ($siswa['agama'] == 'Kristen') ? "selected": "" ?>>Kristen</option>
                        <option <?php echo ($siswa['agama'] == 'Hindu') ? "selected": "" ?>>Hindu</option>
                        <option <?php echo ($siswa['agama'] == 'Budha') ? "selected": "" ?>>Budha</option>
                        <option <?php echo ($siswa['agama'] == 'Atheis') ? "selected": "" ?>>Atheis</option>
                    </select>
                </div>
                <div class='input'>
                    <label for="sekolah_asal" class='input__label'>Sekolah Asal: </label>
                    <input type="text" name="sekolah_asal" placeholder="Nama sekolah" value="<?php echo $siswa['sekolah_asal'] ?>" class='input__form' />
                </div>
                <input type="submit" value="Simpan" name="simpan" class='button' />
            </form>
        </div>
    </main>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main>
        <div class="form-card">
            <h2>Formulir Pendaftaran <br/> Siswa Baru</h2>
            
            <form action="proses-pendaftaran.php" method="POST"> 
                <div class='input'>
                    <label for="nama" class='input__label'>Nama: </label>
                    <input type="text" name="nama" placeholder="Nama lengkap" class="input__form" />
                </div>
                <div class='input'>
                    <label for="alamat" class='input__label'>Alamat: </label>
                    <textarea name="alamat" class="input__form"></textarea>
                </div>
                <div class='input'>
                    <label for="jenis_kelamin" class='input__label'>Jenis Kelamin: </label>
                    <label class="input__label"><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
                    <label class="input__label"><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
                </div>
                <div class='input'>
                    <label for="agama" class='input__label'>Agama: </label>
                    <select name="agama" class="input__form">
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                        <option>Atheis</option>
                    </select>
                </div>
                <div class='input'>
                    <label for="sekolah_asal" class='input__label'>Sekolah Asal: </label>
                    <input type="text" name="sekolah_asal" placeholder="Nama sekolah" class='input__form' />
                </div>
                <input type="submit" value="Daftar" name="daftar" class='button' />
            </form>
        </div>
    </main>
    </body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main>
        <div class="form-card">
            <h2>
                Pendaftaran Siswa Baru <br/>
                SMK Coding
            </h2>
            <nav>
                <a class="button" href="form-daftar.php">Daftar Baru</a>
                <a class="button" href="list-siswa.php">Pendaftar</a>
            </nav>
        </div>
    </main>

    <?php if(isset($_GET['status'])): ?>
        <div>
          <?php 
            if($_GET['status'] == 'sukses') {
              echo "<p class='fw-bold fs-3' style='color: rgb(150, 255, 150); margin-top: 30px'>Pendaftaran berhasil!</p>";
            } else {
              echo "<p class='fw-bold fs-3 text-danger'>Pendaftaran gagal!</p>";
            }
            ?>
        </div>
      <?php endif; ?>


    </body>
</html>
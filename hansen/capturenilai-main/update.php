<?php 

    require 'config.php';

    $id = $_GET['id'];


    $mahasiswa = query("SELECT * FROM mahasiswa")[0];

    if(isset($_POST['submit'])) {
        if(update($_POST) > 0 ) {
            echo "<script>
                    alert('Data berhasil diubah!')
                    window.location.href = 'index.php'
            </script>";
        }else {
            echo "<script>
                    alert('Data  tidak berhasil diubah!')
                    window.location.href = 'index.php'
            </script>";
        }
    }



?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Capture Nilai - Update Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">

    <form action="" method="post">
      <input type="hidden" name="id" value="<?= $mahasiswa['id'] ?>">
  <div class="mb-3">
    <label for="npm" class="form-label">NPM</label>
    <input type="text" class="form-control" id="npm" name="npm" value="<?= $mahasiswa['npm'] ?>">
  </div>
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa['nama'] ?>">
  </div>
  <div class="mb-3">
    <label for="t1" class="form-label">Tugas 1</label>
    <input type="text" class="form-control" id="t1" name="t1" value="<?= $mahasiswa['t1'] ?>">
  </div>
  <div class="mb-3">
    <label for="t2" class="form-label">Tugas 2</label>
    <input type="text" class="form-control" id="t2" name="t2" value="<?= $mahasiswa['t2'] ?>">
  </div>
  <div class="mb-3">
    <label for="t3" class="form-label">Tugas 3</label>
    <input type="text" class="form-control" id="t3" name="t3" value="<?= $mahasiswa['t3'] ?>">
  </div>
  <div class="mb-3">
    <label for="kuis" class="form-label">Kuis</label>
    <input type="text" class="form-control" id="kuis" name="kuis" value="<?= $mahasiswa['kuis'] ?>">
  </div>
  <div class="mb-3">
    <label for="uts" class="form-label">Uts</label>
    <input type="text" class="form-control" id="uts" name="uts" value="<?= $mahasiswa['uts'] ?>">
  </div>
  <div class="mb-3">
    <label for="uas" class="form-label">Uas</label>
    <input type="text" class="form-control" id="uas" name="uas" value="<?= $mahasiswa['uas'] ?>">
  </div>
  
 
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
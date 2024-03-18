<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Anggota Kos</title>
    <style>
      .A {
        background: rgb(2, 0, 36);
        background: linear-gradient(0deg, rgba(2, 0, 36, 1) 0%, hsl(0, 100%, 50%) 35%, rgba(0, 212, 255, 1) 100%);
        min-height: 100vh;
      }

      .B{
        min-height: 90vh;
      }
      .C{
        width: 80px;
      }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  </head>
  <body class="A">
    <div class="container">
      <h1 class="text-center">Data Anggota Kos</h1>
      <div class="card B">
        <div class="card-header bg-primary text-white">Data Anggota Kos</div>
        <div class="card-body">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#tambahanggota">Tambah</button>

          <table class="table table-bordered table-striped table">
            <tr class="B">
              <th>Nama Lengkap</th>
              <th>Jenis Kelamin</th>
              <th>No Ruang</th>
              <th>Harga Bulanan</th>
              <th>Tanggal Pembayaran</th>
            </tr>

            <tr>
              <td>Elvis Johnelson</td>
              <td>Laki-Laki</td>
              <td>101</td>
              <td>Rp 50.000,00</td>
              <td>1 Januari</td>
              <td class="justify-content-center">
                <a href="#" class="btn btn-warning C" data-bs-toggle="modal" data-bs-target="#editanggota">Edit</a>
                <a href="#" class="btn btn-danger C" data-bs-toggle="modal" data-bs-target="#modalhapus">Hapus</a>
              </td>
            </tr>
            <tr>
              <td>Elvis Johnelson 2</td>
              <td>Laki-Laki</td>
              <td>102</td>
              <td>Rp 60.000,00</td>
              <td>1 Februari</td>
              <td class="justify-content-center">
                <a href="#" class="btn btn-warning C" data-bs-toggle="modal" data-bs-target="#editanggota">Edit</a>
                <a href="#" class="btn btn-danger C" data-bs-toggle="modal" data-bs-target="#modalhapus">Hapus</a>
              </td>
            </tr>
            <tr>
              <td>Elvis Johnelson 3</td>
              <td>Laki-Laki</td>
              <td>103</td>
              <td>Rp 70.000,00</td>
              <td>1 Maret</td>
              <td class="justify-content-center">
                <a href="#" class="btn btn-warning C" data-bs-toggle="modal" data-bs-target="#editanggota">Edit</a>
                <a href="#" class="btn btn-danger C" data-bs-toggle="modal" data-bs-target="#modalhapus">Hapus</a>
              </td>
            </tr>
            <tr>
              <td>Elvis Johnelson 4</td>
              <td>Laki-Laki</td>
              <td>104</td>
              <td>Rp 80.000,00</td>
              <td>1 April</td>
              <td class="justify-content-center">
                <a href="#" class="btn btn-warning C" data-bs-toggle="modal" data-bs-target="#editanggota">Edit</a>
                <a href="#" class="btn btn-danger C" data-bs-toggle="modal" data-bs-target="#modalhapus">Hapus</a>
              </td>
            </tr>

             <!--Start Modal Edit -->
          <div class="modal fade" id="editanggota" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Data Anggota Kos</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form method="post" action="aksi_crud.php">
                  <input type="hidden" name="id" value="id">
                  <div class="mb-3">
                    <label for="modal-nama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="modal-nama" name="tnama" value="elvis" placeholder="Masukkan Namamu" />
                  </div>

                  <div class="mb-3">
                    <label for="modal-kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" name="tkelamin">
                      <option value="Laki-Laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>

                  <div class="mb-3">
                    <label for="modal-ruang" class="form-label">No Ruang</label>
                    <select class="form-control" id="modal-ruang">
                      <option value="101">101</option>
                      <option value="102">102</option>
                      <option value="103">103</option>
                      <option value="104">104</option>
                      <option value="105">105</option>
                      <option value="106">106</option>
                      <option value="107">107</option>
                      <option value="108">108</option>
                      <option value="109">109</option>
                      <option value="110">110</option>
                      <option value="111">111</option>
                      <option value="112">112</option>
                      <option value="113">113</option>
                      </select>
                  </div>

                  <div class="mb-3">
                    <label for="modal-harga" class="form-label">Harga Bulanan</label>
                    <select class="form-control" id="modal-harga">
                      <option value="Rp 50.000,00">Rp 50.000,00</option>
                      <option value="Rp 50.000,00">Rp 60.000,00</option>
                      <option value="Rp 50.000,00">Rp 70.000,00</option>
                      <option value="Rp 50.000,00">Rp 80.000,00</option>
                    </select>
                  </div>

                  <div class="mb-3">
                    <label for="modal-tanggal" class="form-label">Tanggal Pembayaran</label>
                    <select class="form control" id="modal-tanggal">
                      <option value="1 Januari">1 Januari</option>
                      <option value="1 Januari">1 Februari</option>
                      <option value="1 Januari">1 Maret</option>
                      <option value="1 Januari">1 April</option>
                    </select>
                  </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" name="bubah">Edit</button>
                </div>
                  </form>
              </div>
            </div>
          </div>
          <!-- End Modal Edit -->


             <!--Start Modal Hapus -->
          <div class="modal fade" id="modalhapus" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="staticBackdropLabel">Konfirmasi Hapus Data</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form method="post" action="aksi_crud.php">
                  <input type="hidden" name="id" value="">
                  
                  <h5 class="text-center"> Apakah anda yakin akan menghapus data ini? </h5>
                  <center><span class="text-danger">nama kelamin ruang harga pembayaran</span></center>
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak Jadi</button>
                  <button type="submit" class="btn btn-danger" name="bhapus">Saya Yakin</button>
                </div>
                  </form>
              </div>
            </div>
          </div>
          <!-- End Modal Hapus -->

          </table>

          <!--Start Modal Tambah-->
          <div class="modal fade" id="tambahanggota" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Anggota Kos</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form method="post" enctype="multipart/form-data" action="aksi_crud.php">
                  <div class="mb-3">
                    <label for="modal-nama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="modal-nama" name="tnama" placeholder="Masukkan Nama Lengkapmu" />
                  </div>

                  <div class="mb-3">
                    <label for="modal-kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" name="tkelamin">
                      <option value="Laki-Laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>

                  <div class="mb-3">
                    <label for="modal-ruang" class="form-label">No Ruang</label>
                    <select class="form-select" name="truang">
                      <option value="101">101</option>
                      <option value="102">102</option>
                      <option value="103">103</option>
                      <option value="104">104</option>
                      <option value="105">105</option>
                      <option value="106">106</option>
                      <option value="107">107</option>
                      <option value="108">108</option>
                      <option value="109">109</option>
                      <option value="110">110</option>
                      <option value="111">111</option>
                      <option value="112">112</option>
                      <option value="113">113</option>
                    </select>
                  </div>

                  <div class="mb-3">
                    <label for="modal-harga" class="form-label">Harga Bulanan</label>
                    <select class="form-select" name="tharga">
                      <option value="Rp 50.000,00">Rp 50.000,00</option>
                      <option value="Rp 60.000,00">Rp 60.000,00</option>
                      <option value="Rp 70.000,00">Rp 70.000,00</option>
                      <option value="Rp 80.000,00">Rp 80.000,00</option>
                    </select>
                  </div>

                  <div class="mb-3">
                    <label for="modal-pembayaran" class="form-label">Tanggal Pembayaran</label>
                    <select class="form-select" name="tpembayaran">
                      <option value="1 Januari">1 Januari</option>
                      <option value="1 Fabruari">1 Februari</option>
                      <option value="1 Maret">1 Maret</option>
                      <option value="1 April">1 April</option>
                    </select>
                  </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" name="btambah">Tambah</button>
                </div>
                  </form>
              </div>
            </div>
          </div>
          <!-- End Modal Tambah-->
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  
  </body>
</html>
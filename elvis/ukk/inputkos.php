<div class="card mb-4">
    <div class="card-header">Input Data Kos</div>
    <div class="card-body">
        <form action="" method="POST" enctype="multipart/form-data">

            <div class="col-md 12">
                <div class="form-group"><label for="">Kode Kos</label>
                <input type="text" name="kode" class="form-control" placeholder="silakan masukan kode barang">
                </div>
            </div><br>

            <div class="col-md 12">
                <div class="form-group"><label for="">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" placeholder="silakan masukan nama barang">
                </div>
            </div><br>

            <div class="col-md 12">
                <div class="form-group"><label for="">Jenis Kelamin</label>
                <input type="text" name="jenis_kelamin" class="form-control" placeholder="silakan masukan jenis_kelamin">
                </div>
            </div><br>

            <div class="col-md 12">
                <div class="form-group"><label for="">Id Ruangan</label>
                <select name="idKategori" class="form-control">
                    <option value="0">Silakan Pilih No Ruangan</option>
                    <?php
                        include"koneksi.php";

                        $sql = mysqli_query($db, "SELECT * FROM tbl_ruangan;");

                        while($data = mysqli_fetch_array($sql)){
                    ?>
                    <option value="<?php echo $data['no_ruang']?>"><?php echo $data['nama_kategori']?></option>
                    <?php }?>
                </select>

                </div>
            </div><br>

            <div class="col-md 12">
                <div class="form-group"><label for="">Harga</label>
                <input type="text" name="harga" class="form-control" placeholder="silakan masukan harga">
                </div>
            </div><br>

            <div class="col-md 12">
                <div class="form-group"><label for="">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" placeholder="silakan masukan Tanggal">
                </div>
            </div><br>

            <center><input type="submit" value="submit" proses="submit" class="btn btn-primary"></center>

        </form>
    </div>
</div>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    include "koneksi.php";

    $kd = $_POST['kode'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $idk = $_POST['idKategori'];
    $hrg = $_POST['harga'];
    $tgl = $_POST['tanggal'];

    $sql = mysqli_query($db,"INSERT INTO tbl_kos VALUES ('$kd', '$nama', '$jenis_kelamin', '$idk', '$hrg', '$tgl')");


    if($sql){
        echo"<script>window.alert('Data Berhasil Disimpan!'), window.location.replace('admin.php?page=datakos')</script>";
    }else{
        die ("Erornya Di SQL");
    }
}else{
        die ("Errornya Disini");
    }
 


?>
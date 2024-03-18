<div class="card mb-4">
<div class="card-header">    
    <i class="fas fa-table mr-1"></i>List Data Kos
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <a href="admin.php?page=inputkos" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
          <i class='fas fa-plus'></i> Data Kos</a><p></p>
        <thead>
            <tr>
                <th>No</th>  
                <th>Kode Kos</th>  
                <th>Nama Lengkap</th>
                <th>Jenis Kelamin</th>
                <th>No Ruangan</th>  
                <th>Harga</th>
                <th>Tanggal Pembayaran</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include "koneksi.php";
                $no = 1;
                $sql = mysqli_query($db, "SELECT * FROM tbl_kos;");

                while($read = mysqli_fetch_array($sql))
                { 

            ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $read['kode_kos']; ?></td>
                <td><?php echo $read['nama_lengkap']; ?></td>
                <td><?php echo $read['jenis_kelamin']; ?></td>
                <td><?php echo $read['no_ruang']; ?></td>
                <td><?php echo $read['harga']; ?></td>
                <td><?php echo $read['tanggal']; ?></td>

                <td>

                    <a href="admin.php?page=edit_b&idb=<?php echo $read['kode_kos'];?>" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i class="fas fa-edit"></i></a>

                    <a href="admin.php?page=del_b&idb=<?php echo $read['kode_kos'];?>" onclick="return confirm('Yakin Hapus Data Ini..?')" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
            <?php $no++; }?>
        </tbody>
        </table>
    </div> 
    </div>
</div>
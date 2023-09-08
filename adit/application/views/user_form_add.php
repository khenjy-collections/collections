<div class="row">
    <div class="col-12">
        <form action="<?= site_url("user/simpan"); ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Nama</label>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="form-group">
            <label for="">Username</label>
            <input type="text" class="form-control" name="username">
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="form-group">
            <label for="">Level Akses</label>
            <select class="form-control" name="level">
                <option value="kasir">Kasir</option>
                <option value="manager">Manager</option>
                <option value="admin">Admin</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Gambar User</label>
            <input type="file" class="form-control-file" name="gambar">
        </div>
        <div class="form-group">
            <button class="btn btn-success" type="submit">Simpan</button>
        </div>
    </form>
    </div>
</div>
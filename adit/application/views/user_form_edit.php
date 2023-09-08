<div class="row">
    <div class="col-12">
        <form action="<?= site_url("user/update"); ?>" method="post" enctype="multipart/form-data">
            <?php foreach ($user as $m) : ?>
                <div class="form-group">
                    <label for="">ID User</label>
                    <input type="hidden" name="kode" value="<?= $m->id_user; ?>">
                    <input type="text" class="form-control" name="id" value="<?= $m->id_user; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="nama" value="<?= $m->nama; ?>">
                </div>
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="username" value="<?= $m->username; ?>">
                    <input type="hidden" class="form-control" name="password" value="<?= $m->password; ?>">
                </div>
                <div class="form-group">
                    <label for="">Level</label>
                    <?= $m->level; ?>
                    <select class="form-control" name="level">
                        <option value="kasir" <?= ($m->level == "kasir") ? "selected" : ""; ?>>Kasir</option>
                        <option value="admin" <?= ($m->level == "admin") ? "selected" : ""; ?>>Admin</option>
                        <option value="manager" <?= ($m->level == "manager") ? "selected" : ""; ?>>Manager</option>
                    </select>
                </div>
                <div class="row pt-3 pb-2">
                    <div class="col-12"><img src="assets/upload/<?= $m->foto; ?>" height="100" alt=""></div>
                </div>
                <div class="form-group">
                    <label for="">Gambar user</label>
                    <input type="hidden" name="txtgambar" value="<?= $m->foto; ?>">
                    <input type="file" class="form-control-file" name="gambar">
                </div>
            <?php endforeach; ?>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Simpan</button>
            </div>
        </form>
    </div>
</div>
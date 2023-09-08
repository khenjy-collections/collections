<div class="row">
    <div class="col-12">
        <form action="<?= site_url("pengaturan/update"); ?>" method="post" enctype="multipart/form-data">
            <?php foreach ($pengaturan as $m) : ?>
                <div class="form-group">
                    <label for="">Judul Website</label>
                    <input type="hidden" name="kode" value="<?= $m->id; ?>">
                    <input type="text" class="form-control" name="id" value="<?= $m->judul; ?>" readonly>
                    <input type="hidden" name="id" value="<?= $m->id; ?>">
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="<?= $m->alamat; ?>">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" value="<?= $m->email; ?>">
                </div>
                <div class="form-group">
                    <label for="">Telp</label>
                    <input type="text" class="form-control" name="telp" value="<?= $m->telp; ?>">
                </div>
                <div class="form-group">
                    <label for="">Fb</label>
                    <input type="text" class="form-control" name="fb" value="<?= $m->fb; ?>">
                </div>
                <div class="form-group">
                    <label for="">Ig</label>
                    <input type="text" class="form-control" name="ig" value="<?= $m->ig; ?>">
                </div>
                <div class="form-group">
                    <label for="">Metadesc</label>
                    <textarea class="form-control" name="metadesc" cols="90" rows="3"><?= $m->metadesc; ?></textarea>
                </div>
                <div class="row pt-3 pb-2">
                    <div class="col-12"><img src="assets/upload/<?= $m->favicon; ?>" height="100" alt=""></div>
                </div>
                <div class="form-group">
                    <label for="">Favicon</label>
                    <input type="hidden" name="txtfavicon" value="<?= $m->favicon; ?>">
                    <input type="file" class="form-control-file" name="favicon">
                </div>
                <div class="row pt-3 pb-2">
                    <div class="col-12"><img src="assets/upload/<?= $m->logo; ?>" height="100" alt=""></div>
                </div>
                <div class="form-group">
                    <label for="">Logo</label>
                    <input type="hidden" name="txtlogo" value="<?= $m->logo; ?>">
                    <input type="file" class="form-control-file" name="logo">
                </div>
            <?php endforeach; ?>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Simpan</button>
            </div>
        </form>
    </div>
</div>
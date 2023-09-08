<div class="row">
    <div class="col-12">
        <form action="<?= site_url("menu/simpan"); ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Nama Menu</label>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="form-group">
            <label for="">Harga Menu</label>
            <input type="text" class="form-control" name="harga">
        </div>
        <div class="form-group">
            <label for="">Kategori Menu</label>
            <select class="form-control" name="kategori">
                <option value="makanan">Makanan</option>
                <option value="minuman">Minuman</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Gambar Menu</label>
            <input type="file" class="form-control-file" name="gambar">
        </div>
        <div class="form-group">
            <button class="btn btn-success" type="submit">Simpan</button>
        </div>
    </form>
    </div>
</div>
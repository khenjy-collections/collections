<base href="<?= base_url(); ?>">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php foreach ($pengaturan as $p) : ?>
        <title>
            <?= $judul; ?> - <?= $p->judul; ?>
        </title>
        <link rel="icon" href="<?= base_url('assets/upload/' . $p->favicon); ?>" type="image/gif" sizes="16x16">
    <?php endforeach ?>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/datatables.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="border shadow-sm rounded mt-5 d-flex">
                <div id="gambar">
                    <img src="assets/img/bg.jpg" alt="">
                </div>
                <div class="border text-center pt-5" id="form">
                    <span style="font-size: 20pt;"><b>BISA-NGOPI.com</b></span><br>
                    <small style="font-size: 10pt;">SILAHKAN LOGIN TERLEBIH DAHULU</small>
                    <form method="post" action="<?= site_url("welcome/ceklogin") ?>">
                        <input type="text" class="mt-3 inputbx form-control" name="uname" placeholder="Masukkan username">
                        <input type="password" class="mt-2 inputbx form-control" name="pass" id="pass" placeholder="Masukkan password">
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="password_show_hide();">
                            <label for="exampleCheck1" class="form-check-label">Show Password</label>
                        </div>
                        <button class="btn btn-primary btn-sm mt-2" name="btn" type="submit">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="assets/jquery.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/datatables.min.js"></script>
    <script>
        <?= $this->session->flashdata('panggil'); ?>$

        function password_show_hide() {
            var x = document.getElementById("pass");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>

</html>
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
    <div class="container-fluid">
        <div class="row vh-100 bg-dark">
            <div class="col-12 vh-100 bg-dark text-white">
                <div class="row">
                    <!-- judul -->
                    <div class="col-12 text-center pt-2 pb-2">
                        <h4>BISA-NGOPI.com</h4>
                    </div>
                    <!-- profile user -->
                    <div class="col-12 text-center">
                        <div class="text-center"><img class="rounded-circle" src="<?= 'assets/upload/user' . $this->session->userdata('foto') ?>" alt="foto" width="128"></div>
                        <?= $this->session->userdata("nama") ?><br>
                        <?= $this->session->userdata("akses") ?><br>
                    </div>
                    <!-- menu -->
                    <div class="col-12 text-center pt-3">
                        <?php $this->load->view("menu_" . $this->session->userdata("akses")); ?>
                    </div>
                </div>
            </div>

            <div class="col-10 bg-light vh-100">
                <div class="row">
                    <div class="col-12 bg-white pt-2 pb-2 shadow-sm">
                        <h3><?= $judul; ?></h3>
                    </div>
                    <div class="col-12 pt-3">
                        <?php $this->load->view($konten); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="assets/jquery.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/datatables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            //alert("echo");//
            $("#datamenu").DataTable();
        });
    </script>
</body>

</html>
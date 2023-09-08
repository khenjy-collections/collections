<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-lg-7">

        <div class="card o-hidden border-0 secondary-lg my-5">
            <div class="card-body p-0">
          <!-- Body -->
          <div class="row">
            <div class="col-lg">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Aplikasi Absensi Karya Mandiri</h1>
                  <hr>
                </div>
                <?= $this->session->flashdata('message'); ?>
                <form class="user" method="post" action="<?= base_url(); ?>">
                  <div class="form-group mt-4">
                    <input type="text" class="form-control form-control-user" name="username" placeholder="User Code (contonya: STD026)">
                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
                  </div>
                  <div class="form-group mt-4 mb-4">
                    <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                  </div>
                  <button class="btn btn-secondary btn-user btn-block mt-4 " type="submit">
                    Login
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>
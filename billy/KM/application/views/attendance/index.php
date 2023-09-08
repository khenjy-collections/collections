       <!-- Begin Page Content -->
       <div class="container-fluid">

         <!-- Page Heading -->
         <div class="d-sm-flex align-items-center justify-content-between mb-4">
           <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
         </div>

         <!-- Content Row -->
         <div class="row">

           <div class="col">
             <div class="row">

               <!-- Area Chart -->
               <div class="col-xl-12 col-lg-7">
                 <div class="card shadow mb-4" style="min-height: 543px">
                   <!-- Card Body -->
                   <div class="card-body">
                     <?php if ($weekends == true) : ?>
                       <h1 class="text-center my-3">Terimakasih untuk minggu ini!</h1>
                       <h5 class="card-title text-center mb-4 px-4">Selamat menikmati hari mu!</h5>

                       <div class="row">
                         <button disabled class="btn btn-danger btn-circle mx-auto" style="font-size: 35px; width: 200px; height: 200px">
                           <i class="fas fa-fw fa-sign-out-alt fa-2x"></i>
                         </button>
                       </div>
                     <?php else : ?>
                       <?php if ($in == false) : ?>
                         <?= form_open_multipart('attendance') ?>
                         <div class="row mb-3">
                           <div class="col-lg-5">
                             <label for="work_shift" class="col-form-label">Jam Kerja</label>
                             <input class="form-control" type="text" placeholder="<?= $account['shift']; ?>" value="<?= $account['shift']; ?>" name="work_shift" readonly>
                           </div>
                           <div class="col-lg-5 offset-lg-1">
                             <label for="location" class="col-form-label">Cari di Lokasi</label>
                             <select class="form-control" name="location" id="location">
                               <?php foreach ($location as $lct) : ?>
                                 <option value="<?= $lct['id'] ?>"><?= $lct['id']; ?> = <?= $lct['name'] ?></option>
                               <?php endforeach; ?>
                             </select>
                           </div>
                         </div>
                         <div class="row mb-3">
                           <div class="col-lg-5 text-center">
                             <div class="row col">
                               <label for="image" class="col-form-label float-left">Lampirkan Gambarmu</label>
                             </div>
                             <img id="output" style="max-height: 252px;" class="img-thumbnail rounded mb-2" src="<?= base_url('images/attendance/default.png') ?>">
                             <input type="file" class="d-block" id=image name="image" accept="image/*" onchange="loadFile(event)">
                             <script>
                               var loadFile = function(event) {
                                 var output = document.getElementById('output');
                                 output.src = URL.createObjectURL(event.target.files[0]);
                                 output.onload = function() {
                                   URL.revokeObjectURL(output.src) // free memory
                                 }
                               };
                             </script>
                           </div>
                           <div class="col-lg-5 offset-lg-1 text-center">
                             <label for="notes" class="float-left">Catatan</label>
                             <textarea maxlength="120" class="form-control mb-4" name="notes" id="notes" rows="3" style="resize: none;"></textarea>
                             <hr>
                             <button type="submit" class="btn btn-info btn-circle" style="font-size: 20px; width: 100px; height: 100px">
                               <i class="fas fa-fw fa-sign-in-alt fa-2x"></i>
                             </button>
                             <b><p class="text-center text-primary pt-3">Kirimkan!</p></b>
                             <hr>
                           </div>
                         </div>
                         <?= form_close() ?>
                       <?php else : ?>
                         <h3 class="text-center my-3">Terimakasih untuk hari ini</h3>
                         <?php if ($disable == false) : ?>
                           <b><p class="text-center text-secondary pt-3">Check Out!</p></b>
                           <div class="row">
                             <a href="<?= base_url('attendance/checkout') ?>" onclick="return confirm('Check out now? Make sure you are done with you work!')" class="btn btn-danger btn-circle mx-auto" style="font-size: 35px; width: 200px; height: 200px">
                               <i class="fas fa-fw fa-sign-out-alt fa-2x"></i>
                             </a>
                           <?php else : ?>
                             <b><p class="text-center text-primary pt-3">Sampai Jumpa Lagi!</p></b>
                             <div class="row">
                               <button disabled class="btn btn-danger btn-circle mx-auto" style="font-size: 35px; width: 200px; height: 200px">
                                 <i class="fas fa-fw fa-sign-out-alt fa-2x"></i>
                               </button>
                             <?php endif; ?>
                             </div>
                           <?php endif; ?>
                         <?php endif; ?>
                           </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <!-- End  -->
         </div>
         <!-- /.container-fluid -->

       </div>
       <!-- End of Main Content -->
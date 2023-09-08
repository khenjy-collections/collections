       <!-- Begin Page Content -->
       <div class="container-fluid">

         <!-- Page Heading -->
         <div class="d-sm-flex align-items-center justify-content-between mb-4">
           <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
         </div>

         <!-- Content Row -->
         <div class="row">

           <!-- Earnings (Monthly) Card Example -->
           <div class="col-xl-3 col-md-6 mb-4">
             <div class="card border-left-primary shadow h-100 py-2">
               <div class="card-body">
                 <div class="row no-gutters align-items-center">
                   <div class="col mr-2">
                     <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pekerjaan</div>
                     <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $display['c_department']; ?> Pekerjaan</div>
                   </div>
                   <div class="col-auto">
                     <i class="fas fa-building fa-2x text-gray-300"></i>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <!-- jam kerja -->
           <div class="col-xl-3 col-md-6 mb-4">
             <div class="card border-left-info shadow h-100 py-2">
               <div class="card-body">
                 <div class="row no-gutters align-items-center">
                   <div class="col mr-2">
                     <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jam Yang berlangsung</div>
                     <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $display['c_shift']; ?> Jam Kerjaan</div>
                   </div>
                   <div class="col-auto">
                     <i class="fas fa-exchange-alt fa-2x text-gray-300"></i>
                   </div>
                 </div>
               </div>
             </div>
           </div>

           <!-- karyawan -->
           <div class="col-xl-3 col-md-6 mb-4">
             <div class="card border-left-success shadow h-100 py-2">
               <div class="card-body">
                 <div class="row no-gutters align-items-center">
                   <div class="col mr-2">
                     <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Karyawan</div>
                     <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $display['c_employee']; ?> Karyawan</div>
                   </div>
                   <div class="col-auto">
                     <i class="fas fa-id-badge fa-2x text-gray-300"></i>
                   </div>
                 </div>
               </div>
             </div>
           </div>

           <!-- Pengguna -->
           <div class="col-xl-3 col-md-6 mb-4">
             <div class="card border-left-danger shadow h-100 py-2">
               <div class="card-body">
                 <div class="row no-gutters align-items-center">
                   <div class="col mr-2">
                     <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Pengguna</div>
                     <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $display['c_users']; ?> Pengguna yang Aktif</div>
                   </div>
                   <div class="col-auto">
                     <i class="fas fa-users fa-2x text-gray-300"></i>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>

    

       <!-- /.container-fluid -->

       </div>
       <!-- End of Main Content -->
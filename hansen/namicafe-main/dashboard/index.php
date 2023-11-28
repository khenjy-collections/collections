<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nami Cafe - Dashboard</title>
    <!-- bootstrap 5 css -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
      integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../src/css/style.css" />
    
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />
  </head>

  <body class="bg-secondary">
    <div>
      <div class="sidebar p-4 bg-primary" id="sidebar">
        <h4 class="mb-5 text-white"><i class="bi bi-person mr-2"></i>Nami Cafe</h4>
        <hr class="bg-white h-5">
        <li class="active">
          <a class="text-white " href="../dashboard/index.php">
            <i class="bi bi-house mr-2"></i>
            Dashboard
          </a>
        </li>
        <li>
          <a class="text-white" href="../dashboard/start_transaction.php">
            <i class="bi bi-cart mr-2"></i>
            Start Transaction
          </a>
        </li>
        <li>
          <a class="text-white" href="../dashboard/transaction.php">
            <i class="bi bi-newspaper mr-2"></i>
            Transaction
          </a>
        </li>
        <li>
          <a class="text-white" href="../dashboard/report.php">
            <i class="bi bi-bicycle mr-2"></i>
            Report
          </a>
        </li>
        <li>
          <a class="text-white" href="../dashboard/close_cashier.php">
            <i class="bi bi-boombox mr-2"></i>
            Close Cashier
          </a>
        </li>
        <li>
          <a class="text-white" href="../dashboard/settings.php">
            <i class="bi bi-film mr-2"></i>
            Settings
          </a>
        </li>
      </div>
    </div>
    <div class="p-4" id="main-content">
          <button class="btn btn-primary" id="button-toggle">
            <i class="bi bi-list"></i>
          </button>
          <div class="container mt-5 ">
              <div class="row d-flex justify-content-evenly align-items-center">
                <div class="col-md-3 mt-5">
                  <a href="" class="bg-primary text-white px-5  py-2 rounded-lg">Harian</a>
                </div>
                <div class="col-md-3 mt-5">
                  <a href="" class="bg-white text-dark fw-bold px-5  py-2 rounded-lg">Minggu ini</a>
                </div>
                <div class="col-md-3 mt-5">
                  <a href="" class="bg-white text-dark fw-bold px-5  py-2 rounded-lg">Bulan ini</a>
                </div>
                
                <div class="col-md-3 mt-5">
                  <a href="" class="bg-white text-dark fw-bold px-5  py-2 rounded-lg">Tahunan</a>
                </div>
              </div>
          </div>
          <div class="container mt-5 bg-primary py-4 d-flex">
            <div class="row d-flex justify-content-evenly mx-auto">
              <div class="col-md-6 mt-2">
              <div class="card" >
                  <div class="card-body">
                    <h5 class="card-title">Menu</h5>
                    <div class="d-flex gap-1">

                      <div class="d-flex mt-3 gap-2 flex-column align-items-center">
                          <img src="../src/images/product.png" alt="" class="card-img-top" >
                          <p class="mt-2">Product</p>
                      </div>
                    <div class="d-flex mt-3 gap-2 flex-column align-items-center">
                      <img src="../src/images/transaction.png" alt="" class="card-img-top" >
                      <p class="mt-2">Transaction</p>
                    </div>
                    <div class="d-flex mt-3 gap-2 flex-column align-items-center">
                      <img src="../src/images/bestselling.png" alt="" class="card-img-top"  >
                      <p class="mt-2">Best Selling Product</p>
                    </div>
                    <div class="d-flex mt-3 gap-2 flex-column align-items-center">
                      <img src="../src/images/statsinfo.png" alt="" class="card-img-top" >
                      <p class="mt-2">Stats</p>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mt-2">
              <div class="card" >
                  <div class="card-body">
                    <img src="../src/images/cashier.png" class="py-4" alt="">
                  </div>
                </div>
              </div>
              <div class="col-md-6 mt-2">
              <div class="card" >
                  <div class="card-body">
                    <img src="../src/images/stats.png" class="card-img-top mt-5" alt="">                    
                  </div>
                </div>
              </div>
              <div class="col-md-6 mt-2">
              <div class="card" >
                  <div class="card-body">
                    <img src="../src/images/graphic.png" class="py-4/5" alt="">
                  </div>
                </div>
              </div>
            </div>
          
          </div>
        </div>

      <script src="../src/js/script.js"></script>
  </body>
</html>

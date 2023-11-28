<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nami Cafe | Cashier History</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />  
</head>
  <body>
    <div class="container-fluid bg-primary text-white py-2 fw-bold px-3 ">
        <a href="../dashboard/report.php" class="text-white text-decoration-none fw-bold px-5">
            <i class="bi bi-arrow-left pe-2 fs-5"></i>
            <span class="fs-5">Cashier History</span>
        </a>            
    </div>
   
    <div class="container mt-5">
        <h1 class="text-center">Cashier History</h1>
        <table class="table mt-3">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Category</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
                <th>Action</th>
                <th>Status</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Beef Burger</td>
                <td>Food</td>
                <td>Rp28000</td>
                <td>2</td>
                <td>Rp56000</td>
                <td>
                    <a href="#" class="btn btn-warning">Edit</a>
                    <a href="#" class="btn btn-danger">Remove</a>
                </td>
                <td>
                    <a href="#" class="btn btn-success rounded-lg">Success</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Chicken Burger</td>
                <td>Food</td>
                <td>Rp28000</td>
                <td>3</td>
                <td>Rp84000</td>
                <td>
                    <a href="#" class="btn btn-warning">Edit</a>
                    <a href="#" class="btn btn-danger">Remove</a>
                </td>
                <td>
                    <a href="#" class="btn btn-success rounded-lg">Success</a>
                </td>
            </tr>
        </table>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
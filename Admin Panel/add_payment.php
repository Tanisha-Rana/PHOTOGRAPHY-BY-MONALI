<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Payment — Soul Frame Studio</title>
  <link rel="shortcut icon" type="image/png" href="./assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="./assets/css/styles.min.css" />
  <style>
    .card {
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
    }

    .form-label {
      font-weight: 500;
      color: #333;
    }

    .form-control,
    .form-select {
      border-radius: 8px;
      padding: 10px;
    }

    .form-control:focus,
    .form-select:focus {
      border-color: #5d87ff;
      box-shadow: none;
    }

    .btn-primary {
      background-color: #5d87ff;
      border: none;
      padding: 10px 20px;
      border-radius: 8px;
    }

    .btn-primary:hover {
      background-color: #4c6edb;
    }
  </style>
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6"
    data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">

    <!--  App Topstrip -->
    <div class="app-topstrip bg-dark py-6 px-3 w-100 d-lg-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center justify-content-center gap-5 mb-2 mb-lg-0">
        <a class="d-flex justify-content-center" href="#">
          <img src="assets/images/logos/logo-wrappixel.svg" alt="" width="150">
        </a>
      </div>
    </div>

    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <?php include_once('header.php'); ?>
    </aside>

    <!--  Main wrapper -->
    <div class="body-wrapper">
      <div class="container-fluid py-4">

        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title mb-4 text-center text-primary fw-bold">Add Payment</h4>

                <form action="#" method="post">
                  <div class="row g-3">

                    <div class="col-md-6">
                      <label class="form-label">Booking ID</label>
                      <input type="number" class="form-control" name="BookingID" placeholder="Enter Booking ID" required>
                    </div>

                    <div class="col-md-6">
                      <label class="form-label">Payment Type</label>
                      <select class="form-select" name="PaymentType" required>
                        <option value="">Select Type</option>
                        <option value="Advance">Advance</option>
                        <option value="Full">Full Payment</option>
                        <option value="Refund">Refund</option>
                      </select>
                    </div>

                    <div class="col-md-6">
                      <label class="form-label">Payment Date</label>
                      <input type="date" class="form-control" name="PaymentDate" required>
                    </div>

                    <div class="col-md-6">
                      <label class="form-label">Payment Mode</label>
                      <select class="form-select" name="PaymentMode" required>
                        <option value="">Select Mode</option>
                        <option value="Cash">Cash</option>
                        <option value="UPI">UPI</option>
                        <option value="Credit Card">Credit Card</option>
                        <option value="Debit Card">Debit Card</option>
                        <option value="Net Banking">Net Banking</option>
                      </select>
                    </div>

                    <div class="col-md-6">
                      <label class="form-label">Amount (₹)</label>
                      <input type="number" class="form-control" name="Amount" placeholder="Enter Amount" required>
                    </div>

                    <div class="col-md-6">
                      <label class="form-label">Transaction ID</label>
                      <input type="text" class="form-control" name="TransactionID" placeholder="Enter Transaction ID">
                    </div>

                    <div class="col-md-6">
                      <label class="form-label">Status</label>
                      <select class="form-select" name="Status" required>
                        <option value="">Select Status</option>
                        <option value="Success">Success</option>
                        <option value="Pending">Pending</option>
                        <option value="Failed">Failed</option>
                      </select>
                    </div>

                  </div>

                  <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary px-4">Add Payment</button>
                    <button type="reset" class="btn btn-secondary px-4 ms-2">Reset</button>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>

  <!-- JS Files -->
  <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/sidebarmenu.js"></script>
  <script src="./assets/js/app.min.js"></script>
  <script src="./assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="./assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="./assets/js/dashboard.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>

</body>

</html>

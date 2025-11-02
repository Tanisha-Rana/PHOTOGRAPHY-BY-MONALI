<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Payments — Admin Panel</title>
  <link rel="shortcut icon" type="image/png" href="./assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="./assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical"
    data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">

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

    <!-- Main Content -->
    <div class="body-wrapper">
      <div class="container-fluid mt-4">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title mb-4">Payments Table</h4>
            <div class="table-responsive">
              <table class="table table-bordered table-striped text-center align-middle">
                <thead class="table-dark">
                  <tr>
                    <th>PaymentID</th>
                    <th>BookingID</th>
                    <th>PaymentType</th>
                    <th>PaymentDate</th>
                    <th>PaymentMode</th>
                    <th>Amount (₹)</th>
                    <th>TransactionID</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  foreach ($payment_arr as $value) {
                    ?>

                    <tr>
                      <td scope="col" class="px-0"><?php echo $value->PaymentID ?></td>
                      <td scope="col" class="px-0"><?php echo $value->BookingID ?></td>
                      <td scope="col" class="px-0"><?php echo $value->PaymentType ?></td>
                      <td scope="col" class="px-0"><?php echo $value->PaymentDate ?></td>
                      <td scope="col" class="px-0"><?php echo $value->PaymentMode ?></td>
                      <td scope="col" class="px-0"><?php echo $value->Amount ?></td>
                      <td scope="col" class="px-0"><?php echo $value->TransactionID ?></td>
                      <td scope="col" class="px-0"><?php echo $value->Status ?></td>
                    </tr>

                  <?php
                  }
                  ?>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Scripts -->
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

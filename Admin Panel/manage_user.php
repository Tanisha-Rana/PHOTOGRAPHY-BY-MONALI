<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User Table — Soul Frame Studio</title>
  <link rel="shortcut icon" type="image/png" href="./assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="./assets/css/styles.min.css" />
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
    <!-- Sidebar End -->

    <!-- Main Content Start -->
    <div class="body-wrapper p-4">
      <div class="container-fluid">
        <h3 class="mb-4 text-center">User Details</h3>

        <div class="card shadow-sm rounded-4">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-hover align-middle">
                <thead class="table-dark">
                  <tr>
                    <th>UserID</th>
                    <th>FullName</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Password</th>
                    <th>Address</th>
                    <th>Role</th>
                    <th>ProfileImage</th>
                    <th>Status</th>
                    <th>CreatedDate</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  foreach ($user_arr as $value) {
                    ?>

                    <tr>
                      <td scope="col" class="px-0"><?php echo $value->UserID ?></td>
                      <td scope="col" class="px-0"><?php echo $value->FullName ?></td>
                      <td scope="col" class="px-0"><?php echo $value->Email ?></td>
                      <td scope="col" class="px-0"><?php echo $value->Phone ?></td>
                      <td scope="col" class="px-0"><?php echo $value->Password ?></td>
                      <td scope="col" class="px-0"><?php echo $value->Address ?></td>
                      <td scope="col" class="px-0"><?php echo $value->Role ?></td>
                      <td scope="col" class="px-0"><?php echo $value->ProfileImage ?></td>
                      <td scope="col" class="px-0"><?php echo $value->Status ?></td>
                      <td scope="col" class="px-0"><?php echo $value->CreatedDate ?></td>
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
    <!-- Main Content End -->

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

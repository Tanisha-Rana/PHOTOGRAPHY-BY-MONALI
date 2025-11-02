<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AddOns — Admin Panel</title>
  <link rel="shortcut icon" type="image/png" href="./assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="./assets/css/styles.min.css" />
</head>

<body>
  <!-- Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">

    <!-- App Topstrip -->
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
        <div class="card shadow-sm">
          <div class="card-body">
            <h4 class="card-title mb-4">AddOns Table</h4>
            <div class="table-responsive">
              <table class="table table-bordered table-striped text-center align-middle">
                <thead class="table-dark">
                  <tr>
                    <th>AddOnID</th>
                    <th>AddOnName</th>
                    <th>Price (₹)</th>
                    <th>Description</th>
                    <th>ImagePath</th>
                    <th>Status</th>
                  </tr>
                </thead>

                <tbody>

                  <?php
                  foreach ($add_arr as $value) {
                    ?>

                    <tr>
                      <td scope="col" class="px-0"><?php echo $value->AddOnID ?></td>
                      <td scope="col" class="px-0"><?php echo $value->AddOnName ?></td>
                      <td scope="col" class="px-0"><?php echo $value->Price ?></td>
                      <td scope="col" class="px-0"><?php echo $value->Description ?></td>
                      <td scope="col" class="px-0"><?php echo $value->ImagePath ?></td>
                      <td scope="col" class="px-0"><?php echo $value->Status ?></td>
                   
                      



                      <td class="px-0">
                        <a href="" class="btn btn-primary">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                    <?php
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Scripts -->
  <script src="libs/jquery/dist/jquery.min.js"></script>
  <script src="libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/sidebarmenu.js"></script>
  <script src="js/app.min.js"></script>
  <script src="libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="libs/simplebar/dist/simplebar.js"></script>
  <script src="js/dashboard.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Add-On — Soul Frame Studio</title>
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
          <img src="assets/images/logos/logo-wrappixel.svg" alt="Logo" width="150">
        </a>
      </div>
    </div>

    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <?php include_once('header.php'); ?>
    </aside>
    <!-- Sidebar End -->

    <!-- Main Content -->
    <div class="body-wrapper">
      <div class="container-fluid py-4">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title mb-4 text-center text-primary fw-bold">Add Add-On</h4>

                <form action="#" method="post" enctype="multipart/form-data">
                  <div class="row g-3">

                    <!-- AddOn Name -->
                    <div class="col-md-6">
                      <label class="form-label">Add-On Name</label>
                      <input type="text" class="form-control" name="AddOnName" placeholder="Enter Add-On Name" required>
                    </div>

                    <!-- Price -->
                    <div class="col-md-6">
                      <label class="form-label">Price (₹)</label>
                      <input type="number" class="form-control" name="Price" step="0.01" placeholder="Enter Price" required>
                    </div>

                    <!-- Description -->
                    <div class="col-md-12">
                      <label class="form-label">Description</label>
                      <textarea class="form-control" name="Description" rows="3" placeholder="Enter Add-On Description" required></textarea>
                    </div>

                    <!-- Image Upload -->
                    <div class="col-md-12">
                      <label class="form-label">Upload Image</label>
                      <input type="file" class="form-control" name="ImagePath" accept="image/*" required>
                    </div>

                    <!-- Status -->
                    <div class="col-md-6">
                      <label class="form-label">Status</label>
                      <select class="form-select" name="Status" required>
                        <option value="">Select Status</option>
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                      </select>
                    </div>

                  </div>

                  <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary px-4">Add Add-On</button>
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

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Package — Soul Frame Studio Admin</title>
  <link rel="shortcut icon" type="image/png" href="./assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="./assets/css/styles.min.css" />
  <style>
    .card {
      border-radius: 12px;
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
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

    .image-preview img {
      width: 100px;
      height: 100px;
      object-fit: cover;
      border-radius: 10px;
      border: 2px solid #ccc;
    }
  </style>
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6"
    data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">

    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <?php include_once('header.php'); ?>
    </aside>
    <!-- Sidebar End -->

    <!--  Main wrapper -->
    <div class="body-wrapper">
      <div class="container-fluid py-4">

        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title mb-4 text-center">Add New Package</h4>

                <form action="#" method="post" enctype="multipart/form-data">
                  <div class="mb-3">
                    <label class="form-label">Select Category</label>
                    <select class="form-select" name="CategoryID" required>
                      <option value="">Select Category</option>
                     <option value="1">Newborn</option>
                      <option value="2">Kids</option>
                      <option value="3">maternity</option>
                       <option value="4">Family</option>

                      <!-- Add dynamic PHP options later -->
                    </select>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Package Name</label>
                    <input type="text" class="form-control" name="PackageName" placeholder="Enter package name" required>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Price (₹)</label>
                      <input type="number" class="form-control" name="Price" placeholder="Enter price" required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Duration</label>
                      <input type="text" class="form-control" name="Duration" placeholder="e.g. 2 hours, Full day" required>
                    </div>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Add-ons</label>
                    <input type="text" class="form-control" name="AddOns" placeholder="Enter add-ons (comma separated)">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" name="Description" rows="3" placeholder="Enter package description" required></textarea>
                  </div>


                  <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select class="form-select" name="Status" required>
                      <option value="">Select Status</option>
                      <option value="Active">Active</option>
                      <option value="Inactive">Inactive</option>
                    </select>
                  </div>

                  <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary" name="submit">Add Package</button>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>

  <!--  JS Scripts -->
  <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/sidebarmenu.js"></script>
  <script src="./assets/js/app.min.js"></script>
  <script src="./assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="./assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="./assets/js/dashboard.js"></script>
</body>

</html>

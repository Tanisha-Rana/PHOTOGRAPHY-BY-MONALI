<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Time Slot — Soul Frame Studio Admin</title>
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
  </style>
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical"
    data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">

    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <?php include_once('header.php'); ?>
    </aside>
    <!-- Sidebar End -->

    <!--  Main wrapper -->
    <div class="body-wrapper">
      <div class="container-fluid py-4">

        <div class="row">
          <div class="col-lg-6 col-md-8 mx-auto">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title mb-4 text-center">Add New Time Slot</h4>

                <form action="#" method="post">
                  <!-- Slot Date -->
                  <div class="mb-3">
                    <label class="form-label">Slot Date</label>
                    <input type="date" class="form-control" name="SlotDate" required>
                  </div>

                  <!-- Start Time -->
                  <div class="mb-3">
                    <label class="form-label">Start Time</label>
                    <input type="time" class="form-control" name="StartTime" required>
                  </div>

                  <!-- End Time -->
                  <div class="mb-3">
                    <label class="form-label">End Time</label>
                    <input type="time" class="form-control" name="EndTime" required>
                  </div>

                  <!-- Status -->
                  <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select class="form-select" name="Status" required>
                      <option value="">Select Status</option>
                      <option value="Available">Available</option>
                      <option value="Booked">Booked</option>
                      <option value="Inactive">Inactive</option>
                    </select>
                  </div>

                  <!-- Submit Button -->
                  <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary">Add Slot</button>
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

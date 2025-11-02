<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Booking — Soul Frame Studio</title>
  <link rel="shortcut icon" type="image/png" href="./assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="./assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
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
        <div class="card shadow-sm">
          <div class="card-body">
            <h4 class="card-title mb-4 text-center text-primary fw-bold">Add Booking</h4>

            <form action="#" method="post">
              <div class="row g-3">

                <div class="col-md-6">
                  <label for="userID" class="form-label">User ID</label>
                  <input type="number" class="form-control" id="userID" name="UserID" placeholder="Enter User ID" required>
                </div>

                <div class="col-md-6">
                  <label for="packageID" class="form-label">Package ID</label>
                  <input type="number" class="form-control" id="packageID" name="PackageID" placeholder="Enter Package ID" required>
                </div>

                <div class="col-md-6">
                  <label for="slotID" class="form-label">Slot ID</label>
                  <input type="number" class="form-control" id="slotID" name="SlotID" placeholder="Enter Slot ID" required>
                </div>

                <div class="col-md-6">
                  <label for="bookingDate" class="form-label">Booking Date</label>
                  <input type="date" class="form-control" id="bookingDate" name="BookingDate" required>
                </div>

                <div class="col-md-6">
                  <label for="status" class="form-label">Status</label>
                  <select class="form-select" id="status" name="Status" required>
                    <option value="">Select Status</option>
                    <option value="Pending">Pending</option>
                    <option value="Confirmed">Confirmed</option>
                    <option value="Cancelled">Cancelled</option>
                  </select>
                </div>

                <div class="col-md-6">
                  <label for="advancePaid" class="form-label">Advance Paid (₹)</label>
                  <input type="number" class="form-control" id="advancePaid" name="AdvancePaid" placeholder="Enter Advance Paid" required>
                </div>

                <div class="col-md-6">
                  <label for="totalAmount" class="form-label">Total Amount (₹)</label>
                  <input type="number" class="form-control" id="totalAmount" name="TotalAmount" placeholder="Enter Total Amount" required>
                </div>

                <div class="col-md-12">
                  <label for="notes" class="form-label">Notes</label>
                  <textarea class="form-control" id="notes" name="Notes" rows="3" placeholder="Enter any additional notes..."></textarea>
                </div>

              </div>

              <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary px-4">Add Booking</button>
                <button type="reset" class="btn btn-secondary px-4 ms-2">Reset</button>
              </div>
            </form>
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
  </div>
</body>

</html>

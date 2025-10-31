<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add User — Soul Frame Studio Admin</title>
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

    .profile-preview img {
      width: 100px;
      height: 100px;
      object-fit: cover;
      border-radius: 50%;
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
          <div class="col-lg-10 col-md-12 mx-auto">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title mb-4 text-center">Add New User</h4>

                <form action="#" method="post" enctype="multipart/form-data">
                  <div class="row g-3">
                    <div class="col-md-6">
                      <label class="form-label">Full Name</label>
                      <input type="text" class="form-control" name="FullName" placeholder="Enter full name" required>
                    </div>

                    <div class="col-md-6">
                      <label class="form-label">Email</label>
                      <input type="email" class="form-control" name="Email" placeholder="Enter email" required>
                    </div>

                    <div class="col-md-6">
                      <label class="form-label">Phone</label>
                      <input type="text" class="form-control" name="Phone" placeholder="Enter phone number" required>
                    </div>

                    <div class="col-md-6">
                      <label class="form-label">Password</label>
                      <input type="password" class="form-control" name="Password" placeholder="Enter password" required>
                    </div>

                    <div class="col-md-12">
                      <label class="form-label">Address</label>
                      <textarea class="form-control" name="Address" rows="2" placeholder="Enter address" required></textarea>
                    </div>

                    <div class="col-md-6">
                      <label class="form-label">Role</label>
                      <select class="form-select" name="Role" required>
                        <option value="">Select Role</option>
                        <option value="Admin">Admin</option>
                        <option value="User">User</option>
                        <option value="Editor">Editor</option>
                      </select>
                    </div>

                    <div class="col-md-6">
                      <label class="form-label">Status</label>
                      <select class="form-select" name="Status" required>
                        <option value="">Select Status</option>
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                      </select>
                    </div>

                    <div class="col-md-6">
                      <label class="form-label">Profile Image</label>
                      <input type="file" class="form-control" name="ProfileImage" accept="image/*">
                      <div class="profile-preview mt-2 text-center">
                        <img src="https://via.placeholder.com/100" alt="Profile Preview">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <label class="form-label">Created Date</label>
                      <input type="date" class="form-control" name="CreatedDate" required>
                    </div>
                  </div>

                  <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary">Add User</button>
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

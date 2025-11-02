<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard — Soul Frame Studio</title>
  <link rel="stylesheet" href="css/styles.min.css" />
  <style>
    /* Highlight active link */
    .sidebar-link.active {
      background-color: #f1f1f1;
      font-weight: 600;
    }
    .sidebar-item.open > a {
      background-color: #e9ecef;
    }
  </style>
</head>

<body>
  <!-- Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6"
    data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">

    <!-- App Topstrip -->
  

    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="index" class="text-nowrap logo-img">
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-6"></i>
          </div>
        </div>

        <!-- Sidebar Navigation -->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">

            <li class="nav-small-cap">
              <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
              <span class="hide-menu">Home</span>
            </li>

            <!-- DASHBOARD -->
            <li class="sidebar-item">
              <a class="sidebar-link" href="./index">
                <i class="ti ti-atom"></i>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>

            <!-- USERS -->
            <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="#">
                <div class="d-flex align-items-center gap-3">
                  <i class="ti ti-users"></i><span class="hide-menu">Users</span>
                </div>
              </a>
              <ul class="collapse first-level">
                <li><a href="add_user" class="sidebar-link"><i class="ti ti-circle"></i>Add User</a></li>
                <li><a href="manage_user" class="sidebar-link"><i class="ti ti-circle"></i>Manage Users</a></li>
              </ul>
            </li>

            <!-- CATEGORIES -->
            <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="#">
                <div class="d-flex align-items-center gap-3">
                  <i class="ti ti-list"></i><span class="hide-menu">Categories</span>
                </div>
              </a>
              <ul class="collapse first-level">
                <li><a href="add_categories" class="sidebar-link"><i class="ti ti-circle"></i>Add Category</a></li>
                <li><a href="manage_categories" class="sidebar-link"><i class="ti ti-circle"></i>Manage Categories</a></li>
              </ul>
            </li>

            <!-- CATALOGUES -->
            <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="#">
                <div class="d-flex align-items-center gap-3">
                  <i class="ti ti-book"></i><span class="hide-menu">Catalogues</span>
                </div>
              </a>
              <ul class="collapse first-level">
                <li><a href="add_catalogues" class="sidebar-link"><i class="ti ti-circle"></i>Add Catalogue</a></li>
                <li><a href="manage_catalogues" class="sidebar-link"><i class="ti ti-circle"></i>Manage Catalogues</a></li>
              </ul>
            </li>

            <!-- PACKAGES -->
            <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="#">
                <div class="d-flex align-items-center gap-3">
                  <i class="ti ti-package"></i><span class="hide-menu">Packages</span>
                </div>
              </a>
              <ul class="collapse first-level">
                <li><a href="add_packages" class="sidebar-link"><i class="ti ti-circle"></i>Add Package</a></li>
                <li><a href="manage_packages" class="sidebar-link"><i class="ti ti-circle"></i>Manage Packages</a></li>
              </ul>
            </li>

            <!-- TIMESLOTS -->
            <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="#">
                <div class="d-flex align-items-center gap-3">
                  <i class="ti ti-clock"></i><span class="hide-menu">Time Slots</span>
                </div>
              </a>
              <ul class="collapse first-level">
                <li><a href="add_slottime" class="sidebar-link"><i class="ti ti-circle"></i>Add Time Slot</a></li>
                <li><a href="manage_slottime" class="sidebar-link"><i class="ti ti-circle"></i>Manage Time Slots</a></li>
              </ul>
            </li>

            <!-- BOOKINGS -->
            <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="#">
                <div class="d-flex align-items-center gap-3">
                  <i class="ti ti-calendar"></i><span class="hide-menu">Bookings</span>
                </div>
              </a>
              <ul class="collapse first-level">
                <li><a href="add_booking" class="sidebar-link"><i class="ti ti-circle"></i>Add Booking</a></li>
                <li><a href="manage_booking" class="sidebar-link"><i class="ti ti-circle"></i>Manage Bookings</a></li>
              </ul>
            </li>

            <!-- NOTIFICATIONS -->
            <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="#">
                <div class="d-flex align-items-center gap-3">
                  <i class="ti ti-bell"></i><span class="hide-menu">Notifications</span>
                </div>
              </a>
              <ul class="collapse first-level">
                <li><a href="add_notification" class="sidebar-link"><i class="ti ti-circle"></i>Add Notification</a></li>
                <li><a href="manage_notification" class="sidebar-link"><i class="ti ti-circle"></i>Manage Notifications</a></li>
              </ul>
            </li>

            <!-- PAYMENTS -->
            <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="#">
                <div class="d-flex align-items-center gap-3">
                  <i class="ti ti-credit-card"></i><span class="hide-menu">Payments</span>
                </div>
              </a>
              <ul class="collapse first-level">
                <li><a href="add_payment" class="sidebar-link"><i class="ti ti-circle"></i>Add Payment</a></li>
                <li><a href="manage_payment" class="sidebar-link"><i class="ti ti-circle"></i>Manage Payments</a></li>
              </ul>
            </li>

            <!-- INVOICES -->
            <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="#">
                <div class="d-flex align-items-center gap-3">
                  <i class="ti ti-file-invoice"></i><span class="hide-menu">Invoices</span>
                </div>
              </a>
              <ul class="collapse first-level">
                <li><a href="add_invoice" class="sidebar-link"><i class="ti ti-circle"></i>Add Invoice</a></li>
                <li><a href="manage_invoice" class="sidebar-link"><i class="ti ti-circle"></i>Manage Invoices</a></li>
              </ul>
            </li>

            <!-- FEEDBACK -->
            <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="#">
                <div class="d-flex align-items-center gap-3">
                  <i class="ti ti-message"></i><span class="hide-menu">Feedback</span>
                </div>
              </a>
              <ul class="collapse first-level">
                <li><a href="manage_feedback" class="sidebar-link"><i class="ti ti-circle"></i>Manage Feedback</a></li>
              </ul>
            </li>

            <!-- GALLERY -->
            <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="#">
                <div class="d-flex align-items-center gap-3">
                  <i class="ti ti-photo"></i><span class="hide-menu">Gallery</span>
                </div>
              </a>
              <ul class="collapse first-level">
                <li><a href="add_gallery" class="sidebar-link"><i class="ti ti-circle"></i>Add Gallery</a></li>
                <li><a href="manage_gallery" class="sidebar-link"><i class="ti ti-circle"></i>Manage Gallery</a></li>
              </ul>
            </li>

            <!-- ADDONS -->
            <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="#">
                <div class="d-flex align-items-center gap-3">
                  <i class="ti ti-plus"></i><span class="hide-menu">AddOns</span>
                </div>
              </a>
              <ul class="collapse first-level">
                <li><a href="add_addon" class="sidebar-link"><i class="ti ti-circle"></i>Add AddOn</a></li>
                <li><a href="manage_addons" class="sidebar-link"><i class="ti ti-circle"></i>Manage AddOns</a></li>
              </ul>
            </li>

          </ul>
        </nav>
      </div>
    </aside>
    <!-- Sidebar End -->
  </div>

  <!-- Scripts -->
  <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/app.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>

  <script>
    // Sidebar dropdown toggle
    document.querySelectorAll('.sidebar-link.has-arrow').forEach(link => {
      link.addEventListener('click', (e) => {
        e.preventDefault();
        const parent = link.parentElement;
        parent.classList.toggle('open');
        const submenu = parent.querySelector('.collapse');
        submenu.classList.toggle('show');
      });
    });

    // Highlight current page
    const current = window.location.pathname.split("/").pop();
    document.querySelectorAll('.sidebar-link').forEach(link => {
      if (link.getAttribute('href') === current) {
        link.classList.add('active');
        const parent = link.closest('.sidebar-item');
        if (parent) {
          parent.classList.add('open');
          const submenu = parent.querySelector('.collapse');
          if (submenu) submenu.classList.add('show');
        }
      }
    });
  </script>
</body>
</html>

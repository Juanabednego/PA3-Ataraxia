<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta content="" name="description">
    <meta content="" name="keywords">
  
    <!-- Favicons -->
    <link href="{{ asset('assets/img/Ataraxialogo.jpg') }}" rel="icon">
  
    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href="admin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="admin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="admin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="admin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="admin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="admin/assets/vendor/simple-datatables/style.css" rel="stylesheet">
  
    <!-- Template Main CSS File -->
    <link href="admin/assets/css/style.css" rel="stylesheet">
  </head>
  
  <body>
  
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
  
      <div class="d-flex align-items-center justify-content-between">
        <a href="index" class="logo d-flex align-items-center">
          <img src="assets/img/Ataraxialogo.jpg" alt="">
          <span class="d-none d-lg-block">Ataraxia</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
      </div><!-- End Logo -->
  
      <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
  
          <li class="nav-item dropdown">
  
            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
              <i class="bi bi-bell"></i>
              <span class="badge bg-primary badge-number">4</span>
            </a><!-- End Notification Icon -->
          </li><!-- End Notification Nav -->
  
        
  
          <li class="nav-item dropdown pe-3">
  
            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
              <img src="assets/img/Roberto.jpg" alt="Profile" class="rounded-circle">
            </a><!-- End Profile Iamge Icon -->
  
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
              <li class="dropdown-header">
                <h6>Roberto Samuel</h6>
                <span>Admin</span>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>
  
              <li>
                <a class="dropdown-item d-flex align-items-center" href="users-profile">
                  <i class="bi bi-person"></i>
                  <span>My Profile</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>
  
              <li>
                <a class="dropdown-item d-flex align-items-center" href="users-profile">
                  <i class="bi bi-gear"></i>
                  <span>Account Settings</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>
  
              <li>
                <a class="dropdown-item d-flex align-items-center" href="pages-faq">
                  <i class="bi bi-question-circle"></i>
                  <span>Need Help?</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>
  
              <li>
              <a class="dropdown-item" href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">
                                          {{ __('Logout') }}
                                      </a>
  
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                          @csrf
                                      </form>
              </li>
  
            </ul><!-- End Profile Dropdown Items -->
          </li><!-- End Profile Nav -->
  
        </ul>
      </nav><!-- End Icons Navigation -->
  
    </header><!-- End Header -->
  
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
      <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
          <a class="nav-link "  href="/indexadmin">
            <i class="bi bi-house"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link "  href="{{ route('tables-data') }}">
            <i class="bi bi-cart"></i>
            <span>Pemesanan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/kelola-event">
            <i class="bi bi-calendar-event"></i>
            <span>Event</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link "  href="/kelola-menu">
            <i class="bi bi-cup-straw"></i>
            <span>Menu</span>
          </a>
        </li>
  
        <li class="nav-item">
          <a class="nav-link " href="/kelola-review">
            <i class="bi bi-star"></i>
            <span>Review</span>
          </a>
        </li>

         <li class="nav-item">
                <a class="nav-link" href="/kelola-about">
                    <i class="bi bi-book"></i>
                    <span>About</span>
                </a>
            </li>
  
        <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.index') }}">
                    <i class="bi bi-bookmark-check"></i>
                    <span>Reservation</span>
                </a>
            </li>
     <li class="nav-item">
               <a class="nav-link" href="/seat-builder">
                    <i class="bi bi-collection"></i>
                    <span>Kursi</span>
                </a>
            </li>
      </ul>
  
    </aside>
</body>

</html>
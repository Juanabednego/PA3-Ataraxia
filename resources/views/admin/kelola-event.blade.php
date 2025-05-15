<!DOCTYPE html>
<html lang="en">
<head>
    <title>Event</title>

<<<<<<< HEAD
    <!-- Bootstrap & Icons -->
    <link href="{{ asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet">

    <style>
      

        .main {
            margin-left: 250px;
            padding: 20px;
        }

=======
    <style>
        .main {
            margin-left: 300px;
            padding-top: 45px;
        }

>>>>>>> 2a06928 (Initial commit)
        .card {
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .btn:hover {
            transform: scale(1.05);
        }

        .modal-dialog {
            max-width: 800px;
        }

        .modal-header, .modal-body {
            padding: 20px;
        }

        .alert {
            margin-top: 20px;
        }
    </style>
</head>
<<<<<<< HEAD
<body>

<header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <a href="index" class="logo d-flex align-items-center">
    <img src="admin/assets/img/logo.png" alt="">
    <span class="d-none d-lg-block">Admin</span>
  </a>
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->

<div class="search-bar">
  <form class="search-form d-flex align-items-center" method="POST" action="#">
    <input type="text" name="query" placeholder="Search" title="Enter search keyword">
    <button type="submit" title="Search"><i class="bi bi-search"></i></button>
  </form>
</div><!-- End Search Bar -->

<nav class="header-nav ms-auto">
  <ul class="d-flex align-items-center">

    <li class="nav-item d-block d-lg-none">
      <a class="nav-link nav-icon search-bar-toggle " href="#">
        <i class="bi bi-search"></i>
      </a>
    </li><!-- End Search Icon-->

    <li class="nav-item dropdown">

      <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
        <i class="bi bi-bell"></i>
        <span class="badge bg-primary badge-number">4</span>
      </a><!-- End Notification Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
        <li class="dropdown-header">
          You have 4 new notifications
          <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
          <i class="bi bi-exclamation-circle text-warning"></i>
          <div>
            <h4>Lorem Ipsum</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>30 min. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
          <i class="bi bi-x-circle text-danger"></i>
          <div>
            <h4>Atque rerum nesciunt</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>1 hr. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
          <i class="bi bi-check-circle text-success"></i>
          <div>
            <h4>Sit rerum fuga</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>2 hrs. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
          <i class="bi bi-info-circle text-primary"></i>
          <div>
            <h4>Dicta reprehenderit</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>4 hrs. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>
        <li class="dropdown-footer">
          <a href="#">Show all notifications</a>
        </li>

      </ul><!-- End Notification Dropdown Items -->

    </li><!-- End Notification Nav -->

  

    <li class="nav-item dropdown pe-3">

      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <img src="admin/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
        <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
      </a><!-- End Profile Iamge Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
          <h6>Kevin Anderson</h6>
          <span>Web Designer</span>
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
    <a class="nav-link "  href="/kelola-menu">
      <i class="bi bi-list"></i>
      <span>Kelola Menu</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link " href="kelola-about">
      <i class="bi bi-info-circle"></i>
      <span>Kelola About</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link " href="/kelola-event">
      <i class="bi bi-calendar-event"></i>
      <span>Kelola Event</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link " href="/tables-data">
      <i class="bi bi-table"></i>
      <span>Manage Table</span>
    </a>
  </li>



  <li class="nav-item">
    <a class="nav-link" href="{{ route('admin.index') }}">
      <i class="bi bi-bookmark-check"></i>
      <span>Kelola Reservation</span>
    </a>
  </li>
</ul>

</aside>



    <!-- Main Content -->
    <main class="main">
        <div class="container">
            <h2 class="mb-4">Kelola Event</h2>

            <!-- Flash message -->
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <!-- Tambah Event Button -->
            <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addEventModal">
                <i class="bi bi-plus-circle"></i> Tambah Event
            </button>

            <!-- Event Cards -->
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach($events as $event)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset($event->image) }}" class="card-img-top" alt="{{ $event->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $event->name }}</h5>
                            <p class="card-text">{{ Str::limit($event->description, 100) }}</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editEventModal-{{ $event->id }}">
                                <i class="bi bi-pencil-square"></i> Edit
                            </button>
                            <form action="{{ route('kelola-event.destroy', $event->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus event ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash"></i> Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
=======

@include('layouts.AdminNav')
<body>
  <main class="main">
    <div class="container-fluid px-4 py-4">
        <!-- Page Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="mb-0">Event</h2>
            <button class="btn" style="background-color: #8174A0; color: white; border: none;" data-bs-toggle="modal" data-bs-target="#addEventModal">
    <i class="bi bi-plus-circle me-2"></i> Tambah Event
</button>

        </div>

        <!-- Flash message -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i>
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Event Table -->
        <div class="card shadow-sm border-0">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                    <thead class="table-light">
    <tr>
        <th width="50">No</th>
        <th width="120">Foto</th>
        <th>Judul</th>
        <th>Deskripsi</th>
        <th>Harga</th>
        <th width="120">Tanggal</th>
        <th width="150">Aksi</th>
    </tr>
</thead>
                        <tbody>
                            @foreach($events as $index => $event)
                            <tr>
                                <td class="align-middle">{{ $index + 1 }}</td>
                                <td class="align-middle">
                                    <img src="{{ asset($event->image) }}" class="rounded" width="80" height="60" style="object-fit: cover;">
                                </td>
                                <td class="align-middle fw-bold">{{ $event->name }}</td>
                                <td class="align-middle">{{ $event->description }}</td>
                                <td class="align-middle">Rp{{ number_format($event->harga, 0, ',', '.') }}</td>
                                <td class="align-middle">{{ $event->date ? $event->date->format('d/m/Y') : '-' }}</td>
                                <td class="align-middle">
                                    <div class="d-flex gap-2">
                                        <button class="btn btn-sm" style="color: #8174A0; border: 1px solid #8174A0;" data-bs-toggle="modal" data-bs-target="#editEventModal-{{ $event->id }}">
    <i class="bi bi-pencil-square"></i>
</button>

                                        <form action="{{ route('kelola-event.destroy', $event->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus event ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Empty State -->
                @if($events->isEmpty())
                <div class="text-center py-5">
                    <div class="mb-4">
                        <i class="bi bi-calendar-x text-muted" style="font-size: 4rem;"></i>
                    </div>
                    <h4 class="text-muted mb-3">Belum ada event</h4>
                    <p class="text-muted">Tambahkan event baru dengan mengklik tombol "Tambah Event" di atas</p>
                </div>
                @endif
>>>>>>> 2a06928 (Initial commit)
            </div>
        </div>

<<<<<<< HEAD
        <!-- Modal Tambah Event -->
        <div class="modal fade" id="addEventModal" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form action="{{ route('kelola-event.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah Event</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Nama Event</label>
                                <input type="text" name="name" class="form-control" required>
=======
    <!-- Modal Tambah Event -->
    <div class="modal fade" id="addEventModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <form action="{{ route('kelola-event.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header text-white" style="background-color: #8174A0;">
    <h5 class="modal-title"><i class="bi bi-plus-circle me-2"></i>Tambah Event Baru</h5>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
</div>

                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Judul Event</label>
                                <input type="text" name="name" class="form-control" placeholder="" required>
>>>>>>> 2a06928 (Initial commit)
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Tanggal Event</label>
                                <input type="date" name="date" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Harga</label>
                              <input type="number" name="harga" class="form-control" placeholder="Contoh: 50000" required>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Deskripsi</label>
                                <textarea name="description" class="form-control" rows="3" placeholder="" required></textarea>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Gambar Event</label>
                                <input type="file" name="image" class="form-control" accept="image/*" required>
                                <small class="text-muted">Format: JPG, PNG. Maksimal 2MB</small>
                            </div>
                        </div>
<<<<<<< HEAD
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success"><i class="bi bi-check-circle"></i> Simpan</button>
                        </div>
                    </form>
                </div>
=======
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary"><i class="bi bi-save me-1"></i> Simpan</button>
                    </div>
                </form>
>>>>>>> 2a06928 (Initial commit)
            </div>
        </div>
    </div>

    <!-- Modal Edit Event -->
    @foreach($events as $event)
    <div class="modal fade" id="editEventModal-{{ $event->id }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <form action="{{ route('kelola-event.update', $event->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="modal-header text-white" style="background-color: #8174A0;">
    <h5 class="modal-title">
        <i class="bi bi-pencil-square me-2"></i>Edit Event
    </h5>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
</div>

<<<<<<< HEAD
        <!-- Modal Edit Event -->
        @foreach($events as $event)
        <div class="modal fade" id="editEventModal-{{ $event->id }}" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form action="{{ route('kelola-event.update', ['id' => $event->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Event</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Nama Event</label>
=======
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Judul Event</label>
>>>>>>> 2a06928 (Initial commit)
                                <input type="text" name="name" class="form-control" value="{{ $event->name }}" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Tanggal Event</label>
                                <input type="date" name="date" class="form-control" value="{{ $event->date ? $event->date->format('Y-m-d') : '' }}" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Deskripsi</label>
                                <textarea name="description" class="form-control" rows="3" required>{{ $event->description }}</textarea>
                            </div>
<<<<<<< HEAD
                            <div class="mb-3">
                                <label class="form-label">Gambar</label>
                                <input type="file" name="image" class="form-control">
                                <div class="mt-2">
                                    <img src="{{ asset($event->image) }}" width="100" class="rounded">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Update</button>
                        </div>
                    </form>
                </div>
=======
                            <div class="col-md-6">
                                 <label class="form-label">Harga</label>
                                  <input type="number" name="harga" class="form-control" value="{{ $event->harga }}" required>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Gambar Event</label>
                                <input type="file" name="image" class="form-control" accept="image/*">
                                <div class="mt-2 d-flex align-items-center gap-3">
                                    <img src="{{ asset($event->image) }}" width="80" class="rounded border">
                                    <small class="text-muted">Biarkan kosong jika tidak ingin mengubah gambar</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn" style="background-color: #8174A0; color: white; border: none;">
    <i class="bi bi-save me-1"></i> Update
</button>

                    </div>
                </form>
>>>>>>> 2a06928 (Initial commit)
            </div>
        </div>
    </div>
    @endforeach
</main>

<<<<<<< HEAD
=======
<style>
    .table th {
        font-weight: 600;
        background-color: #f8f9fa;
    }
    
    .table td, .table th {
        vertical-align: middle;
        padding: 12px 16px;
    }
    
    .table-hover tbody tr:hover {
        background-color: rgba(0, 0, 0, 0.02);
    }
    
    .card {
        border-radius: 8px;
        border: 1px solid rgba(0, 0, 0, 0.08);
    }
    
    .btn-outline-primary, .btn-outline-danger {
        border-width: 1px;
    }
    
    .modal-header {
        border-bottom: 1px solid rgba(0, 0, 0, 0.08);
    }
    
    .modal-footer {
        border-top: 1px solid rgba(0, 0, 0, 0.08);
    }
</style>

    <footer id="footer" class="footer">
      <div class="copyright">
          &copy; Copyright <strong><span>Ataraxia</span></strong>. All Rights Reserved
      </div>
    </footer>
>>>>>>> 2a06928 (Initial commit)
    <!-- Script -->
    <script src="{{ asset('admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>

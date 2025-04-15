<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Kelola Event - Admin</title>

    <!-- Bootstrap & Icons -->
    <link href="{{ asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet">
    <style>
        /* Global Styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa; /* Light background */
            color: #333;
        }

        header {
            background-color: #6f42c1; /* Purple color */
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        footer {
            background-color: #6f42c1;
            color: white;
            text-align: center;
            padding: 10px;
        }

        #sidebar {
            background-color: #343a40; /* Dark background for sidebar */
            color: white;
            width: 250px;
            min-height: 100vh;
        }

        #sidebar .sidebar-nav {
            padding-left: 0;
        }

        #sidebar .nav-item {
            list-style-type: none;
        }

        #sidebar .nav-item .nav-link {
            color: rgb(65, 1, 194);
            padding: 10px 20px;
            display: block;
            text-transform: uppercase;
        }

        #sidebar .nav-item .nav-link:hover {
            background-color: #495057;
            color: white;
        }

        #main {
            margin-left: 270px;
            padding: 20px;
        }

        /* Card Styles */
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }

        .card-title {
            font-size: 20px;
            font-weight: bold;
            color: #6f42c1;
        }

        .card-body {
            padding: 20px;
        }

        /* Table Styles */
        .table {
            border: none;
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 15px;
            border: 1px solid #ddd;
            text-align: center;
        }

        .table-striped tbody tr:nth-child(odd) {
            background-color: #f8f9fa;
        }

        .table-striped tbody tr:hover {
            background-color: #f1f1f1;
        }

        .table th {
            background-color: #6f42c1;
            color: white;
            text-transform: uppercase;
        }

        /* Button Styles */
        .btn {
            border-radius: 5px;
            padding: 8px 20px;
            font-size: 14px;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .btn-success {
            background-color: #28a745;
            color: white;
        }

        .btn-danger {
            background-color: #dc3545;
            color: white;
        }

        .btn-warning {
            background-color: #ffc107;
            color: white;
        }

        .btn:hover {
            transform: scale(1.05);
        }

        .btn-success:hover {
            background-color: #218838;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        .btn-warning:hover {
            background-color: #e0a800;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <a href="{{ url('/') }}" class="logo d-flex align-items-center">
                <img src="{{ asset('admin/assets/img/logo.png') }}" alt="">
                <span class="d-none d-lg-block">Admin Dashboard</span>
            </a>
        </div>
    </header>

    <!-- Sidebar -->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/indexadmin">
                    <i class="bi bi-house-door"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="kelola-menu">
                    <i class="bi bi-list"></i>
                    <span>Kelola Menu</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="kelola-about">
                    <i class="bi bi-info-circle"></i>
                    <span>Kelola About</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="kelola-event">
                    <i class="bi bi-calendar-event"></i>
                    <span>Kelola Event</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/tables-data">
                    <i class="bi bi-table"></i>
                    <span>Manage Table</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/footer">
                    <i class="bi bi-table"></i>
                    <span>Kelola Footer</span>
                </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.index') }}">
                    <i class="bi bi-table"></i>
                    <span>Kelola Reservation</span>
                </a>
            </li>
        </ul>
    </aside>

    <!-- Main Content -->
    <main id="main" class="main">
    <div class="container mt-4">
        <h2 class="mb-4">Kelola Event</h2>

        <!-- Flash Message -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <!-- Tombol Tambah Event -->
        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addEventModal">
            <i class="bi bi-plus-circle"></i> Tambah Event
        </button>

        <!-- Grid Event -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($events as $event)
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset($event->image) }}" class="card-img-top" alt="{{ $event->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $event->name }}</h5>
                            <p class="card-text">{{ Str::limit($event->description, 100) }}</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <!-- Tombol Edit -->
                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editEventModal-{{ $event->id }}">
                                <i class="bi bi-pencil-square"></i> Edit
                            </button>

                            <!-- Tombol Hapus -->
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

                <!-- Modal Edit Event -->
                <div class="modal fade" id="editEventModal-{{ $event->id }}" tabindex="-1" aria-labelledby="editEventModalLabel-{{ $event->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <!-- Isi modal untuk edit event -->
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

        <!-- Modal Tambah Event -->
        <div class="modal fade" id="addEventModal" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Event</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('kelola-event.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama Event</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Deskripsi</label>
                                <textarea name="description" class="form-control" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Gambar</label>
                                <input type="file" name="image" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-success"><i class="bi bi-check-circle"></i> Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Edit Event -->
        @foreach($events as $event)
        <div class="modal fade" id="editEventModal-{{ $event->id }}" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Event</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('kelola-event.update', ['id' => $event->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH') 
                            <div class="mb-3">
                                <label class="form-label">Nama Event</label>
                                <input type="text" name="name" class="form-control" value="{{ $event->name }}" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Deskripsi</label>
                                <textarea name="description" class="form-control" required>{{ $event->description }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Gambar</label>
                                <input type="file" name="image" class="form-control">
                                <img src="{{ asset('storage/' . $event->image) }}" width="100" class="rounded mt-2">
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </main>

    <!-- Bootstrap Script -->
    <script src="{{ asset('admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>

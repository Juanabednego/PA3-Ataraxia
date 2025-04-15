<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Admin Dashboard - Kelola Reservation</title>
    <link href="{{ asset('admin/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Poppins', sans-serif;
        }
        .table thead {
            background-color: #fff;
            font-weight: 600;
        }
        .table td, .table th {
            vertical-align: middle;
        }
        .btn {
            margin-right: 5px;
        }
        .content-wrapper {
            margin-left: 250px;
            padding: 40px 30px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }
        .page-title {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 30px;
            color: #343a40;
        }
        .badge {
            padding: 0.5em 0.75em;
            font-size: 0.85em;
        }
    </style>
</head>

<body>
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
                <i class="bi bi-house-door"></i><span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/kelola-menu">
                <i class="bi bi-list"></i><span>Kelola Menu</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/kelola-about">
                <i class="bi bi-info-circle"></i><span>Kelola About</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.index') }}">
                <i class="bi bi-calendar-event"></i><span>Kelola Event</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/tables-data">
                <i class="bi bi-table"></i><span>Manage Table</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/footer">
                <i class="bi bi-table"></i><span>Kelola Footer</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.index') }}">
                <i class="bi bi-table"></i><span>Kelola Reservation</span>
            </a>
        </li>
    </ul>
</aside>

<main id="main" class="main"> 
<div class="container mt-4">
        <div class="page-title">Kelola Reservasi</div>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="table-responsive">
            <table class="table table-striped align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Jumlah</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reservations as $res)
                    <tr>
                        <td>{{ $res->name }}</td>
                        <td>{{ $res->email }}</td>
                        <td>{{ $res->date }}</td>
                        <td>{{ $res->time }}</td>
                        <td>{{ $res->people }}</td>
                        <td>
                            <span class="badge bg-{{ $res->status == 'confirmed' ? 'success' : ($res->status == 'cancelled' ? 'danger' : 'warning') }}">
                                {{ ucfirst($res->status) }}
                            </span>
                        </td>
                        <td>
                            <form action="{{ route('admin.update', $res->id) }}" method="POST" class="d-flex gap-2">
                                @csrf
                                @method('PATCH')
                                <button name="status" value="confirmed" class="btn btn-outline-success btn-sm">Confirm</button>
                                <button name="status" value="cancelled" class="btn btn-outline-danger btn-sm">Cancel</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>

<footer id="footer" class="footer mt-auto py-3 bg-light">
    <div class="container">
        <div class="text-center text-muted">
            &copy; {{ date('Y') }} <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

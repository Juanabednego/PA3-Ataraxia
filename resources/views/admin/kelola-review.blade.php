<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kelola Review</title>
</head>
@include('layouts.AdminNav')
<body>

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Review</h1>
        </div>
    
        <section class="section dashboard">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Daftar Review Pengguna</h5>
                            
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                                    <i class="bi bi-check-circle-fill me-2"></i>
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
    
                            <div class="table-responsive">
                                <!-- Tabel Review -->
                                <table class="table table-striped table-hover">
                                    <thead class="table-light">
                                        <tr>
                                            <th>No</th>
                                            <th>User</th>
                                            <th>Rating</th>
                                            <th>Comment</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($reviews as $review)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $review->user->name }}</td>
                                            <td>
                                                @for($i = 1; $i <= 5; $i++)
                                                    @if($i <= $review->rating)
                                                        <i class="bi bi-star-fill text-warning"></i>
                                                    @else
                                                        <i class="bi bi-star text-warning"></i>
                                                    @endif
                                                @endfor
                                            </td>
                                            <td>{{ Str::limit($review->comment, 50) }}</td>
<td>
                                            <form action="{{ route('admin.kelola-review.update', $review->id) }}" method="POST" onsubmit="return confirm('Sembunyikan review ini?')">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="btn btn-sm" style="background-color: #8174A0; color: white; border: 1px solid #8174A0;">
  Hide
</button>

                                            </form>
</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <!-- Pagination -->
                                {{ $reviews->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <style>
        .main {
            margin-left: 250px;
            padding: 20px;
            transition: all 0.3s;
        }
    
        .card {
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease-in-out;
            border: none;
            overflow: hidden;
        }
    
        .card:hover {
            transform: scale(1.02);
            box-shadow: 0 6px 12px rgba(0,0,0,0.15);
        }
    
        .table th {
            font-weight: 600;
            background-color: #f8f9fa;
            padding: 12px 16px;
        }
    
        .table td {
            padding: 12px 16px;
            vertical-align: middle;
        }
    
        .table-hover tbody tr:hover {
            background-color: rgba(0, 0, 0, 0.02);
        }
    
        .badge {
            font-weight: 500;
            padding: 0.35em 0.65em;
        }
    
        @media (max-width: 992px) {
            .main {
                margin-left: 0;
                padding: 15px;
            }
        }
    </style>
    
    <footer id="footer" class="footer mt-auto py-3 bg-light">
    <div class="container">
        <div class="text-center text-muted">
            &copy; {{ date('Y') }} <strong><span>Ataraxia</span></strong>. All Rights Reserved
        </div>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
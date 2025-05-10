<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.Navbar')
    <br>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .menu-container {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .menu-image img {
            height: 300px;
        }

        .menu-desc {
            max-width: 400px;
        }

        .menu-desc h4 {
            color: #d946ef;
            font-weight: bold;
        }

        .menu-desc h1 {
            font-size: 2.2rem;
            margin: 0.5rem 0;
            color: #d946ef;
        }

        .menu-desc p {
            color: #444;
        }

        .price {
            font-size: 2rem;
            font-weight: bold;
            margin-top: 1rem;
        }

        .swiper-pagination-bullet {
            background: #ccc;
            opacity: 1;
            width: 10px;
            height: 10px;
            margin: 0 4px;
            border-radius: 50%;
        }

        .swiper-pagination-bullet-active {
            background: #d946ef;
        }
    </style>
</head>

<body>

<div class="menu-container">

    <!-- Buttons to filter Makanan and Minuman -->
    <div class="container py-4">
        <div class="row mb-3">
            <div class="col text-center">
                <button class="btn btn-primary" id="showAll">Semua</button>
                <button class="btn btn-success" id="showMakanan">Makanan</button>
                <button class="btn btn-info" id="showMinuman">Minuman</button>
            </div>
        </div>

        <!-- Menu Items -->
        <div id="menu-list" class="row g-4">
    @foreach ($makanans as $menu)
        <div class="col-md-4 menu-item" data-role="{{ $menu->role }}">
            <div class="card h-100 shadow-sm">
                <div class="row g-0 h-100">
                    <div class="col-4 d-flex align-items-center justify-content-center p-2">
                        <img src="{{ asset('uploads/' . $menu->foto) }}"
                             alt="{{ $menu->nama_makanan }}"
                             class="img-fluid rounded"
                             style="max-height: 100px;">
                    </div>
                    <div class="col-8">
                        <div class="card-body p-2 d-flex flex-column justify-content-between h-100">
                            <div>
                                <h5 class="card-title text-purple-500 fw-bold mb-1">{{ $menu->nama_makanan }}</h5>
                                <p class="card-text text-muted small mb-2">{{ $menu->deskripsi }}</p>
                            </div>
                            <div class="fw-bold fs-6 mt-auto">Rp{{ number_format($menu->harga, 0, ',', '.') }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>


</div>

@include('layouts.footer')

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    $(document).ready(function () {
        // Tampilkan semua item awalnya
        $('#showAll').click(function () {
            $('.menu-item').show();
        });

        // Filter makanan
        $('#showMakanan').click(function () {
            $('.menu-item').each(function () {
                $(this).toggle($(this).data('role') === 'makanan');
            });
        });

        // Filter minuman
        $('#showMinuman').click(function () {
            $('.menu-item').each(function () {
                $(this).toggle($(this).data('role') === 'minuman');
            });
        });

        // Default tampilkan semua
        $('#showAll').click();
    });
</script>

</body>
</html>

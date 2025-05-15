<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>

    @include('layouts.Navbar')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        body {
            background-color: #ffffff;
            font-family: 'Segoe UI', sans-serif;
        }

        .filter-btns .btn {
            border-radius: 30px;
            padding: 10px 20px;
            margin: 0 5px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .filter-btns .btn.active,
        .filter-btns .btn:hover {
            background-color: #8174A0;
            color: #fff;
        }

        .menu-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            transition: 0.3s ease;
            background: #f9f9f9;
        }

        .menu-card:hover {
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        }

        .menu-img {
            height: 180px;
            object-fit: cover;
            width: 100%;
        }

        .card-title {
            font-size: 1.2rem;
            color: #333;
            font-weight: 600;
        }

        .card-text {
            font-size: 0.95rem;
            color: #666;
        }

        .price {
            font-size: 1.1rem;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <!-- Filter Buttons -->
        <div class="text-center mb-4 filter-btns">
            <button class="btn btn-outline-secondary active" id="showAll">Semua</button>
            <button class="btn btn-outline-secondary" id="showMakanan">Makanan</button>
            <button class="btn btn-outline-secondary" id="showMinuman">Minuman</button>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            function setActive(buttonId) {
                $('.filter-btns .btn').removeClass('active');
                $(`#${buttonId}`).addClass('active');
            }

            $('#showAll').click(function () {
                $('.menu-item').show();
                setActive('showAll');
            });

            $('#showMakanan').click(function () {
                $('.menu-item').each(function () {
                    $(this).toggle($(this).data('role') === 'makanan');
                });
                setActive('showMakanan');
            });

            $('#showMinuman').click(function () {
                $('.menu-item').each(function () {
                    $(this).toggle($(this).data('role') === 'minuman');
                });
                setActive('showMinuman');
            });

            // Tampilkan semua saat pertama kali halaman dimuat
            $('#showAll').click();
        });
    </script>
</body>
</html>

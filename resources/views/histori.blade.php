<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD

<head>
    @include('layouts.Navbar')
    <br>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histori Pemesanan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .history-container {
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .booking-card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            overflow: hidden;
        }
        .booking-header {
            background-color: #f8f9fa;
            padding: 15px;
            border-bottom: 1px solid #dee2e6;
        }
        .booking-body {
            padding: 20px;
        }
        .status-pending {
            color: #ffc107;
            font-weight: bold;
        }
        .status-waiting {
            color: #fd7e14;
            font-weight: bold;
        }
        .status-confirmed {
            color: #28a745;
            font-weight: bold;
        }
        .status-cancelled {
            color: #dc3545;
            font-weight: bold;
        }
        .seats-badge {
            margin-right: 5px;
            margin-bottom: 5px;
        }
    </style>
</head>

<body>

<div class="history-container">
    <h2 class="mb-4">Riwayat Pemesanan</h2>
    
    @if($bookings->isEmpty())
        <div class="alert alert-info">
            Anda belum memiliki riwayat pemesanan.
        </div>
    @else
        @foreach($bookings as $booking)
        <div class="booking-card">
            <div class="booking-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Pemesanan #{{ $booking->id }}</h5>
                <span class="text-muted">{{ $booking->created_at->format('d M Y H:i') }}</span>
            </div>
            <div class="booking-body">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Kursi:</strong> 
                            @foreach(json_decode($booking->seats) as $seat)
                                <span class="badge bg-primary seats-badge">{{ $seat }}</span>
                            @endforeach
                        </p>
                        <p><strong>Total Harga:</strong> Rp {{ number_format($booking->total_price, 0, ',', '.') }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Status Pemesanan:</strong> 
                            <span class="status-{{ str_replace('_', '-', $booking->status) }}">
                                @if($booking->status == 'pending')
                                    Menunggu Pembayaran
                                @elseif($booking->status == 'waiting_payment_confirmation')
                                    Menunggu Konfirmasi Pembayaran
                                @elseif($booking->status == 'confirmed')
                                    Dikonfirmasi
                                @else
                                    Dibatalkan
                                @endif
                            </span>
                        </p>
                        
                        @if($booking->payment)
                        <p><strong>Metode Pembayaran:</strong> {{ ucfirst($booking->payment->payment_method) }}</p>
                        <p><strong>Status Pembayaran:</strong> 
                            <span class="status-{{ str_replace('_', '-', $booking->payment->status) }}">
                                @if($booking->payment->status == 'pending')
                                    Menunggu
                                @elseif($booking->payment->status == 'waiting_confirmation')
                                    Menunggu Konfirmasi
                                @else
                                    Dikonfirmasi
                                @endif
                            </span>
                        </p>
                        @endif
                    </div>
                </div>
                
                @if($booking->payment && $booking->payment->status == 'pending')
                <div class="mt-3">
                    <a href="{{ route('payment.upload', $booking->id) }}" class="btn btn-primary">
                        Upload Bukti Pembayaran
                    </a>
                </div>
                @endif
            </div>
        </div>
        @endforeach
    @endif
</div>

@include('layouts.footer')

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

=======
<head>
    @include('layouts.Navbar')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histori Pemesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .ticket-container {
            max-width: 800px;
            margin: 30px auto;
            padding-bottom: 50px;
        }
        .ticket-card { 
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            padding: 20px;
            margin-bottom: 20px;
            position: relative;
        }
        .ticket-header {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 15px;
            border-bottom: 2px solid #eee;
            padding-bottom: 10px;
        }
        .ticket-detail {
            margin-bottom: 8px;
            color: #555;
        }
        .ticket-divider {
            border-top: 1px dashed #ccc;
            margin: 15px 0;
        }
        .status-container {
            margin-top: 15px;
        }
        .status-item {
            display: inline-block;
            margin-right: 10px;
            margin-bottom: 10px;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 0.9rem;
        }
        .status-selesai {
            background-color: #d4edda;
            color: #155724;
        }
        .status-diproses {
            background-color: #fff3cd;
            color: #856404;
        }
        .status-hubungi {
            background-color: #f8d7da;
            color: #721c24;
        }
        .total-harga {
            font-weight: bold;
            color: #333;
        }
        .no-bookings {
            text-align: center;
            padding: 40px;
            color: #6c757d;
        }
        .badge-seat {
            background-color: #6c757d;
            color: white;
            margin-right: 5px;
            margin-bottom: 5px;
        }
        .booking-item {
    display: flex;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    margin-bottom: 20px;
    overflow: hidden;
}

.booking-img {
    flex: 0 0 150px;
    height: 150px;
    object-fit: cover;
    border-right: 1px solid #eee;
}

.booking-content {
    padding: 15px;
    flex-grow: 1;
    position: relative;
}

.booking-title {
    font-size: 1.2rem;
    font-weight: 600;
    margin-bottom: 5px;
}

.booking-date, .booking-seat, .booking-price {
    font-size: 0.95rem;
    color: #555;
}

.status-badge {
    font-size: 0.85rem;
    font-weight: 500;
    padding: 4px 10px;
    border-radius: 20px;
    display: inline-block;
    margin-top: 8px;
}

.status-diproses {
    background-color: #fff3cd;
    color: #856404;
}

.status-diterima {
    background-color: #cce5ff;
    color: #004085;
}

.status-selesai {
    background-color: #d4edda;
    color: #155724;
}

.booking-actions {
    display: flex;
    flex-direction: column;
    justify-content: center; /* atau flex-end jika mau di bawah */
    align-items: flex-end;
    min-width: 150px;
}

.booking-actions a,
.booking-actions button {
    border: none;
    background-color: #a240c3;
    color: #fff;
    padding: 6px 14px;
    border-radius: 8px;
    font-size: 0.9rem;
    cursor: pointer;
    text-decoration: none;
}

.booking-actions a:hover,
.booking-actions button:hover {
    background-color: #891ab3;
}

    </style>
</head>
<body>
    <div class="container ticket-container">
        <h2 class="text-center mb-4">Riwayat Pemesanan</h2>
        
        @if($bookings->isEmpty())
            <div class="no-bookings">
                <h4>Anda belum memiliki riwayat pemesanan</h4>
                <p>Silahkan melakukan pemesanan terlebih dahulu</p>
            </div>
        @else
        @foreach($bookings as $booking)
<div class="booking-item">
<img class="booking-img" src="{{ asset($booking->event->image ?? 'storage/events/default.jpg') }}" alt="{{ $booking->event->name ?? 'Gambar event' }}">

    
    <div class="booking-content">
        <div class="booking-title">{{ $booking->event->name ?? 'Event Tidak Ditemukan' }}</div>
        <div class="booking-date">{{ $booking->created_at->format('d F Y \p\u\k\u\l H:i') }}</div>
        
        <div class="booking-seat mt-1">
            Kursi:
            @foreach(json_decode($booking->seats) as $seat)
                <span class="badge bg-secondary">{{ $seat }}</span>
            @endforeach
        </div>
        
        <div class="booking-price mt-1">Total Harga: <strong>Rp {{ number_format($booking->total_price, 0, ',', '.') }}</strong></div>
        
        <div class="status-badge 
            @if($booking->status == 'pending') status-diproses 
            @elseif($booking->status == 'cancelled') status-diterima 
            @elseif($booking->status == 'confirmed') status-selesai 
            @endif">
            {{ $statusLabels[$booking->status] }}
        </div>

        <div class="booking-actions">

            <a href="https://wa.me/6283114596027" target="_blank">hubungi admin</a>
        </div>
    </div>
</div>
@endforeach

        @endif
    </div>
       
    @include('layouts.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
>>>>>>> 2a06928 (Initial commit)
</body>
</html>
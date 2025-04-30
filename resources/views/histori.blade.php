<!DOCTYPE html>
<html lang="en">

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

</body>
</html>
<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class BookingController extends Controller
{
    public function index(Request $request)
    {
        $eventId = $request->event_id;

        // Ambil semua kursi yang sudah dibooking
        $bookedSeats = Booking::whereIn('status', ['confirmed', 'waiting_payment_confirmation'])
            ->pluck('seats')  // Mengambil kolom 'seats' yang berisi JSON kursi
            ->toArray();
    
        // Menggabungkan kursi yang dibooking
        $formattedSeats = [];
        foreach ($bookedSeats as $seatString) {
            $formattedSeats = array_merge($formattedSeats, json_decode($seatString, true) ?? []);
        }
    
       
        if ($request->ajax()) {
            return response()->json(['formattedSeats' => $formattedSeats]);
        }   
    
        // Kirim data kursi yang sudah dibooking ke view
        return view('pilihkursi', compact('formattedSeats', 'eventId'));
    }
    
    

    public function store(Request $request)
{
    $request->validate([
        'event_id' => 'required|exists:events,id',
        'seats' => 'required|string',
        'total_price' => 'required|numeric'
    ]);

    if (!Auth::check()) {
        return response()->json(['error' => 'Silakan login terlebih dahulu!'], 401);
    }

    $userId = Auth::id();
    $selectedSeats = explode(',', str_replace(' ', '', $request->seats));

    try {
        DB::beginTransaction();

        // Check if any of the selected seats are already booked by others
        $existingBookings = Booking::where('status', '!=', 'cancelled')
            ->where(function ($query) use ($selectedSeats) {
                foreach ($selectedSeats as $seat) {
                    $query->orWhereJsonContains('seats', $seat);
                }
            })
            ->exists();

        if ($existingBookings) {
            return response()->json(['error' => 'Beberapa kursi yang dipilih sudah dibooking.'], 400);
        }

        // Create new booking
        $booking = Booking::create([
            'user_id' => $userId,
            'event_id' => $request->event_id,
            'seats' => json_encode($selectedSeats),
            'total_price' => $request->total_price,
            'status' => 'pending'  // Keep status as pending until payment is confirmed
        ]);

        DB::commit();

        Log::info('Booking berhasil dibuat', ['booking_id' => $booking->id, 'seats' => $selectedSeats]);

        return response()->json(['booking_id' => $booking->id]);

    } catch (\Exception $e) {
        DB::rollBack();
        Log::error('Gagal menyimpan booking', ['error' => $e->getMessage()]);
        return response()->json(['error' => 'Terjadi kesalahan, silakan coba lagi.'], 500);
    }
}

public function getNotifikasiUser(Request $request)
{
    $userId = Auth::id();

    // Ambil booking user yang statusnya sudah confirmed
    $bookings = Booking::where('user_id', $userId)
                ->where('status', 'confirmed')
                ->latest()
                ->take(5)
                ->get();

    // Format data notifikasi
    $notifications = $bookings->map(function ($booking) {
        $kursi = json_decode($booking->seats);
        $kursiFormatted = implode(', ', $kursi);
    
        return [
            'message' => "Booking Anda dengan nomor kursi: $kursiFormatted",
            'created_at' => $booking->updated_at->diffForHumans()
        ];
    });


    return response()->json($notifications);
}


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Payment;
use Illuminate\Support\Facades\Broadcast;

class AdminController extends Controller
{
    
    public function index()
    {
        $bookings = Booking::where('status', 'waiting_payment_confirmation')->orderBy('created_at', 'desc')->get();
        return view('admin.tables-data', compact('bookings'));
    }

    public function confirm($id)
{
    $booking = Booking::findOrFail($id);
    $payment = Payment::where('booking_id', $booking->id)->first();

    if (!$payment || $payment->status !== 'pending') {
        return redirect()->route('admin.tables-data')->with('error', 'Pembayaran belum ditemukan atau tidak valid.');
    }

    $payment->update(['status' => 'confirmed']);
    $booking->update(['status' => 'confirmed']);

    // Broadcast perubahan status ke semua user yang melihat halaman
    Broadcast::event(new \App\Events\BookingConfirmed($booking));

    return redirect()->route('admin.tables-data')->with('success', 'Booking berhasil dikonfirmasi.');
}

    public function cancel($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->update(['status' => 'cancelled']);

        return redirect()->route('admin.tables-data')->with('success', 'Booking berhasil dibatalkan.');
    }
     // Delete all bookings
     public function deleteAll()
     {
         try {
             Booking::truncate();  // Deletes all booking records
             return redirect()->route('admin.tables-data')->with('success', 'Semua booking berhasil dihapus.');
         } catch (\Exception $e) {
             return redirect()->route('admin.tables-data')->with('error', 'Gagal menghapus semua booking.');
         }
     }

     public function getBookingHistory()
    {
        // Fetch booking history for the logged-in user
        $bookings = Booking::where('user_id', Auth::id())
            ->whereIn('status', ['confirmed', 'pending'])
            ->orderBy('created_at', 'desc')
            ->get();

        // Return bookings as JSON
        return response()->json(['bookings' => $bookings]);
    }

}

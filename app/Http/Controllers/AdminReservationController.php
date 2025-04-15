<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class AdminReservationController extends Controller
{
    public function index() {
        $reservations = Reservation::latest()->get();
        return view('admin.kelola-reservation', compact('reservations'));
    }

    public function update(Request $request, $id) {
        $reservation = Reservation::findOrFail($id);
        $reservation->update(['status' => $request->status]);
        return redirect()->route('admin.index')->with('success', 'Status updated.');
    }

    public function getNotifikasiReservation()
{
    $userId = Auth::id();

    $reservations = Reservation::where('user_id', $userId)
                    ->where('status', 'confirmed')
                    ->latest()
                    ->take(5)
                    ->get();

    $notifications = $reservations->map(function ($reservation) {
        return [
            'message' => "Reservasi Anda pada " . $reservation->date . " jam " . $reservation->time . " telah dikonfirmasi.",
            'created_at' => $reservation->updated_at->diffForHumans()
        ];
    });

    return response()->json($notifications);
}

}

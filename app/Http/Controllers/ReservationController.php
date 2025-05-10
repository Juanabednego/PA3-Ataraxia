<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function form() {
        return view('reservation');
    }

    public function store(Request $request) {
        $request->validate([
            'date' => 'required|date',
            'time' => 'required',
            'people' => 'required|string',
            'note' => 'nullable|string'
        ]);

        Reservation::create([
            'user_id' => Auth::id(),
            'name' => Auth::user()->name,
            'email' => Auth::user()->email,
            'phone' => Auth::user()->phone ?? '-',
            'date' => $request->date,
            'time' => $request->time,
            'people' => $request->people,
            'note' => $request->note,
            'status' => 'pending',
        ]);

        return redirect()->route('reservation.form')->with('success', 'Reservation submitted and awaiting admin confirmation.');
    }
}

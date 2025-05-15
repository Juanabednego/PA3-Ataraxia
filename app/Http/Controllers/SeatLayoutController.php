<?php

namespace App\Http\Controllers;

use App\Models\SeatLayout;
use App\Models\Event;
use Illuminate\Http\Request;

class SeatLayoutController extends Controller
{
    public function index(Request $request)
    {
        $events = Event::all();

        if ($request->has('eventId')) {
            $eventId = $request->input('eventId');
            $seats = SeatLayout::where('event_id', $eventId)->get();

            // Jika belum ada kursi untuk event ini, generate default layout
            if ($seats->isEmpty()) {
                $this->generateDefaultLayout($eventId);
                $seats = SeatLayout::where('event_id', $eventId)->get();
            }

            return view('admin.seat-builder', compact('seats', 'eventId', 'events'));
        }

        return view('admin.seat-builder', compact('events'));
    }

    public function store(Request $request)
    {
        $data = $request->input('seats');

        foreach ($data as $seat) {
            SeatLayout::updateOrCreate(
                ['seat_id' => $seat['seat_id'], 'event_id' => $seat['event_id']],
                [
                    'x' => $seat['x'],
                    'y' => $seat['y'],
                    'section' => $seat['section'],
                ]
            );
        }

        return response()->json(['success' => true]);
    }

    private function generateDefaultLayout($eventId)
    {
        $seats = [];

        // Outdoor: 18 group x 4 seats
        for ($i = 1; $i <= 18; $i++) {
            foreach (['oa', 'ob', 'oc', 'od'] as $index => $suffix) {
                $seats[] = [
                    'seat_id' => $i . $suffix,
                    'section' => 'Outdoor',
                    'x' => 60 * $index,
                    'y' => 60 * $i,
                ];
            }
        }

        // Indoor First Floor: 6 rows x 4 groups x 4 seats
        for ($i = 1; $i <= 6; $i++) {
            for ($j = 1; $j <= 4; $j++) {
                foreach (['a', 'b', 'c', 'd'] as $index => $suffix) {
                    $num = ($i - 1) * 4 + $j;
                    $seats[] = [
                        'seat_id' => $num . $suffix,
                        'section' => 'Indoor First',
                        'x' => 300 + 60 * $index,
                        'y' => 60 * $i,
                    ];
                }
            }
        }

        // Second Floor: 3 rows x 5 groups x 4 seats
        for ($i = 1; $i <= 3; $i++) {
            for ($j = 1; $j <= 5; $j++) {
                foreach (['sa', 'sb', 'sc', 'sd'] as $index => $suffix) {
                    $num = ($i - 1) * 5 + $j;
                    $seats[] = [
                        'seat_id' => $num . $suffix,
                        'section' => 'Second Floor',
                        'x' => 700 + 60 * $index,
                        'y' => 60 * $i,
                    ];
                }
            }
        }

        foreach ($seats as $seat) {
            SeatLayout::create([
                'seat_id' => $seat['seat_id'],
                'event_id' => $eventId,
                'section' => $seat['section'],
                'x' => $seat['x'],
                'y' => $seat['y'],
            ]);
        }
    }
}

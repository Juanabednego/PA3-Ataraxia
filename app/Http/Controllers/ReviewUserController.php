<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewUserController extends Controller
{
    
    // Simpan review
    public function store(Request $request)
    {
        if (!auth()->check()) {
            return back()->withErrors(['error' => 'Anda harus login terlebih dahulu untuk mengirimkan review.']);
        }

        $validated = $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string',
        ]);

        try {
            Review::create([
                'user_id' => auth()->id(),
                'rating' => $validated['rating'],
                'comment' => $validated['comment'],
                'status' => 'pending',
            ]);

            return back()->with('success', 'Review berhasil dikirim dan sedang menunggu persetujuan.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Terjadi kesalahan saat mengirimkan review.']);
        }
    }

}
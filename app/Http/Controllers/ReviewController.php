<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Review;


class ReviewController extends Controller
{
    // app/Http/Controllers/ReviewController.php

public function index() 
{
    $reviews = Review::with('user')
        ->where('is_hidden', false)
        ->orderBy('created_at', 'desc')
        ->paginate(10);

    return view('admin.kelola-review', compact('reviews'));
}
public function store(Request $request)
{
    $validated = $request->validate([
        'user_id' => 'required|integer|exists:users,id',
        'rating' => 'required|integer|min:1|max:5',
        'comment' => 'nullable|string',
    ]);

    DB::table('reviews')->insert([
        'user_id' => $validated['user_id'],
        'rating' => $validated['rating'],
        'comment' => $validated['comment'] ?? null,
        'status' => 'pending',
        'is_hidden' => false,
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    return redirect()->back()->with('success', 'Feedback berhasil dikirim.');
}
    public function update($id)
    {
        $review = Review::findOrFail($id);
        $review->is_hidden = true;  
        $review->save();
    
        return redirect()->route('admin.kelola-review.index')->with('success', 'Review berhasil disembunyikan.');
    }
}


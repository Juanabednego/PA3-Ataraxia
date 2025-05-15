<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Review;
use App\Models\AboutSection;
use Illuminate\Support\Facades\Storage;

class KelolaEventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('admin.kelola-event', compact('events'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'date' => 'required|date',
            'harga' => 'required|numeric|min:0',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Cek apakah ada file yang diunggah
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('events'), $imageName);
            $imagePath = 'events/' . $imageName;
        } else {
            $imagePath = null;
        }

        // Simpan data ke database (pakai input dari $request, bukan string literal)
        Event::create([
            'name' => $request->name,
            'description' => $request->description,
            'date' => $request->date,
            'harga' => $request->harga,
            'image' => $imagePath,
        ]);

        return redirect()->route('kelola-event')->with('success', 'Event berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'date' => 'required|date',
            'harga' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'date' => $request->date,
            'harga' => $request->harga,
        ];

        if ($request->hasFile('image')) {
            if ($event->image) {
                Storage::disk('public')->delete($event->image);
            }
            $image = $request->file('image');
            $imagePath = $image->store('events', 'public');
            $data['image'] = $imagePath;
        }

        $event->update($data);

        return redirect()->route('kelola-event')->with('success', 'Event berhasil diperbarui!');
    }

    public function destroy(Event $event)
    {
        if ($event->image) {
            Storage::disk('public')->delete($event->image);
        }

        $event->delete();

        return redirect()->route('kelola-event')->with('success', 'Event berhasil dihapus!');
    }

    public function showEvents()
    {
        $events = Event::all();
        return view('BookTable', compact('events'));
    }

    public function publicEvents()
    {
        $reviews = Review::with('user')->where('is_hidden', false)->latest()->get();
        $events = Event::all();
        $about = AboutSection::first(); // ambil data our story
        return view('index', compact('reviews', 'events', 'about'));

    }
}

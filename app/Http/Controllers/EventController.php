<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'date' => 'required|date',    // Validasi date
            'harga' => 'required|numeric|min:0',  // Validasi harga
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        // Menyimpan gambar ke folder storage/app/public/events
        $imagePath = $request->file('image')->store('events', 'public');
    
        // Menyimpan data event
        Event::create([
            'name' => $request->name,
            'description' => $request->description,
            'date' => $request->date,      // Menyimpan tanggal
            'harga' => $request->harga,    // Menyimpan harga
            'image' => 'storage/' . $imagePath,  // Menyimpan path gambar
        ]);
    
        return redirect()->route('kelola-event.index')->with('success', 'Event berhasil ditambahkan!');
    }
    
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('admin.events.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'date' => 'required|date',    // Validasi date
            'harga' => 'required|numeric|min:0',  // Validasi harga
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        $event = Event::findOrFail($id);
        $event->name = $request->name;
        $event->description = $request->description;
        $event->date = $request->date;       // Menyimpan tanggal
        $event->harga = $request->harga;     // Menyimpan harga
    
        // Jika gambar baru diupload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('events', 'public');
            $event->image = 'storage/' . $imagePath;
        }
    
        $event->save();
    
        return redirect()->route('kelola-event.index')->with('success', 'Event berhasil diperbarui!');
    }
    

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()->route('kelola-event.index')->with('success', 'Event berhasil dihapus!');
    }
}

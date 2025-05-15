<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutSection;

class AboutSectionAdminController extends Controller
{

    
  public function index() 
    {
        // Tambahkan definisi variabel $about
        $about = AboutSection::first();
        return view('admin.kelola-about', compact('about'));
    }
    public function edit()
{
    $about = \App\Models\AboutSection::first();
    return view('admin.kelola-about', compact('about'));
}

public function update(Request $request)
{
    $about = \App\Models\AboutSection::first();

    $validated = $request->validate([
        'paragraph1' => 'nullable|string',
        'paragraph2' => 'nullable|string',
        'paragraph3' => 'nullable|string',
        'image_position' => 'in:left,right',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('public/images');
        $validated['image_url'] = str_replace('public/', 'storage/', $path);
    }

    $about->update($validated);
return redirect()->route('admin.kelola-about.index')->with('success', 'Konten berhasil diperbarui!'); 
}
}
<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;

class MakananController extends Controller
{
    public function index()
    {
        $makanans = Makanan::all();
        return view('admin.kelola-menu', compact('makanans'));
    }

    public function store(Request $request)
{
    $request->validate([
        'nama_makanan' => 'required',
        'deskripsi' => 'nullable',
        'harga' => 'required|numeric',
        'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'role' => 'required|in:makanan,minuman',
    ]);

    $data = $request->only(['nama_makanan', 'deskripsi', 'harga', 'role']);

    if ($request->hasFile('foto')) {
        $file = $request->file('foto');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads'), $filename);
        $data['foto'] = $filename;
    }

    Makanan::create($data);

    return redirect()->route('kelola-menu.index')->with('success', 'Makanan berhasil ditambahkan');
}
public function update(Request $request, $id)
{
    $request->validate([
        'nama_makanan' => 'required',
        'deskripsi' => 'nullable',
        'harga' => 'required|numeric',
        'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'role' => 'required|in:makanan,minuman',
    ]);

    $makanan = Makanan::findOrFail($id);
    $data = $request->only(['nama_makanan', 'deskripsi', 'harga', 'role']);

    if ($request->hasFile('foto')) {
        // Hapus foto lama jika ada
        if ($makanan->foto && file_exists(public_path('uploads/' . $makanan->foto))) {
            unlink(public_path('uploads/' . $makanan->foto));
        }
    
        $file = $request->file('foto');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads'), $filename);
        $data['foto'] = $filename;
    }
    
    $makanan->update($data);
    
    return redirect()->route('kelola-menu.index')->with('success', 'Makanan/Minuman berhasil diperbarui');
    
}

    public function destroy(Makanan $makanan)
    {
        // dd($makanan->id);
        $makanan->delete();
        return redirect()->route('kelola-menu.index')->with('success', 'Makanan/Minuman berhasil dihapus');
    }
}

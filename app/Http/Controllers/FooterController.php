<?php

namespace App\Http\Controllers;
use App\Models\Footer;
use Illuminate\Http\Request;


class FooterController extends Controller
{
    public function index()
    {
        $footers = Footer::all();
        return view('admin.footer');
    }
    public function edit()
    {
        $footers = Footer::all()->keyBy('section');
        return view('admin.footer.edit', compact('footers'));
    }

    public function update(Request $request)
    {
        foreach ($request->sections as $section => $content) {
            Footer::updateOrCreate(
                ['section' => $section],
                ['content' => json_encode($content)]
            );
        }

        return redirect()->route('admin.footer.edit')->with('success', 'Footer berhasil diperbarui.');
    }
}

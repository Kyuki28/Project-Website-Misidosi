<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use App\Models\DonasiMasuk;
use Illuminate\Http\Request;

class DonasiController extends Controller
{
    public function index()
    {
        $dtDonasi = Donasi::all(); // Mengambil semua data donasi
        $title = "Beranda Admin";

        // Pastikan Anda mengirimkan variabel ini ke view
       return view('admin.beranda-admin', compact('title', 'dtDonasi'));
    }

    public function create()
    {
        $title = "Buat Donasi";
        return view('admin.create-donasi', compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg,svg|max:2048',
            'name' => 'required|string|max:255',
            'detail' => 'required|string',
        ]);

        $donasi = new Donasi();
        $donasi->image = $request->image;
        $donasi->name = $request->name;
        $donasi->detail = $request->detail;

        if ($request->hasFile('image')) {
            $donasi->image = $request->file('image')->store('images','public');
        }
        
        $donasi->save();

        // Redirect ke halaman index dengan data terbaru
        return redirect('beranda-admin')->with('success', 'Donasi berhasil ditambahkan');
    }

    public function delete(Request $request, $id)
    {
        $donasi = Donasi::findOrFail($id);
        $donasi->delete();
        DonasiMasuk::truncate();
    
        return redirect('beranda-admin')->with('success', 'Data donasi masuk berhasil dihapus');
    }

    public function edit($id)
{
    $title = "Edit Donasi";
    $donasi = Donasi::findOrFail($id);
    return view('admin.edit-donasi', compact('title', 'donasi'));
}   

public function update(Request $request, $id)
{
    $donasi = Donasi::findOrFail($id);
    $request->validate([
        'image' => 'nullable|image|mimes:png,jpg,jpeg,svg|max:2048',
        'name' => 'required|string|max:255',
        'detail' => 'required|string',
    ]);

    if ($request->hasFile('image')) {
        $donasi->image = $request->file('image')->store('images', 'public');
    }

    $donasi->name = $request->name;
    $donasi->detail = $request->detail;

    $donasi->save();

    return redirect('beranda-admin')->with('success', 'Donasi berhasil diupdate');
}

}

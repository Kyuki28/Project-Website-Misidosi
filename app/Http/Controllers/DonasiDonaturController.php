<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
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
            'name' => 'required|string|max:255',
            'detail' => 'required|string',
            'image' => 'required|string',
        ]);

        $donasi = new Donasi();
        $donasi->name = $request->name;
        $donasi->detail = $request->detail;

        if ($request->hasFile('image')) {
            $donasi->image = $request->file('image')->store('images');
        }
        
        $donasi->save();

        // Redirect ke halaman index dengan data terbaru
        return redirect('beranda-admin')->with('success', 'Donasi berhasil ditambahkan');
    }


}

<?php

namespace App\Http\Controllers;

use App\Models\DonasiMasuk;
use Illuminate\Http\Request;

class DonasiMasukController extends Controller
{
    public function index()
    {
        $dtMasuk = DonasiMasuk::all();
        return view('donatur.beranda-donatur', compact('dtMasuk'));
    }

    public function create()
    {
        return view('donatur.form-donasi');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string',
            'golongan' => 'required|string',
            'jumlah_donasi' => 'required|integer',
            'jenis_bank' => 'required|string',
            'bukti_donasi' => 'required|image|mimes:png,jpg,jpeg,svg|max:2048',
            'catatan' => 'nullable|string',
            'status_validasi' => 'nullable|string',
        ]);

        $donasi = new DonasiMasuk();
        $donasi->nama = $request->nama;
        $donasi->email = $request->email;
        $donasi->golongan = $request->golongan;
        $donasi->jumlah_donasi = $request->jumlah_donasi;
        $donasi->jenis_bank = $request->jenis_bank;
        $donasi->bukti_donasi = $request->bukti_donasi;
        $donasi->catatan = $request->catatan;
        $donasi->status_validasi = 'belum tervalidasi';

        if ($request->hasFile('bukti_donasi')) {
            $donasi->bukti_donasi = $request->file('bukti_donasi')->store('bukti_donasi','public');
        }

        $donasi->save();

        // Redirect ke halaman index dengan data terbaru
        return redirect('beranda-donatur')->with('success', 'Donasi berhasil ditambahkan');
    }

    public function show($id)
    {
        $donasiMasuk = DonasiMasuk::findOrFail($id);
        return view('donasi-masuk.show', compact('donasiMasuk'));
    }

    public function edit($id)
    {
        $donasiMasuk = DonasiMasuk::findOrFail($id);
        return view('donasi-masuk.edit', compact('donasiMasuk'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'golongan' => 'required|string',
            'jumlah_donasi' => 'required|integer',
            'jenis_bank' => 'required|string',
            'bukti_donasi' => 'required|string',
            'catatan' => 'nullable|string',
            'status_validasi' => 'required|string',
        ]);

        $donasiMasuk = DonasiMasuk::findOrFail($id);
        $donasiMasuk->update($request->all());

        return redirect()->route('donasi-masuk.index')->with('success', 'Data donasi masuk berhasil diperbarui');
    }

    public function destroy($id)
    {
        $donasiMasuk = DonasiMasuk::findOrFail($id);
        $donasiMasuk->delete();

        return redirect()->route('donasi-masuk.index')->with('success', 'Data donasi masuk berhasil dihapus');
    }

    public function validateDonasi(Request $request, $id)
{
    $donasi = DonasiMasuk::find($id);
    $donasi->status_validasi = 'sudah tervalidasi';
    $donasi->save();
    return redirect()->back()->with('success', 'Donasi telah divalidasi');
}

public function validasi(Request $request, $id)
    {
        $donasi = DonasiMasuk::find($id);
        $donasi->status_validasi = 'sudah tervalidasi';
        $donasi->save();
        return redirect()->back()->with('success', 'Donasi telah divalidasi');
    }


}

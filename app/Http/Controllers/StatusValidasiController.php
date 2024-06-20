<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DonasiMasuk;

class StatusValidasiController extends Controller
{
    public function index()
    {
        $title = "Status Validasi";
        $dtMasuk = DonasiMasuk::select('id', 'nama', 'email', 'golongan', 'jumlah_donasi', 'jenis_bank', 'bukti_donasi', 'catatan', 'created_at', 'status_validasi')->get();
        return view('donatur.status-validasi', compact('title','dtMasuk'));
    }
}

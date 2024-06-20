@extends('layouts.header')

@section('container')
<style>
  .warnus {
      color: #1E1EB9;
     }

  .table {
            background-table: #000000; /* Warna latar belakang */
            padding: 20px; /* Padding untuk jarak dari tabel */
            border-radius: 10px; /* Radius sudut */
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Efek bayangan */
            margin: 20px 0; /* Margin untuk jarak di luar */
        }
        .table th tr td{
            color: #1E1EB9; /* Warna teks header */
            background-color:beige;
        }

        .container {
        }
  </style>
  <figure>
      <blockquote class="blockquote mt-3 ms-3">
        <p class="warnus fw-bold">VALIDASI DONASI</p>
    </blockquote>
    <figcaption class="border-top mt-3 pt-2">
    </figcaption>
  </figure>
  <div class="container">
    <div class="table-responsive">
    <table class="table table-bg--<#1E1EB9>">
        <thead class="thead-dark">
            <tr class="">
                <th class="text-center" style="color: #1E1EB9;">Date</th>
                <th class="text-center" style="color: #1E1EB9;">Donatur</th>
                <th class="text-center" style="color: #1E1EB9;">Bukti</th>
                <th class="text-center" style="color: #1E1EB9;">Status</th>
                <th class="text-center" style="color: #1E1EB9;">Nominal</th>
                <th class="text-center" style="color: #1E1EB9;">Nama Donasi</th>
                <th class="text-center" style="color: #1E1EB9;">Jenis Bank/e-Wallet</th>
                <th class="text-center" style="color: #1E1EB9;">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dtMasuk as $dt) 
            <tr>
                <td class="text-center">{{ $dt->created_at->format('d-m-Y') }}</td>
                <td class="text-center">{{ $dt->nama }}</td>
                <td class="text-center">
                    <a href="{{ asset('storage/'. $dt->bukti_donasi) }}" data-fancybox="gallery">
                        <img src="{{ asset('storage/'. $dt->bukti_donasi) }}" alt="{{ $dt->nama }}" width="50" height="30">
                    </a>
                </td>
                <td class="text-center">{{ $dt->status_validasi }}</td>
                <td class="text-center">{{ number_format($dt->jumlah_donasi, 0, ',', '.') }}</td>
                <td class="text-center">{{ $dt->name }}</td>
                <td class="text-center">{{ $dt->jenis_bank }}</td>
                <td class="text-center">
                    @if($dt->status_validasi == 'belum tervalidasi')
                        <form action="{{ route('donasi.validateDonasi', $dt->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin memvalidasi donasi ini?');">
                            @csrf
                            @method('PATCH')
                            <button class="list-group-item list-group-item-action rounded text-white" style="background-color:#1E1EB9;"><i class="bi bi-check2-square"></i>Validasi</button>
                        </form>    
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
@endsection
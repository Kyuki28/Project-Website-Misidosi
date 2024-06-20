@extends('layouts.header')

@section('container')
<style>
  .warnus {
      color: #1E1EB9;
     }

     .table {
            background: #fff; /* Warna latar belakang */
            padding: 20px; /* Padding untuk jarak dari tabel */
            border-radius: 10px; /* Radius sudut */
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Efek bayangan */
            margin: 20px 0; /* Margin untuk jarak di luar */
        }
        .table th {
            color: #1E1EB9; /* Warna teks header */
        }
  </style>
  <figure>
      <blockquote class="blockquote mt-3 ms-3">
        <p class="warnus fw-bold">LAPORAN DONASI</p>
    </blockquote>
    <figcaption class="border-top mt-3 pt-2">
    </figcaption>
  </figure>
  
  <div class="container">
    <table class="table ">
        <thead class="thead-dark">
            <tr class="">
                <th class="text-center" style="color: #1E1EB9;">No</th>
                <th class="text-center" style="color: #1E1EB9;">Nama</th>
                <th class="text-center" style="color: #1E1EB9;">Tanggal</th>
                <th class="text-center" style="color: #1E1EB9;">Keterangan</th>
                <th class="text-center" style="color: #1E1EB9;">Jumlah</th>
                <th class="text-center" style="color: #1E1EB9;">Via</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($verifiedDonations as $donation)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td class="text-center">{{ $donation->nama }}</td>
                    <td class="text-center">{{ $donation->created_at->format('d-m-Y') }}</td>
                    <td class="text-center">{{ $donation->catatan }}</td>
                    <td class="text-center">Rp {{ number_format($donation->jumlah_donasi, 0, ',', '.') }}</td>
                    <td class="text-center">{{ $donation->jenis_bank }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
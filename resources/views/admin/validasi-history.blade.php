@extends('layouts.header')

@section('container')
<style>
  .warnus {
      color: #1E1EB9;
     }

     .table {
            background: #505050; /* Warna latar belakang */
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
        <p class="warnus fw-bold">RIWAYAT VALIDASI</p>
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
                <th class="text-center" style="color: #1E1EB9;">NIM</th>
                <th class="text-center" style="color: #1E1EB9;">Nominal</th>
                <th class="text-center" style="color: #1E1EB9;">Angkatan/Kelas</th>
                <th class="text-center" style="color: #1E1EB9;">E-wallet</th>

            </tr>
        </thead>
        <tbody>
                <tr>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                </tr>

        </tbody>
    </table>
</div>
@endsection
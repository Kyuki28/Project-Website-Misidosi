@extends('layouts/header')

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
        <p class="warnus fw-bold">DONASI YANG BELUM VALID</p>
    </blockquote>
    <figcaption class="border-top mt-3 pt-2">
    </figcaption>
  </figure>

  <div class="container">
    <table class="table ">
        <thead class="thead-dark">
            <tr class="warnus">
                <th style="color: #1E1EB9;">No</th>
                <th style="color: #1E1EB9;">Nama</th>
                <th style="color: #1E1EB9;">NIM</th>
                <th style="color: #1E1EB9;">No Telepon</th>
                <th style="color: #1E1EB9;">Aktif</th>
                <th style="color: #1E1EB9;">Hak</th>

            </tr>
        </thead>
        <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

        </tbody>
    </table>
</div>
@endsection
@extends('layouts.header')

@section('container')
<style>
.warnus {
    color: #1E1EB9;
}

.table {
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    margin: 20px 0;
}

.table th {
    color: #1E1EB9;
}

.img-thumbnail {
    max-width: 50px;
    max-height: 50px;
    object-fit: cover;
    border-radius: 5px;
}

.fancybox-image {
    max-width: 800px; /* Set the maximum width of the enlarged image */
    max-height: 600px; /* Set the maximum height of the enlarged image */
}
</style>
<figure>
    <blockquote class="blockquote mt-3 ms-3">
        <p class="warnus fw-bold">{{ $title }}</p>
    </blockquote>
    <figcaption class="border-top mt-3 pt-2">
    </figcaption>
</figure>

<div class="container">
    <div class="container">
        <button class="btn btn-primary" style="background-color: #1E1EB9;" type="submit"><a class="list-group-item text-white" href="{{ route('create-donasi') }}" role="button"><i class="bi bi-pencil-square text-white"></i>Tambah</a></button>
        <div class="card-columns">

            <div class="container">
                <div class="table-responsive">
                    <table class="table ">
                        <thead class="thead-dark">
                            <tr class="">
                                <th class="text-center" style="color: #1E1EB9;">Judul Donasi</th>
                                <th class="text-center" style="color: #1E1EB9;">Detail Donasi</th>
                                <th class="text-center" style="color: #1E1EB9;">Gambar</th>
                                <th class="text-center" style="color: #1E1EB9;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dtDonasi as $donasi)
                            <tr>
                                <td class="text-center"><p class="card-title">{{ $donasi->name }}</p></td>
                                <td class="text-center"><p class="card-text">{{ $donasi->detail }}</p></td>
                                <td class="text-center">
                                    <a href="{{ asset('storage/'. $donasi->image) }}" data-fancybox="gallery">
                                        <img src="{{ asset('storage/'. $donasi->image) }}" alt="{{ $donasi->name }}" width="50" height="30">
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a class="list-group-item" href="{{ route('hapus-donasi', $donasi->id) }}"><i class="bi bi-trash"></i>Hapus</a>
                                </td>
                                <td class="text-center">
                                    <a class="list-group-item" href="{{ route('edit-donasi', $donasi->id) }}"><i class="bi bi-pencil-square"></i>Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
    $("[data-fancybox]").fancybox({
        // Options
    });
});
</script>
@endsection

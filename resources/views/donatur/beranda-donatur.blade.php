@extends('layouts.header-donatur')

@section('container-donatur')

<style>
.warnus {
    color: #1E1EB9;
}

body {
    background: #ffffff;
    
}
h1 {
    color: #fff;
    padding: 10px 0;
}
.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    transition: 0.3s;
    border: none;
    &:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.4);
    }
    a {
        color: initial;
        &:hover {
            text-decoration: initial;
        }
    }
    .text-muted i {
        margin: 0 10px;
    }
}

.image-frame {
    width: 100%; /* Adjust to parent width */
    max-width: 300px; /* Limit maximum width */
    height: auto; /* Adjust height to maintain aspect ratio */
    overflow: hidden; /* Hide overflow to create the frame effect */
    border-radius: 5px; /* Rounded corners */
    border: 1px solid #ddd; /* Border color */
    position: relative; /* Required for child positioning */
    margin: 20px auto; /* Center horizontally */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Optional shadow */
    background-color: #f8f9fa; /* Light background color */
}

.zoom-in {
    width: 100%; /* Make image fill the frame */
    height: auto; /* Maintain aspect ratio */
    transition: transform 0.3s ease; /* Smooth zoom-in effect */
    transform-origin: center; /* Start zooming from the center */
}

.image-frame:hover .zoom-in {
    transform: scale(1.1); /* Zoom in to 110% size */
}


</style>
<figure>
    <blockquote class="blockquote mt-3 ms-3">
        <p class="warnus fw-bold">BERANDA DONATUR</p>
    </blockquote>
    <figcaption class="border-top mt-3 pt-2"></figcaption>
</figure>
<div class="container">
    <div class="text-center">
        <h1></h1>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($dtDonasi as $donasi)
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <a href="form-donasi" class="list-group-item">
                            @if($donasi->image)
                            <div class="image-frame">
                                <img class="zoom-in" src="{{ asset('storage/'. $donasi->image) }}" alt="{{ $donasi->image }}">
                            </div>                            
                            @else
                                <img class="card-img-top" src="https://via.placeholder.com/150" alt="No Image Available">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $donasi->name }}</h5>
                                <p class="card-text">{{ $donasi->detail }}</p>
                                <p class="card-text"><small class="text-muted"><i class="far fa-user"></i> admin<i class="fas fa-calendar-alt"></i>{{ $donasi->created_at }}</small></p>
                                <p class="card-text"><small class="text-muted"><i class="bi bi-coin"></i>Total Donasi: Rp {{ number_format($totalDonations, 0, ',', '.') }}</small></p>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

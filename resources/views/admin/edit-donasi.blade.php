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
        <p class="warnus fw-bold">EDIT DONASI</p>
    </blockquote>
    <figcaption class="border-top mt-3 pt-2">
    </figcaption>
  </figure>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  
  </head>

  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif

    <!-- Start Card -->
    <div class="card">
      <!-- Start Card Body -->
      <div class="card-body">
        <!-- Start Form -->
        <form id="bookingForm" action="{{ route('donasi.update', $donasi->id) }}" method="post" class="needs-validation" novalidate autocomplete="off" enctype="multipart/form-data">
          @csrf
          <!-- Start Input Name -->
          <div class="form-group">
            <label for="inputEmail">Masukkan Foto Donasi</label>
            <input type="file" class="form-control" id="inputFile" name="image" required />
          </div>

          <div class="form-group">
            <label for="inputName">Judul Donasi</label>
            <input type="text" class="form-control" id="inputName" name="name" placeholder="Judul Donasi" required />
            <small class="form-text text-muted">Masukkan Judul Donasi</small>
          </div>
          <!-- End Input Name -->
  
          <!-- Start Input Email -->
          <div class="form-group">
            <label for="textAreaRemark">Deskripsi Donasi</label>
            <textarea class="form-control" name="detail" id="textAreaRemark" rows="2" placeholder=""></textarea>
          </div>
  
          <!-- Start Submit Button -->
          <button class="btn btn-primary btn-block col-lg-2 warnus text-white" style="background-color: #1E1EB9;" type="submit">Submit</button>
          <!-- End Submit Button -->
        </form>
        <!-- End Form -->
      </div>
      <!-- End Card Body -->
    </div>
    <!-- End Card -->
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
    <!-- Start Scritp for Form -->
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
    <!-- End Scritp for Form -->
  
  </body>
@endsection
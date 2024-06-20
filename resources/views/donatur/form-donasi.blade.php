@extends('layouts.header-donatur')

@section('container-donatur')
<style>
.warnus {
    color: #1E1EB9;
   }
</style>
<figure>
    <blockquote class="blockquote mt-3 ms-3">
      <p class="warnus fw-bold">Form Donasi</p>
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
  
    <title>Bootstrap Form Tutorial</title>
  </head>

  
    <!-- Start Card -->
    <div class="card">
      <!-- Start Card Body -->
      <div class="card-body">

        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <!-- Start Form -->
        <form id="bookingForm" action="{{ route('form-save') }}" method="post" class="needs-validation" novalidate autocomplete="off" enctype="multipart/form-data">
          @csrf
          <!-- Start Input Name -->
          <div class="form-group">
            <label for="inputName">Name</label>
            <input type="text" class="form-control" id="inputName" name="nama" placeholder="Nama Lengkap" required />
            <small class="form-text text-muted">Masukkan Nama Lengkap</small>
          </div>
          <!-- End Input Name -->
  
          <!-- Start Input Email -->
          <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Masukkan Alamat Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required />
            <small class="form-text text-muted">Kami tidak akan pernah membagikan email Anda kepada orang lain.</small>
          </div>
          <!-- End Input Email -->
  
          <!-- Start Input Telephone -->
          <div class="form-group">
            <label for="inputPhone">Golongan</label>
            <select class="form-control mr-1" id="inputStartTimeHour" name="golongan" required>
                <option value="" disabled selected>Golongan</option>
                <option value="Mahasiswa">Mahasiswa</option>
                <option value="Dosen">Dosen</option>
                <option value="Masyarakat">Masyarakat</option>

              </select>
          </div>
          <!-- End Input Telephone -->

          <div class="form-group">
            <label for="inputEmail">Jumlah Donasi</label>
            <input type="number" class="form-control" id="inputNumber" name="jumlah_donasi" placeholder="Masukan Nominal Donasi" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required />
          </div>
  
          <div class="form-group">
            <label for="inputPhone">Jenis Bank</label>
            <select class="form-control mr-1" id="inputStartTimeHour" name="jenis_bank" required>
                <option value="" disabled selected>Pilih Jenis Bank/e-Wallet</option>
                <option value="Dana">Dana</option>
                <option value="Gopay">Gopay</option>
                <option value="ShopeePay">ShopeePay</option>
                <option value="Bank BRI">Bank BRI</option>
                <option value="Bank BCA">Bank BCA</option>
                <option value="Bank Mandiri">Bank Mandiri</option>
                <option value="Bank 9 Jambi">Bank 9 Jambi</option>

              </select>
          </div>

          <hr />

          <div class="form-group">
            <label for="inputEmail">Bukti Donasi</label>
            <input type="file" class="form-control" id="inputFile" name="bukti_donasi" placeholder="Masukkan File Foto" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required />
          </div>
  
          <!-- Start Input Remark -->
          <div class="form-group">
            <label for="textAreaRemark">Catatan</label>
            <textarea class="form-control" name="catatan" id="textAreaRemark" rows="2" placeholder=""></textarea>
          </div>
          <!-- End Input Remark -->
  
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
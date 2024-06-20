<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALAMAN UTAMA</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Poppins', sans-serif !important;
            margin: 0;
            padding: 0;
            background-color: #FBFCFF;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: start;
            min-height: 100vh;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            background: white;
            border-bottom: 1px solid #E4E4E4;
            padding: 20px;
            box-shadow: 0px 4px 6px -4px rgba(0, 0, 0, 0.1);
            margin: 20px 0;
        
        }

        .header {
            font-size: 24px;
            font-weight: 700;
            color: #4A4A4A;
            margin-bottom: 20px;
            text-align: center;
        }

        .section {
            margin-bottom: 30px;
            display: flex;
            align-items: flex-start;
        }

        .section-icon {
            width: 40px;
            height: 40px;
            background-color: #10A8E5;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 16px;
            font-weight: bold;
            margin-right: 20px;
            flex-shrink: 0;
        }

        .section-content {
            flex: 1;
        }

        .section-content h2 {
            font-size: 18px;
            font-weight: 700;
            color: #4A4A4A;
            margin: 0 0 8px 0;
        }

        .section-content p {
            font-size: 14px;
            color: #4A4A4A;
            line-height: 1.6;
        }

        .tips-section {
            background: linear-gradient(180deg, #FBFCFF 40%, #E8EEFB 100%);
            padding: 20px;
            margin-top: 30px;
            box-shadow: 0px 4px 6px -4px rgba(0, 0, 0, 0.1);
            width: 100%;
        }

        .tips-section h2 {
            font-size: 24px;
            font-weight: 700;
            color: #4A4A4A;
            margin-bottom: 10px;
            text-align: center;
        }

        .tip {
            background: white;
            box-shadow: 0px 4px 6px -4px rgba(0, 0, 0, 0.1);
            padding: 15px;
            margin: 10px 0;
            border-radius: 8px;
            display: flex;
            align-items: flex-start;
        }

        .tip-icon {
            width: 50px;
            height: 50px;
            background-color: #10A8E5;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            margin-right: 15px;
            color: white;
            flex-shrink: 0;
        }

        .tip-content {
            flex: 1;
        }

        .tip-content h3 {
            font-size: 16px;
            font-weight: 700;
            color: #4A4A4A;
            margin: 0 0 5px 0;
        }

        .tip-content p {
            font-size: 14px;
            color: #4A4A4A;
            margin: 0;
        }

        .intro-section {
            width: 100%;
            padding: 40px 20px;
            background-color: #EAEFFB;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
        }

        .intro-section img {
            width: 50%;
            margin-bottom: 20px;
        }

        .intro-section p {
            margin: 0 0 10px 0;
        }

        .intro-section button {
            width: 80%;
            max-width: 300px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
  <div class="tips-section">
        <div class="mt-1">
            <div class="">
              <button type="button" class="btn btn-primary"><a class="list-group-item text-white" href="login-admin">Login Admin</a></button>
            </div>
        </div>
      </div>
    <div class="intro-section">
        <img src="assets/logo-full.png" class="" alt="Logo MISIDOSI" >
        <p class="fw-bold fs-4">Berdonasi Bersama MISIDOSI</p>
        <p>Di MISIDOSI Banyak Mahasiswa Yang Berdonasi ke Segala Jenis Galang Dana Tiap Harinya</p>
        <button type="button" class="btn btn-primary"><a class="list-group-item text-white" href="beranda-donatur">Ayo Berdonasi Sekarang</a></button>
    </div>

    <div class="container w-100">
        <div class="header ">Cara galang dana di MISIDOSI</div>

        <div class="section">
            <div class="section-icon">1</div>
            <div class="section-content">
                <h2>Pilih jenis galang dana</h2>
                <p>Galang dana di MISIDOSI ada 2 jenis, yaitu galang dana kebutuhan medis dan non-medis.</p>
            </div>
        </div>

        <div class="section">
            <div class="section-icon">2</div>
            <div class="section-content">
                <h2>Isi form pembuatan galang dana</h2>
                <p>Isi form secara lengkap dengan mengikuti instruksi yang diberikan.</p>
            </div>
        </div>

        <div class="section">
            <div class="section-icon">3</div>
            <div class="section-content">
                <h2>Verifikasi galang dana kamu</h2>
                <p>Lakukan verifikasi identitas dan dokumen medis (khusus galang dana medis)</p>
            </div>
        </div>
    </div>

    <div class="tips-section">
        <h2>Tips Berdonasi</h2>
        <div class="tip">
            <div class="tip-icon">✓</div>
            <div class="tip-content">
                <h3>Verifikasi identitas diri sebagai Pendonatur</h3>
                <p>Lakukan verifikasi agar galang danamu lebih meyakinkan Mahasiswa lain untuk berdonasi.</p>
            </div>
        </div>
        <div class="tip">
            <div class="tip-icon">✓</div>
            <div class="tip-content">
                <h3>Berikan update perkembangan</h3>
                <p>Update secara berkala agar donatur mengetahui bagaimana dana mereka digunakan.</p>
            </div>
        </div>
        <div class="tip">
            <div class="tip-icon">✓</div>
            <div class="tip-content">
                <h3>Transparansi dalam pengelolaan dana</h3>
                <p>Pastikan semua penggunaan dana dapat dipertanggungjawabkan secara terbuka.</p>
            </div>
        </div>
    </div>

    <div class="intro-section bg-primary">
      <p class="fw-bold fs-4 text-white">Sudah Tahu Tata Caranya, Kan?</p>
      <p class="text-white">Yuk, Berdonasi, dana kamu dapat membantu banyak orang</p>
      <button type="button" class="btn bg-white"><a class="list-group-item text-dark" href="beranda-donatur">Ayo Berdonasi Sekarang</a></button>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

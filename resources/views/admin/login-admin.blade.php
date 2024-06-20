<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif !important;
            background-image: url('assets/bg-login.jpg');
            background-position: center;
            background-size: cover;
        }
        #login-form {
            background-color: rgb(255, 255, 255);
            backdrop-filter: blur(5px);
        }

        .border {
            border: 5px solid grey;
            border-radius: 10%;
            box-shadow: 1px 1px 100px rgb(255, 255, 255);
        }

    </style>
</head>
<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <h2 class="mb-2 text-center text-white fw-bold">Selamat Datang, Admin MISIDOSI^_^</h2><br>
                    <div class="card bg-dark text-white border bg-transparent" style="backdrop-filter: blur(20px);" id="login-form">
                        <div class="card-body p-4 text-center">
                            <div class="mb-md- mt-md-4 pb-5">
                                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>

                                @if(session('error'))
                                <div class="alert alert-danger">
                                    <b>Opps!</b> {{ session('error') }}
                                </div>
                                @endif

                                <form method="POST" action="{{ route('actionlogin') }}">
                                    @csrf
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="typeEmailX">Email</label>
                                        <input type="email" id="typeEmailX" class="form-control form-control-lg" placeholder="Email" name="email" required/>
                                    </div>
        
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="typePasswordX">Password</label>
                                        <input type="password" id="typePasswordX" class="form-control form-control-lg" placeholder="Password" name="password" required/>
                                    </div>
        
                                    <button type="submit" class="btn btn-outline-light btn-lg px-5">Log In</button>
                                </form>
        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Login PathFinder</title>

    <style>
        body {
            /* Path ke gambar Login.png di folder images */
            background-image: url('/images/Login.png');
            background-size: cover;
            /* Menyesuaikan ukuran gambar agar menutupi seluruh background body */
            /* Properti lainnya sesuai kebutuhan desain */
            margin: 0;
        }

        .layout {
            display: flex;
        }

        .container {
            background-color: #fff;
            display: grid;
            place-items: center;
            /* Menengahkan baik secara horizontal maupun vertikal */
            height: 100vh;
        }

        .container2 {
            width: 200vh;
            height: 100vh;
        }
    </style>

</head>

<body>
    @if ($errors->has('email'))
    <div class="alert alert-danger">
        {{ $errors->first('email') }}
    </div>
    @endif

    @if ($errors->has('succes'))
    <div class="alert alert-succes">
        {{ $errors->first('succes') }}
    </div>
    @endif
    <div class=layout>
        <div class="container">
            <img class="logo" src="{{ asset('images/LogoLogin.png') }}" alt="Logo PathFinder" style="width: 200px; margin-top: 10px; margin-bottom: 0px; color: #117466;">
            <!-- Properti color: #117466; untuk mengubah warna font pada gambar -->
            <div class="w-50 mx-auto border rounded px-3 py-3 mt-5" style="color: #117466;">
                <!-- Properti color: #117466; untuk mengubah warna font pada div -->
                <h1 class="text-center">Login</h1>

                <form action="/sesi/login" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="idPengguna" style="color: #117466;">Username</label>
                        <!-- Properti color: #117466; untuk mengubah warna font pada label -->
                        <input type="text" value="{{ Session::get('idPengguna') }}" name="idPengguna" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password" style="color: #117466;">Password</label>
                        <!-- Properti color: #117466; untuk mengubah warna font pada label -->
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <button name="submit" type="submit" class="btn btn-primary btn-block" style="background-color: #117466;">Login</button>
                    <!-- Properti background-color: #117466; untuk mengubah warna latar belakang button -->
                </form>
            </div>
            <br>
            <div class="text-center" style="color: #117466;">
                <!-- Properti color: #117466; untuk mengubah warna font pada div -->
                Belum memiliki akun?
                <a href="/sesi/register">Register</a>
                <!-- Properti color: #117466; untuk mengubah warna font pada link -->
            </div>
        </div>


        <div class="container2"></div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
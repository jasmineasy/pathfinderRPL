<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>

    <style>
        body {
            /* Path ke gambar Login.png di folder images */
            background-image: url('{{ asset('images/Login.png')}}');
            background-size: cover;
            /* Menyesuaikan ukuran gambar agar menutupi seluruh background body */
            /* Properti lainnya sesuai kebutuhan desain */
            margin: 0;
            /* Menghilangkan margin default body */
            /* Mengubah body menjadi Flex Container */
            /* Set tinggi body agar sesuai dengan tinggi layar */
        }

        .layout{
            display:flex;
        }

        .container{
            background-color: #fff;
            display: grid;
            place-items: center; /* Menengahkan baik secara horizontal maupun vertikal */
            height: 100vh;
        }
        .container2 {
            width: 200vh;
            height: 100vh;
        }

    </style>
</head>

<body>
    @if ($errors->has('error'))
    <div class="alert alert-danger">
        {{ $errors->first('error') }}
    </div>
    @endif

    @if ($errors->has('succes'))
    <div class="alert alert-succes">
        {{ $errors->first('succes') }}
    </div>
    @endif
    <div class="layout">
    <div class="container">
        <div class="w-50 mx-auto border rounded px-3 py-3 mt-5">
            <h1 class="text-center" style="color: #117466;">Register</h1>
            <form action="/sesi/create" method="POST">
                @csrf
                <div class="form-group">
                    <label for="namePengguna" style="color: #117466;">Nama Lengkap</label>
                    <input type="text" value="{{ Session::get('namePengguna') }}" name="namePengguna" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="idPengguna" style="color: #117466;">Username</label>
                    <input type="text" value="{{ Session::get('idPengguna') }}" name="idPengguna" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password" style="color: #117466;">Password</label>
                    <input type="password" name="password" class="form-control" required|min:6>
                </div>
                <div class="form-group">
                    <label for="repassword" style="color: #117466;">Retype Password</label>
                    <input type="password" name="repassword" class="form-control" required|min:6>
                </div>
                <button name="submit" type="submit" class="btn btn-primary btn-block" style="background-color: #117466;">Register</button>
            </form>
        </div>
        <br>
        <div class="text-center">
            Sudah memiliki akun?
            <a href="/">Login</a>
        </div>
    </div>

    <div class="container2"></div>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Sidebar Template</title>
  <!-- Boostrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    /* Reset default margin and padding */
    body,
    html {
      height: 100%;
      margin: 0;
      padding: 0;
    }


    /* Sidebar styling */
    .sidebar {
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      height: 100%;
      width: 250px;
      position: fixed;
      top: 0;
      left: 0;
      background-color: #58B4A7;
      border-top-right-radius: 20px;
      border-bottom-right-radius: 20px;
      color: white;
      overflow: hidden;
      padding-top: 70px;
    }

    /* Sidebar links styling */
    .sidebar a {
      text-decoration: none;
      color: black;
      display: block;
      padding: 10px;
      margin-bottom: 10px;
      background-color: #ffffff;
      border-radius: 10px;
      width: 80%;
      text-align: center;
      margin-left: 10%;
      /* Membuat jarak ke kiri agar berada di tengah */
      margin-right: 10%;
      /* Membuat jarak ke kanan agar berada di tengah */
    }

    .sidebar img {
      width: 20px;
      height: 20px;
      margin-right: 10px;
      /* Memberikan jarak antara gambar dan teks */
      vertical-align: middle;
      /* Mengatur posisi vertikal gambar agar sejajar dengan teks */
    }

    /* Log Out styling */
    .logout {
      border-radius: 0 0 20px 20px;
      text-align: center;
      padding: 10px;
      background-color: #ffffff;
      margin-top: auto;
      margin-bottom: 20px;
      width: 80%;
      margin-left: 10%;
      /* Membuat jarak ke kiri agar berada di tengah */
      margin-right: 10%;
      /* Membuat jarak ke kanan agar berada di tengah */
      border-radius: 10px;
    }

    /* Content styling */
    .content {
      margin-left: 250px;
      /* Lebar sidebar */
      padding: 20px;
      text-align: center;
    }

    /* Adjusted heading position */
    .content h2 {
      margin-top: 40px;
      /* Jarak dari atas */
      text-align: left;
      /* Posisi teks ke kiri */
    }

    .content p {
      margin-top: 10px;
      /* Jarak dari atas */
      text-align: left;
      /* Posisi teks ke kiri */
      color: #888888;
    }

    .content p {
      text-align: left;
      /* Posisi teks ke kiri */
    }

    /* Form styling */
    .form-container {
      background-color: #f9f9f9;
      padding: 20px;
      border-radius: 10px;
      text-align: left;
      width: 100%;
      /* Lebar form */
    }

    .form-group {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
    }

    .form-group label {
      font-weight: bold;
      width: 120px;
      /* Lebar label */
      flex-shrink: 0;
    }

    .form-group input {
      flex: 1;
      padding: 8px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    /* Button styling */
    .add-button {
      background-color: #58B4A7;
      color: white;
      border: none;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: block;
      font-size: 16px;
      margin: 10px auto;
      /* Posisi tengah tombol */
      border-radius: 5px;
      cursor: pointer;
    }

    /* Data Table styling */
    .data-table {
      margin-top: 40px;
    }

    .data-table table th,
    .data-table table td {
      text-align: center;
    }

    .app-name {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      width: 80%;
      /* Lebar agar sejajar dengan sidebar */
      margin-left: 10%;
      /* Mengatur posisi agar berada di tengah */
      margin-right: 10%;
    }

    .app-name img {
      height: 40px;
      /* Sesuaikan tinggi gambar */
      margin-right: 10px;
      /* Memberikan jarak antara gambar dan teks */
    }

    .app-name h5 {
      margin: 0;
      /* Menghilangkan margin default */
      color: white;
      /* Warna teks */
    }
  </style>
</head>

<body>
  <div class="sidebar">
    <div class="app-name">
      <img src="{{ asset('image/lucide_rocket.png') }}" alt="Rocket Icon">
      <h5>PathFinder</h5>
    </div>
    <a href="#">
      <img src="{{ asset('image/lucide_home.png') }}" alt="Settings Icon">
      Dashboard
    </a>
    <a href="#">
      <img src="{{ asset('image/lucide_flag.png') }}" alt="Settings Icon">
      Career Path
    </a>
    <a href="#">
      <img src="{{ asset('image/internship.png') }}" alt="Settings Icon">
      Internship Finder
    </a>
    <a href="#">
      <img src="{{ asset('image/lucide_award.png') }}" alt="Settings Icon">
      Course Finder
    </a>
    <a href="#">
      <img src="{{ asset('image/lucide_wrench.png') }}" alt="Settings Icon">
      Settings
    </a>
    <a href="#" class="mt-auto">
      <img src="{{ asset('image/lucide_log-out.png') }}" alt="Settings Icon">
      Log Out
    </a>
  </div>


  <div class="content">
    <!-- Konten halaman -->
    <h2>Course Information</h2>
    <p style="text-align: left">Fill in the fields according to valid course informations </p>
    <div class="form-container">


      <!-- Tambah Button
    <button class="add-button">Tambah</button> -->
      <!-- START FORM -->

      @if($errors->any())
      <div class="pt-3">
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $item)
            <li>{{$item}}</li>
            @endforeach
          </ul>
        </div>
      </div>

      @endif()

      <form action='{{url('kursus/'.$data->id_course)}}' method='post'>
        @csrf
        @method('PUT')
        <a href='{{url('kursus')}}' class="btn btn-primary">
          << KEMBALI</a>
            <div class="mb-3 row">
              <label for="internshipId" class="col-sm-2 col-form-label">ID:</label>
              <div class="col-sm-10">
                {{$data->id_course}}
              </div>
            </div>
            <div class="mb-3 row">
              <label for="internshipName" class="col-sm-2 col-form-label">Course Name:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name='course_name' value="{{$data->course_name}}" id="courseName">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="duration" class="col-sm-2 col-form-label">Duration:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name='durasi' value="{{$data->durasi}}" id="duration">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="rating" class="col-sm-2 col-form-label">Rating:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name='rating' value="{{$data->rating}}" id="rating">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="rating" class="col-sm-2 col-form-label">Topik:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name='topik' value="{{$data->topik}}" id="topik">
              </div>
            </div>
            <div class="mb-3 row">
              <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
              </div>
            </div>
      </form>
      <!-- AKHIR FORM -->



    </div>

    <!-- Bootstrap JS dan Popper.js (opsional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</body>

</html>
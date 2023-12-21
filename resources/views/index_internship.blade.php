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
    <a href="/careerPathAdmin">
      <img src="{{ asset('image/lucide_home.png') }}" alt="Settings Icon">
      Dashboard
    </a>
    <a href="/careerPathAdmin">
      <img src="{{ asset('image/lucide_flag.png') }}" alt="Settings Icon">
      Career Path
    </a>
    <a href="/internshipFinderAdmin">
      <img src="{{ asset('image/internship.png') }}" alt="Settings Icon">
      Internship Finder
    </a>
    <a href="/courseFinderAdmin">
      <img src="{{ asset('image/lucide_award.png') }}" alt="Settings Icon">
      Course Finder
    </a>
    <a href="#">
      <img src="{{ asset('image/lucide_wrench.png') }}" alt="Settings Icon">
      Settings
    </a>
    <a href="/sesi/logout" class="mt-auto">
      <img src="{{ asset('image/lucide_log-out.png') }}" alt="Settings Icon">
      Log Out
    </a>
  </div>



  <div class="content">
    <!-- Konten halaman -->
    <h2>Internship Information</h2>
    <p style="text-align: left">Fill in the fields according to valid internship informations </p>
    <div class="form-container">



      <!-- Tambah Button
    <button class="add-button">Tambah</button> -->

      <!-- START DATA -->
      <div class="data-table">
        @if(Session::has('success'))
        <div class="pt-3">
          <div class="alert alert-success">
            {{Session::get('success')}}
          </div>
        </div>

        @endif
        <!-- FORM PENCARIAN -->
        <form class="d-flex mb-2" action="{{url('magang')}}" method="get">
          <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
          <button class="btn btn-secondary" type="submit">Cari</button>
        </form>

        <!-- TOMBOL TAMBAH DATA -->
        <a href='{{url('magang/create')}}' class="btn btn-primary float-left mb-2">+ Tambah Data</a>

        <table class="table table-striped">
          <thead>
            <tr>
              <th class="col-md-1">ID</th>
              <th class="col-md-4">Perusahaan</th>
              <th class="col-md-2">Role</th>
              <th class="col-md-2">Durasi</th>
              <th class="col-md-2">Lokasi</th>
              <th class="col-md-2">Stream</th>
              <th class="col-md-2">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $item)
            <tr>
              <td>{{$item->id_internship}}</td>
              <td>{{$item->perusahaan}}</td>
              <td>{{$item->role}}</td>
              <td>{{$item->durasi}}</td>
              <td>{{$item->lokasi}}</td>
              <td>{{$item->stream}}</td>
              <td>
                <div class="btn-group" role="group">
                  <a href='{{url('magang/'.$item->id_internship.'/edit')}}' class="btn btn-warning btn-sm mr-1">Edit</a>
                  <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline' action="{{url('magang/'.$item->id_internship)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                  </form>
                </div>
              </td>
            </tr>
            @endforeach
            <!-- ... (Data Table Rows) ... -->
          </tbody>
        </table>



      </div>
      <!-- AKHIR DATA -->
    </div>

    <!-- Bootstrap JS dan Popper.js (opsional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</body>

</html>
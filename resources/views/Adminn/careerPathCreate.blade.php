<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarrerPath Admin</title>
    <link rel="stylesheet" href="{{ asset('css/careerPathAdmin.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
</head>

<body>

    <div class="left-sidebar">
        <!-- //*ganti href ke dashboard -->
        <div class="app-name" href="#">
            <img src="/images/lucide_rocket.png" alt="Rocket Icon">
            <h3>PathFinder.</h3>
        </div>

        <div class="options">
            <a href="#" class="dashboard">
                <img src="/images/lucide_home.png" alt="Settings Icon" class="dashboard-icon">
                Dashboard
            </a>

            <div class="mainSub2">
                <a href="/careerPathAdmin" class="mainSub">
                    <img src="/images/lucide_flag-triangle-right.png" alt="Settings Icon">
                    Career Path
                </a>
            </div>

            <a href="#">
                <img src="/images/internshipFinder.png" alt="Settings Icon">
                Internship Finder
            </a>
            <a href="/courseFinderAdmin">
                <img src="/images/lucide_award.png" alt="Settings Icon">
                Course Finder
            </a>
            <a href="#">
                <img src="/images/lucide_wrench.png" alt="Settings Icon">
                Settings
            </a>
            <a href="#" class="mt-auto">
                <img src="/images/lucide_log-out.png" alt="Settings Icon">
                Log Out
            </a>

        </div>
    </div>

    <div class="content">
        <div class="judul">
            <h1>Insert Career Path Information</h1>
            <img src="/images/redFlag.png" alt="bendera">
        </div>
        <h3>Fill in the fields according to valid information.</h3>

        <div class="formPengisian">
            <form action="{{ route('tambahKarir') }}" method="GET">
                @csrf <!-- Include the CSRF token -->

                <!-- Box 1: Dropdown -->
                <label for="dropdownBox" class="formLabel">Pilihan Stream Karir :</label>
                <select class="formDropdown" id="dropdownBox" name="stream">
                    <option value="DataScience">Data Science</option>
                    <option value="InteractiveMedia">Interactive Media</option>
                </select>

                <label for="id" class="formLabel">Id Data :</label>
                <input type="text" class="formTextInput" id="id" name="idKarir">

                <label for="nama" class="formLabel">Nama Karir :</label>
                <input type="text" class="formTextInput" id="nama" name="namaKarir">

                <label for="textInputBox2" class="formLabel">Level 1 :</label>
                <input type="text" class="formTextInput" id="textInputBox2" name="level1">

                <label for="textInputBox3" class="formLabel">Level 2 :</label>
                <input type="text" class="formTextInput" id="textInputBox3" name="level2">

                <label for="textInputBox4" class="formLabel">Level 3 :</label>
                <input type="text" class="formTextInput" id="textInputBox4" name="level3">

                <label for="textInputBox5" class="formLabel">Level 4 :</label>
                <input type="text" class="formTextInput" id="textInputBox5" name="level4">

                <label for="textInputBox6" class="formLabel">Level 5 :</label>
                <input type="text" class="formTextInput" id="textInputBox6" name="level5">

                <input type="submit" value="Tambahkan Path" class="submitButton">
            </form>

            <div id="gambar">
                <img src="/images/card.png" id="gambar1" alt="Gambar 1">
            </div>

        </div>

    </div>


</body>

</html>
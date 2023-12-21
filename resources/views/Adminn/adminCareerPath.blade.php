<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerPath Admin</title>
    <link rel="stylesheet" href="{{ asset('css/careerPathAdmin.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
</head>

<body>

    <div class="left-sidebar">
        <!-- //*ganti href ke dashboard -->
        <div class="app-name" href="/careerPathAdmin">
            <img src="/images/lucide_rocket.png" alt="Rocket Icon">
            <h3>PathFinder.</h3>
        </div>

        <div class="options">
            <a href="/careerPathAdmin" class="dashboard">
                <img src="/images/lucide_home.png" alt="Settings Icon" class="dashboard-icon">
                Dashboard
            </a>

            <div class="mainSub2">
                <a href="/careerPathAdmin" class="mainSub">
                    <img src="/images/lucide_flag-triangle-right.png" alt="Settings Icon">
                    Career Path
                </a>
            </div>

            <a href="/internshipFinderAdmin">
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
            <a href="/sesi/logout" class="mt-auto">
                <img src="/images/lucide_log-out.png" alt="Settings Icon">
                Log Out
            </a>

        </div>
    </div>

    <div class="content">
        <div class="judul">
            <h1>Career Path Information</h1>
            <img src="/images/redFlag.png" alt="bendera">
        </div>
        <h3>Let's work together as admins to build a better environment for our users.</h3>


        <div class="dataScience">
            <h4>Data Science</h4>

            <div class="dataChoices">
                @foreach($careers as $career)
                @if ($career->stream=="DataScience")
                <a href="/CareerPath/konten/{{$career->namaKarir}}/{{$career->idKarir}}">{{ $career->namaKarir }}</a>
                @endif
                @endforeach
            </div>
            
        </div>

        <div class="dataScience">
            <h4>Interactive Media</h4>

            <div class="dataChoices">
                @foreach($careers as $career)
                @if ($career->stream=="InteractiveMedia")
                <a href="/CareerPath/konten/{{$career->namaKarir}}/{{$career->idKarir}}">{{ $career->namaKarir }}</a>
                @endif
                @endforeach
            </div>
        </div>

        <div class="addPath">
            <a href="/CareerPath/CreateForm">
                <img src="/image/tambah.png" alt="tambah">
                <h3>Add Career Path</h3>
            </a>


        </div>

    </div>


</body>

</html>
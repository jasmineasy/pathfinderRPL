<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konten CarrerPath</title>
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
                <a href="/careerPath" class="mainSub">
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
            <h1>Career Path Information</h1>
            <img src="/images/redFlag.png" alt="bendera">
        </div>
        <h3>Let's work together as admins to build a better environment for our users.</h3>

        <div class="isi">
            <div class="headerIsi">
                <a>
                    <h1>{{ $namaKarir }}</h1>
                </a>    

            </div>

            @foreach($careers as $career)
            @if ($career->namaKarir==$namaKarir)
            <div class="sectionLevel">
                <a href="#" class="levels">
                    <h3>Level 1</h3>
                    {{ $career->level1 }}
                    <p>Details</p>
                </a>
                <a href="#" class="levels">
                    <h3>Level 2</h3>
                    {{ $career->level2 }}
                    <p>Details</p>

                </a>
                <a href="#" class="levels">
                    <h3>Level 3</h3>
                    {{ $career->level3 }}
                    <p>Details</p>

                </a>
                <a href="#" class="levels">
                    <h3>Level 4</h3>
                    {{ $career->level4 }}
                    <p>Details</p>

                </a>
                <a href="#" class="levels">
                    <h3>Level 5</h3>
                    {{ $career->level5 }}
                    <p>Details</p>

                </a>
            </div>



            @endif
            @endforeach
        </div>

    </div>


</body>

</html>
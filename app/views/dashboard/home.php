<!doctype html>
<html lang="en">

<head>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/fef9209b86.js" crossorigin="anonymous"></script>

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="<?= CSS; ?>/dashboard.css">

    <!-- Type JS -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>dashboard</title>
</head>

<body>

    <!-- Start Navbar -->

    <nav class="navbar navbar-expand-lg navbar-light bg-transparent border-bottom" data-aos="fade-right" data-aos-duration="2000">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-book-reader"></i>&nbsp;SiNolep</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-block btn-outline-danger" href="<?= BASEURL; ?>/auth/logout">SIGN OUT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron bg-transparent" data-aos="fade-right" data-aos-duration="2000">
        <h1 class="display-4 text-center text-danger"></h1>
    </div>

    <!-- End Navbar -->

    <!-- Start Informations Dashboard -->
    <div class="container info-wrapper rounded mb-3" data-aos="fade-down" data-aos-duration="2000">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item">Dashboard</li>
                <li class="breadcrumb-item active" aria-current="page"><a href="<?= $_SERVER['REQUEST_URI']; ?>">Home</a></li>
            </ol>
        </nav>
        <div class="row justify-content-center">
            <div class="col-lg-4 border d-flex align-items-center flex-column p-4">
                <img src="<?= IMAGES; ?>/user-profiles/user.png" width="150" alt="">
                <h2 class="text-dark pt-3"><?= $_SESSION['auth']['name']; ?></h2>
            </div>
            <div class="col-lg-8 bg-primary p-4 rounded-right">
                <table class="biodata" border="0">
                    <tr>
                        <td>Email : <?= $_SESSION['auth']['email']; ?></td>
                    </tr>
                    <tr>
                        <td>Token : <?= $_SESSION['auth']['token']; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-4" data-aos="fade-right" data-aos-duration="2000">
                <div class="card mb-3" style="width: 100%;">
                    <div class="card-header text-center bg-primary text-white">
                        Jadwal Kuliah
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Basis Data</li>
                        <li class="list-group-item">Sistem Operasi</li>
                        <li class="list-group-item">Jaringan Komputer</li>
                    </ul>
                </div>
                <div class="card mb-3" style="width: 100%;">
                    <div class="card-header text-center bg-primary text-white">
                        Daftar Tugas
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Basis Data</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8" data-aos="fade-left" data-aos-duration="2000">
                <div class="card text-center">
                    <div class="card-header bg-warning text-white">
                        Pengumuman
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Informations Dashboard -->





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script>
        AOS.init();

        var typed = new Typed('.display-4', {
            strings: ["Selamat Datang <br> <?= $_SESSION['auth']['name']; ?>", "Di Sistem Informasi <br> Online Pelajar"],
            typeSpeed: 150,
            loop: true,
            showCursor: false
        });
    </script>

</body>

</html>
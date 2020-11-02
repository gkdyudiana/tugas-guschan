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

    <title>Detail E-Book</title>
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
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASEURL; ?>/dashboard">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= BASEURL; ?>/dashboard/ebook">E-Book</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-block btn-outline-danger" href="<?= BASEURL; ?>/auth/logout">KELUAR</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- End Navbar -->

    <!-- Start Card -->
    <div class="container mt-5" data-aos="fade-down" data-aos-duration="2000">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item">Dashboard</li>
                <li class="breadcrumb-item active" aria-current="page"><a href="<?= $_SERVER['REQUEST_URI']; ?>">Detail E-Book</a></li>
            </ol>
        </nav>
        <div class="card mb-3" style="max-width: 100%;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="<?= $data['cover']; ?>" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h1 class="card-title"><?= $data['judul_buku']; ?></h1>
                        <h4 class="card-text"><?= $data['penulis_buku']; ?></h4>
                        <h5 class="card-text"><small class="text-muted"><?= $data['penerbit_buku'] . " (" . $data['tahun_terbit'] . ") "; ?></small></h5>
                        <a href="#" class="btn btn-success mt-2" style="border-radius: 0px !important;">Beli Rp. <?= $data['harga'] . ",00"; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" data-aos="fade-left" data-aos-duration="2000">
        <div class="row">
            <div class="col">
                <h6 class="text-dark mt-1">Deskripsi :</h6>
                <p class="mt-3" style="text-indent: 50px;text-align:justify;"><?= $data['deskripsi']; ?></p>
            </div>
        </div>
    </div>
    <!-- End Card -->

    <!-- Start Footer -->
    <div class="footer">
        <p class="text-secondary">&copy; 2020 - All Rights Reserved by Dichan</p>
    </div>
    <!-- End Footer -->



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
    <!-- Readmore JS -->
    <script src="<?= JS; ?>/readMoreJS.min.js"></script>

    <script>
        AOS.init();
    </script>

</body>

</html>
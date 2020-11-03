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

    <title>E-Book</title>
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

    <!-- Start Jumbotron -->
    <div class="jumbotron search-wrapper">
        <div class="container d-flex justify-content-center" data-aos="fade-down" data-aos-duration="2000">
            <form class=" form-inline">
                <input class="form-control mr-2 rounded-pill" style="width: 80% !important;" type="search" id="search" placeholder="Cari E-Book" aria-label="Search">
                <button class="btn btn-warning my-2 my-sm-0 rounded-pill" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </div>
    <!-- End Jumbotron -->


    <!-- Start Card -->
    <div class="container mt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item">Dashboard</li>
                <li class="breadcrumb-item active" aria-current="page"><a href="<?= $_SERVER['REQUEST_URI']; ?>">E-Book</a></li>
            </ol>
        </nav>
        <div class="row" data-aos="fade-up" data-aos-duration="2000" id="result">
            <?php
            foreach ($data as $row) :
            ?>
                <div class="col-lg-3 mb-3 d-flex justify-content-center">
                    <div class="card" style="width: 15rem;">
                        <img src="<?= $row['cover']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $row['judul_buku']; ?></h5>
                            <p class="card-text"><?= $row['penulis_buku']; ?></p>
                            <a href="<?= BASEURL; ?>/dashboard/detail_ebook?id=<?= Controller::secureUrl($row['id_buku'], 'e'); ?>" style="border-radius: 0px !important;" class="btn btn-primary btn-block"><i class="fas fa-info-circle"></i>&nbsp;detail</a>
                        </div>
                    </div>
                </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
    <!-- End Card -->

    <!-- Start Footer -->
    <div class="footer">
        <p class="text-secondary">&copy; 2020 - All Rights Reserved by SiNolep Team</p>
    </div>
    <!-- End Footer -->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
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

        $('#search').on('keyup', function() {
            $.ajax({
                url: '<?= BASEURL; ?>/dashboard/search_ebook?judul=' + $(this).val(),
                type: 'GET',
                success: function(data) {
                    $('#result').html(data);
                }
            });
        });
    </script>

</body>

</html>
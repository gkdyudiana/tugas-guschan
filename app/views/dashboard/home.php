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

    <title>Dashboard</title>
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
                        <a class="nav-link" href="<?= BASEURL; ?>/dashboard">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASEURL; ?>/dashboard/ebook">E-Book</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-block btn-outline-danger" href="<?= BASEURL; ?>/auth/logout">KELUAR</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron bg-transparent" data-aos="fade-right" data-aos-duration="2000">
        <h1 class="display-4 text-center text-dark"></h1>
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
                <a href="<?= BASEURL; ?>/dashboard/update" class="badge badge-pill badge-success p-2 mt-3"><i class="fas fa-edit"></i>&nbsp;ubah biodata</a>
                <h2 class="text-dark pt-2 text-center"><?= $_SESSION['auth']['name']; ?></h2>
            </div>
            <div class="col-lg-8 bg-primary p-4 rounded-right">
                <table class="biodata" border="0">
                    <tr>
                        <td>Nomor induk : <?= $data[0]['nomor_induk']; ?></td>
                    </tr>
                    <tr>
                        <td>Email : <?= $data[0]['email']; ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir : <?= $data[0]['birth_date']; ?></td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir : <?= $data[0]['birth_place']; ?></td>
                    </tr>
                    <tr>
                        <td>Jenis kelamin : <?= $data[0]['gender'] ?></td>
                    </tr>
                    <tr>
                        <td>Agama : <?= $data[0]['religion']; ?></td>
                    </tr>
                    <tr>
                        <td>Alamat : <?= $data[0]['address']; ?></td>
                    </tr>
                    <tr>
                        <td>No. Telp : <?= $data[0]['telp']; ?></td>
                    </tr>
                    <tr>
                        <td>Kelas : <?= $data[0]['kelas']; ?></td>
                    </tr>
                    <tr>
                        <td>Wali Kelas : <?= $data[4]['nama_guru']; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row mb-5" data-aos="fade-up-left" data-aos-duration="2000">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header bg-dark text-white text-center">
                        <i class="far fa-calendar"></i>&nbsp;Jadwal pelajaran
                    </div>
                    <div class="card-body overflow-auto">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Hari</th>
                                    <th scope="col">Jam</th>
                                    <th scope="col">Kode</th>
                                    <th scope="col">Mata Pelajaran</th>
                                    <th scope="col">Pengajar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($data[2] as $row) :
                                ?>
                                    <tr>
                                        <th scope="row"><?= $no; ?></th>
                                        <td><?= $row['hari']; ?></td>
                                        <td><?= $row['jam']; ?></td>
                                        <td><?= $row['mapel']; ?></td>
                                        <td><?= $row['nama_mapel']; ?></td>
                                        <td><?= $row['nama_guru']; ?></td>
                                    </tr>
                                <?php
                                    $no++;
                                endforeach
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4" data-aos="fade-right" data-aos-duration="2000">
                <div class="card mb-3" style="width: 100%;">
                    <div class="card-header text-center bg-primary text-white">
                        <i class="far fa-calendar-check"></i>&nbsp;Today
                    </div>
                    <ul class="list-group list-group-flush">
                        <?php foreach ($data[3] as $row) :
                        ?>
                            <li class="list-group-item"><?= $row['nama_mapel'] . " (" . $row['kelas'] . ")"; ?></li>
                        <?php endforeach;
                        ?>
                    </ul>
                </div>
                <div class="card mb-3" style="width: 100%;">
                    <div class="card-header text-center bg-primary text-white">
                        <i class="fas fa-tasks"></i>&nbsp;Tugas
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Basis Data</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8" data-aos="fade-left" data-aos-duration="2000">
                <div class="card">
                    <div class="card-header text-center bg-danger text-white">
                        <i class="fas fa-bullhorn"></i>&nbsp;Pengumuman
                    </div>
                    <div class="card-body">
                        <div class="card">
                            <div class="card">
                                <?php foreach ($data[1] as $row) : ?>
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $row['title'] ?></h5>
                                        <p class="card-text readmore"><?= $row['descriptions']; ?></p>
                                    </div>
                                    <div class="card-footer text-muted">
                                        <?= $row['date']; ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Informations Dashboard -->

    <!-- Start Footer -->
    <div class="footer">
        <p class="text-secondary">&copy; 2020 - All Rights Reserved by SiNolep Team</p>
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

        var typed = new Typed('.display-4', {
            strings: ["Selamat Datang <br> <?= $_SESSION['auth']['name']; ?>", "Di Sistem Informasi<br>Online Pelajar"],
            typeSpeed: 150,
            loop: true,
            showCursor: false
        });

        $readMoreJS.init({
            target: '.readmore',
            numOfWords: 10,
            toggle: true,
            moreLink: '<p class="badge badge-pill badge-dark p-2 float-right">Read more</p>',
            lessLink: '<p class="badge badge-pill badge-dark p-2 float-right">Read less</p>'
        });
    </script>

</body>

</html>
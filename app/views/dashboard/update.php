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

    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="<?= CSS; ?>/dashboard.css">

    <!-- Type JS -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Update Biodata</title>
</head>

<body>

    <!-- Messages -->
    <?php if (isset($_SESSION['success'])) { ?>
        <div class="flash-data" data-flashdata="<?= $_SESSION['success']; ?>"></div>
    <?php
        unset($_SESSION['success']);
    }
    ?>
    <!-- End Messages -->

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
                        <a class="nav-link" href="<?= BASEURL; ?>/dashboard">Home <span class="sr-only">(current)</span></a>
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

    <div class="jumbotron bg-transparent" data-aos="fade-up" data-aos-duration="2000">
        <h1 class="display-4 text-center text-dark">Update Biodata</h1>
    </div>

    <!-- End Navbar -->

    <!-- Start Form -->
    <div class="container mb-5" data-aos="fade-down" data-aos-duration="2000">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item">Dashboard</li>
                <li class="breadcrumb-item active" aria-current="page"><a href="<?= $_SERVER['REQUEST_URI']; ?>">Update</a></li>
            </ol>
        </nav>
        <form action="<?= BASEURL; ?>/dashboard/edit" method="POST" id="form-update">
            <input type="hidden" name="submit">
            <div class="form-group">
                <label for="nomor_induk">*Nomor Induk</label>
                <input type="text" name="nomor_induk" class="form-control" id="nomor_induk" value="<?= $data['nomor_induk']; ?>" aria-describedby="hint" readonly>
                <small id="hint" class="form-text text-danger">Nomor Induk tidak dapat diubah.</small>
            </div>
            <div class="form-group">
                <label for="nama">*Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" value="<?= $data['name']; ?>" aria-describedby="hint" readonly>
                <small id="hint" class="form-text text-danger">Nama tidak dapat diubah.</small>
            </div>
            <div class="form-group">
                <label for="email">*Email</label>
                <input type="email" class="form-control" name="email" id="email" value="<?= $data['email']; ?>" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">*Tanggal Lahir</label>
                <input type="date" class="form-control" name="tanggal_lahir" value="<?= $data['birth_date']; ?>" id="tanggal_lahir" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="tempat_lahir">*Tempat Lahir</label>
                <input type="text" class="form-control" name="tempat_lahir" value="<?= $data['birth_place']; ?>" id="tempat_lahir" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="agama">*Agama</label>
                <select class="form-control" id="agama" name="agama">
                    <?php if ($data['religion'] == 'hindu') : ?>
                        <option value="hindu" selected>Hindu</option>
                        <option value="islam">Islam</option>
                        <option value="buddha">Buddha</option>
                        <option value="katolik">Katolik</option>
                        <option value="protestan">Protestan</option>
                        <option value="konghucu">Konghucu</option>
                    <?php elseif ($data['religion'] == 'islam') : ?>
                        <option value="hindu">Hindu</option>
                        <option value="islam" selected>Islam</option>
                        <option value="buddha">Buddha</option>
                        <option value="katolik">Katolik</option>
                        <option value="protestan">Protestan</option>
                        <option value="konghucu">Konghucu</option>
                    <?php elseif ($data['religion'] == 'buddha') : ?>
                        <option value="hindu">Hindu</option>
                        <option value="islam">Islam</option>
                        <option value="buddha" selected>Buddha</option>
                        <option value="katolik">Katolik</option>
                        <option value="protestan">Protestan</option>
                        <option value="konghucu">Konghucu</option>
                    <?php elseif ($data['religion'] == 'katolik') : ?>
                        <option value="hindu">Hindu</option>
                        <option value="islam">Islam</option>
                        <option value="buddha">Buddha</option>
                        <option value="katolik" selected>Katolik</option>
                        <option value="protestan">Protestan</option>
                        <option value="konghucu">Konghucu</option>
                    <?php elseif ($data['religion'] == 'protestan') : ?>
                        <option value="hindu">Hindu</option>
                        <option value="islam">Islam</option>
                        <option value="buddha">Buddha</option>
                        <option value="katolik">Katolik</option>
                        <option value="protestan" selected>Protestan</option>
                        <option value="konghucu">Konghucu</option>
                    <?php elseif ($data['religion'] == 'konghucu') : ?>
                        <option value="hindu">Hindu</option>
                        <option value="islam">Islam</option>
                        <option value="buddha">Buddha</option>
                        <option value="katolik">Katolik</option>
                        <option value="protestan">Protestan</option>
                        <option value="konghucu" selected>Konghucu</option>
                    <?php else : ?>
                        <option value="hindu">Hindu</option>
                        <option value="islam">Islam</option>
                        <option value="buddha">Buddha</option>
                        <option value="katolik">Katolik</option>
                        <option value="protestan">Protestan</option>
                        <option value="konghucu">Konghucu</option>
                    <?php endif; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="gender">*Jenis kelamin</label>
                <select class="form-control" name="gender">
                    <?php if ($data['gender'] == 'laki-laki') : ?>
                        <option value="laki-laki" selected>Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                        <option value="other">Other</option>
                    <?php elseif ($data['gender'] == "perempuan") : ?>
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan" selected>Perempuan</option>
                        <option value="other">Other</option>
                    <?php elseif ($data['gender'] == "other") : ?>
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                        <option value="other" selected>Other</option>
                    <?php else : ?>
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                        <option value="other">Other</option>
                    <?php endif; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="telp">*No. Telp</label>
                <input type="number" class="form-control" name="telp" value="<?= $data['telp']; ?>" id="telp" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="address">*Alamat</label>
                <textarea class="form-control" name="address" id="address" rows="4"><?= $data['address']; ?></textarea>
            </div>
            <button type="submit" name="submit" id="btn-update" class="btn btn-dark btn-block btn-lg rounded-pill">Simpan</button>
        </form>
    </div>
    <!-- End Form -->





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

    <script>
        AOS.init();

        $('#btn-update').click(function(e) {
            e.preventDefault();
            const href = $('#form-update').attr('action');

            Swal.fire({
                title: 'Simpan Perubahan?',
                showDenyButton: true,
                showCancelButton: false,
                confirmButtonText: `Simpan`,
                denyButtonText: `Batal`,
            }).then((result) => {
                if (result.isConfirmed) {
                    var data = $('#form-update').serializeArray();
                    $.ajax({
                        url: href,
                        type: "POST",
                        data: data,
                        success: function(data) {
                            if (data == "success") {
                                Swal.fire({
                                    position: 'center',
                                    icon: 'success',
                                    showConfirmButton: true,
                                    text: 'Data berhasil diperbaharui',
                                }).then((result) => {
                                    if (result.value) {
                                        window.location.reload();
                                    }
                                })
                            } else {
                                Swal.fire({
                                    position: 'top-end',
                                    icon: 'error',
                                    showConfirmButton: true,
                                    text: 'Data Gagal diperbaharui',
                                }).then((result) => {
                                    if (result.value) {
                                        window.location.reload();
                                    }
                                })
                            }
                        }
                    });
                }
            })
        });
    </script>

</body>

</html>
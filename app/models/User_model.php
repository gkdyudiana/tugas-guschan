<?php

class User_model extends Controller
{
    public function getUserById($id)
    {
        $query = $this->dbh->prepare("SELECT * FROM user WHERE nomor_induk=:nik");
        $query->execute([
            'nik' => htmlentities($id)
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function updateUser($data, $id)
    {
        try {
            // error_reporting(0);
            $query = $this->dbh->prepare("UPDATE user SET email=:eml, birth_date=:bd, religion=:rg, birth_place=:bp, gender=:gd, address=:ad, telp=:tp WHERE nomor_induk=:ni");
            $query->execute([
                'eml' => $data['email'],
                'bd' => $data['tanggal_lahir'],
                'rg' => $data['agama'],
                'bp' => $data['tempat_lahir'],
                'gd' => $data['gender'],
                'ad' => $data['address'],
                'tp' => $data['telp'],
                'ni' => $id
            ]);
            echo "success";
        } catch (Exception $e) {
            echo "error";
        }
    }

    public function getPengumuman()
    {
        $query = $this->dbh->prepare("SELECT * FROM pengumuman");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getJadwal($kelas)
    {
        // $query = $this->dbh->prepare("SELECT * FROM jadwal INNER JOIN mapel ON jadwal.mapel = mapel.id_mapel WHERE kelas=:kl");
        $query = $this->dbh->prepare("SELECT * FROM jadwal INNER JOIN mapel ON jadwal.mapel = mapel.id_mapel INNER JOIN guru ON guru.nip = mapel.guru_pengajar WHERE kelas=:kl");
        $query->execute(['kl' => $kelas]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getWali($kelas)
    {
        $query = $this->dbh->prepare("SELECT * FROM guru INNER JOIN kelas ON guru.nip = kelas.wali_kelas WHERE id_kelas=:kl");
        $query->execute(['kl' => $kelas]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function getToday($kelas)
    {
        date_default_timezone_set("Asia/Makassar");
        $today = date("l");

        if ($today == "Monday") {
            $today = "Senin";
        } elseif ($today == "Tuesday") {
            $today = "Selasa";
        } elseif ($today == "Wednesday") {
            $today = "Rabu";
        } elseif ($today == "Thursday") {
            $today = "Kamis";
        } elseif ($today == "Friday") {
            $today = "Jumat";
        } elseif ($today == "Saturday") {
            $today = "Sabtu";
        } else {
            $today = "Minggu";
        }

        $query = $this->dbh->prepare("SELECT * FROM jadwal INNER JOIN mapel ON jadwal.mapel = mapel.id_mapel WHERE kelas=:kl AND hari=:hr");
        $query->execute([
            'kl' => $kelas,
            'hr' => $today
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getBook()
    {
        $query = $this->dbh->prepare("SELECT * FROM ebook");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getDetailBook($id)
    {
        $id = Controller::secureUrl($id, 'd');
        $query = $this->dbh->prepare("SELECT * FROM ebook WHERE id_buku=:id");
        $query->execute([
            'id' => $id
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
}

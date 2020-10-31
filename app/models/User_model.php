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
}

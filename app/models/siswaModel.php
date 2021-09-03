<?php

class siswaModel
{
    private $table = 'siswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllSiswa()
    {
        $this->db->query("SELECT * FROM " . $this->table . "");
        return $this->db->resultSet();
    }

    public function getSiswaByNisn($nisn)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE nisn=:nisn');
        $this->db->bind('nisn', $nisn);
        return $this->db->single();
    }

    public function insertSiswa($data)
    {
        $this->db->query("INSERT INTO siswa (nisn, nis, nama, id_kelas, alamat, no_telp, id_spp) VALUES(:nisn, :nis, :nama, :id_kelas, :alamat, :no_telp, :id_spp)");
        $this->db->bind('nisn', $data['nisn']);
        $this->db->bind('nis', $data['nis']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('id_kelas', $data['id_kelas']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('no_telp', $data['no_telp']);
        $this->db->bind('id_spp', $data['id_spp']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateSiswa($data)
    {
        $this->db->query("UPDATE siswa SET nis=:nis, nama=:nama, id_kelas=:id_kelas, alamat=:alamat, no_telp=:no_telp, id_spp=:id_spp WHERE nisn=:nisn");
        $this->db->bind('nisn', $data['nisn']);
        $this->db->bind('nis', $data['nis']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('id_kelas', $data['id_kelas']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('no_telp', $data['no_telp']);
        $this->db->bind('id_spp', $data['id_spp']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteSiswa($nisn)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE nisn=:nisn');
        $this->db->bind('nisn', $nisn);
        $this->db->execute();

        return $this->db->rowCount();
    }
}

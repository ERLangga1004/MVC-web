<?php

class Penerbit_model {
    private $table  = 'table_penerbit';
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getAllPenerbit(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getPenerbitById($id_penerbit){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_penerbit = :id_penerbit');
        $this->db->bind('id_penerbit', $id_penerbit);
        return $this->db->single();
    }

    public function tambahDataPenerbit($data){
        $query = "INSERT INTO table_penerbit 
                    VALUES 
                    (:id_penerbit, :nama, :alamat, :kota, :telepon)";

        $this->db->query($query);
        $this->db->bind('id_penerbit', $data['id_penerbit']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('kota', $data['kota']);
        $this->db->bind('telepon', $data['telepon']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusPenerbitById($id_penerbit){
        $query = "DELETE FROM table_penerbit WHERE id_penerbit = :id_penerbit";
        $this->db->query($query);
        $this->db->bind("id_penerbit", $id_penerbit);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahPenerbitBuku($data){
        $query = "UPDATE table_penerbit SET
                    id_penerbit = :id_penerbit,
                    nama = :nama,
                    alamat = :alamat,
                    kota = :kota,
                    telepon = :telepon
                  WHERE id_penerbit = :id_penerbit";

        $this->db->query($query);
        $this->db->bind('id_penerbit', $data['id_penerbit']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('kota', $data['kota']);
        $this->db->bind('telepon', $data['telepon']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataPenerbit($keyword){
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM table_penerbit WHERE LOWER(nama_buku) LIKE LOWER (:keyword)";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();

    }
}
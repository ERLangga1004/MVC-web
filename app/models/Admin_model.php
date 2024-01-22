<?php

class Admin_model {
    private $table  = 'table_buku';
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getAllBuku(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getBukuById($id_buku){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_buku = :id_buku');
        $this->db->bind('id_buku', $id_buku);
        return $this->db->single();
    }

    public function tambahDataBuku($data){
        $query = "INSERT INTO table_buku 
                    VALUES 
                    (:id_buku, :kategori, :nama_buku, :harga, :stok, :penerbit)";

        $this->db->query($query);
        $this->db->bind('id_buku', $data['id_buku']);
        $this->db->bind('kategori', $data['kategori']);
        $this->db->bind('nama_buku', $data['nama_buku']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('stok', $data['stok']);
        $this->db->bind('penerbit', $data['penerbit']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataBukuById($id_buku){
        $query = "DELETE FROM table_buku WHERE id_buku = :id_buku";
        $this->db->query($query);
        $this->db->bind("id_buku", $id_buku);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataBuku($data){
        $query = "UPDATE table_buku SET
                    id_buku = :id_buku,
                    kategori = :kategori,
                    nama_buku = :nama_buku,
                    harga = :harga,
                    stok = :stok,
                    penerbit = :penerbit
                  WHERE id_buku = :id_buku";

        $this->db->query($query);
        $this->db->bind('id_buku', $data['id_buku']);
        $this->db->bind('kategori', $data['kategori']);
        $this->db->bind('nama_buku', $data['nama_buku']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('stok', $data['stok']);
        $this->db->bind('penerbit', $data['penerbit']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataBuku($keyword){
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM table_buku WHERE LOWER(nama_buku) LIKE LOWER (:keyword)";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();

    }
}
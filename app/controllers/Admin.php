<?php

class Admin extends Controller{
    public function index(){
        $data['judul'] = 'Daftar Buku';
        $data['bk'] = $this->model('admin_model')->getAllBuku();
        $data['pb'] = $this->model('penerbit_model')->getAllPenerbit();
        $this->view('admin/index',$data);
        $this->view('templates/footer');
    }


    public function detail($id_buku){
        $data['judul'] = 'Detail Buku';
        $data['bk'] = $this->model('admin_model')->getBukuById($id_buku);
        $this->view('templates/header', $data);
        $this->view('admin/detail',$data);
        $this->view('templates/footer');
    }
    public function detail1($id_penerbit){
        $data['judul'] = 'Detail Buku';
        $data['pb'] = $this->model('penerbit_model')->getPenerbitById($id_penerbit);
        $this->view('templates/header', $data);
        $this->view('admin/detail1',$data);
        $this->view('templates/footer');
    }

    public function tambah(){
        if($this->model('admin_model')->tambahDataBuku($_POST) > 0 ){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/admin');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/admin');
            exit;
        }
    }

    public function tambah1(){
        if($this->model('penerbit_model')->tambahDataPenerbit($_POST) > 0 ){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/admin');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/admin');
            exit;
        }
    }

    public function hapus($id_buku){
        if($this->model('admin_model')->hapusDataBukuById($id_buku) > 0 ){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/admin');
            exit;
        }else{
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/admin');
            exit;
        }
    }

    public function hapus1($id_penerbit){
        if($this->model('penerbit_Model')->hapusPenerbitById($id_penerbit) > 0 ){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/admin');
            exit;
        }else{
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/admin');
            exit;
        }
    }

    public function getedit(){
        echo json_encode($this->model('admin_model')->getBukuById($_POST['id_buku']));
    }

    public function getedit1(){
        echo json_encode($this->model('penerbit_model')->getPenerbitById($_POST['id_penerbit']));
    }

    public function ubah(){
        if($this->model('admin_model')->ubahDataBuku($_POST) > 0 ){
            Flasher::setFlash('berhasil', 'diedit', 'success');
            header('Location: ' . BASEURL . '/admin');
            exit;
        }else{
            Flasher::setFlash('gagal', 'diedit', 'danger');
            header('Location: ' . BASEURL . '/admin');
            exit;
        }
    }

    public function ubah1(){
        if($this->model('penerbit_model')->ubahPenerbitBuku($_POST) > 0 ){
            Flasher::setFlash('berhasil', 'diedit', 'success');
            header('Location: ' . BASEURL . '/admin');
            exit;
        }else{
            Flasher::setFlash('gagal', 'diedit', 'danger');
            header('Location: ' . BASEURL . '/admin');
            exit;
        }
    }

    public function cari(){
        $keyword = $_POST['keyword'];
        $data['judul'] = 'Cari Buku';
        $data['bk'] = $this->model('admin_model')->cariDataBuku($keyword);
        $this->view('admin/index',$data);
        $this->view('templates/footer');
    }
}
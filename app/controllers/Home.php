<?php

class Home extends Controller{
    public function index(){
        $data['judul'] = 'Home';
        $data['bk'] = $this->model('admin_model')->getAllBuku();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }

    public function list($id_buku){
        $data['judul'] = 'Daftar Buku';
        $data['bk'] = $this->model('admin_model')->getBukuById($id_buku);
        $this->view('templates/header', $data);
        $this->view('home/index',$data);
        $this->view('templates/footer');
    }

    public function cari(){
        $keyword = $_POST['keyword'];
        $data['judul'] = 'Cari Buku';
        $data['bk'] = $this->model('admin_model')->cariDataBuku($keyword);
        $this->view('templates/header', $data);
        $this->view('home/cari',$data);
        $this->view('templates/footer');
    }
}
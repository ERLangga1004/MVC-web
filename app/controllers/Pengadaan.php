<?php

class Pengadaan extends Controller{
    public function index(){
        $data['judul'] = 'Pengadaan';
        $data['pb'] = $this->model('penerbit_model')->getAllPenerbit();
        $this->view('templates/header',$data);
        $this->view('pengadaan/index',$data);
        $this->view('templates/footer');
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    public function index() {
        $this->load->model('mahasiswa_model', 'mhs01') ;
        $this->mhs01->id=1 ;
        $this->mhs01->nama='Yessica Tamara' ;
        $this->mhs01->gender='P' ;
        $this->mhs01->ipk = 3.80 ;

        $this->load->model('mahasiswa_model', 'mhs02') ;
        $this->mhs02->id=2 ;
        $this->mhs02->nama='Angelina Christy' ;
        $this->mhs02->gender='P' ;
        $this->mhs02->ipk = 3.50 ;

        $list_mhs = [$this->mhs01, $this->mhs02] ; 

        $data['mahasiswa1']=$this->mhs01 ;
        $data['list_mahasiswa']=$list_mhs ;

        $this->load->view('layout/header') ;
        $this->load->view('layout/sidebar') ;
        $this->load->view('mahasiswa/index', $data) ;
        $this->load->view('layout/footer') ;
    }
    public function create(){
        $data['judul'] = 'Form Kelola Mahasiswa' ;
        $this->load->view('layout/header') ;
        $this->load->view('layout/sidebar') ;
        $this->load->view('mahasiswa/create', $data) ;
        $this->load->view('layout/footer') ;
    }

    public function save(){
        $this->load->model('mahasiswa_model', 'mhs01') ;

        $this->mhs01->nim = $this->input->post('nim');
        $this->mhs01->nama = $this->input->post('nama');
        $this->mhs01-> gender = $this->input->post('gen');
        $this->mhs01->tmpLahir = $this->input->post('temptLahir');
        $this->mhs01->tglLahir = $this->input->post('tgl');
        $this->mhs01->prodi = $this->input->post('prodi');
        $this->mhs01-> ipk = $this->input->post('ipk');
 
        // die(print_r($this->mhs01)) ;
        $data['mhs01'] = $this->mhs01 ;
        $this->load->view('layout/header') ;
        $this->load->view('layout/sidebar') ;
        $this->load->view('mahasiswa/view', $data) ;
        $this->load->view('layout/footer') ;
    }
}
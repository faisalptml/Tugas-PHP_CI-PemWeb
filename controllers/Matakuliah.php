<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {

    public function index(){
        $this->load->model('matakuliah_model', 'matkul1') ;
        $this->matkul1->nama='Komunikasi Efektif' ;
        $this->matkul1->sks= 2 ;

        $this->load->model('matakuliah_model', 'matkul2') ;
        $this->matkul2->nama='Jaringan Komputer' ;
        $this->matkul2->sks= 3 ;

        $this->load->model('matakuliah_model', 'matkul3') ;
        $this->matkul3->nama='Basis Data' ;
        $this->matkul3->sks= 4 ;

        $this->load->model('matakuliah_model', 'matkul4') ;
        $this->matkul4->nama='Pemrograman Web 2' ;
        $this->matkul4->sks= 3 ;

        $this->load->model('matakuliah_model', 'matkul5') ;
        $this->matkul5->nama='User Interface & User Experience' ;
        $this->matkul5->sks= 3 ;

        $this->load->model('matakuliah_model', 'matkul6') ;
        $this->matkul6->nama='Pancasila dan Pendidikan Kewarganegaraan' ;
        $this->matkul6->sks= 2 ;

        $this->load->model('matakuliah_model', 'matkul7') ;
        $this->matkul7->nama='Bahasa Inggris' ;
        $this->matkul7->sks= 2 ;

        $this->load->model('matakuliah_model', 'matkul8') ;
        $this->matkul8->nama='Statistik dan Probabilitas' ;
        $this->matkul8->sks= 2 ;

        $list_matkul = [$this->matkul1, $this->matkul2, $this->matkul3, $this->matkul4, $this->matkul5, $this->matkul6, $this->matkul7, $this->matkul8] ; 

        $data['matkul1']=$this->matkul1 ;
        $data['list_dosen']=$list_matkul ;

        $this->load->view('layout/header') ;
        $this->load->view('layout/sidebar') ;
        $this->load->view('matakuliah/index', $data) ;
        $this->load->view('layout/footer') ;
    }
}
?>
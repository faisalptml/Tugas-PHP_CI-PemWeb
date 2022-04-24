<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

    public function index(){
        $this->load->model('dosen_model', 'dsn1') ;
        $this->dsn1->nama='Budi Susanto' ;
        $this->dsn1->pendidikan='S.Kom' ;
        $this->dsn1->prodi = 'Dasar Pemrograman' ;

        $this->load->model('dosen_model', 'dsn2') ;
        $this->dsn2->nama='Susi Susanti' ;
        $this->dsn2->pendidikan='S.Sos' ;
        $this->dsn2->prodi = 'Komunikasi' ;

        $this->load->model('dosen_model', 'dsn3') ;
        $this->dsn3->nama='Rangga Pamungkas' ;
        $this->dsn3->pendidikan='S.Ds' ;
        $this->dsn3->prodi = 'Desain' ;

        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3] ; 

        $data['dosen1']=$this->dsn1 ;
        $data['list_dosen']=$list_dsn ;

        $this->load->view('layout/header') ;
        $this->load->view('layout/sidebar') ;
        $this->load->view('dosen/index', $data) ;
        $this->load->view('layout/footer') ;
    }
}
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

    public function index(){
        // $this->dsn1->nama='Budi Susanto' ;
        // $this->dsn1->pendidikan='S.Kom' ;
        // $this->dsn1->prodi = 'Dasar Pemrograman' ;

        // $this->load->model('dosen_model', 'dsn2') ;
        // $this->dsn2->nama='Susi Susanti' ;
        // $this->dsn2->pendidikan='S.Sos' ;
        // $this->dsn2->prodi = 'Komunikasi' ;

        // $this->load->model('dosen_model', 'dsn3') ;
        // $this->dsn3->nama='Rangga Pamungkas' ;
        // $this->dsn3->pendidikan='S.Ds' ;
        // $this->dsn3->prodi = 'Desain' ;

        // $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3] ; 

        // $data['dosen1']=$this->dsn1 ;
        // $data['list_dosen']=$list_dsn ;

        $this->load->model('dosen_model', 'dosen') ;

        $data['list_dosen']=$this->dosen->getAll() ;

        $this->load->view('layout/header') ;
        $this->load->view('layout/sidebar') ;
        $this->load->view('dosen/index', $data) ;
        $this->load->view('layout/footer') ;
    }

    public function view(){
        $nidn = $this->input->get('id');
        $this->load->model('dosen_model', 'dosen');
        $data['dsn']=$this->dosen->findById($nidn);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/view',$data);
        $this->load->view('layout/footer');
    }

    public function create(){
        $data['judul'] = 'Form Kelola Dosen' ;
        $this->load->view('layout/header') ;
        $this->load->view('layout/sidebar') ;
        $this->load->view('dosen/create', $data) ;
        $this->load->view('layout/footer') ;
    }

    public function save(){
        $this->load->model('dosen_model', 'dosen') ;

    $nidn = $this->input->post('nidn');
    $nama = $this->input->post('nama');
    $gender = $this->input->post('gender');
    $tgl_lahir = $this->input->post('tgl_lahir');
    $tmp_lahir = $this->input->post('tmp_lahir');
    $pendidikan_akhir = $this->input->post('pendidikan_akhir');
    $prodi_kode = $this->input->post('prodi_kode');
    $_idedit = $this->input->post('idedit') ;

    $dataDosen[]=$nidn ;
    $dataDosen[]=$nama ;
    $dataDosen[]=$gender ;
    $dataDosen[]=$tgl_lahir ;
    $dataDosen[]=$tmp_lahir ;
    $dataDosen[]=$pendidikan_akhir ;
    $dataDosen[]=$prodi_kode ;

    if(isset($_idedit)){
        $dataDosen[]=$_idedit ;
        $this->dosen->update($dataDosen) ;
    }else{
        $this->dosen->save($dataDosen) ;
    }

    redirect(base_url().'index.php/dosen/view?id='.$nidn, 'refresh') ;
    }

    public function edit(){
        $id = $this->input->get('id');
        $this->load->model("dosen_model","dosen");
        $dsnedit = $this->dosen->findById($id);

        $data['judul']='Update Dosen';
        $data['dsnedit']=$dsnedit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/update',$data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $_id = $this->input->get('id');
        $this->load->model("dosen_model", "dosen");
        $this->dosen->delete($_id);
        redirect(base_url().'index.php/dosen', 'refresh');
    }

}
?>
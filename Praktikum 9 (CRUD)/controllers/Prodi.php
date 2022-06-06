<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi extends CI_Controller {

    public function index(){
    //     $this->load->model('Prodi_model', 'prodi') ;
    //     $list_prodi = $this->prodi->getAll();
    //     $data ['list_prodi'] = $list_prodi ;
    //     $this->load->view('layout/header') ;
    //     $this->load->view('layout/sidebar') ;
    //     $this->load->view('prodi/index', $data) ;
    //     $this->load->view('layout/footer') ;

    $this->load->model('prodi_model','prodi') ;
    
    $data['list_prodi'] =$this->prodi->getAll() ;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('prodi/index',$data);
        $this->load->view('layout/footer');
    }

    public function create(){
        $data['title'] = 'Form Kelola Program Studi' ;
        $this->load->view('layout/header') ;
        $this->load->view('layout/sidebar') ;
        $this->load->view('prodi/create', $data) ;
        $this->load->view('layout/footer') ;
    }

    public function save(){
        $this->load->model("prodi_model","prodi");

        $_kode = $this->input->post('kode');
        $_nama= $this->input->post('nama');
        $_ketua = $this->input->post('kaprodi');
        $_idedit = $this->input->post('idedit');

        $dt_prodi[]=$_kode;
        $dt_prodi[]=$_nama;
        $dt_prodi[]=$_ketua;

        if(isset($_idedit)){
            $dt_prodi[]=$_idedit; 
            $this->prodi->update($dt_prodi) ;   
        }else{ 
            $this->prodi->save($dt_prodi) ;   
        }
        
        redirect(base_url().'index.php/prodi/view?id='.$_kode, 'refresh');

    }

    public function view(){
        $_kode = $this->input->get('id');
        $this->load->model("prodi_model","prodi");
        $data['prd']=$this->prodi->findById($_kode);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('prodi/view',$data);
        $this->load->view('layout/footer');
    }

    public function edit(){
        $_id = $this->input->get('id');
        $this->load->model("prodi_model","prodi");
        $prdedit = $this->prodi->findById($_id);

        $data['title'] = 'Form Update Program Studi' ;
        $data['prdedit']=$prdedit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('prodi/update',$data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $_id = $this->input->get('id');
        $this->load->model("prodi_model","prodi");
        $this->prodi->delete($_id);
        redirect(base_url().'index.php/prodi', 'refresh');
    }
}


?>
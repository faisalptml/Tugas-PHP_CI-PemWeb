<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {
     
     public function index(){
          $data = [] ;
          $this->load->view('registrasi',$data) ;
     }

     public function save(){
          $this->load->model("user_model","user") ;
          
          $_username = $this->input->post('username') ;
          $_email = $this->input->post('email') ;
          $_password= $this->input->post('password') ;
          $_confirm_password = $this->input->post('confirm_password') ;
          $_role = $this->input->post('role') ;
         $idedit = $this->input->post('idedit') ; //hidden field

     //     array
     $data_user[] = $_username ;
     $data_user[] = $_email ;
     $data_user[] = $_password ;
     $data_user[] = $_role ;

     if(isset($idedit)){
          // update data
          $data_user[] = $idedit ;
          $this->user->update($data_user) ;
     }else{
          // save data
          $this->user->registrasi($data_user) ;
     }

     redirect(base_url().'index.php/login') ;
     }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function index(){
        $this->load->model('user_model','user');
        $list_user = $this->user->getAll();

        $data['list_user'] = $list_user;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('user/index',$data);
        $this->load->view('layout/footer');
    }
}
<?php 
 class User_model extends CI_Model{

     private $table = "user" ;
     
     public function getAll(){
         $query = $this->db->get($this->table);
         return $query->result() ;
     }

     public function findById($id){
  
         $this->db->where('id',$id);
         $query = $this->db->get($this->table);
         return $query->row() ;
     } 

     public function login($Uname,$pass){
         $sql =  "SELECT * FROM user WHERE username=? and password=MD5(?)" ;
         $data = [$Uname,$pass] ;
         $query = $this->db->query($sql,$data) ;
         return $query->row() ;
     }

     public function registrasi($data){
        //INSERT INTO user (id, username, password, email, role, created_at, last_login)
        //VALUES (default, 'mahasiswa2', MD5('12345'), 'mahasiswa2@sttnf.ac.id', 'MEMBER', now(), now());
        $sql = "INSERT INTO user 
        (id, username, email, password, role, created_at, last_login)
        VALUES (default,?,?,MD5(?),?,now(),now())" ;
        $this->db->query($sql, $data) ;
     }
}
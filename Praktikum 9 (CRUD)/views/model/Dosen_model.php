<?php
    class Dosen_model extends CI_Model{

        private $table = 'dosen' ;

        public function getAll(){
            $querry = $this->db->get($this->table) ;
            return $querry->result() ;
        }

        public function findById($id){
            $this->db->where('nidn', $id) ;
            $querry = $this->db->get($this->table) ;
            return $querry->row() ;
        }

        public function save($data){
            $sql = "INSERT INTO dosen
         (nidn,nama,gender,tgl_lahir,tmp_lahir,pendidikan_akhir,prodi_kode)
           VALUES (?,?,?,?,?,?,?)";
        $this->db->query($sql,$data);
        }

        public function update($data){
         $sql = "UPDATE dosen SET nidn=?,nama=?,gender=?,tgl_lahir=?,tmp_lahir=?,pendidikan_akhir=?,prodi_kode=? WHERE nidn=?";
         $this->db->query($sql,$data) ;
        }

        public function delete($id){
            $sql = "delete from dosen where nidn=?";
            $this->db->query($sql,array($id));
        }


        // public $nidn ;
        // public $nama ;
        // public $gender;
        // public $pendidikan ;
        // public $prodi ;

        }
?>
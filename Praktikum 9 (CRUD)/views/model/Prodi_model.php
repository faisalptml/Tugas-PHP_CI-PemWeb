<?php
    class Prodi_model extends CI_Model{

        private $table = 'prodi' ;

        public function getAll(){
            $querry = $this->db->get($this->table ) ;
            return $querry->result() ;
        }

        public function findById($id){
            $this->db->WHERE('kode',$id) ;
            $querry = $this ->db->get($this->table) ;
            return $querry->row() ;
        }

        public function save($data){
            $sql = "INSERT INTO prodi 
         (kode,nama,kaprodi)
           VALUES (?,?,?)";
        $this->db->query($sql,$data);
        }

        public function update($data){
            $sql = "UPDATE prodi SET kode=?,nama=?,kaprodi=? WHERE kaprodi=?";
         $this->db->query($sql,$data) ;
        }

        public function delete($id){
            $sql = "delete from prodi where kode=?";
            $this->db->query($sql,array($id));
        }

    }
?>
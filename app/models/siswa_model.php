<?php

class siswa_model extends Controller {
    private $table = 'student';
    private $stmt;
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }

    
    public function getAllSiswa() {
        $this->db->query('SELECT * FROM '.$this->table);
        return $this->db->resultSet();
    }
    
        public function getSiswaById($id) {
            $this->db->query('SELECT * FROM '.$this->table.' WHERE id=:id');
            $this->db->bind('id', $id);
            return $this->db->single();
        }
      
        public function tambahDataSiswa(){
            $query = "INSERT INTO student VALUES ('', :nama, :nis, :umur)";
            $this->db->query($query);
            $this->db->bind('nama', $_POST['nama']);
            $this->db->bind('nis', $_POST['nis']);
            $this->db->bind('umur', $_POST['umur']);
            $this->db->execute();
            return $this->db->rowCount();
        }

        public function deleteSiswaById($id) {
            $query = "DELETE FROM ".$this->table." WHERE id=:id";
            $this->db->query($query);
            $this->db->bind('id', $id);
            $this->db->execute();
            return $this->db->rowCount();
        }

        public function updateDataSiswa(){
            $query = "UPDATE student SET nama=:nama, nis=:nis, umur=:umur WHERE id=:id";
            $this->db->query($query);
            $this->db->bind('id', $_POST['id']);
            $this->db->bind('nama', $_POST['nama']);
            $this->db->bind('nis', $_POST['nis']);
            $this->db->bind('umur', $_POST['umur']);
            $this->db->execute();
            return $this->db->rowCount();
        }


}

?>
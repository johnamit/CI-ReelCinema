<?php
class MovieinfoModel extends CI_Model{
    public function retrieveMovieinfo($moviename){
        $sql = "SELECT * FROM Movieinfo WHERE Name='{$moviename}'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
}
?>
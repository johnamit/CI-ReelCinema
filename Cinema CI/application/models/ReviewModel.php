<?php
class ReviewModel extends CI_Model{
    public function addReview($Forename, $Surname, $Email, $Message, $Moviename){
        $sql = "INSERT INTO Reviews(Forename, Surname, Email, Message, Moviename) VALUES('{$Forename}','{$Surname}','{$Email}','{$Message}','{$Moviename}')";
        $query = $this->db->query($sql);
    }

    public function retrieveReview($Moviename){
        $sql = "SELECT * FROM Reviews WHERE Moviename='{$Moviename}'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
?>
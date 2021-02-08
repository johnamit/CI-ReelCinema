<?php
class RegisterModel extends CI_Model{
    public function registerUser($forename, $surname, $email, $password){
        $sql = "INSERT INTO User(forename, surname, email, password) VALUES('{$forename}','{$surname}','{$email}','{$password}')";
        $query = $this->db->query($sql);
    }

    
}
?>
<?php
class RegisterModel extends CI_Model{
    public function registerUser($forename, $surname, $email, $password){
        $hashPass = sha1($password);
        $sql = "INSERT INTO User(forename, surname, email, password) VALUES('{$forename}','{$surname}','{$email}','{$hashPass}')";
        $query = $this->db->query($sql);
    }
    
}
?>
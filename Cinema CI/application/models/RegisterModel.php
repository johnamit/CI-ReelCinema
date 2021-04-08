<?php
class RegisterModel extends CI_Model{
    public function registerUser($forename, $surname, $email, $password){
        $hashPass = sha1($password);
        $sql = "INSERT INTO Userinfo(forename, surname, email, password) VALUES('{$forename}','{$surname}','{$email}','{$hashPass}')";
        $query = $this->db->query($sql);
    }
    
    public function checkRegister($email){
        $sql = "SELECT email FROM Userinfo WHERE email = '{$email}'";
        $query = $this->db->query($sql);
        $resultCount = $query->num_rows();

        if($resultCount == 1){
            return true;
        }else{
            return false;
        }
    }
}
?>
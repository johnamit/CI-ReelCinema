<?php
class LoginModel extends CI_Model{
    public function retrieveName($email){
        $sql = "SELECT forename FROM User WHERE email = '{$email}'";
        $query = $this->db->query($sql);
        $nameArray = $query->result();
        $result = $nameArray[0];
        return $result->forename;
    }

    public function checkLogin($email,$password){
        $hashPass = sha1($password);
        $sql = "SELECT email, password FROM User WHERE email = '{$email}' AND password = '{$hashPass}'";
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

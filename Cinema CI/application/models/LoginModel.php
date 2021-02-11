<?php
class LoginModel extends CI_Model{
    public function LoginUser($email, $password){
        $sql = " SELECT email, password FROM user WHERE email ='{$email}' AND password ='{$password}' ";
        $query = $this->db->query($sql);
    }

    public function checkLogin($email,$password){
        $sql = "SELECT email, password FROM Users WHERE email = '{$email}' AND password = '{$password}'";
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

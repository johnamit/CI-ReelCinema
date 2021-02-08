<?php
class LoginModel extends CI_Model{
    public function LoginUser($email, $password){
        $sql = " SELECT email, password FROM user WHERE email ='{$email}' AND password ='{$password}' ";
        $query = $this->db->query($sql);
    }

    
}
?>

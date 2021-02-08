<?php 
class Users_model extends CI_Model{
    public function checkLogin($username,$pass){
        $hashPass = sha1($pass);
        $sql = "SELECT username, password FROM Users WHERE username = '{$username}' AND password = '{$hashPass}'";
        $query = $this->db->query($sql);
        $resultCount = $query->num_rows();

        if($resultCount == 1){
            return true;
        }else{
            return false;
        }
    }

    public function follow($follower,$followed){
        $sql = "INSERT INTO User_Follows(follower_username, followed_username) VALUES ('{$follower}','{$followed}')";
        $query = $this->db->query($sql);
    }

    public function isFollowing($follower,$followed){
        $sql = "SELECT follower_username, followed_username FROM User_Follows WHERE follower_username = '{$follower}' AND followed_username = '{$followed}'";
        $query = $this->db->query($sql);
        $resultCount = $query->num_rows();

        if($resultCount == 1){
            return true;
        }else{
            return false;
        }
    }

    public function checkUser($name){
        $sql = "SELECT username FROM Users WHERE username = '{$name}'";
        $query = $this->db->query($sql);
        $resultCount = $query->num_rows();

        if($resultCount == 1){
            return true;
        }else{
            return false;
        }
    }

}
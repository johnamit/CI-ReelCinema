<?php
class LoginModel extends CI_Model{
    public function retrieveName($email){
        $sql = "SELECT forename FROM Userinfo WHERE email = '{$email}'";
        $query = $this->db->query($sql);
        $nameArray = $query->result();
        $result = $nameArray[0];
        return $result->forename;
    }

    public function retrieveLastname($email){
        $sql = "SELECT surname FROM Userinfo WHERE email = '{$email}'";
        $query = $this->db->query($sql);
        $nameArray = $query->result();
        $result = $nameArray[0];
        return $result->surname;
    }

    public function checkLogin($email,$password){
        $hashPass = sha1($password);
        $sql = "SELECT email, password FROM Userinfo WHERE email = '{$email}' AND password = '{$hashPass}'";
        $query = $this->db->query($sql);
        $resultCount = $query->num_rows();

        if($resultCount == 1){
            return true;
        }else{
            return false;
        }
    }

    public function retrieveEmail($name){
        $sql = "SELECT email FROM Userinfo WHERE email = '{$name}'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    public function postBookingHistory($email, $forename, $surname, $moviename, $date, $time, $screen, $seat){
        $sql = "INSERT INTO Booking(Email, Forename, Surname, Moviename, Date, Time, Screen, Seat) VALUES('{$email}', '{$forename}', '{$surname}', '{$moviename}', '{$date}', '{$time}', '{$screen}', '{$seat}')";
        $query = $this->db->query($sql);
    }

    public function retrieveBookingHistory($checkEmail){
        $sql = "SELECT * FROM Booking WHERE email = '{$checkEmail}'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
?>

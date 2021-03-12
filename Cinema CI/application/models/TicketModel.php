<?php
class TicketModel extends CI_Model{
    public function retrieveTicketinfo(){
        $sql = "SELECT * FROM Ticketinfo";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function retrieveDay($Moviename){
        $sql = "SELECT DISTINCT StringDate, Date FROM Timeselection WHERE Moviename='{$Moviename}' ORDER BY Date";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function retrieveTime($Moviename){
        $sql = "SELECT DISTINCT StringDate, Time, TIME_FORMAT(Time, '%H %i') as TimeHI FROM Timeselection WHERE Moviename='{$Moviename}'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

}
?>
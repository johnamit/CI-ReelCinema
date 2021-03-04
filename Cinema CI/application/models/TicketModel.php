<?php
class TicketModel extends CI_Model{
    public function retrieveTicketinfo(){
        $sql = "SELECT * FROM Ticketinfo";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function retrieveTimeselection($Moviename){
        $sql = "SELECT DISTINCT Date FROM Timeselection WHERE Moviename='{$Moviename}' ORDER BY Date";
        $query = $this->db->query($sql);
        return $query->result_array();
    }


    
}
?>
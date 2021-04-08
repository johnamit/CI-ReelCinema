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

    public function retrieveSeatCount(){
        $sql = "SELECT SUM(Seatcount) as SeatSum FROM Basket";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function retrieveScreen($Moviename, $Date, $Time){
        $sql = "SELECT Screen FROM Timeselection WHERE Moviename='{$Moviename}' AND Date='{$Date}' AND Time='{$Time}'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function bookedSeats($Moviename, $Date, $Time){
        $sql = "SELECT Seat FROM Booking WHERE Moviename='{$Moviename}' AND Date='{$Date}' AND Time='{$Time}'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
?>
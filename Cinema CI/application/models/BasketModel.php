<?php
class BasketModel extends CI_Model{
    public function addToBasket($Moviename, $Ticket, $Price, $Seatcount, $Day, $Time){
        $sql = "INSERT INTO Basket(Moviename, Ticket, Price, Seatcount, Day, Time) VALUES('{$Moviename}','{$Ticket}','{$Price}','{$Seatcount}','{$Day}','{$Time}')";
        $query = $this->db->query($sql);
    }

    public function retrieveBasketCount(){
        //Change to basket
        $sql = "SELECT COUNT(*) as rowCount FROM Basket";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function clearBasket(){
        $sql = "DELETE FROM Basket";
        $query = $this->db->query($sql);
    }

    public function addbillingpayment($Forename, $Surname, $Email, $Cost, $Cardnumber, $CVC){
        $sql = "INSERT INTO Paymentinfo(Forename, Surname, Email, Cost, Cardnumber, Cvc) VALUES('{$Forename}','{$Surname}','{$Email}','{$Cost}','{$Cardnumber}','{$CVC}')";
        $query = $this->db->query($sql);
    }

    public function checkoutCost(){
        $sql = "SELECT SUM(Price) as totalCost FROM Basket";
        $query = $this->db->query($sql);
        $row = $query->row();
        return $row->totalCost;
    }
}
?>
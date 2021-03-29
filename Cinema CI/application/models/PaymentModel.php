<?php
class PaymentModel extends CI_Model{
    public function addToPayment($Forename, $Surname, $Email, $Cardnumber){
        $sql = "INSERT INTO Paymentinfo(Forename, Surname, Email, Cardnumber) VALUES('{$Forename}','{$Surname}','{$Email}','{$Cardnumber}')";
        $query = $this->db->query($sql);
    }

    public function retrievepaymentinfo(){
        $sql = "SELECT * FROM Paymentinfo";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function removeFromPayment(){
        $sql = "DELETE FROM Paymentinfo";
        $query = $this->db->query($sql);
    }

}
?>
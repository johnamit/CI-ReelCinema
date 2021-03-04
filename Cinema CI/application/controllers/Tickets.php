<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tickets extends CI_Controller{
    public function ticketdetails($Moviename){
        $this->load->model('TicketModel');
        $data['ticketinfo'] = $this->TicketModel->retrieveTicketinfo();
        $data['timeselectioninfo'] = $this->TicketModel->retrieveTimeselection($Moviename);
        $this->load->view('TicketSelectionView', $data);
    }
}

?>
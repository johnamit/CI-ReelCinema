<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tickets extends CI_Controller{
    public function ticketdetails($Moviename, $Time, $Day){
        $this->session->set_userdata('parseMoviename', $Moviename);
        $this->session->set_userdata('parseTime', $Time);
        $this->session->set_userdata('parseDay', $Day);
        
        $this->load->model('TicketModel');
        $data['ticketinfo'] = $this->TicketModel->retrieveTicketinfo();

        $this->load->model('BasketModel');
        $data['basketcount'] = $this->BasketModel->retrieveBasketCount();
        
        $this->load->view('TicketSelectionView', $data);
    }
}

?>
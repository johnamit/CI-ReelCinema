<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Basket extends CI_Controller{
    public function basketfunction($Ticket, $Price, $Seatcount){
        $Moviename = $this->session->userdata('parseMoviename');
        $Moviename = str_replace("%20"," ",$Moviename);
        $Ticket = str_replace("%20"," ",$Ticket);
        $Time = $this->session->userdata('parseTime');
        $Day = $this->session->userdata('parseDay');
        $this->load->model('BasketModel');
        $this->BasketModel->addToBasket($Moviename, $Ticket, $Price, $Seatcount, $Day, $Time);
        $data['basketcount'] = $this->BasketModel->retrieveBasketCount();

        $this->load->model('TicketModel');
        $data['ticketinfo'] = $this->TicketModel->retrieveTicketinfo();
        $this->load->view('TicketSelectionView', $data);
    }

    public function checkoutfunction(){
        if ($this->session->has_userdata('name')){
            $Loggedinname = $this->session->userdata('name');
            $this->load->model('LoginModel');
            $data['checkoutEmail'] = $this->LoginModel->retrieveEmail($Loggedinname);
            $this->load->view('CheckoutView', $data);
        }
        else{
            $this->load->view('CheckoutView');  
        }
    }

}
?>
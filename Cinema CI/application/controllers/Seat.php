<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seat extends CI_Controller{
    public function storeseats(){
        $javSeats = $this->input->post('seatString');
        $this->session->set_flashdata('seats', $javSeats);
    }
}
?>
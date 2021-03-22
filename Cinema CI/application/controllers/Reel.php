<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reel extends CI_Controller{
    public function nav($currUser){
        $this->load->view('ReelNav');
    }

    // Billing -----------------------------------------------------------------
    public function billing(){
        $this->load->view("ReelBilling");
    }

    public function payment(){
        $this->load->view("ReelPayment");
    }


    // Tickets -----------------------------------------------------------------
    public function tickets(){
        $this->load->model('TicketModel');
        $data['ticketinfo'] = $this->TicketModel->retrieveTicketinfo();

        $this->load->model('BasketModel');
        $data['basketitems'] = $this->BasketModel->retrieveBasket();
        $data['basketcount'] = $this->BasketModel->retrieveBasketCount();
        $data['subtotal'] = $this->BasketModel->retrieveSubtotal();
        
        $this->load->view('ReelTickets', $data);
    }

    public function ticketdetails($Moviename, $Time, $Day){
        $this->session->set_userdata('parseMoviename', $Moviename);
        $this->session->set_userdata('parseTime', $Time);
        $this->session->set_userdata('parseDay', $Day);

        redirect('reel/tickets');
    }


    public function basketaddfunction($Ticket, $Price, $Seatcount){
        $Moviename = $this->session->userdata('parseMoviename');
        $Moviename = str_replace("%20"," ",$Moviename);
        $Ticket = str_replace("%20"," ",$Ticket);
        $Time = $this->session->userdata('parseTime');
        $Day = $this->session->userdata('parseDay');

        $this->load->model('BasketModel');
        $this->BasketModel->addToBasket($Moviename, $Ticket, $Price, $Seatcount, $Day, $Time);

        redirect('reel/tickets');
    }

    public function basketremovefunction($Moviename, $Ticket){
        $Moviename = str_replace("%20"," ",$Moviename);
        $Ticket = str_replace("%20"," ",$Ticket);
        
        $this->load->model('BasketModel');
        $this->BasketModel->removeTicket($Moviename, $Ticket);

        redirect('reel/tickets');
    }



    // home -----------------------------------------------------------------
    public function home(){
        $this->load->model('BasketModel');
        $this->BasketModel->clearBasket();

        $this->load->view('ReelHomeView');
    }



    // Films -----------------------------------------------------------------
    public function film(){
        $this->load->view('ReelFilmView');
    }

    public function filmpage($name){
        $name = str_replace("%20"," ",$name);
        $this->load->model('MovieinfoModel');
        $data['results'] = $this->MovieinfoModel->retrieveMovieinfo($name);
        $this->load->model('TicketModel');
        $data['showdays'] = $this->TicketModel->retrieveDay($name);
        $data['showtimes'] = $this->TicketModel->retrieveTime($name);
        $this->load->view('ReelFilmPageView',$data);
    }




    // Login -----------------------------------------------------------------
    public function login(){
        $this->load->view('ReelLogin');
    }

    public function dologin(){
        $this->session->unset_userdata('email');
        $this->load->model('LoginModel');

        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password','Password','required');

        $checkResult = $this->LoginModel->checkLogin($email, $password);

        
        if($this->form_validation->run() == false){
            redirect('reel/login');
        }
        else if($checkResult == false){
            redirect('reel/login');
        }
        else{ 
            $sessionUser = $this->LoginModel->retrieveName($email);
            $this->session->set_userdata('name',$sessionUser);
            redirect('reel/home');
        }
    }



    // Register -----------------------------------------------------------------
    public function register(){
        $this->load->view('ReelRegister');
    }

    public function doregister(){
        $this->load->model('RegisterModel');
        $forename = $this->input->post('forename');
        $surname = $this->input->post('surname');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $confirmPass = $this->input->post('confirmpass');
        if($password == $confirmPass){
            $sendUserDetails = $this->RegisterModel->registerUser($forename, $surname, $email, $password);
            redirect('reel/home');
        }
        else{
            redirect('reel/register');
        }
    }



    // Logout -----------------------------------------------------------------
    public function logout(){
        $this->session->unset_userdata('name');
        redirect('reel/home');
    }


    // Seats -----------------------------------------------------------------
    public function seats(){
        $this->load->model('TicketModel');
        $data['maxseats'] = $this->TicketModel->retrieveSeatCount();
        $this->load->view('ReelSeats',$data);
    }
}
?>
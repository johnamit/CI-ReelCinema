<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reel extends CI_Controller{
    public function nav($currUser){
        $this->load->view('ReelNav');
    }

    // Footer -------------------------------------------------------------------
    public function footer(){
        $this->load->view('ReelFooter');
    }

    // Booking History -------------------------------------------------------------
    public function bookingprocess(){
        $emailParse = $this->input->post('emailParse');
        $forenameParse = $this->input->post('forenameParse');
        $surnameParse = $this->input->post('surnameParse');
        $movienameParse = $this->input->post('movienameParse');
        $dateParse = $this->input->post('dateParse');
        $timeParse = $this->input->post('timeParse');
        $screenParse = $this->input->post('screenParse');
        $seatParse = $this->input->post('seatParse');

        $this->load->model('LoginModel');
        $this->LoginModel->postBookingHistory($emailParse, $forenameParse, $surnameParse, $movienameParse, $dateParse, $timeParse, $screenParse, $seatParse);

        $this->load->model('PaymentModel');
        $this->PaymentModel->removeFromPayment();
        redirect('reel/home');
    }

    public function booking(){
        $checkEmail = $this->session->userdata('sessionEmail');
        $this->load->model('LoginModel');
        $data['bookinginfo'] = $this->LoginModel->retrieveBookingHistory($checkEmail);
        if($this->session->has_userdata('name')){
            $this->load->view('ReelBookingHistory', $data);
        }
        else{
            redirect('reel/login');
        }
    }

    public function historyCheck($Forename, $Surname, $Moviename, $Time, $Date, $Screen, $Seat){
        $this->session->set_userdata('historyForename', $Forename);
        $this->session->set_userdata('historySurname', $Surname);
        $this->session->set_userdata('historyMoviename', $Moviename);
        $this->session->set_userdata('historyTime', $Time);
        $this->session->set_userdata('historyDay', $Date);
        $this->session->set_userdata('historyScreen', $Screen);
        $this->session->set_userdata('historySeats', $Seat);
        
        $this->load->view('ReelHistoryConfirmation');
    }

    // Confirmation -----------------------------------------------------------------
    public function confirmation(){
        $this->load->view('ReelConfirmation');
    }

    // Billing -----------------------------------------------------------------

    public function checkout(){
        $this->form_validation->set_rules("forename","Forename","required|alpha");
        $this->form_validation->set_rules("surname","Surname","required|alpha");
        $this->form_validation->set_rules("email","Email","required|valid_email");

        $this->form_validation->set_rules("cardname","Cardholder name","required|regex_match[/^[a-zA-Z ]*$/]");
        $this->form_validation->set_rules("cardnumber","Card number","required|numeric|exact_length[16]");
        $this->form_validation->set_rules("expiry","Expiration date","required|numeric|exact_length[4]");
        $this->form_validation->set_rules("cvc","CVC","required|numeric|min_length[3]|max_length[4]");

        $Seats = $this->input->post('seatselection');
        $Seats = str_replace(",",", ",$Seats);

        if(empty($Seats) == false){
            $this->session->set_userdata('parseSeats', $Seats);
        }
          
        $Moviename = $this->session->userdata('parseMoviename');
        $Moviename = str_replace("%20"," ",$Moviename);
        $this->load->model('MovieinfoModel');
        $data['movieinfo'] = $this->MovieinfoModel->retrieveMovieinfo($Moviename);
        $this->load->model('BasketModel');
        $data['subtotal'] = $this->BasketModel->retrieveSubtotal();

        if($this->form_validation->run() == FALSE){
            $this->load->view('ReelCheckout', $data);
        }
        else{
            $Forename = $this->input->post('forename');
            $Surname = $this->input->post('surname');
            $Email = $this->input->post('email');
            $Cardnumber = $this->input->post('cardnumber');
            if(empty($Forename) == false && empty($Surname) == false){
                $this->session->set_userdata('parseForename', $Forename);
                $this->session->set_userdata('parseSurname', $Surname);
                $this->session->set_userdata('parseEmail', $Email);
            }
            $this->load->model('PaymentModel');
            $this->PaymentModel->removeFromPayment();
            $this->PaymentModel->addToPayment($Forename, $Surname, $Email, $Cardnumber);
            $this->load->view('ReelConfirmation', $data);
        }
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
        $this->load->model('BasketModel');
        $this->BasketModel->clearBasket();

        $this->load->view('ReelFilmView');
    }

    public function filmpage($name){
        $name = str_replace("%20"," ",$name);
        $this->load->model('MovieinfoModel');
        $data['results'] = $this->MovieinfoModel->retrieveMovieinfo($name);
        $this->load->model('TicketModel');
        $data['showdays'] = $this->TicketModel->retrieveDay($name);
        $data['showtimes'] = $this->TicketModel->retrieveTime($name);
        $this->load->model('ReviewModel');
        $data['reviews'] = $this->ReviewModel->retrieveReview($name);
        $this->load->view('ReelFilmPageView',$data);
    }

    public function reviewfunction(){
        $reviewMoviename = $this->session->userdata('reviewMoviename');

        $reviewMoviename = str_replace("%20"," ",$reviewMoviename);

        if($this->session->has_userdata('name')){
            $reviewerForename = $this->session->userdata('name');
            $reviewerSurname = $this->session->userdata('lastname');
            $reviewerEmail = $this->session->userdata('sessionEmail');
        }
        else{
            $reviewerForename = "Guest";
            $reviewerSurname = "User";
            $reviewerEmail = " ";
        }
        $reviewMessage = $this->input->post('reviewfield');

        $this->load->model('ReviewModel');
        $this->ReviewModel->addReview($reviewerForename, $reviewerSurname, $reviewerEmail, $reviewMessage, $reviewMoviename);

        redirect('reel/filmpage/'.$reviewMoviename);
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
            $sessionUserSurname = $this->LoginModel->retrieveLastname($email);
            $this->session->set_userdata('name',$sessionUser);
            $this->session->set_userdata('lastname',$sessionUserSurname);
            $this->session->set_userdata('sessionEmail',$email);
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
            $checkResult = $this->RegisterModel->checkRegister($email);
            if(checkResult == false){
                $this->RegisterModel->registerUser($forename, $surname, $email, $password);
                redirect('reel/home');
            }
            else{
                redirect('reel/login');
            }
        }
        else{
            redirect('reel/register');
        }
    }



    // Logout -----------------------------------------------------------------
    public function logout(){
        $this->session->unset_userdata('name');
        $this->session->unset_userdata('lastname');
        $this->session->unset_userdata('sessionEmail');
        redirect('reel/home');
    }


    // Seats -----------------------------------------------------------------
    public function seats(){
        $Moviename = $this->session->userdata('parseMoviename');
        $Moviename = str_replace("%20"," ",$Moviename);
        $Time = $this->session->userdata('parseTime');
        $Day = $this->session->userdata('parseDay');

        $this->load->model('TicketModel');
        $data['maxseats'] = $this->TicketModel->retrieveSeatCount();
        $data['screenno'] = $this->TicketModel->retrieveScreen($Moviename,$Day,$Time);
        $data['bookedseats'] = $this->TicketModel->bookedSeats($Moviename,$Day,$Time);
        $this->load->view('ReelSeats',$data);
    }
}
?>
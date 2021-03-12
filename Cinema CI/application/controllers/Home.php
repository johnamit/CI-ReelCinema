<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
    public function homepage(){
        $this->load->view('HomepageView');
    }

    public function userhome($sessionUser){
        $userobj = new stdClass();
        $userobj->name = $sessionUser;
        $this->load->view('Userhome',$userobj);
    }

    public function canceltonowshowing(){
        $this->load->model('BasketModel');
        $this->BasketModel->clearBasket();
        if($this->session->has_userdata('parseMoviename') and $this->session->has_userdata('parseTime') and $this->session->has_userdata('parseDay')){
            $this->session->unset_userdata('parseMoviename');
            $this->session->unset_userdata('parseTime');
            $this->session->unset_userdata('parseDay');
        }
        $this->load->view('NowShowingView');
    }

    public function nowshowing(){
        $this->load->view('NowShowingView');
    }

    public function comingsoon(){
        $this->load->view('ComingSoonView');
    }

    public function login(){
        $this->load->view('LoginView');
    }

    public function register(){
        $this->load->view('RegisterView');
    }

    public function moviepageone(){
        $this->load->view('MoviePageOneView');
    }

    public function errorpage(){
        $this->load->view('ErrorPageView');
    }

    public function checkout(){
        $this->load->view('CheckoutView');
    }

    public function proceedtoconfirmation(){
        $Forename = $this->input->post('forename');
        $Surname = $this->input->post('surname');
        $Email = $this->input->post('email');
        $Cardnumber = $this->input->post('cardnumber');
        $CVC = $this->input->post('cvc');

    


        $this->load->model('BasketModel');
        $Cost = $this->BasketModel->checkoutCost();
        $this->BasketModel->addbillingpayment($Forename, $Surname, $Email, $Cost, $Cardnumber, $CVC);
        $this->BasketModel->clearBasket();
        $this->load->view('ErrorPageView');
    }

    public function index(){   
    
    $this->form_validation->set_rules('forename','Forename','alpha');
    $this->form_validation->set_rules('surname','Surname','alpha');
    $this->form_validation->set_rules('email','Email','valid_emails');
    $this->form_validation->set_rules('cardnumber','Cardnumber','numeric');
    $this->form_validation->set_rules('cvc','Cvc','numeric');

    if ($this->load->form_validation->runs() == FALSE){
        $this->load->view('form');
    }
    else
    {
        echo "Validation Successful, Please Continue";
    }


}

    public function seating(){
        $this->load->view('SeatPageView');
    }

}

?>






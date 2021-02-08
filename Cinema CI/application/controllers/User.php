<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
    public function register(){
        $this->load->view('RegisterView');
    }

    public function doregister(){
        $this->load->model('RegisterModel');
        $forename = $this->input->post('forename');
        $surname = $this->input->post('surname');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        
        $sendUserDetails = $this->RegisterModel->registerUser($forename, $surname, $email, $password);
        redirect('user/home');
    }
}

?>
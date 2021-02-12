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
        redirect('home/homepage');
    }

    public function login(){
        $this->load->view('LoginView');
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
            $this->load->view('LoginView');
        }
        else if($checkResult == false){
            $this->load->view('LoginView');
        }
        else{ 
            $this->session->set_userdata('email',$email);
            redirect('home/homepage');
        }
    }
}

?>
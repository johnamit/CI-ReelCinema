<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
    /*public function view($name){
        $this->load->model('Messages_model');
        $data = $this->Messages_model->getMessagesByPoster($name);
        $MessagesData = array("results" => $data);
        $this->load->view('ViewMessages', $MessagesData);  
    } */

    public function view($name){
        $this->load->model('Users_model');
        $this->load->model('Messages_model');
        $currentUser = $this->session->userdata('username');
        $following = $this->Users_model->isFollowing($currentUser, $name);
        
        $data['user'] = $name;
        $data['results'] = $this->Messages_model->getMessagesByPoster($name);
        
        if($currentUser != $name && $following == false){
            $data['FButton'] = true;
        }
        $this->load->view('ViewMessages', $data);
    }
    
    public function login(){
        $this->load->view('Login');
    }

    public function dologin(){
        $this->session->unset_userdata('username');
        $this->load->model('Users_model');

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        
        $checkResult = $this->Users_model->checkLogin($username, $password);

        if($this->form_validation->run() == false){
            $this->load->view('Login');
        }
        else if($checkResult == false){
            $this->load->view('Login');
        }
        else{ 
            $this->session->set_userdata('username',$username);
            redirect('user/view/'.$this->session->userdata('username'));
        }
    }

    public function logout(){
        $this->session->unset_userdata('username');
        redirect('user/login');
    }

    public function follow($followed){
        $follower = $this->session->userdata('username');
        $this->load->model('Users_model');
        $this->Users_model->follow($follower,$followed);
        redirect('user/view/'.$followed);
    }

    public function feed($name){
        $this->load->model('Messages_model');
        $data['results'] = $this->Messages_model->getFollowedMessages($name);
        $this->load->view('ViewMessages', $data);
    }

}   
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
    public function homepage(){
        $this->load->view('HomepageView');
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

?>
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
}

?>
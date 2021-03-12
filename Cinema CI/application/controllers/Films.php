<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Films extends CI_Controller{
    public function thesimpsonsmovie(){
        $this->load->model('MovieinfoModel');
        $data['results'] = $this->MovieinfoModel->retrieveMovieinfo("The Simpsons Movie");
        $this->load->model('TicketModel');
        $data['showdays'] = $this->TicketModel->retrieveDay("The Simpsons Movie");
        $data['showtimes'] = $this->TicketModel->retrieveTime("The Simpsons Movie");
        $this->load->view('MoviePageView', $data);
    }

    public function frozen(){
        $this->load->model('MovieinfoModel');
        $data['results'] = $this->MovieinfoModel->retrieveMovieinfo("Frozen");
        $this->load->model('TicketModel');
        $data['showdays'] = $this->TicketModel->retrieveDay("Frozen");
        $data['showtimes'] = $this->TicketModel->retrieveTime("Frozen");
        $this->load->view('MoviePageView', $data);
    }

    public function avengersendgame(){
        $this->load->model('MovieinfoModel');
        $data['results'] = $this->MovieinfoModel->retrieveMovieinfo("Avengers Endgame");
        $this->load->model('TicketModel');
        $data['showdays'] = $this->TicketModel->retrieveDay("Avengers Endgame");
        $data['showtimes'] = $this->TicketModel->retrieveTime("Avengers Endgame");
        $this->load->view('MoviePageView', $data);
    }

    public function interstellar(){
        $this->load->model('MovieinfoModel');
        $data['results'] = $this->MovieinfoModel->retrieveMovieinfo("Interstellar");
        $this->load->model('TicketModel');
        $data['showdays'] = $this->TicketModel->retrieveDay("Interstellar");
        $data['showtimes'] = $this->TicketModel->retrieveTime("Interstellar");
        $this->load->view('MoviePageView', $data);
    }

    public function thewolfofwallstreet(){
        $this->load->model('MovieinfoModel');
        $data['results'] = $this->MovieinfoModel->retrieveMovieinfo("The Wolf of Wall Street");
        $this->load->model('TicketModel');
        $data['showdays'] = $this->TicketModel->retrieveDay("The Wolf of Wall Street");
        $data['showtimes'] = $this->TicketModel->retrieveTime("The Wolf of Wall Street");
        $this->load->view('MoviePageView', $data);
    }

    public function kingsmanthegoldencircle(){
        $this->load->model('MovieinfoModel');
        $data['results'] = $this->MovieinfoModel->retrieveMovieinfo("Kingsman The Golden Circle");
        $this->load->model('TicketModel');
        $data['showdays'] = $this->TicketModel->retrieveDay("Kingsman The Golden Circle");
        $data['showtimes'] = $this->TicketModel->retrieveTime("Kingsman The Golden Circle");
        $this->load->view('MoviePageView', $data);
    }

    public function babydriver(){
        $this->load->model('MovieinfoModel');
        $data['results'] = $this->MovieinfoModel->retrieveMovieinfo("Baby Driver");
        $this->load->model('TicketModel');
        $data['showdays'] = $this->TicketModel->retrieveDay("Baby Driver");
        $data['showtimes'] = $this->TicketModel->retrieveTime("Baby Driver");
        $this->load->view('MoviePageView', $data);
    }

    public function americanpsycho(){
        $this->load->model('MovieinfoModel');
        $data['results'] = $this->MovieinfoModel->retrieveMovieinfo("American Psycho");
        $this->load->model('TicketModel');
        $data['showdays'] = $this->TicketModel->retrieveDay("American Psycho");
        $data['showtimes'] = $this->TicketModel->retrieveTime("American Psycho");
        $this->load->view('MoviePageView', $data);
    }




    public function bohemianrhapsody(){
        $this->load->model('MovieinfoModel');
        $data['results'] = $this->MovieinfoModel->retrieveMovieinfo("Bohemian Rhapsody");
        $this->load->view('MoviePageViewCS', $data);
    }

    public function creed(){
        $this->load->model('MovieinfoModel');
        $data['results'] = $this->MovieinfoModel->retrieveMovieinfo("Creed");
        $this->load->view('MoviePageViewCS', $data);
    }

    public function djangounchained(){
        $this->load->model('MovieinfoModel');
        $data['results'] = $this->MovieinfoModel->retrieveMovieinfo("Django Unchained");
        $this->load->view('MoviePageViewCS', $data);
    }

    public function shrek(){
        $this->load->model('MovieinfoModel');
        $data['results'] = $this->MovieinfoModel->retrieveMovieinfo("Shrek");
        $this->load->view('MoviePageViewCS', $data);
    }

    public function silenceofthelambs(){
        $this->load->model('MovieinfoModel');
        $data['results'] = $this->MovieinfoModel->retrieveMovieinfo("Silence of the Lambs");
        $this->load->view('MoviePageViewCS', $data);
    }

    public function thetheoryofeverything(){
        $this->load->model('MovieinfoModel');
        $data['results'] = $this->MovieinfoModel->retrieveMovieinfo("The Theory of Everything");
        $this->load->view('MoviePageViewCS', $data);
    }
    
    public function thegreatestshowman(){
        $this->load->model('MovieinfoModel');
        $data['results'] = $this->MovieinfoModel->retrieveMovieinfo("The Greatest Showman");
        $this->load->view('MoviePageViewCS', $data);
    }
}

?>

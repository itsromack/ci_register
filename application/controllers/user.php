<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
    public function index() {
        $this->load->view('index');
    }

    public function register() {
        $this->load->view('register');
    }

    public function forgot() {
        $this->load->view('forgot');
    }

    public function login() {
        $this->load->view('login');
    }

    public function dashboard() {
        $this->load->view('dashboard');
    }
}


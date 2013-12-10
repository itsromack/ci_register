<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
    public function show($page) {
        $this->load->view('includes/header');
        $this->load->view($page);
        $this->load->view('includes/footer');
    }

    public function index() {
        $this->show('index');
    }

    public function register() {
        $this->show('register');
    }

    public function forgot() {
        $this->show('forgot');
    }

    public function login() {
        $this->show('login');
    }

    public function dashboard() {
        $this->show('dashboard');
    }
}


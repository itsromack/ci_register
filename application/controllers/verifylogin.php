<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user', '', TRUE);
    }

    public function index() {
        $this->load->libary('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Passowd', 'trim|required|xss_clean');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('header');
            $this->load->view('login');
            $this->load->view('footer');
        } else {
            redirect('dashboard', 'refresh');
        }
    }

}


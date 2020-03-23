<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/auth_header');
        $this->load->view('auth/login');
        $this->load->view('templates/auth_footer');
    }

    public function lupa_akun()
    {
        $this->load->view('templates/auth_header');
        $this->load->view('auth/lupa_akun');
        $this->load->view('templates/auth_footer');
    }
}

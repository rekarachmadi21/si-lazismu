<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('home/home');
    }

    public function pemasukan()
    {
        $this->load->view('home/pemasukan');
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Dashboard";
        $data['pegawai'] = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();
        if ($data['pegawai']['level'] == 1) {
            $this->load->view('Admin/dashboard', $data);
        } else if ($data['pegawai']['level'] == 2) {
            $this->load->view('Karyawan/dashboard', $data);
        } else {
            redirect('auth');
        }
    }


    public function Pemasukan()
    {
        $data['title'] = "Pemasukan";
        $data['pegawai'] = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();
        if ($data['pegawai']['level'] == 1) {
            $this->load->view('Admin/Pemasukan', $data);
        } else if ($data['pegawai']['level'] == 2) {
            $this->load->view('Karyawan/Pemasukan', $data);
        } else {
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-success" role="alert"><center>Kamu telah keluar!</center></div></div>');
        redirect('auth');
    }
}

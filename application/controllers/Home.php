<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

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
            if ($this->form_validation->run() == false) {
                $this->load->view('Admin/Pemasukan', $data);
            } else {
                echo "sukses";
            }
        } else if ($data['pegawai']['level'] == 2) {
            $this->load->view('Karyawan/Pemasukan', $data);
        } else {
            redirect('auth');
        }
    }

    public function Pengeluaran()
    {
        $data['title'] = "Pengeluaran";
        $data['pegawai'] = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();
        if ($data['pegawai']['level'] == 1) {
            $this->load->view('Admin/Pengeluaran', $data);
        } else if ($data['pegawai']['level'] == 2) {
            $this->load->view('Karyawan/Pengeluaran', $data);
        } else {
            redirect('auth');
        }
    }

    public function DataPemasukan()
    {
        $data['title'] = "Data Pemasukan";
        $data['pegawai'] = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();
        if ($data['pegawai']['level'] == 1) {
            $this->load->view('Admin/DataPemasukan', $data);
        } else if ($data['pegawai']['level'] == 2) {
            $this->load->view('Karyawan/DataPemasukan', $data);
        } else {
            redirect('auth');
        }
    }

    public function DataPengeluaran()
    {
        $data['title'] = "Data Pengeluaran";
        $data['pegawai'] = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();
        if ($data['pegawai']['level'] == 1) {
            $this->load->view('Admin/DataPengeluaran', $data);
        } else if ($data['pegawai']['level'] == 2) {
            $this->load->view('Karyawan/DataPengeluaran', $data);
        } else {
            redirect('auth');
        }
    }

    public function KasBesar()
    {
        $data['title'] = "Kas Besar";
        $data['pegawai'] = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();
        if ($data['pegawai']['level'] == 1) {
            $this->load->view('Admin/KasBesar', $data);
        } else if ($data['pegawai']['level'] == 2) {
            $this->load->view('Karyawan/KasBesar', $data);
        } else {
            redirect('auth');
        }
    }

    public function KasKecil()
    {
        $data['title'] = "Kas Kecil";
        $data['pegawai'] = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();
        if ($data['pegawai']['level'] == 1) {
            $this->load->view('Admin/KasKecil', $data);
        } else if ($data['pegawai']['level'] == 2) {
            $this->load->view('Karyawan/KasKecil', $data);
        } else {
            redirect('auth');
        }
    }

    public function Profil()
    {
        $data['title'] = "Kas Kecil";
        $data['pegawai'] = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();
        if ($data['pegawai']['level'] == 1) {
            $this->load->view('Admin/Profil', $data);
        } else if ($data['pegawai']['level'] == 2) {
            $this->load->view('Karyawan/Profil', $data);
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
